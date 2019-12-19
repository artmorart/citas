@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($tratamiento, [ 'route' => ['tratamientos.update',$tratamiento->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('fecha_inicio', 'Fecha de inicio del tratamiento') !!}


                            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{$tratamiento->fecha_inicio->format('Y-m-d\TH:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha_fin', 'Fecha de final del tratamiento') !!}


                            <input type="datetime-local" id="fecha_fin" name="fecha_fin" class="form-control" value="{{$tratamiento->fecha_fin->format('Y-m-d\TH:i')}}" />


                        </div>
                        <div class="form-group">
                            {!!Form::label('descripcion', 'Descripción') !!}
                            <br>
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('medicamento_id', 'Medicamento') !!}
                            <br>
                            {!! Form::select('medicamento_id', $medicamentos, $tratamiento->medicamento_id,
                            ['class' => 'form-control', 'placeholder'=>'Ningún medicamento', value("")]) !!}

                        </div>

                        <div class="form-group">
                            {!!Form::label('cita_id', 'Cita') !!}
                            <br>
                            {!! Form::select('cita_id', $citas, $tratamiento->cita_id, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection