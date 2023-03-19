
const form = document.getElementById('myForm')

form.addEventListener('submit', (event) => {

//Establezco todos los divs sin cadena de texto
for (let index = 0; index < document.getElementsByClassName("error").length; index++) {
    
    document.getElementsByClassName("error")[index].innerHTML = "";
    console.log(document.getElementsByClassName("error")[index]);
 } 

    event.preventDefault();
  

    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let correo = document.getElementById('correo').value;
    let contraseña = document.getElementById('contraseña').value;
    let confContraseña = document.getElementById('confContraseña').value;

    let error = false;
    

    
    /* COMPROBAR NOMBRE */

    const comprobarNumeros = /^[a-zA-Z]+$/;

    if (!comprobarNumeros.test(nombre)) {
        document.getElementsByClassName("errorNombre")[0].innerHTML = "El nombre no puede tener números";
        error = true;
       
    } 

    if (nombre === "" || nombre === null) {
        document.getElementsByClassName("errorNombre")[0].innerHTML = "Debes rellenar el campo nombre";
        error = true;
    }

    /* COMPRUEBO APELLIDOS */
    if (apellidos === "" || apellidos === null) {
        document.getElementsByClassName("errorApellidos")[0].innerHTML = "Debes rellenar el campo apellidos";
        error = false;
    }

    


    /* COMPROBAR CORREO */


    const comprobarCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!comprobarCorreo.test(correo)) {
        document.getElementsByClassName("errorCorreo")[0].innerHTML = "Por favor ingrese un correo valido";
        error = true;
    }


    if (correo === "" || correo === null) {
        document.getElementsByClassName("errorCorreo")[0].innerHTML = "Debes rellenar el campo correo";
        error = true;
       
    }

   
    /* COMPROBAR CONTRASEÑAS */
   
    const comprobarMayus = /^(?=.*[A-Z]).+$/;

    if(!comprobarMayus.test(contraseña)){
        document.getElementsByClassName("errorContraseña")[0].innerHTML = "La contraseña debe tener al menos 1 mayúsucula";
        error = true;
    }

    if (contraseña === "" || contraseña === null) {
        document.getElementsByClassName("errorContraseña")[0].innerHTML = "Debes rellenar el campo contraseña";
        error = true;
    }

    if (contraseña.length < 6) {
        document.getElementsByClassName("errorContraseña")[0].innerHTML = "La contraseña debe tener al menos 6 caracteres";
        error = true;
    }

        
    
    /* CONFIRMAR CONTRASEÑA */
    
    if (confContraseña !== contraseña) {
        document.getElementsByClassName("coincidenContraseñas")[0].innerHTML = "Las contraseñas no coinciden";
        error = true;
    }
    
    if (confContraseña === "" || confContraseña === null) {
        document.getElementsByClassName("errorConfContraseña")[0].innerHTML = "Debes rellenar el campo Confirmar Contraseña";
        error = true;
    }
    
    //En caso de que nada falle se envia el formulario
    if(error == false){
        form.submit()
    }



});