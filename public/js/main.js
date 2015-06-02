/**
 * Created by Lulu on 2015/5/18.
 */
$(function() {

});

function do_list_row_show(strid){
    strid.getElementsByTagName('a')[0].className='on';
    strid.getElementsByTagName('span')[0].style.display="block";
    strid.style.position="relative";
}
function do_list_row_unshow(strid){
    strid.getElementsByTagName('a')[0].className='';
    strid.getElementsByTagName('span')[0].style.display="";
    strid.style.position="";
}

