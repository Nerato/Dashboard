@extends('adminlte::page')

@section('title', 'Painel')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>50</h3>
                        <p>CHAMADOS Janeiro </p>
                    </div>
                    <div class="icon">
                        <i class="ion-ios-speedometer-outline"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>10<sup style="font-size: 20px"></sup></h3>

                        <p>CHAMADOS fora do prazo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>5</h3>

                        <p>CHAMADOS vencidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion-alert-circled"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>7</h3>
                        <p>CHAMADOS sem acomponhamento</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
@stop

        <?php
       $ano = date("Y");
       $month = date("Y-m");
       $hoje = date("Y-m-d");

        //chamados mes
        $sql_mes =	"SELECT COUNT(glpi_tickets.id) as total
        FROM glpi_tickets
        LEFT JOIN glpi_entities ON glpi_tickets.entities_id = glpi_entities.id
        WHERE glpi_tickets.date LIKE '$month%'
        AND glpi_tickets.is_deleted = '0'
        ".$entidade." ";

        $result_mes = $DB->query($sql_mes);
        $total_mes = $DB->fetch_assoc($result_mes);


        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>50</h3>
                            <p>CHAMADOS Janeiro </p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-speedometer-outline"></i>
                        </div>
                    </div>
                </div>

        <span class="chamado"><?php echo __('Tickets','dashboard'); ?></span><br>
        <span class="date"><b><?php echo $mes ?></b></span>


