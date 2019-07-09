// fetch('https://restcountries.eu/rest/v2/all')
// .then(res => res.json())
// .then(data => {
//     let output = "<select id='pick-country' name='pick-country'>";
//     data.forEach(function(country){
//         console.log(country.name);
//         output += `
//         <option value=${country.name}>${country.name}</option>`
//         });
//     output += '</select>';    
//     document.getElementById('country').innerHTML = output;
//     });


    var provinciaselect = document.querySelector("#provincia")
    var municipioselect = document.querySelector("#municipio")
    var seleccion = ''

    function datos () {
        
        seleccion = (provincia1.options[provincia1.selectedIndex].value)
        return seleccion
    }


    mostrarDatos()

    function mostrarDatos(){
        fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
        .then(resultado => resultado.json())
        .then(data => {
            var select = document.createElement('select')
            select.name = 'provincia'
            select.id = 'provincia1'
            select.classList.add('custom-select')
            provinciaselect.appendChild(select)
            var opcionseleccionar = document.createElement("option")
            select.appendChild(opcionseleccionar)
            opcionseleccionar.innerHTML = "<option>Seleccionar</option>";
            for (var indice of data.provincias) {
                var opciones = document.createElement("option")
                opciones.value = indice.id
                opciones.innerHTML = indice.nombre
                select.appendChild(opciones)
            }
        })
    }
provinciaselect.addEventListener('change', function() {
    datos()
    mostrarMunicipios(seleccion)

});


    function mostrarMunicipios(seleccion){
        fetch("https://apis.datos.gob.ar/georef/api/municipios?provincia="+seleccion+"&campos=id,nombre&max=100")
        .then(resultado => resultado.json())
        .then(data => {
                var select = document.createElement('select')
                select.name = 'municipio'
                select.classList.add('custom-select')
                municipioselect.innerHTML = '<h6 class="text-center">Ingresa el municipio</h6>'
                municipioselect.appendChild(select)
                select.innerHTML = "<option>Seleccionar</option>";
            for (var indice of data.municipios){
                var opcionesMuni = document.createElement("option")
                opcionesMuni.value = indice.nombre
                opcionesMuni.innerHTML = indice.nombre
                select.appendChild(opcionesMuni)
            }

        })

    }




