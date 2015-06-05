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

        var category = $("#add_category_area input").val();
        var html = ""

        $.ajax({
            type: "POST",
            url: "ajax/test",
            dataType: "json",
            data: {category : category},
            success: function (data) {

                console.log(data);
                $("#edit_category")

            }
        })
    });

});

/*
 console.log('OK');
 $.ajax({
 type: "POST",
 url: "ajax/test",
 dataType: "json",
 data: test,
 success:function(data) {

 alert("Hello, welcome to ajax feature.");
 }
 });
*/
function addLinkClick() {
    $("#add_category_area").toggle();
}