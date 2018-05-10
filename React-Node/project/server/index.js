// CommonJS
//var express = require('express')
// ES 6 - ES Modules

//Importamos express
import express from 'express';
//Importamos api que expone un API REST (devuelve JSON, para consumir en JQUERY o REACT)
import api from './routes/api';
//Importamos views que expone rutas que devuelven HTML. Renderizamos HTML en el servidor
//NO SERVIMOS MAS VISTAS EN SERVIDOR
//import views from './routes/views';
//Importamos con require, commonJS lo que se usa sin babel, body-parser para que express pueda leer el body de las peticiones post 
var bodyParser = require('express'); // common JS, ES5

// Ejecutamos express. Con esto arranca express como servidor web
var app = express();
// App.set, API de express para agregarle funcionalidad
// Le decimos a express, con set, que use PUG como render engine de vistas
app.set('view engine', 'pug');
// Le decimos a express que en la ruta /app expone los ficheros staticos de la carpeta app
// app es la carpeta que contiene los ficheros de cliente para server rendering: CSS y JS
// SERVIR LA APLICACION REACT EN MODO PRODUCCION
//app.use('/', express.static('./app-react/build'));

// Le decimos a express que use bodyparser para leer el body de los post
app.use(bodyParser.json());
// in latest body-parser use like below.
app.use(bodyParser.urlencoded({ extended: true }));

// Le decimos a EXPRESS que use API para la ruta /api, donde exponmemos el api REST
// Ver la definicion de API() en /routes/api.js que usa el router de express
// Las rutas dentro de API son relativas al path /api
app.use('/api', api())

// Le decimos a EXPRESS que use VIEW para la ruta / sin path, donde exponemos rutas de SERVER RENDERING que devuelven HTML
// Ver la definicion de VIEWS para exponer las rutas de server rendering
//app.use('/', views())
// Quitamos VIEWS, quitamos server rendering


console.log("Aqui nos dice que motor quiere ...motor:",process.argv[2])


app.listen(5000)