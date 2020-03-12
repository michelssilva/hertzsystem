$(document).ready(function(){
    $('#course_name').on('change',function(){
        var crs_name_ID = $(this).val();
        if(crs_name_ID){
            $.ajax({
                type:'POST',
                url:'ajaxData_course_name_for_course_payment.php',
                data:'crs_name='+crs_name_ID,
                success:function(html){
                    $('#course_payment').html(html);
                }
            });
        }
    });

});