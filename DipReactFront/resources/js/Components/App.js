import React from 'react';
import {createRoot} from 'react-dom/client';
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Planing from './MainComponents/Planing';
import AddAuthor from './MainComponents/AddAuthor';
import AddArticle from './MainComponents/AddArticle';
import SearchingDB from './MainComponents/SearchingDB';
import Analyze from './MainComponents/Analyze';
import Login from './Auth/Login';


function App() {
    return (
        <>
        <Routes>
            <Route path="/" element={<Planing /> } />
            <Route path="/addAuthor" element={<AddAuthor /> } />
            <Route path="/addArticle" element={<AddArticle /> } />
            <Route path="/searchAuthor" element={<SearchingDB /> } />
            <Route path="/analyse" element={<Analyze /> } />
            <Route path="/login" element={<Login /> } />
        </Routes>
        </>
    );
}
export default App;
if (document.getElementById('app')) {
    const rootElement = document.getElementById("app");
    const root = createRoot(rootElement);
    root.render(
        <BrowserRouter>
            <App />
        </BrowserRouter>
        );
    }