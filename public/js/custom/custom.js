
var botaosalvar = document.getElementById("btnsalvar");
botaosalvar.addEventListener("click", function(){

    const option_usuario = document.getElementById('caixausuario').value;
    const excelencia = document.getElementById("caixaexcelencia").value;

        // console.log(option_usuario);
        // console.log(excelencia);

        $.ajax({
            url: `/insert/${option_usuario}/${excelencia}`,
            method: 'GET',
            data: {
                option_usuario: option_usuario,
                excelencia: excelencia,
            },
            success: function (response) {
                console.log("AJAX está enviando");
                // window.location.href = `/insert/'${option_usuario}/${excelencia}`;
            },
            error: function (error) {
                console.log('Erro na solicitação AJAX:', error);
            }
        });

        // window.location.href = `login/${usuarioselecionado}`;
        
        // console.log("Você clicou no botão");
});
