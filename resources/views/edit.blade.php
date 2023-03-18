<x-app>
    <h1>Editar </h1>

    <form action="{{route('materia.update',$asig->id)}}" method="get" enctype="multipart/form-data">
        @csrf
       @include('form',['method'=>'update'])
      </form>
</x-app>