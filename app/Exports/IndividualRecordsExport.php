<?php

namespace App\Exports;
use App\Individual;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class IndividualRecordsExport implements FromCollection
{

    public function collection()
    {
        return Individual::all();
    }
}
