<template>
    <div>
         <div class="container">
              <div class="home_header_search">
               <div class="row">
                  <div class="col-12">
                       <div class="row">
                    <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px; height:50px;">
                       <div style="background:black; width:100%; padding:5px; margin-right:3px; " class="form-group">
                        <input type="checkbox" id="we_demand" v-model="selected.we_demand" value="1"> &nbsp;
                        <label for="we_demand" style="color:white">We Demand</label>
                       </div>
                     </div>
                     <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                        <div style="background:black; width:100%; padding:5px; margin-right:3px;" >
                          <input type="checkbox" v-model="selected.we_recommend" id="we_recommend" value="1"> &nbsp;
                          <label for="we_recommend" style="color:white">We Recommend</label>
                       </div>
                     </div>
                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style="background:black; width:100%; padding:5px; margin-right:3px;" >
                          <input type="checkbox" v-model="selected.featured" id="featured" value="1"> &nbsp;
                          <label for="featured" style="color:white">Featured</label>
                       </div>
                      </div>
                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                   <div style="background:black; width:100%; padding:5px; margin-right:3px;" class="form-group">
                          <input v-model="selected.for_investor" type="checkbox" id="for_investor" value="1"> &nbsp;
                          <label for="for_investor" style="color:white">For Investor</label>
                       </div>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px; height:50px;">
                       <div style="background:black; width:100%; padding:5px; margin-right:3px;" class="form-group">
                          <input v-model="selected.new_construction" type="checkbox" id="new_construction" value="1"> &nbsp;
                          <label for="new_construction" style="color:white">New Construction</label>
                       </div>
                      </div>
              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                      <div style=" width:100%; padding: -1px;  margin-right:3px;" >
                        <select id="type" v-model="selected.type" style="padding:5px;">
                          <option value="" selected disabled>Type</option>
                          <option value="Apartment">Apartment</option>
                          <option value="Villa">Villa</option>
                          <option value="House">House</option>
                          <option value="Building">Building</option>
                          <option value="Hotel">Hotel</option>
                          <option value="Shop">Shop</option>
                          <option value="Office">Office</option>
                          <option value="Camp">Camp</option>
                          <option value="Hall">Hall</option>
                          <option value="Family Farm">Family Farm</option>
                          <option value="Land">Land</option>
                          <option value="Island">Island</option>
                          <option value="Company">Company</option>
                          <option value="Business Idea">Business Idea</option>
                          <option value="Other">Other</option>
                    </select> 
                    </div>
                   </div>
                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="offer"  v-model="selected.offer" style="padding:5px;">
                        <option value="" selected disabled>Offer</option>
                         <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                        <option value="Demand">Demand</option>
                      
                      </select>
                      </div>
                   </div>
              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select  v-model="selected.luxury" id="luxury">
                        <option value="" selected disabled>Luxury</option>
                        <option value="Luxury Realty">Luxury Realty</option>
                        <option value="Not Luxurious">Not Luxurious</option>
                        <option value="All">All</option>
                      </select>
                    </div>
                    </div>
                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select  v-model="selected.about_price" id="about_price">
                         <option value="" selected disabled>About Price</option>
                          <option value="7 days Auctions">7 days Auctions</option>
                          <option value="Nagotiable">Nagotiable</option>
                          <option value="Fixed Price">Fixed Price</option>
                          <option value="Reduced Price">Reduced Price</option>
                          <option value="Hot Offer">Hot Offer</option>
                          <option value="Presale Price">Presale Offer</option>
                          <option value="Urgent">Urgent</option>
                          <option value="Special Price">Special Price</option>
                          <option value="Not Specified">Not Specified</option>
                          <option value="Secret Sale">Secret Sale</option>
                          <option value="All Prices">All Prices</option>
                      </select>
                      </div>
                     </div>

                 <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <!-- <select id="min_price">
                        <option value="hide">Min Price</option>
                        <option value="2010">2010</option>
                      </select> -->
                      <input type="text"  v-model="selected.min_price" class="form-control" placeholder="Min Price" />

                    </div>
                   </div>

                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                    <input type="text"  v-model="selected.max_price" class="form-control" placeholder="Max Price" />
                    </div>
                    </div>

                <!-- <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">

                      <select id="region"  v-model="selected.region" style="padding:5px;">
                       <option value="" selected disabled>Region</option>
                        <option value="Continental">Continental</option>
                        <option value="Coastal">Coastal</option>
                        <option value="Insular">Insular</option>
                        <option value="Mountain">Mountain</option>
                        <option value="All Regions">All Regions</option>
                      
                      </select>
                    </div>
                     </div> -->

                   <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="regionsc"  v-model="selected.region">
                         <option value="" selected disabled>Region</option>
                         <option value="Continental">Continental</option>
                        <option value="Coastal">Coastal</option>
                        <option value="Insular">Insular</option>
                        <option value="Mountain">Mountain</option>
                        <option value="All Regions">All Regions</option>
                      </select>
                      </div>
                     </div>

                 <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="state" v-model="selected.state">
                        <option value="" selected disabled>State</option>
                        <option value="2010">2010</option>
                      </select>
                    </div>
                  </div>

                 <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="city" v-model="selected.city">
                        <option value="" selected disabled>City</option>
                        <option value="2010">2010</option>
                      </select>
                    </div>
                 </div>

                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="neighborhood" v-model="selected.neighborhood">
                        <option value="" selected disabled> Neighborhood</option>
                        <option value="2010">2010</option>
                      </select>
                    </div>
                </div>


               <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                    <select id="min_rooms"  v-model="selected.min_rooms">
                        <option value="" selected disabled>Min Rooms</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select> 
                  </div>
               </div>

              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                      <select id="max_rooms" v-model="selected.max_rooms">
                        <option value="" selected disabled>Max rooms</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                  </div>
              </div>

              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text"  v-model="selected.id_number" class="form-control" placeholder="ID Number" />
                  </div>
              </div>

             <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text" class="form-control" placeholder="Keyword" v-model="selected.keyword" />
                  </div>
             </div>

              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text" class="form-control" placeholder="Min area m2" v-model="selected.min_area" />
                    </div>
              </div>

               <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:176px; padding:1px; margin-right:3px;" class="form-group">
                  
                       <input type="text" class="form-control" placeholder="Max area m2" v-model="selected.max_area" />
                  
                  </div>
               </div>
                      <!-- <div class="low_now_ok" :class="{'low_now_ok_mobile': homeWidth}" style="position: relative;
        display: inline; float: right;">
                        <button type="button" @click="advanced" class="search_button advanced_search">ADVANCED</button>

                        <button type="button"  class="search_button clear_search">CLEAR</button>

                        <button type="button" @click="bymapd" class="search_button bymap_search">ByMap</button>
                      </div> -->
                </div>
                  </div>
                </div>
              </div>

              <div class="row check-box-search" style="margin-top: 30px">
                  <div class="col-6 col-sm-6 col-md-3">
                    <div class="form-group">
                    <input type="checkbox" v-model="selected.new_project" id="new_project" value="1">
                    <label for="new_project">New Project</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" v-model="selected.for_exchange" value="1" id="for_exchange">
                    <label for="for_exchange">For Exchange</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="adapted_for_disabled"  v-model="selected.adapted_for_disabled" value="1" >
                    <label for="adapted_for_disabled">Adapted For Disabled</label>
                    </div>

                     <div class="form-group">
                        <input type="checkbox" id="paratialy_furnished"  v-model="selected.paratialy_furnished" value="1">
                        <label for="paratialy_furnished">Paratialy Furnished</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="unfurnished"  v-model="selected.unfurnished" value="1">
                        <label for="unfurnished">Unfurnished</label>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="garage" v-model="selected.garage" value="1">
                    <label for="garage">Garage</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="private_parking" v-model="selected.private_parking" value="1">
                    <label for="private_parking">Private Parking</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="lift_h" v-model="selected.lift" value="1">
                    <label for="lift_h">Lift</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="pool_h" v-model="selected.pool" value="1">
                    <label for="pool_h">Pool</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="balcony_h" v-model="selected.balcony" value="1">
                    <label for="balcony_h">Balcony Loggia Terrage</label>
                    </div>
                </div>



                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="beachfront_h" v-model="selected.beachfront" value="1">
                    <label for="beachfront_h">Beachfront</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="seaview_h" v-model="selected.seaview" value="1">
                    <label for="seaview_h">Seaview</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="downtown_h"  v-model="selected.downtown" value="1" >
                    <label for="downtown_h">Downtown</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="pedestrian_zone_h" v-model="selected.pedestrian_zone" value="1" >
                    <label for="pedestrian_zone_h">Pedestrian zone</label>
                    </div>

                

                    <div class="form-group">
                    <input type="checkbox" id="elite_part_h" v-model="selected.elite_part" value="1">
                    <label for="elite_part_h" >Elite Part</label>
                    </div>
                </div>


                 <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="excellent_location_h" v-model="selected.excellent_location" value="1">
                    <label for="excellent_location_h">Excellent Location</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="popular_destination_h"  v-model="selected.popular_destination" value="1">
                    <label for="popular_destination_h">Popular destination</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="business_zone_h"  v-model="selected.business_zone" value="1">
                    <label for="business_zone_h" >Business zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="outsize_city_h" v-model="selected.outside_city" value="1">
                    <label for="outsize_city_h" >Outside City</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="new_settlement_h"  v-model="selected.new_settlement" value="1">
                    <label for="new_settlement_h">New settlement</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="fully_furnished" v-model="selected.fully_furnished" value="1">
                    <label for="fully_furnished" >Fully Furnished</label>
                    </div>
                </div>
              </div>
            </div>
    </div>
</template>


<style lang="scss" scope>


select {

   outline:0;
   box-shadow:none;
   border:0!important;
   background: black !important;
   background-image: none;
   flex: 1;
   padding: 0 .5em !important;
   color:#fff !important;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
   width:100% !important;
   height: 40px !important;
}

.select {
   position: relative;
   display: flex;
   width: 20em;
   height: 3em;
   line-height: 3;
   background: #5c6664;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}
    
.new {
  padding: 50px;
}

.check-box-search{
  .form-group {
  display: block;
  margin-bottom: 15px;
}

.form-group input {
  padding: 0;
  height: initial;
  width: initial;
  margin-bottom: 0;
  display: none;
  cursor: pointer;
}

.form-group label {
  position: relative;
  cursor: pointer;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 2px solid #0079bf;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 10px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 5px;
}

.form-group input:checked + label:after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 9px;
  width: 6px;
  height: 14px;
  border: solid #0079bf;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
}


</style>


<script>

export default {
    setup() {
        
    },

     data(){
        return{
            searchWidth: false,
             selected:{
              we_demand:0,
              we_recommend:0,
              featured:0,
              for_investor:0,
              new_construction:0,
              type:'',
              offer:'',
              luxury:'',
              about_price:'',
              min_price:'',
              max_price:'',
              region:'',
              state:'',
              city:'',
              neighborhood:'',
              min_rooms:'',
              max_rooms:'',
              id_number:'',
              min_area:'',
              max_area:'',
              keyword:'',
              address:'',
              new_project:0,
              for_exchange:0,
              adapted_for_disabled:0,
              paratialy_furnished:0,
              unfurnished:0,
              garage:0,
              private_parking:0,
              lift:0,
              pool:0,
              balcony:0,
              beachfront:0,
              seaview:0,
              downtown:0,
              pedestrian_zone:0,
              elite_part:0,
              excellent_location:0,
              popular_destination:0,
              business_zone:0,
              outside_city:0,
              new_settlement:0,
              fully_furnished:0
             
            }
        }},

     created() {
         if(this.$windowWidth <= 520){
            this.searchWidth = true;
            }
           
      },

    mounted(){

    }
}
</script>

<style lang="scss" scoped>


    $background: #080808;
    $select-color: #fff;
    $select-background: #E4192B;
    $select-width: 100px !important;
    $select-height: 40px; 

.home_header_search{
    margin-top: 30px;
}

.low_now_ok{
    right: -1px !important;
    margin-top: -3px;
}

.low_now_ok_mobile{
    right: 0px !important;
}

.select-hidden {
  display: none;
  visibility: hidden;
  padding-right: 10px;
}
.select {
  margin-right: 4px;
  cursor: pointer;
  display: inline-block;
  position: relative;
  font-size: 16px;
  color: $select-color;
  width: $select-width;
  height: $select-height;
}
.select-styled {
  position: absolute; 
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: $background;
  padding: 8px 15px;
//   @include transition(all 0.2s ease-in);
  &:after {
    content:"";
    width: 0;
    height: 0;
    border: 7px solid transparent;
    border-color: $select-color transparent transparent transparent;
    position: absolute;
    top: 16px;
    right: 10px;
  }
  &:hover {
    background-color: darken($select-background, 2);
  }
  &:active, &.active {
    background-color: darken($select-background, 5);
    &:after {
      top: 9px;
      border-color: transparent transparent $select-color transparent;
    }
  }
}

.select-options {
  display: none; 
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  z-index: 999;
  margin: 0;
  padding: 0;
  list-style: none;
  background-color: darken($select-background, 5);
  li {
    margin: 0;
    padding: 12px 0;
    text-indent: 15px;
    border-top: 1px solid darken($select-background, 10);
    // @include transition(all 0.15s ease-in);
    &:hover, 
    &.is-selected {
      color: $select-background;
      background: $select-color;
    }
    &[rel="hide"] {
      display: none;
    }
  }
}

</style>