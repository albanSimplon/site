<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musculation extends Model
{
	protected $fillable = ['utilisateurs_id', 'jour', 'exercise', 'repetition', 'kilos', 'cardio_temps', 'cardio_calories', 'note'];
}

?>