<form id="add-row-form" action="{{ route('bancas.inactive', $register->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal fade text-left" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success white">
                    <h4 class="modal-title white">Apagar Conta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <input type="hidden" name="id" id="id-input">

                <div class="modal-body">
                    <p>Você certeza que deseja <b>inativar</b> o registro?</p>
                </div>

                <input type="hidden" name="status" value="Inactive">

                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>