<?php

namespace App\Http\Controllers;

use App\Individual;
use App\seasonStats;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachWheat(Individual $model)
    {
        $model->update([
            'wheat' => 'Wheat',
        ]);
        $seasonStat = seasonStats::query()->create([
            'crop2' => 'wheat',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachSoyaBeans(Individual $model)
    {
        $model->update([
            'soyabeans' => 'Soya Beans',
        ]);
        $seasonStat = seasonStats::query()->create([
            'crop3' => 'Soya Beans',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Individual $model)
    {
        $model->update([
            'maize' => 'maize',
        ]);

        $seasonStat = seasonStats::query()->create([
            'crop1' => 'maize',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachSunFlower(Individual $model)
    {
        $model->update([
            'sunflower' => 'Sun Flower',
        ]);

        $seasonStat = seasonStats::query()->create([
            'crop4' => 'Sun Flower',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachWhiteSorghum(Individual $model)
    {
        $model->update([
            'whiteSorghum' => 'White Sorghum'
        ]);

        $seasonStat = seasonStats::query()->create([
            'crop5' => 'white sorghum',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachSugarBeans(Individual $model)
    {
        $model->update([
            'sugarBeans' => 'Sugar Beans'
        ]);

        $seasonStat = seasonStats::query()->create([
            'crop6' => 'sugar beans',
            'farmerName' => $model->name,
            'season' => $model->season,
            'hectrage' => $model->seasonHectrage
        ]);
        return api()->data('seasonStat', $seasonStat)->build();
    }


    public function attachSeasonHectrage(Request $request,Individual $model)
    {
        $request->validate([
            'seasonHectrage' => ['required']
        ]);
        $model->update([
            'seasonHectrage' => $request->get('seasonHectrage')
        ]);
    }
}
