<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['first_name', 'last_name', 'city', 'expert_in'];
}
