## Test Driven Development with phpunit

TDD son las siglas de Test Driven Development. Es un proceso de desarrollo que consiste en codificar pruebas, desarrollar y refactorizar de forma continua el código construido.

La idea principal de esta metodología es realizar de forma inicial las pruebas unitarias para el código que tenemos que implementar. Es decir, primero codificamos la prueba y, posteriormente, se desarrolla la lógica de negocio.

### Preparación del entorno

- Instalar PHP 7.2 o 7.3
- Instalar Composer
- Clonar el repositorio
- Ejecutar "composer install" en la raíz del proyecto para instalar librerías

### Correr las pruebas unitarias

Para correr las pruebas unitarias ejecutar, desde la raíz del proyecto en una terminal, el siguiente comando:
"vendor/bin/phpunit --testdox tests/CalculatorTest"
