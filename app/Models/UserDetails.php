<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserDetails extends Model
{
    use HasFactory;


    protected $fillable = [
        'region',
        'regDesc',
        'province',
        'municipality',
        'barangay',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function regions()
    {
            return $this->hasMany('App\Models\Region');
    }



}
