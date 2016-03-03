<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($tests as $test)
    <tr>
      <td>{{{$test->name}}}</td>
      <td>
        @if ($test->is_active)
          <div class="label label-table label-success">Activo</div>
        @else
          <div class="label label-table label-danger">Inactivo</div>
        @endif
      </td>
      <td>
        @if ($test->is_active)
          <!-- Deactivate Link -->
          <a class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.deactivate", $test->id) }}' data-original-title="Desactivar Prueba" data-container="body">
            <i class="fa fa-circle fa-2x"></i>
          </a>
        @else
          <!-- Activate Link -->
          <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.activate", $test->id) }}' data-original-title="Activar Prueba" data-container="body">
            <i class="fa fa-circle fa-2x"></i>
          </a>
        @endif
        <!-- Edit Link -->
        <a class="btn btn-xs btn-success add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.edit", $test->id) }}'data-original-title="Editar Nombre del Examen" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Questions Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.questions.index", $test->id) }}'data-original-title="Gestionar Preguntas del Examen" data-container="body">
          <i class="fa fa-question fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("tutor.tests.destroy",$test->id), 'method' => 'DELETE','class' => 'inline')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>