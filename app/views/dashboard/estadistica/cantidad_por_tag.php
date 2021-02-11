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
            text: 'CANTIDAD DE PRODUCTOS POR TAG'
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
                $sql1 = "SELECT * FROM tags";
                $params = array(null);
                $id_tag = Database::getRows($sql1, $params);
                foreach($id_tag as $row){
                    print("['$row[tag]', ");
                    $sql2 = "SELECT COUNT(p.id_producto) as cantidad FROM producto p WHERE p.id_tag = ?";
                    $paramas2 = array($row['id_tag']);
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