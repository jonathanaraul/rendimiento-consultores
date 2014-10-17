$( "#pizza" ).click(function() {
    
    $( '#view-content' ).css({
        "min-width" : "310px",
        "height" : "400px",
        "margin" : "0 auto",
        "max-width" : "1000px"
    });

    $(function () {

    // Build the chart
    $('#view-content').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Participacao na Receita'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje',
            data: [
                ['Ana',   45.0],
                ['Paul',       26.8],
                {
                    name: 'Peter',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Mario',    8.5],
                ['Mary',     6.2],
                ['Jhon',   0.7]
            ]
        }]
    });
});
});