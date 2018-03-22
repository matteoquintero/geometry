<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'view';
    public $timestamps = false;
}
