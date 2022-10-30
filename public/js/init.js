$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown({
        coverTrigger: false
    });
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.datepicker').datepicker({
        autoClose : true,
        format : 'yyyy/mm/dd'
    });
});
