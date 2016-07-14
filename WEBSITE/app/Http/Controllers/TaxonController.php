<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Taxon;
use App\SmartLifeService;
use App\AssistanceService;

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
        $assistanceServices = $this->retrieveAssistanceServices($taxon);
        $smartLifeServices = $taxon->smartLifeServices;

        return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices, 'assistanceServices' => $assistanceServices, 'smartLifeServices' => $smartLifeServices]);

    }

    private function retrieveDevices($taxon){
        $compId = Input::get('company');

        if(isset($compId)){
            $devices = $taxon->devices()->where('company_id', $compId)->paginate(12);
        }
        else{
            $devices = $taxon->devices()->paginate(12);
        }
        return $devices;
    }

    private function retrieveAssistanceServices($taxon){
        if($taxon->most_popular){
            $assistanceServices = AssistanceService::mostPopular();
        }
        else {
            $assistanceServices = $taxon->assistanceServices;
        }

        return $assistanceServices;
    }

  }
