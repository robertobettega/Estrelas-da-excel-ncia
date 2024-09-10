document.addEventListener('DOMContentLoaded', function() {

    const option_usuario = document.getElementById('caixausuario');
    const excelencia = document.getElementById("caixaexcelencia");

    excelencia.addEventListener('change', function(event1) {
        const excelenciaselecionada = event1.target.value;
        console.log(excelenciaselecionada);
    });

    option_usuario.addEventListener('change', function(event) {
        const usuarioselecionado = event.target.value;
        console.log(usuarioselecionado);

        // window.alert(usuarioselecionado);
        // window.location.href = `login/${usuarioselecionado}`;
        
    });
});
