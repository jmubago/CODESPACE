import React, { Component } from 'react';
//import logo from './logo.svg';
import './Listar.css';

//El componente se debe llamar como el archivo
class Listar extends Component {
    // Es lo primero que se ejecuta siempre pq un componente es una clase
    // Lo usamos para inicializar el estado
    // Recibe las propiedades del componente padre, mirar app.js el header, propiedad message
    constructor(props) {
        console.log("Constructor: recibo los props y creo mi estado inicial")
        // Super se llama siempre para inicializar el componente
        super(props);
        // Creamos el estado inicial
        // This state es el estado del componente        
        this.state = {
            error: null,
            isLoaded: false,
            tareas: []
        };        
        //initialColor: props.initialColor
            //this.state.message = "Welcome " + props.message + props.msg; 
    }
    // Se ejecuta una vez que el componente se ha instanciado, osea, despues del constructor
    static getDerivedStateFromProps(nextProps, prevState){
        console.log("getDerivedStateFromProps, opcional, recibe el estado anterior y los props y devuelve un estado")
        console.log(JSON.stringify(nextProps))
        // Este metodo siempre debe devolver un objeto que es el STATE
        var state = prevState
        
        state.message = "Welcome getDerivedStateProps " + nextProps.msg;
        
        return state
    }
   

    componentDidMount() {
        fetch("http://localhost:5000/api/tareas")
          .then(res => res.json())
          .then(
              
            (response) => {
              this.setState({
                isLoaded: true,
                tareas: response.tareas
              });
            },
            // Note: it's important to handle errors here
            // instead of a catch() block so that we don't swallow
            // exceptions from actual bugs in components.
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )
      }

    // Renderiza un componente (o number o string) usando state y props    
    render() {
        console.log("RENDER: El componente renderiza en funcion del estado")
        console.log("RENDER: Se ejecuta cada vez que actulizamos el estado con setState")
        debugger
        // var message = this.state.message;
            const{error,isLoaded,tareas} = this.state;
            if (error){
                return <div>Error:{error.message}</div>;
            }else if (!isLoaded){
                return <div>Cargando...</div>
            }else{
            return (
                <div>
                    <ul id="listaElementos">
                        {tareas.map (tarea =>(
                            <li key={tarea.id} id={tarea.id}>
                                {tarea.nombre}
                            </li>
                        ))}

                    </ul>
                </div> 
            );
        }
    }
}

export default Listar;
