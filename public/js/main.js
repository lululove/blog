/**
 * Created by Lulu on 2015/5/18.
 */
$(function() {

    $("#link_test").click(function() {

        var test = 1111111;
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

    });

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

});

