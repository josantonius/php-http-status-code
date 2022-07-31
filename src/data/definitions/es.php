<?php

/*
* This file is part of https://github.com/josantonius/php-http-status-code repository.
*
* (c) Josantonius <hello@josantonius.dev>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
* @see https://es.wikipedia.org/wiki/Anexo:C%C3%B3digos_de_estado_HTTP
*/

return [
    100 => 'El navegador puede continuar realizando su petición (se utiliza para indicar que la primera parte de la petición del navegador se ha recibido correctamente).',
    101 => 'El servidor acepta el cambio de protocolo propuesto por el navegador (puede ser por ejemplo un cambio de HTTP 1.0 a HTTP 1.1).',
    102 => 'El servidor está procesando la petición del navegador pero todavía no ha terminado (esto evita que el navegador piense que la petición se ha perdido cuando no recibe ninguna respuesta).',
    103 => 'Se va a reanudar una petición POST o PUT que fue abortada previamente.',
    200 => 'Respuesta estándar para peticiones correctas.',
    201 => 'La petición ha sido completada y ha resultado en la creación de un nuevo recurso.',
    202 => 'La petición ha sido aceptada para procesamiento, pero este no ha sido completado. La petición eventualmente pudiere no ser satisfecha, ya que podría ser no permitida o prohibida cuando el procesamiento tenga lugar.',
    203 => 'La petición se ha completado con éxito, pero su contenido no se ha obtenido de la fuente originalmente solicitada sino de otro servidor.',
    204 => 'La petición se ha completado con éxito pero su respuesta no tiene ningún contenido (la respuesta sí que puede incluir información en sus cabeceras HTTP).',
    205 => 'La petición se ha completado con éxito, pero su respuesta no tiene contenidos y además, el navegador tiene que inicializar la página desde la que se realizó la petición (este código es útil por ejemplo para páginas con formularios cuyo contenido debe borrarse después de que el usuario lo envíe).',
    206 => 'La petición servirá parcialmente el contenido solicitado. Esta característica es utilizada por herramientas de descarga como wget para continuar la transferencia de descargas anteriormente interrumpidas, o para dividir una descarga y procesar las partes simultáneamente.',
    207 => 'El cuerpo del mensaje que sigue es un mensaje XML y puede contener algún número de códigos de respuesta separados, dependiendo de cuántas sub-peticiones sean hechas.',
    208 => 'El listado de elementos DAV ya se notificó previamente, por lo que no se van a volver a listar.',
    300 => 'Indica opciones múltiples para el URI que el cliente podría seguir. Esto podría ser utilizado, por ejemplo, para presentar distintas opciones de formato para video, listar archivos con distintas extensiones o word sense disambiguation.',
    301 => 'Esta y todas las peticiones futuras deberían ser dirigidas a la URI dada.',
    302 => 'Este es el código de redirección más popular, pero también un ejemplo de las prácticas de la industria contradiciendo el estándar. La especificación HTTP/1.0 (RFC 1945) requería que el cliente realizara una redirección temporal (la frase descriptiva original fue \'Moved Temporarily\'), pero los navegadores populares lo implementaron como 303 See Other. Por tanto, HTTP/1.1 añadió códigos de estado 303 y 307 para eliminar la ambigüedad entre ambos comportamientos. Sin embargo, la mayoría de aplicaciones web y bibliotecas de desarrollo aún utilizan el código de respuesta 302 como si fuera el 303.',
    303 => 'La respuesta a la petición puede ser encontrada bajo otra URI utilizando el método GET.',
    304 => 'Indica que la petición a la URL no ha sido modificada desde que fue requerida por última vez. Típicamente, el cliente HTTP provee un encabezado como If-Modified-Since para indicar una fecha y hora contra la cual el servidor pueda comparar. El uso de este encabezado ahorra ancho de banda y reprocesamiento tanto del servidor como del cliente.',
    305 => 'Muchos clientes HTTP (como Mozilla e Internet Explorer) no se apegan al estándar al procesar respuestas con este código, principalmente por motivos de seguridad.',
    306 => 'Este código se utilizaba en las versiones antiguas de HTTP pero ya no se usa (aunque está reservado para usos futuros).',
    307 => 'Se trata de una redirección que debería haber sido hecha con otra URI, sin embargo aún puede ser procesada con la URI proporcionada. En contraste con el código 303, el método de la petición no debería ser cambiado cuando el cliente repita la solicitud. Por ejemplo, una solicitud POST tiene que ser repetida utilizando otra petición POST.',
    308 => 'El recurso solicitado por el navegador se encuentra en otro lugar y este cambio es permanente. A diferencia del código 301, no se permite cambiar el método HTTP para la nueva petición (así por ejemplo, si envías un formulario a un recurso que ha cambiado de lugar, todo seguirá funcionando bien).',
    400 => 'La solicitud contiene sintaxis errónea y no debería repetirse.',
    401 => 'Similar al 403 Forbidden, pero específicamente para su uso cuando la autentificación es posible pero ha fallado o aún no ha sido provista. Vea autenticación HTTP básica y Digest access authentication.',
    402 => 'La intención original era que este código pudiese ser usado como parte de alguna forma o esquema de Dinero electrónico o micropagos, pero eso no sucedió, y este código nunca se utilizó.',
    403 => 'La solicitud fue legal, pero el servidor rehúsa responderla dado que el cliente no tiene los privilegios para hacerla. En contraste a una respuesta 401 No autorizado, la autenticación no haría la diferencia.',
    404 => 'Recurso no encontrado. Se utiliza cuando el servidor web no encuentra la página o recurso solicitado.',
    405 => 'Una petición fue hecha a una URI utilizando un método de solicitud no soportado por dicha URI; por ejemplo, cuando se utiliza GET en un formulario que requiere que los datos sean presentados vía POST, o utilizando PUT en un recurso de solo lectura.',
    406 => 'El servidor no es capaz de devolver los datos en ninguno de los formatos aceptados por el cliente, indicados por éste en la cabecera \'Accept\' de la petición.',
    407 => 'El cliente primero debe autenticarse con el proxy.',
    408 => 'El cliente falló al continuar la petición - excepto durante la ejecución de videos Adobe Flash cuando solo significa que el usuario cerró la ventana de video o se movió a otro.',
    409 => 'Indica que la solicitud no pudo ser procesada debido a un conflicto con el estado actual del recurso que esta identifica.',
    410 => 'Indica que el recurso solicitado ya no está disponible y no lo estará de nuevo. Debería ser utilizado cuando un recurso ha sido quitado de forma permanente. Si un cliente recibe este código no debería volver a solicitar el recurso en el futuro. Por ejemplo un buscador lo eliminará de sus índices y lo hará más rápidamente que utilizando un código 404.',
    411 => 'El servidor rechaza la petición del navegador porque no incluye la cabecera Content-Length adecuada.',
    412 => 'El servidor no es capaz de cumplir con algunas de las condiciones impuestas por el navegador en su petición.',
    413 => 'La petición del navegador es demasiado grande y por ese motivo el servidor no la procesa.',
    414 => 'La URI de la petición del navegador es demasiado grande y por ese motivo el servidor no la procesa (esta condición se produce en muy raras ocasiones y casi siempre porque el navegador envía como GET una petición que debería ser POST).',
    415 => 'La petición del navegador tiene un formato que no entiende el servidor y por eso no se procesa.',
    416 => 'El cliente ha preguntado por una parte de un archivo, pero el servidor no puede proporcionar esa parte, por ejemplo, si el cliente preguntó por una parte de un archivo que está más allá de los límites del fin del archivo.',
    417 => 'La petición del navegador no se procesa porque el servidor no es capaz de cumplir con los requerimientos de la cabecera Expect de la petición.',
    418 => 'Soy una tetera.',
    421 => 'La solicitud fue dirigida a un servidor que no es capaz de producir una respuesta (por ejemplo, debido a una reutilización de conexión).',
    422 => 'La solicitud está bien formada pero fue imposible seguirla debido a errores semánticos.',
    423 => 'La solicitud falló debido a una falla en la solicitud previa.',
    424 => 'La solicitud falló debido a un fallo de una solicitud anterior (por ejemplo, un PROPPATCH).',
    426 => 'El cliente debería cambiarse a TLS/1.0.',
    428 => 'El servidor requiere que la petición del navegador sea condicional (este tipo de peticiones evitan los problemas producidos al modificar con PUT un recurso que ha sido modificado por otra parte).',
    429 => 'Hay muchas conexiones desde esta dirección de internet.',
    431 => 'El servidor no puede procesar la petición porque una de las cabeceras de la petición es demasiado grande. Este error también se produce cuando la suma del tamaño de todas las peticiones es demasiado grande.',
    451 => 'El contenido ha sido eliminado como consecuencia de una orden judicial o sentencia emitida por un tribunal.',
    500 => 'Es un código comúnmente emitido por aplicaciones empotradas en servidores web, mismas que generan contenido dinámicamente, por ejemplo aplicaciones montadas en IIS o Tomcat, cuando se encuentran con situaciones de error ajenas a la naturaleza del servidor web.',
    501 => 'El servidor no soporta alguna funcionalidad necesaria para responder a la solicitud del navegador (como por ejemplo el método utilizado para la petición).',
    502 => 'El servidor está actuando de proxy o gateway y ha recibido una respuesta inválida del otro servidor, por lo que no puede responder adecuadamente a la petición del navegador.',
    503 => 'El servidor no puede responder a la petición del navegador porque está congestionado o está realizando tareas de mantenimiento.',
    504 => 'El servidor está actuando de proxy o gateway y no ha recibido a tiempo una respuesta del otro servidor, por lo que no puede responder adecuadamente a la petición del navegador.',
    505 => 'El servidor no soporta o no quiere soportar la versión del protocolo HTTP utilizada en la petición del navegador.',
    506 => 'El servidor ha detectado una referencia circular al procesar la parte de la negociación del contenido de la petición.',
    507 => 'El servidor no puede crear o modificar el recurso solicitado porque no hay suficiente espacio de almacenamiento libre.',
    508 => 'La petición no se puede procesar porque el servidor ha encontrado un bucle infinito al intentar procesarla.',
    509 => 'Límite de ancho de banda excedido. Este código de estatus, a pesar de ser utilizado por muchos servidores, no es oficial.',
    510 => 'La petición del navegador debe añadir más extensiones para que el servidor pueda procesarla.',
    511 => 'El navegador debe autenticarse para poder realizar peticiones (se utiliza por ejemplo con los portales cautivos que te obligan a autenticarte antes de empezar a navegar).',
];
