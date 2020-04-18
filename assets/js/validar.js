<script type="text/javascript">
//datepicker plugin
		//link
		$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			})
			//Mostrar el datepicker al hacer click en el icono
			.next().on(ace.click_event, function() {
				$(this).prev().focus();
			});
		//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
		$('input[name=date-range-picker]').daterangepicker({
				'applyClass': 'btn-sm btn-success',
				'cancelClass': 'btn-sm btn-default',
				locale: {
					applyLabel: 'Apply',
					cancelLabel: 'Cancel',
				}
			})
			.prev().on(ace.click_event, function() {
				$(this).next().focus();
			});
      // otro
            $('#registrationForm').bootstrapValidator({
            	 feedbackIcons: {
            		 valid: 'glyphicon glyphicon-ok',
            		 invalid: 'glyphicon glyphicon-remove',
            		 validating: 'glyphicon glyphicon-refresh'
            	 },
            	 fields: {
            		 nombre: {
            			 validators: {
            				 notEmpty: {
            					 message: 'El nombre es requerido'
            				 }
            			 }
            		 },
            		 apellido: {
            			 validators: {
            				 notEmpty: {
            					 message: 'El apellido es requerido'
            				 }
            			 }
            		 },
            		 email: {
            			 validators: {
            				 notEmpty: {
            					 message: 'El correo es requerido y no puede ser vacio'
            				 },
            				 emailAddress: {
            					 message: 'El correo electronico no es valido'
            				 }
            			 }
            		 },
            		 password: {
            			 validators: {
            				 notEmpty: {
            					 message: 'El password es requerido y no puede ser vacio'
            				 },
            				 stringLength: {
            					 min: 8,
            					 message: 'El password debe contener al menos 8 caracteres'
            				 }
            			 }
            		 },
            		 datetimepicker: {
            			 validators: {
            				 notEmpty: {
            					 message: 'La fecha de nacimiento es requerida y no puede ser vacia'
            				 },
            				 date: {
            					 format: 'YYYY-MM-DD',
            					 message: 'La fecha de nacimiento no es valida'
            				 }
            			 }
            		 },
            		 sexo: {
            			 validators: {
            				 notEmpty: {
            					 message: 'El sexo es requerido'
            				 }
            			 }
            		 },
            		 telefono: {
            			 message: 'El teléfono no es valido',
            			 validators: {
            				 notEmpty: {
            					 message: 'El teléfono es requerido y no puede ser vacio'
            				 },
            				 regexp: {
            					 regexp: /^[0-9]+$/,
            					 message: 'El teléfono solo puede contener números'
            				 }
            			 }
            		 },
            		 telefono_cel: {
            			 message: 'El teléfono no es valido',
            			 validators: {
            				 regexp: {
            					 regexp: /^[0-9]+$/,
            					 message: 'El teléfono solo puede contener números'
            				 }
            			 }
            		 },

            	 }
            });
              </script>