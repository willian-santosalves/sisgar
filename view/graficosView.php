<?php include('layout/header_logado.php'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Barras - Estados</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_estados_bar"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Donut - Estados</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_estados_donut"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Barras - Motivos</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_motivos_bar"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Donut - Motivos</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_motivos_donut"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Barras - Atendentes</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_atendentes_bar"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Gráfico de Donut - Atendentes</strong>
                </div>
                <div class="card-body">
                    <div id="grafico_atendentes_donut"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    // Gráfico de barras de estados
    var options_estados_bar = {
        chart: {
            type: 'bar'
        },
        series: [
            {
                name: 'Estados',
                data: <?php echo json_encode(array_column($dados_estados, 'quantidade')); ?>
            }
        ],
        xaxis: {
            categories: <?php echo json_encode(array_column($dados_estados, 'estado')); ?>
        },
        title: {
            text: "Estados"
        }
    };
    var chart_estados_bar = new ApexCharts(document.getElementById('grafico_estados_bar'), options_estados_bar);
    chart_estados_bar.render();

    // Gráfico de donut de estados
    var options_estados_donut = {
        chart: {
            type: 'donut'
        },
        series: <?php echo json_encode(array_column($dados_estados, 'quantidade')); ?>,
        labels: <?php echo json_encode(array_column($dados_estados, 'estado')); ?>,
        title: {
            text: "Estados"
        }
    };
    var chart_estados_donut = new ApexCharts(document.getElementById('grafico_estados_donut'), options_estados_donut);
    chart_estados_donut.render();


    // Gráfico de barras de motivos
    var options_motivos_bar = {
        chart: {
            type: 'bar'
        },
        series: [
            {
                name: 'Motivos',
                data: <?php echo json_encode(array_column($dados_motivos, 'quantidade')); ?>
            }
        ],
        xaxis: {
            categories: <?php echo json_encode(array_column($dados_motivos, 'descricao')); ?>
        },
        title: {
            text: "Motivos"
        }
    };
    var chart_motivos_bar = new ApexCharts(document.getElementById('grafico_motivos_bar'), options_motivos_bar);
    chart_motivos_bar.render();

    // Gráfico de donut de motivos
    var options_motivos_donut = {
        chart: {
            type: 'donut'
        },
        series: <?php echo json_encode(array_column($dados_motivos, 'quantidade')); ?>,
        labels: <?php echo json_encode(array_column($dados_motivos, 'descricao')); ?>,
        title: {
            text: "Motivos"
        }
    };
    var chart_motivos_donut = new ApexCharts(document.getElementById('grafico_motivos_donut'), options_motivos_donut);
    chart_motivos_donut.render();


    // Gráfico de barras de atendentes
    var options_atendentes_bar = {
        chart: {
            type: 'bar'
        },
        series: [
            {
                name: 'Atendentes',
                data: <?php echo json_encode(array_column($dados_atendentes, 'quantidade_atendimentos')); ?>
            }
        ],
        xaxis: {
            categories: <?php echo json_encode(array_column($dados_atendentes, 'atendente')); ?>
        },
        title: {
            text: "Atendentes"
        }
    };
    var chart_atendentes_bar = new ApexCharts(document.getElementById('grafico_atendentes_bar'), options_atendentes_bar);
    chart_atendentes_bar.render();

    // Gráfico de donut de atendentes
    var options_atendentes_donut = {
        chart: {
            type: 'donut'
        },
        series: <?php echo json_encode(array_column($dados_atendentes, 'quantidade_atendimentos')); ?>,
        labels: <?php echo json_encode(array_column($dados_atendentes, 'atendente')); ?>,
        title: {
            text: "Atendentes"
        }
    };
    var chart_atendentes_donut = new ApexCharts(document.getElementById('grafico_atendentes_donut'), options_atendentes_donut);
    chart_atendentes_donut.render();
</script>


<?php include('layout/footer.php'); ?>