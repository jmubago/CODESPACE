//Impotamos tareas
import tareas from './tareas'
//Impotamos add tareas
import tarea from './addTarea'
//Impotamos delete tareas
import deleteTarea from './deleteTarea'

// Como asignamos directamente, los archivos anteriores usan export default

// Asignamos a los exports las funciones que hemos importado
exports.tareas = tareas
exports.addTarea = tarea;
exports.deleteTarea = deleteTarea

// El modulo que use este modulo usara todo de la manera
// import este modulo from /caulquierruta/controllers/
// esteModulo.tareas tendra la funcion que se define en tareas.js con un export defaults
// esteModulo.tarea tendra la funcion que se define en addTarea.js con un export defaults
// esteModulo.deleteTarea tendra la funcion que se define en deleteTarea.js con un export defaults