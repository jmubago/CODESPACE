import repo from '../repositorio/'

export default (function (req, res) {
    
    var tarea = req.body.nombre;
   
    repo.addTarea(tarea).then(results=> {

        //Asignar response
        res.setHeader('Content-Type', 'application/json')
        res.send(JSON.stringify(results))
    }).catch(error=>{

        //Asignar response
        res.setHeader('Content-Type', 'application/json')
        res.status(500);
        res.send(JSON.stringify(error))
    })
    
})