<html>  
    <head>  
        <title>Update Multiple Mysql Data using Checkbox with Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
    <form action=""> 
    <button><a href="../insert_db">change to insert_db</a></button>
  </form>

        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Update Multiple Mysql Data using Checkbox with Ajax in PHP</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="15%"></th>
                                <th width="50%">Name</th>
                                <th width="15%">Status</th>
                                
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-name="'+data[count].name+'" class="check_box"  /></td>';
                    html += '<td>'+data[count].name+'</td>';
                }
                $('tbody').html(html);
            }
        });
    }

    fetch_data();

    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-name="'+$(this).data('name')+'" class="check_box" checked /></td>';
            html += '<td><input type="text" name="name[]" class="form-control" value="'+$(this).data("name")+'" /></td>';
            html += '<td><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" />editing</td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-name="'+$(this).data('name')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('name')+'</td>';
            html += '<td><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" />aborted</td>';
                       
        }
        $(this).closest('tr').html(html);
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"multiple_update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Data Updated');
                    fetch_data();
                }
            })
        }
    });

});  
</script>