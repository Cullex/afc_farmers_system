<?php

namespace App\Http\Controllers;

use App\Exports\CompanyRecordsExport;
use App\Individual;
use App\Company;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $records = Company::latest()->paginate(10);
        return api()->data('records', $records)->build();
    }

    public function downloadCompanyRecords(){
        return Excel::download(new CompanyRecordsExport, 'CompanyRecordsList.xlsx');
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
            'companyName' => ['required'],
            'contactPerson' => ['required'],
            'dob' => ['required'],
            'ecoRegion' => ['required'],
            'landType' => ['required'],
            'farmSize' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'mobileNumber' => ['required', 'starts_with:263', 'min:12'],
            'NationalId' => ['required', 'min:13'],
            'regNumber' => ['required'],

        ]);

        $model = Company::query()->create([
            'ward' => $request->get('ward'),
            'companyName' => $request->get('companyName'),
            'contactPerson' => $request->get('contactPerson'),
            'dob' => $request->get('dob'),
            'ecoRegion' => $request->get('ecoRegion'),
            'landType' => $request->get('landType'),
            'farmSize' => $request->get('farmSize'),
            'district' => $request->get('district'),
            'province' => $request->get('province'),
            'mobileNumber' => $request->get('mobileNumber'),
            'NationalId' => $request->get('NationalId'),
            'regNumber' => $request->get('regNumber'),
            'inputter' => auth()->user()->name,
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
        $record = Company::findorfail($id);
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
            'companyName' => ['required'],
            'contactPerson' => ['required'],
            'dob' => ['required'],
            'ecoRegion' => ['required'],
            'landType' => ['required'],
            'farmSize' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'mobileNumber' => ['required', 'starts_with:263', 'min:12'],
            'NationalId' => ['required', 'min:13'],
            'regNumber' => ['required'],

        ]);

        $model = Company::findorfail($request->id)->update([
            'ward' => $request->get('ward'),
            'companyName' => $request->get('companyName'),
            'contactPerson' => $request->get('contactPerson'),
            'dob' => $request->get('dob'),
            'ecoRegion' => $request->get('ecoRegion'),
            'landType' => $request->get('landType'),
            'farmSize' => $request->get('farmSize'),
            'district' => $request->get('district'),
            'province' => $request->get('province'),
            'mobileNumber' => $request->get('mobileNumber'),
            'NationalId' => $request->get('NationalId'),
            'regNumber' => $request->get('regNumber'),
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

    public function companyRecords(){
        $companyRecords =  Company::latest()->paginate(10);
        return api()->data('companyRecords', $companyRecords)->build();
    }
}
