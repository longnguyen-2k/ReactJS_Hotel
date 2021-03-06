import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter,  Switch, Route } from 'react-router-dom';
import {BrowserRouter as Router } from 'react-router-dom'
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
import App from './App'
import Catcha from './components/captcha/captcha'
// import Test from './test'
ReactDOM.render(
  <BrowserRouter>
    <React.Suspense fallback={<div>Loading...</div>}>
   <App></App>
     {/* <Catcha></Catcha> */}
    </React.Suspense>
  </BrowserRouter>,
  document.getElementById('root')
);


// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
