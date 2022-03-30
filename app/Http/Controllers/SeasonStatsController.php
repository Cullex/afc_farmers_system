<?php

namespace App\Http\Controllers;
use App\Individual;
use App\seasonStats;

class SeasonStatsController extends Controller
{
    public function maizeTotalRecords(){

        $maizeTotalRecords = seasonStats::query()->where(['season' => '2021/22 Summer', 'crop1' => 'maize'])->get();

        return api()->data('maizeTotalRecords', $maizeTotalRecords)->build();
    }

    public function maizeSeasonTotal(){
        $maizeSeasonTotal = seasonStats::query()->where(['season' => '2021/22 Summer', 'crop1' => 'maize'])->sum('hectrage');

        return api()->data('maizeSeasonTotal', $maizeSeasonTotal)->build();
    }

    public function wheatTotalRecords(){
        $wheatTotalRecords = seasonStats::query()->where(['season' => '2021/22 Summer', 'crop2' => 'wheat'])->get();

        return api()->data('wheatTotalRecords', $wheatTotalRecords)->build();
    }

    public function wheatSeasonTotal(){
        $wheatSeasonTotal = seasonStats::query()->where(['season' => '2021/22 Summer', 'crop2' => 'wheat'])->sum('hectrage');

        return api()->data('wheatSeasonTotal', $wheatSeasonTotal)->build();
    }

    public function maizeWinter2122(){
        $maizeTotalRecords = seasonStats::query()->where(['season' => '2021/22 Winter', 'crop1' => 'maize'])->get();

        return api()->data('maizeTotalRecords', $maizeTotalRecords)->build();
    }

    public function maizeWinterTotal2122(){
        $maizeSeasonTotal = seasonStats::query()->where(['season' => '2021/22 Winter', 'crop1' => 'maize'])->sum('hectrage');

        return api()->data('maizeSeasonTotal', $maizeSeasonTotal)->build();
    }

    public function wheatWinter2122(){
        $wheatTotalRecords = seasonStats::query()->where(['season' => '2021/22 Winter', 'crop2' => 'wheat'])->get();

        return api()->data('wheatTotalRecords', $wheatTotalRecords)->build();
    }

    public function wheatWinterTotal2122(){
        $wheatSeasonTotal = seasonStats::query()->where(['season' => '2021/22 Winter', 'crop2' => 'wheat'])->sum('hectrage');

        return api()->data('wheatSeasonTotal', $wheatSeasonTotal)->build();
    }

    public function sugarBeansWinter(){
        $sugarBeansRecords = seasonStats::query()->where(['season' => '2021/22 Winter', 'crop']);
    }
}
