<template>
    <div>
         <div class="container-fluid">
          <div class="featured_real_ested_wrapper">
              <div class="container">
            <div class="featured_real_state_part">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4>Neighbouring Countries Property</h4>
                </div>

                <div v-for="neighbour in neighbouringlist" :key="neighbour.id"  class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" :src="InvestorImage(neighbour.featured_imaged)" alt="property">
                  <h5>{{neighbour.property_title}}</h5>
                  <button @click="singleProperty(neighbour.id)"><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

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
            neighbouringlist:[],
        }
    },
    methods:{

       async singleProperty(id){
               try{

                  this.$router.push({
                  path: '/property/'+id, 
              });

                }catch(error){

                }
          },

       InvestorImage(image){
          return process.env.VUE_APP_API_URL+'/'+image;
         },

       async neighbouring(){
         try{
              const id = this.$route.params.id;
               const data = await axios.get(`/api/property-neighbouring/${id}`);
                this.neighbouringlist = data.data.property;
               
            }catch(error){

            }
        }
    },
    created(){
       
         this.neighbouring();
    },
    mounted(){
      
    }
}
</script>




