


    var form = document.getElementById("form02")
    var email = document.getElementById("userEmail")
    var password = document.getElementById("inputPassword6")
    var errorPassword = document.getElementById("errorPassword")
    var errorEmail = document.getElementById("errorEmail")
    var emailRegex = (/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/)


form.onsubmit = function(e)
{
    if (!validaciones()){
     e.preventDefault()
   }
   else{
      form.submit
   }
   
}
function validaciones() {

    if(email.value === "" || email.value === null && email.value !== "root")
    {


       errorEmail.innerHTML = "Debe ingresar un email"
       errorEmail.setAttribute("class","invalid-feedback" )
       email.setAttribute("class", "form-control mx-sm-3 col-12 col-lg-6 is-invalid")
       email.addEventListener("change", changeEmail)
       
       return false
    }
    if(emailRegex.test(email.value)!==true && email.value !== 'root')
      {
         errorEmail.innerHTML = "El  email ingresado no es valido"
         errorEmail.setAttribute("class","invalid-feedback" )
         email.setAttribute("class", "is-invalid form-control mx-sm-3 col-12 col-lg-6")
         email.addEventListener("change", changeEmail)
         return false
      }

    function changeEmail(){
                errorEmail.innerHTML = ""
                errorEmail.setAttribute("class","" )
                email.setAttribute("class", "form-control  mx-sm-3 col-12 col-lg-6")
                     }

                     if(password.value === "" || password.value === null)
                     {    
                        errorPassword.innerHTML = "Debe ingresar un contraseña"
                        errorPassword.setAttribute("class","invalid-feedback" )
                        password.setAttribute("class", "is-invalid form-control mx-sm-3 col-12 col-lg-6")
                        password.addEventListener('change', changePassword)
                        return false;
        
                     }

                     function changePassword(){
                        errorPassword.innerHTML = ""
                        errorPassword.setAttribute("class","" )
                        password.setAttribute("class", "form-control  mx-sm-3 col-12 col-lg-6")
                        }

                        return true;

                    }