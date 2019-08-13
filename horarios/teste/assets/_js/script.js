/*DOCUMENTO JAVA SCRIPT*/
$(document).ready(function(){
    //tira visibilidade da div alert
    $("#alert").hide();
    
    
   var conteudo = $('.tab-hide');
    conteudo.hide();
    
    $('.exib-tab').click(function(){
       conteudo.slideToggle('slow'); 
    });
    
    
    $("#form").submit(valida);    
        
    function valida(){
        if($("#anos").val()===null){
            $("#alert").empty();
            $("#alert").append("<div class='alert alert-danger'role='alert'><strong>Ops! </strong>Você não pode consultar seus horários se não informa seu curso e período.</div>").show('slow');
            setTimeout(function() { $("#alert").hide("slow"); }, 5000);
            return false;
            
        } else{
            return true;
        }

    }
});