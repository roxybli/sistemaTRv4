$(document).ready(function(){
	$('#telefono').mask("503-9999-9999");
	$('#dui').mask("99999999-9");

	//Validacion del formulario de usuarias
	$("#FormUsuarias").validate({

     			ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
				rules: {
					sede: "required",
					nombre: "required",
					apellido: "required",
					tipo: "required",
			        nomuser: "required",
			        pass: "required",
					direccion: "required",
					telefono: "required",
					dui: "required"
				},
				messages: {
					sede: "Selecione una sede para continuar",
					nombre: "Ingres el nombre completo de la usuaria",
					apellido: "Ingrese el apellido completo de la usuaria",
					tipo: "Seleccione un tipo de usuaria",
					nomuser: "Asigne un nombre de usuaria para el sistema",
					pass: "No puede crear un usuario si no ha insertado una contraseña",
					direccion: "Ingrese la direccion de la usuaria",
					telefono: "Ingrese el número de contacto de la usuaria",
					dui: "Igrese el número de Dui de la usuaria"
		
				}
			});
});
