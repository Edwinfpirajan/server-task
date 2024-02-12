# PRUEBA DE ENTRADA PARA CIOMPRIX

## Descripción del Proyecto

El propósito general de este proyecto es realizar un backend que nos permita generar una conexión con una base de datos, proporcionándonos vía API las funcionalidades para realizar un CRUD. Esto nos permitirá conectar con un cliente que será desarrollado en ReactJs.

El objetivo de esta documentación es facilitar al usuario entender la construcción paso a paso de este proyecto y cómo podría solucionar errores al momento de ejecutarlo.

## Tecnologías Requeridas

Para este proyecto, necesitarás las siguientes tecnologías:

- PHP
- Laravel: Visita la [documentación oficial de Laravel](https://laravel.com/docs) para obtener más detalles.
- PostgreSQL: Encuentra la [documentación oficial de PostgreSQL](https://www.postgresql.org/docs/) aquí.
- Eloquent: Laravel Eloquent es el ORM de Laravel; la [documentación de Eloquent](https://laravel.com/docs/eloquent) puede ser útil.
- Artisan: Para conocer más sobre Artisan, consulta la [documentación de Artisan](https://laravel.com/docs/artisan).

Se recomienda usar el perfil de configuración de plugins para Visual Studio Code que viene en la carpeta `_vscode_plugins`.

## Instalación de Tecnologías

### Windows, Linux, y Mac

Para instalar las tecnologías requeridas en diferentes sistemas operativos, sigue las guías oficiales:

- **PHP**: La instalación de PHP varía según el sistema operativo. Visita [PHP.net](https://www.php.net/manual/es/install.php) para obtener instrucciones específicas de instalación.
- **Composer**: Como gestor de dependencias de PHP, puedes encontrar las instrucciones de instalación en [getcomposer.org](https://getcomposer.org/download/).
- **Laravel**: Después de instalar PHP y Composer, instala Laravel siguiendo la guía en su [página de documentación](https://laravel.com/docs/installation).
- **PostgreSQL**: Para instalar PostgreSQL, sigue las instrucciones en su [sitio web oficial](https://www.postgresql.org/download/).

## Inicialización del Proyecto

Para inicializar nuestro proyecto, debemos clonar nuestro proyecto ejecutando el comando:

```bash
git clone https://github.com/Edwinfpirajan/server-task.git

Configuración del Proyecto Clonado

Una vez clonado el repositorio, sigue estos pasos para configurar el proyecto:

    Instala las dependencias de PHP con Composer:

bash

cd server-task
composer install

    Configura el archivo .env:

Copia el archivo .env.example a .env:

bash

cp .env.example .env

Luego, abre .env y configura tus variables de entorno, especialmente las relacionadas con la base de datos.

    Genera la clave de la aplicación:

bash

php artisan key:generate

    Ejecuta las migraciones y seeders (si es necesario):

bash

php artisan migrate
php artisan db:seed

Conexión a la Base de Datos

Para conectar la base de datos, tienes dos opciones:

    Utilizar el comando de migración como se mostró anteriormente.
    Seguir la configuración específica enviada por correo electrónico.

Ejecución del Servidor

Para correr nuestro servidor en modo desarrollo, ejecutamos el siguiente comando:

bash

php artisan serve

Endpoints de la API

El proyecto cuenta con las siguientes direcciones vía API para conectar con React o con cualquier otra tecnología para el front:
Traer toda la lista de las tareas:

    Método GET: http://localhost:8000/api/v1/tasks

Crear una nueva tarea:

    Método POST: http://localhost:8000/api/v1/tasks

Cuerpo de la solicitud:

json

{
  "title": "Ejemplo de titulo",
  "category": "Personal",
  "status": "Pendiente",
  "description": "Descripción de la tarea"
}

Actualizar una tarea:

    Método PUT: http://localhost:8000/api/v1/tasks/{id}

Cuerpo de la solicitud:

json

{
  "title": "Ejemplo de titulo actualizado",
  "category": "Trabajo",
  "status": "Completado",
  "description": "Descripción actualizada de la tarea"
}

Eliminar una tarea:

    Método DELETE: http://localhost:8000/api/v1/tasks/{id}

Posibles Errores y Soluciones

    Error de Conexión a la Base de Datos: Asegúrate de que las credenciales de la base de datos en tu archivo .env sean correctas y que el servicio de PostgreSQL esté corriendo.
    Error de Clave de Aplicación No Establecida: Si te encuentras con un error que indica que la clave de aplicación no está establecida, asegúrate de ejecutar php artisan key:generate.
    Error al Cargar las Clases Después de Clonar: Si Laravel no encuentra algunas clases después de clonar el proyecto, intenta ejecutar composer dump-autoload.

Para más detalles sobre la solución de errores comunes, consulta la documentación oficial de Laravel y los foros de la comunidad.