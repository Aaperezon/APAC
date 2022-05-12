function init(){
    document.getElementById('if_esterilizado_id').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('esterilizado_id').removeAttribute("hidden")
        }else{
            document.getElementById('esterilizado_id').setAttribute("hidden","")
        }

    });
    document.getElementById('if_adoptado_id').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('adoptado_id').removeAttribute("hidden")
        }else{
            document.getElementById('adoptado_id').setAttribute("hidden","")
        }

    });
    document.getElementById('if_vacuna_id').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('agregar_mas_vacuna').removeAttribute("hidden")
            document.getElementById('vacuna_id').removeAttribute("hidden")
            
        }else{
            document.getElementById('agregar_mas_vacuna').setAttribute("hidden","")
            document.getElementById('vacuna_id').setAttribute("hidden","")
        }

    });
    document.getElementById('if_operacion_id').addEventListener('change', e => {
        if(e.target.checked){
            document.getElementById('agregar_mas_operacion').removeAttribute("hidden")
            document.getElementById('operacion_id').removeAttribute("hidden")
            
        }else{
            document.getElementById('agregar_mas_operacion').setAttribute("hidden","")
            document.getElementById('operacion_id').setAttribute("hidden","")
        }

    });
}


window.addEventListener('load', init )
