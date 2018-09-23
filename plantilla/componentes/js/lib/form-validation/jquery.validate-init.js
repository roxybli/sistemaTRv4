
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
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
                    "val-municipio": {
                        required: !0,
                        minlength: 0
                    },
                    "val-direccion": {
                        required: !0,
                        minlength: 0
                    },
                    "val-sede": {
                        required: !0,
                        minlength: 0
                    },
                    "val-name": {
                        required: !0,
                        minlength: 0
                    },
                    "val-lastname": {
                        required: !0,
                        minlength: 0
                    },
                    "val-username": {
                        required: !0,
                        minlength: 3
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
                    "val-password": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password": {
                        required: !0,
                        minlength: 5,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-skill": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phoneus": {
                        required: !0,
                        // phoneUS: !0,
                        minlength: 0
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-municipio": {
                        required: "Por favor, escriba su municipio",
                        minlength: "Su municipio debe constar de al menos 1 caracteres"
                    },
                    "val-direccion": {
                        required: "Por favor, escriba su dirección",
                        minlength: "Su dirección debe constar de al menos 1 caracteres"
                    },
                    "val-name": {
                        required: "Por favor, escriba su nombre",
                        minlength: "Su nombre debe constar de al menos 1 caracteres"
                    },
                    "val-lastname": {
                        required: "Por favor, escriba su apellido",
                        minlength: "Su apellido debe constar de al menos 1 caracteres"
                    },
                    "val-username": {
                        required: "Por favor, ingrese un nombre de usuario",
                        minlength: "Su nombre de usuario debe constar de al menos 3 caracteres"
                    },
                    "val-email": "Por favor, introduce una dirección de correo electrónico válida",
                    "val-password": {
                        required: "Por favor ingrese una contraseña",
                        minlength: "Su contraseña debe tener al menos 5 caracteres"
                    },
                    "val-confirm-password": {
                        required: "Por favor ingrese una contraseña",
                        minlength: "Su contraseña debe tener al menos 5 caracteres",
                        equalTo: "Por favor ingrese la misma contraseña"
                    },
                    "val-select2": "¡Por favor seleccione un valor!",
                    "val-select2-multiple": "Por favor seleccione al menos 2 valores!",
                    "val-suggestions": "¿Qué podemos hacer para ser mejores?",
                    "val-skill": "Por favor seleccione una habilidad!",
                    "val-currency": "Por favor, introduzca un precio!",
                    "val-website": "Por favor ingrese su sitio web!",
                    "val-phoneus": "Por favor, introduzca su número de teléfono",
                    "val-sede": "Por favor, seleccione una sede",
                    "val-digits": "¡Por favor ingrese solo dígitos!",
                    "val-number": "¡Por favor, introduzca un número!",
                    "val-range": "Por favor, introduzca un número entre 1 y 5!",
                    "val-terms": "¡Debe aceptar los términos del servicio!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});