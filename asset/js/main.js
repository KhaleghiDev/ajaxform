// $(".btn-modal").click(function(){
//     $(".modal-overlay").fadeIn(500)
// });
// $(".close-modal").click(function(){
//     $(".modal-overlay").fadeOut(500)
// });
// var KEYCODE_ENTER = 13;
// var KEYCODE_ESC = 27;
//
//     if(e.keyCode==KEYCODE_ESC){
//         $(".modal-overlay").fadeOut(500)
//     }
//     if(e.keyCode==KEYCODE_ENTER){
//         $(".modal-overlay").fadeIn(500)
//     }
//   });
// var text=$("#input");
// var btn=$("#send");
// var results=$("#resoult");

// btn.click(function(){



//     $.ajax({
//         method: "POST",
//         url: "./../php/index.php",
//         data:{data:text.val()},
//         success: function (result) {
//             console.log(result)
//                 results.html(result)
//         },error: function(err){
//             console.log(err);
//         }
//     });

// });

// setInterval(() => {
//     $.ajax({
//         url: "./../php/randGenrateWord.php",
//         success: function (respanse) {
//                 $("#sentense").html(respanse)
//         },error: function(err){
//             console.log(err);
//         }
//     });
// }, 3000);
$(document).ready(function () {
    let form= $("#ajax_states");
    let resultTag= $("#resulte-tag");

    form.submit(function (event) {
        resultTag.html("<img src='/asset/img/loader.gif' alt='loader'>");
        event.preventDefault();
        $.ajax({
                    url: form.attr('action'),
                    method:  form.attr('method'),
                    data:form.serialize(),
                    success: function (respanse) {
                        resultTag.html(respanse)
                    },error: function(err){
                        console.log(err);
                    }
                });

    });
});