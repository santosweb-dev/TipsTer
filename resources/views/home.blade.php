@extends('layouts.app')

@section('title', 'Tipster | Home')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Revenue</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row mb-1">
                                        <div class="col-6 col-md-4">
                                            <h5>Current week</h5>
                                            <h2 class="danger">$82,124</h2>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <h5>Previous week</h5>
                                            <h2 class="text-muted">$52,502</h2>
                                        </div>
                                    </div>
                                    <div class="chartjs">
                                        <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                                        <canvas id="lastYearRevenue" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">{{ __('Apostas Ganhas') }} </h6>
                                                    @foreach ($wins as $win)
                                                        <h3>{{$win->qtde}}</h3>
                                                    @endforeach
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-trophy success font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">{{ __('Apostas Perdidas') }}</h6>
                                                    @foreach ($loses as $lose)
                                                        <h3>{{$lose->qtde}}</h3>
                                                    @endforeach
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-dislike danger font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-header bg-hexagons">
                                        <h4 class="card-title">{{ __('Ganhos') }}
                                            <span class="success">55%</span>
                                        </h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show bg-hexagons">
                                        <div class="card-body pt-0">
                                            <div class="chartjs">
                                                <canvas id="hit-rate-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content collapse show bg-gradient-directional-danger ">
                                        <div class="card-body bg-hexagons-danger">
                                            <h4 class="card-title white">{{ __('Perdas') }}
                                                <span class="white">12%</span>
                                                <span class="float-right"></span>
                                            </h4>
                                            <div class="chartjs">
                                                <canvas id="deals-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    -->  
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title text-center">{{ __('Perdas e Ganhos') }}</h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                                    @foreach ($lose_values as $lose_value)                                                        
                                                        <h4 class="danger font-large-2 text-bold-400">
                                                            R$ {{ number_format($lose_value->total, 2, ',', '.')}}
                                                        </h4>
                                                    @endforeach
                                                    <p class="blue-grey lighten-2 mb-0">{{ __('em valor') }}</p>
                                                </div>
                                                <div class="col-md-6 col-12 text-center">
                                                    @foreach ($win_values as $win_value)                                                        
                                                        <h4 class="success font-large-2 text-bold-400">
                                                            R$ {{ number_format($win_value->total, 2, ',', '.')}}
                                                        </h4>
                                                    @endforeach
                                                    <p class="blue-grey lighten-2 mb-0">{{ __('em valor') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                    </div>
                </div>
                <!--/ Revenue, Hit Rate & Deals -->
                <!-- Total earning & Recent Sales  -->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="earning-chart position-relative">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">{{ __('Top 5 Mercados') }}</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                            <!--<div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li>
                                                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">View all</a>
                                                    </li>
                                                </ul>
                                            </div>-->
                                        </div>
                                        <div class="card-content mt-1">
                                            <div class="table-responsive">
                                                <table id="recent-orders" class="table table-hover table-xl mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">{{ __('Mercado') }}</th>
                                                            <th class="border-top-0">{{ __('Qtde') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($marketplaces as $marketplace)
                                                            <tr>
                                                                <td scope="row" class="border-top-0">{{$marketplace->name}}</th>
                                                                <td class="border-top-0">{{$marketplace->qtde}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recent-sales" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Transações Recentes') }}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <!--<div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">View all</a>
                                        </li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">{{ __('Data') }}</th>
                                                <th class="border-top-0">{{ __('Transação') }}</th>
                                                <th class="border-top-0">{{ __('Valor') }}</th>                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">iPone X</td>
                                                <td class="text-truncate p-1">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total earning & Recent Sales  -->
            </div>
        </div>
    </div>



@endsection