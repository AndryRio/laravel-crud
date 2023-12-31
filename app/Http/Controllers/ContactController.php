<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);

        return view('contacts.index', compact('contacts'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the input
        $request->validate([
            'name' => 'required',
            'number' =>'required'
        ]);

        // create a new contact in the database
        Contact::create($request->all());

        // redirect the user and send friendly message
        return redirect()->route('contacts.index')->with('success','Contact created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        // validate the input
        $request->validate([
            'name' => 'required',
            'number' =>'required'
        ]);

        // create a new contact in the database
        $contact->update($request->all());

        // redirect the user and send friendly message
        return redirect()->route('contacts.index')->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // delete the product
        $contact->delete();

        // redirect the user and display success message
        return redirect()->route('contacts.index')->with('success','Contact deleted successfully');
    }
}
