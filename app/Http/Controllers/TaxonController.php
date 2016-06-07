<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Taxon;
use App\Service;

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

        $devices = $this->retrieveDevices($taxon);
        $services = $this->retrieveServices($taxon);
        $smartLives = $taxon->smartLives;

        return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices, 'services' => $services, 'smartLives' => $smartLives]);

    }

    private function retrieveDevices($taxon){
        $compId = Input::get('company');

        if(isset($compId)){
            $devices = $taxon->devices()->where('company_id', $compId)->get();
        }
        else{
            $devices = $taxon->devices;
        }
        return $devices;
    }

    private function retrieveServices($taxon){
        if($taxon->most_popular){
            $services = Service::mostPopular();
        }
        else {
            $services = $taxon->services;
        }

        return $services;
    }

  }
