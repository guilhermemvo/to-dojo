@extends('template.default')

@section('content')
<h1>Criar um TODO</h1>

@if ($errors->any())
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Erro!</strong>
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => 'todos.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Tarefa') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descrição') !!}
        {!! Form::textarea('description', Input::old('description'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('completed', 'Status') !!}
        {!! Form::select('completed', array('0' => 'Not Completed', '1' => 'Completed'), Input::old('completed'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Criar um TODO', array('class' => 'btn btn-primary form-control')) !!}

{!! Form::close() !!}
@endsection