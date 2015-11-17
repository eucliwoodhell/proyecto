
	    //funciones de cliente
    $('#rut_c').focusout(function () {
      	var d=validarDv($('#rut_c').val());
		$('#dv_c').val(d);

    })

    // funciones  repartidor
    $('#rut_r').focusout(function () {
      	var d=validarDv($('#rut_r').val());
		$('#dv_r').val(d);

    })

    //pedido
 	$(function() {
		$( "#datePickerDesde" ).datepicker();
		$( "#datePickerDesde" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );
	});

	$(function() {
		$( "#datePickerHasta" ).datepicker();
		$( "#datePickerHasta" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );
	});



    //funciones Genericas
    function cualEsLaFechaActual(){
		var hoy = new Date();
		dia = hoy.getDate();
		mes = hoy.getMonth();
		mes++;
		if(mes<10){
			mes='0'+mes;
		}
		anio= hoy.getFullYear();
		return String(dia+"-"+mes+"-"+anio);
    }

    function validarDv(T){ // validar digito v. rut
        var M=0,S=1;for(;T;T=Math.floor(T/10))
        S=(S+T%10*(9-M++%6))%11;
        return S?S-1:'k';
    }

    function soloNumeros(e)
	{
		var keynum = window.event ? window.event.keyCode : e.which;
		if ((keynum == 8) || (keynum == 46))
		return true;

		return /\d/.test(String.fromCharCode(keynum));
	}
