import React, { Component } from 'react';
import './style.css'
import 'bootstrap/dist/css/bootstrap.css'
class signup extends Component {
    render() {
        return (
            <div>
                <div className="container">
  <div className="row">
    <div className="col-md-4 offset-md-4 form">
      <form action="signup-user.php" method="POST" autoComplete>
        <h2 className="text-center">Signup Form</h2>
        <div className="form-group">
          <input className="form-control" type="text" name="name" placeholder="Full Name" required  />
        </div>
        <div className="form-group">
          <input className="form-control" type="email" name="email" placeholder="Email Address" required  />
        </div>
        <div className="form-group">
          <input className="form-control" type="password" name="password" placeholder="Password" required />
        </div>
        <div className="form-group">
          <input className="form-control" type="password" name="cpassword" placeholder="Confirm password" required />
        </div>
        <div className="form-group">
          <input className="form-control button" type="submit" name="signup" defaultValue="Signup" />
        </div>
        <div className="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
      </form>
    </div>
  </div>
</div>

            </div>
        );
    }
}

export default signup;