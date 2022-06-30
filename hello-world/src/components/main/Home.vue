<template>
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
                      <select id="mounth">
                        <option value="hide">We Demand</option>
                        <option value="january">January</option>
                       </select> 

                      <select id="year">
                        <option value="hide">We Recommend</option>
                        <option value="2010">2010</option>
                      
                      </select>

                      <select id="feature">
                        <option value="hide">Feature</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="investor">
                        <option value="hide">For Investor</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="new_construction">
                        <option value="hide">New Construction</option>
                        <option value="2010">2010</option>
                      </select>

                    <select id="type">
                        <option value="hide">Type</option>
                        <option value="january">January</option>
                    </select> 

                      <select id="offer">
                        <option value="hide">Offer</option>
                        <option value="2010">2010</option>
                      
                      </select>

                      <select id="luxury">
                        <option value="hide">Luxury</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="about_price">
                        <option value="hide">About Price</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="min_price">
                        <option value="hide">Min Price</option>
                        <option value="2010">2010</option>
                      </select>

                    <select id="max_Price">
                        <option value="hide">Max Price</option>
                        <option value="january">January</option>
                    </select> 

                      <select id="region">
                        <option value="hide">Region</option>
                        <option value="2010">2010</option>
                      
                      </select>

                      <select id="state">
                        <option value="hide">State</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="city">
                        <option value="hide">City</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="neighborhood">
                        <option value="hide"> Neighborhood</option>
                        <option value="2010">2010</option>
                      </select>

                    <select id="min_rooms">
                        <option value="hide">Min Rooms</option>
                        <option value="january">January</option>
                    </select> 

                      <select id="max_rooms">
                        <option value="hide">Max rooms</option>
                        <option value="2010">2010</option>
                      
                      </select>

                      <select id="id_number">
                        <option value="hide">ID Number</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="keyword">
                        <option value="hide">Keyword</option>
                        <option value="2010">2010</option>
                      </select>

                      <select id="min_area_m2">
                        <option value="hide"> Min area m2</option>
                        <option value="2010">2010</option>
                      </select>

                    <select id="max_area_2">
                        <option value="hide">Max area m2</option>
                        <option value="2010">2010</option>
                      
                      </select>
                      <div class="low_now_ok" :class="{'low_now_ok_mobile': homeWidth}" style="position: relative;
        display: inline; float: right;">
                        <button type="button" @click="advanced" class="search_button advanced_search">ADVANCED</button>

                        <button type="button"  class="search_button clear_search">CLEAR</button>

                        <button type="button" class="search_button bymap_search">BYMAP</button>
                      </div>
                </div>
              </div>
            </div>

           
          </div>
      </div>
      <div class="container-fluid" v-if="advance_show">
        <div class="container">
             <div class="row" style="margin-top: 30px;">
                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">New Project</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">For Exchange</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Adapted For Disabled</label>
                    </div>

                     <div class="form-group">
                        <input type="checkbox" id="javascript">
                        <label for="javascript">Paratialy Furnished</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="javascript">
                        <label for="javascript">Unfurnished</label>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Garage</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Private Parking</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Lift</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pool</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Balcony Loggia Terrage</label>
                    </div>
                </div>



                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Beachfront</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Seaview</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Downtown</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pedestrian zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pedestrian zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Elite Part</label>
                    </div>
                </div>


                 <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Excellent Location</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Popular destination</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Business zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Outside City</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">New settlement</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Fully Furnished</label>
                    </div>
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

                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="image" :class="{'image_mobile': homeWidth}">
                            <p>SALE</p>

                          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
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


                            <div class="property_title">
                              <h4>Pantovčak, luxury apartment, 2 parking spaces, rent</h4>
                            </div>

                            <div class="property_second" :class="{'property_second_mobile':homeWidth}">
                              <ul>
                                <li><span><img src="@/assets/icon/small/bed.png" alt="bed icon"></span> 3+ living room</li>
                                <li> &nbsp;  <span><img src="@/assets/icon/small/bath.png" alt="bath icon"></span>2</li>
                                <li>  &nbsp;<span><img src="@/assets/icon/small/vector-square.png" alt=""></span> 160 m<sup>2</sup></li>
                              </ul>
                            </div>

                            <div class="property_third">
                              <div class="row">
                                <div class="col-5 col-sm-5 col-md-5">
                                    <h4>520.000€</h4>
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                  <h4>7 Days Auction</h4>
                                </div>
                              </div>
                            </div>
                        </div>

                         <div class="col-12 col-sm-6 col-md-3">
                          <div class="image" :class="{'image_mobile': homeWidth}">
                            <p>SALE</p>


                          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  
                                </div>
                              </div>
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


                            <div class="property_title">
                              <h4>Pantovčak, luxury apartment, 2 parking spaces, rent</h4>
                            </div>

                            <div class="property_second" :class="{'property_second_mobile':homeWidth}">
                              <ul>
                                <li><span><img src="@/assets/icon/small/bed.png" alt="bed icon"></span> 3+ living room</li>
                                <li> &nbsp; &nbsp;<span><img src="@/assets/icon/small/bath.png" alt="bath icon"></span>2</li>
                                <li><span><img src="@/assets/icon/small/vector-square.png" alt=""></span> 160 m<sup>2</sup></li>
                              </ul>
                            </div>

                            <div class="property_third">
                              <div class="row">
                                <div class="col-5 col-sm-5 col-md-5">
                                    <h4>520.000€</h4>
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                  <h4>7 Days Auction</h4>
                                </div>
                              </div>
                            </div>
                        </div>

                         <div class="col-12 col-sm-6 col-md-3">
                          <div class="image" :class="{'image_mobile': homeWidth}">
                            <p>SALE</p>


                          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
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


                            <div class="property_title">
                              <h4>Pantovčak, luxury apartment, 2 parking spaces, rent</h4>
                            </div>

                            <div class="property_second" :class="{'property_second_mobile':homeWidth}">
                              <ul>
                                <li><span><img src="@/assets/icon/small/bed.png" alt="bed icon"></span> 3+ living room</li>
                                <li> &nbsp; &nbsp;<span><img src="@/assets/icon/small/bath.png" alt="bath icon"></span>2</li>
                                <li><span><img src="@/assets/icon/small/vector-square.png" alt=""></span> 160 m<sup>2</sup></li>
                              </ul>
                            </div>

                            <div class="property_third">
                              <div class="row">
                                <div class="col-5 col-sm-5 col-md-5">
                                    <h4>520.000€</h4>
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                  <h4>7 Days Auction</h4>
                                </div>
                              </div>
                            </div>
                        </div>

                         <div class="col-12 col-sm-6 col-md-3">
                          <div class="image" :class="{'image_mobile': homeWidth}">
                            <p>SALE</p>


                          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="@/assets/home/property1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                 
                                </div>
                              </div>
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


                            <div class="property_title">
                              <h4>Pantovčak, luxury apartment, 2 parking spaces, rent</h4>
                            </div>

                            <div class="property_second" :class="{'property_second_mobile':homeWidth}">
                              <ul>
                                <li><span><img src="@/assets/icon/small/bed.png" alt="bed icon"></span> 3+ living room</li>
                                <li> &nbsp; &nbsp;<span><img src="@/assets/icon/small/bath.png" alt="bath icon"></span>2</li>
                                <li><span><img src="@/assets/icon/small/vector-square.png" alt=""></span> 160 m<sup>2</sup></li>
                              </ul>
                            </div>

                            <div class="property_third">
                              <div class="row">
                                <div class="col-5 col-sm-5 col-md-5">
                                    <h4>520.000€</h4>
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                  <h4>7 Days Auction</h4>
                                </div>
                              </div>
                            </div>
                        </div>

                      </div>
                  </div>
                  
              </div>
          </div>


      </div>

      <div class="container-fluid" style="padding-right:0px; padding-left:0px">
        <div class="move_in_croatia">
          <div class="container">
            <div class="row">
              <div class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <h4>MOVE IN CROATIA</h4>
                <button class="move_in_croatia"><img src="@/assets/icon/small/view_listing_arrow-right.png" alt=""></button>
              </div>

              <div class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <img style="width:100%" src="@/assets/home/rectangle_37.jpg" alt="">
                <h5>Continental </h5>
                <h5>Region</h5>
                <button style="margin:10px 0;"><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
              </div>


               <div class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <img style="width:100%" src="@/assets/home/rectangle_37_1.jpg" alt="">
                <h5>Continental </h5>
                <h5>Region</h5>
                <button style="margin:10px 0;"><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
              </div>

               <div class="col-6 col-sm-4 col-md-2" style="text-align:center">
                <img style="width:100%" src="@/assets/home/rectangle_37_2.jpg" alt="">
                <h5>Continental </h5>
                <h5>Region</h5>
                <button style="margin:10px 0;"><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
              </div>

               <div class="col-6 col-sm-4 col-md-2" style="text-align:center;">
                <img style="width:100%" src="@/assets/home/rectangle_37_3.jpg" alt="">
                <h5>Continental </h5>
                <h5>Region</h5>
                <button style="margin:10px 0;"> <img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
              </div>


            </div>
          </div>

          <div class="container">
            <div class="for-investor">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4>For Investors</h4>
                </div>
                <div class="col-6 col-sm-4 col-md-3 single_investor">
                  <img class="investor_image" :class="{'investor_image_mobile':homeWidth}" src="@/assets/home/rectangle_43.jpg" alt="for investors">
                  <h5>Land For Residential And Business Building</h5>
                  <button><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 single_investor">
                  <img class="investor_image" :class="{'investor_image_mobile':homeWidth}" src="@/assets/home/rectangle_43_1.jpg" alt="for investors">
                  <h5>Land For Residential And Business Building</h5>
                  <button><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 single_investor">
                  <img class="investor_image" :class="{'investor_image_mobile':homeWidth}" src="@/assets/home/rectangle_43_2.jpg" alt="for investors">
                  <h5>Land For Residential And Business Building</h5>
                  <button><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 single_investor">
                  <img class="investor_image" :class="{'investor_image_mobile':homeWidth}" src="@/assets/home/rectangle_43_3.jpg" alt="for investors">
                  <h5>Land For Residential And Business Building</h5>
                  <button><img src="@/assets/icon/small/offer_arrow_right.png" alt=""></button>
                </div>

                <div class="col-12 col-sm-12 col-md-12">
                    <img class="investor_add_section" src="@/assets/home/for_investor.png" alt="">
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

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/property.jpg" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/mask_group-2.png" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/mask_group_3.png" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/mask_group_1.png" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/mask_group-2.png" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="featured_real_state_part_image" src="@/assets/home/mask_group.png" alt="property">
                  <h5>Ban Jelacic Square, apartment 76m2, rent</h5>
                  <button><img src="@/assets/home/more_details_arrow-right.png" alt=""></button>
                </div>

                <div class="col-12 col-sm-12 col-md-12">
                  <img class="feature_real_state_part_add" src="@/assets/home/add_feature_real_ested.png" alt="">
                </div>

              </div>

              <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <h4 style="margin-top:10px; margin-bottom:20px;">Move To Neighbouring Countries</h4>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50.jpg" alt="">
                  <h5>Montenegro</h5>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50_1.jpg" alt="">
                  <h5>Montenegro</h5>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                  <img class="move_to_neighbouring_image" src="@/assets/home/rectangle_50_2.jpg" alt="">
                  <h5>Montenegro</h5>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
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

export default {
    setup() {
        
    },

     data(){
        return{
            homeWidth: false,
            advance_show:false
        }
        },
        methods:{
          advanced(){
            this.advance_show = !this.advance_show;
          }
        },

     created() {
         if(this.$windowWidth <= 520){
            this.homeWidth = true;
            }
           
      },

    mounted(){
        $('select').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;
    
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
    
        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);
    
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
            //if ($this.children('option').eq(i).is(':selected')){
            //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
            //}
        }
    
        var $listItems = $list.children('li');
    
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
    
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });
    
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });


    $('#carousel-1').carousel({
      interval: 4000,
      wrap: true,
      keyboard: true
 });
    }
}
</script>
 
<style>
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
            width: 290px;
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
            width: 293.22px;
            height: 451.75px;
          }

        }
    }







    //End move in croatia

    // property section
      .property_section{
        margin:30px 0px;
        .property_title{
          text-align: center;
          margin-bottom: 20px;

          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 37px;
            line-height: 47px;
            color: $background;
            text-align: center;
          }
        }
        .property_wrapper{
          .image{
            padding: 5px 5px;
            position: relative;
            width: 291px;
            p{
              position: absolute;
              z-index: 1;
              right: 0;
              margin-top: 15px;
              margin-right: 11px;
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
            width: 291px;
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
          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 800;
            font-size: 19px;
            line-height: 23px;
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
              // padding: 0px 4px;
              &:nth-child(1){
                width: 130px !important;
              }

               &:nth-child(3){
                width: 80px !important;
              }
            }
          }
        }

        .property_third{
          h4{
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
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