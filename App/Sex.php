<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sex extends Model
{
    protected $table = 'sex';

    public static function getSex()
    {
        return DB::table('sex')->get();
    }
}
