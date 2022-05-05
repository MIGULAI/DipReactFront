import React from "react"

function Selector(options, yearChecked){
    return(
        <>
            <select  name="year_selector" id="">
            {options.map((option) => (
              <option value={option.option}>{option.value}</option>
            ))}  
            </select>
        </>
    )
}

export default Selector;