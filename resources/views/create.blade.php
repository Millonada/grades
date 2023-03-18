<x-app>
    <h1>Registra un nueva materia</h1>

    <form action="{{route('materia.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       @include('form',['method'=>'create'])
      </form>
</x-app>