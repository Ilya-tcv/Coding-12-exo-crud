<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contacts = Contact::all();

        return view('Contact.contactData', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $contact = new Contact();

        $contact -> name = request('name');
        $contact -> email = request('mail');
        $contact -> subject = request('subject');
        $contact -> message = request('message');

        $contact->save();
        return redirect()->route('main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->back();
    }
}