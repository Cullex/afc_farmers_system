<?php

namespace App\Http\Controllers;

use App\Individual;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $bulawayoRecords = Individual::query()->where(['province' => 'Bulawayo-02'])->get();
        return api()->data('bulawayoRecords', $bulawayoRecords)->build();
    }


    public function harare()
    {
        $harareRecords = Individual::query()->where(['province' => 'Harare-01'])->get();
        return api()->data('harareRecords', $harareRecords)->build();
    }

    //return total hectrage for harare province
    public function harareTotal()
    {
        $harareTotal = Individual::query()->where(['province' => 'Harare-01'])->sum('seasonHectrage');
        return api()->data('harareTotal', $harareTotal)->build();
    }


    public function show()
    {
        $bulawayoTotal = Individual::query()->where(['province'=> 'Bulawayo-02'])->sum('seasonHectrage');
        return api()->data('bulawayoTotal', $bulawayoTotal)->build();
    }


    public function midlands()
    {
        $midlandsRecords = Individual::query()->where(['province' => 'Midlands-09'])->get();
        return api()->data('midlandsRecords', $midlandsRecords)->build();
    }


    public function midlandsTotal()
    {
        $midlandsTotal = Individual::query()->where(['province'=> 'Midlands-09'])->sum('seasonHectrage');
        return api()->data('midlandsTotal', $midlandsTotal)->build();
    }

    public function manicaland ()
    {
        $manicalandRecords = Individual::query()->where(['province' => 'Manicaland-10'])->get();
        return api()->data('manicalandRecords', $manicalandRecords)->build();
    }

    public function manicalandTotal(){
        $manicalandTotal = Individual::query()->where(['province' => 'Manicaland-10'])->sum('seasonHectrage');
        return api()->data('manicalandTotal', $manicalandTotal)->build();
    }

    public function masvingo(){
        $masvingoRecords = Individual::query()->where(['province' => 'Masvingo-08'])->get();
        return api()->data('masvingoRecords', $masvingoRecords)->build();
    }

    public function masvingoTotal(){
        $masvingoTotal = Individual::query()->where(['province' => 'Masvingo-08'])->sum('seasonHectrage');
        return api()->data('masvingoTotal', $masvingoTotal)->build();
    }

    public function matNorthStats(){
        $matNorthStats = Individual::query()->where(['province' => 'Matebeleland North-06'])->get();
        return api()->data('matNorthStats', $matNorthStats)->build();
    }

    public function matNorthTotal(){
        $matNorthTotal = Individual::query()->where(['province' => 'Matebeleland North-06'])->sum('seasonHectrage');
        return api()->data('matNorthTotal', $matNorthTotal)->build();
    }

    public function matSouthStats(){
        $matSouthStats = Individual::query()->where(['province' => 'Matebeleland South-07'])->get();
        return api()->data('matSouthStats', $matSouthStats)->build();
    }
    public function matSouthTotal(){
        $matSouthTotal = Individual::query()->where(['province' => 'Matebeleland South-07'])->sum('seasonHectrage');
        return api()->data('matSouthTotal', $matSouthTotal)->build();
    }
    public function mashCentralStats(){
        $mashCentralStats = Individual::query()->where(['province' => 'Mashonaland Central-03'])->get();
        return api()->data('mashCentralStats', $mashCentralStats)->build();
    }
    public function mashCentralTotal(){
        $mashCentralTotal = Individual::query()->where(['province' => 'Mashonaland Central-03'])->sum('seasonHectrage');
        return api()->data('mashCentralTotal', $mashCentralTotal)->build();
    }

    public function mashEastStats(){
        $mashEastStats = Individual::query()->where(['province' => 'Mashonaland East-04'])->get();
        return api()->data('mashEastStats', $mashEastStats)->build();
    }

    public function mashEastTotal(){
        $mashEastTotal = Individual::query()->where(['province' => 'Mashonaland East-04'])->sum('seasonHectrage');
        return api()->data('mashEastTotal', $mashEastTotal)->build();
    }

    public function mashWestStats(){
        $mashWestStats = Individual::query()->where(['province' => 'Mashonaland West-05'])->get();
        return api()->data('mashWestStats', $mashWestStats)->build();
    }

    public function mashWestTotal(){
        $mashWestTotal = Individual::query()->where(['province' => 'Mashonaland West-05'])->sum('seasonHectrage');
        return api()->data('mashWestTotal', $mashWestTotal)->build();
    }
}
