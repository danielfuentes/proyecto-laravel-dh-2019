window.onload = function(){

    var quantity = document.getElementById("quantity")
    var error = document.getElementById("errorQuantity")
    var subtotal = document.getElementById('subtotal')
    var total = document.getElementById('total')

    if (quantity.value === "" || quantity.value === null)
    {

        error.innerHTML = "Por favor, seleccione la cantidad deseada"
        error.setAttribute("class","invalid-feedback" )
        quantity.setAttribute("class", "form-control is-invalid")
        quantity.addEventListener("change", change)
        return false;
    }
    total.innerText = subtotal.value * quantity


        function change(){
        error.innerHTML = ""
        error.setAttribute("class","" )
        name.setAttribute("class", "form-control")
        return 
       }
}