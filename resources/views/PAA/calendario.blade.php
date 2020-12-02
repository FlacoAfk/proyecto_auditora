@extends('navegacion')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Calendario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="//www.calendariodecolombia.com/calendario_mini1.php?mes=<?php echo date("n")-1; ?>&year=<?php echo date("Y"); ?>" width="100%" style="min-height: 330px;border:none" scrolling="no" > </iframe>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dias_habiles">
            Ver dias habiles
        </button>
        @extends('modales.dias_habiles')
    </div>
@endsection
