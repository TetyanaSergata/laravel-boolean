<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function index() {
      $students = $this->students;
      return view('students.index', compact('students'));
    }

    public function show($id) {

    }

    public function __construct() {
      $this->getAllStudents();
    }

    private function getAllStudents() {
      $this->students = [
        [
          'img' => 'https://www.boolean.careers/images/students/biagini.png',
          'nome' => 'Alessandro Biagini',
          'eta' => '(25 anni)',
          'azienda' => 'DISC SPA',
          'ruolo' => 'web developer',
          'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
          'genere' => 'm'
        ],
        [
          'img' => '',
          'nome' => '',
          'eta' => '',
          'azienda' => '',
          'ruolo' => '',
          'descrizione' => '',
          'genere' => 'm'
        ],
        [
          'img' => '',
          'nome' => '',
          'eta' => '',
          'azienda' => '',
          'ruolo' => '',
          'descrizione' => '',
          'genere' => 'm'
        ],
        [
          'img' => '',
          'nome' => '',
          'eta' => '',
          'azienda' => '',
          'ruolo' => '',
          'descrizione' => '',
          'genere' => 'm'
        ]
      ];
    }
    //
    // // PROVA
    // // public function index() {
    // //   $students = [
    // //     [
    // //       'img' => 'https://www.boolean.careers/images/students/biagini.png',
    // //       'nome' => 'Alessandro Biagini',
    // //       'eta' => '(25 anni)',
    // //       'azienda' => 'DISC SPA',
    // //       'ruolo' => 'web developer',
    // //       'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // //     ]
    // //   ];
    // // }
}
