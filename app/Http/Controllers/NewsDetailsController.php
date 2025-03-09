<?php

namespace App\Http\Controllers;

use App\Models\newsDetails;
use App\Http\Requests\StorenewsDetailsRequest;
use App\Http\Requests\UpdatenewsDetailsRequest;
use DB;
class NewsDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $dataNDetais = DB::select("SELECT id, TitreActualité, DescriptionActualité, ImageActualité,  DATE_FORMAT(DatePublication, '%d-%m-%Y') as DatePublication, HeurePublication, tag FROM news WHERE Publié='1' AND id=$id");
        return view('newsDetails',['dataNDetais'=>$dataNDetais]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenewsDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(newsDetails $newsDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsDetails $newsDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenewsDetailsRequest $request, newsDetails $newsDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newsDetails $newsDetails)
    {
        //
    }
}
