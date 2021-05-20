import React, { Component } from 'react';
import './assets/css/animate.scoped.css'
import './assets/css/sidebar-menu.scoped.css'
import './assets/css/adminstyle.scoped.css'
import './assets/css/bootstrap.scoped.css'
import axios from 'axios';
import {Link} from 'react-router-dom'

class editRoom extends Component {
    constructor(props) {
        super(props);
        this.state = {
          room_id: 0,
          roomtype_id: '',
          noroom: '',
          img: '',
          status: '',
          phones:''
        }
      }
    myhandleChange = (event) => {
        let name = event.target.name;
        let value = event.target.value;
        this.setState({ [name]: value });
      }
      mySubmitHandler = (event) => {
      }
    

      componentDidMount() {
      let formData = new FormData();  
      formData.append('room_id', this.state.room_id);  
      axios.get(`http://localhost/ReactJS_Hotel/src/DB/api/controller.php/rooms?room_id=8`,formData,{
          headers : {
              'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
          }
      }).then(Response=>{
          console.log(Response)
      })
    }
      onSave = (event)=>{

        event.preventDefault();
        let formData = new FormData(); 
        formData.append('room_id', this.state.room_id);   
        formData.append('roomtype_id', this.state.roomtype_id);  
        formData.append('noroom', this.state.noroom);
        formData.append('img', this.state.img);  
        formData.append('status', this.state.status);
        formData.append('phones', this.state.phone);
        axios.put(`http://localhost/ReactJS_Hotel/src/DB/api/controller.php/rooms?room_id=8`,formData,{
            headers : {
                'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        }).then(Response=>{
            console.log(Response)
        })

    }
    render() {
        return (
          <div className=" body bg-theme bg-theme1">

                <div id="wrapper">
                    <div id="sidebar-wrapper" data-simplebar data-simplebar-auto-hide="true" className="active">
                        <div className="brand-logo">
                            <a href="index.php">
                                <img src="images/logo.png" className="logo-icon" alt="logo icon" />
                                <h5 className="logo-text">HKTQueen Hotel</h5>
                            </a>
                        </div>
                        <ul className="sidebar-menu do-nicescrol in">
                            <li>
                                <a href="index.php">
                                    <i className="fa fa-tachometer" aria-hidden="true" /> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="booking.php">
                                    <i className="fa fa-shopping-cart" aria-hidden="true" /> <span>Booking</span>
                                </a>
                            </li>
                            <li>
                                <a href="rooms.php">
                                    <i className="fa fa-bed" aria-hidden="true" /> <span>Rooms</span>
                                </a>
                            </li>
                            <li className="active">
                                <a href="users.php" className="active">
                                    <i className="fa fa-user" aria-hidden="true" /> <span>Users</span>
                                </a>n
                                </li>
                            <li>
                                <a href="./signup-form/login-user.php" target="_blank">
                                    <i className="fa fa-sign-out" aria-hidden="true" /> <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <header className="topbar-nav">
                        <nav className="navbar navbar-expand fixed-top">
                            <ul className="navbar-nav mr-auto align-items-center">
                                <li className="nav-item">
                                    <a className="nav-link toggle-menu" href="javascript:void();">
                                        <i className="menu-icon fa fa-bars" />
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <form className="search-bar">
                                        <input type="text" className="form-control" placeholder="Enter keywords" />
                                        <a href="javascript:void();"><i className="fa fa-search" /></a>
                                    </form>
                                </li>
                            </ul>
                            <ul className="navbar-nav align-items-center right-nav-link">
                                <li className="nav-item">
                                    <a className="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                                        <span className="user-profile"><img src="images/user.png" className="img-circle" alt="user avatar" /></span>
                                    </a>
                                    <ul className="dropdown-menu dropdown-menu-right">
                                        <li className="dropdown-item" >
                                            <a href="./signup-form/login-user.php">Logout </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </header>
        {/*End topbar header*/}
        <div className="clearfix" />
        <div className="content-wrapper">
          <div className="container-fluid">
            <div className="card">
              <div className="card-body">
                <h2>Edit Room</h2>
                <div className="container">
     
                    <div className="form-group ">
                      <label htmlFor="roomtype_id">Roomtype ID :</label>
                      
                      <select name="roomtype_id" className="form-control text-body" id required>
       
                        <option value={this.state.roomtype_id} onChange={(e) => this.setState({ roomtype_id: e.target.value })}></option>
               
                      </select>
                    </div>
                    <div className="form-group">
                      <label htmlFor="noroom">No room:</label>
                      <input type="text" className="form-control text-body" name="noroom" value={this.state.noroom} onChange={(e) => this.setState({ noroom: e.target.value })} />
                    </div>
                    <div className="form-group">
                      <label htmlFor="img">Img:</label>
                      <input type="file" className="form-control text-body" name="img" value={this.state.img} onChange={(e) => this.setState({ img: e.target.value })}/>
                    </div>
                    <div className="form-group">
                      <label htmlFor="status">Status:</label>
                      <select name="status" className="form-control text-body" id required>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                      </select>
                    </div>
                    <div className="form-group">
                      <label htmlFor="phone">Phone:</label>
                      <input type="phone" className="form-control text-body" name="phone"  value={this.state.phone} onChange={(e) => this.setState({ phone: e.target.value })}  required />
                    </div>
                    <input type="submit" name="update" className="btn btn-primary" style={{float: 'right'}} onClick={this.onSave} defaultValue="Submit" />
          
                </div>
              </div>
            </div>
          </div></div></div></div>
        );
    }
}

export default editRoom;