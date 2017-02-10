$( document ).ready(function() {
    //categories admin panel
 $(".edit").click(function(){
      var  a_this = $(this);
        var id = a_this.attr('data');
        console.log(id);
var name = a_this.parent().siblings('.name').text();

$("#id").val(id);
$("#name").val(name);
 $('#form').attr('action', 'adminnews/edit_categories').show();


$("#form.form-group").find("label").text("Edit Name");
   
     });

 $(".add").click(function(){
     $('#form').attr('action', 'adminnews/add_categories').show();

$("#form.form-group").find("label").text("Add New Name");
 });
//news admin panel
$(".edit_news").click(function(){
      var  a_this = $(this);
        var id = a_this.attr('data_id');
        var title = a_this.parent().siblings('.title').text();
         var date = a_this.attr('data_date');
         var text = a_this.attr('data_text');
         var author = a_this.attr('data_author');
         var img = a_this.attr('data_img');
         var change_cat = a_this.attr('data_change_category');

$("#id").val(id);
$("#title").val(title);
$("#datetimepicker4").val(date);
$("#text").val(text);
$("#author").val(author);
$("#change_category").val(change_cat);
$("#img").attr('src','http://localhost/code/application/libraries/bootstrap/img/'+img).show();

 $('#form_news').attr('action', 'http://localhost/code/index.php/admin/adminnews/admin_news_about_edit').show();


//$("#form_news.form-group").find("label").text("Edit Name");
   
     });
   $(".add_news").click(function(){
       $('#form_news').attr('action', 'http://localhost/code/index.php/admin/adminnews/add_news_about').show();
$("#id").val('');
$("#title").val('');
$("#datetimepicker4").val('');
$("#text").val('');
$("#author").val('');
$("#change_category").val('');
$("#img").attr('src','').hide();
       
       
        });

//  $('.list-group-item a').click(function(event) {
//   event.preventDefault();
//       var  a_this = $(this);
//        var id = a_this.parent().attr('id');
//        //alert(id);
//        var  data = "name=ravi&age=31";
        //$.post("http://localhost/code/index.php/admin/adminnews/newsindex/");
//  $.ajax({
//            type: "POST",
//            url: "http://localhost/code/index.php/admin/adminnews/newsindex/"+id,
//            data: '{"name=ravi&age=31"}',
//            contentType: "application/json; charset=utf-8",
//            dataType: "json",
//            success: function (msg) {
//               //do something
//            },
//            error: function (errormessage) {
//
//                //do something else
//
//            }
//        });
     //Removes the active class from any <li> elements
//    $('.list-group-item li.active').removeClass('active');
//    //Adds it to the current element
//    $(this).parent('li').addClass('active');
//  });
$(".success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".success-alert").alert('close');
});
$(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-danger").alert('close');
});
});
