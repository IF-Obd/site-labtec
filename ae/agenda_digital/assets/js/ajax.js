/**
 * Created by Narciso Gomes on 19/04/2019.
 */

function selectajax2(id, acao, valor1, valor2) {

    $.ajax({
        type: "POST",
        url: './ajax/ajax.php?a=' + acao,
        data: {valor1: valor1, valor2: valor2},
        dataType: "html",
        success: function (resultado) {
            $('#' + id).html(resultado);
            // alert(resultado);
        },

        error: (function (resultado) {

            alert('Ocorreu um erro!');

        }),

    });
}