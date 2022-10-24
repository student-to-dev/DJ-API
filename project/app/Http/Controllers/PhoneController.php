<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Stats;
use Brick\PhoneNumber\PhoneNumber;
use Brick\PhoneNumber\PhoneNumberParseException;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function store(Request $request)
    {

        try {
            $number = PhoneNumber::parse('+' . $request->phone);
            $numberInfo = ([
                'region' => $number->getRegionCode(),
                'country' => $number->getCountryCode(),
                'nationalNumber' => $number->getNationalNumber(),
            ]);

            if ($number->isValidNumber() && $number->isPossibleNumber()) {
                return $numberInfo;
            } else {
                if ($number->getRegionCode() == null) {
                    Phone::create([
                        'region' => 'No such region',
                        'country' => $number->getCountryCode(),
                        'nationalNumber' => $number->getNationalNumber(),
                        'phone' => $number,
                        'errors' => 'Invalid region code'
                    ]);
                    Stats::create([
                        'phoneRegionError' => 1
                    ]);
                    return response([$numberInfo, 'Invalid region code']);
                } else {
                    Phone::create([
                        'region' => $number->getRegionCode(),
                        'country' => $number->getCountryCode(),
                        'nationalNumber' => $number->getNationalNumber(),
                        'phone' => $number,
                        'errors' => 'Phone number Length is invalid'
                    ]);
                    Stats::create([
                        'phoneLengthError' => 1
                    ]);
                    return response([$numberInfo, 'Phone number Length is invalid']);
                }
            }
        } catch (PhoneNumberParseException $e) {
            dd($e);
            Phone::create([
                'errors' => $e->getMessage()
            ]);
            Stats::create([
                'phoneBadInput' => 1
            ]);
            
            if($e === 'The string supplied did not seem to be a phone number.'){
                return $e->getMessage();
            }
            return $e->getMessage();
        }
    }
}