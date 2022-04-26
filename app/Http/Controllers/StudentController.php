<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    public function ViewStudents(){
        $Student = student::All();
        return $Student;
    }
}
