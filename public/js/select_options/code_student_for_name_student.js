$(document).ready(function(){
    $('#code_student').on('change',function(){
        var usr_code_ID = $(this).val();
       // $('.carregando').show();
        if(usr_code_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_code_student_for_name_student.php',
                data:'usr_code_user='+usr_code_ID,
                success:function(html){
                    $('#name_student').html(html);
                }
            });
        }
    });

});