$(document).ready(function(){
	//alert("hola ya estoy aqui");
});
function errorCorreo()
{
	//alert("hola soy errorCorreo");
	$("#errorcorreo").show();
}
function confirmacion()
{
	//alert("hola soy confirmacion");
	$("#form-container").hide();
	$("#confirmacion-container").show();
}
function errorEnvio()
{
	//alert("hola soy error envio");
	$("#form-container").hide();
	$("#envio-container").show();
}
function restaurar()
{
	$("#errorcorreo").hide();
	$("#form-container").show();
	$("#confirmacion-container").hide();
	$("#envio-container").hide();

}