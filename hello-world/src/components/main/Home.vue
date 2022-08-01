<template>
 <loader v-if="loader" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" name="circular"></loader>
    <div class="container-fluid home_main_wrapper" :class="{'home_main_wrapper_mobile':homeWidth}" style="margin:20px 0">
        <div class="home_first_section" :class="{'home_first_section_mobile':homeWidth}">
          <div class="container">
            <div class="home_header">
              <div class="row">
                  <div class="col-12 ">
                      <h4 :class="{'home_first_section_mobile_title':homeWidth}">Luxury real estate in the continental,</h4>
                      <h4 :class="{'home_first_section_mobile_title':homeWidth}">coastal, island & mountain region</h4>
                      <p>Luxury real estate in all elite and attractive locations</p>
                  </div>
              </div>
            </div>
          </div>
            
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
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <select id="offer"  v-model="selected.offer" style="padding:5px;">
                        <option value="" selected disabled>Offer</option>
                         <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                        <option value="Demand">Demand</option>
                      
                      </select>
                      </div>
                   </div>
              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <select  v-model="selected.luxury" id="luxury">
                        <option value="" selected disabled>Luxury</option>
                        <option value="Luxury Realty">Luxury Realty</option>
                        <option value="Not Luxurious">Not Luxurious</option>
                        <option value="All">All</option>
                      </select>
                    </div>
                    </div>
                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
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
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <!-- <select id="min_price">
                        <option value="hide">Min Price</option>
                        <option value="2010">2010</option>
                      </select> -->
                      <input type="text"  v-model="selected.min_price" class="form-control" placeholder="Min Price" />

                    </div>
                   </div>

                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
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
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
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
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <select id="state" v-model="selected.state">
                        <option value="" selected disabled>State</option>
                        <option :value="sta.id" v-for="sta in state" :key="sta.id">{{sta.name}}</option>
                      </select>
                    </div>
                  </div>

                 <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <select id="city" v-model="selected.city">
                        <option value="" selected disabled>City</option>
                        <option :value="cit.id" v-for="cit in city" :key="cit.id">{{cit.name}}</option>
                      </select>
                    </div>
                 </div>

                <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                      <select id="neighborhood" v-model="selected.neighborhood">
                        <option value="" selected disabled> Neighborhood</option>
                        <option :value="coun.id" v-for="coun in country" :key="coun.id">{{coun.name}}</option>
                      </select>
                    </div>
                </div>


               <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
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
                  <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
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
                  <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text"  v-model="selected.id_number" class="form-control" placeholder="ID Number" />
                  </div>
              </div>

             <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text" class="form-control" placeholder="Keyword" v-model="selected.keyword" />
                  </div>
             </div>

              <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                    <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                       <input type="text" class="form-control" placeholder="Min area m2" v-model="selected.min_area" />
                    </div>
              </div>

               <div class="col-6 col-sm-4 col-md-2" style="padding-left:2px; padding-right:2px;height:50px;">
                  <div style=" width:100%; padding:1px; margin-right:3px;" class="form-group">
                  
                       <input type="text" class="form-control" placeholder="Max area m2" v-model="selected.max_area" />
                  
                  </div>
               </div>
                      <div class="low_now_ok" :class="{'low_now_ok_mobile': homeWidth}" style="position: relative;
        display: inline; float: right;">
                        <button type="button" @click="advanced" class="search_button advanced_search">ADVANCED</button>

                        <button @click="clearData" type="button"  class="search_button clear_search">CLEAR</button>

                        <button type="button" @click="bymapd" class="search_button bymap_search">ByMap</button>
                      </div>
                </div>
                  </div>
                </div>
              
               
              </div>
            </div>

           
          </div>
      </div>
      <div class="container-fluid" v-if="advance_show">
        <div class="container">
             <div class="row check-box-search" style="margin-top: 30px;">
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

     <!-- <PageWithAddress v-if="bymap" /> -->

     <div class="container-fluid" v-show="bymap">
        <div class="container">
           <div class="row check-box-search" style="margin-top: 30px;">
                <div class="col-6 col-sm-6 col-md-6">
                  <input  ref="streetRef"  type="text" class="form-control" placeholder="Type address..." />


                  <!-- <input v-model="selected.address" type="text" class="form-control" id="search_input" placeholder="Type address..." /> -->
                </div>

                <div class="col-6 col-sm-6 col-md-6">
                 <button @click="bymapFilter" style="background:red;" class="search_button">ByMap</button>
                </div>
            </div>

          </div>
       </div>

     

      <div class="container-fluid">
           <div class="property_section" style="overflow:hidden; ">
              <div class="container">
                <div class="property_title">
                  <h4>We are looking for associates, real estate agents, in the coastal region</h4>
                </div>
              </div>
              <div class="container">
                  <div class="property_wrapper">
                      <div class="row">

                        <div class="col-12 col-sm-6 col-md-3" style="filter:drop-shadow(0px 8px 18px rgba(0, 0, 0, 0.07));background: #fff; padding-left:0; padding-right:0px;" v-for="(property, index) in properties" :key="property.id">
                          <div class="image" :class="{'image_mobile': homeWidth}">
                            <p v-if="property.offer=='Sale'" style="background:red">{{property.offer}}</p>
                            <p v-else>{{property.offer}}</p>

                          <div :id="'carousel-'+index" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li :data-target="'#carousel-'+index" data-slide-to="0" class="active"></li>
                              <li :data-target="'#carousel-'+index" data-slide-to="1"></li>
                              <li :data-target="'#carousel-'+index" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                             <part :part="property.upload_image"></part>
                            </div>
                            
                          </div>

                          </div>
                          <div class="icon">
                            <span><img src="@/assets/icon/small/phone-alt.png" alt=""></span>

                             <span><img src="@/assets/icon/small/envelope-open.png" alt=""></span>

                            <span><img src="@/assets/icon/small/share-alt.png" alt=""></span>

                            <span><img src="@/assets/icon/small/envelope-open-text.png" alt=""></span>

                            <span><img src="@/assets/icon/small/arrows-alt-h.png" alt=""></span>

                            <span><img src="@/assets/icon/small/download.png" alt=""></span>
                          </div>

                         <hr style="margin: 10px 0px;">


                            <div style="cursor:pointer" class="property_title">
                              <h4 @click="singleProperty(property.id)">Pantovčak, luxury apartment, 2 parking spaces, rent</h4>
                            </div>

                            <div class="property_second" :class="{'property_second_mobile':homeWidth}">
                              <ul>
                                <li><span><img src="@/assets/icon/small/bed.png" alt="bed icon"></span> {{property.bedrooms}}+ living room</li>
                                <li> &nbsp;  <span><img src="@/assets/icon/small/bath.png" alt="bath icon"></span>{{property.bathrooms}}</li>
                                <li>  &nbsp;<span><img src="@/assets/icon/small/vector-square.png" alt=""></span> {{property.property_area}} m<sup>2</sup></li>
                              </ul>
                            </div>

                            <div class="property_third">
                              <div class="row" style="padding-left:10px">
                                <div class="col-5 col-sm-5 col-md-5" >
                                    <h4 v-if="property.currency = 'euro'">{{property.property_price}}€</h4>

                                    <h4 v-else>{{property.property_price}}$</h4>
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                  <h4>{{property.about_price}}</h4>
                                </div>
                              </div>
                            </div>
                        </div>



                        <div v-if="moreExists" style="text-align:center;" class="col-12 col-sm-12 col-md-">
                          <button type="button" @click="loadMore">Load more listing</button>
                        </div>

                      </div>
                  </div>
                  
              </div>
          </div>


      </div>












      <div class="container-fluid" style="padding-right:0px; padding-left:0px">
        <div class="move_in_croatia">
          <div class="container" :class="{'croatia_move': homeWidth}" style="height:600px">
            <div class="row">
              <div class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <h4>MOVE IN CROATIA</h4>
                <button @click="moveInCroatia" class="move_in_croatia"><img src="@/assets/icon/small/view_listing_arrow-right.png" alt=""></button>
              </div>


              <div v-for="region in regionProperties" :key="region.id" class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <img style="width:100%; height:489px;" :src="regionImage(region.featured_imaged)" alt="">
                <h5>{{region.region}} </h5>
                <h5>Region</h5>
                <button style="margin:10px 0;" @click="singleProperty(region.id)"><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="for-investor">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4>For Investors</h4>
                </div>





                <div v-for="investor in forInvestor" :key="investor.id" class="col-6 col-sm-4 col-md-3 single_investor">
                  <img class="investor_image" :class="{'investor_image_mobile':homeWidth}" :src="InvestorImage(investor.featured_imaged)" alt="for investors">
                  <h5>{{investor.property_title}}</h5>
                  <button @click="singleProperty(investor.id)"><img  src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
                </div>





                <div class="col-12 col-sm-12 col-md-12">
                    <img class="investor_add_section"  src="@/assets/home/for_investor.png" alt="">
                </div>

                
              </div>
            </div>
          </div>

        </div>

        <div class="container-fluid">
          <div class="featured_real_ested_wrapper">
              <div class="container">
            <div class="featured_real_state_part">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4>Featured Real Estate This Month</h4>
                </div>



                <div v-for="feature in forFeature" :key="feature.id" class="col-6 col-sm-4 col-md-3" style="padding-left:0px; padding-right:0px;">
                  <img class="featured_real_state_part_image" :src="InvestorImage(feature.featured_imaged)" alt="property">
                  <h5>{{feature.property_title}}</h5>
                  <button @click="singleProperty(feature.id)" ><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

              </div>

              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4 style="margin-top:10px; margin-bottom:20px;">Move To Neighbouring Countries</h4>
                </div>

                <div @click="montenegro(4)" class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50.jpg" alt="">
                  <h5>Montenegro</h5>
                </div>

                <div @click="montenegro(148)" class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50_1.jpg" alt="">
                  <h5>Bosnia&Herzegovina</h5>
                </div>

                <div @click="montenegro(198)" class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50_2.jpg" alt="">
                  <h5>Slovinia</h5>
                </div>

                <div @click="montenegro('italiandaus')" class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50_3.jpg" alt="">
                  <h5>Montenegro</h5>
                </div>

              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

</template>

<script>
import {onMounted, ref} from 'vue';
import Part from './part.vue'
import PageWithAddress from '@/components/layout/search/PageWithAddress.vue'
import axios from 'axios';
export default {
  components:{
    PageWithAddress,Part
  },
    setup() {
        
        const streetRef = ref();
        onMounted(()=>{
            let autocomplete = new google.maps.places.Autocomplete(streetRef.value, {
            types:["address"],
            fields:["address_components"]

        });
        
         google.maps.event.addListener(autocomplete, "place_changed", ()=>{
          var place = autocomplete.getPlace()
            // console.log(place.address_components[0].long_name);
            // _this.selected.address.push(place.address_components[0].long_name);
            document.getElementById('search_input').value = place.address_components[0].long_name;
            
         });
      
        });

        return {streetRef};
        
    },

     data(){
        return{
            homeWidth: false,
            loader:true,
            advance_show:false,
            bymap:false,
            users:[],
            properties:[],
            moreExists:true,
            nextPage:1,
            regionProperties:[],
            forInvestor:[],
            forFeature:[],
            country:[],
            city:[],
            state:[],
            montenegrolist:[],
            address:'',
            form:{
              type:''
            },
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

        }
        },

         watch: {
            selected: {
                handler: function () {
                    this.loadProperty();
                },
                deep:true
                
            }
        },

        methods:{
          clearData(){
             this.loadProperty();
             
          },
         regionImage(image){
          return process.env.VUE_APP_API_URL+'/'+image;
         },
         InvestorImage(image){
          return process.env.VUE_APP_API_URL+'/'+image;
         },
          advanced(){
            this.advance_show = !this.advance_show;
          },

          bymapd(){
            this.bymap = !this.bymap;
          },

          bymapFilter(){
            this.loadProperty();
            // this.$refs.streetRef.value
            this.selected.address = this.$refs.streetRef.value;
            // console.log(this.selected);
          },

          loadProperty(){
            // try{
              // const properties = axios.get('/api/property',{
              //   params: this.selected
              // });

              // console.log(this.selected);

              axios.get('/api/property',{
                params: this.selected
              }).then((response) => {
                         this.properties = response.data.property.data;
                         console.log(response.data.property.data);
                         this.loader = false;
                    });

              // this.properties = properties.data.property.data;
             
              
            // }catch(error){

            // }
          },



          async loadMore(){
              try{
              const properties = await axios.get(`/api/property?page=${this.nextPage}`);
              
              if(properties.data.property.current_page < properties.data.property.last_page){
                this.moreExists = true;
                this.nextPage = properties.data.property.current_page +1;
                 properties.data.property.data.forEach(data => {
                 this.properties.push(data);
              });

              }else{
                this.moreExists = false;
              }
            }catch(error){

            }
          },

          async regionProperty(){
            try{
                 const properties = await axios.get('/api/property-region');
                 this.regionProperties = properties.data.property;
            }catch(error){

            }
          },

          async countries(){
             try{
                 const country = await axios.get('/api/country');
                 this.country = country.data.country;
                 console.log(country.data.country);


                 const city = await axios.get('/api/city');
                 this.city = city.data.city;

                  const state = await axios.get('/api/state');
                 this.state = state.data.state;
            }catch(error){

            }
          },
         


         async investorProperty(){
            try{
                 const properties = await axios.get('/api/property-for-investor');
                 this.forInvestor = properties.data.property;
            }catch(error){

            }
          },


           async featuredProperty(){
            try{
                 const properties = await axios.get('/api/property-for-featured');
                 this.forFeature = properties.data.property;
            }catch(error){

            }
          },

           async montenegro(id){
               try{

                  this.$router.push({
                  path: '/neighbouring/'+id, 
              });

                }catch(error){

                }
          },
           async singleProperty(id){
               try{

                  this.$router.push({
                  path: '/property/'+id, 
              });

                }catch(error){

                }
          },

          async moveInCroatia(){
            try{
               this.$router.push({
                  path: '/properties/move-in-croatia', 
              });
           }catch(error){

                }
          }


        },

     created() {

     
   
      this.regionProperty();
      this.investorProperty();
      this.featuredProperty();
      this.loadProperty();
      this.countries();

         if(this.$windowWidth <= 520){
            this.homeWidth = true;
            }
      },

    mounted(){
        // var searchInput = 'search_input';
      //  var autocomplete;
      //     autocomplete = 
         
            
          // google.maps.event.addListener(autocomplete, 'place_changed', function () {
          //   var near_place = autocomplete.getPlace();
          //   console.log(near_place);
          // });

    // $('#carousel-1').carousel({
    //   interval: 4000,
    //   wrap: true,
    //   keyboard: true
    //   });
    }
}
</script>
 
<style>
.croatia_move{
  height: 1800px !important;
}
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






















  .home_main_wrapper_mobile{
    height: 200vh !important;
  }

  .home_first_section_mobile{
    height: 200vh !important;
  }

   .home_first_section_mobile_title{
    font-weight: 700 !important;
    font-size: 55px !important;
    line-height: 50px !important;
    }

    .low_now_ok_mobile{
      right: 0 !important;
    }

    .image_mobile{
      margin-left: 10px;
    }

    

    .investor_image_mobile{
      width:100% !important;
    }

    /* .class_mobile_move_in{
      width: 45%;
      float: left;
    } */
</style>

<style lang="scss">



    $background: #080808;
    $select-color: #fff;
    $select-background: #E4192B;
    $select-width: 176px;
    $select-height: 40px; 

    .carousel-indicators{
      margin-left: 0;
      right: 0px;
      left: 60%;
      bottom: 0;
    }


    // move in croatia
    .move_in_croatia{
      background-image: url('@/assets/home/background/bg.png');
       background-size:  100% 382px;
        background-repeat: no-repeat;
        margin-bottom: 30px;
      h4{
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 900;
        font-size: 36px;
        line-height: 51px;
        color: #333333;
      }
      .move_in_croatia{
        background: $select-background;
        border-radius: 70px;
        width: 189px;
        height: 51px;
        border: none;
      }

      button{
        border: none;
      }
      h5{
        padding-left: 12px;
      }
    }

    // for investor

    .for-investor{
          position: relative;
          text-align: center;
          margin-top: 15px;
         h4{
          font-family: 'Playfair Display';
          font-style: normal;
          font-weight: 900;
          font-size: 36px;
          line-height: 51px;
          color: #333333;
          padding: 15px;
        }

        .single_investor{
          padding-right: 15px;
          margin-bottom: 15px;

          h5{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 30px;
            color: #333333;
          }

          &:nth-child(4){
            padding-right: 0px;
          }

          .investor_image{
            width: 280px;
            height: 509px;
            &:nth-child(4){
              padding-right: 0;
            }
          }

        }
        .investor_add_section{
            margin-top: 46px !important;
            margin-bottom: 30px !important;
            width:100%;
          }
      
    }

    .featured_real_ested_wrapper{
       background-image: url('@/assets/home/background/bg.png');
      //  background-size:  100% 382px;
      //   background-repeat: no-repeat;
        margin-bottom: 30px;

        .featured_real_state_part{
          margin-top: 30px;
          position: relative;
          text-align: center;
          margin-bottom: 20px;
          h4{
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 900;
            font-size: 45px;
            line-height: 51px;
            text-align: center;
            color: #333333;
          }

          .featured_real_state_part_image{
            width: 100%;
            height: 285px;
            padding-right: 10px;

            &:nth-child(4){
               padding-right: 0;
            }
          }

          h5{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 1.4;
            color: #333333;
          }
          button{
            cursor: pointer;
            border: none;
            margin-bottom: 30px;
          }

          .feature_real_state_part_add{
                margin-bottom: 35px;
                margin-top: 5px;
          }


          .move_to_neighbouring_image{
            padding-right: 10px;
            width: 100%;
            height: 451.75px;
            cursor:pointer;
          }

        }
    }







    //End move in croatia

    // property section
      .property_section{
        margin:30px 0px;
        .property_title{
          margin-bottom: 20px;

          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 47px;
            color: $background;
            text-align: left;
          }
        }
        .property_wrapper{
          .image{
            padding: 5px 0px;
            position: relative;
            width: 100%;
            p{
              position: absolute;
              z-index: 1;
              right: 0;
              margin-top: 15px;
              margin-right: 5px;
              padding: 8px;
              background: green;
              color: #fff;
            }
            
            img{
               width:291px;
                height: 204px;
                padding-right: 5px;
            }
           
          }

          .icon{
            height: 29px;
            width: 100%;
            text-align: center;
            margin-top: 10px;
            span{
              width: 28.16px;
              height: 28.16px;
              border-radius: 5px;
              box-sizing: border-box;
              background: #F0F0F0;
              border: 1px solid #C3C3C3;
              padding: 5px;
              margin: 0 5px;
            }
          }


        .property_title{
          padding-left: 10px;
          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 800;
            font-size: 17px;
            line-height: 23px;
            text-align: left;
          }
        }

        .property_second{
          ul{
            list-style: none;
            margin-left: -15px;
            overflow: hidden;
            width: 100%;
            li{
              width: 50px;
              float: left;
              margin-left: -15px;
              font-size: 12px;
              // padding: 0px 4px;
              &:nth-child(1){
                width: 115px !important;
              }

               &:nth-child(3){
                width: 70px !important;
              }
            }
          }
        }

        .property_third{
          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            color: #333333;
          }
        }


        }
        button{
          height: 51px;
          background: $select-background;
          width: 250px;
          border-radius: 70px;
          border: none;
          margin-top: 20px;
        }
      }
    // end property section












    .home_main_wrapper{
        padding:20px 0px;
        height: 100vh;
        background-image: url('@/assets/home/Skype_Picture_2022_05_30T12_54_45_278Z 1.jpg');
        
    }

    .home_first_section{
      position: relative;
      height: 100vh;
      .home_header{
          position: absolute;
          top: 30px;
            h4{
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 900;
            font-size: 69px;
            line-height: 80px;
            text-align: center;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
          
            }
            p{
              font-family: 'Lato';
              font-style: normal;
              font-weight: 700;
              font-size: 42px;
              line-height: 37px;
              text-align: center;
              color: #FFFFFF;
              text-shadow: 0px 4px 12px rgba(0, 0, 0, 0.23);
              margin-bottom: 100px;
            }
      }
      .home_header_search{
         position: absolute;
          bottom: 30px;
          width:80%;
      }
    
    }


    .search_button{
      padding: 6px;
      border: none;
      width: 175px;
      color: $select-color;
      height: 39px;
      margin-right: 5px;


      
    }

    .advanced_search{
      background: $select-background;
    }

    .bymap_search{
      background: $background;
      margin-top: 5px;
    }

    .clear_search{
      background: #292424;
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