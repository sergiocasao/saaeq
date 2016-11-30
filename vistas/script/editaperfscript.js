$(document).ready(function(){
	var user="";
   	var fuser=false;
   	var ftam=false;
	var fmin=false;
	var fmay=false;
	var fnum=false;
	var fpass1=false;
	var fpass2=false;
	var pass1="";
	var pass2="";
	var oldpass="";

//dialogo para la confirmacion de eliminado de cuenta
	var confirmation = $('#modal-confirmation').dialog({
	dialogClass:'delete_confirmation_dialog',
	autoOpen: false,
	width:400,
	minHeight:200,
	modal: true,
	resizable: false,
	buttons: {
	  'Eliminar': function() {
	    // YOUR CODE
	    window.open("eliminarcuenta.php");
	    self.close();
	    $(this).dialog("close");
	  },
	  'Cancelar': function() {
	    // YOUR CODE
	    $(this).dialog("close");
	  },
	},
	create:function () {
	  $(this).closest(".ui-dialog")
	    .find(".ui-button:eq(1)") // the second button
	    .addClass("continue");
	 }
	});


	//variables para verificacion de datos
	$("#pass2").attr("disabled",true);
	$("#enviar").attr("disabled",true);
	//cada que se presiona una tecla entra a esata funcion
	$("#usuario").keyup(function(){
		user=$(this).val();
		console.log("Cadena ingresada: "+user+"               tamano: "+user.length);
		//cuida que el usuario no tenga menos de 5 letras
		if(user.length < 5)
		{
			console.log("Recuerda que debe tener al menos 5 caracteres");
			$("#palusuario").css("opacity",0);
			fuser=false;
			banderas();
			//aqui deshabilitamos el boton
		}
		//cuida que el usuario este en el rango
		else if (user.length >= 5 && user.length <= 15)
		{
			console.log("El usuario esta dentro del rango");
			$("#palusuario").css("opacity",1);
			fuser=true;
			banderas();

			//aqui habilitamos el boton
		}
		//cuida que el usuario no tenga demasiadas letras
		else 
		{
			console.log("El usuario es demasiado grande");
			$("#palusuario").css("opacity",0);
			fuser=false;
			banderas();
			//aqui deshabilitamos el boton
		}

	})
	$('#pass1').keyup(function() {
		//se obtiene la cadena passwd
		pass1=$(this).val();
		console.log(pass1);
		//evalua que no haya espacios en blanco
		if(/\s/.test(pass1))
		{
			alert("No se permiten espacios en blanco.");
			//se borra el formulario y se resetea la pass1 que tenemos aqui
			$("#pass1").val("");
			pass1="";
			$("#length").removeClass("valid").addClass("invalid");
			$("#letter").removeClass("valid").addClass("invalid");
			$("#capital").removeClass("valid").addClass("invalid");
			$("#number").removeClass("valid").addClass("invalid");
			$("#palpass1").css("opacity",0);
			$("#palpass2").css("opacity",0);
		}
		//validar longitud
		if(pass1.length < 8 || pass1.length > 15)
		{
			console.log("tam "+pass1.length);
			$("#length").removeClass("valid").addClass("invalid");
			ftam=false;
			verificarpaloma();
		}
		else
		{
			console.log("tam "+pass1.length);
			$("#length").removeClass("invalid").addClass("valid");
			ftam=true;
			verificarpaloma();
		}
		//validar minusculas
		if ( pass1.match(/[a-z]/)) 
		{
			$('#letter').removeClass('invalid').addClass('valid');
			fmin=true;
			verificarpaloma();
		} 
		else 
		{
			$('#letter').removeClass('valid').addClass('invalid');
			fmin=false;
			verificarpaloma();
		}
		//validar mayusculas 
		if ( pass1.match(/[A-Z]/)) 
		{
			$('#capital').removeClass('invalid').addClass('valid');
			fmay=true;
			verificarpaloma();
		} 
		else 
		{
			$('#capital').removeClass('valid').addClass('invalid');
			fmay=false;
			verificarpaloma();
		}
		//validamos el numero
		if ( pass1.match(/[0-9]/) ) 
		{
			$('#number').removeClass('invalid').addClass('valid');
			fnum=true;
			verificarpaloma();
		} 
		else 
		{
			$('#number').removeClass('valid').addClass('invalid');
			fnum=false;
			verificarpaloma();
		}
	}).focus(function() {
		//console.log("focus");
		$("#pswd_info").show();
	// focus code
	}).blur(function() {
		//console.log("no focus");
		$("#pswd_info").hide();
	// blur code
	});
	//verifica contraseña 2 que coincidan
	$("#pass2").keyup(function(){
		pass2=$(this).val();
		console.log("Pass 2: "+pass2);
		if(pass1 == pass2)
		{
			$("#palpass2").css("opacity",1);
			$("#coinciden").css("opacity",1);
			fpass2=true;
			banderas();
		}
		else
		{
			$("#palpass2").css("opacity",0);
			$("#coinciden").css("opacity",0);
			fpass2=false;
			banderas();
		}

	});
	//verifica paloma primer contraseña
	function verificarpaloma()
	{
		if(ftam && fmin && fmay && fnum)
		{
			$("#palpass1").css("opacity",1);
			//aqui se activa el confirmar contraseña
			$("#pass2").attr("disabled",false);
			fpass1=true;
		}
		else
		{
			$("#palpass1").css("opacity",0);
			$("#pass2").attr("disabled",true);
			fpass1=false;
		}
	}
	//activa boton cuando todos los campos han sido llenados
	function banderas()
	{
		//se checan las banderas
		if(ftam && fmin && fmay && fnum)
		{
			console.log("se ha validado la contrasena");
		}
		if(ftam && fmin && fmay && fnum && fpass1 && fpass2 && fuser)
		{
			$("#enviar").attr("disabled",false);
		}
		else
		{
			$("#enviar").attr("disabled",true);
			//console.log("faltan algunos campos");
		}
	}


	$("#elimcuenta").click(function(){
		confirmation.dialog('open');
		return false;
	});
});

function mensajeExito()
{
	$("#datos-container").remove();
	$("#elimcuenta").remove();
	$("#actualizacion-conf").show();
}