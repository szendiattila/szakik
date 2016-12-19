<div class="form-group">
    {{ Form::label('last_name', 'Szaki vezetékneve') }}
    {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Szaki vezetékneve...']) }}
</div>

<div class="form-group">
    {{ Form::label('first_name', 'Szaki keresztneve') }}
    {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Szaki keresztneve...']) }}
</div>

<div class="form-group">
    {{ Form::label('city', 'Helység') }}
    {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Helység...']) }}
</div>

<div class="form-group">
    {{ Form::label('expert_in', 'Szakterület') }}
    {{ Form::text('expert_in', null, ['class' => 'form-control', 'placeholder' => 'Szakterület...']) }}
</div>

<div class="form-group">
    {{ Form::submit($submitButton, ['class' => 'form-control btn btn-primary']) }}
    <a class="btn btn-danger form-control" href="{{ url('dashboard/expert') }}">Mégse</a>
</div>

{{ Form::close() }}

@include('errors._form')