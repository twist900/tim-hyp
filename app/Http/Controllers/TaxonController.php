<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Taxon;

use Illuminate\Support\Facades\Input;

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
        $taxon = Taxon::find($id);
        $compId = Input::get('company');
        if($taxon){ 
            if(isset($compId)){
                $devices = $taxon->devices()->where('company_id', $compId)->get();
            }
            else{
                $devices = $taxon->devices()->get();
            }
        }
        return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices]);

    }

  }
