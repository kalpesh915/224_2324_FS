<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class studentController extends Controller
{
    //
    public function addProcess(Request $request)
    {
        //return $request->input();
        $student = new Student();

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");
        $student->gender = $request->input("gender");

        $student->save(); // add data in database

        return redirect("/")->with("success", "New Student Created");
    }

    // get All Students
    public function getAllStudents()
    {
        $studentsData = Student::all();
        return view("viewstudents", ["studentsData" => $studentsData]);
    }

    // delete student
    function deleteStudent($id)
    {
        $studentData = Student::find($id);
        if ($studentData != null) {
            $studentData->delete();

            return redirect("/viewstudents")->with("success", "Data Deleted");
        } else {
            return redirect("/viewstudents")->with("error", "Invalid ID for Delete Data");
        }
    }

    public function getStudent($id)
    {
        $studentData = Student::find($id);
        if ($studentData != null) {
            return view("editstudent", ["studentData" => $studentData]);
        } else {
            return redirect("/viewstudents")->with("error", "Invalid ID for Get Data");
        }
    }

    // Update
    public function updateProcess(Request $request)
    {
        $studentData = Student::find($request->input("id"));
        if ($studentData != null) {
            $studentData->fname = $request->input("fname");
            $studentData->lname = $request->input("lname");
            $studentData->email = $request->input("email");
            $studentData->phone = $request->input("phone");
            $studentData->gender = $request->input("gender");

            $studentData->save(); // add data in database

            return redirect("/viewstudents")->with("success", "Student Updated");
        } else {
            return redirect("/viewstudents")->with("error", "Invalid ID for Edit Data");
        }
    }
}
