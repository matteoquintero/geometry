<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video';
    public $timestamps = false;
}
