<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function countries(){
        return $this->belongsTo(TblCountry::class, 'country');
    }

    public function cities(){
        return $this->belongsTo(TblCity::class, 'city');
    }
    public function states(){
        return $this->belongsTo(State::class, 'state');
    }

    public function neighbor(){
        return $this->belongsTo(TblCountry::class, 'neigborhood');
    }

    public function scopeWithFilters($query, $we_demand, $we_recommend, $featured, $for_investor, $new_construction, $type, $offer, $luxury, $about_price, $min_price, $max_price, $region, $state, $city, $neighborhood, $min_rooms, $max_rooms, $id_number, $min_area, $keyword, $max_area, $new_project, $for_exchange, $adapted_for_disabled, $paratialy_furnished, $unfurnished, $garage, $private_parking, $lift, $pool, $balcony, $beachfront, $seaview, $downtown, $pedestrian_zone, $elite_part,  $excellent_location, $popular_destination, $business_zone, $outside_city, $new_settlement, $fully_furnished, $address ){
        return  $query->when($we_recommend, function ($query) use ($we_recommend) {
            $query->where('we_recommend', $we_recommend);
        })->when($we_demand, function ($query) use ($we_demand) {
            $query->where('we_demand', $we_demand);
        })->when($featured, function ($query) use ($featured) {
            $query->where('featured', $featured);
        })->when($for_investor, function ($query) use ($for_investor) {
            $query->where('for_investor', $for_investor);
        })->when($new_construction, function ($query) use ($new_construction) {
            $query->where('new_construction', $new_construction);
        })->when($type != '', function ($query) use ($type) {
            $query->where('we_demand', $type);
        })->when($offer, function ($query) use ($offer) {
            $query->where('offer', $offer);
        })->when($luxury, function ($query) use ($luxury) {
            $query->where('luxury', $luxury);
        })->when($about_price, function ($query) use ($about_price) {
            $query->where('about_price', $about_price);
        })->when($min_price, function ($query) use ($min_price) {
            $query->where('property_price','<=', $min_price);
        })->when($max_price, function ($query) use ($max_price) {
            $query->where('property_price','>=', $max_price);
        })->when($region, function ($query) use ($region) {
            $query->where('region', $region);
        })->when($state, function ($query) use ($state) {
            $query->where('state', $state);
        })->when($city, function ($query) use ($city) {
            $query->where('city', $city);
        })->when($neighborhood, function ($query) use ($neighborhood) {
            $query->where('neighborhood', $neighborhood);
        })->when($min_rooms, function ($query) use ($min_rooms) {
            $query->where('min_rooms', $min_rooms);
        })->when($max_rooms, function ($query) use ($max_rooms) {
            $query->where('max_rooms', $max_rooms);
        })->when($id_number, function ($query) use ($id_number) {
            $query->where('id_number', $id_number);
        })->when($min_area, function ($query) use ($min_area) {
            $query->where('property_area','<=', $min_area);
        })->when($max_area, function ($query) use ($max_area) {
            $query->where('property_area','>=', $max_area);
        })->when($keyword, function ($query) use ($keyword) {
            $query->where('property_title','LIKE',  "%{$keyword}%");
        }) ->when($new_project, function ($query) use ($new_project) {
                $query->where('new_project', $new_project);
            }) ->when($for_exchange, function ($query) use ($for_exchange) {
                $query->where('for_exchange', $for_exchange);
            }) ->when($adapted_for_disabled, function ($query) use ($adapted_for_disabled) {
                $query->where('adapted_for_disabled', $adapted_for_disabled);
            }) ->when($paratialy_furnished, function ($query) use ($paratialy_furnished) {
                $query->where('partialy_furnished', $paratialy_furnished);
            }) ->when($unfurnished, function ($query) use ($unfurnished) {
                $query->where('unfurnished', $unfurnished);
            }) ->when($garage, function ($query) use ($garage) {
                $query->where('garage', $garage);
            }) ->when($private_parking, function ($query) use ($private_parking) {
                $query->where('parking', $private_parking);
            }) ->when($lift, function ($query) use ($lift) {
                $query->where('lift', $lift);
            }) ->when($pool, function ($query) use ($pool) {
                $query->where('pool', $pool);
            }) ->when($balcony, function ($query) use ($balcony) {
                $query->where('balcony', $balcony);
            }) ->when($beachfront, function ($query) use ($beachfront) {
                $query->where('beachfront', $beachfront);
            }) ->when($seaview, function ($query) use ($seaview) {
                $query->where('seaview', $seaview);
            }) ->when($downtown, function ($query) use ($downtown) {
                $query->where('downtown', $downtown);
            }) ->when($pedestrian_zone, function ($query) use ($pedestrian_zone) {
                $query->where('pedestrian_zone', $pedestrian_zone);
            }) ->when($elite_part, function ($query) use ($elite_part) {
                $query->where('elite_part', $elite_part);
            }) ->when($excellent_location, function ($query) use ($excellent_location) {
                $query->where('excellent_location', $excellent_location);
            }) ->when($popular_destination, function ($query) use ($popular_destination) {
                $query->where('popular_destination', $popular_destination);
            }) ->when($business_zone, function ($query) use ($business_zone) {
                $query->where('business_zone', $business_zone);
            })->when($outside_city, function ($query) use ($outside_city) {
                $query->where('outside_city', $outside_city);
            })->when($new_settlement, function ($query) use ($new_settlement) {
                $query->where('new_settlement', $new_settlement);
            })->when($fully_furnished, function ($query) use ($fully_furnished) {
                $query->where('fully_furnished', $fully_furnished);
            })->when($address, function ($query) use ($address) {
                $query->where('google_map','LIKE',  "%{$address}%");
            });
    }
}















