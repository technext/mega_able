const formularioUI = document.querySelector('#formulario');

function CalcularTotal(Certificado, Proteccion, Uniformes, Manos, Practicas, Lavan, Evidencian, Establecimiento, Equipos) {
	var Total = 0;
	var sumavalores = 0;
	sumavalores = parseInt(Certificado) + parseInt(Proteccion)+ parseInt(Uniformes)+ 
    parseInt(Manos)+ parseInt(Lavan)+ parseInt(Evidencian)+ parseInt(Establecimiento)+ parseInt(Equipos)+ parseInt(Practicas);
    console.log(sumavalores);

    Total = (sumavalores/9);
    document.getElementById("Total").value = Total;
	//console.log(Total);
	return Total;
}


function ArmarJSON() {

    var Certificado = document.getElementById("Certificado").value;
    var Proteccion = document.getElementById("Proteccion").value;

    var Uniformes = document.getElementById("Uniformes").value;
    var Manos = document.getElementById("Manos").value;
    var Practicas = document.getElementById("Practicas").value;
    var Lavan = document.getElementById("Lavan").value;
    var Evidencian = document.getElementById("Evidencian").value;
    var Establecimiento = document.getElementById("Establecimiento").value;
    var Equipos = document.getElementById("Equipos").value;


    var Total=CalcularTotal(Certificado, Proteccion, Uniformes, Manos, Practicas, Lavan, Evidencian, Establecimiento, Equipos);
    console.log(Total);

    var tabla = {
        "Certificado":Certificado,
        "Proteccion":Proteccion,

        "Uniformes":Uniformes,
        "Manos":Manos,
        "Practicas":Practicas,
        "Lavan":Lavan,
        "Evidencian":Evidencian,
        "Establecimiento":Establecimiento,
        "Equipos":Equipos,


        "Total":Total
        
    }
    return tabla;

}

function CalcularTotalTabla(tabla) {
    let tot = [];
    var totcor = ArmarJSON();

}