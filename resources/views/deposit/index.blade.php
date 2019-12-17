@extends('layouts.app')

@section('title', 'Tipster | Depósitos')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('Depósitos') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Depósitos') }} </li>
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
                                    @if ($registers->count())
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Data') }}</th>
                                                    <th>{{ __('Valor') }}</th>
                                                    <th>{{ __('Ação') }}</th>
                                                </tr>
                                            </thead>
                                            @foreach ($registers as $register)
                                                <tr>
                                                    <td>{{ date("d/m/Y", strtotime($register->date)) }}</td>
                                                    <td>R$ {{ number_format($register->value, 2, ',', '.')}}</td>
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
                                        </table>
                                        <div class="table-pagination pull-right">
                                            <div class="col-md-12">
                                                {{ $registers->links('layouts.includes.pagination', ['pagination' => $registers]) }}
                                            </div>
                                        </div>
                                    @else
                                        <h4><center>Não encontramos Nenhum registro</center></h4><br><br><br>
                                        <div class="col-md-12">
                                            <a href="#" style="color:black"><input type="button" value="Voltar" class="btn btn-white"></a>
                                        </div>                                          
                                    @endif
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

@include ('deposit.modal.create')

@endsection


