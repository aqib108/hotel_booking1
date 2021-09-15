<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create(Request $request) {
        $cities = array(
            'Karachi', 'Lahore', 'Faisalabad', 'Rawalpindi', 'Gujranwala', 'Peshawar', 'Multan', 'Hyderabad', 'Islamabad', 'Quetta',
            'kalat', 'Makran', 'Naseerabad', 'Sibi', 'Zhob', 'Rakhshan', 'Bannu', 'Hazara', 'Malakand', 'Bhambore', 'Shaheed Benzirabad',
            'Poorch', 'Gilgit', 'Baltistan', 'Diamer', 'Bahawalpur', 'Sargodha', 'Sialkot', 'Sukkur', 'Larkana', 'Sheikhupura', 'Rahim Yar Khan',
            'Jhang', 'Dera Ghazi Khan', 'Gujrat', 'Sahiwal', 'Wah Cantonment', 'Mardan', 'Kasur', 'Okara', 'Mingora', 'Nawabshah', 'Chiniot',
            'Kotri', 'Kāmoke', 'Hafizabad', 'Sadiqabad', 'Mirpur Khas', 'Burewala', 'Kohat', 'Khanewal', 'Dera Ismail Khan', 'Turbat', 'Muzaffargarh',
            'Abbotabad', 'Mandi Bahauddin', 'Shikarpur', 'Jacobabad', 'Jhelum', 'Khanpur', 'Khairpur', 'Khuzdar', 'Pakpattan', 'Hub', 'Daska',
            'Gojra', 'Dadu', 'Muridke', 'Bahawalnagar', 'Samundri', 'Tando Allahyar', 'Tando Adam', 'Jaranwala', 'Chishtian', 'Muzaffarabad',
            'Attock', 'Vehari', 'Kot Abdul Malik', 'Ferozwala', 'Chakwal', 'Gujranwala Cantonment', 'Kamalia', 'Umerkot', 'Ahmedpur East',
            'Kot Addu', 'Wazirabad', 'Mansehra', 'Layyah', 'Mirpur', 'Swabi', 'Chaman', 'Taxila', 'Nowshera', 'Khushab', 'Shahdadkot',
            'Mianwal', 'Kabal', 'Lodhran', 'Hasilpur', 'Charsadda', 'Bhakkar', 'Badin', 'Arif Wala', 'Ghotki', 'Sambrial',
            'Jatoi', 'Haroonabad', 'Daharki', 'Narowal', 'Tando Muhammad Khan', 'Kamber Ali Khan', 'Mirpur Mathelo', 'Kandhkot', 'Bhalwal'
        );

        /*** Store city names in db with in loop */
        foreach ($cities as $city)
        {
            $modelCity = new City();
            $modelCity->title = $city;

            if($city == "Karachi" || $city == "Sargodha" || $city == "Lahore" || $city == "Faisalabad" || $city == "Rawalpindi" || $city == "Peshawar" || $city == "Multan" || $city == "Islamabad" || $city == "Dera Ghazi Khan" || $city == "Gujranwala" || $city == "Sahiwal" || $city == "Sheikhupura" || $city == "Quetta" || $city == "Dera Ismail Khan" || $city == "Hyderabad" || $city == "Muzaffarabad" )
            {
                $modelCity->priority = 1;
            }
            else
            {
                $modelCity->priority = 0;
            }

            $modelCity->country_id = 1;
            $modelCity->state_id = 1;
            $modelCity->status = 1;

            if($modelCity->save())
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
