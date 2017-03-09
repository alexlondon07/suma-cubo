<?php

class FunctionController extends BaseController{

  private $MATRIZ;

  //Funcion para enviar la informacion a la clase Cube
  public function init($N)
  {
    $this->MATRIZ = new Cube;
    $this->MATRIZ->buildMatriz($N);
  }

  /**
  * Funcion para procesar la informacion
  * @return Response
  */
  public function result(){
    $response = array();

    //Informacion que se ingresa
    if (Input::get('input')) {

      //Input
      $input = Input::get('input');

      //Patron que me indica como se van a separar los datos, en este caso por espacio y salto de linea
      $separator = "\r\n";

      /* Utiliza tabulador y nueva línea como caracteres de tokenización, así  */
      $t = strtok($input, $separator);

      //Recorremos la informacion que obtemos al obtener en el paso anterior
      for ($i=0; $i < (int) $t; $i++) {
        $indexes = strtok($separator);

        $n = (int) array_get($indexes, 0);
        $m = (int) array_get($indexes, 2);

        $this->init($n);

        for ($operations=0; $operations < $m ; $operations++) {
          //Procesamos cada linea obtenida, en este caso cada operacion
          $line = strtok($separator);

          //Llamamos la funcion para realizar el proceso por cada linea obtenida
          $response[] = $this->processCommandLine($line);
        }
      }
      return View::make('output', array('items' => $response));
    }else{

      return View::make('hello');
    }
  }

  private function processCommandLine($line){
    if ($line) {
      $params = array();
      $tokens = explode(" ", $line);

      $command = array_get($tokens, 0);
      $params = $this->setParams($command, $params, array_slice($tokens, 1));
      $response = $this->executeCommand($command, $params);

      return $response;
    }
  }

  /**
  * Funcion que se encarga de determinar los parametros segun su posicion 
  * En este caso i,j,k, value
  * Esas van hacer nuestras coordenadas
  * @param $command, $params, $capacidad
  * @return $params
  */
  private function setParams($command, $params, $capacidad){
    if($command === 'UPDATE'){
      $params = array(
        'i' 	=> (int) array_get($capacidad, 0),
        'j' 	=> (int) array_get($capacidad, 1),
        'k' 	=> (int) array_get($capacidad, 2),
        'value' => (int) array_get($capacidad, 3)
      );
    }else{
      $params = array(
        'x1' => (int) array_get($capacidad, 0),
        'y1' => (int) array_get($capacidad, 1),
        'z1' => (int) array_get($capacidad, 2),
        'x2' => (int) array_get($capacidad, 3),
        'y2' => (int) array_get($capacidad, 4),
        'z2' => (int) array_get($capacidad, 5),
      );
    }
    return $params;
  }

  /**
  * Funcion la cual realizar la ejecución segun sea el caso
  * @param $command 'UPDATE', 'QUERY'
  * @param $params
  * @return Response
  */
  public function executeCommand($command, $params){
    $response = null;

    //Si obtemos el parametro de UPDATE, Procedemos a actualizar la informacion
    if($command === 'UPDATE'){
      $this->update($params);
    }else {
      $response = $this->sum($params);
    }
    return $response;
  }

  /**
  * Funcion que se encarga de obtener los puntos para actualizar su valor
  * @param $params
  */
  public function update($params){
    $j = $params['i'];
    $i = $params['j'];
    $k = $params['k'];
    $value = $params['value'];

    return $this->MATRIZ->update($i, $j, $k, $value);
  }


  /**
  * Funcion encargada de enviar los datos para su respectiva suma
  * @param $params
  */
  public function sum($params){
    if($params){
      $x2 = $params['x2'];
      $y2 = $params['y2'];
      $z2 = $params['z2'];

      $x1 = $params['x1'];
      $y1 = $params['y1'];
      $z1 = $params['z1'];

      return $this->MATRIZ->sum($x2, $y2, $z2, $x1, $y1, $z1);
    }
  }
}
