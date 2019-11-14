<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Suivi extends Model
{
    protected $fillable = ['utilisateurs_id', 'jour', 'calorie'];
}
