function initMap(){
    
    var latlong = {
                lat: 36.717836, 
                lng:  -4.433819
                };
                        
    var opciones_de_mapa = {
        center: latlong,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    
    var map = new google.maps.Map(
            document.getElementById('map'),
            opciones_de_mapa
        );

    var icon = {
        url: "../imagenes/tomate-logo.png",
        scaledSize: new google.maps.Size(50, 40)
    }
 
    var marker = new google.maps.Marker(
            {
                position:latlong,
                map:map,
                title:"La empresa",
                icon: icon
            });
}

//carrito productos varios
/*
var total_articulos = 0;
var total_euros = 0;

var stock_producto_1 = 5;
var id_producto_1 = 1;
var precio_producto_1 = 10;

var stock_producto_2 = 10;
var id_producto_2 = 2;
var precio_producto_2 = 7;

var stock_producto_3 = 15;
var id_producto_3 = 3;
var precio_producto_3 = 12;

var carrito = {
    
    productos: [],
    devolvertoal: function() {
        var total = 0;
        //codigo que recorra todos los prdocutos y sume los totales
        for (i=0;this.productos.length<i;i++) {
            
        }
        return total;
    }
}

function addCarrito(id,precio){
    
    carrito.producto[id].cantidad = carrito.producto[id].cantidad + 1;
    carrito.producto[id].total = carrito.producto[id].cantidad * precio;
   
   var total = carrito.devolvertoal();
    
    //Validamos que el stock del producto no sea 0
    if(producto == 1 && stock_producto_1 > 0){
        //descontamos en 1 el stock
        //porque lo estamos añadiendo al carrito
        stock_producto_1 = stock_producto_1 - 1;
        total_articulos = total_articulos + 1;
        total_euros = total_euros + precio_producto_1;
        
        var numero_articulos = document.getElementById("numero");
        numero_articulos.innerHTML = total_articulos;
        console.log(numero_articulos.innerHTML);
        
        var total_precio = document.getElementById("total");
        total_precio.innerHTML = total_euros;
        console.log(total_precio.innerHTML);
        
        
        console.log("Total número de artículos: " + total_articulos);
        console.log("Total Euros: " + total_euros);
    
        
    }else if (producto == 2 && stock_producto_2 > 0){
        //descontamos en 2 el stock
        //porque lo estamos añadiendo al carrito
        stock_producto_2 = stock_producto_2 - 1;
        total_articulos = total_articulos + 1;
        total_euros = total_euros + precio_producto_2;
        
        var numero_articulos = document.getElementById("numero");
        numero_articulos.innerHTML = total_articulos;
        console.log(numero_articulos.innerHTML);
        
        var total_precio = document.getElementById("total");
        total_precio.innerHTML = total_euros;
        console.log(total_precio.innerHTML);
        
        
        console.log("Total número de artículos: " + total_articulos);
        console.log("Total Euros: " + total_euros);
        
        
    }else if (producto == 3 && stock_producto_3 > 0){
        //descontamos en 3 el stock
        //porque lo estamos añadiendo al carrito
        stock_producto_3 = stock_producto_3 - 1;
        total_articulos = total_articulos + 1;
        total_euros = total_euros + precio_producto_3;
        
        var numero_articulos = document.getElementById("numero");
        numero_articulos.innerHTML = total_articulos;
        console.log(numero_articulos.innerHTML);
        
        var total_precio = document.getElementById("total");
        total_precio.innerHTML = total_euros;
        console.log(total_precio.innerHTML);
        
        
        console.log("Total número de artículos: " + total_articulos);
        console.log("Total Euros: " + total_euros);
        
           
    }else{
        alert("El stock de este producto se ha acabado.")
    }
    
    /*console.log(producto);*/
/*
    return false;
    
}


// formulario contacto

function validarFormulario() {
    
    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellidos");
    var email = document.getElementById("email");
    var motivo = document.getElementById("motivo");
    
    var etiqueta_error_nombre = document.getElementById("error_nombre");
    if(nombre.value == nombre.length <= 0){
        etiqueta_error_nombre.innerHTML = "Requerido";
        nombre.style.border = "1px solid red";
    }else{
        etiqueta_error_nombre.innerHTML = "";
        nombre.style.border = "";
    };
    
    
    var etiqueta_error_apellidos = document.getElementById("error_apellidos");
    if(apellidos.value == apellidos.length <= 0){
        etiqueta_error_apellidos.innerHTML = "Requerido";
        apellidos.style.border = "1px solid red";
    }else{
        etiqueta_error_apellidos.innerHTML = "";
        apellidos.style.border = "";
    };
    
    
    var etiqueta_error_email = document.getElementById("error_email");
    if(email.value == email.length <= 0){
        etiqueta_error_email.innerHTML = "Requerido";
        email.style.border = "1px dashed red";
    }else{
        etiqueta_error_email.innerHTML = "";
        email.style.border = "";
    };
    
    
    var etiqueta_error_motivo = document.getElementById("error_motivo")
    if(motivo.value == ""){
        etiqueta_error_motivo.innerHTML = "Requerido";
        motivo.style.border = "1px solid red";
    }else{
        etiqueta_error_motivo.innerHTML = "";
        motivo.style.border = "";
    }
    
    return;
}
*/