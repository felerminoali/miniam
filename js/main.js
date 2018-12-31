
$('document').ready(function()
{

    fetch_data();
    delete_button();


    function fetch_data()
    {
        var dataTable = $('#test_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "searching" : false,
            "ajax" : {
                url:"/mod/fetch.php",
                type:"POST",
                // data:{
                //     filter_gender:filter_gender, filter_country:filter_country
                // }
            }
        });
    }

    function delete_button()
    {

        var id = $(this).attr("id");
        if(confirm("Are you sure you want to remove this?"))
        {
            $.ajax({
                url:"/mod/delete.php",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#test_table').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
        }
    }
});
