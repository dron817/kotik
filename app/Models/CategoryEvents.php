<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryEvents extends Model
{
    use HasFactory;

    public function Events(){

    }

    public function getAll()
    {
        return $user = DB::table('events')->get();
    }

    public function getEventById($id)
    {
        return $user = DB::table('events')->where('id', '=', $id)->first();
    }
}
