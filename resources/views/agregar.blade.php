@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nueva persona</h5>
    <div class="card-body">

        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required>
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <label for="">Cedula</label>
                <input type="number"name="cedula"class="form-control" required>
                <label for="">Telefono</label>
                <input type="number"name="telefono"class="form-control" required>
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>

            </form>
        </p>

    </div>
</div>
<script>
     var inputs = ["paterno", "materno", "nombre", "cedula", "telefono"];
    for (var i = 0; i < inputs.length; i++) {
        document.getElementById(inputs[i]).addEventListener("input", function(e) {
            var regex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$/; // Para campos de texto
            if (e.target.type === "number") {
                regex = /^[0-9]*$/; // Para campos de número
            }
            if (!regex.test(e.target.value)) {
                e.target.value = e.target.value.substring(0, e.target.value.length - 1);
            }
        });
    }
</script>
@endsection


