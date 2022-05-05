import React from "react";
import {Link, useNavigate} from "react-router-dom";
function Menu() {
    const navigation = useNavigate()

    function Logout(){
        localStorage.clear();
        navigation("/")

    }


    return (
        <div className="navigation">
            <ul>{
                    localStorage.getItem('user-info') ?
                    <>
                    <li className="list " >
                        <Link to="/">
                            <span className="icon"><ion-icon name="list-outline"></ion-icon></span>
                            <span className="title">План публікацій</span>
                        </Link>
                    </li>
                    <li className="list ">
                        <Link to="/addAuthor">
                            <span className="icon"><ion-icon name="add-outline"></ion-icon></span>
                            <span className="title">Додання нового автора</span>
                        </Link>
                    </li>
                    <li className="list">
                        <Link to="/addArticle">
                            <span className="icon"><ion-icon name="add-outline"></ion-icon></span>
                            <span className="title">Додання нової публікації</span>
                        </Link>
                    </li>
                    <li className="list">
                        <Link to="/searchAuthor">
                            <span className="icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span className="title">Пошук запису у БД за параметром</span>
                        </Link>
                    </li>
                    <li className="list">
                        <Link to="/analyse">
                        <span className="icon"><ion-icon name="analytics-outline"></ion-icon></span>
                        <span className="title">Аналіз публікацій</span>
                    </Link>
                    </li>
                    <li className="list" onClick={Logout}>
                        <Link  to="/">
                            <span className="icon"><ion-icon name="log-in-outline"></ion-icon></span>
                            <span className="title" >Вихід</span>
                        </Link>
                    </li>
                    </>
                    :
                    <>
                    <li className="list " >
                        <Link to="/">
                            <span className="icon"><ion-icon name="list-outline"></ion-icon></span>
                            <span className="title">План публікацій</span>
                        </Link>
                    </li>
                    <li className="list">
                        <Link to="/searchAuthor">
                            <span className="icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span className="title">Пошук запису у БД за параметром</span>
                        </Link>
                    </li>
                    <li className="list">
                        <Link to="/analyse">
                        <span className="icon"><ion-icon name="analytics-outline"></ion-icon></span>
                        <span className="title">Аналіз публікацій</span>
                    </Link>
                    </li>
                    <li className="list">
                        <Link to="/login">
                            <span className="icon"><ion-icon name="log-in-outline"></ion-icon></span>
                            <span className="title">Вхід</span>
                        </Link>
                    </li>
                    </>

                
                }
                

                


            </ul>
        </div>
    );
};

export default Menu;