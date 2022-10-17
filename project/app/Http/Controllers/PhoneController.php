<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class PhoneController extends Controller
{
    public function store(Request $request)
    {

        $codes = [  
                    '30' => 'Greece',
                    '31' => 'Netherlands',
                    '32' => 'Belgium',
                    '33' => 'France',
                    '34' => 'Spain',
                    '350' => 'Gibraltar',
                    '351'=> 'Portugal',
                    '352' => 'Luxembourg',
                    '353' => 'Ireland',
                    '354' => 'Iceland',
                    '355' => 'Albania',
                    '356' => 'Malta',
                    '357' => 'Cyprus',
                    '358' => 'Finland',
                    '359' => 'Bulgaria',
                    '36' => 'Hungary',
                    '370' => 'Lithuania',
                    '371' => 'Latvia',
                    '372' => 'Estonia',
                    '373' => 'Moldova',
                    '374' => 'Armenia',
                    '375' => 'Belarus',
                    '376' => 'Andorra',
                    '377' => 'Monaco',
                    '378' => 'San Marino',
                    '379' => 'Vatican',
                    '38' => 'Yugoslavia',
                    '380' => 'Ukraine',
                    '381' => 'Serbia and Montenegro',
                    '385' => 'Croatia',
                    '386' => 'Slovenia',
                    '387' => 'Bosnia and Herzegovina',
                    '388' => 'European Telephony Numbering Space', 
                    '389' => 'Macedonia',
                    '39' => 'Italy',
                    '3906' => 'Vatican',
                    '40' => 'Romania',
                    '41' => 'Switzerland',
                    '420' => 'Czech',
                    '421' => 'Slovakia',
                    '422' => 'Unassigned',
                    '423' => 'Liechtenstein',
                    '43' => 'Austria',
                    '44' => 'United Kingdom of Great Britain and Northern Ireland (including Isle of Man and Channel Islands)', 
                    '45' => 'Denmark',
                    '46' => 'Sweden',
                    '47' => 'Norway',
                    '48' => 'Poland',
                    '49' => 'Germany',
    ];

        // $validator = $request->validate([
        //     'phone' => 'phone:LV,LT,DE|min:3',
        //     // 'phone' => 'phone:UK,IS,NO,LI,CH,UA,GE,BE,EL,LT,PT,BG,ES,LU,RO,CZ,FR,HU,SI,DK,HR,MT,SK,DE,IT,NL,FI,EE,IE,CY,LV,AT,PL,SE|min:3',
        // ],
        // [
        //     'phone' => ' blogai',
        //     'phone.min' => 'per mazai'
        // ]);
        // $messages = $validator->errors();
        // $messages->add('phone','My Custasd');
            // dd($codes);

        $twoChars = substr($request->phone, 0, 2);
        $threeChars = substr($request->phone, 0, 3);
        $fourChars = substr($request->phone, 0, 4);
        
        foreach($codes as $key => $val){
            if($fourChars == $key){
                return $val;
            }
            else if($threeChars == $key){
                return $val;
            }
            else if($twoChars == $key){
                return $val;
            }
                
            
        }


    }

}
// 