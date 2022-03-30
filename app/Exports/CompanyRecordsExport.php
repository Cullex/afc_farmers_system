<?php

namespace App\Exports;

use App\Company;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyRecordsExport implements FromCollection
{

    public function collection()
    {
        return Company::all();
    }
}
