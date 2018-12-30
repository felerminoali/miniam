
$('document').ready(function()
{
    $.ajax({
        type : 'POST',
        url  : '/mod/test.php',
        dataType: 'json',
        cache: false,
        success :  function(result)
        {
            //pass data to datatable
            console.log(result); // just to see I'm getting the correct data.
            $('#test_table').DataTable({
                "searching": false, //this is disabled because I have a custom search.
                "aaData": [result] //here we get the array data from the ajax call.

            });
        }
    });
});
