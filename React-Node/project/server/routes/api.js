// Importamos el router de express
import { Router } from 'express'
// Importamos el modulo controladores.
// Al no especificar archivo, solo carpeta, coge el index.js de controllers
import controller from '../controllers/'
//import mysql from '../config/mysql'

//var connection = mysql.connection


export default () => {

    let api = Router();
    // /api/tares
    // GET /tareas
    // NO HAY PARAMETROS
    // return 

    console.log("controller", JSON.stringify(controller))
    // En la URL /api/tareas, usamos en controlador tareas
    api.get('/tareas', controller.tareas)
    
    // Esta peticion es POST, recibiremos parametros en el body para lo que hemos usado body parser
    // En la URL /api/tareas, usamos en controlador tareas
    // En api/tarea/add llamamos al controlador addTarea
    api.post('/tarea/add', controller.addTarea)

    // idem
    api.post('/tarea/delete', controller.deleteTarea)

    return api
}