<template>
  
        <!-- <div v-for="pro in porse" :key="pro">{{pro}}</div> -->
       
          <div class="carousel-item" v-for="(goal, i) in pop" :key="i" :class="{'active': i==0}">
            <img  class="d-block w-100" :src="getimage(goal)" alt="">
             <div class="carousel-caption d-none d-md-block">
              </div>
          </div>

          
         <!-- <div>
        <div class="carousel-item" v-for="(goal, i) in pop" :key="i">
            <img  class="d-block w-100" :src="getimage(goal)" alt="">
                 <div class="carousel-caption d-none d-md-block">
                   </div>
          </div>
         </div> -->
   
</template>

<script>
export default {
    props:['part'],
    data(){
        return{
            porse:null,
            pop:[]
        }
    },
    methods:{
        getimage(image){
            
            let img = image.substring(1);
            let imgs = img.slice(0,-1);
             return process.env.VUE_APP_API_URL+'/property/upload_image/'+imgs;
        }
    },
    mounted(){
       this.porse = this.part.substring(1)
        this.porse = this.porse.slice(0,-1);
        this.pop = this.porse.split(/[ ,]+/);
        console.log( this.pop)

        
    }
}
</script>