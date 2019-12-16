    <form id="add-row-form" action="{{ route('apostas.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal fade text-left" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title" style="color:white">Nova Conta</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Banca*</label>
                                    <select class="form-control" name="bookmaker_id">
                                        @foreach($bookmakers as $bookmaker)
                                            <option value="{{ $bookmaker->id }}">{{ $bookmaker->name }}</option>
                                        @endforeach   
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evento*</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Data</label>
                                    <input type="date" class="form-control" name="date_event"> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Esporte</label>
                                    <select class="form-control" name="sport_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option>Selecione um Esporte</option>    
                                        @foreach($sports as $sport)
                                            <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Competição</label>
                                    <select class="form-control" name="competition_id" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                        <option>Selecione uma competição</option>    
                                        @foreach($competitions as $competition)
                                            <option value="{{ $competition->id }}">{{ $competition->name }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mercado/Estratégia</label>

                                   <!-- <select class="form-control select2 select2-hidden-accessible" name="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="3">Select</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="13">
                                        <option value="AK" data-select2-id="14">Alaska</option>
                                        <option value="HI" data-select2-id="15">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone" data-select2-id="16">
                                        <option value="CA" data-select2-id="17">California</option>
                                        <option value="NV" data-select2-id="18">Nevada</option>
                                        <option value="OR" data-select2-id="19">Oregon</option>
                                        <option value="WA" data-select2-id="20">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone" data-select2-id="21">
                                        <option value="AZ" data-select2-id="22">Arizona</option>
                                        <option value="CO" data-select2-id="23">Colorado</option><option value="ID" data-select2-id="24">Idaho</option><option value="MT" data-select2-id="25">Montana</option><option value="NE" data-select2-id="26">Nebraska</option><option value="NM" data-select2-id="27">New Mexico</option><option value="ND" data-select2-id="28">North Dakota</option><option value="UT" data-select2-id="29">Utah</option><option value="WY" data-select2-id="30">Wyoming</option></optgroup><optgroup label="Central Time Zone" data-select2-id="31"><option value="AL" data-select2-id="32">Alabama</option><option value="AR" data-select2-id="33">Arkansas</option><option value="IL" data-select2-id="34">Illinois</option><option value="IA" data-select2-id="35">Iowa</option><option value="KS" data-select2-id="36">Kansas</option><option value="KY" data-select2-id="37">Kentucky</option><option value="LA" data-select2-id="38">Louisiana</option><option value="MN" data-select2-id="39">Minnesota</option><option value="MS" data-select2-id="40">Mississippi</option><option value="MO" data-select2-id="41">Missouri</option><option value="OK" data-select2-id="42">Oklahoma</option><option value="SD" data-select2-id="43">South Dakota</option><option value="TX" data-select2-id="44">Texas</option><option value="TN" data-select2-id="45">Tennessee</option><option value="WI" data-select2-id="46">Wisconsin</option></optgroup><optgroup label="Eastern Time Zone" data-select2-id="47"><option value="CT" data-select2-id="48">Connecticut</option><option value="DE" data-select2-id="49">Delaware</option><option value="FL" data-select2-id="50">Florida</option><option value="GA" data-select2-id="51">Georgia</option><option value="IN" data-select2-id="52">Indiana</option><option value="ME" data-select2-id="53">Maine</option><option value="MD" data-select2-id="54">Maryland</option><option value="MA" data-select2-id="55">Massachusetts</option><option value="MI" data-select2-id="56">Michigan</option><option value="NH" data-select2-id="57">New Hampshire</option><option value="NJ" data-select2-id="58">New Jersey</option><option value="NY" data-select2-id="59">New York</option><option value="NC" data-select2-id="60">North Carolina</option><option value="OH" data-select2-id="61">Ohio</option><option value="PA" data-select2-id="62">Pennsylvania</option><option value="RI" data-select2-id="63">Rhode Island</option><option value="SC" data-select2-id="64">South Carolina</option><option value="VT" data-select2-id="65">Vermont</option><option value="VA" data-select2-id="66">Virginia</option><option value="WV" data-select2-id="67">West Virginia</option></optgroup>
                                    </select> --> 

                                    <select class="form-control" name="marketplace_id" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                        <option>Selecione um mercado</option>
                                        @foreach($marketplaces as $marketplace)
                                            <option value="{{ $marketplace->id }}">{{ $marketplace->name }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <label>Aposta</label>
                                <div class="input-group">
                                    <span class="input-group-addon">R$ </span>
                                    <input type="text" name="value_bet" data-allow-zero="false" data-affixes-stay="true" data-thousands="." data-decimal="," tabindex="6" name="stake" class="form-control money" id="stake" placeholder="0,00" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="result" class="control-label">Lucro/Prejuízo</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$ </span>
                                        <input type="text" name="value_profit" data-affixes-stay="true" data-thousands="." tabindex="7" data-decimal="," name="result" data-allow-negative="true" data-allow-zero="true" class="form-control money" placeholder="Lucro ou Prejuízo Obtido" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <label for="odd" class="control-label">Odd</label>
                                <input type="text" name="odd" class="form-control" maxlength="20" placeholder="Ex: 1.50" tabindex="8">
                            </div>
                        </div>
                        <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>