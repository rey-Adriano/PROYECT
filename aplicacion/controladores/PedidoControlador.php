<! DOCTYPE html >
< html  lang = " en " dir = " ltr " >
  < cabeza >
    < meta  charset = " utf-8 " >
    < título > </ título >
    < link  href = " https://fonts.googleapis.com/css?family=Roboto " rel = " hoja de estilo " >
    < link  rel = " stylesheet " href = " /proyecto/css/style.css " >
  </ cabeza >
  < cuerpo >
    < div  class = " contenedor " >

<? php
include_once  "clases / clase_pedido.php" ;

$ id_pe = $ _POST [ "id_pe" ];
$ pedido = nuevo pedido ();
$ pedido -> setId_pe ( $ id_pe );
$ resultado = $ pedido -> mostrarPedidosPorId ();

foreach ( $ resultado -> fetchAll () as  $ item ) {
    ?>
    < form  method = " post " action = " <? =  $ _SERVER [ 'PHP_SELF' ] ?> " class = " formulario " >
      < div  class = " form-group " >
        < input  type = " text " name = " nom_pe " class = " usuario " placeholder = " ingrese nombre " value = " <? =  $ item [ " nom_pe " ] ?> " >
      </ div >

        < div  class = " form-group " >
             < input  type = " number " name = " estado_pe " class = " password " placeholder = " Ingrese su contraseña " value = " <? =  $ item [ " Estado_pe " ] ?> " >
        </ div >

        < div  class = " form-group " >
              < input  type = " text " name = " precio_pe " class = " usuario " placeholder = " ingrese correo " value = " <? =  $ item [ " Precio_pe " ] ?> " >
        </ div >

        < input  type = " hidden " name = " id_pe " value = " <? =  $ id_pe  ?> " >
        < input  type = " submit " name = " submit " value = " actualizar " style = " padding: 15px; font-size: 15px; " >
    </ formulario >
    <? php
}

if ( isset ( $ _POST [ "enviar" ])) {
    $ nom_pe = $ _POST [ "nom_pe" ];
    $ Estado_pe = $ _POST [ "estado_pe" ];
    $ Precio_pe = $ _POST [ "precio_pe" ];
    $ id_pe = $ _POST [ "id_pe" ];

    $ resultado = $ pedido -> ActualizarPedido ( $ id_pe , $ nom_pe , $ Estado_pe , $ Precio_pe );


    if ( $ resultado ! = 0 ) {
        encabezado ( "ubicación: Administrar_Pedido.php" );
    } más {
        echo  "Error: Información no actualizada" ;
    }

}
?>
</ div >
</ cuerpo >
</ html >
