<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Events extends Model
{
    use HasFactory;

    public function Events(){

    }

    public function getAll()
    {
        return $user = DB::table('events')->get();
    }


    public function getPage()
    {
        return $user = DB::table('events')->take(15)->get();
    }


    public function getById($id)
    {
        return $user = DB::table('events')->where('id', '=', $id)->first();
    }

}
