
$('document').ready(function()
{

    fetch_case_data();
    fetch_law_data();

    function fetch_case_data()
    {
        var dataTable = $('#test_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "searching" : false,
            "ajax" : {
                url:"/mod/fetch_cases.php",
                type:"POST",
                // data:{
                //     filter_gender:filter_gender, filter_country:filter_country
                // }
            }
        });
    }

    function fetch_law_data()
    {
        var dataTable = $('#law_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "searching" : false,
            "ajax" : {
                url:"/mod/fetch_laws.php",
                type:"POST",
            }
        });
    }
    $(document).on('click', '.delete', function(){

        var id = $(this).attr("id");
        if(confirm("Are you sure you want to remove this?"))
        {
            $.ajax({
                url:"/mod/delete_case.php",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#test_table').DataTable().destroy();
                    fetch_case_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
        }
    });
});
