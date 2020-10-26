@extends('principal')

@section('seccion')
<h1 style="text-align:Center;"> Nosotros</h1>

@foreach($equipo as $item)

<a href="{{route('nosotros',$item) }}" class="h3 text-danger">{{$item}}</a><br>

@endforeach

@if(!empty($nombre))

   @switch($nombre)

          @case($nombre=='Ingnacio')
                 <h1 class="mt-5">Bienvenido  {{$nombre}}</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                     Corporis libero, eaque dolores laudantium earum amet eveniet rem, 
                     ipsam magni alias officia quos, facere nisi nostrum debitis eligendi 
                     impedit veritatis inventore.</p>
                 
          @break

          @case($nombre=='Gustavo')
                 <h1 class="mt-5">Bienvenido  {{$nombre}}</h1>
                 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis libero, eaque dolores laudantium earum amet eveniet rem, 
                    ipsam magni alias officia quos, facere nisi nostrum debitis eligendi 
                    impedit veritatis inventore.</p>
          @break

           @case($nombre=='Natalia')
                 <h1 class="mt-5">Bienvenido  {{$nombre}}</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis libero, eaque dolores laudantium earum amet eveniet rem, 
                    ipsam magni alias officia quos, facere nisi nostrum debitis eligendi 
                    impedit veritatis inventore.</p>
          @break
           @case($nombre=='Karla')
                 <h1 class="mt-5">Bienvenido  {{$nombre}}</h1>
                 <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis libero, eaque dolores laudantium earum amet eveniet rem, 
                    ipsam magni alias officia quos, facere nisi nostrum debitis eligendi 
                    impedit veritatis inventore.</p>
          @break

           @case($nombre=='Pedro')
                 <h1 class="mt-5">Bienvenido  {{$nombre}}</h1>

                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis libero, eaque dolores laudantium earum amet eveniet rem, 
                    ipsam magni alias officia quos, facere nisi nostrum debitis eligendi 
                    impedit veritatis inventore.</p>
          @break

         

   @endswitch

@endif


@endsection

