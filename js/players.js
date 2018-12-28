
function AddPlayerClick(value)
{
    var add_caption = 'Add Player';
    var delete_caption = 'Delete Player';

    var id = value.id;
    var nbr = id.replace('add', '');
    var nbr_int = parseInt(nbr) + 1;
    var label = $("<label>").text('Player ' + nbr_int + ' Name: ');
    var input_id = 'text' + nbr_int;
    var btn_add_id = 'add' + nbr_int;
    var btn_delete_id = 'delete' + nbr_int;
    var input = $('<input type="text">').attr({id: input_id, name: input_id});
    var add_btn = $('<input type="button">').attr({id: btn_add_id, name: btn_add_id, value: add_caption});
    //add_btn.data('value', nbr);
    add_btn.attr('onClick','AddPlayerClick(this)');
    
    var del_btn = $('<input type="button">').attr({id: btn_delete_id, name: btn_delete_id, value: delete_caption});
    
    input.appendTo(label).attr({id: input_id, name: input_id});
    
    $( "#extraplayers" ).append( label );
    $( "#extraplayers" ).append( ' ' );
    $( "#extraplayers" ).append( add_btn );
    $( "#extraplayers" ).append( ' ' );
    $( "#extraplayers" ).append( del_btn );
    $( "#extraplayers" ).append( '<br>' );
}