function init(){
    document.getElementById('esterilizado_id_checkbox').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('esterilizado_id').removeAttribute("hidden")
        }else{
            document.getElementById('esterilizado_id').setAttribute("hidden","")
        }

    });
    document.getElementById('adoptado_id_checkbox').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('adoptado_id').removeAttribute("hidden")
        }else{
            document.getElementById('adoptado_id').setAttribute("hidden","")
        }

    });
    document.getElementById('vacuna_id_checkbox').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('agregar_mas_vacuna_agregar').removeAttribute("hidden")
            document.getElementById('vacuna_id').removeAttribute("hidden")
            
        }else{
            document.getElementById('agregar_mas_vacuna_agregar').setAttribute("hidden","")
            document.getElementById('vacuna_id').setAttribute("hidden","")
        }

    });
    document.getElementById('operacion_id_checkbox').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('agregar_mas_operacion_agregar').removeAttribute("hidden")
            document.getElementById('operacion_id1').removeAttribute("hidden")
            
        }else{
            document.getElementById('agregar_mas_operacion_agregar').setAttribute("hidden","")
            document.getElementById('operacion_id1').setAttribute("hidden","")
        }

    });

    let agregar_operacion = document.getElementById("agregar_mas_operacion_agregar")
    agregar_operacion.addEventListener("click", ()=>{
        let aux_div = document.getElementById("operacion_id1")
        let new_div = aux_div.cloneNode(true)
        new_div.id = "operacion_id"+ Number((document.getElementById("conjunto_operaciones").getElementsByTagName("*").length / 6) +1)
        console.log((document.getElementById("conjunto_operaciones").getElementsByTagName("*").length / 6) +1)
        document.getElementById("conjunto_operaciones").appendChild(new_div)
    })



    function uploadEasyData(){

        let imagen = document.getElementById("imagen_id")
        let tipo = document.getElementById("tipo_id")
        let nombre = document.getElementById("nombre_id")
        let raza = document.getElementById("raza_id")
        let color = document.getElementById("color_id")
        let nacimiento = document.getElementById("nacimiento_id")
        let ingreso = document.getElementById("ingreso_id")
        let descripcion = document.getElementById("descripcion_id")
        let esterilizado_checkbox = document.getElementById("esterilizado_id_checkbox")
        let adoptado_checkbox = document.getElementById("adoptado_id_checkbox")
        let tamano = document.getElementById("tamano_id")
        let sexo = document.getElementById("sexo_id")
        let publico_checkbox = document.getElementById("publico_id")

        let auxiliar_form = new FormData()
        auxiliar_form.append(imagen.name,imagen.value)
        auxiliar_form.append(tipo.name,tipo.value)
        auxiliar_form.append(nombre.name,nombre.value)
        auxiliar_form.append(raza.name,raza.value)
        auxiliar_form.append(color.name,color.value)
        auxiliar_form.append(nacimiento.name,nacimiento.value)
        auxiliar_form.append(ingreso.name,ingreso.value)
        auxiliar_form.append(descripcion.name,descripcion.value)
        if(esterilizado_checkbox.checked == true)
            auxiliar_form.append(document.getElementById("esterilizado_id").name,document.getElementById("esterilizado_id").value)
        if(adoptado_checkbox.checked == true)
            auxiliar_form.append(document.getElementById("adoptado_id").name,document.getElementById("adoptado_id").value)
        auxiliar_form.append(tamano.name,tamano.value)
        auxiliar_form.append(sexo.name,sexo.value)
        if(publico_checkbox.checked == true)
            auxiliar_form.append("publico",true)
        else
            auxiliar_form.append("publico",false)
            
        var object = {};
        auxiliar_form.forEach((value, key) => {object[key] = value});
        var json_send = JSON.stringify(object);

        fetch('./services/createuser.php/', {
            method: 'POST',
            body: json_send
        }).then(
            response => response.json()
        ).then(
            response => {
                console.log(response)
            }
        ).catch(
            error => console.log(error)
        )


    }
    function uploadMultiData(){

    }
    function processForm(e) {
        if (e.preventDefault) e.preventDefault();
    
       
        uploadEasyData()

        let esterilizado_checkbox = document.getElementById("esterilizado_id_checkbox")
        let esterilizado = document.getElementById("esterilizado_id")
        let adoptado_checkbox = document.getElementById("adoptado_id_checkbox")
        let adoptado = document.getElementById("adoptado_id")
        let vacuna_checkbox = document.getElementById("vacuna_id_checkbox")
        let vacuna = document.getElementById("vacuna_id")
        let operacion_checkbox = document.getElementById("operacion_id_checkbox")
        let operacion = document.getElementById("operacion_id")

       
        return false;
    }
    
    var form = document.getElementById('form_agregar');
    if (form.attachEvent) {
        form.attachEvent("submit", processForm);
    } else {
        form.addEventListener("submit", processForm);
    }

   



    // fetch('./services/createuser.php/', {
    //     method: 'POST',
    //     body: json_send
    // }).then(
    //     response => response.json()
    // ).then(
    //     response => {
    //         window.location = "./kungfupandi.html";

    //     }
    // ).catch(
    //     error => console.log(error)
    // )

}
window.addEventListener('load', init )
