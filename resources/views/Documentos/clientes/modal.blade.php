{!! Form::open(['route'=>['Documentos.clientes.destroy',$cliente->id],'method'=>'delete']) !!}
<div class="modal fade" id="modal-delete-{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-danger" id="exampleModalLabel">
                <i class="fas fa-exclamation-triangle"></i>
                Confirmar Accion
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Esta seguro de que desea eliminar este item del sistema, recuerda que si este items tiene asociado otros items, estos tambien seran borrados
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="far fa-times-circle"></i> Cerrar
        </button>
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash-alt"></i> Eliminar
        </button>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}