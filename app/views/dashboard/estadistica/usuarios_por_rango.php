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
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Usuarios por<br>rango',
            align: 'center',
            verticalAlign: 'middle',
            y: 50
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '50%',
            data: [
                ");?>
                <?php
                $sql1 = "SELECT * FROM tipo_user";
                $params = array(null);
                $id_tipouser = Database::getRows($sql1, $params);
                foreach($id_tipouser as $row){
                    print("['$row[tipo_usuario]', ");
                    $sql2 = "SELECT COUNT(P.id_usuario) as cantidad FROM usuario P WHERE P.id_tipouser = ?";
                    $paramas2 = array($row['id_tipouser']);
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
    ")
?>

