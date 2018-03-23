<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visitor';
    public $timestamps = false;
}
