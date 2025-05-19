<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'songs';

    protected $guarded = [];

    // protected $fillable = [
    //     'song_name',
    //     'author',
    //     'release_year'
    // ];
}
