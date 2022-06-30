<template>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-title" :class="{'contact_section_title_m': contactWidth}">
                    <h3>Contact</h3>
                    <p>Home / Contact</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 form-contact-wrapper" style="background:#f5f5f5;">
                <form action="" method="post">
                    <div class="form-group">
                        <input style="display:block; width:100%; padding-left:10px;" type="text" name="username" v-model="form.username" id="username" placeholder="Your name and surename*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input style="display:block; width:100%; padding-left:10px;"  type="email" name="email" id="email" v-model="form.email" placeholder="Your Email*" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input style="display:block; width:100%; padding-left:10px;"  type="tel" name="phone" id="phone" v-model="form.phone" placeholder="Your Phone Number*" class="form-control" required >
                    </div>


                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="10" v-model="form.message" class="form-control" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <p>This site is protected by reCAPTCHA and the Google <span>Privacy Policy</span> and <span>Terms of Service</span> apply. By submitting this form I accept <span>Terms of use</span></p>
                    </div>
                    <div class="form-group">
                        <button class="btn w-100" :class="{'contact-form-button': contactWidth}">Save</button>
                    </div>

                </form>
            </div>

             <div class="col-12 col-sm-12 col-md-6 contact-wrapper-right" :class="{'contact_form_right_m': contactWidth}">
                <div class="mobile">
                    <h3>Mobile Numbers: </h3>
                    <p>+385 91 310 8888(WhatsApp, Viber)</p>
                    <p>+385 99 206 4444 (WhatsApp, Viber)</p>
                </div>
                <div class="contact">
                    <h3>Contact Address: </h3>
                    <p>Luksuzno Ltd. Luxury Real Estate Croatia,<br>
10000 Zagreb, B. Adžije 5</p>
                </div>

                <div class="working">
                    <h3>Working Hours:</h3>
                    <p>Monday Friday: 9 17 hours <br>   
                    Saturday: Only By Appointment <br>
                    Sunday: Only By Appointment</p>
                </div>

                <div class="map" style="height:265px; overflow:hidden;">
                     <GoogleMap api-key="AIzaSyDHDmzYhDx3eLGS-WFobnapHpUA8JfTAoA" style="width: 100%; height: 500px" :center="center" :zoom="15">
                        <Marker :options="{ position: center }" />
                    </GoogleMap>
                </div>
            </div>


            <div class="col-12 col-sm-12 col-md-12 related-property-section" :class="{'related_porperty_section': contactWidth}">
                <div class="row">
                    <div class="col-12 div col-md-3"></div>

                    <div class="col-6 col-sm-4 col-md-3 single_property_view">
                        <img src="@/assets/home/ad1.jpg" alt="">
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 single_property_view">
                        <img src="@/assets/home/sh1.jpg" alt="">
                    </div>
                    <div class="col-12 div col-md-3"></div>

                </div>
            </div>

        </div>
    </div>

</template>

<script>
import { GoogleMap, Marker } from "vue3-google-map";
export default {
    setup() {
         const center = { lat: 40.689247, lng: -74.044502 };
         return { center };
    },
   
    components:{
        GoogleMap,
        Marker
    },
     data(){
        return{
            form:{
                username:null,
                email:null,
                phone:null,
                message:null
            },

             contactWidth:false,
        }
    },

    mounted(){
      if(this.$windowWidth <= 520){
            this.contactWidth = true;
            }
    }

   
}
</script>



<style lang="scss" scoped>


    .contact-title{
        padding: 15px 0;
        background: #f8f8f8;
        h3{
                font-weight: 700;
            font-size: 18px;
            line-height: 18px;
            color: #231F20;
        }
        p{
                font-weight: 500;
                font-size: 15px;
                line-height: 18px;
                color: #231F20;
        }
    }

    .form-contact-wrapper{
        background: #f5f5ff;
        input{
            font-family: 'Lato';
            height: 45px;
            font-size: 15px;
            color: #929292;
        }

        p{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 275;
            font-size: 15px;
            line-height: 28px;
            span{
                 font-weight: 800;
            }
        }

        button{
            width: 536px;
            height: 43.5px;
            background: #E4192B;
            border-radius: 70px;
            font-family: 'Lato';
            font-style: normal;
            font-weight: 800;
            font-size: 17px;
            line-height: 20px;
            text-align: center;
            text-transform: uppercase;
            color: #FFFFFF;

        }
    }


    .contact-wrapper-right{
        margin-top: -30px;
        padding-left: 130px;
        h3{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            line-height: 28px;
        }
        p{
             font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 28px;
        }
    }


    .related-property-section{
        margin-top: 100px;
        .single_property_view{
            overflow: hidden;

            img{
                // width: 100%;
                padding: 5px;
            }
        }
       
    }



    


   
</style>


<style>



.contact_section_title_m{
    padding-left: 15px !important;
}

.contact-form-button{
    width: 100% !important;
    margin-bottom: 30px !important;
}
.contact_form_right_m{
    padding-left: 16px !important;
}

.related_porperty_section{
    padding-left: 40px !important;
    margin-top: 40px !important;
}



</style>