import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import CandidatesCoach from './candidatesCoach';
import CandidatesNoCoach from './candidatesNoCoach';
import Coach from './Coach';
import Enterprise from './Enterprises'
import Registration1 from './Registration1'
//import Registration2 from './Registration2'

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
        <CandidatesCoach/>
        <CandidatesNoCoach/>
        <Coach/>
        <Enterprise/>
        <Registration1/>
        <p></p>
        {/* <Registration2/> */}
      </div>
    )
  }
}

export default App;
