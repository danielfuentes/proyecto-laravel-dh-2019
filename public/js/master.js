
    var name = document.getElementById("name")
    var errorName = document.getElementById("errorName")

    var lname = document.getElementById("lname")
    var errorlName = document.getElementById("errorlName")
    var errorEmail = document.getElementById("errorEmail")
    var email = document.getElementById("email")
    var emailRegex = (/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/)

    var pasRegex = (/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/)
    var password2 = document.getElementById("password-confirm");
    var password1 = document.getElementById("password");
    var errorPass = document.getElementById("errorPass")
    var errorPass2 = document.getElementById("errorPass2")
    var formulario = document.querySelector("#form")

    var errorGenre = document.getElementById("errorGenres")
    var isChecked1 = document.getElementById('male')
    var isChecked2 = document.getElementById('female')
    var isChecked3 = document.getElementById('other')

    var confirm= document.getElementById("confirm")
    var errorConfirm = document.getElementById("errorConfirm")

    var avatar= document.getElementById("avatar")
    var errorAvatar=document.getElementById("errorAvatar")





   


  //----------------------- -----validacion despues del submit------------------------------------------//


    formulario.onsubmit = function(e)
   {
       if (!validaciones()){
        e.preventDefault()
      }
      else{
         formulario.submit
      }
      
   }
         function validaciones() {
      //---------------------------nombre-----------------------------------------//
          
            if (name.value === "" || name.value === null)
            {

                errorName.innerHTML = "El campo nombre no puede quedar vacio"
                errorName.setAttribute("class","invalid-feedback" )
                name.setAttribute("class", "form-control is-invalid")
                name.addEventListener("change", changeName)
                return false;
            }


                function changeName(){
                errorName.innerHTML = ""
                errorName.setAttribute("class","" )
                name.setAttribute("class", "form-control")
                return 
               }

   //-------------------------apellido--------------------------------------------//


             if(lname.value === "" || lname.value === null)
             {


                errorlName.innerHTML = "El campo apellido no puede quedar vacio"
                errorlName.setAttribute("class","invalid-feedback" )
                lname.setAttribute("class", "form-control is-invalid")
                lname.addEventListener("change", changelName)

                return false;
             }


             function changelName(){
             errorlName.innerHTML = ""
             errorlName.setAttribute("class","" )
             lname.setAttribute("class", "form-control")
            }
    //----------------------------email----------------------------------//
    if(email.value === "" || email.value === null)
    {


       errorEmail.innerHTML = "Debe ingresar un email"
       errorEmail.setAttribute("class","invalid-feedback" )
       email.setAttribute("class", "form-control is-invalid")
       email.addEventListener("change", changeEmail)

       return false
    }
    if(email.value === "" || email.value === null || emailRegex.test(email.value)!==true)
      {
         errorEmail.innerHTML = "El  email ingresado no es valido"
         errorEmail.setAttribute("class","invalid-feedback" )
         email.setAttribute("class", "form-control is-invalid")
         email.addEventListener("change", changeEmail)

         return false
      }

    function changeEmail(){
                errorEmail.innerHTML = ""
                errorEmail.setAttribute("class","" )
                email.setAttribute("class", "form-control")
                     }

                     
 //--------------------------------------password-------------------------------------//



             if(password1.value === "" || password1.value === null)
             {


                errorPass.innerHTML = "Debe ingresar un contraseña"
                errorPass.setAttribute("class","invalid-feedback" )
                password1.setAttribute("class", "form-control is-invalid")
                password1.addEventListener('change', changePass1)
                return false;

             }
             if(pasRegex.test(password1.value)!== true)
                            {
                               errorPass.innerHTML = "La contraseña ingresada no es valida"
                               errorPass.setAttribute("class","invalid-feedback" )
                               password1.setAttribute("class", "form-control is-invalid")
                               password1.addEventListener('change', changePass1)
                              return false
                            }
             function changePass1()
             {
               errorPass.innerHTML = ""
               errorPass.setAttribute("class","" )
               password1.setAttribute("class", "form-control")
             }
               


//--------------------------------------password2-------------------------------------//


            if(password1.value!==password2.value)
            {


               errorPass2.innerHTML = "Las contraseñas ingresadas no coinciden"
               errorPass2.setAttribute("class","invalid-feedback" )
               password2.setAttribute("class", "form-control is-invalid")
               password2.addEventListener("change", changePass2)
               return false;

            }

             
             function changePass2(){
                  
                      errorPass2.innerHTML = ""
                      errorPass2.setAttribute("class","" )
                      password2.setAttribute("class", "form-control")
               }
//--------------------------------------genero-------------------------------------//



if(!isChecked1.checked && !isChecked2.checked && !isChecked3.checked ){

    errorGenre.innerHTML = "Debe seleccionar una opcion"
    errorGenre.setAttribute("class","text-danger")
    return false;

    

}else{
    errorGenre.innerHTML = ""
    errorGenre.setAttribute("class","" )
    checked.setAttribute("class", "form-control")
   }

//------------------------------aceptar condiciones------------------------------//

if(!confirm.checked){

   errorConfirm.innerHTML = "Debe aceptar Terminos y Condiciones"
   errorConfirm.setAttribute("class","text-danger")
   confirm.addEventListener("change", changeConfirm)
   return false;
}

function changeConfirm(){
   errorConfirm.innerHTML = ""
   errorConfirm.setAttribute("class","" )
   confirm.setAttribute("class", "form-control")
}



//--------------------------------------------------------------------------------

if(avatar.value === "" || avatar.value === null)
{


   errorAvatar.innerHTML = "Debe seleccionar una imagen"
   errorAvatar.setAttribute("class","invalid-feedback" )
   avatar.setAttribute("class", "form-control is-invalid")
   avatar.addEventListener("change", changeAva)
   return false;
}
               
avatar.addEventListener("change", changeAva)


function changeAva(){
    errorAvatar.innerHTML = ""
    errorAvatar.setAttribute("class","" )
    avatar.setAttribute("class", "form-control")
    return false;
      }

   }























