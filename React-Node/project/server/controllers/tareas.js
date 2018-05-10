import repo from '../repositorio/'

// export default puede devolver lo que sea: una variable, una funcion o lo que sea
export default (function (req, res) {

    //req.params.variable

    repo.getTareas().then(function(results){
        
        //Asignar response
        res.setHeader('Content-Type', 'application/json')
        res.send(JSON.stringify({'tareas':results}))        

        
    }).catch(function(error){

        
        res.setHeader('Content-Type', 'application/json')
        res.status(500);
        res.send(JSON.stringify({
            error: error
        }))
    })
})