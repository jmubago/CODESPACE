import repoMySQl from './repoMysql'
import repoMongo from './repoMongo'    

var motor = process.argv[2]
var repo
if(motor === "mysql") {
    repo =  repoMySQl
} else if(motor === "mongo"){
    repo = repoMongo
} else{
    throw "Motor de base de datos no definido"
}

export default(repo)