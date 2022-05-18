function validar() {
    var usuario, correo, password expresion;
    usuario = document.getElementById("usuario").value;
    correo = document.getElementById("correo").value;
    password = document.getElementById("password").value;
    
        if(nombre === "" || correo === "" || password === ""){
        swal.fire({
        icon: 'error',
        title: 'Todos los campos deben ser obligatorios',
        showClass: {
        popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
    }
        })
        return false;
    }
}