/* global cursosV, cursos */

comboCursos = document.getElementById("cursos");
comboAnos = document.getElementById("anos");

cursosV = cursos.split(";");

for (i = 0; i < cursosV.length; i++) {
    cursosV[i] = cursosV[i].split(":");
}
/*
for (i = 0; i < cursosV.length; i++) {
    var opt = document.createElement("option");
    opt.value = i;
    opt.text = cursosV[i][0];
    comboCursos.add(opt, comboCursos.options[i]);
}
*/
/*
for (i = 0; i < cursosV.length; i++) {
    var opt = document.createElement("option");
    opt.value = i;
    opt.text = cursosV[i][1];
    comboAnos.add(opt, comboAnos.options[i]);
}
*/

function completaAnos() { 

    comboAnos = document.getElementById("anos");
    
    comboCursos = document.getElementById("cursos");

        
    while (comboAnos.length) {
        comboAnos.remove(0);
    }


    var a = -1;
    var indice = comboCursos.selectedIndex;    
    var valor = comboCursos.options[indice].value+ " ";

        
    for (i = 0; i < cursosV.length; i++) {    
        if (cursosV[i][0] === valor) {
            a += 1;
            var opt = document.createElement('option');
            opt.value = cursosV[i][1];
            opt.text = cursosV[i][1];
            comboAnos.add(opt, comboAnos.options[a]);
            
        }
    }     

}






