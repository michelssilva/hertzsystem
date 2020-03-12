$(document).ready(function(){
    $('#unit_name').on('change',function(){
        var unt_name_ID = $(this).val();
       // $('.carregando').show();
        if(unt_name_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_unit_name_for_unit_classes.php',
                data:'unt_name='+unt_name_ID,
                success:function(html){
                    $('#unit_classes').html(html);
                }
            });
        }
    });

});