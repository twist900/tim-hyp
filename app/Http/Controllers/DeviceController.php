<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DeviceController extends Controller
{
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $taxons = Taxon::whereIsRoot()->get();
        $taxon = Taxon::find($id);
        $devices = $taxon->devices();
        return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices]);
    }

}
