<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel-Boolean</title>
  </head>
  <body>
    {{-- Navbar --}}
    <div class="main_container">
      <nav>
        <ul>
          <li>
            <a class="{{ (Request::route()->getName() == 'static_page.index') ? 'active' : '' }}"
              href="{{route('static_page.index')}}">Home</a>
          </li>
          <li>
            <a href="">Corso</a>
          </li>
          <li>
            <a class="{{ (Request::route()->getName() == 'student.index') ? 'active' : '' }}"
              href="{{route('student.index')}}">Dopo il corso</a>
          </li>
          <li>
            <a href="{{route('static_page.lezione')}}">Lezione gratuita</a>
          </li>
          <li>
            <a href="">Candidati ora</a>
          </li>
        </ul>
      </nav>
    </div>
