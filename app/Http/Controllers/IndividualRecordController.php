<?php

namespace App\Http\Controllers;

use App\Exports\IndividualRecordsExport;
use App\filters\IndividualFilter;
use App\Individual;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Maatwebsite\Excel\Facades\Excel;

class IndividualRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(IndividualFilter $filter)
    {
        $records = Individual::filter($filter)->paginate(10);
        return api()->data('records', $records)->build();
    }

    //return farmers list
    public function listFarmers(IndividualFilter $filter){
        $records = Individual::filter($filter)->paginate(10);
        return api()->data('records', $records)->build();
    }

    public function downloadIndividualRecords(){
        return Excel::download(new IndividualRecordsExport, 'IndividualRecordsList.xlsx');
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
            'ward' => ['required'],
            'name' => ['required'],
            'dob' => ['required'],
            'ecoRegion' => ['required'],
            'landType' => ['required'],
            'farmSize' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'mobileNumber' => ['required', 'starts_with:263', 'min:12'],
            'NationalId' => ['required', 'min:10'],
        ]);

        $individualRegNo = IdGenerator::generate(['table' => 'individuals', 'length' => '8', 'prefix' => '100']);

        $model = Individual::query()->create([
            'ward' => $request->get('ward'),
            'name' => $request->get('name'),
            'dob' => $request->get('dob'),
            'ecoRegion' => $request->get('ecoRegion'),
            'landType' => $request->get('landType'),
            'farmSize' => $request->get('farmSize'),
            'district' => $request->get('district'),
            'province' => $request->get('province'),
            'mobileNumber' => $request->get('mobileNumber'),
            'NationalId' => $request->get('NationalId'),
            'gender' => $request->get('gender'),
            'inputter' => auth()->user()->name,
            'individualRegNo' => $individualRegNo,
            'season' => 'N/A',

        ]);


        return api()->data('model', $model)->build('Individual Record Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $record = Individual::findorfail($id);
        return api()->data('record', $record)->build();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Request $request)
    {
        $request->validate([
            'ward' => ['required'],
            'name' => ['required'],
            'surname' => ['required'],
            'dob' => ['required'],
            'ecoRegion' => ['required'],
            'landType' => ['required'],
            'farmSize' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'mobileNumber' => ['required', 'starts_with:263', 'min:12'],
            'NationalId' => ['required', 'min:13'],
            'gender' => ['required'],

        ]);

        $model = Individual::findorfail($request->id)->update([
            'ward' => $request->get('ward'),
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'dob' => $request->get('dob'),
            'ecoRegion' => $request->get('ecoRegion'),
            'landType' => $request->get('landType'),
            'farmSize' => $request->get('farmSize'),
            'district' => $request->get('district'),
            'province' => $request->get('province'),
            'mobileNumber' => $request->get('mobileNumber'),
            'NationalId' => $request->get('NationalId'),
            'gender' => $request->get('gender'),
            'inputter' => auth()->user()->name,
        ]);
        return api()->data('model', $model)->build('Individual Record Successfully Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    //return all individual records
    public function individualRecords(IndividualFilter $filter){
        $individualRecords =  Individual::filter($filter)->paginate(\request('size') ?? 30);

        return api()->data('records', $individualRecords)->build();
    }

    //search individual records
    public function searchIndividual(Request $request){
        $records = Individual::where(['name' => $request->get('keywords')])->get();
        return api()->data('records', $records)->build();
    }
}
