<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'phone',
        'otp',
        'id',
        'first_name',
        'last_name',
        'brith',
        'Gender',
        'place_of_brith',
        'Country_of_Residency',
        'Passport',
        'Issue_date',
        'Expiry_date',
        'Place_of_issue',
        'Arrival_date',
        'Profession',
        'Organization',
        'Visa duration',
        'Visa status',
        'Passport_picture',
        'id_picture',
        'Check-in_date',
        'Check-in_date1',
        'Check-out_date',
        'Check-out_date1',
        'Rom_type',
        'Rom_type1',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
