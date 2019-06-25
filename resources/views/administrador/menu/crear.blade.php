@extends("theme.$theme.layout")
@section('titulo')
Sistema Menú
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Menús</h3>
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="box-body">
                    @include('administrador.menu.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-8">
                            @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection