Nuestra todo list esta basado en:
- NodeExpress
- React
- Mongo o MySQL

MODO DESARROLLO

Para ejecutar el servidor NodeExpress con nodemonitor (con mongo) lanzamos:
- npm run mon (npm run start se lanza sin nodemon)

Para ejecutar el servidor NodeExpress con mysql
- npm run mon-mysql (npm run start-mysql se lanza sin nodemon)

Para ejecutar el sevidor NodeExpress con hot reload (desarrollo con nodemon)
- npm run mon

Lo podemos comprobar con la ruta:
http://localhost:5000/api/tareas

Para ejecutar el sevidor NodeExpress con hot reload (desarrollo con nodemon) y mysql
- npm run mon-mysql


Nuestra aplicacion react se encuentra en app-react.
Para ejecutar nuestra applicacion react en modo desarrollo:
- cd app-react
- npm run start

Nuestra servidor de desarrollo react se lanza por defecto en el puerto 5000. Si esta ocupado (por el servidor node por ejemplo), se lanzara en el puerto 3001 (nos preguntara si lo lanzar en otro puerto)


Para lanzar los test de react
- cd app-react
- npm run test

MODO PRODUCCION


En la linea 23 de /server/index.js donde se ejecuta la aplicacion node express, definimos que para la ruta '/' sin path, vamos a servir los ficheros del build de produccion de react, que se guarda en ./app-react/build

Por lo que debemos seguir estos pasos
1. Generar la build estatica de produccion de react:
- cd app-react
- npm run build

2. Ahora solo nos queda lanzar nuestro servidor express
- npm run start (en el directorio padre, el root de nuestro proyecto)

3. Nuestra aplicacion react se servira en el path '/' como hemos dicho


4. Lanzar node-express: 
- npm run start

Nota: Cada vez que hacemos un npm run build, debemos relanzar el servidor node express para que actualice los ficheros estaticos