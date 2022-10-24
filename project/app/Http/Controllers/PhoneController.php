<?php

namespace App\Http\Controllers;

use App\Models\Phone;
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
                    return response([$numberInfo, 'Invalid region code']);
                } else {
                    Phone::create([
                        'region' => $number->getRegionCode(),
                        'country' => $number->getCountryCode(),
                        'nationalNumber' => $number->getNationalNumber(),
                        'phone' => $number,
                        'errors' => 'Phone number is to Long or to Short'
                    ]);
                    return response([$numberInfo, 'Phone number is to Long or to Short']);
                }
            }
        } catch (PhoneNumberParseException $e) {
            Phone::create([
                'errors' => $e->getMessage()
            ]);
            return $e->getMessage();
        }
    }
}
