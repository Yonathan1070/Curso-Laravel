@extends("theme.$theme.layout")
@section("titulo")
    Inicio Administrador
@endsection

@section("styles")
    <link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('scriptsPlugins')
    <script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/Administrador/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-exito')
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Admin</h3>
                </div>
                <div class="box-body">
                    Bienvenido
                </div>
            </div>
        </div>
    </div>
@endsection