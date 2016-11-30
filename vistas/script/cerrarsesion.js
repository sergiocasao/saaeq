$(document).ready(function(){

	var confirmation = $('#modal-logout').dialog({
	dialogClass:'delete_confirmation_dialog',
	autoOpen: false,
	width:400,
	minHeight:200,
	modal: true,
	resizable: false,
	buttons: {
	  'Cerrar sesion': function() {
	    // YOUR CODE
	    $(this).dialog("close");
	    self.close();
	    window.open("../index.php");
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


	$('#btnlogout').click(function(){
		confirmation.dialog('open');
		return false;
	});
});