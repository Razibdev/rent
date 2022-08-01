<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_title')->nullable();
            $table->text('property_description')->nullable();
            $table->tinyInteger('we_demand')->default(0);
            $table->tinyInteger('new_construction')->default(0);
            $table->tinyInteger('we_recommend')->default(0);
            $table->tinyInteger('new_project')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('for_exchange')->default(0);
            $table->tinyInteger('for_investor')->default(0);
            $table->tinyInteger('adapted_for_disabled')->default(0);
            $table->string('type')->nullable();
            $table->string('offer')->nullable();
            $table->string('luxury')->nullable();
            $table->string('about_price')->nullable();
            $table->string('currency')->nullable();
            $table->string('region')->nullable();
            $table->string('state')->nullable();
            $table->string('living_room')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('badrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('garage')->nullable();
            $table->string('parking')->nullable();
            $table->string('usage')->nullable();
            $table->string('floor')->nullable();
            $table->string('total_units')->nullable();
            $table->string('energy_certificate')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('neigborhood')->nullable();
            $table->string('property_price')->nullable();
            $table->string('property_area')->nullable();
            $table->string('property_area_l')->nullable();
            $table->string('price_rent_monthly')->nullable();
            $table->string('price_for_demand')->nullable();
            $table->string('floor_plan')->nullable();
            $table->string('google_map_position')->nullable();
            $table->string('agent')->nullable();
            $table->string('virtual_tour')->nullable();
            $table->string('id_number')->nullable();
            $table->string('google_map')->nullable();
            $table->string('featured_imaged')->nullable();
            $table->string('upload_image')->nullable();
            $table->string('video')->nullable();
            $table->string('pdf_file')->nullable();
            $table->tinyInteger('lift')->default(0);
            $table->tinyInteger('pool')->default(0);
            $table->tinyInteger('balcony')->default(0);
            $table->tinyInteger('loggia')->default(0);
            $table->tinyInteger('terrace')->default(0);
            $table->tinyInteger('garden')->default(0);
            $table->tinyInteger('basement')->default(0);
            $table->tinyInteger('gym')->default(0);
            $table->tinyInteger('sauna')->default(0);
            $table->tinyInteger('guest_house')->default(0);
            $table->tinyInteger('alarm')->default(0);
            $table->tinyInteger('video_surveillance')->default(0);
            $table->tinyInteger('smart_home')->default(0);
            $table->tinyInteger('internet')->default(0);
            $table->tinyInteger('air_conditioning')->default(0);
            $table->tinyInteger('security_door')->default(0);
            $table->tinyInteger('fully_furnished')->default(0);
            $table->tinyInteger('partialy_furnished')->default(0);
            $table->tinyInteger('unfurnished')->default(0);
            $table->tinyInteger('city_water_supply')->default(0);
            $table->tinyInteger('city_sewer')->default(0);
            $table->tinyInteger('city_gas')->default(0);
            $table->tinyInteger('central_heating')->default(0);
            $table->tinyInteger('city_heating_plant')->default(0);
            $table->tinyInteger('building_permit')->default(0);
            $table->tinyInteger('location_information')->default(0);
            $table->tinyInteger('location_permit')->default(0);
            $table->tinyInteger('usage_permit')->default(0);
            $table->tinyInteger('ownership_certificat')->default(0);
            $table->tinyInteger('beachfront')->default(0);
            $table->tinyInteger('seaview')->default(0);
            $table->tinyInteger('downtown')->default(0);
            $table->tinyInteger('pedestrian_zone')->default(0);
            $table->tinyInteger('elite_part')->default(0);
            $table->tinyInteger('excellent_location')->default(0);
            $table->tinyInteger('popular_destination')->default(0);
            $table->tinyInteger('business_zone')->default(0);
            $table->tinyInteger('outside_city')->default(0);
            $table->tinyInteger('new_settlement')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
