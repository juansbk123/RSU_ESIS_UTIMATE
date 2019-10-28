data central  o intefaz
inicio (despliegue de datos)



@foreach($lis_proyectos as $list)

<p>this is proyecto {{$list->cod_proy}}</p>



@endforeach

<a href="{{route ('proyecto.create')}}"> Crear</a>