<template>
    <div>
       <div class="container-fluid">
            <div class="property_main_wrapper">
                <div class="container">
                    <div class="property_main">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-8">
                                <h4>aksimir, luxury apartment, garage, parking, for sale</h4>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4">
                                <h4 class="title_right">ID: 123444</h4>
                            </div>
                        </div>
                    </div>

                    <div class="perperty_single">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="image_single">
                                    <img  :src="src0" alt="">
                                </div>
                                <div class="row" style="padding:5px 15px">
                                    <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img class="slider_image_single" @click="changeImage(src2)" :src="src2" alt="">
                                    </div>
                                     <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img  class="slider_image_single" @click="changeImage(src3)" :src="src3" alt="">
                                    </div>

                                     <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img  class="slider_image_single" @click="changeImage(src1)" :src="src1" alt="">
                                    </div>

                                    <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img  class="slider_image_single" @click="changeImage(src2)"  :src="src2" alt="">
                                    </div>
                                     <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img  class="slider_image_single" @click="changeImage(src3)"  :src="src3" alt="">
                                    </div>

                                     <div class="col-2 col-sm-2 col-md-2 slide_small_image">
                                        <img  class="slider_image_single" @click="changeImage(src1)"  :src="src1" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Type
                                                <span class="badge-pill">Apartment</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Luxury
                                                <span class="badge-pill">Yes</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Region
                                                <span class="badge-pill">Continental</span>
                                            </li>


                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Country
                                                <span class="badge-pill">City Zagred</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                City
                                                <span class="badge-pill">Zagreb</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Neigborhood
                                                <span class="badge-pill">Maksimir</span>
                                            </li>

                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Street
                                                <span class="badge-pill"> Maksimirska</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
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
                                            </li>


                                        </ul>
                                    </div>

                                    <div class="col-6 col-sm-6 col-md-6">
                                      <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Offer
                                            <span class="badge-pill">Sale</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Extra Label
                                            <span class="badge-pill">For Investors</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Property Area
                                            <span class="badge-pill">250m <sup>2</sup></span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Lot Area
                                           <span class="badge-pill">250m <sup>2</sup></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Living Room 
                                            <span class="badge-pill">Separate</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                           Bedrooms
                                            <span class="badge-pill">5</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Garage
                                            <span class="badge-pill">3</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Parvate Parking
                                            <span class="badge-pill">2</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                           Usage
                                           <span class="badge-pill">Residential</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
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
                                    <a class="nav-link active" data-toggle="tab" href="#duck" role="tab" aria-controls="duck" aria-selected="true">Duck</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#chicken" role="tab" aria-controls="chicken" aria-selected="false">Chicken</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kiwi" role="tab" aria-controls="kiwi" aria-selected="false">Kiwi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">Emu</a>
                                </li>
                                </ul>
                                
                                <div class="tab-content mt-3">
                                <div class="tab-pane active" id="duck" role="tabpanel" aria-labelledby="duck-tab">
                                    Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.   

                                   <p> Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.   </p>

                                    <p>Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.</p>   

                                   <p> Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water. 
                                    </p>


                                   <p> Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.</p>   

                                    <p>Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.</p>   

                                    <p>Duck is the common name for a large number of species in the waterfowl family Anatidae which also includes swans and geese. Ducks are mostly aquatic birds, mostly smaller than the swans and geese, and may be found in both fresh water and sea water.</p>   
                                </div>
                                <div class="tab-pane " id="chicken" role="tabpanel" aria-labelledby="chicken-tab">
                                    The chicken (Gallus gallus domesticus) is a type of domesticated fowl, a subspecies of the red junglefowl. It is one of the most common and widespread domestic animals, with a total population of more than 19 billion as of 2011. There are more chickens in the world than any other bird or domesticated fowl.   
                                </div>
                                <div class="tab-pane" id="kiwi" role="tabpanel" aria-labelledby="kiwi-tab">
                                    Kiwi or kiwis are flightless birds native to New Zealand, in the genus Apteryx and family Apterygidae. Approximately the size of a domestic chicken, kiwi are by far the smallest living ratites (which also consist of ostriches, emus, rheas, and cassowaries), and lay the largest egg in relation to their body size of any species of bird in the world.            
                                </div>
                                    <div class="tab-pane" id="emu" role="tabpanel" aria-labelledby="emu-tab">
                                    The emu (Dromaius novaehollandiae) is the second-largest living bird by height, after its ratite relative, the ostrich. It is endemic to Australia where it is the largest native bird and the only extant member of the genus Dromaius.             
                                    </div>
                                </div> 

                                <div class="details">
                                    <h5>Details</h5>
                                    <hr>
                                   <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6">
                                         <ul class="list-group">
                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Lift
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Alarm 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> City water supply 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Location permit
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Garden
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Gym
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Balcony/Loggia
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Smart home
                                        </li>
                                    
                                    </ul>
                                    </div>

                                    <div class="col-6 col-sm-6 col-md-6">
                                         <ul class="list-group">
                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Lift
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Alarm 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> City water supply 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Location permit
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Garden
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Gym
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Balcony/Loggia
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Smart home
                                        </li>
                                    
                                    </ul>
                                    </div>
                                   </div>
                                </div> 

                                 <div class="near_by">
                                    <h5>Near By</h5>
                                    <hr>
                                  
                                    <div class="col-6 col-sm-6 col-md-6" style="padding: 0px 0px;">
                                         <ul class="list-group">
                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Elementary school
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Eindergarden 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Shops 
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Food store
                                        </li>

                                        <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Garden
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Gym
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Balcony/Loggia
                                        </li>

                                         <li class="d-flex align-items-center">
                                         <i class="fa fa-check" aria-hidden="true"></i> Smart home
                                        </li>
                                    
                                    </ul>
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
                                    <form action="">
                                    <div class="form-group">
                                        <input style="display:block; cursor:text;  width:100%; height:40px; padding-left: 10px;" type="text" name="name" id="name" placeholder="Your name and surname*" class="form-control">
                                    </div>

                                     <div class="form-group">
                                        <input style="display:block; cursor:text; width:100%; height:40px; padding-left: 10px;" type="text" name="email" id="email" placeholder="Your Email* " class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input style="display:block;cursor:text;  width:100%; height:40px; padding-left: 10px;" type="tel" name="phone" id="phone" placeholder="Your Phone number " class="form-control">
                                    </div>

                                     <div class="form-group">
                                       <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
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
                                <h4>Related Properties</h4>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <img src="@/assets/home/related/related.png" alt="">
                                <p>Neque porro quisquam est qui dolorem ipsum ipse</p>
                            </div>

                             <div class="col-6 col-sm-6 col-md-3">
                                <img src="@/assets/home/related/related.png" alt="">
                                <p>Neque porro quisquam est qui dolorem ipsum ipse</p>
                            </div>

                             <div class="col-6 col-sm-6 col-md-3">
                                <img src="@/assets/home/related/related.png" alt="">
                                <p>Neque porro quisquam est qui dolorem ipsum ipse</p>
                            </div>

                             <div class="col-6 col-sm-6 col-md-3">
                                <img src="@/assets/home/related/related.png" alt="">
                                <p>Neque porro quisquam est qui dolorem ipsum ipse</p>
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
import image1 from '@/assets/home/property.jpg';
import image2 from '@/assets/home/property1.jpg';
import image3 from '@/assets/home/property2.jpg';


export default {
    setup() {
          const center = { lat: 40.689247, lng: -74.044502 };
         return { center };
    },

    data(){
        return{
            src0: image1,
            src1: image1,
            src2: image2,
            src3: image3,


        }
    },
    methods:{
        changeImage(image){
            this.src0 = image;
        }
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