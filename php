Funciones-------

return: Se utiliza dentro de una función para retornar al flujo desde donde fue
llamada y opcionalmente un valor.

@function nombreFuncion(type $param,$$referencia,$generico,$opcional='val'){return $val;}: Define una función.
  - Parametro generico: No agregar tipo de dato.
  - parametro opcional: Agregar un valor al por defecto al parametro, se deben agregar al final de la declaración.
  - Parametro por referencia: Se agrega el signo de dolar antes de la definición del parametro.
  - @ para suprimir los warning.

global: Permite el uso de una variable global dentro de una función.
  $variableGlobal='';
  function nombreFuncion(){
    global $variableGlobal;
    return $variableGlobal;
  }

Funciones variables: Permite llamar a una función a través del valor de una
variable, siempre y cuando su valor sea el nombre de la función.
  function nombreFuncion(){}
  $variable='nombreFuncion';
  $variable(); //Lllama a la función nombreFuncion.

Funciones predefinidas:
  - var_dump(): Muestra el valor de un elemento.
  - date('d-m-Y'): Muestra la fecha actual formateada.
  - time(): Fecha en formato UNIX.
  - sqrt($numero): Raiz cuadrada de un número.
  - rand($min,$max): Número aleatorio, parametros opcionales.
  - pi(): Valor de pi.
  - round($valor,$presicion): Redondeo de un valor a una presición.
  - is_string: Pregunta si es un string.
  - is_float: Pregunta si es un float.
  - is_int: Pregunta si es un int.
  - is_double: Pregunta si es un double.
  - is_bool: Pregunta si es un bool.
  - is_null: Pregunta si es un null.
  - is_array: Pregunta si es un array.
  - is_object: Pregunta si es un object.
  - isset($variable): Comprueba si una variable fue previamente definida.
  - gettype($variable): Obtiene el tipo de dato de una variable.
  - trim($cadena): Quita los espacios a la izquierda y derecha de una cadena.
  - unset($variable): Elimina la definición de una variable.
  - empty($variable): Comprueba si una variable esta bacía, según su tipo de dato.
  - strlen($cadena): Cuenta el número de caracteres de una cadena.
  - strpos($cadena,$subcadena): Busca una subcadena dentro de una cadena.
  - str_replace($subcadena,$remplazo,$cadena): Remplaza una subcadena por otra dentro dentro de una cadena.
  - strtoupper($cadena): Combierte a mayúsculas una cadena.
  - strtolower($cadena): Combierte a minúsculas una cadena.

Includes-----

include 'fichero': Inserta el contenido de fichero en donde fue llamada la función.
include_once 'fichero': Inserta el contenido de fichero en donde fue llamada la función solo una vez.
require 'fichero': Inserta el contenido de fichero en donde fue llamada la función y si no encuentra el fichero envía error.
require_once 'fichero': Inserta el contenido de fichero en donde fue llamada la función solo una vez y si no encuentra el fichero envía error.

Arrays-----
$array=array('val1','val2'): Define un array.
$array=['val1','val2']: Define un array.
$var[$indice]: Accede a un elemento del array mediante su indice numérico.
foreach($array as $key=>$elemento){}: Accede a los elementos del array medianta iteración.

Array asociativo: Array en donde su indice es un nombre de indice.
  $array=[
    'indice1'=>'valor',
    'indice2'=>'valor'
  ];

Arrays multidimensiones: Array de arrays.
  $arrayMulti=[
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
  ];
  $arrayMulti[1][3]; //Acceso al elemento 3 del elemento 1 con valor 8.

Funciones para arrays
  - count($array): Devuelve el número de elementos de un array.
  - sizeof($array): Devuelve el número de elementos de un array.
  - asort($array): Ordena alfabeticamente un array de forma ascendente.
  - arsort($array): Ordena alfabeticamente un array de forma descendente.
  - sort($array): Ordena alfabéticamente o numéricamente un array de forma ascendente.
  - rsort($array): Ordena alfabéticamente o numéricamente un array de forma descendente.
  - $array[]=$val: Añade un elemento al final del array.
  - array_push($array,'val'): Añade un elemento al final del array.
  - array_pop($array): Elimina el ultimo elemento del array.
  - unset($array[$indice]): Elimina un elemento determinado del array.
  - array_rand($array): Optener un elemento del array de forma aleatoria.
  - array_reverse($array): Ordena de manera inversa un array.
  - array_search($elemento,$array): Busca un elemento dentro del array, devolviendo el indice.

Sesiones-----
session_start(): Inicia una sesión en PHP.

$_SESSION['nombreVar']: Se define una variable de sesión.
session_destroy(): Destruye la sesión.

Cookies-----
setcookie('nombre','valor',$caducidad,$ruta,$dominio): Crea una cookie.
  - El valor solo puede ser una cadena.
  - Para eliminar una cookie se utiliza esta función, solo se debe caducar.
    setcookie('nombre,'valor,$caducidad)
      - La caducidad, debe ser menor que la fecha de definición de la cookie.
unset($_COOKIE['nombre_cookie']): Borrar una cookie.
$_COOKIE['nombreCookie']: Recupera una cookie.

Formularios-----

Atributos HTML relacionados:
  enctype: Establece el tipo de datos que mandara el formulario.
    multipart/form-data
  method: Metodo de envio del formulario (GET,POST).
  action: Nombre del fichero que procesara la solicitud.

Superglobales de acceso a las peticiones
  $_POST[]
  $_GET[]

validación de datos entrantes.
  - preg_match($patron,$cadena): Verifica que la cadena cumpla con el patron.
  - filter_var($cadena,FILTER_VALIDATE_INT): Verifica que la cadena cumpla con
   un filtro de validación establecido.

Sistema de archivo-----

Ficheros

$fichero=fopen($nombreFichero,'r'): Abre fichero en modo de escritura.
fclose($fichero): Cierra un fichero.
$contenido=fgets($fichero): Recupera una linea del contenido de un fichero.
feof($fichero): Recupera el final del fichero.
fwrite($fichero,'valor'): Escribir en un archivo.
copy($fichero,$origen): Copia un fichero al origen.
copy($fichero,$origen) or die($msgError): Copia un fichero al origen o termina
la aplicación si hay un error.
rename($fichero,$origen): Renombra un fichero.
unlink($fichero): Elimina un fichero.
file_exists($fichero): Verifica si un archivo existe.

Permisos de fichero.
  - w: escritura.
  - r: lectura.
  - a+: leer y escribir.

Recuperar todo el contenido de un fichero.
  while(!feof($fichero)){

    $linea=fgets($fichero);
    $contenido.=$linea;
  }

Directorios

mkdir($directorio,$permisos): Crear un directorio.
  - directorio es una cadena.
  - permisos son los permisos utilizados por linux
is_dir($directorio): Verifica si un directorio existe.
rmdir($directorio): Borra un directorio.
opendir($directorio): Abre un directorio.
readdir($directorio): Lee un directorio.

Mostrar el contenido de un directorio.
  if($gestor=opendir($directorio)){

    while(($fichero=readdir($gestor)!== false)){

      if($fichero!='.' && $fichero!='..'){

        $nombreFichero=$fichero;
      }
    }
  }
header-----

header('Refresh: 5; URL=index.php'): Redirecciona despues de 5 segundos a index php.

Subir Ficheros al servidor-----

Preparar el formulario.
  - Agregar a la definición del formulario los atributos:
    - enctype="multipart/form-data": Permite añadir los ficheros desde el form.
    - method: Metodo para el proceso de la petición.
    - action: Fichero de procesamiento de la petición.

Preparar el fichero de procesamiento.
  - Configurar php.
    - upload_max_filesize=256M: Tamaño maximo de ficheros.
    - post_max_size=256M: Tamaño maximo de subida mediante post.
  - $fichero=$_FILES['fichero']: Superglobal de acceso a los ficheros subidos al servidor.
  - Acceder a las propiedades del fichero.
    - $nombreFichero=$fichero['name']: Nombre del fichero subido al servidor.
    - $tipoFichero=$fichero['type']: Tipo del fichero subido al servidor.
    -$temporal=$fichero['tmp_name']: Nombre del fichero temporal en el servidor.
  - move_upload_file[$temporal,$destino.$nombreFichero]: Copiar el fichero en
  el destino.

POO-----
Paradigma de programación orientado a objetos.

Conceptos básicos.
  - Clases: Molde.
    - Métodos.
    - Atributos.
    - Constructor.
    - Destructor.
    - Sobrecarga.
  - Objetos.
  - Abstracción.
  - Encapsulación.
  - Herencia.
  - Polimorfismo.

Clases, Objetos, Métodos y Propiedades.
  class NombreClase{}: Define una clase.
  public $nombreAtributo: Define un atributo.
    Modificador de acceso.
    Se pueden inicializar a tipos primitivos.
  public function nombreFuncion(){}: Define un metodo.
    Modificador de acceso.
  this: Representa el objeto actual.
  $objeto=new NombreClase(): Crea un objeto de una clase.
  $objeto->nombreFuncion(): Llama a un metodo del objeto.
  $objeto->nombreAtributo: Lee un atributo del objeto.
  public function __construct(){}: Define un constructor.
    - No retorna resultado.
    - Solo acceso publico.
  get_class_methods($clase): Recupera los métodos de una clase.
  method_exists($clase,$nombreMetodo): Verifica si un método existe.
  Constantes.
    - __CLASS__:
    - __DIR__:
    - __FILE__:
    - __FUNCTION__:
    - __LINE__:
    - __METHOD__:
    - __NAMESPACE__:
    - __TRAIT__:

  Modificador de acceso.
    - public: Acceso publico.
    - private: Acceso privado.
    - protected: Acceso protejido.

Herencia.
    class nombreClase extends nombreClase2{}: Herencia de clases.
    parent::nombreFuncion(): Llama una función padre.
    parent::nombreAtributo: Llama a un atributo padre.

Clases estáticas, abstracción e interfaces.
  public static nombreFuncion(){}: Define un método de clase.
  public static nombreAtributo: Define un atributo de clase.
  selft::nombreFuncion(): Llama a un método de clase dentro de la clase.
  selft::nombreAtributo: Llama a un atributo de clase dentro de la clase.
  NombreClase::nombreFuncion(): Llama a un método de clase fuera de la clase.
  NombreClase::nombreAtributo: Llama a un atributo de clase fuera de la clase.
  const NOMBRE_CONSTANTE='val': Define una constante de clase.
  NombreClase::NOMBRE_CONSTANTE: Llama a una constante de clase fuera de la clase.
  abstract class NombreClase{}: Define una clase abstracta.
    - Puede mantener métodos abstractos o métodos normales.
  abstract public function(): Define un método abstracto.
  interface NombreInterface{}: Define una interface.
  class NombreClase implements NombreInterface{}: Implementa una interface.

Métodos mágicos
Forma parte del ciclo de vida del objeto.
  Trait: Permite definir funcionalidad que se puede compartir entre clases.
  trait NombreTrait{}: Define un trait.
    - En el cuerpo del trait se define la funcionalidad que se desea compartir.
  use NombreTrait: Utiliza un trait.
    - Se utiliza dentro del cuerpo de una función.
  public function __destruct(){}: Define un destructor.
  public function __toString(){}: Define la impresion del objeto.
  public function __call(){}: Define la funcionalidad al llamar a un método inexistente del objeto.

Excepsiones.
  throw new Exception($mensaje,$codigo,$excepcion): Lanza una nueva excepción.
  try{}catch(Exception $excepcion){}finally{}: Captura excepciones.

Autocarga de clases.
  function autoload($class){

    require_once $class.'.php';
  }: Definición de una función para carga de clases.
  spl_autoload_register('autoload'): Registra la función de carga de clases.
    - Puede registrar varios autoloads.

Espacios de nombres.
  namespace espacionombre: Define un espacio de nombres.
    - Se utiliza al principio de un archivo, justo despues de la etiqueta "php".
  use espacionombre\NombreClase: Usa un objeto dentro de un espacio de nombres
  use espacionombre\NombreClase as alias: Usa un objeto dentro de un espacio de nombres con un alias.
  class_exists($clase): Cumprueba si la clase existe.
