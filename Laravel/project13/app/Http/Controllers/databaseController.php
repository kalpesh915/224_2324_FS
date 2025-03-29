<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    public function getData(){
        //return DB::table("students")->get();
        //return DB::table("students")->get(["id", "fname", "lname"]);
        //return DB::table("students")->get(["*"]);
        //return DB::table("students")->where("fname", "het")->get();
        //return DB::table("students")->find(5);
        //return DB::table("students")->count();

        /*return DB::table("students")->insert([
            "fname" => "Kalpesh",
            "lname" => "Chauhan",
            "city" => "Rajkot",
            "email" => "kalpesh@gmail.com"
        ]);*/

        /*return DB::table("students")->where("id", "=", 1)
        ->update([
            "fname" => "Kalpesh",
            "lname" => "Chauhan",
            "city" => "Rajkot",
            "email" => "kalpesh@gmail.com"
        ]);*/

        //return DB::table("students")->where("id", "=", "5")->delete();

        //return DB::table("students")->sum("id");
        //return DB::table("students")->max("id");
        //return DB::table("students")->min("id");
        //return DB::table("students")->avg("id");
    }

    public function joinData(){
        //return DB::table("students")->get();
        
        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->get();

        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->where("students.id", "=", "3")->get();

        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->where("students.id", "=", "3")->select(["students.id", "students.fname", "students.lname", "attendance.absents", "attendance.presents"])->get();
    }
}
