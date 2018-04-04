<?php
// Add custom Theme Functions here
// 
/**
 * Cambio de textos en WooCommerce/WordPress
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/gettext
 */
function my_text_strings( $translated_text, $text, $domain ) {
 switch ( $translated_text ) {
 case 'DETALLES DE FACTURACIÓN' :
 $translated_text = __( 'DATOS DE DESTINATARIO', 'woocommerce' );
 break;
 case 'Acceder / Registrarse' :
 $translated_text = __( 'Ingresar / Registrarse', 'woocommerce' );
 break;
 case 'Localidad / Ciudad' :
 $translated_text = __( 'Colonia / Delegación', 'woocommerce' );
 break;
 case 'PRODUCTO' :
 $translated_text = __( 'YOMMYBOX', 'woocommerce' );
 break;
 case 'TOTAL DEL CARRITO' :
 $translated_text = __( 'TOTAL YOMMYBOX', 'woocommerce' );
 break;
 }
 return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );