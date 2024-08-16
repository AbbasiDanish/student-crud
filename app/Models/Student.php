<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

                'name',
                'email',
                'phone',
                'address',
                'profile_picture',
                'date_of_birth',
                'gender',
                'enrollment_date',
                'status',
                'parent_guardian_name',
                'parent_guardian_phone',



    ];
}