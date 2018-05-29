import React, {Component} from 'react';
import Modal from 'react-modal/lib/components/Modal';
import './Coach.css'

class Coach extends Component{
    constructor(props){
        super(props);
        this.state={
            //error=null,
            get_coach: [],
            modalIsOpen: false,
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
        //this.logChange = this.logChange.bind(this); // We capture the value and change state as user changes the value here.
        this.handleEdit = this.handleEdit.bind(this);
    }

    openModal(Coach){
        this.setState({
            modalIsOpen: true,
            Nombre: Coach.Nombre,
            Apellido: Coach.Apellido,
            Email: Coach.EmailContacto,
            Telefono: Coach.Telefono,
            Iban: Coach.IBAN,
            id: Coach.id
        });
    }

    closeModal(){
        this.setState({
            modalIsOpen: false
        });
    }

    handleEdit(event){
        event.preventDefault()
        var data={
            Nombre: this.coachName.value,
            Apellido: this.coachLastname.value,
            Email: this.email.value,
            Telefono: this.phoneNumber.value,
            Iban: this.bankAccount.value,
            id: this.state.id
        }
        fetch('http://localhost:4000/api/updateCoach',{
            method: 'PUT',
            headers:{'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        }).then(function(response){
            if(response.status >= 400){
                throw new Error("Bad response from server");
            }
            return response.json();
        }).then(function(data){
            console.log("dataaaa: ", data)
        }).catch(err =>{
            console.log("Errorrrr:", err);
        })
    }

    deleteCoach(Coach){
        var data = {
            id: Coach.id
        }
        console.log(JSON.stringify(data));
        fetch('http://localhost:4000/api/deleteCoach', {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        }).then(function(response) {
            if (response.status >= 400) {
              throw new Error("Bad response from server");
            }
            return response.json();
        }).then(function(data) {
            if(data === "success"){
               this.setState({msg: "User has been deleted."});  
            }
        }).catch(function(err) {
            console.log(err)
        });
    }

    componentDidMount() {
        fetch("http://localhost:4000/api/get_coach")
            .then(res => res.json())
            .then(
                (result)=>{
                    this.setState({
                        get_coach: result
                    });
                    //console.log("result: ",this.state.get_coach);
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
        var map = this.state.get_coach;
        //console.log("map Coachhh : ",map);
        //console.log("RENDER");
        
        return(
            <div className="container-table200">
                <div className="wrap-table200">
                    <div className="table200 ver2 m-b-110">
                        <div className="table200-head">
                            <table>
                                <thead>
                                    <tr>
                                        <th className="cell100 column1-1">Coach</th>
                                        <th className="cell100 column2-1">Email</th>
                                        <th className="cell100 column3-1">Phone Number</th>
                                        <th className="cell100 column4-1">Bank account</th>
                                        <th className="cell100 column5-1">Sessions</th>
                                        <th className="cell100 column6-1">Candidates</th>
                                        <th className="cell100 column7-1">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div className="table200-body js-pscroll">
                            <table>
                                <tbody >
                                    {this.state.get_coach.map(Coach=>
                                        <tr key={Coach.id} className="tr">
                                        <td className="cell100 column1-1">{Coach.Nombre} {Coach.Apellido}</td>
                                        <td className="cell100 column2-1">{Coach.EmailContacto}</td>
                                        <td className="cell100 column3-1">{Coach.Telefono}</td>
                                        <td className="cell100 column4-1">{Coach.IBAN}</td>
                                        <td className="cell100 column5-1">{Coach.TotalSessions}</td>
                                        <td className="cell100 column6-1">{Coach.NumberCandidates}</td>
                                        <td className="cell100 column7-1"><button className="button-small button1"  onClick={() => this.openModal(Coach)}>Edit</button> | <button className="button-small button1" onClick={() => this.deleteCoach(Coach)}>Delete</button></td>
                                        </tr>
                                    )}
                                    <Modal isOpen={this.state.modalIsOpen} onRequestClose={this.closeModal} contentLabel="Enterprise update">
                                        <form onSubmit={this.handleEdit} method="POST">
                                            <div>
                                                <label>Coach name </label>
                                                <input  className="form-control"  placeholder='Company name' name='companyName' ref={coachName=>this.coachName=coachName}/>
                                            </div>
                                            <div>
                                                <label>Coach lastname  </label>
                                                <input  className="form-control"  placeholder='VAT Number' name='vatNumber' ref={coachLastname=>this.coachLastname=coachLastname}/>
                                            </div>
                                            <div>
                                                <label>Email </label>
                                                <input  className="form-control"  placeholder='VAT Number' name='vatNumber' ref={email=>this.email=email}/>
                                            </div>
                                            <div>
                                                <label>Phone number </label>
                                                <input  className="form-control"  placeholder='VAT Number' name='vatNumber' ref={phoneNumber=>this.phoneNumber=phoneNumber}/>
                                            </div>
                                            <div>
                                                <label>Bank account </label>
                                                <input  className="form-control"  placeholder='VAT Number' name='vatNumber' ref={bankAccount=>this.bankAccount=bankAccount}/>
                                            </div>
                                            <div className="submit-section">
                                                <button className="btn btn-uth-submit">Submit</button>
                                            </div>
                                        </form>
                                    </Modal>
                                </tbody>
                            </table>
                        </div>  
                    </div>      
                </div>
            </div>
        )
    }
}
export default Coach;