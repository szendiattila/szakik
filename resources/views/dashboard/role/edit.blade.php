@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Szaki módosítása</h1>

        {{ Form::model($expert, ['url' => ['dashboard/page', $expert],'method' => 'patch']) }}

        @include('dashboard.expert._form', ['submitButton' => 'Módosítás'])

    </div>
@stop