<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Company extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $auditInclude = [];
    protected $guarded = [];


    protected $fillable = [
        'companyName' ,
        'contactPerson' ,
        'dob' ,
        'ecoRegion',
        'landType',
        'farmSize',
        'ward',
        'district',
        'province',
        'mobileNumber',
        'NationalId',
        'regNumber',
        'inputter',
    ];
}
