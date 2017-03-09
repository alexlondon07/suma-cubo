<?php

class Cube extends \BaseController {

	//Declaración de variables
	private $N;
	private $MATRIZ;

	/**
	 * Funcion para Inicializar nuestra matriz
	 * Construye la matriz 3-D
	 * @param  int $N
	 */
	public function buildMatriz($N)
	{
		$this->n = $N;
		$contador = $this->n;

		//Se arma nuestra matriz
		for ($i=0; $i < $contador ; $i++) {
			for ($k=0; $k < $contador ; $k++) {
				for ($z=0; $z < $contador ; $z++) {
						$this->MATRIZ[$i][$k][$z] = 0;
				}
			}
		}
	}

	/**
	 * Funcion para actualizar la matriz, actualiza posicion del areglo
	 * UPDATE
	 * @param  $x $y $z $W
	 * @param  $W es el valor por el cual queremos actualizarlo
	 * @return Response
	 */
	public function update($i, $k, $z, $W){
		$this->MATRIZ[$i -1][$k -1][$z -1] = (int) $W;
		return 'OK';
	}

	/**
	 * Funcion que realizar la sumatoria de las coordenadas $x1, $y1, $z1, $x2, $y2, $z2
	 * @param  $x1, $y1, $z1, $x2, $y2, $z2
	 * @return $sumatoria
	 */
	public function sum($x2, $y2, $z2, $x1, $y1, $z1){
		$sumatoria = 0;

		for ($i = $x2 - 1; $i >= $x1 - 1 ; $i --) {
			for ($k = $y2 - 1; $k >= $y1 - 1 ; $k --) {
				for ($z = $z2 - 1; $z >= $z1 - 1 ; $z --) {
					$sumatoria +=$this->MATRIZ[$i][$k][$z];
				}
			}
		}
		return $sumatoria;
	}

}
