<?php

namespace App\Http\Controllers;

use App\Models\SolicitorList;
use Illuminate\Http\Request;

class SolicitorListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SolicitorList::orderBy('amount','ASC')->get());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolicitorList  $solicitorList
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitorList $solicitorList)
    {
        return response()->json($solicitorList);
    }


}
