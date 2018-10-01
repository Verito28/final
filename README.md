# Wordpress Boilerplate

## Introducción
Esta es una plantilla básica, que tiene como objetivo ayudar a la gente que comienza recién a crear plantillas para Wordpress. Incorpora algunas de las últimas tecnologías implementadas por el equipo de Wordpress y también otras que le entregarán a los desarrolladores una base mínima para crear exitosamente un Theme.

### Uso de Paginación
En la versión 1.1 se ha agregado la posibilidad de agregar paginación, para esos casos donde se desea mostrar más de los 10 posts que muestra por defecto Wordpress.

Para utilizar la paginación debemos llamar a la función `the_pagination()`. Y en el caso de utilizar la paginación en un Custom Post Type, deberemos entregar como parámetro el resultado de la búsqueda, así como se especifica en el siguiente código.

~~~html
<?php
	$arg = array(
		'post_type'		 => 'custom_post_name',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
		<!-- Aquí agregar contenido a mostrar por el loop -->
	
	<?php } 
?>

<?php the_pagination( $get_arg ); ?>


~~~

Además es importante que dentro de los parámetros de búsqueda sea incorporado el key `paged` junto con el valor `$paged`, para que nuestra paginación pueda funcionar correctamente.

### Uso de Flickity
En la versión 1.3.0 se ha agregado [Flickity](https://github.com/metafizzy/flickity/) como opción a Flexslider. Un versátil plugin de Javascript que contiene menos errores que el anterior, se encuentra más actualizado y además con más opciones de visualización. Para obtener información de cómo implementar Flickity, por favor revisar la [documentación](https://flickity.metafizzy.co) correspondiente.

### Archivo de opciones
En la versión 1.4.3 se creó la variable `$theme_options` que contendrá todas las configuraciones necesarias para el theme. Dentro de los parámetros que contiene se encuentran opciones para saber si WooCommerce esta activo, obtener accesos a las carpetas de funciones y el key slider contiene dos nuevos parámetros. Estos permiten a través de un valor booleano activar o desactivar cada uno de los sliders disponibles en la plantilla.

# Base para trabajar con SASS, ES6 y mucho más. 
[Laravel Mix](https://github.com/JeffreyWay/laravel-mix) nos permite trabajar con estás tecnologías y muchas más de manera simple y prácticamente sin configuración.

### Requisitos
Para trabajar con laravel mix, es necesario tener instalado [Node.js y NPM](https://nodejs.org/en/)
Puedes verificar si tienes instalado npm ejecutando este comando: 
```bash
npm -v
```
Lo que debiese retorar algo como `6.1.0`

## Instalación
Bajar el repositorio e instalar laravel mix usando npm 
```bash
git clone https://github.com/gonzunigad/laravel-mix-desafiolatam-wordpress mi-tema
cd mi-tema
npm install
```
Eso es todo. De ahora en adelante, ya puedes compilar tus assets. 
Recuerda que `npm install` puede demorar bastante en terminar y arrojar algunas advertencias. Es normal, no te preocupes.

Luego, solo debes ejecutar este comando para compilar
```bash
npm run dev
```
Si quieres que adicionalmente todo se minifique puedes correr: 
```bash
npm run production
```

### Watch (compilar automáticamente al guardar)
Para que laravel mix compile automáticamente cuando realizas un cambio en el SASS, puedes correr este comando: 
```bash
npm run watch
```
