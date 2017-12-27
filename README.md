# Angular-FileManager

Basado en el repositorio https://github.com/durasj/angular-filemanager/tree/bundle-php-local

## Cómo instalar

1. Instalar XAMPP. Descargarlo desde la siguiente URL, cualquiera de los clientes es útil debido a que sólo es necesaria la configuración de un servidor Apache, tarea básica de XAMPP

    https://www.apachefriends.org/download.html

2. Una vez instalado, abrir la configuración de apache **httpd.config** y buscar la linea que dice **Listen 80**, suele estar por la parte de arriba. Cambiarla a otro puerto disponible, por ejemplo **Listen 8085**.

3. Una vez cambiado el puerto, creamos una nueva carpeta en el directorio **C:\xampp\htdocs** llamada **angular-filemanager**.

4. Copiar los archivos de este repositorio dentro de la carpeta.

5. Poner en funcionamiento el servidor apache desde el panel de control de XAMPP.

6. Abrir http://localhost:<<puerto>>/angular-filemanager/

    en el caso del ejemplo, sería http://localhost:8085/angular-filemanager/

7. Si aparece el panel, ya se encuentra en funcionamiento.

    Los archivos y carpetas se generan en la carpeta **C:\xampp\htdocs\angular-filemanager\files**.

## Peticiones PHP

Este cliente funciona con peticiones PHP, mediante un bridge. Esto quiere decir que hay un "puente" PHP que permite hacer los request o llamados de forma fácil. 

El bridge de PHP se encuentra en el directorio **C:\xampp\htdocs\angular-filemanager\bridges\php-local**.

Para hacer una llamada a dichas peticiones es necesario que el servidor Apache de XAMPP se encuentre en funcionamiento.

Usaremos **Postman**, un plugin de Chrome, para demostrar un ejemplo:

Url POST:

    http://localhost:8085/angular-filemanager/bridges/php-local/index.php

Body:

    {"action": "createFolder", "newPath": "/example/test-desde-postman"}

Este llamado creará la carpeta *test-desde-postman* en el directorio **C:\xampp\htdocs\angular-filemanager\files**, y podremos verla desde el cliente.