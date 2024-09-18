document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.excelencia-img');

    images.forEach(img => {
        img.addEventListener('click', function() {
            const id = this.getAttribute('data-id');

            $.ajax({
                url: `/modal/${id}`,  // Certifique-se de que o URL está correto
                method: 'POST',       // Certifique-se de que o método é POST
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'  // Inclua o token CSRF
                },
                success: function(response) {
                    console.log("AJAX está enviando", response);
                    console.log('ID da excelência:', id);
                    // Se necessário, redirecione aqui
                    // window.location.href = `/alguma-outro-url`;
                },
                error: function(xhr, status, error) {
                    console.log('Erro na solicitação AJAX:');
                    console.log('Status:', status);
                    console.log('Erro:', error);
                    console.log('Resposta do servidor:', xhr.responseText);
                }
            });  
        });
    });
});

var botaosalvar = document.getElementById("btnsalvar");
botaosalvar.addEventListener("click", function() {

    // CAIXAS DE OPTIONS
    const option_usuario = document.getElementById('caixausuario').value;
    const excelencia = document.getElementById("caixaexcelencia").value;

    // CAIXAS DE TEXTO
    const justificativa = document.getElementById("caixajustificativa").value;
    const dedicatoria = document.getElementById("caixadedicatoria").value;

    // Swal.fire(
    //     {
    //         text: 'Sucesso ao salvar!',
    //         icon: 'success'
    //     }
    // )

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
    
            console.log(option_usuario);
            console.log(excelencia);
            console.log(justificativa);
            console.log(dedicatoria);
        }
    });    
});
