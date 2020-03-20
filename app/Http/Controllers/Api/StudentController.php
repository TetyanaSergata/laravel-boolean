<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;

  public function __construct()
  {
      $this->getAllStudents();
  }

  private function getAllStudents()
  {
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
        'img' => 'https://www.boolean.careers/images/students/poggini.png',
        'nome' => 'Paola Poggini',
        'eta' => '(24 anni)',
        'azienda' => 'Prima Assicurazioni',
        'ruolo' => 'junior software engineer ',
        'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
        'genere' => 'f'
      ],
      [
        'img' => 'https://www.boolean.careers/images/students/masetti.png',
        'nome' => 'Loana Masetti',
        'eta' => '(36 anni)',
        'azienda' => 'The Zen Agency',
        'ruolo' => 'web developer',
        'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
        'genere' => 'f'
      ],
      [
        'img' => 'https://www.boolean.careers/images/students/patruno.png',
        'nome' => 'Davide Patruno',
        'eta' => '(29 anni)',
        'azienda' => 'ArmadioVerde',
        'ruolo' => 'web developer',
        'descrizione' => 'Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.',
        'genere' => 'm'
      ]
    ];
  }

    public function all() {
      $students = $this->students;
      return response()->json($students);
    }
}
