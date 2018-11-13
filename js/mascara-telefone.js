var maskBehavior =	function (val) {
						return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
					}, // a vírgula indica que são várias variáveis (var) declaradas...
					options = {onKeyPress: function(val, e, field, options) {
 						field.mask(maskBehavior.apply({}, arguments), options);
					}
				};
 
$("#telefone").mask(maskBehavior, options);