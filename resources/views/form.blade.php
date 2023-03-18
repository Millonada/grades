<div class="form-group">
    <label for="exampleFormControlInput1">Nombre asignatura</label>
    <input type="text" class="form-control" name="asignatura" placeholder="Matematicas" value="{{$asig->asignatura ?? ''}}">
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Actividad</label>
      <input type="text" class="form-control" name="actividad" placeholder="actividad 1" value="{{$asig->actividad ?? ''}}">
  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Calificacion</label>
    <input class="form-control" name="cal" value="{{$asig->cal ?? ''}}"  >
  </div>

  <button type="submit" class="btn btn-primary mb-2">{{$method=='create' ? 'Registrar':'Actualizar'}}</button><br>
  <a href="{{route('materia.index')}}" class="btn btn-danger mb-2">Cancelar</a>