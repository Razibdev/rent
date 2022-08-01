<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Property;
use App\Models\State;
use App\Models\TblCity;
use App\Models\TblCountry;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function property(){
        $we_demand = 0;
        $we_recommend = 0;
        $featured = 0;
        $for_investor = 0;
        $new_construction = 0;
        $type ='';
        $offer = '';
        $luxury = '';
        $about_price = '';
        $address = '';
        $min_price = 0;
        $max_price = 0;
        $region = 0;
        $state = 0;
        $city = 0;
        $neighborhood = 0;
        $min_rooms = 0;
        $max_rooms = 0;
        $id_number = 0;
        $min_area = 0;
        $keyword = 0;
        $max_area = 0;

        $new_project = 0;
        $for_exchange = 0;
        $adapted_for_disabled = 0;
        $paratialy_furnished = 0;
        $unfurnished = 0;
        $garage = 0;
        $private_parking = 0;
        $lift = 0;
        $pool = 0;
        $balcony = 0;
        $beachfront = 0;
        $seaview = 0;
        $downtown = 0;
        $pedestrian_zone = 0;
        $elite_part = 0;
        $excellent_location = 0;
        $popular_destination = 0;
        $business_zone = 0;
        $outside_city = 0;
        $new_settlement = 0;
        $fully_furnished = 0;

        if(request()->input('we_demand') == true){
            $we_demand = 1;
        }

        if(request()->input('we_recommend')  == true){
            $we_recommend = 1;
        }

        if(request()->input('featured')  == true){
            $featured= 1;
        }

        if(request()->input('for_investor')  == true){
            $for_investor = 1;
        }

        if(request()->input('new_construction')  == true){
            $new_construction = 1;
        }



        if(request()->type){
            $type = request()->type;
        }

        if(request()->input('offer')){
            $offer = request()->input('offer');
        }

        if(request()->input('luxury')){
            $luxury = request()->input('luxury');
        }

        if(request()->input('about_price')){
            $about_price = request()->input('about_price');
        }

        if(request()->input('min_price')){
            $min_price = request()->input('min_price');
        }

        if(request()->input('max_price')){
            $max_price = request()->input('max_price');
        }

        if(request()->input('region')){
            $region = request()->input('region');
        }

        if(request()->input('state')){
            $state = request()->input('state');
        }

        if(request()->input('city')){
            $city= request()->input('city');
        }

        if(request()->input('neighborhood')){
            $neighborhood = request()->input('neighborhood');
        }

        if(request()->input('min_rooms')){
            $min_rooms = request()->input('min_rooms');
        }

        if(request()->input('max_rooms')){
            $max_rooms = request()->input('max_rooms');
        }

        if(request()->input('id_number')){
            $id_number = request()->input('id_number');
        }

        if(request()->input('min_area')){
            $min_area = request()->input('min_area');
        }

        if(request()->input('keyword')){
            $keyword = request()->input('keyword');
        }

        if(request()->input('max_area')){
            $max_area = request()->input('max_area');
        }


        if(request()->input('new_project')  == true){
            $new_project = 1;
        }

        if(request()->input('for_exchange')  == true){
            $for_exchange = 1;
        }

        if(request()->input('for_exchange')  == true){
            $for_exchange = 1;
        }

        if(request()->input('adapted_for_disabled')  == true){
            $adapted_for_disabled = 1;
        }

        if(request()->input('paratialy_furnished')  == true){
            $paratialy_furnished = 1;
        }

        if(request()->input('unfurnished')  == true){
            $unfurnished= 1;
        }

        if(request()->input('garage')  == true){
            $garage = 1;
        }
        if(request()->input('private_parking')  == true){
            $private_parking = 1;
        }
        if(request()->input('lift')  == true){
            $lift = 1;
        }

        if(request()->input('pool')  == true){
            $pool = 1;
        }

        if(request()->input('balcony')  == true){
            $balcony = 1;
        }

        if(request()->input('beachfront')  == true){
            $beachfront = 1;
        }

        if(request()->input('seaview')  == true){
            $seaview = 1;
        }

        if(request()->input('downtown')  == true){
            $downtown = 1;
        }

        if(request()->input('pedestrian_zone')  == true){
            $pedestrian_zone = 1;
        }

        if(request()->input('elite_part')  == true){
            $elite_part = 1;
        }

        if(request()->input('excellent_location')  == true){
            $excellent_location = 1;
        }

        if(request()->input('popular_destination')  == true){
            $popular_destination = 1;
        }

        if(request()->input('business_zone')  == true){
            $business_zone = 1;
        }

        if(request()->input('outside_city')  == true){
            $outside_city = 1;
        }
        if(request()->input('new_settlement')  == true){
            $new_settlement = 1;
        }
        if(request()->input('fully_furnished')  == true){
            $fully_furnished = 1;
        }

        if(request()->input('address')){
            $address = request()->input('address');
        }













        $property = Property::withFilters($we_demand, $we_recommend, $featured, $for_investor, $new_construction, $type, $offer, $luxury, $about_price, $min_price, $max_price, $region, $state, $city, $neighborhood, $min_rooms, $max_rooms, $id_number, $min_area, $keyword, $max_area, $new_project, $for_exchange, $adapted_for_disabled, $paratialy_furnished, $unfurnished, $garage, $private_parking, $lift, $pool, $balcony, $beachfront, $seaview, $downtown, $pedestrian_zone, $elite_part,  $excellent_location, $popular_destination, $business_zone, $outside_city, $new_settlement, $fully_furnished, $address )
            ->orderByDesc('id')->paginate(2);

        \Log::info(request()->type);
//        \Log::info(request()->input('we_recommend', 0));
        return response()->json(['property'=>$property]);
    }

    public function propertyRegion(){
        $property = Property::where('region', '!=', null)->limit(4)->orderByDesc('id')->get();
        return response()->json(['property'=>$property]);
    }
    public function propertyForInvestor(){
        $property = Property::where('for_investor', 1)->select('id', 'property_title', 'featured_imaged')->orderByDesc('id')->limit(4)->get();
        return response()->json(['property'=>$property]);
    }
    public function propertyForFeatured(){
        $property = Property::where('featured', 1)->select('id', 'property_title', 'featured_imaged')->orderByDesc('id')->limit(8)->get();
        return response()->json(['property'=>$property]);
    }
     public function propertyNeighbouring($id){
            \Log::info('ok');
            if($id == 'italiandaus'){
                $property = Property::where('country', 107)->orWhere('country', 13)->select('id', 'property_title', 'featured_imaged', 'country')->get();
            }else{
                $property = Property::where('country', $id)->select('id', 'property_title', 'featured_imaged', 'country')->get();
            }

            return response()->json(['property'=>$property]);
        }


        public function propertySingle($id){
            $property = Property::where('id', $id)->with('countries','states', 'cities', 'neighbor')->first();
            return response()->json(['property'=>$property]);
        }

        public function propertyRelated($id){
            $property = Property::where('state', $id)->select('id', 'property_title', 'featured_imaged')->limit(4)->orderByDesc('id')->get();
            return response()->json(['property'=>$property]);
        }


        public function propertyMoveCroatia(){
            $property = Property::where('region', 'Continental')->select('id', 'property_title', 'featured_imaged')->limit(4)->orderByDesc('id')->get();
            return response()->json(['property'=>$property]);
        }


    public function city(){
        $city = TblCity::get();
        return response()->json(['city'=>$city]);
    }

    public function country(){
        $country = TblCountry::get();
        return response()->json(['country'=>$country]);
    }
    public function state(){
        $country = State::get();
        return response()->json(['state'=>$country]);
    }

    public function agent(){
        $agent = Agent::limit(4)->get();
        return response()->json(['agent'=>$agent]);
    }






}
