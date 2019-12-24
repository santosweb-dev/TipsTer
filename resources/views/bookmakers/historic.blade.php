@extends('layouts.app')

@section('title', 'Tipster | Histórico da Banca')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('Histórico da Banca') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('bancas.index')}}">{{ __('Bancas') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Histórico da Banca') }} </li>
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
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div><br />
        @endif

        <div class="content-body">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- Lucro x Perdas -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">{{ __('Lucro x Perdas') }}</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">                                                
                                                <div class="chart-container">
                                                    <div id="chart-container" style="height: 300px; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="content-body">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- Historic -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">{{ __('Histórico') }}</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">                                                
                                                <!-- table -->
                                                <div class="table-responsive">
                                                    @if ($registers->count())
                                                        <table class="table">
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
                                                            @foreach ($registers as $register)
                                                                        
                                                                @foreach ($register->betdetails as $betdetail)
                                                                    <tr>
                                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}" style="color:gray">{{ date("d/m/Y", strtotime($register->date_bet)) }}</a></td>
                                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}" style="color:gray">{{$betdetail->event->name}}</a></td>
                                                                        
                                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}" style="color:gray">R$ {{ number_format($register->value_bet, 2, ',', '.')}}</a></td>
                                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}" style="color:gray">R$ {{ number_format($register->value_profit, 2, ',', '.')}}</a></td>
                                                                        <td><a data-toggle="tooltip" data-original-title="Visualizar" href="{{ route('apostas.show', $register->id) }}" style="color:gray">{{ $register->value_bet}} %</a></td>
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
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="content-body">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- Projeção de Lucros x Perdas -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">{{ __('Projeção de Lucros x Perdas') }}</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">                                                
                                                <div class="chart-container">
                                                    <div id="chartResumo" style="height: 300px; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>        
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>        
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>


@php
    $dias = array('','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');  
    
    for ($i=1;$i<=31;$i++){
        $rendimento[$i]=0;
    }

    $ano=date('Y');      

    foreach ($registers as $register){
        $y = date("Y", strtotime($register->date_bet));
        $dia =(int)date("d", strtotime($register->date_bet));

        if ($y == $ano){
        $rendimento[$dia]=$rendimento[$dia]+$register->value_profit;
        
        }
    }
@endphp

<script>

    const dataSource = {
    chart: {
        caption: "",
        yaxisname: "",
        subcaption: "",
        numbersuffix: " R$",
        rotatelabels: "1",
        setadaptiveymin: "1",
        theme: "fusion"
    },
    data: [
        <?php
            for ($i=1;$i<=31;$i++){
        ?>
        {
        label: "",
        value: "<?php echo $rendimento[$i]; ?>"
        },
        <?php } ?>
    ]
    };

    FusionCharts.ready(function() {
    var myChart = new FusionCharts({
        type: "line",
        renderAt: "chart-container",
        width: "100%",
        height: "100%",
        dataFormat: "json",
        dataSource
    }).render();
    });

</script>

@php
    $meses = array('','Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez');  
    
    for ($i=1;$i<=12;$i++){
        $rendimento[$i]=0;
    }

    $ano=date('Y');      

    foreach ($registers as $register){
        $y = date("Y", strtotime($register->date_bet));
        $mes =(int)date("m", strtotime($register->date_bet));

        if ($y == $ano){
        $rendimento[$mes]=$rendimento[$mes]+$register->value_profit;
        
        }
    }
@endphp
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php
            for ($i=1;$i<=12;$i++){
        ?>
        ["<?php echo $meses[$i]; ?>", <?php echo $rendimento[$i]; ?>],
        <?php } ?>
        ]);

        var options = {
        legend: { position: 'none' },
        chart: {
            title: '',
            subtitle: '' },
        axes: {
            x: {
            0: { side: 'top', label: ''} // Top x-axis.
            }
        },
        bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('chartResumo'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
    };
</script>



@endsection


