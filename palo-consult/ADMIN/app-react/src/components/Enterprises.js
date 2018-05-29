import React, {Component} from 'react';
import Modal from 'react-modal/lib/components/Modal';
import './Enterprises.css'

class Enterprise extends Component{
    constructor(props){
        super(props);
        this.state={
            //error=null,
            get_enterprise: [],
            modalIsOpen: false,
            RazonSocial: '',
            Direccion:'',
            EmailContacto:'',
            Telefono:'',
            IBAN:'',
            id:0,
            register: false
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
        //this.logChange = this.logChange.bind(this); // We capture the value and change state as user changes the value here.
        this.handleEdit = this.handleEdit.bind(this);
        //this.getDerivedStateFromProps = this.getDerivedStateFromProps.bind(this);
    }

    openModal(Enterprises) {
        this.setState({
            modalIsOpen: true,
            RazonSocial: Enterprises.RazonSocial,
            Direccion: Enterprises.Direccion,
            EmailContacto: Enterprises.EmailContacto,
            Telefono: Enterprises.Telefono,
            IBAN: Enterprises.IBAN,
            id: Enterprises.id
        });
    }
    
    closeModal() {
        this.setState({
            modalIsOpen: false
        });

    }

    handleEdit(event){
        event.preventDefault()
        var data = {
            RazonSocial: this.companyName.value,
            Direccion: this.address.value,
            EmailContacto: this.email.value,
            Telefono: this.phoneNumber.value,
            IBAN: this.bankAccount.value,
            id: this.state.id
        }
        fetch('http://localhost:4000/api/updateEnterprise',{
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

    deleteEnterprise(Enterprises){
        var data = {
            id: Enterprises.id
        }
        console.log(JSON.stringify(data));
        fetch('http://localhost:4000/api/deleteEnterprise', {
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

    componentWillReceiveProps(nextProps) {
        this.setState({
            get_enterprise: nextProps.reloadEnterprise
        })
        console.log("componentWillReceiveProps", this.state.get_enterprise);
        //return 
        // {
        //     get_enterprise: nextProps.reloadEnterprise
        // }
    }

    componentDidMount() {
        fetch("http://localhost:4000/api/get_enterprises")
            .then(res => res.json())
            .then(
                (result)=>{
                    this.setState({
                        get_enterprise: result
                    });
                },
                (error)=>{
                    this.setState({
                        error: error
                });      
            })
    }

    render(){
        console.log ("new Prooooops: ", this.props.reloadEnterprise);
        return(
            <div className="limiter">
                <div className="container-table100">
                    <div className="wrap-table100">
                            <div className="table100 ver2 m-b-110">
                                <div className="table100-head">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th className="cell100 column1">Enterprise</th>
                                                <th className="cell100 column2">Email</th>
                                                <th className="cell100 column3">Phone Number</th>
                                                <th className="cell100 column4">Address</th>
                                                <th className="cell100 column5">Bank account</th>
                                                <th className="cell100 column6">Sessions</th>
                                                <th className="cell100 column7">Candidates</th>
                                                <th className="cell100 column8">Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            <div className="table100-body js-pscroll">
                                <table>    
                                    <tbody>
                                        {this.state.get_enterprise.map(Enterprises=>
                                            <tr key={Enterprises.id} className="tr">
                                            <td className="cell100 column1">{Enterprises.RazonSocial}</td>
                                            <td className="cell100 column2">{Enterprises.EmailContacto}</td>
                                            <td className="cell100 column3">{Enterprises.Telefono}</td>
                                            <td className="cell100 column4">{Enterprises.Direccion}</td>
                                            <td className="cell100 column5">{Enterprises.IBAN}</td>
                                            <td className="cell100 column6">{Enterprises.TotalSessions}</td>
                                            <td className="cell100 column7">{Enterprises.NumberCandidates}</td>
                                            <td className="cell100 column8"><button button className="button-small button1" onClick={() => this.openModal(Enterprises)}>Edit</button>  |  <button button className="button-small button1" onClick={() => this.deleteEnterprise(Enterprises)}>Delete</button></td>
                                            </tr>
                                        )}
                                        <Modal isOpen={this.state.modalIsOpen} onRequestClose={this.closeModal} contentLabel="Enterprise update">
                                            <form onSubmit={this.handleEdit} method="POST">
                                                <div>
                                                    <label>Company name </label>
                                                    <input  className="form-control"  placeholder='Company name' name='companyName' ref={companyName=>this.companyName=companyName}/>
                                                </div>
                                                <div>
                                                    <label>Address </label>
                                                    <input  className="form-control"  placeholder='VAT Number' name='vatNumber' ref={address=>this.address=address}/>
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
            </div>    
        )
    }
}
export default Enterprise;