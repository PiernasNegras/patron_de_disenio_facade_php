<?php

include 'Subsistemas.php';

class VentaFacade {

   private $iniciarpedido;
   private $stock;
   private $procesamiento;
   private $empaquetar;
   private $enviar;

   function __construct($iniciarpedido, $procesamiento, $empaquetar, $enviar) {
       $this->iniciarpedido = $iniciarpedido;
       $this->procesamiento = $procesamiento;
       $this->empaquetar = $empaquetar;
       $this->enviar = $enviar;
   }

   function cicloPedidoCompleto() {
       $this->iniciarpedido->init();
       $carritoCliente = $this->iniciarpedido->getCarrito();
       $this->stock = $this->procesamiento->getPedido($carritoCliente);
       $this->stock->atualizarStock();
       $this->empaquetar->empaquetar($carritoCliente);
       $this->enviar->enviarPedido();
   }
}

function realizarVenta() {
   $venta = new VentaFacade(new IniciarVenta(), new ProcesarCarrito(), 
   new PrepararProduto(), new EnviarProduto());

   $venta->cicloPedidoCompleto();
}

realizarVenta();
?>