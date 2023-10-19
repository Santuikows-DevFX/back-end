<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $pk = 'id';
    protected $fillable = [
        'student_name',
        'student_pass',
        'student_course',
        'student_year_level',
        'student_section',
        'student_term',
        'student_email_address',
        'student_contact_number',
        'student_age',
        'birth_date',
        'student_religion',
        'fathers_name',
        'mothers_name',
        'guardians_name',
        'payment_type',
        'mode_of_payment',
        'display_image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'student_pass',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
