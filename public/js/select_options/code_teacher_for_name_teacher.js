$(document).ready(function(){
    $('#code_teacher').on('change',function(){
        var usr_code_ID = $(this).val();
       // $('.carregando').show();
        if(usr_code_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_code_teacher_for_name_teacher.php',
                data:'usr_code_user='+usr_code_ID,
                success:function(html){
                    $('#name_teacher').html(html);
                }
            });
        }
    });

});