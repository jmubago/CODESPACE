import React, { Component } from 'react';


//El componente se debe llamar como el archivo
class InputBox extends Component {
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
            // error: null,
            // isLoaded: false,
            // tareas: []
        };        
        //initialColor: props.initialColor
            //this.state.message = "Welcome " + props.message + props.msg; 
    }
   
    // Renderiza un componente (o number o string) usando state y props    
    render() {
        // var message = this.state.message;
            return (
                <div>
                    <button id="add" type="submit" className="button" onClick={this.props.submit}>+</button>
                    <br/><br/>
                </div> 
            );
        }
    }


export default InputBox;
