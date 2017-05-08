<?php

namespace App\Http\Controllers;

use Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {

    	$contacts = Contact::All()->sortBy("last_name");;

    	return view('index', compact('contacts'));
    	}

	public function show($id)
	{
		$contact = Contact::findorfail($id);

		return view('contact.show', compact('contact'));
	}
	public function create()
	{
		return view('contact.create');
	} 
	public function store()
	{
		$input = Request::all();

		Contact::create($input);

    	return ('true');

	}
	public function edit($id)
	{
		$contact = contact::findorfail($id);

		return view('contact.edit', compact('contact'));
	}
	public function update($id, Request $request)
	{
		$contact = Contact::findorfail($id);
		$input = Request::all();

		$contact->update($input);
		return redirect('contact');
	}
	public function destroy($id){

    $rsltDelRec = Contact::findorfail($id);

   $rsltDelRec->delete();        
   
   return redirect('contact');
}

//end of ContactController
}
