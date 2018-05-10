import mongo from '../config/mongo'

let getTareas = function(){

    return new Promise((resolve,reject)=>{
        
        mongo.Tarea.find({}, function(error, results){
            console.log("Tareas ", results)

            if(error){

                var results = {
                    error: error
                }  

                reject(results)
            } else{
                
                var data = []

                for(var i = 0; i< results.length ; i++){
                    data.push({
                        id: results[i]._id,
                        nombre: results[i].name
                    })
                }

                console.log("Tareas data ", data)

                resolve(data)
            }

            
        })      
    })
}

let addTarea = function(tarea){
    return new Promise((resolve,reject)=>{

        var t = new mongo.Tarea({
            name: tarea,
            _id: mongo.newId()
        })

        t.save().then(() => {
            
            console.log('The result: ', JSON.stringify(results));
            
            var results = {
                error: null,
                nombre: t.name,
                id: t._id
            }
            resolve(results)
            
        }).catch(error => {
            
            console.log("my error ", error)
            var results = {
                error: error
            }

            reject(results)
        });
    })
}

let deleteTarea = function(id) {

    return new Promise((resolve, reject)=>{
        console.error("Y ESTO QUE")

        //Cambiar por codigo mongo
        mongo.Tarea.findOneAndRemove({_id:id}, function(error, results){
            console.log("Tareas ", results)

            if(error){

                var results = {
                    error: error
                }  

                reject(results)
            } else{               

                var results = {
                    error: null,
                    id: id
                }
            
                resolve(results)
            }

            
        }) 
    })
}

exports.getTareas = getTareas;
exports.addTarea =  addTarea;
exports.deleteTarea = deleteTarea;