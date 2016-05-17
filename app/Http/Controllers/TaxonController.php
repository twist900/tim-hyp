<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaxonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taxon = Taxon.find($id);
        if($taxon){
            $devices = $taxon->devices();
        }
        return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices]);
    }

  }
