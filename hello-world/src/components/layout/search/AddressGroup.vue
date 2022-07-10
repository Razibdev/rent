<template>
    <div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h3>{{label}}</h3>
            </div>
            <div class="col-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <label for="street">Address</label>
                    <input type="text"
                        @input="$emit('update:street', $event.target.value)"
                        :value="street"
                        ref="streetRef"
                        placeholder="Address"
                        class="form-control"
                       />
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="street">Number</label>
                    <input type="text"
                        @input="$emit('update:streetNumber', $event.target.value)"
                        :value="streetNumber"
                        placeholder="Number"
                        class="form-control"
                       />
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="street">Postcode</label>
                    <input type="text"
                        @input="$emit('update:postcode', $event.target.value)"
                        :value="postcode"
                        placeholder="PostCode"
                         class="form-control"
                       />
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="street">City</label>
                    <input type="text"
                        @input="$emit('update:city', $event.target.value)"
                        :value="city"
                        placeholder="City"
                         class="form-control"
                       />
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="street">Country</label>
                    <input type="text"
                        @input="$emit('update:country', $event.target.value)"
                        :value="country"
                        placeholder="Country"
                         class="form-control"
                       />
                </div>
            </div>






        </div>
    </div>
</template>

<script>
import {onMounted, onUnmounted, ref} from 'vue';
export default {

    props:{
        label:{
            type:String,
            default:''
        },
        street:{
            type:String,
            default:''
        },

        streetNumber:{
            type:String,
            default:''
        },
        postcode:{
            type:String,
            default:''
        },

        city:{
            type:String,
            default:''
        },

        country:{
            type:String,
            default:''
        }
    },
    setup(props, context) {
        
        const streetRef = ref();
        let autocomplete;
        onMounted(()=>{
             autocomplete = new google.maps.places.Autocomplete(streetRef.value, {
            types:["address"],
            fields:["address_components"]
        });

        google.maps.event.addListener(autocomplete, "place_changed", ()=>{
            console.log(autocomplete.getPlace());

            const mapping = {
                street_number: "update:streetNumber",
                route: "update:street",
                locality: "update:city",
                postal_code: "update:postcode",
                country: "update:country",
            }

            for(const type in mapping){
                context.emit(mapping[type], "");
            }

            let place = {
                address_components:[],
                ...autocomplete.getPlace()
            }
            place.address_components.forEach((component) =>{
                component.types.forEach((type) =>{
                    if(mapping.hasOwnProperty(type)){
                        context.emit(mapping[type], component.long_name);
                    }
                });
            });

            });



        });

        onUnmounted(() =>{
            // 
            if(autocomplete){
                google.maps.event.clearInstanceListeners(autocomplete);
            }
        })
        return {streetRef};
        
    },
}
</script>