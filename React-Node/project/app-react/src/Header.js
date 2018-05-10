import React, { Component } from 'react';
import axios from 'axios';
//import logo from './logo.svg';
import './Header.css';
//import InputBox from './InputBox';
//import AddButton from './AddButton'

//El componente se debe llamar como el archivo
class Header extends Component {
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
            tareas: '',
        };      
        debugger;  
        //initialColor: props.initialColor
            //this.state.message = "Welcome " + props.message + props.msg; 
            this.handleChange = this.handleChange.bind(this);
            this.handleSubmit = this.handleSubmit.bind(this);
    }
    
    handleChange(event) {
        this.setState({value: event.target.value});
    }
    
    handleSubmit(event) {
        alert('A name was submitted: ' + this.state.value);
        event.preventDefault();
    }
    
   
    componentDidMount() {
        fetch("http://localhost:5000/api/tareas")
        
          .then(res => res.json())
          .then(
            (response) => {
                debugger
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

    onChange = (e) => {
        const state = this.state;
        state[e.target.nombre] = e.target.value;
        this.setState(state);
    }

    onSubmit = (e) =>{
        e.preventDefault();
        const{tareas}=this.state;
        axios.post("http://localhost:5000/api/tareas/add", {tareas})
        .then((result) => {

        })
    }

    // Renderiza un componente (o number o string) usando state y props    
    render() {
        // var message = this.state.message;
            const{error,isLoaded,tareas} = this.state;
            if (error){
                return <div>Error:{error.message}</div>;
            }else if (!isLoaded){
                return <div>Cargando...</div>
            }else{
            return (
                <div>
                    <form name="listForm" onSubmit={this.handleSubmit}>
                        <input type="text" id="newTarea" name="listItem" placeholder="Add new" value={this.state.value} onChange={this.handleChange}/>
                        <input type="submit" value="Submit"/>
                    </form>
                    <br/><br/>
                </div>
            );
        }
    }
}

export default Header;
