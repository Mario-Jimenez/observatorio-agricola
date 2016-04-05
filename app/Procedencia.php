<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'procedencia';

    public function precios()
    {
        return $this->hasMany('App\Precio', 'id_procedencia');
    }
}
