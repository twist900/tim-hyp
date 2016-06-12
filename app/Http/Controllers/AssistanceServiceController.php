<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AssistanceService;

class AssistanceServiceController extends Controller
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
        $service = AssistanceService::find($id);
        $service->hit();

        $faqs = $service->faqs;

        return view('service.show', ['service' => $service, 'faqs' => $faqs]);
        //
    }

}
