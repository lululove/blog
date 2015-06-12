/**
 * Created by Lulu on 2015/5/18.
 */
$(function() {


    $("#category_show").mouseover(function() {
        this.getElementsByTagName('a')[0].className='on';
        this.getElementsByTagName('span')[0].style.display="block";
        this.style.position="relative";
    });

    $("#category_show").mouseout(function () {
        this.getElementsByTagName('a')[0].className='';
        this.getElementsByTagName('span')[0].style.display="";
        this.style.position="";
    });

    $("#add_category_area button").click(function () {

        var category_name = $("#add_category_area input").val();

        $.ajax({
            type: "POST",
            url: "ajax/test",
            dataType: "json",
            data: {
                msg_type: 0,
                category_name : category_name
            },
            success: function (data) {
                $("#edit_category").append(data.category_div);
                $("#rm_category_area select").append(data.category_opinion);
            }
        })
    });

    $("#rm_category_area button").click(function () {

        var category_id = $("#rm_category_area option:selected").val();

       // console.log(category_id);

        $.ajax({
            type: "POST",
            url: "ajax/test",
            dataType: "json",
            data: {
                msg_type: 1,
                category_id : category_id
            },
            success: function (data) {

                $("#edit_category_"+category_id).remove();
                $("#select_category_"+category_id).remove();
            }
        })


    });

});

function addLinkClick() {
    $("#add_category_area").toggle();
}

function rmLinkClick() {
    $("#rm_category_area").toggle();
}