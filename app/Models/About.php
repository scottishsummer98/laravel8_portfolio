<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'first_Name','last_Name','profile_picture','address','phone_number','email','short_description'
    ];
}
