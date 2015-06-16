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
            url: "/blog/public/ajax/post",
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

        $.ajax({
            type: "POST",
            url: "/blog/public/ajax/post",
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

    $("#to_save_draft").click(function () {

        var article_title = $("#ArticleTitle").val();
        var article_content = getContenet();
        var category_id = $("#rm_category_area option:selected").val();
        var article_id = $("#ArticleId").text();

        $.ajax({
            type: "POST",
            url: "/blog/public/ajax/post",
            dataType: "json",
            data: {
                msg_type: 2,
                category_id : category_id,
                article_content : article_content,
                article_title : article_title,
                article_id : article_id
            },
            success: function (data) {

                $("#ArticleId").text(data.article_id);
                console.log(data.article_id);
                console.log("response ok");
            }
        })

    });

    //.is(':checked'):
    //checkBoxArticle_id
    $("#operation_article").click(function () {
        var length = $("#checkBoxArticle_id tr").length;

        console.log(length);
        /*
        $.ajax({
            type: "POST",
            url: "/blog/public/ajax/post",
            dataType: "json",
            data: {
                msg_type: 3

            },
            success: function (data) {
                console.log("response ok");
            }
        })*/

    });

});

function addLinkClick() {
    $("#add_category_area").toggle();
}

function rmLinkClick() {
    $("#rm_category_area").toggle();
}