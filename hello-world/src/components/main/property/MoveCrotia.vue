<template>
    <div>
         <div class="container-fluid">
          <div class="featured_real_ested_wrapper">
              <div class="container">
            <div class="featured_real_state_part">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4>MOVE IN CROATIA</h4>
                </div>

                <div v-for="neighbour in moveCrotiaList" :key="neighbour.id"  class="col-6 col-sm-4 col-md-3">
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
            moveCrotiaList:[],
        }
    },
    methods:{

       InvestorImage(image){
          return process.env.VUE_APP_API_URL+'/'+image;
         },

          async singleProperty(id){
               try{

                  this.$router.push({
                  path: '/property/'+id, 
              });

                }catch(error){

                }
          },

       async moveCrotia(){
         try{
              const id = this.$route.params.id;
               const data = await axios.get(`/api/properties/move-in-croatia`);
                this.moveCrotiaList = data.data.property;
               
            }catch(error){

            }
        }
    },
    created(){
       
         this.moveCrotia();
    },
    mounted(){
      
    }
}
</script>




