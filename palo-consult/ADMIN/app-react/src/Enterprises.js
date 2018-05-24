import React, {Component} from 'react';

class Enterprise extends Component{
    constructor(props){
        super(props);
        this.state={
            //error=null,
            get_enterprise: []
        };
    }

    componentDidMount() {
        fetch("http://localhost:4000/api/get_enterprises")
            .then(res => res.json())
            .then(
                (result)=>{
                    this.setState({
                        get_enterprise: result
                    });
                    //console.log("result: ",this.state.get_enterprise);
                    //console.log(result);
                },
                (error)=>{
                    this.setState({
                        error: error
                });
                  
            })
    }

    render(){
        //const {get_candidateWithCoach} = this.state;
        var map = this.state.get_enterprise;
        console.log("map: ",map);
        console.log("RENDER");
        
        return(
            <div className="container">
                <div className="panel panel-default p50 uth-panel">
                    <table className="table table-hover">
                        <thead>
                            <tr>
                                <th>Enterprise</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Bank account</th>
                                <th>Sessions</th>
                                <th>Candidates</th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.state.get_enterprise.map(Enterprises=>
                                <tr key={Enterprises.id}>
                                <td>{Enterprises.RazonSocial}</td>
                                <td>{Enterprises.EmailContacto}</td>
                                <td>{Enterprises.Telefono}</td>
                                <td>{Enterprises.Direccion}</td>
                                <td>{Enterprises.IBAN}</td>
                                <td>{Enterprises.TotalSessions}</td>
                                <td>{Enterprises.NumberCandidates}</td>
                                </tr>
                            )}
                        </tbody>
                    </table>
                </div>
            </div>
        )
    }
}
export default Enterprise;