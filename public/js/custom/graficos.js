window.onload = function () {

    var chart = new CanvasJS.Chart("graficoHistoricoPins", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        axisY: {
            title: "Número de pins"
        },
        axisX: {
            title: "Mês"
        },
        data: [{
            type: "column",
            dataPoints: [
                { label: "Jan", y: 7 },	
                { label: "Mar", y: 6 },	
                { label: "Abr", y: 5 },
                { label: "Mai", y: 2 },	
                { label: "Jun", y: 2 },
                { label: "Jul", y: 1 },
                { label: "Ago", y: 2 },
                { label: "Set", y: 0 },
                { label: "Out", y: 0 },
                { label: "Nov", y: 0 },
                { label: "Dez", y: 0 }
                
            ]
        }]
    });
    chart.render();
    
    }