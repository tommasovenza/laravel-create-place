@extends('layouts.layout')

@section('main_content')

<h1>Pagina students</h1>

<h2>Teacher: {{ $teacher }} - età: {{ $eta_teacher }} </h2>


<div>

    @foreach ($students as $student)
        
    <ul>
        <li>Nome: {{ $student->nome }}</li>
        <li>Cognome: {{ $student->cognome }}</li>
        <li>Voto: {{ $student->voto }}</li>
        <li>Nome Classe: {{ $student->nome_classe }}</li>
    </ul>

    @endforeach
     
</div>

@endsection

