@extends('layouts.admin_layout.admin_layout')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center">Add New Property</h3>
                            </div>
                            <hr>
                            <form action="#" method="post" novalidate="novalidate">

                                <div class="form-group">
                                    <label for="property_title" class="control-label mb-1">Property Title</label>
                                    <input id="property_title" name="property_title" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Property Title">
                                </div>
                                <div class="form-group has-success">
                                    <label for="property_description" class="control-label mb-1">Property Description</label>
                                    <textarea name="property_description" id="property_description" cols="30" rows="6" class="form-control"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="we_demand" id="we_deman" value="1" > We Demand
                                        </div>
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="new_construction" id="new_construction"  value="1" > New Construction
                                        </div>
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="we_recommend" id="we_recommend"  value="1" > We Recommend
                                        </div>
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="new_project" id="new_project"  value="1" > New Project
                                        </div>
                                    </div>


                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="featured" id="featured"  value="1" > Featured
                                        </div>
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="for_exchange" id="for_exchange"  value="1" > For Exchange
                                        </div>
                                    </div>


                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="for_investor" id="for_investor"  value="1" > For Investor
                                        </div>
                                        <div class="form-group has-success">
                                            <input type="checkbox" name="adapted_for_disabled" id="adapted_for_disabled"  value="1" > Adapted For Disabled
                                        </div>
                                    </div>


                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose Type" name="type" class="standardSelect form-control" tabindex="1">
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


                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose Offer" name="offer" class="standardSelect form-control" tabindex="1">
                                                <option value="" selected disabled>Offer</option>

                                                <option value="Sale">Sale</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Demand">Demand</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose Luxury" name="luxury" class="standardSelect form-control" tabindex="1">
                                                <option value="" selected disabled>Luxury</option>

                                                <option value="Luxury Realty">Luxury Realty</option>
                                                <option value="Not Luxurious">Not Luxurious</option>
                                                <option value="All">All</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group has-success">
                                            <select data-placeholder="Choose About Price" name="about_price" class="standardSelect form-control" tabindex="1">
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




                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Currency" name="currency" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Currency</option>

                                            <option value="euro">Euro</option>
                                            <option value="dollar">Dollar</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Region" name="region" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Region</option>

                                            <option value="Continental">Continental</option>
                                            <option value="Coastal">Coastal</option>
                                            <option value="Insular">Insular</option>
                                            <option value="Mountain">Mountain</option>
                                            <option value="All Regions">All Regions</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose State" name="state" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>State</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Other State">Other State</option>
                                            <option value="All States">All States</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Country" name="country" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Country" selected disabled>Choose Country</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose City" name="city" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose City" selected disabled>Choose City</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Neigborhood" name="neigborhood" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Neigborhood" selected disabled>Choose Neigborhood</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="street" name="street" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Property Price">
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Living Room" name="living_room" class="standardSelect form-control" tabindex="1">
                                            <option value="Separate Space">Separate Space</option>
                                            <option value="With Kitchen">With Kitchen</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Bedrooms" name="bedrooms" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Bedrooms" selected disabled>Choose Bedrooms</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Badrooms" name="badrooms" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Badrooms" selected disabled>Choose Badrooms</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Badrooms" name="badrooms" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Badrooms" selected disabled>Separate Toilet</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input type="text" name="property_area" id="property_area" placeholder="Property Area (m2)" class="form-control">
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input type="text" name="property_area" id="property_area" placeholder="Lot Area (m2)" class="form-control">
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Garage" name="garage" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose garage" selected disabled>Choose Garage</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Garage" name="garage" class="standardSelect form-control" tabindex="1">
                                            <option value="Choose Private Parking" selected disabled>Choose Private Parking</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Usage" name="usage" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Choose Usage</option>
                                            <option value="For Business">For Business</option>
                                            <option value="Residential">Residential</option>
                                            <option value="For Renting">For Renting</option>
                                            <option value="For Tourism">For Tourism</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Floor" name="floor" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Floor</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Total of Units" name="total_units" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Total Units</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <select data-placeholder="Choose Total of Units" name="total_units" class="standardSelect form-control" tabindex="1">
                                            <option value="" selected disabled>Energy Certificate</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="Under construction">Under construction</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="property_price" name="property_price" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Property Price for sale">
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="price_rent_monthly" name="price_rent_monthly" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Price for rent/monthly">
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="price_for_demand" name="price_for_demand" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Price for demand/Up to">
                                    </div>
                                </div>
                                 <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="floor_plan" name="floor_plan" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Floor Plan">
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="google_map_position" name="google_map_position" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Google Map Position" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="agent" name="agent" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Agent" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="virtual_tour" name="virtual_tour" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Virtual Tour" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="id_number" name="id_number" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Id Number" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <input id="google_map" name="google_map" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Google Map" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <label for="featured_imaged">Featured Image</label>
                                        <input id="featured_imaged" name="featured_imaged" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <label for="upload_image">Upload Image(Upto 40k)</label>
                                        <input id="upload_image" name="upload_image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                </div>

                                 <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <label for="video">Video</label>
                                        <input id="video" name="video" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                </div>

                                 <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group has-success">
                                        <label for="video">PDF File</label>
                                        <input id="video" name="video" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <input id="lift" name="lift" type="checkbox" aria-required="true" aria-invalid="false" value="lift" > Lift
                                    </div>
                                    <div class="form-group">
                                        <input id="pool" name="pool" type="checkbox" aria-required="true" aria-invalid="false" value="pool" > Pool

                                    </div>

                                    <div class="form-group">
                                        <input id="balcony" name="balcony" type="checkbox" aria-required="true" aria-invalid="false" value="balcony" > Balcony
                                    </div>

                                    <div class="form-group">
                                        <input id="loggia" name="loggia" type="checkbox" aria-required="true" aria-invalid="false" value="loggia" > Loggia
                                    </div>

                                    <div class="form-group">
                                        <input id="terrace" name="terrace" type="checkbox" aria-required="true" aria-invalid="false" value="terrace" > Terrace
                                    </div>

                                    <div class="form-group">
                                        <input id="garden" name="garden" type="checkbox" aria-required="true" aria-invalid="false" value="garden" > Garden
                                    </div>

                                    <div class="form-group">
                                        <input id="basement" name="basement" type="checkbox" aria-required="true" aria-invalid="false" value="Basement" > Basement
                                    </div>

                                    <div class="form-group">
                                        <input id="gym" name="gym" type="checkbox" aria-required="true" aria-invalid="false" value="gym" > Gym
                                    </div>
                                     <div class="form-group">
                                        <input id="sauna" name="sauna" type="checkbox" aria-required="true" aria-invalid="false" value="sauna" > Sauna
                                    </div>
                                    <div class="form-group">
                                        <input id="guest_house" name="guest_house" type="checkbox" aria-required="true" aria-invalid="false" value="guest_house" > Guest House
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <input id="alarm" name="alarm" type="checkbox" aria-required="true" aria-invalid="false" value="alarm" > Alarm
                                    </div>
                                    <div class="form-group">
                                        <input id="video_surveillance" name="video_surveillance" type="checkbox" aria-required="true" aria-invalid="false" value="video_surveillance" > video_surveillance

                                    </div>

                                    <div class="form-group">
                                        <input id="smart_home" name="smart_home" type="checkbox" aria-required="true" aria-invalid="false" value="smart_home" > Smart Home
                                    </div>

                                    <div class="form-group">
                                        <input id="internet" name="internet" type="checkbox" aria-required="true" aria-invalid="false" value="internet" > Internet
                                    </div>



                                    <div class="form-group">
                                        <input id="air_conditioning" name="air_conditioning" type="checkbox" aria-required="true" aria-invalid="false" value="air conditioning" > Air Conditioning
                                    </div>

                                    <div class="form-group">
                                        <input id="security_door" name="security_door" type="checkbox" aria-required="true" aria-invalid="false" value="security door" > Security Door
                                    </div>

                                    <div class="form-group">
                                        <input id="fully_furnished" name="fully_furnished" type="checkbox" aria-required="true" aria-invalid="false" value="fully furnished" > Fully Furnished
                                    </div>
                                    <div class="form-group">
                                        <input id="partialy_furnished" name="partialy_furnished" type="checkbox" aria-required="true" aria-invalid="false" value="fully furnished" > Fully Furnished
                                    </div>
                                    <div class="form-group">
                                        <input id="unfurnished" name="unfurnished" type="checkbox" aria-required="true" aria-invalid="false" value="unfurnished" > Unfurnished
                                    </div>
                                </div>


                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <input id="city_water_supply" name="city_water_supply" type="checkbox" aria-required="true" aria-invalid="false" value="city water supply" > City Water Supply
                                    </div>
                                    <div class="form-group">
                                        <input id="city_sewer" name="city_sewer" type="checkbox" aria-required="true" aria-invalid="false" value="city sewer" > City Sewer

                                    </div>

                                    <div class="form-group">
                                        <input id="city_gas" name="city_gas" type="checkbox" aria-required="true" aria-invalid="false" value="city gas" > City Gas
                                    </div>

                                    <div class="form-group">
                                        <input id="central_heating" name="central_heating" type="checkbox" aria-required="true" aria-invalid="false" value="central heating" > Central Heating
                                    </div>

                                    <div class="form-group">
                                        <input id="city_heating_plant" name="city_heating_plant" type="checkbox" aria-required="true" aria-invalid="false" value="city heating plant" > City Heating Plant
                                    </div>

                                    <div class="form-group">
                                        <input id="building_permit" name="building_permit" type="checkbox" aria-required="true" aria-invalid="false" value="building permit" > Building Permit
                                    </div>

                                    <div class="form-group">
                                        <input id="location_information" name="location_information" type="checkbox" aria-required="true" aria-invalid="false" value="location information" > Location Information
                                    </div>

                                    <div class="form-group">
                                        <input id="location_permit" name="location_permit" type="checkbox" aria-required="true" aria-invalid="false" value="location permit" > Location Permit
                                    </div>
                                    <div class="form-group">
                                        <input id="usage_permit" name="usage_permit" type="checkbox" aria-required="true" aria-invalid="false" value="usage permit" > Usage Permit
                                    </div>
                                    <div class="form-group">
                                        <input id="ownership_certificat" name="ownership_certificat" type="checkbox" aria-required="true" aria-invalid="false" value="ownership certificat" > New settlement
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <input id="beachfront" name="beachfront" type="checkbox" aria-required="true" aria-invalid="false" value="city water supply" > Beachfront
                                    </div>
                                    <div class="form-group">
                                        <input id="seaview" name="seaview" type="checkbox" aria-required="true" aria-invalid="false" value="city sewer" > Seaview

                                    </div>

                                    <div class="form-group">
                                        <input id="downtown" name="downtown" type="checkbox" aria-required="true" aria-invalid="false" value="city gas" > Downtown
                                    </div>

                                    <div class="form-group">
                                        <input id="pedestrian_zone" name="pedestrian_zone" type="checkbox" aria-required="true" aria-invalid="false" value="pedestrian zone" > Pedestrian Zone
                                    </div>

                                    <div class="form-group">
                                        <input id="elite_part" name="elite_part" type="checkbox" aria-required="true" aria-invalid="false" value="elite part" > Elite Part
                                    </div>

                                    <div class="form-group">
                                        <input id="excellent_location" name="excellent_location" type="checkbox" aria-required="true" aria-invalid="false" value="excellent location" > Excellent Location
                                    </div>

                                    <div class="form-group">
                                        <input id="popular_destination" name="popular_destination" type="checkbox" aria-required="true" aria-invalid="false" value="popular destination" > Popular Destination
                                    </div>

                                    <div class="form-group">
                                        <input id="business_zone" name="business_zone" type="checkbox" aria-required="true" aria-invalid="false" value="business zone" > Business Zone
                                    </div>
                                    <div class="form-group">
                                        <input id="outside_city" name="outside_city" type="checkbox" aria-required="true" aria-invalid="false" value="outside city" > Outside city
                                    </div>
                                    <div class="form-group">
                                        <input id="new_settlement" name="new_settlement" type="checkbox" aria-required="true" aria-invalid="false" value="new settlement" > New settlement
                                    </div>
                                </div>



                                    <div class="col-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary">Publish</button>
                                    </div>






                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> <!-- .card -->

        </div>
    </div>
@endsection
