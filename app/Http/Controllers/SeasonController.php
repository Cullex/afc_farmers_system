<?php

namespace App\Http\Controllers;

use App\Individual;
use App\Season;
use App\seasonStats;
use Illuminate\Http\Request;

class SeasonController extends Controller
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
       $request->validate([
           'season' => ['required']
       ]);

       $season = Season::query()->create([
           'season' => $request->get('season'),
       ]);
       return api()->data('season', $season)->build();
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,Individual  $model)
    {
        $model->update([
            'season' => $request->get('season'),
            'seasonHectrage' => $request->get('seasonHectrage'),
            'maize' => $request->get('maize'),
            'maizeHectrage' => $request->get('maizeHectrage'),
            'wheat' => $request->get('wheat'),
            'wheatHectrage' => $request->get('wheatHectrage'),
            'sugarBeans' => $request->get('sugarBeans'),
            'sugarBeansHectrage' => $request->get('sugarBeansHectrage'),
            'sunflower' => $request->get('sunflower'),
            'sunflowerHectrage' => $request->get('sunflowerHectrage'),
            'redSorghum' => $request->get('redSorghum'),
            'red_sorghumHectrage' => $request->get('red_sorghumHectrage'),
            'whiteSorghum' => $request->get('whiteSorghum'),
            'white_sorghumHectrage' => $request->get('white_sorghumHectrage'),
            'soyabeans' => $request->get('soyabeans')
        ]);

        $seasonStat = seasonStats::query()->create([
            'crop1' => $request->get('maize'),
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage,
            'crop2' => $request->get('wheat'),
            'crop3' => $request->get('sugar_beans'),
            'crop4' => $request->get('sunflower'),
            'crop5' => $request->get('red_sorghum'),
            'crop6' => $request->get('white_sorghum'),

        ]);
        return api()->data('seasonStat', $seasonStat)->build();
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
