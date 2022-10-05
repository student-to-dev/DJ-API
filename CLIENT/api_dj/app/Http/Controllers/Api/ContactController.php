<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\ContactResource;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::select('email', 'name', 'surname', 'phone')->get();
        return ContactResource::collection($contacts);
    }

    public function store(Request $request) 
    {
        $contact = Contact::create($request->all());

        return new ContactResource($contact);
    }
}
