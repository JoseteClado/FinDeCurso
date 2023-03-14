const form = document.getElementById('myForm')

form.addEventListener('submit', (event) => {

    //Establezco todos los divs sin cadena de texto
    for (let index = 0; index < document.getElementsByClassName("error").length; index++) {
    
    document.getElementsByClassName("error")[index].innerHTML = "";
 
    } 

    let error = false;


    event.preventDefault();

    let correo = document.getElementById('correo').value;
    let contraseña = document.getElementById('contraseña').value;

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
    if (contraseña === "" || contraseña === null) {
        document.getElementsByClassName("errorContraseña")[0].innerHTML = "Debes rellenar el campo contraseña";
        error = true;
    }

    //En caso de que no haya ningun erro se enviara el formulario
    if (error == false) {
            console.log("Enviau");
            form.submit();
    }


});