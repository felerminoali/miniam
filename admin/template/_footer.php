<script src="../js/jquery.min.js"></script>
<script src="../js/datatables.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
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
                    "aaData": [result], //here we get the array data from the ajax call.
                    "aoColumns": [
                        { "sTitle": "ID" },
                        { "sTitle": "Name" },
                        { "sTitle": "Email" }
                    ] //this isn't necessary unless you want modify the header
                      //names without changing it in your html code.
                      //I find it useful tho' to setup the headers this way.
                });
            }
        });
    });
</script>

</body>
</html>
