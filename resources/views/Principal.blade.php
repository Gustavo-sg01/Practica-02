<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>
        <nav class="navbar navbar-dark bg-dark">
               <a class="navbar-brand" href="#">
                   PRACTICA 02
                </a>     
        </nav>
        
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
   
           <div class="container">
                   <a href="{{route('inicio')}}"class="btn btn-primary btn-lg active">Inicio</a>
            </div>

           <div class="container">
            <a href="{{route('nosotros')}}" class="btn btn-primary btn-lg active">Nosotros</a>
            </div>

            <div class="container">
                 <a href="{{route('blogs')}}" class="btn btn-primary btn-lg active">Blog</a>
            </div>
   
            <div class="container">
                 <a href="{{route('album')}}"  class="btn btn-primary btn-lg active">Album </a>
            </div>

            <div class="container">
                <a href="{{route('notitas')}}" class="btn btn-primary btn-lg active">Notas</a>
            </div>

        </div>
       
    

         <div class="container">
             
              @yield('seccion')   
         </div>
   

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>