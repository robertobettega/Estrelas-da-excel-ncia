
var botaosalvar = document.getElementById("btnsalvar");
botaosalvar.addEventListener("click", function() {

    // CAIXAS DE OPTIONS
    const option_usuario = document.getElementById('caixausuario').value;
    const excelencia = document.getElementById("caixaexcelencia").value;

    // CAIXAS DE TEXTO
    const justificativa = document.getElementById("caixajustificativa").value;
    const dedicatoria = document.getElementById("caixadedicatoria").value;

    Swal.fire(
        {
            text: 'Sucesso ao salvar!',
            icon: 'success'
        }
    )

    $.ajax({
        url: `/insert`,
        method: 'POST',
        data: {
            usuario: option_usuario,
            excelencia: excelencia,
            justificativa: justificativa,
            dedicatoria: dedicatoria,
        },
        success: function (response) {
            console.log("AJAX está enviando", response);
            // window.location.href = `/insert`;
        },
        error: function (xhr, status, error) {
            console.log('Erro na solicitação AJAX:');
            console.log('Status:', status);
            console.log('Erro:', error);
            console.log('Resposta do servidor:', xhr.responseText);
        }
    });
});
window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Simple Column Chart with Index Labels"
        },
          axisY: {
          includeZero: true
        },
        data: [{
            type: "column", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
              indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 10, y: 71 },
                { x: 20, y: 55 },
                { x: 30, y: 50 },
                { x: 40, y: 65 },
                { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                { x: 60, y: 68 },
                { x: 70, y: 38 },
                { x: 80, y: 71 },
                { x: 90, y: 54 },
                { x: 100, y: 60 },
                { x: 110, y: 36 },
                { x: 120, y: 49 },
                { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
            ]
        }]
    });
    chart.render();
    
    }
