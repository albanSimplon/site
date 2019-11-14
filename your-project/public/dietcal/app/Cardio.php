<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardio extends Model
{
	protected $fillable = ['utilisateurs_id', 'jour', 'cardio_temps', 'cardio_calories', 'note'];
}

?>