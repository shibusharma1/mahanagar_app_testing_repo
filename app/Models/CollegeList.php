<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollegeList extends Model
{
        use HasFactory;

    protected $fillable = [
        'serial_no',
        'palika',
        'district',
        'school_code',
        'school_name',
        'principal',
        'contact_number',
        'email',
    ];
        public function users()
    {
        return $this->belongsToMany(User::class, 'applicant_college_selections', 'college_id', 'user_id')
                    ->withPivot('priority')
                    ->withTimestamps();
    }
}
