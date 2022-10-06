<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\ContactResource;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::select('email', 'name', 'surname', 'phone')->get();
        return ContactResource::collection($contacts);
    }

    public function store(Request $request) 
    {
        $received = "" . $request; // need to format
        Log::channel('received')->info($received);

        $sentInfo = ""; // need to format
        $sent = "" . $sentInfo; // need to format
        Log::channel('sent')->info($sent);


        $contact = Contact::create($request->all());

        return new ContactResource($contact);
    }
}
