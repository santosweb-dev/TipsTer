@extends('layouts.app')

@section('title', 'Tipster | Apostas')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('Apostas') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Apostas') }} </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--<div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>-->
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header">
                                <!--<h4 class="card-title">Invoices</h4>-->
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAdd">
                                        <i class="ft-plus white"></i> {{ __('Novo') }}
                                    </a>

                                    <!--<span class="dropdown">
                                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-download-cloud white"></i></button>
                                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="la la-calendar"></i> Due Date</a>
                                            <a href="#" class="dropdown-item"><i class="la la-random"></i> Priority </a>
                                            <a href="#" class="dropdown-item"><i class="la la-bar-chart"></i> Balance Due</a>
                                            <a href="#" class="dropdown-item"><i class="la la-user"></i> Assign to</a>
                                        </span>
                                    </span>
                                    <button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>-->
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- table -->
                                <div class="table-responsive">
                                    <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Data') }}</th>
                                                <th>{{ __('Evento') }}</th>
                                                <th>{{ __('Aposta') }}</th>
                                                <th>{{ __('Resultado') }}</th>
                                                <th>{{ __('%') }}</th>
                                                <th>{{ __('Ação') }}</th>
                                            </tr>
                                        </thead>
                                        @forelse ($registers as $register)
                                                
                                                    <tbody>
                                                    @foreach ($register->betdetails as $betdetail)
                                                        <tr>
                                                            <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{ date("d/m/Y", strtotime($register->date_bet)) }}</a></td>
                                                            <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{$betdetail->event->name}}</a></td>
                                                            
                                                            <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">R$ {{ number_format($register->value_bet, 2, ',', '.')}}</a></td>
                                                            <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">R$ {{ number_format($register->value_profit, 2, ',', '.')}}</a></td>
                                                            <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}">{{ $register->value_bet}} %</a></td>
                                                            <td>
                                                                <a data-tt="tooltip" data-placement="top" title="" href="#" data-original-title="Editar" class="table-action-btn" data-toggle="modal" data-original-title="Editar" data-target="#ModalEdit"
                                                                    data-whateverid="{{$register->id}}"><i class="ft-edit-2"></i>
                                                                </a>
                                                                <a data-tt="tooltip" data-placement="top" title="" href="#" data-original-title="Excluir" class="table-action-btn" data-toggle="modal" title="Excluir" data-target="#ModalDelete"
                                                                    data-whateverid="{{$register->id}}"><i class="ft-trash-2" style="color: #ED3237"></i>
                                                                </a>  
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                
                                            @empty
                                                
                                            @endforelse
                        
                                    </table>
                                </div>
                                <!--/ table -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@include('bets.modal.create')

@endsection


