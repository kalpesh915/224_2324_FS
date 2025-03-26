<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function getAllData(){
        $studentsData = student::all();
        return view("alldata", ["studentsData" => $studentsData]);
    }

    public function getPageData(){
        //$studentsData = student::all();
        $studentsData = student::paginate(10);
        return view("pagedata", ["studentsData" => $studentsData]);
    }
}
