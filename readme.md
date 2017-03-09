## Laravel PHP Framework

Version 4.2

La prueba consiste en un Coding Challenge tomado de Hackerrank. Lo puede encontrar en el siguiente Link (https://www.hackerrank.com/challenges/cube-summation). Cube Summation
 
 Debe escribir el programa en el lenguaje de programación PHP y puede usar cualquier framework de PHP para lograrlo, también puede usar cualquier mecanismo para la entrada y salida de datos del programa en esta etapa.

### Documentación

Frameworks o paradigmas de programación usada: Programación orientada a objetos POO

Descripción de cada una de las capas: MVC


### Explicación
2
4 5
UPDATE 2 2 2 4
QUERY 1 1 1 3 3 3
UPDATE 1 1 1 23
QUERY 2 2 2 4 4 4
QUERY 1 1 1 3 3 3


Primer caso de prueba, se nos da un cubo de 4 * 4 * 4 y 5 consultas. Inicialmente todas las células (1,1,1) (4,4,4) son 0.

ACTUALIZACIÓN 2 2 2 4 hace que la célula (2,2,2) = 4

CONSULTA 1 1 1 3 3 3. Como (2,2,2) se actualiza a 4 y el resto son todos 0. La respuesta a esta pregunta es 4.

ACTUALIZACIÓN 1 1 1 23. actualizaciones de la célula (1,1,1) a 23. CONSULTA 2 2 2 4 4 4.

Sólo la célula (1,1,1) y (2,2,2) son cero y (1,1,1) no es entre (2,2,2) y (4,4,4). Por lo tanto, la respuesta es 4.

CONSULTA 1 1 1 3 3 3. 2 células son cero y la suma 23 + 4 = 27.

### Pagina web
Link (https://alexlondon07.github.io/)


