# PRUEBA DE ENTRADA PARA CIOMPRIX

## Descripción del Proyecto

El propósito general de este proyecto es realizar un backend que nos permita generar una conexión con una base de datos, proporcionándonos vía API las funcionalidades para realizar un CRUD. Esto nos permitirá conectar con un cliente que será desarrollado en ReactJs.

El objetivo de esta documentación es facilitar al usuario entender la construcción paso a paso de este proyecto y cómo podría solucionar errores al momento de ejecutarlo.

## Tecnologías Requeridas

Para este proyecto, necesitarás las siguientes tecnologías:

- PHP
- Laravel [link documentación](#)
- PostgreSQL [link documentación](#)
- Eloquent [link documentación](#)
- Artisan [documentación del proyecto](#)

Se recomienda usar el perfil de configuración de plugins para Visual Studio Code que viene en la carpeta `_vscode_plugins`.

### Instalación de Tecnologías

#### Windows, Linux, y Mac

[Incluye un tutorial detallado para instalar cada una de estas tecnologías en Windows, Linux, y Mac.]

## Inicialización del Proyecto

Para inicializar nuestro proyecto, debemos clonar nuestro proyecto ejecutando el comando:

```bash
git clone https://github.com/Edwinfpirajan/server-task.git

Configuración del Proyecto Clonado

[Aquí incluyes un tutorial sobre cómo configurar y correr un proyecto de Laravel clonado, incluyendo la configuración del archivo .env.]
Conexión a la Base de Datos

Para conectar la base de datos, tienes dos opciones:

    Utilizar el comando de migración:

bash

php artisan migrate

    O usar la configuración que se envió a través del correo electrónico.

Ejecución del Servidor

Para correr nuestro servidor en modo desarrollo, ejecutamos el siguiente comando:

bash

php artisan serve

Endpoints de la API

El proyecto cuenta con las siguientes direcciones vía API para conectar con React o con cualquier otra tecnología para el front:
Traer toda la lista de las tareas:

    Método GET: http://127.0.0.1:8000/api/v1/tasks o http://localhost:8000/api/v1/tasks

Crear una nueva tarea:

    Método POST: http://127.0.0.1:8000/api/v1/tasks

Cuerpo de la solicitud:

json

{
  "title": "Ejemplo de titulo",
  "category": "Personal",
  "status": "Pendiente",
  "description": "Descripción de la tarea"
}

Actualizar una tarea:

    Método PUT: http://127.0.0.1:8000/api/v1/tasks/{id}

Cuerpo de la solicitud:

json

{
  "title": "Ejemplo de titulo actualizado",
  "category": "Trabajo",
  "status": "Completado",
  "description": "Descripción actualizada de la tarea"
}

Eliminar una tarea:

    Método DELETE: http://127.0.0.1:8000/api/v1/tasks/{id}

Posibles Errores y Soluciones

[Aquí incluyes ejemplos de los errores más comunes y sus soluciones.]

arduino


Recuerda completar las secciones marcadas con instrucciones específicas