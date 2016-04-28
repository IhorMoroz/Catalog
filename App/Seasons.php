<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Seasons extends Model
{
    protected $table = 'seasons';

    public static function getSeasons(){
        return DB::table('seasons')->get();
    }
}
