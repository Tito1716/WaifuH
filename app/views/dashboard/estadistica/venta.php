<?php
print("
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<title>Highcharts Example</title>

		<script type='text/javascript'>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Ventas'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad (unidad)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'mayo',
            data: [120, 12, 9, 14, 2]
        }, {
            name: 'junio',
            data: [19, 90, 27, 42, 6]
        }, {
            name: 'julio',
            data: [53, 23, 54, 122, 94]
        }]
    });
});
		</script>
	</head>
	<body>
<div id='container' style='min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto'></div>

    </body>
");
?>
