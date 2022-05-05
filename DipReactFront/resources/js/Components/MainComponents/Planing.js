import React , {useEffect, useState} from "react"
import { renderMatches } from "react-router-dom";
import Menu from '../Menu'
import Helper from "../SubComponents/Helper"

const API_SERVICE_URL = "http://127.0.0.1:8000/api/planing";




function Planing() {
    const [yearOption, setOption] = useState(new Map())
    const [yearChecked, setYearChecked] = useState("")
    

    let yearOptions = [];
    let plans = [];
    let start_year_array = "";
    let end_year_array = "";

    const handleHidden = e =>{
        const value = e.target.value;
        const option = e.target.option;
        setOption(yearOption.set(option, value))
    }


    
    async function fetchingUserAsync(){
        let result = await fetch(API_SERVICE_URL, {
            method : "GET",
            headers : {
                "Content-Type" : "application/json",
                "Accept" : "application/json"
            }
        })
        result = await result.json()
        plans = result["plans"]
        start_year_array = result["start_year_array"];
        end_year_array = result["end_year_array"];
        console.log( start_year_array, end_year_array);
        for(let i = 0; i < start_year_array.length; i++){
            yearOptions.push({ "option" : start_year_array[i]["year_start"],
                            "value" : start_year_array[i]["year_start"] + " - " + end_year_array[i]["year_end"]})
            handleHidden={}
        }
        setYearChecked(result["year_checked"])
        console.log(yearOptions)
        

    };


    

    useEffect(() =>{
        document.title = `Планування`
        fetchingUserAsync()

        window.addEventListener('load', function(){console.log('+')})
    });

    
    return (
        <>
        <Menu/>
        <div className="wraper_add">
            <Helper/>
            <div class="loc_title">Планування</div>
            <div class="place">
                <div class="input_table">
                    <div class="table_form">
                        <div class="planning_header">
                            <select>
                                {yearOptions.map((option) => (
                                    <option value={option.option}>{option.value}</option>
                                ))}

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button onClick={fetchingUserAsync} className="btn btn-primary">Fetch</button>

            
        </div>
        </>

    )

    




}

export default Planing;