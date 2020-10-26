
@extends('principal')

@section('seccion')

<h1 style="text-align:Center;"> Notas de grupo </h1>


<div class="container my-4">
        
    <h1 class="display-4">Notas</h1>
    @if (session('mensaje'))

    <div class="alert alert-success">
    {{ session('mensaje')}}
    </div>
        
    @endif
  
<form action="{{ route('notas.crear') }}" method="POST">
 
 
  @csrf 
  @error('nombre')
  <div class="alert alert-danger">
      El nombre es obligatorio
  </div>
  @enderror

  @error('descripcion')
  <div class="alert alert-danger">
      La descripcion de la nota es  obligatoria !!
  </div>
  @enderror



<input type="text" name="nombre" placeholder="Nombre"  class="form-control mb-2" value="{{ old('nombre')}}">
  <input type="text" name="descripcion" placeholder="Descripcion"  class="form-control mb-2" value="{{ old('descripcion')}}" >

   <button class="btn btn-success btn-block" type="submit">Agregar</button>
</form>


    <table class="table">
      <thead>
        <tr>
          <th  class="bg-primary" scope="col">Identificador</th>
          <th class="bg-primary" scope="col">Nombre</th>
          <th  class="bg-primary" scope="col">Descripcion</th>
          <th  class="bg-primary" scope="col">Acciones</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($notas as $item)
        <tr>
          <th scope="row">{{ $item->id}}</th>
          <td>
          <a href="{{route('notas.detalle',$item)}}">
              {{ $item->nombre}}
            </a>
            
          </td>
          <td>{{ $item->descripcion}}</td>
          <td>
            <a href="{{ route('notas.editar', $item ) }}" class="btn btn-warning btn-sm" >Editar</a>
           
          <form action="{{route('notas.eliminar',$item)}}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf 
                  
                 <button class=" btn btn-danger btn-sm" type="submit">Eliminar</button>
               
            </form>
          
          
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
       
    {{ $notas->links() }}

    @endsection
</div>

