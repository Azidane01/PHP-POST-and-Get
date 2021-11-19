$(document).ready(function(){

$("input[type=radio]").change(function(){
 var method = $(this).val();
 $("#form").attr("method", method); 
});

$("#submit").click(function(){ 
	var fnpm = $("#fnpm").val();
	var fnama = $("#fnama").val();
	var lalamat = $("#lalamat").val();
	var jurusan = $("#jurusan").val();
	
	if( fnpm != '' || fnama != '' || lalamat !='' || jurusan != ' '){
		return true; 
	}	
	else{
		alert("Tolong diisi...!!!!!!");
		return false;
	}
});
});