$(document).ready(function(){

	$("#lista").mouseenter(function(){
	    $("#lista-oculta").stop(true,true).slideDown('medium');
	});

	$("#lista").mouseleave(function(){
	    $("#lista-oculta").stop(true,true).slideUp('medium');
	});

	$(".dropdown").mouseenter(function(){
	    $(".dropdown-menu").stop(true,true).slideDown('medium');
	});

	$(".dropdown").mouseleave(function(){
	    $(".dropdown-menu").stop(true,true).slideUp('medium');
	});

});