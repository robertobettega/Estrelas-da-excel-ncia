document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".aprovar");
    console.log(buttons);

    buttons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            
            const userId = this.closest("form").getAttribute("action").split('/').pop(); 
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(`/acesso/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({}) 
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Erro: ${response.status}`);
                }
                
                return response.json();
            })
            .then(data => {

                Swal.fire({
                    title: "Sucesso!",
                    text: "Cadastro aprovado com sucesso",
                    icon: "success",
                    confirmButtonColor: "linear-gradient(to right, #1C2C5C, #13743C)",
                    confirmButtonText: "Continuar",
                    customClass: {
                        confirmButton: 'Entrar'
                    }
                }).then(() => {
                    window.location.reload();
                });
            })
            .catch(error => {
                console.error('Erro:', error);
                Swal.fire({
                    title: "Pin não enviado",
                    text: "Ocorreu um erro no envio do seu pin, volte mais tarde.",
                    icon: "error",
                    confirmButtonColor: "linear-gradient(to right, #1C2C5C, #13743C)",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: 'entrar'
                    }
                });
            });
        });
    });
});
