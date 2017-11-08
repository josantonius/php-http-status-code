<?php
/**
 * PHP library to get the meaning from HTTP response status codes.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-HTTPStatusCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-HTTPStatusCode
 * @since     1.1.4
 */
namespace Josantonius\HTTPStatusCode;

/**
 * HTTP status code handler.
 *
 * Compiled from http://wikipedia.org/wiki/List_of_HTTP_status_codes
 *
 * @since 1.1.4
 */
class HTTPStatusCodeCollection
{
    /**
     * HTTP status code list.
     *
     * @since 1.1.4
     *
     * @var array
     */
    protected static $data = [
        'en' => [
            '1xx' => [
                'short' => 'Informational',
                'large' => 'Request received, continuing process. This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions.'
            ],
            '100' => [
                'short' => 'Continue',
                'large' => "The server has received the request headers and the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). Sending a large request body to a server after a request has been rejected for inappropriate headers would be inefficient. To have a server check the request's headers, a client must send Expect: 100-continue as a header in its initial request and receive a 100 Continue status code in response before sending the body. The response 417 Expectation Failed indicates the request should not be continued."
            ],
            '101' => [
                'short' => 'Switching Protocols',
                'large' => 'The requester has asked the server to switch protocols and the server has agreed to do so.'
            ],
            '102' => [
                'short' => 'Processing',
                'large' => 'A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.'
            ],
            '103' => [
                'short' => 'Checkpoint',
                'large' => 'A POST or PUT request that was previously aborted is to be resumed.'
            ],
            '2xx' => [
                'short' => 'Success',
                'large' => 'This class of status codes indicates the action requested by the client was received, understood, accepted, and processed successfully.'
            ],
            '200' => [
                'short' => 'OK',
                'large' => 'Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the response will contain an entity describing or containing the result of the action.'
            ],
            '201' => [
                'short' => 'Created',
                'large' => 'The request has been fulfilled, resulting in the creation of a new resource.'
            ],
            '202' => [
                'short' => 'Accepted',
                'large' => 'The request has been accepted for processing, but the processing has not been completed. The request might or might not be eventually acted upon, and may be disallowed when processing occurs.'
            ],
            '203' => [
                'short' => 'Non-Authoritative Information',
                'large' => "The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin's response."
            ],
            '204' => [
                'short' => 'No Content',
                'large' => 'The server successfully processed the request and is not returning any content.'
            ],
            '205' => [
                'short' => 'Reset Content',
                'large' => 'The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.'
            ],
            '206' => [
                'short' => 'Partial Content',
                'large' => 'The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.'
            ],
            '207' => [
                'short' => 'Multi-Status',
                'large' => 'The message body that follows is an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.'
            ],
            '208' => [
                'short' => 'Already Reported',
                'large' => 'The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.'
            ],
            '3xx' => [
                'short' => 'Redirection',
                'large' => 'This class of status code indicates the client must take additional action to complete the request. Many of these status codes are used in URL redirection. A user agent may carry out the additional action with no user interaction only if the method used in the second request is GET or HEAD. A user agent may automatically redirect a request. A user agent should detect and intervene to prevent cyclical redirects.'
            ],
            '300' => [
                'short' => 'Multiple Choices',
                'large' => 'Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation). For example, this code could be used to present multiple video format options, to list files with different filename extensions, or to suggest word-sense disambiguation.'
            ],
            '301' => [
                'short' => 'Moved Permanently',
                'large' => 'This and all future requests should be directed to the given URI.'
            ],
            '302' => [
                'short' => 'Found',
                'large' => "This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was 'Moved Temporarily'), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303."
            ],
            '303' => [
                'short' => 'See Other',
                'large' => 'The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a redirect with a separate GET message.'
            ],
            '304' => [
                'short' => 'Not Modified',
                'large' => 'Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match. In such case, there is no need to retransmit the resource since the client still has a previously-downloaded copy.'
            ],
            '305' => [
                'short' => 'Use Proxy',
                'large' => 'The requested resource is available only through a proxy, the address for which is provided in the response. Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons.'
            ],
            '306' => [
                'short' => 'Switch Proxy',
                'large' => "No longer used. Originally meant 'Subsequent requests should use the specified proxy.'"
            ],
            '307' => [
                'short' => 'Temporary Redirect',
                'large' => 'In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For example, a POST request should be repeated using another POST request.'
            ],
            '308' => [
                'short' => 'Permanent Redirect',
                'large' => 'The request and all future requests should be repeated using another URI. 307 and 308 parallel the behaviors of 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.'
            ],
            '4xx' => [
                'short' => 'Client Error',
                'large' => 'The 4xx class of status code is intended for situations in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.'
            ],
            '400' => [
                'short' => 'Bad Request',
                'large' => 'The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, too large size, invalid request message framing, or deceptive request routing).'
            ],
            '401' => [
                'short' => 'Unauthorized',
                'large' => "Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.[33] 401 semantically means 'unauthenticated' the user does not have the necessary credentials. Note: Some sites issue HTTP 401 when an IP address is banned from the website (usually the website domain) and that specific address is refused permission to access a website."
            ],
            '402' => [
                'short' => 'Payment Required',
                'large' => 'Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. Google Developers API uses this status if a particular developer has exceeded the daily limit on requests.'
            ],
            '403' => [
                'short' => 'Forbidden',
                'large' => 'The request was a valid request, but the server is refusing to respond to it. The user might be logged in but does not have the necessary permissions for the resource.'
            ],
            '404' => [
                'short' => 'Not Found',
                'large' => 'The requested resource could not be found but may be available in the future. Subsequent requests by the client are permissible.'
            ],
            '405' => [
                'short' => 'Method Not Allowed',
                'large' => 'A request method is not supported for the requested resource; for example, a GET request on a form which requires data to be presented via POST, or a PUT request on a read-only resource.'
            ],
            '406' => [
                'short' => 'Not Acceptable',
                'large' => 'The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request.'
            ],
            '407' => [
                'short' => 'Proxy Authentication Required',
                'large' => 'The client must first authenticate itself with the proxy.'
            ],
            '408' => [
                'short' => 'Request Time-out',
                'large' => "The server timed out waiting for the request. According to HTTP specifications: 'The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.'"
            ],
            '409' => [
                'short' => 'Conflict',
                'large' => 'Indicates that the request could not be processed because of conflict in the request, such as an edit conflict between multiple simultaneous updates.'
            ],
            '410' => [
                'short' => 'Gone',
                'large' => "Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a '404 Not Found' may be used instead."
            ],
            '411' => [
                'short' => 'Length Required',
                'large' => 'The request did not specify the length of its content, which is required by the requested resource.'
            ],
            '412' => [
                'short' => 'Precondition Failed',
                'large' => 'The server does not meet one of the preconditions that the requester put on the request.'
            ],
            '413' => [
                'short' => 'Request Entity Too Large',
                'large' => "The request is larger than the server is willing or able to process. Previously called 'Request Entity Too Large'."
            ],
            '414' => [
                'short' => 'Request-URI Too Long',
                'large' => "The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request. Called 'Request-URI Too Long' previously."
            ],
            '415' => [
                'short' => 'Unsupported Media Type',
                'large' => 'The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.'
            ],
            '416' => [
                'short' => 'Requested Range Not Satisfiable',
                'large' => "The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.[46] Called 'Requested Range Not Satisfiable' previously."
            ],
            '417' => [
                'short' => 'Expectation Failed',
                'large' => 'The server cannot meet the requirements of the Expect request-header field.'
            ],
            '418' => [
                'short' => "I'm a teapot",
                'large' => "This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code should be returned by teapots requested to brew coffee.[49] This HTTP status is used as an Easter egg in some websites, including Google.com."
            ],
            '421' => [
                'short' => 'Unprocessable Entity',
                'large' => 'The request was directed at a server that is not able to produce a response (for example because a connection reuse).'
            ],
            '422' => [
                'short' => 'Misdirected Request',
                'large' => 'The request was well-formed but was unable to be followed due to semantic errors.'
            ],
            '423' => [
                'short' => 'Locked',
                'large' => 'The resource that is being accessed is locked.'
            ],
            '424' => [
                'short' => 'Failed Dependency',
                'large' => 'The request failed due to failure of a previous request (e.g., a PROPPATCH).'
            ],
            '426' => [
                'short' => 'Upgrade Required',
                'large' => 'The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.'
            ],
            '428' => [
                'short' => 'Precondition Required',
                'large' => "The origin server requires the request to be conditional. Intended to prevent the 'lost update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict."
            ],
            '429' => [
                'short' => 'Too Many Requests',
                'large' => 'The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes.'
            ],
            '431' => [
                'short' => 'Request Header Fileds Too Large',
                'large' => 'The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.'
            ],
            '451' => [
                'short' => 'Unavailable For Legal Reasons',
                'large' => 'A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource. The code 451 was chosen as a reference to the novel Fahrenheit 451.'
            ],
            '5xx' => [
                'short' => 'Server Error',
                'large' => 'The server failed to fulfill an apparently valid request. Response status codes beginning with the digit 5 indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.'
            ],
            '500' => [
                'short' => 'Internal Server Error',
                'large' => 'A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.'
            ],
            '501' => [
                'short' => 'Not Implemented',
                'large' => 'The server either does not recognize the request method, or it lacks the ability to fulfill the request. Usually this implies future availability (e.g., a new feature of a web-service API).'
            ],
            '502' => [
                'short' => 'Bad Gateway',
                'large' => 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.'
            ],
            '503' => [
                'short' => 'Service Unavailable',
                'large' => 'The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.'
            ],
            '504' => [
                'short' => 'Gateway Timeout',
                'large' => 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.'
            ],
            '505' => [
                'short' => 'HTTP Version Not Supported',
                'large' => 'The server does not support the HTTP protocol version used in the request.'
            ],
            '506' => [
                'short' => 'Variant Also Negotiates',
                'large' => 'Transparent content negotiation for the request results in a circular reference.'
            ],
            '507' => [
                'short' => 'Insufficient Storage',
                'large' => 'The server is unable to store the representation needed to complete the request.'
            ],
            '508' => [
                'short' => 'Loop Detected',
                'large' => 'The server detected an infinite loop while processing the request (sent in lieu of 208 Already Reported).'
            ],
            '509' => [
                'short' => 'Bandwidth Limit Exceeded',
                'large' => 'Bandwidth Limit Exceeded. This status code, despite being used by many servers, is not official.'
            ],
            '510' => [
                'short' => 'Not Extended',
                'large' => 'Further extensions to the request are required for the server to fulfill it.'
            ],
            '511' => [
                'short' => 'Network Authentication Required',
                'large' => "The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., 'captive portals' used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot)."
            ],
        ],

        'es' => [
            '1xx' => [
                'short' => 'Respuestas informativas',
                'large' => 'Petición recibida, continuando proceso. Esta respuesta significa que el servidor ha recibido los encabezados de la petición, y que el cliente debería proceder a enviar el cuerpo de la misma (en el caso de peticiones para las cuales el cuerpo necesita ser enviado; por ejemplo, una petición Hypertext Transfer Protocol). Si el cuerpo de la petición es largo, es ineficiente enviarlo a un servidor, cuando la petición ha sido ya rechazada, debido a encabezados inapropiados. Para hacer que un servidor cheque si la petición podría ser aceptada basada únicamente en los encabezados de la petición, el cliente debe enviar Expect: 100-continue como un encabezado en su petición inicial (vea Plantilla:Web-RFC: Expect header) y verificar si un código de estado 100 Continue es recibido en respuesta, antes de continuar (o recibir 417 Expectation Failed y no continuar).'
            ],
            '100' => [
                'short' => 'Continuar',
                'large' => 'El navegador puede continuar realizando su petición (se utiliza para indicar que la primera parte de la petición del navegador se ha recibido correctamente).'
            ],
            '101' => [
                'short' => 'Protocolos de conmutación',
                'large' => 'El servidor acepta el cambio de protocolo propuesto por el navegador (puede ser por ejemplo un cambio de HTTP 1.0 a HTTP 1.1).'
            ],
            '102' => [
                'short' => 'Procesamiento',
                'large' => 'El servidor está procesando la petición del navegador pero todavía no ha terminado (esto evita que el navegador piense que la petición se ha perdido cuando no recibe ninguna respuesta).'
            ],
            '103' => [
                'short' => 'Punto de Referencia',
                'large' => 'Se va a reanudar una petición POST o PUT que fue abortada previamente.'
            ],
            '2xx' => [
                'short' => 'Peticiones correctas',
                'large' => 'Esta clase de código de estado indica que la petición fue recibida correctamente, entendida y aceptada.'
            ],
            '200' => [
                'short' => 'OK',
                'large' => 'Respuesta estándar para peticiones correctas.'
            ],
            '201' => [
                'short' => 'Creado',
                'large' => 'La petición ha sido completada y ha resultado en la creación de un nuevo recurso.'
            ],
            '202' => [
                'short' => 'Aceptado',
                'large' => 'La petición ha sido aceptada para procesamiento, pero este no ha sido completado. La petición eventualmente pudiere no ser satisfecha, ya que podría ser no permitida o prohibida cuando el procesamiento tenga lugar.'
            ],
            '203' => [
                'short' => 'Información no autorizada',
                'large' => 'La petición se ha completado con éxito, pero su contenido no se ha obtenido de la fuente originalmente solicitada sino de otro servidor.'
            ],
            '204' => [
                'short' => 'Sin contenido',
                'large' => 'La petición se ha completado con éxito pero su respuesta no tiene ningún contenido (la respuesta sí que puede incluir información en sus cabeceras HTTP).'
            ],
            '205' => [
                'short' => 'Restablecer contenido',
                'large' => 'La petición se ha completado con éxito, pero su respuesta no tiene contenidos y además, el navegador tiene que inicializar la página desde la que se realizó la petición (este código es útil por ejemplo para páginas con formularios cuyo contenido debe borrarse después de que el usuario lo envíe).'
            ],
            '206' => [
                'short' => 'Contenido parcial',
                'large' => 'La petición servirá parcialmente el contenido solicitado. Esta característica es utilizada por herramientas de descarga como wget para continuar la transferencia de descargas anteriormente interrumpidas, o para dividir una descarga y procesar las partes simultáneamente.'
            ],
            '207' => [
                'short' => 'Multi-Estado',
                'large' => 'El cuerpo del mensaje que sigue es un mensaje XML y puede contener algún número de códigos de respuesta separados, dependiendo de cuántas sub-peticiones sean hechas.'
            ],
            '208' => [
                'short' => 'Ya informado',
                'large' => 'El listado de elementos DAV ya se notificó previamente, por lo que no se van a volver a listar.'
            ],
            '3xx' => [
                'short' => 'Redirecciones',
                'large' => 'El cliente tiene que tomar una acción adicional para completar la petición. Esta clase de código de estado indica que una acción subsecuente necesita efectuarse por el agente de usuario para completar la petición. La acción requerida puede ser llevada a cabo por el agente de usuario sin interacción con el usuario si y solo si el método utilizado en la segunda petición es GET o HEAD. El agente de usuario no debe redirigir automáticamente una petición más de 5 veces, dado que tal funcionamiento indica usualmente un Bucle infinito.'
            ],
            '300' => [
                'short' => 'Múltiples opciones',
                'large' => 'Indica opciones múltiples para el URI que el cliente podría seguir. Esto podría ser utilizado, por ejemplo, para presentar distintas opciones de formato para video, listar archivos con distintas extensiones o word sense disambiguation.'
            ],
            '301' => [
                'short' => 'Movido permanentemente',
                'large' => 'Esta y todas las peticiones futuras deberían ser dirigidas a la URI dada.'
            ],
            '302' => [
                'short' => 'Encontrado',
                'large' => "Este es el código de redirección más popular, pero también un ejemplo de las prácticas de la industria contradiciendo el estándar. La especificación HTTP/1.0 (RFC 1945) requería que el cliente realizara una redirección temporal (la frase descriptiva original fue 'Moved Temporarily'), pero los navegadores populares lo implementaron como 303 See Other. Por tanto, HTTP/1.1 añadió códigos de estado 303 y 307 para eliminar la ambigüedad entre ambos comportamientos. Sin embargo, la mayoría de aplicaciones web y bibliotecas de desarrollo aún utilizan el código de respuesta 302 como si fuera el 303."
            ],
            '303' => [
                'short' => 'Otros',
                'large' => 'La respuesta a la petición puede ser encontrada bajo otra URI utilizando el método GET.'
            ],
            '304' => [
                'short' => 'No modificado',
                'large' => 'Indica que la petición a la URL no ha sido modificada desde que fue requerida por última vez. Típicamente, el cliente HTTP provee un encabezado como If-Modified-Since para indicar una fecha y hora contra la cual el servidor pueda comparar. El uso de este encabezado ahorra ancho de banda y reprocesamiento tanto del servidor como del cliente.'
            ],
            '305' => [
                'short' => 'Usar proxy',
                'large' => 'Muchos clientes HTTP (como Mozilla e Internet Explorer) no se apegan al estándar al procesar respuestas con este código, principalmente por motivos de seguridad.'
            ],
            '306' => [
                'short' => 'Interruptor de proxy',
                'large' => 'Este código se utilizaba en las versiones antiguas de HTTP pero ya no se usa (aunque está reservado para usos futuros).'
            ],
            '307' => [
                'short' => 'Redirección temporal',
                'large' => 'Se trata de una redirección que debería haber sido hecha con otra URI, sin embargo aún puede ser procesada con la URI proporcionada. En contraste con el código 303, el método de la petición no debería ser cambiado cuando el cliente repita la solicitud. Por ejemplo, una solicitud POST tiene que ser repetida utilizando otra petición POST.'
            ],
            '308' => [
                'short' => 'Redirección permanente',
                'large' => 'El recurso solicitado por el navegador se encuentra en otro lugar y este cambio es permanente. A diferencia del código 301, no se permite cambiar el método HTTP para la nueva petición (así por ejemplo, si envías un formulario a un recurso que ha cambiado de lugar, todo seguirá funcionando bien).'
            ],
            '4xx' => [
                'short' => 'Errores del cliente',
                'large' => 'La solicitud contiene sintaxis incorrecta o no puede procesarse. La intención de la clase de códigos de respuesta 4xx es para casos en los cuales el cliente parece haber errado la petición. Excepto cuando se responde a una petición HEAD, el servidor debe incluir una entidad que contenga una explicación a la situación de error, y si es una condición temporal o permanente. Estos códigos de estado son aplicables a cualquier método de solicitud (como GET o POST). Los agentes de usuario deben desplegar cualquier entidad al usuario. Estos son típicamente los códigos de respuesta de error más comúnmente encontrados.'
            ],
            '400' => [
                'short' => 'Petición incorrecta',
                'large' => 'La solicitud contiene sintaxis errónea y no debería repetirse.'
            ],
            '401' => [
                'short' => 'No autorizado',
                'large' => 'Similar al 403 Forbidden, pero específicamente para su uso cuando la autentificación es posible pero ha fallado o aún no ha sido provista. Vea autenticación HTTP básica y Digest access authentication.'
            ],
            '402' => [
                'short' => 'Pago necesario',
                'large' => 'La intención original era que este código pudiese ser usado como parte de alguna forma o esquema de Dinero electrónico o micropagos, pero eso no sucedió, y este código nunca se utilizó.'
            ],
            '403' => [
                'short' => 'Prohibido',
                'large' => 'La solicitud fue legal, pero el servidor rehúsa responderla dado que el cliente no tiene los privilegios para hacerla. En contraste a una respuesta 401 No autorizado, la autenticación no haría la diferencia.'
            ],
            '404' => [
                'short' => 'No encontrado',
                'large' => 'Recurso no encontrado. Se utiliza cuando el servidor web no encuentra la página o recurso solicitado.'
            ],
            '405' => [
                'short' => 'Método no permitido',
                'large' => 'Una petición fue hecha a una URI utilizando un método de solicitud no soportado por dicha URI; por ejemplo, cuando se utiliza GET en un formulario que requiere que los datos sean presentados vía POST, o utilizando PUT en un recurso de solo lectura.'
            ],
            '406' => [
                'short' => 'No aceptable',
                'large' => "El servidor no es capaz de devolver los datos en ninguno de los formatos aceptados por el cliente, indicados por éste en la cabecera 'Accept' de la petición."
            ],
            '407' => [
                'short' => 'Autentificación necesaria',
                'large' => 'El cliente primero debe autenticarse con el proxy.'
            ],
            '408' => [
                'short' => 'Solicitud de tiempo de espera',
                'large' => 'El cliente falló al continuar la petición - excepto durante la ejecución de videos Adobe Flash cuando solo significa que el usuario cerró la ventana de video o se movió a otro.'
            ],
            '409' => [
                'short' => 'Conflicto',
                'large' => 'Indica que la solicitud no pudo ser procesada debido a un conflicto con el estado actual del recurso que esta identifica.'
            ],
            '410' => [
                'short' => 'Recurso no disponible',
                'large' => 'Indica que el recurso solicitado ya no está disponible y no lo estará de nuevo. Debería ser utilizado cuando un recurso ha sido quitado de forma permanente. Si un cliente recibe este código no debería volver a solicitar el recurso en el futuro. Por ejemplo un buscador lo eliminará de sus índices y lo hará más rápidamente que utilizando un código 404.'
            ],
            '411' => [
                'short' => 'Longitud requerida',
                'large' => 'El servidor rechaza la petición del navegador porque no incluye la cabecera Content-Length adecuada.'
            ],
            '412' => [
                'short' => 'Error de condición previa',
                'large' => 'El servidor no es capaz de cumplir con algunas de las condiciones impuestas por el navegador en su petición.'
            ],
            '413' => [
                'short' => 'Solicitud demasiado grande',
                'large' => 'La petición del navegador es demasiado grande y por ese motivo el servidor no la procesa.'
            ],
            '414' => [
                'short' => 'URI de solicitud demasiado larga',
                'large' => 'La URI de la petición del navegador es demasiado grande y por ese motivo el servidor no la procesa (esta condición se produce en muy raras ocasiones y casi siempre porque el navegador envía como GET una petición que debería ser POST).'
            ],
            '415' => [
                'short' => 'Petición incomprensible',
                'large' => 'La petición del navegador tiene un formato que no entiende el servidor y por eso no se procesa.'
            ],
            '416' => [
                'short' => 'Rango requerido no satisfactorio',
                'large' => 'El cliente ha preguntado por una parte de un archivo, pero el servidor no puede proporcionar esa parte, por ejemplo, si el cliente preguntó por una parte de un archivo que está más allá de los límites del fin del archivo.'
            ],
            '417' => [
                'short' => 'Error de expectativa',
                'large' => 'La petición del navegador no se procesa porque el servidor no es capaz de cumplir con los requerimientos de la cabecera Expect de la petición.'
            ],
            '418' => [
                'short' => 'Soy una tetera',
                'large' => 'Soy una tetera.'
            ],
            '421' => [
                'short' => 'Petición mal dirigida',
                'large' => 'La solicitud fue dirigida a un servidor que no es capaz de producir una respuesta (por ejemplo, debido a una reutilización de conexión).'
            ],
            '422' => [
                'short' => 'Entidad no procesable',
                'large' => 'La solicitud está bien formada pero fue imposible seguirla debido a errores semánticos.'
            ],
            '423' => [
                'short' => 'Cerrado',
                'large' => 'La solicitud falló debido a una falla en la solicitud previa.'
            ],
            '424' => [
                'short' => 'Fallo en dependencia',
                'large' => 'La solicitud falló debido a un fallo de una solicitud anterior (por ejemplo, un PROPPATCH).'
            ],
            '426' => [
                'short' => 'Es necesario actualizar',
                'large' => 'El cliente debería cambiarse a TLS/1.0.'
            ],
            '428' => [
                'short' => 'Requisito obligatorio',
                'large' => 'El servidor requiere que la petición del navegador sea condicional (este tipo de peticiones evitan los problemas producidos al modificar con PUT un recurso que ha sido modificado por otra parte).'
            ],
            '429' => [
                'short' => 'Demasiadas solicitudes',
                'large' => 'Hay muchas conexiones desde esta dirección de internet.'
            ],
            '431' => [
                'short' => 'Cabeceras de la petición demasiado grandes',
                'large' => 'El servidor no puede procesar la petición porque una de las cabeceras de la petición es demasiado grande. Este error también se produce cuando la suma del tamaño de todas las peticiones es demasiado grande.'
            ],
            '451' => [
                'short' => 'No disponible por razones legales',
                'large' => 'El contenido ha sido eliminado como consecuencia de una orden judicial o sentencia emitida por un tribunal.'
            ],
            '5xx' => [
                'short' => 'Errores de servidor',
                'large' => 'El servidor falló al completar una solicitud aparentemente válida. Los códigos de respuesta que comienzan con el dígito 5 indican casos en los cuales el servidor tiene registrado aún antes de servir la solicitud, que está errado o es incapaz de ejecutar la petición. Excepto cuando está respondiendo a un método HEAD, el servidor debe incluir una entidad que contenga una explicación de la situación de error, y si es una condición temporal o permanente. Los agentes de usuario deben desplegar cualquier entidad incluida al usuario. Estos códigos de respuesta son aplicables a cualquier método de petición.'
            ],
            '500' => [
                'short' => 'Error interno de servidor',
                'large' => 'Es un código comúnmente emitido por aplicaciones empotradas en servidores web, mismas que generan contenido dinámicamente, por ejemplo aplicaciones montadas en IIS o Tomcat, cuando se encuentran con situaciones de error ajenas a la naturaleza del servidor web.'
            ],
            '501' => [
                'short' => 'No implementado',
                'large' => 'El servidor no soporta alguna funcionalidad necesaria para responder a la solicitud del navegador (como por ejemplo el método utilizado para la petición).'
            ],
            '502' => [
                'short' => 'Puerta de enlace no válida',
                'large' => 'El servidor está actuando de proxy o gateway y ha recibido una respuesta inválida del otro servidor, por lo que no puede responder adecuadamente a la petición del navegador.'
            ],
            '503' => [
                'short' => 'Servicio no Disponible',
                'large' => 'El servidor no puede responder a la petición del navegador porque está congestionado o está realizando tareas de mantenimiento.'
            ],
            '504' => [
                'short' => 'Versión de HTTP no compatibles',
                'large' => 'El servidor está actuando de proxy o gateway y no ha recibido a tiempo una respuesta del otro servidor, por lo que no puede responder adecuadamente a la petición del navegador.'
            ],
            '505' => [
                'short' => 'Versión de HTTP no compatible',
                'large' => 'El servidor no soporta o no quiere soportar la versión del protocolo HTTP utilizada en la petición del navegador.'
            ],
            '506' => [
                'short' => 'Variante también negocia',
                'large' => 'El servidor ha detectado una referencia circular al procesar la parte de la negociación del contenido de la petición.'
            ],
            '507' => [
                'short' => 'Almacenamiento insuficiente',
                'large' => 'El servidor no puede crear o modificar el recurso solicitado porque no hay suficiente espacio de almacenamiento libre.'
            ],
            '508' => [
                'short' => 'Bucle detectado',
                'large' => 'La petición no se puede procesar porque el servidor ha encontrado un bucle infinito al intentar procesarla.'
            ],
            '509' => [
                'short' => 'Límite de ancho de banda excedido',
                'large' => 'Límite de ancho de banda excedido. Este código de estatus, a pesar de ser utilizado por muchos servidores, no es oficial.'
            ],
            '510' => [
                'short' => 'No ampliada',
                'large' => 'La petición del navegador debe añadir más extensiones para que el servidor pueda procesarla.'
            ],
            '511' => [
                'short' => 'Red requiere autenticación',
                'large' => 'El navegador debe autenticarse para poder realizar peticiones (se utiliza por ejemplo con los portales cautivos que te obligan a autenticarte antes de empezar a navegar).'
            ],
        ],
    ];

    /**
     * Returns all HTTP status codes.
     *
     * @since 1.1.4
     *
     * @param string $lang → language for definitions
     *
     * @return array|null
     */
    public static function all($lang)
    {
        return isset(static::$data[$lang]) ? static::$data[$lang] : null;
    }

    /**
     * Returns HTTP status definition by code.
     *
     * @since 1.1.4
     *
     * @param int    $code →  100  -  511  → code definition
     * @param string $code → '1xx' - '5xx' → code general type definition
     * @param string $lang → language for definition
     * @param string $size →    'short'    → short definition
     *                     'large'    → large definition
     *
     * @return string|null → HTTP status code definition or null
     */
    public static function get($code, $lang = 'en', $size = 'short')
    {
        if (isset(static::$data[$lang][$code][$size])) {
            return static::$data[$lang][$code][$size];
        }

        return null;
    }
}
