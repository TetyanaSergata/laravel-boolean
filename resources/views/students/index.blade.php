@extends('layouts.layout')

@section('main')
<div class="students">
    {{-- @foreach (config('students.student') as $student) --}}
    @foreach ($students as $student)

    <div class="student">
        <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
        <h2>
            {{ $student['nome'] }} {{ $student['eta'] }}
        </h2>
        <h4>
            Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{ $student['azienda'] }}
            come {{ $student['ruolo'] }}
        </h4>
        <p>
            {{ $student['descrizione'] }}
        </p>
    </div>
    @endforeach
</div>
@endsection
