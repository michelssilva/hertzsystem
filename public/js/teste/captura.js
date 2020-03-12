$(document).ready(function(){
    $('#inicial').on('change',function(){
        var inicial_ID = $(this).val();
        // $('.carregando').show();
        if(inicial_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_captura.php',
                data:'inicial='+inicial_ID,
                success:function(html){
                    $('#unit_classes').html(html);
                }
            });
        }
    });

    $('#final').on('change',function(){
        var final_ID = $(this).val();
        // $('.carregando').show();
        if(final_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_captura.php',
                data:'final='+final_ID,
                success:function(html){
                    $('#unit_classes').html(html);
                }
            });
        }
    });

});