<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visitors';
    public $timestamps = false;
}
