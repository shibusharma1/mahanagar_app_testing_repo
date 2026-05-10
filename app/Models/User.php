<?php

namespace App\Models;


use App\Models\ApplicantAddress;
use App\Models\ApplicantDocuments;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
    // class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name_en',
        'name_ne',
        'image',
        'email',
        'phone',
        'password',
        'role',
        'is_active',
    ];

    public function applicant()
    {
        return $this->hasOne(Applicant::class);
    }
    public function address()
    {
        return $this->hasOne(ApplicantAddress::class, 'user_id');
    }

    public function documents()
    {
        return $this->hasOne(ApplicantDocuments::class, 'user_id');
    }
    
    public function collegeSelections()
    {
        return $this->belongsToMany(CollegeList::class, 'applicant_college_selections', 'user_id', 'college_id')
            ->withPivot('priority')
            ->withTimestamps();
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
