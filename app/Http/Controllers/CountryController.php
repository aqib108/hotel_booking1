<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create(Request $request) {
        $countries = array(
            'Pakistan' => '92',
            'Oman' =>  '968',
            'Afghanistan' => '93'

        );

        /*** Store city names in db with in loop */
        foreach ($countries as $country => $code)
        {

            $modelCountry = new Country();
            $modelCountry->title = $country;

            if($country == "Pakistan")
            {
                $modelCountry->priority = 1;
            }
            else
            {
                $modelCountry->priority = 0;
            }

            $modelCountry->country_code = $code;
            $modelCountry->status = 1;

            if($modelCountry->save())
            {
                // city saved
                echo "saved";
            }
            else
            {
                // city not saved
                echo "not saved";
            }
        }
    }
}
