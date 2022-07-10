<template>
    <div>
        <form action="#" class="my-6 mx-auto max-w-2xl px-4">
           <AddressFieldGroup
           v-model:street="form.deliveryAddress.street"
            v-model:streetNumber="form.deliveryAddress.streetNumber" 
            v-model:postcode="form.deliveryAddress.postcode"   
            v-model:city="form.deliveryAddress.city"   
            v-model:country="form.deliveryAddress.country"    

            />
        </form>
    </div>
</template>


<script>
import {ref} from 'vue';
import AddressFieldGroup from '@/components/layout/search/AddressGroup.vue'
export default {
    components:{
        AddressFieldGroup
    },
    setup() {
        const form = ref({
            deliveryAddress:{
                street:'',
                streetNumber:'',
                postcode:'',
                city:'',
                country:''

            }
        });

        return {form};
    },
}
</script>