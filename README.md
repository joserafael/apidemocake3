
Prueba de API REST con CAKEPHP 3.4.x


## Instalación

Clonar el proyecto:

```bash
git clone https://github.com/joserafael/apidemocake3.git
```

Ir a la carpeta del proyecto:


```bash
cd apidemocake3
```

Instalar cakephp y las dependencias con composer:
```bash
composer install
```

Renombrar el archivo config/app.default.php a config/app.php configurar la base de datos en la línea 232:


```bash
'username' => 'my_app',
            'password' => 'secret',
            'database' => 'my_app',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
```


Realizar la migración:

```bash
bin/cake migrations migrate

```


Iniciar el servidor:

```bash
bin/cake server

```

El URL principal es http://localhost:8765

##  Probar la API

Se recomienda usar POSTMAN

Crear un nuevo usuario:


POST: http://localhost:8765/users/add.json

Header: Content-Type: application/json

Body:


{
"username":"usuario",
"password":"12345678",
"active":true,
"email":"correo@correo.com",
"is_superuser":false
}


Iniciar sesión:

POST: http://localhost:8765/users/token.json

Header: Content-Type: application/json

Body:

{
"username":"usuario",
"password":"12345678"

}

La respuesta sería algo así:

{
  "success": true,
  "data": {
    "token": "unaseriededigitoslargos"
  }
}






Con el token asignado se pueden usar las tablas de contactos y paises en sus metodos respectivos.

En el header colocar:

Authorization: Bearer unaseriededigitoslargos




```bash

Paginar los registros:
GET http://localhost:8765/contactos.json

GET http://localhost:8765/paises.json

GET http://localhost:8765/users.json

Ver un registro por ID:

GET http://localhost:8765/contactos/view/{{id}}.json

GET http://localhost:8765/paises/view/{{id}}.json

GET http://localhost:8765/contactos/users/{{id}}.json

Agregar un registro:

POST GET http://localhost:8765/contactos/add.json

POST GET http://localhost:8765/paises/add.json

POST GET http://localhost:8765/users/add.json


Editar un registro:

POST http://localhost:8765/contactos/edit/{{id}}.json

POST http://localhost:8765/paises/edit/{{id}}.json

POST http://localhost:8765/users/edit/{{id}}.json


Borrar un registro:

POST http://localhost:8765/contactos/delete/{{id}}.json

POST http://localhost:8765/paises/delete/{{id}}.json

POST http://localhost:8765/users/delete/{{id}}.json
```






En caso de duda me pueden escribir a mi correo webmaster@joserafael.com.ve o a mi cuenta en Twitter: @joserafael
