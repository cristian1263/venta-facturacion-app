
# Sistema de Ventas y Facturación
<br>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
@@ -6,59 +8,143 @@
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<br>
<br>

## Comenzando 💪🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

### Pre-requisitos 📋

## About Laravel
_Que cosas necesitas para poner en marcha el proyecto y como instalarlos_

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
* GIT [Link](https://git-scm.com/downloads)
* Entorno de servidor local [XAMPP](https://www.apachefriends.org/es/index.html) en su versión 8.2.0 (Incluye php y BD)
* Manejador de dependencias de PHP [Composer](https://getcomposer.org/download/).

### Instalación 🔧

Laravel is accessible, powerful, and provides tools required for large, robust applications.
Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

## Learning Laravel
 1. clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
```bash
  git clone https://github.com/Ldav05/venta-facturacion-app.git
```

 2. Ingresa a la carpeta del repositorio.
 3. Actualizamos nuestro composer:
```bash
composer update
```
 4.  Instalamos las dependencias del proyecto:
 ```bash
composer install
```

 5.  Generar archivo .env:
	 * Comando en Linux:

 ```bash
cp .env.example .env
```
*Comando en Windows:
 ```bash
copy .env.example .env
```
6.  Generar Key de seguridad:
```bash
php artisan key:generate
```
 7.  Generar Token JWT:
```bash
php artisan jwt:secret
```
 8.  Creamos nuestra base de datos en phpmyadmin.
 9.  Agregamos la base de datos creada a nuestro archivo .env así:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TuBaseDeDatos
DB_USERNAME=root
DB_PASSWORD=
```
 10.  Ejecutamos la migración:
```bash
php artisan migrate
```
 11.  Por ultimo ejecutamos nuestro proyecto:
 ```bash
php artisan serve
```
## Recomendaciones   😁

* Para la prueba con Postman se debe primero realizar el registro del usuario en [http://localhost:8000/api/auth/register] poniendo en el body Json:

Ejemplo:
```json
{
  "name": "Jhon",
  "email":"john@example.com",
  "password": 12345
}
```

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
* Ahora se puede ejecutar la prueba de login a [http://localhost:8000/api/auth/login]

Ejemplo:
```json
{
  "email":"john@example.com",
  "password": 12345
}
```
* Adicionalmente se puede realizar un logout en  [http://localhost:8000/api/auth/logout], con el token generado en el login.


------------


|  Nota |
| ------------ |
|**Errores de php intelephense**: Dado que salga este error en visual estudio code, se deberá dirigir a configuración y escribir php intelephense procediendo a desactivar `intelephense.diagnostics.undefinedMethods` y `intelephense.diagnostics.undefinedType`.   |


------------










## Construido con 🛠️

Las herramientas que utilice para crear este proyecto

* Framework de PHP [Laravel](https://laravel.com/docs/8.x).


## Autores ✒️

* **Luis Gordon** -  GitHub: [ Ldav05](https://github.com/Ldav05)

* **Cristian Hernandez** -  GitHub: [cristian1263](https://github.com/cristian1263)
* **Kenneth Mendoza** - GitHub: [ Kenth12](https://github.com/Kenth12)


## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Regalame una estrella ⭐
* Copia el proyecto en tu cuenta dando clic en Fork 😊
