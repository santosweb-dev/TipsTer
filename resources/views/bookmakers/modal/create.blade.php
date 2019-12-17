<form id="add-row-form" action="{{route('bancas.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal fade text-left" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success white">
                    <h4 class="modal-title white" id="myModalLabel8">Nova Banca</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{ __('Banca') }}</label> 
                        <select class="form-control" name="bookmaker_id">                                                  
                            <option>Selecione o Banca</option>                            
                            @foreach($bookmakers as $bookmaker)
                                <option value="{{ $bookmaker->id }}">{{ $bookmaker->name }}</option>
                            @endforeach                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ __('Saldo') }}</label> 
                        <input type="text" class="form-control" name="balance">
                    </div>
                    <div class="form-group">
                        <label>{{ __('Username Banca') }}</label> 
                        <input type="text" class="form-control" name="user_name_bookmaker">
                    </div>
                    <div class="form-group">
                        <label>{{ __('Moeda') }}</label> 
                        <input type="text" class="form-control" name="">
                    </div>
                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>