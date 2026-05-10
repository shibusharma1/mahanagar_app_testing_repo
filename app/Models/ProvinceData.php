<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceData extends Model
{
    public $timestamps = false;
    protected $table = 'ProvinceData';

    protected $fillable = [
        'state_code',
        'state_name',
        'state_name_nep',
        'district_code',
        'district_name',
        'district_name_nep',
        'local_body_code',
        'local_body_name',
        'local_body_name_nep',
        'local_body_type_id'
    ];
}
