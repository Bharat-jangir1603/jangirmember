$(document).ready(function () {
    $('form').submit(function (e) { 
        e.preventDefault();
        $name = $('#name').val();
        $name = $name.trim();
        $.ajax({
            type: "post",
            url: "http://localhost/code_4/home",
            data: {name: $name, pass: $('#pass').val()},
            // dataType: "dataType",
            success: function (response) {
                if(response != 'submitted'){
                    $('.err').css('display', 'block',);
                    $('.err').html(response);
                }else{
                    location.href = 'http://localhost/code_4/daseboard';
                }
            }
        });
    });
});


// console.log('hello world');
// let name = ' " n$ k 64u,ch b]hi  ';
// console.log(name);
// name = name.trim();
// name = name.replace(/[^a-zA-Z]/g, '');
// // if(name.include(Array('')))
// console.log(name);