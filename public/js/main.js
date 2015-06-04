/**
 * Created by Lulu on 2015/5/18.
 */
$(function() {

    $("#link_test").click(function() {

        var test = 1111111;
        console.log('OK');
        $.post('action("ArticleController@ajaxTest")',
            { '_token': token ,'test': test},
            function(data) {

                alert("Data Loaded: " + data);
            }

        );
        alert("Data Loaded: ");

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

