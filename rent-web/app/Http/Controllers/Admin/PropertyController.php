<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PropertyController extends Controller
{
    public function addProperty(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'property_title' => 'required',
                'property_description' => 'required',

            ]);

            $property = new Property();
            $property->property_title = $request->property_title;
            $property->property_description = $request->property_description;
            $property->we_demand = $request->we_demand;
            $property->new_construction = $request->new_construction;
            $property->we_recommend = $request->we_recommend;
            $property->new_project = $request->new_project;
            $property->featured = $request->featured;
            $property->for_exchange = $request->for_exchange;
            $property->for_investor = $request->for_investor;
            $property->adapted_for_disabled = $request->adapted_for_disabled;
            $property->type = $request->type;
            $property->offer = $request->offer;
            $property->luxury = $request->luxury;
            $property->about_price = $request->about_price;
            $property->currency = $request->currency;
            $property->region = $request->region;
            $property->country = $request->country;
            $property->state = $request->state;
            $property->city = $request->city_id;
            $property->neigborhood = $request->neigborhood;
            $property->property_price = $request->property_price;
            $property->living_room = $request->living_room;
            $property->bedrooms = $request->bedrooms;
            $property->badrooms = $request->badrooms;
            $property->bathrooms = $request->bathrooms;
            $property->garage = $request->garage;
            $property->parking = $request->parking;
            $property->usage = $request->usage;
            $property->floor = $request->floor;
            $property->total_units = $request->total_units;
            $property->energy_certificate = $request->energy_certificate;
            $property->property_price = $request->property_price;
            $property->property_area = $request->property_area;
            $property->property_area_l = $request->property_area_l;
            $property->price_rent_monthly = $request->price_rent_monthly;
            $property->price_for_demand = $request->price_for_demand;
            $property->floor_plan = $request->floor_plan;
            $property->google_map_position = $request->google_map_position;
            $property->agent = $request->agent;
            $property->virtual_tour = $request->virtual_tour;
            $property->id_number = $request->id_number;
            $property->google_map = $request->google_map;
            $property->lift = $request->lift;
            $property->pool = $request->pool;
            $property->balcony = $request->balcony;
            $property->loggia = $request->loggia;
            $property->terrace = $request->terrace;
            $property->garden = $request->garden;
            $property->basement = $request->basement;
            $property->gym = $request->gym;
            $property->sauna = $request->sauna;
            $property->guest_house = $request->guest_house;
            $property->alarm = $request->alarm;
            $property->video_surveillance = $request->video_surveillance;
            $property->smart_home = $request->smart_home;
            $property->internet = $request->internet;
            $property->air_conditioning = $request->air_conditioning;
            $property->security_door = $request->security_door;
            $property->fully_furnished = $request->fully_furnished;
            $property->partialy_furnished = $request->partialy_furnished;
            $property->unfurnished = $request->unfurnished;
            $property->city_water_supply = $request->city_water_supply;
            $property->city_sewer = $request->city_sewer;
            $property->city_gas = $request->city_gas;
            $property->central_heating = $request->central_heating;
            $property->city_heating_plant = $request->city_heating_plant;
            $property->building_permit = $request->building_permit;
            $property->location_information = $request->location_information;
            $property->location_permit = $request->location_permit;
            $property->usage_permit = $request->usage_permit;
            $property->ownership_certificat = $request->ownership_certificat;
            $property->beachfront = $request->beachfront;
            $property->seaview = $request->seaview;
            $property->downtown = $request->downtown;
            $property->pedestrian_zone = $request->pedestrian_zone;
            $property->elite_part = $request->elite_part;
            $property->excellent_location = $request->excellent_location;
            $property->popular_destination = $request->popular_destination;
            $property->business_zone = $request->business_zone;
            $property->outside_city = $request->outside_city;
            $property->new_settlement = $request->new_settlement;
            $property->save();

            if($request->featured_imaged){
                $file = $request->file('featured_imaged');

                // for save original image
                $ogImage = Image::make($file);
                $originalPath = 'property/feature_image/';
                $ogImage =  $ogImage->save($originalPath.time().$file->getClientOriginalName());

                // for store resized image
//                $thumbnailPath = 'property/feature_image/';
//                $ogImage->resize(250,125);
//                $thImage = $ogImage->save($thumbnailPath.time().$file->getClientOriginalName());
                $property->featured_imaged = $originalPath.time().$file->getClientOriginalName();
                $property->save();
            }

            if($request->upload_image){

                foreach($request->file('upload_image') as $image)
                {
                    $file = $image;
                    // for save original image
                    $ogImage = Image::make($file);
                    $originalPaths = "property/upload_image/";
                    $ogImage =  $ogImage->save($originalPaths.time().$file->getClientOriginalName());
                    $data[] = time().$file->getClientOriginalName();
                }





                $property->upload_image = $data;
                $property->save();
            }

            if ($request->video){
                $file = $request->file('video');
                $filename = $file->getClientOriginalName();
                $path = public_path().'/property/video/';
                $file->move($path, $filename);

                $property->video =  $path.time().$filename;
                $property->save();
            }

            if($request->pdf_file){
                $file =$request->file('pdf_file');
                $filename = $file->getClientOriginalName();
                $path = public_path().'/property/pdf_file/';
                $file->move($path, $filename);
                $property->pdf_file = $path.time().$filename;
                $property->save();
            }

            return  redirect()->back();

        }
        $country = DB::table('tbl_countries')->get();
        $agent = Agent::get();
        return view('admin.property.admin_add_property',compact('country', 'agent'));
    }

    public function fetch(Request $request){

        $value = $request->get('value');

        $datas = DB::table('states')->where('country_id', $value)->get();



        $output = '<option value="">Select State</option>';
        foreach($datas as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        echo $output;

    }

    public function fetchCity(Request $request){

        $value = $request->get('value');

        $datas = DB::table('tbl_cities')->where('state_id', $value)->get();
        \Log::info($value);
        \Log::info($datas);
        $output = '<option value="">Select City</option>';
        foreach($datas as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        echo $output;

    }


    public function viewProperty(){
        $property = Property::orderByDesc('id')->get();
        return view('admin.property.view_property', compact('property'));
    }

    public function deleteProperty($id){
        Property::where('id', $id)->delete();
        return redirect()->back();
    }




















    public function addCroatia(Request $request){

        return view('admin.croatia.add_croatia');
    }


}





