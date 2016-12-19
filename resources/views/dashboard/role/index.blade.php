@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success" href="/dashboard/expert/create">Új szaki felvitele</a>
    @if(count($experts) > 0)
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Név</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experts as $expert)
                    <tr>
                        <td>{{ $expert->last_name }} {{ $expert->first_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nem található szaki!</p>
    @endif

    {!! $experts->render() !!}
</div>
@stop