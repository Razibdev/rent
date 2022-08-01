<template>
    <div>
       <!-- <loader v-if="loader" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" disableScrolling="false" name="dots"></loader> -->
       <div class="container-fluid" :class="{'loading_before':loader}">
            <div class="property_main_wrapper">
                <div class="container">
                    <div class="property_main">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-8">
                                <h4 :class="{'porperty_m_class':propertyWidth}">{{singleProList.property_title}}</h4>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <h4 :class="{'porperty_m_class_r':propertyWidth}" class="title_right">ID: {{singleProList.id_number}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="perperty_single" >
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="image_single">
                                    <img  :src="src0" alt="">
                                </div>
                                <div class="row" style="padding:5px 15px">


                                    <div v-for="imagec in pop" :key="imagec" class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img class="slider_image_single" @click="changeImage(imagec)" :src="getimages(imagec)" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Type
                                                <span class="badge-pill">{{capitalizeFirstLetter(singleProList.type)}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Luxury
                                                <span class="badge-pill">Yes</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Region
                                                <span class="badge-pill">{{capitalizeFirstLetter(singleProList.region)}}</span>
                                            </li>


                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Country
                                                <span class="badge-pill">{{singleProList.countries.name}}</span>
                                            </li>
                                            <li v-if="singleProList.city" class="list-group-item d-flex justify-content-between align-items-center">
                                                City
                                                <span class="badge-pill">{{singleProList.cities.name}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Neigborhood
                                                <span class="badge-pill">{{singleProList.neighbor.name}}</span>
                                            </li>

                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Street
                                                <span class="badge-pill"> {{singleProList.states.name}}</span>
                                            </li>
                                            <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Year of construction
                                                <span class="badge-pill">1999</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Year of renovation
                                                <span class="badge-pill">2019</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               By position
                                                <span class="badge-pill">Elite Part</span>
                                            </li> -->


                                        </ul>
                                    </div>

                                    <div class="col-6 col-sm-6 col-md-6">
                                      <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Offer
                                            <span class="badge-pill">{{singleProList.offer}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Extra Label
                                            <span class="badge-pill" v-if="singleProList.for_investor"> For Investors</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Property Area
                                            <span class="badge-pill">{{singleProList.property_area}}m <sup>2</sup></span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Lot Area
                                           <span class="badge-pill">{{singleProList.property_area_l}}m <sup>2</sup></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Living Room 
                                            <span class="badge-pill">{{singleProList.living_room}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                           Bedrooms
                                            <span class="badge-pill">{{singleProList.bedrooms}}</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Garage
                                            <span class="badge-pill">{{singleProList.garage}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Parvate Parking
                                            <span class="badge-pill">{{singleProList.parking}}</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                           Usage
                                           <span class="badge-pill">{{singleProList.usage}}</span>
                                        </li>
                                        <li v-if="singleProList.fully_furnished" class="list-group-item d-flex justify-content-between align-items-center">
                                            Furnished 
                                            <span class="badge-pill">Fully</span>
                                        </li>
                                       
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="property_descrption">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-9">
                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#duck" role="tab" aria-controls="duck" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#chicken" role="tab" aria-controls="chicken" aria-selected="false">Ground Plan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kiwi" role="tab" aria-controls="kiwi" aria-selected="false">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">PDF brochure</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#google_map" role="tab" aria-controls="google_map" aria-selected="false">Google Map</a>
                                </li>
                                </ul>
                                
                                <div class="tab-content mt-3">
                                <div class="tab-pane active" id="duck" role="tabpanel" aria-labelledby="duck-tab">
                                   

                                   <p>{{singleProList.property_description}}</p>

                                   
                                </div>
                                <div class="tab-pane " id="chicken" role="tabpanel" aria-labelledby="chicken-tab">
                                    The chicken (Gallus gallus domesticus) is a type of domesticated fowl, a subspecies of the red junglefowl. It is one of the most common and widespread domestic animals, with a total population of more than 19 billion as of 2011. There are more chickens in the world than any other bird or domesticated fowl.   
                                </div>

                                <div class="tab-pane" id="kiwi" role="tabpanel" aria-labelledby="kiwi-tab">
                                <video width="320" height="240" controls autoplay>
                                <source src="https://www.youtube.com/watch?v=Kvp1AW0VwGg&ab_channel=BanglaTechnicalKnowledge" type="video/mp4">
                                <!-- <source src="https://www.youtube.com/watch?v=n_HhXXTJHFg&list=PLm64fbD5OnxuObyOVSxcM0TUcBLDF2w64&ab_channel=Moshiur" type="video/ogg"> -->
                                Your browser does not support the video tag.
                                </video>       
                                </div>

                                    <div class="tab-pane" id="emu" role="tabpanel" aria-labelledby="emu-tab">
                                   <p><a :href="singleProList.pdf_file"  download = "file">Download PDF</a></p>            
                                    </div>


                                    <div class="tab-pane" id="google_map" role="tabpanel" aria-labelledby="google_map-tab">
                                    <GoogleMap api-key="AIzaSyDHDmzYhDx3eLGS-WFobnapHpUA8JfTAoA" style="width: 100%; height: 500px" :center="center" :zoom="15">
                                    <Marker :options="{ position: center }" />
                                </GoogleMap>             
                                    </div>
                                </div> 

                                <div class="details">
                                    <h5>Details</h5>
                                    <hr>
                                   <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6">
                                         <ul class="list-group">
                                        <li v-if="singleProList.lift" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Lift
                                        </li>

                                        <li v-if="singleProList.alarm" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Alarm 
                                        </li>

                                        <li v-if="singleProList.city_water_supply" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> City water supply 
                                        </li>

                                        <li  v-if="singleProList.location_permit" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Location permit
                                        </li>

                                        <li v-if="singleProList.garden" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Garden
                                        </li>

                                         <li v-if="singleProList.gym" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Gym
                                        </li>

                                         <li v-if="singleProList.balcony" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Balcony/Loggia
                                        </li>

                                         <li v-if="singleProList.smart_home" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Smart home
                                        </li>
                                    
                                    </ul>
                                    </div>

                                    <div class="col-6 col-sm-6 col-md-6">
                                         <ul class="list-group">
                                        <li v-if="singleProList.sauna" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Sauna
                                        </li>

                                        <li v-if="singleProList.guest_house" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Guest House 
                                        </li>

                                        <li v-if="singleProList.air_conditioning" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Air Conditioning
                                        </li>

                                        <li v-if="singleProList.security_door" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Security Door
                                        </li>

                                        <li v-if="singleProList.beachfront" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Beachfront
                                        </li>

                                         <li v-if="singleProList.seaview" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Seaview
                                        </li>

                                         <li v-if="singleProList.pedestrian_zone" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Pedestrian Zone
                                        </li>

                                         <li v-if="singleProList.elite_part" class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i>Elite Part
                                        </li>
                                    
                                    </ul>
                                    </div>
                                   </div>
                                </div> 

                                 
                            </div>
                              <div class="col-12 col-sm-12 col-md-3">
                                <div class="sidebar-title">
                                    <p>Contact Agent</p>
                                </div>
                                <div class="sidebar-image">
                                    <img src="@/assets/home/rectangle150.png" alt="" srcset="">
                                </div>
                                <div class="sidebar-form">
                                    <form action="#" @submit.prevent="contactAgent">
                                    <div class="form-group">
                                        <input style="display:block; cursor:text;  width:100%; height:40px; padding-left: 10px;" type="text" name="name" id="name" placeholder="Your name and surname*" class="form-control" v-model="form.username">
                                    </div>

                                     <div class="form-group">
                                        <input style="display:block; cursor:text; width:100%; height:40px; padding-left: 10px;" type="text" name="email" id="email" placeholder="Your Email* " class="form-control" v-model="form.email">
                                    </div>

                                    <div class="form-group">
                                        <input style="display:block;cursor:text;  width:100%; height:40px; padding-left: 10px;" type="tel" name="phone" id="phone" placeholder="Your Phone number " class="form-control" v-model="form.phone">
                                    </div>

                                     <div class="form-group">
                                       <textarea name="message" id="message" class="form-control" placeholder="Your Message" v-model="form.message"></textarea>
                                    </div>

                                    <div class="form-group">
                                       
                                        <p><input type="checkbox" name="checkbox" id="checkbox"> I accept Terms of Use and Privacy Policy *</p>
                                    </div>
                                    <div class="form">
                                        <button class="sidebar_button">SEND ENQUIRY</button>
                                    </div>
                                    </form>
                                 </div>

                                 <div class="add_section">
                                    <img src="@/assets/home/ads.png" alt="">
                                 </div>
                              </div>


                              
                        </div>
                    </div>
                    <div class="property_map" >
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                 <GoogleMap api-key="AIzaSyDHDmzYhDx3eLGS-WFobnapHpUA8JfTAoA" style="width: 100%; height: 500px" :center="center" :zoom="15">
                                    <Marker :options="{ position: center }" />
                                </GoogleMap>
                            </div>
                        </div>
                    </div>

                    <div class="relative_properties">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <h4> Related Properties</h4>
                            </div>

                            <div v-for="relatedP in propertyRelatedList" :key="relatedP.id" class="col-6 col-sm-6 col-md-3">
                                <img :src="getPropertyImage(relatedP.featured_imaged)" alt="">
                                <p> <router-link :to="'/property/' + relatedP.id">{{relatedP.property_title}}</router-link></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</template>

<script>
import { GoogleMap, Marker } from "vue3-google-map";
import axios from 'axios';

export default {
    // setup() {
    //       const center = { lat: 40.689247, lng: -74.044502 };
    //      return { center };
    // },

    data(){
        return{
            loader:true,
            singleProList:'',
            porse:null,
            porse:null,
            pop:[],
            propertyWidth:false,
            // src0: this.singleProList.featured_imaged,
            src0:'',
            propertyRelatedList:[],
            // center:{ lat: 40.689247, lng: -74.044502 }
            center:'',

              form:{
                username:null,
                email:null,
                phone:null,
                message:null
            },




        }
    },
    methods:{
         capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        },

        contactAgent(){
              Axios.post('/api/contact', this.form)
            .then(res =>{
                    this.form.username = null,
                    this.form.email = null,
                    this.form.phone = null,
                    this.form.message = null,
                    this.$toast.success('Contact Send Successfully');
            });
        },
        changeImage(image){

            let img = image.substring(1);
            let imgs = img.slice(0,-1);
            let imgse = '/property/upload_image/'+imgs;
            this.src0 = process.env.VUE_APP_API_URL+imgse
           
        },
        async singleProperty(){
          
              const id = this.$route.params.id;
              console.log(id);
            //    const data = await axios.get(`/api/property-single/${id}`);
                const data = await axios.get(`/api/property-single/${id}`);
                this.singleProList = data.data.property;
               

               this.porse = this.singleProList.upload_image.substring(1)
                this.porse = this.porse.slice(0,-1);
                this.pop = this.porse.split(/[ ,]+/);
                this.src0 = process.env.VUE_APP_API_URL+'/'+ this.singleProList.featured_imaged;
                
                const ids = this.singleProList.state;
                  
                const datas = await axios.get(`/api/property-related/${ids}`);
                this.propertyRelatedList = datas.data.property;
                console.log(this.propertyRelatedList)
                 this.loader = false;
                
          
        },

          getimages(image){
            
            let img = image.substring(1);
            let imgs = img.slice(0,-1);
             return process.env.VUE_APP_API_URL+'/property/upload_image/'+imgs;
        },

        getPropertyImage(image){
            return process.env.VUE_APP_API_URL+'/'+image;
        },

    
        
    },

    mounted(){
        
         let value = this.singleProList.google_map_position.split(/[ ,]+/);
        this.center = {lat : parseInt(value[0]), lng: parseInt(value[1])}
        console.log(this.center);
        
    },

    created(){
        this.singleProperty();

          if(this.$windowWidth <= 520){
            this.propertyWidth = true;
            }
        
    },
    computed:{
        // center(){
        //     // center:{ lat: 40.689247, lng: -74.044502 }
        //     let value = this.singleProList.google_map_position.split(/[ ,]+/);
        //     console.log(value[0], value[1]);
        //     return {lat : value[0], lng: value[1]}
        // }
    },

     components:{
        GoogleMap,
        Marker
    },
}
</script>

<style>
    /* .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #40bf4f !important; 
    } */

    .porperty_m_class{
        font-size: 25px;

    }

    .porperty_m_class_r{
        float:left !important;
        font-size: 25px  !important;
    }

    .loading_before{
        height: 100vh;
    }

    .sidebar-image{
        margin-bottom: 10px;
    }
    
    .near_by{
        margin-top: 20px;
    }
     .nav-item{
            background-color: #333333 !important;
            color: #fff;
           
        }
        .nav-item a{
            color: #fff;
        }

        .nav-item .nav-link.active{
            background: #E4192B;
            color: #fff;
        }


</style>

<style lang="scss" scope>
.property_map{
    margin-top: 20px;
}


.property_main{
    margin: 20px 0px;
    h4{
     font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-size: 29px;
    line-height: 35px;
    }

    .title_right{
        float: right;
    }
       
    }

.relative_properties{
        margin-top: 20px;
        h4{
            text-align: center;
            margin: 15px 0;
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 26px;
            line-height: 31px;
            text-align: center;
        }
        img{
            padding: 5px 0px;
            width: 100%;
        }
    }
    .add_section img{
        margin-top: 10px;
        width: 100%;
    }
    .sidebar_button{
        font-family: 'Lato';
        font-style: normal;
        font-weight: 900;
        font-size: 17px;
        line-height: 20px;
        text-align: center;
        text-transform: uppercase;
        width: 100%;
        height: 43.5px;
        background: #E4192B;
        border-radius: 70px;
        border: none;
        color: #fff;
    }
    .form-group{
        .form-control{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;
        }
    }
    .perperty_single{
        .image_single{
           img{
             width: 100%;
            height: 387px;
           }
        }
        .slider_image_single{
           width: 100%;
           height: 72px;
           cursor: pointer;
           
        }
        .slide_small_image{
            padding: 3px;
        }
        .list-group-item{
            padding: 0.45em 0.4em;
        }
       
    }
</style>