document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

let validarFormulario = evento => {
    evento.preventDefault();
    let nombre = document.getElementById('nombre').value;
    if (nombre.length == 0) {
        alert('El nombre del contacto es obligatorio');
        return;
    }

    let apellido = document.getElementById('apellido').value;
    if (apellido.length == 0) {
        alert('El apellido del contacto es obligatorio');
        return;
    }

    let tel = document.getElementById('tel').value;
    if (tel.length < 8 || tel.length > 8) {
        alert('El telefono debe estar compuesto por 8 numeros');
        return;
    }else if (Number.isNaN(Number.parseFloat(tel))) {
        alert('EL telefono debe contener solo numeros');
        return;
    }
    document.forms['formulario'].submit();
}