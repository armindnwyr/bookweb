@extends('adminlte::page')

@section('title', 'Crear Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar Informe</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('informes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre del Informe</label>
                                <input type="text" class="form-control" id="inputEmail4" name="nombre"
                                    value="{{ old('nombre') }}">
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Codigo del Informe</label>
                                <input type="text" class="form-control" id="inputEmail4" name="codigo"
                                    value="{{ old('codigo') }}">
                                @error('codigo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Centro de Practicas</label>
                                <input type="text" class="form-control" id="inputEmail4" name="centro"
                                    value="{{ old('centro') }}">
                                @error('centro')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Subir Informe</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pdf"
                                        value="{{ old('pdf') }}" accept="file/*">
                                    <label class="custom-file-label" for="inputGroupFile01">Seleccione un pdf</label>
                                </div>
                                @error('pdf')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Fecha del Informe</label>
                                <input type="date" class="form-control" id="inputEmail4" name="fecha"
                                    value="{{ old('fecha') }}">
                                @error('fecha')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label class="mb-3">Categoria</label>
                              <select class="selectpicker form-control" data-style="btn-default" data-size="10" data-live-search="true" name="categoria">
                                <option >Seleccionar...</option>
                                @foreach ($categoria as $item)
                                <option value="{{ $item->id }}">{{ $item->cate_nombre }}</option>
                                @endforeach
                              </select>
                              @error('categoria')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mb-3">Docente</label>
                                <select class="selectpicker form-control" data-style="btn-default" data-size="5" data-live-search="true" name="docente" >
                                  <option >Seleccionar...</option>
                                    @foreach ($docente as $item)
                                        <option value="{{ $item->id }}">{{ $item->doce_nombre }} {{ $item->doce_paterno}} {{ $item->doce_materno }}</option>
                                    @endforeach
                                </select>
                                @error('docente')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mb-3">Autor</label>
                                <select class="selectpicker form-control dropup" data-dropup-auto="false" data-style="btn-default" data-size="5" data-live-search="true" name="autor">
                                <option >Seleccionar...</option>
                                  @foreach ($autor as $item)
                                        <option value="{{ $item->id }}">{{ $item->au_nombre }} {{ $item->au_paterno }} {{ $item->au_materno }}</option>
                                  @endforeach
                                </select>
                                @error('autor')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Descripci??n</label>
                            <textarea class="form-control col-md-12" rows="3" name="descripcion" value="{{ old('descripcion') }}"></textarea>
                            @error('descripcion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('informes.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
            {{-- 
    <div class="shadow p-5 mb-5 bg-white rounded">
        
    </div> --}}
        </div>
    </div>
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}

<script>
  $(function () {
    $('select').selectpicker();
});
</script>
@stop
