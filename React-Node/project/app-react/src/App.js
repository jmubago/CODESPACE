import React, { Component } from 'react';
import './App.css';
import Header from './Header';
import Listar from './Listar';

class App extends Component {
  render() {
    return (     
      <div className="container">
        <h2>To Do - FULL REST API</h2>
          <Header/>
          <Listar/>
        
      </div>
    );
  }
}

export default App;



