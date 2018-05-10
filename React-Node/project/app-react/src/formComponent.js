import React, { Component } from 'react';
//import './formComponent.css';


class Form extends Component {
  render() {
    return (     
        <div>
            <form name="listForm">
                <input id="newTarea" type="text" name="listItem" placeholder="Add new"/>
                <button id="add" type="button" className="button">+</button>
            </form>
            <br/><br/>
        </div>  
    );
  }
}

export default Form;

