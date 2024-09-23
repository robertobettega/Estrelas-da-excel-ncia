document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".aprovar");

    buttons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault(); // Impede o envio do formulário

            const userId = this.closest("form").getAttribute("action").split('/').pop(); // Obtém o ID do usuário
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Obtém o token CSRF

            fetch(`/acesso/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({}) // Corpo da requisição, se necessário
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Erro: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                alert(data.message); // Mensagem de sucesso
                // Aqui você pode adicionar lógica para atualizar a interface, se necessário
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });
    });
});
