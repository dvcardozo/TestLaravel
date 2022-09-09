# **Testing**
Los proyectos nuevos de *Laravel*, de forma predeterminada,  incluyen un directorio llamado **Test** el cual contiene dos directorios **Feature** y **Unit**. 
Los test unitarios (**Unit Tests**) están enfocados en pruebas a pequeñas porciones de código. De hecho, la mayoría de las pruebas unitarias se centran en un solo método.
Los tests de características (**Feature Test**) prueban porciones de código mas extensas,  incluida la forma en que varios objetos interactúan entre sí o incluso una solicitud HTTP completa a un punto final JSON.

## Creación de Pruebas
Para crear un nuevo caso de prueba use *make:test* como comanto de *Artisan*. De forma predeterminada las pruebas se guardarán en **tests/Feature**.

`php artisan make:test UserTest`
Con este comando se crea un nuevo test en la carpeta *Feature* que se llama *UserTest*

Si quiere crear una prueba dentro de **tests/Unit**, pruebe el siguiente comando:
`php artisan make:test UserTest --unit`

## Ejecución de Pruebas

Después de instalar una nueva aplicación de *Laravel*, ejecute los siguientes  comandos para ejecutar las pruebas de ejemplo

`$ php artisan test` o `vendor/bin/phpunit`

## Ejercicio práctico

Haciendo uso de un inicio de sesión y registro de usuarios que por defecto viene en Laravel, podemos hacer las pruebas unitarias para este modulo. 

1. Primero se instala la librería de Laravel necesaria para crear interfaces de usuario
`composer require laravel/ui`

2.  Procedemos a crear el modulo de autentificacion y registro de usuarios
`php artisan ui react --auth`

3. Luego, se instala y se pone en linea el servidor de FrontEnd.
`npm install`  `npm run dev`

4. Por phpMyAdmin se crea la base de datos para este ejericicio

5.  Ejecutamos la migración con este comando `php artisan migrate`

6. En el documento UserTest ubicado en el directorio tests/Unit se crean las pruebas
