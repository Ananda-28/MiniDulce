<?php

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$pedido = $_POST ['pedido'];

$destinatario = "AL11075@abrahamlincoln.edu.pe";
$asunto = "Mini Dulce Pedido";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Pedido: $pedido";

mail($destinatario, $asunto, $carta)
header(Location: 'envio.html')
?>
