# Patron de diseño FACADE en PHP
Este es un pequeño ejemplo de como implementar el patrón de diseño FACADE para la materia Ingeniería de Software II con PHP

En primer lugar definí las clases que representan las diferentes partes del proceso de venta en el archivo Subsistemas.php,
IniciarVenta,Stock,ProcesarCarrito,PreparProducto,EnviarProducto
En el archivo Facade.php voy a utilizar las clases definidas en el archivo de Subsistemas.php, y tengo una clase VentaFacade que tiene propiedades privadas para cada subsistema (iniciarpedido,stock,procesamiento,empaquetar,enviar), esto me ayuda a poder coordinar el proceso compleja de venta en una sola función la cual va a iniciar la venta, Obtener el carrito del cliente, Procesar el pedido, actualizar el stock, empaquetar el producto y envíarlo. 
Como se trata de un ejemplo de demostración cree la función realizarVenta() para crear una instancia de VentaFacade y llamar a cicloPedidoCompleto() para ejecutar todo el proceso de venta.
