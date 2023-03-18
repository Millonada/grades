<x-app>
    <a href="{{route('materia.create')}}" class="btn btn-success">Agregar</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Asignatura</th>
            <th scope="col">Actividad</th>
            <th scope="col">Calificacion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($asignaturas as $asig)
            <tr>
                <th scope="row">{{$asig->id}}</th>
                <td>{{$asig->asignatura}}</td>
                <td>{{$asig->actividad}}</td>
                <td>{{$asig->cal}}</td>
               
                <td><a href="{{route('materia.show',$asig->id)}}"><i class="fa-solid fa-street-view"></i></a> | <a href="{{route('materia.edit',$asig->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="{{route('materia.delete',$asig->id)}}"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
              </tr>
            @endforeach
         
     
        </tbody>
      </table>
</x-app>