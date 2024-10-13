<?php
class IniciarVenta {

   function init() {
       echo "Venta iniciada".PHP_EOL;
   }

   function getCarrito() {
       return "carrito";
   }
}

class Stock {
   function atualizarStock() {
       echo "Stock atualizado".PHP_EOL;
   }
}

class ProcesarCarrito {

   function getPedido($carrito) {
       echo "Pedido entregado con exito".PHP_EOL;

       return new Stock();
   }
}


class PrepararProduto {
  
   function empaquetar($carrito) {
       echo "Preparando produto para envio".PHP_EOL;
   }
}

class EnviarProduto {

   function enviarPedido() {
       echo "Producto enviado a destinatario".PHP_EOL;
   }
}
?>