@extends('layouts.site')

@section('title', 'Tipster | Apostas')

@section('content')

    <!-- End Navigation Bar-->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ __('Apostas') }}</h4>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-rep-plugin">
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    @if ($registers->count())
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('#') }}</th>
                                                    <th>{{ __('Data') }}</th>
                                                    <th>{{ __('Evento') }}</th>
                                                    <th>{{ __('Mercado') }}</th>
                                                    <th>{{ __('Casa') }}</th>
                                                    <th>{{ __('Aposta') }}</th>
                                                    <th>{{ __('Resultado') }}</th>
                                                    <th>{{ __('%') }}</th>
                                                    <th>{{ __('Ação') }}</th>
                                                </tr>
                                            </thead>
                                            @foreach ($registers as $register)
                                                <tbody>
                                                    <tr>
                                                        <th><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{$register->id}}</a></th>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{ date("d/m/Y", strtotime($register->created_at)) }}</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{$register->event->name}}</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">14.81 (2.54%)</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{$register->home->name}}</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">R$ {{ number_format($register->value_bet, 2, ',', '.')}}</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">R$ {{ number_format($register->value_profit, 2, ',', '.')}}</a></td>
                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{ $register->value_bet}} %</a></td>
                                                        <td>
                                                            <a data-tt="tooltip" data-placement="top" title="" href="#" data-original-title="Editar" class="table-action-btn" data-toggle="modal" data-original-title="Editar" data-target="#ModalEdit"
                                                                data-whateverid="{{$register->id}}"><i class="ion-edit"></i>
                                                            </a>
                                                            <a data-tt="tooltip" data-placement="top" title="" href="#" data-original-title="Excluir" class="table-action-btn" data-toggle="modal" title="Excluir" data-target="#ModalDelete"
                                                                data-whateverid="{{$register->id}}"><i class="ion-trash-a" style="color: #ED3237"></i>
                                                            </a>  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    @else
                                        <h4><center>Não encontramos Nenhum registro</center></h4><br><br><br>
                                        <div class="col-md-12">
                                            <a href="#" style="color:black"><input type="button" value="Voltar" class="btn btn-white"></a>
                                        </div>                                          
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->
@endsection

@stack('js1')