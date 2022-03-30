<?php

namespace App;

use App\filters\core\HasModelFilter;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Individual extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasModelFilter;
    protected $auditInclude = [];
    protected $guarded = [];


    protected $fillable = [
        'name' ,
        'surname' ,
        'dob' ,
        'ecoRegion',
        'landType',
        'farmSize',
        'ward',
        'district',
        'province',
        'mobileNumber',
        'NationalId',
        'gender',
        'inputter',
        'individualRegNo',
        'season',
        'maize',
        'wheat',
        'soyabeans',
        'sunflower',
        'whiteSorghum',
        'redSorghum',
        'sugarBeans',
        'seasonHectrage',
        'additionalCrop',
        'maizeHectrage',
        'wheatHectrage',
        'sugarBeansHectrage',
        'sunflowerHectrage',
        'red_sorghumHectrage',
        'white_sorghumHectrage',
    ];
}
