# Prueba de php numero 1
### Preguntas y respuestas de la prueba

1. ¿Qué sucesión estamos usando para seleccionar las piezas correctas?

    - La sucession de fibonacci

2. ¿Estamos descartando algún elemento de la sucesión? ? Cuáles : OK.

    - La susecion de fibonacci es 0, 1, 2, 3, 5, 8, 13.. Se estan descargando en 0 y el 1 inicial

3. ¿Qué tipo de codificación estamos usando?
    - Se ha codificado un string con base64
    
4. Enumere y explique los errores encontrados.

    - Dentro del for estaba llegando a iterar sobre el indice 13 ya que esa era la longitud data por los carecteres a evaluar. pero los array comienzan en 0 no en uno. solo se necesitaba iterar hasta el 12
    
    - Matener indices en fibonacci es un poco complicado, y con ese metodo solo se estaban trayendo los string de manera secuencial. utilizando una funcion recursiva de fibonacci se obtuvo el indice que se necesitaba para sacar el string de $pieces
    
    - get_piece_at_index estaba recibiendo un string completo en vez del indice que necesitaba para encontrar el string que se requeria
    
    - El algoritmo que decodificaba de base64 no estaba completo

    - Estaba negando la afirmacion que ocurren cuando comparaba el indice solicitado con la cantidad de elementos disponibles en el array $pieces
    
5. ¿Cuál es la clave?

    - "Lorem ipsum dolor sit amet, consectetur adipiscing elit."

### [Codigo fuente](https://github.com/locojuhi/Tehcnical-Testing/blob/066c926912b2fe422e5f097a12306af8713bf2f1/Docs/files/Prueba%20PHP/Prueba%20PHP%20Parte%201/php.php)
