import mysql from '../config/mysql'

let getTareas = function(){

    return new Promise((resolve,reject)=>{
        
        mysql.connection.query('SELECT * from tareas', function (error, results, fields) {
            if (error){
                console.log("my error ", error)
                var results = {
                    error: error
                }    
                
                reject(error)
            } else{
                console.log('The result: ', JSON.stringify(results));
                resolve(results)    
            }
          });        
    })
}

let addTarea = function(tarea){
    return new Promise((resolve,reject)=>{

        mysql.connection.query(`INSERT INTO tareas (nombre) VALUES ('${tarea}')`, 
    function (error, results, fields) {
        if (error){
            console.log("my error ", error)
            var results = {
                error: error
            }

            reject(results)
                        
        } else{

            console.log('The result: ', JSON.stringify(results));
            
            var results = {
                error: null,
                nombre: tarea,
                id: results.insertId
            }
            resolve(results)

        }
      });


    })
}

let deleteTarea = function(id) {

    return new Promise((resolve, reject)=>{
        console.error("Y ESTO QUE")
        mysql.connection.query(`DELETE FROM tareas WHERE id=${id}`, function (error, results, fields) {
            if (error){
                console.log("my error ", error)
                var results = {
                    error: error
                }
                
                console.error("QUE ESTA PASANDO REJECT")

                reject(results)

            } else{
                
                var results = {
                    error: null,
                    id: id
                }
            
                resolve(results)
            }
          });
    })
}

exports.getTareas = getTareas;
exports.addTarea =  addTarea;
exports.deleteTarea = deleteTarea;