<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Adresse;
use App\Http\Requests\AdresseRequest;

class AdresseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
   public function adressestore(AdresseRequest $request)
    {
        $adresse=new Adresse();
        $adresse->user_id= Auth::user()->id;
        $adresse->addressline=$request->Addressline;
        $adresse->city=$request->City;
        $adresse->state=$request->State;
        $adresse->zip=$request->Zip;
        $adresse->phone=$request->Phone;
        
        $adresse->save();
       return redirect()->route('payment');
        //return redirect()->route('checkout.payment');
    }

    public function store(AdresseRequest $request)
    {
        $adresse=new Adresse();
        $adresse->user_id= Auth::user()->id;
        $adresse->addressline=$request->Addressline;
        $adresse->city=$request->City;
        $adresse->state=$request->State;
        $adresse->zip=$request->Zip;
        $adresse->phone=$request->Phone;
        
        $adresse->save();
       return back();
        //return redirect()->route('checkout.payment');
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
