<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmailContact(Request $request)
    {
       $dataInput = $request->all();

       $this ->validate($request,[
            'user_email'=>'required|email'
            ]);
        
		$data = array(
			'userName' => $request->user_name,
			'userEmail' => $request->user_email,
			'userSubject' => $request->user_subject,
			'userMessage' => $request->user_message
			);

		Mail::send('email', $data, function($message) use ($data){
			$message->from($data['userEmail']);
			$message->to('kumar.alg2@gmail.com');
			$message->subject($data['userSubject']);
		});
       //Pushing the data to the Database 
        Contact::create($dataInput);
		Session::flash('flash_message', 'Your Email was Sent Succefully!');
        return redirect('/contact');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
