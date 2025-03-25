<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    public function getAllData(){
        //echo "Function Called";
        //return DB::select("select * from students");

        //return student::all(["id", "fname", "lname"]);
        return student::all();
    }
}
