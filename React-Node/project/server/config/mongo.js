import mongoose from 'mongoose';
mongoose.connect('mongodb://localhost/tareas');

var Schema = mongoose.Schema;

var schema = new Schema({ 
    name: String,
    _id: Schema.Types.ObjectId,
})

const Tarea = mongoose.model('Tarea', schema);

exports.Tarea = Tarea;
exports.newId = function() {

    return  new mongoose.Types.ObjectId
}