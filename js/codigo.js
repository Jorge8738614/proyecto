
    $(document).ready(function(){       
    //ejemplo básico
    var options = {
        data: ["Botellón", "Botella personalizada 1 litro", "Hielo", "Botellón 10 litros", "Botella personalizada 500 ml"], //yellow, blue, purple, blue-light     
    };
    $("#producto_nombre").easyAutocomplete(options);

    });

    $(document).ready(function(){       
    //ejemplo básico
    var options = {
        data: ["Empresa privada", "Casa particular", "Gimnasio", "Empresa publica", "departamento"], //yellow, blue, purple, blue-light     
    };
    $("#tipo_cliente").easyAutocomplete(options);

    });
    