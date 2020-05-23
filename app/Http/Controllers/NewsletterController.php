<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use App\Notifications\NewsletterSubscribe;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $allEmails = Newsletter::orderBy('email', 'desc')->get();

        // // echo 'list of all email';
        // //
        // return view('newsletter.index', compact('allEmails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' =>'required|unique:newsletters|max:100'
        ]);

        Newsletter::create([
            'email' => $validatedData['email'],
        ])->notify(new NewsletterSubscribe($validatedData['email']));

        // send a notification mail here
        // $user->notify(new InvoicePaid($invoice));

            // placer ici un returbn back et implementer toastr ou notify
        notify()->success('Je te remercie mille fois pour ton inscription à ma newsletter', 'Inscription à la newsletter réussie');
        session(['subscribed' => true]);
        return back();


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
