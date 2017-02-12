$( document ).ready(function() {

$(".success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".success-alert").alert('close');
});
$(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-danger").alert('close');
});
});
