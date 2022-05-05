import React , {useState, useEffect} from 'react';
import {useNavigate} from 'react-router-dom';
import Menu from '../Menu'
import Error from '../SubComponents/Error';

const API_SERVICE_URL = "http://127.0.0.1:8000/api/login";


function Login() {
    const [email, SetEmail] = useState("")
    const [password, SetPassword] = useState("")
    const [remember, SetRemember] = useState(false)
    const navigation = useNavigate();
    let result = ""
    let childrens = []

    useEffect(()=>{
        if(localStorage.getItem('user-info')){
            navigation("/")
        }
    },[])



    async function LoginUser(){
    let loginItems = {email, password, remember}
    result = await fetch(API_SERVICE_URL,{
        method: "POST",
        body: JSON.stringify(loginItems),
        headers: {
            "Content-Type" : "application/json",
            "Accept" : "application/json"
        }
    })
    result = await result.json()
    if(!result["error"]){
        console.log(result["error"])
        localStorage.setItem("user-info" , JSON.stringify(result))
        navigation("/")

    }
    console.log(result["error"])
//  nead to create error message

    }

    return (
        <>
        <Menu/>
        <div className="wraper_add">
            <div className="place">
            <div className="input_table login_table" >
            <div className="login_form">
                <div className=" ">
                    <div className="card">

                    <div id="error">
                        {childrens}
                    </div>

                    <div className="card-body">
                        
                        
                        <div className="row mb-3">
                            <label htmlFor="email" className="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div className="col-md-6">
                                <input value={email} onChange={(e) => SetEmail(e.target.value)} id="email" type="email" className="form-control" name="email"  required autoComplete="email" autoFocus />
                            </div>
                        </div>

                        <div className="row mb-3">
                            <label htmlFor="password" className="col-md-4 col-form-label text-md-end">Password</label>
                            <div className="col-md-6">
                                <input value={password} onChange={(e) => SetPassword(e.target.value)} id="password" type="password" className="form-control" name="password" required autoComplete="current-password" />

                            </div>
                        </div>

                        <div className="row mb-3">
                            <div className="col-md-6 offset-md-4">
                                <div className="form-check">
                                    <input value={remember} onChange={() => SetRemember(!remember)} className="form-check-input" type="checkbox" name="remember" id="remember" />

                                    <label className="form-check-label" htmlFor="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div className="row mb-0">
                            <div className="col-md-8 offset-md-4">
                                <button onClick={LoginUser} className="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
           
        </div>
        </>

    );
}

export default Login;