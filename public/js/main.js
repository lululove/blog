/**
 * Created by Lulu on 2015/5/18.
 */
function saveInputChecked() {

    var checked = {};
    var i=0;
    $("input[name='article_id']:checked").each(function () {
        checked[i++] = this.value;
    });

    return checked;
}

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

    $("#article_operation button").click(function () {

        var operation_id = $("#article_operation select option:selected").val();

        console.log("entry ok");
        if (operation_id == '1')
            return;

        var checked = saveInputChecked();

        if (checked[0] == null) {

            console.log("checked null")

            return;
        }
        console.log(checked);
        switch (operation_id) {
            case '2':  //转成草稿

                $.ajax({
                    type: "POST",
                    url: "/blog/public/ajax/post",
                    dataType: "json",
                    data: {
                        msg_type: 3,
                        checked: checked

                    },
                    success: function (data) {
                        console.log(data.article_checked);
                        window.location.reload();
                    }
                })
                break;
            case '3':  //发布文章
                $.ajax({
                    type: "POST",
                    url: "/blog/public/ajax/post",
                    dataType: "json",
                    data: {
                        msg_type: 4,
                        checked: checked

                    },
                    success: function (data) {
                        console.log(data.article_checked);
                        window.location.reload();
                    }
                })
                break;
            case '4':  //回收站
                $.ajax({
                    type: "POST",
                    url: "/blog/public/ajax/post",
                    dataType: "json",
                    data: {
                        msg_type: 5,
                        checked: checked

                    },
                    success: function (data) {
                        console.log(data.article_checked);
                        window.location.reload();
                    }
                })
                break;
            default:
                break;
        }

       // var length = $("#checkBoxArticle_id tr").length;

       // $("#checkBoxArticle_id tr").first().remove();
       // console.log(length);
    });

});

function addLinkClick() {
    $("#add_category_area").toggle();
}

function rmLinkClick() {
    $("#rm_category_area").toggle();
}