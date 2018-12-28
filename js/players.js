
function AddPlayerClick(value)
{
    var add_caption = 'Add Player';
    var delete_caption = 'Delete Player';

    var id = value.id;
    var nbr = id.replace('add', '');
    var old_nbr_int = parseInt(nbr);
    var nbr_int = old_nbr_int + 1;
    var label_id = 'label' + nbr_int;
    if (nbr_int === 3)
    {
        var label = $("<label>").html('Player ' + nbr_int + ' Name: ');
    }
    else
    {
        var label = $("<label>").html('<br>Player ' + nbr_int + ' Name: ');
    }
    label.attr({id: label_id});
    var input_id = 'text' + nbr_int;
    var btn_add_id = 'add' + nbr_int;
    var btn_delete_id = 'delete' + nbr_int;
    var input = $('<input type="text">').attr({id: input_id, name: input_id});
    var add_btn = $('<input type="button">').attr({id: btn_add_id, name: btn_add_id, 
                                                value: add_caption, class: 'players'});
    add_btn.attr('onClick','AddPlayerClick(this)');
    
    var del_btn = $('<input type="button">').attr({id: btn_delete_id, name: btn_delete_id, 
                                                value: delete_caption, class: 'players'});
    del_btn.attr('onClick','DeletePlayerClick(this)');
    
    input.appendTo(label).attr({id: input_id, name: input_id});
    
    $( "#add" + old_nbr_int).attr('disabled', 'disabled');
    $( "#delete" + old_nbr_int).attr('disabled', 'disabled');
    
    $( "#extraplayers" ).append( label );
    $( "#extraplayers" ).append( add_btn );
    $( "#extraplayers" ).append( del_btn );
}

function DeletePlayerClick(value)
{
    var add_caption = 'Add Player';
    var delete_caption = 'Delete Player';

    var id = value.id;
    var nbr = id.replace('delete', '');
    var nbr_int = parseInt(nbr);
    var label = 'label' + nbr_int;
    var input_id = 'text' + nbr_int;
    var btn_add_id = 'add' + nbr_int;
    var btn_delete_id = 'delete' + nbr_int;
    $('#' + btn_add_id).remove();
    $('#' + btn_delete_id).remove();
    $('#' + label).remove();
    $('#' + input_id).remove();
   
    old_nbr_int = nbr_int - 1;
    if (old_nbr_int >= 2)
    {
        $( "#add" + old_nbr_int).removeAttr('disabled');
        $( "#delete" + old_nbr_int).removeAttr('disabled');
    }

}

