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
                location.reload(true);
                return response.json();
            })
            .then(data => {
                alert(data.message); 
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });
    });
});
