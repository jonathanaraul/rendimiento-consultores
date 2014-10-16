$( "#grafico" ).click(function() {
     
     $( '#view-content' ).css({
        "min-width" : "310px",
        "height" : "400px",
        "margin" : "0 auto",
        "max-width" : "1000px"
    });

    $(function() {
        $('#view-content').highcharts({
        title: {
            text: 'Desempeño'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo']
        },
        series: [{
            type: 'column',
            name: 'Jane',
            data: [15, 2, 1, 3, 4]
        }, {
            type: 'column',
            name: 'John',
            data: [2, 3, 5, 7, 6]
        }, {
            type: 'column',
            name: 'Joe',
            data: [4, 3, 3, 9, 0]
        }, {
            type: 'spline',
            name: 'Average',
            data: [10, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }]
        });
    });
});

