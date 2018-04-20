 $(document).ready(function(){
    $('#editable_table').Tabledit({
      url: 'ajax/action.php',
      columns:{
        identifier:[0, "user_id"],
        editable:[[1, 'Username'], [2, 'email'], [3, 'first_name'], [4, 'surname']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
         if(data.action == 'delete')
         {
            $('#'+data.id).remove();
         }
      }
    });
  });
