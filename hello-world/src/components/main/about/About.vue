<template>
       <div class="container-fluid">
            <div class="about_main_wrapper">
                <div class="container">
                    <div class="about_main">
                        <div class="row">



                           <div v-for="data in abouts" :key="data.id" class="col-12 col-sm-6 col-md-3" style="filter:drop-shadow(0px 8px 18px rgba(0, 0, 0, 0.07));background: #fff; margin-top: 20px;">
                                <img :src="getImage(data.image)" alt="">
                                <h4>{{data.name}}</h4>
                                <p style="font-size:15px;"><strong>Agent: </strong>Luksuzno - Luxury Real Estate</p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>  mirjana@luksuzno.com</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> {{data.phone}}</p>
                                <p><a :href="data.link_in"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><a href="#">Full Details</a></p>
                                
                            </div>

                           
                        </div>
                    </div>

                    <div class="about_us">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                            <h4>ABOUT US - EVERYTHING WE TOUCH TURNS TO SOLD</h4>
                            <p>Luksuzno - elite real estate agency that professionally and discreetly offers for sale, rent or exchange, luxury real estate in all elite and attractive locations in: Croatia, Montenegro, Bosnia and Herzegovina, Greece, Cyprus, Maldives, France ... Most of our offer is not published anywhere and is offered exclusively directly to potential buyers or tenants. This form of our business strategy delights our clients and we respect it. In the realization of purchase, lease or exchange, we are maximally engaged and provide support from the first to the last step. Property types: luxury apartments, luxury villas, business premises, offices, residential buildings, office buildings, industrial buildings, castles, luxury hotels, clinics, shops, warehouses, companies, business ideas, shopping malls, camps, islands, new projects, lands for family houses, building lands for luxury villas, building lands for luxury hotels, building land for office buildings in the business zone along the main roads of the capitals ... Construction: new construction, newer construction (up to 10 years), old building, completely renovated, partially renovated, for demolition or completely new projects. We offer properties that are: ideal for investors, ideal for housing, ideal for tourism, ideal for holidays or in an ideal position for business ... Luxury real estate in the first row to the sea. Luxury real estate with sea view. Luxury real estate on a hill. Luxury real estate in the city center. Luxury real estate in the business zone. Luxury real estate in isolated locations. Luxury real estate in the continental region, coastal region, island region and mountain region. We are sure we have exactly what you want to buy, rent or exchange, just as we are sure we have someone to offer your property to. The only condition for a quick realization is a realistic market price.</p>
                            
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
</template>

<script>
import axios from 'axios';
export default {
     data(){
        return{
            
             abouts:[],
        }
    },
    methods:{

        getImage(image){
            return process.env.VUE_APP_API_URL+'/'+image;
        },
         aboutget(){
            try{
                 console.log('ok');

                    axios.get('/api/agent')
                    .then(res =>{
                       this.abouts = res.data.agent;
                       
                    })

                //  const abouts = await axios.get('/api/agent');
                //  console.log(abouts);
                //  this.abouts = abouts.data.agent;
            }catch(error){

            }
        }
    },

    created(){
        this.aboutget();
    },

 

   
}
</script>

<style>
.about_main{
    overflow: hidden;
    margin-top: 30px;
}

.about_main img{
    width:100%;
}

.about_main p a{
    text-decoration: none;
    color: black;
}

.about_main p a:last-child{
    float: right;
    padding: 10px;
    background: #ddd;
}
.about_main p i.fa-linkedin-square{
    font-size: 33px;
    padding: 5px;

}



.about_main h4{
    margin-top: 10px;
}

.about_us{
    margin-top: 20px;
}

.about_us h4{
    color: brown;
    text-align: center;
    margin: 10px 0;
}
</style>