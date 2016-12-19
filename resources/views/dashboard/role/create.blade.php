@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Új szaki hozzáadása</h1>

        {{ Form::open(['url' => 'dashboard/expert']) }}

        @include('dashboard.expert._form', ['submitButton' => 'Mentés'])
    </div>
@stop