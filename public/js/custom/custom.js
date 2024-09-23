var botaosalvar = document.getElementById("btnsalvar");
botaosalvar.addEventListener("click", function() {

    Swal.fire({
        title: "Pin salvo!",
        text: "Você dedicou um Pin a um colega!",
        icon: "success",
        confirmButtonColor: "linear-gradient(to right, #1C2C5C, #13743C)",
        confirmButtonText:"Continuar",
        customClass: {
    confirmButton: 'entrar'
        }
      });

    // CAIXAS DE OPTIONS
    const option_usuario = document.getElementById('caixausuario').value;
    const excelencia = document.getElementById("caixaexcelencia").value;

    // CAIXAS DE TEXTO
    const justificativa = document.getElementById("caixajustificativa").value;
    const dedicatoria = document.getElementById("caixadedicatoria").value;

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
            // console.log('Erro na solicitação AJAX:');
            // console.log('Status:', status);
            // console.log('Erro:', error);
            // console.log('Resposta do servidor:', xhr.responseText);
    
            console.log(option_usuario);
            console.log(excelencia);
            console.log(justificativa);
            console.log(dedicatoria);
        }
    });    
});
