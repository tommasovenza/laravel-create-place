<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
        // $students = [
        //     [
        //         'nome' => 'Tommaso',
        //         'cognome' => 'Venza',
        //         'voto' => 9
        //     ],
        //     [
        //         'nome' => 'Alessia',
        //         'cognome' => 'Calbini',
        //         'voto' => 6
        //     ],
        //     [
        //         'nome' => 'Simone',
        //         'cognome' => 'Bellini',
        //         'voto' => 5
        //     ]
        // ];

        $students = Student::all();
    
        return view('students', [
            'teacher' => 'Michele',
            'eta_teacher' => 38,
            'students' => $students,
        ]);
    }
}

