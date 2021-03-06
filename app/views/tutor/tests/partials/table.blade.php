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
        <!-- Presentar Link -->
        <a class="btn btn-xs btn-success add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.presentations.show", [$test->id,1]) }}'data-original-title="Iniciar Presentación" data-container="body">
          <i class="fa fa-eye fa-2x"></i>
        </a>
        @if ($test->is_active)
          <!-- Deactivate Link -->
          <a class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.deactivate", $test->id) }}' data-original-title="Desactivar Presentación" data-container="body">
            <i class="fa fa-circle fa-2x"></i>
          </a>
        @else
          <!-- Activate Link -->
          <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.activate", $test->id) }}' data-original-title="Activar Presentación" data-container="body">
            <i class="fa fa-circle fa-2x"></i>
          </a>
        @endif
        <!-- Edit Link -->
        <a class="btn btn-xs btn-success add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.edit", $test->id) }}'data-original-title="Editar Datos de la Presentación" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Questions Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.questions.index", $test->id) }}'data-original-title="Gestionar Diapositivas" data-container="body">
          <i class="fa fa-question fa-2x"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>