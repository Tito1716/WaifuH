<?php
print("
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<title>Highcharts Example</title>

		<script type='text/javascript'>
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'CANTIDAD DE PRODUCTOS POR TIPO PRODUCTO'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ");?>
                <?php
                $sql1 = "SELECT * FROM tipo_producto";
                $params = array(null);
                $id_tipo_producto = Database::getRows($sql1, $params);
                foreach($id_tipo_producto as $row){
                    print("['$row[tipo_producto]', ");
                    $sql2 = "SELECT COUNT(P.id_producto) as cantidad FROM producto P WHERE P.id_tipoproducto = ?";
                    $paramas2 = array($row['id_tipoproducto']);
                    $cantidad = Database::getRow($sql2, $paramas2);
                    print("
                        $cantidad[cantidad]],
                    ");
                }
                ?>
            <?php
            print("
            ]
        }]
    });
});


		</script>
	</head>
	<body>

<div id='container' style='min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto'></div>

	</body>
");
?>