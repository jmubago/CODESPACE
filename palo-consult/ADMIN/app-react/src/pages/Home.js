import React, { Component } from 'react';
import logo from '../logo.svg';
import Coach from '../components/Coach';
//import Registration3 from '../components/Registration3'
import Registration3Modal from '../components/Registration3-modal'
import Candidates from '../components/Candidates'


class Home extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <Candidates/>
        <Coach/>
        {/* <Registration3/> */}
        <Registration3Modal/>
      </div>
    )
  }
}

export default Home;