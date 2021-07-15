import { result } from 'lodash';
import React, { useState } from 'react';

export default function Results(props) {

    function putValue()
    {
        props.setTerm(props.result.name)
    }

    if (!props.result) {

        return (
            <p>No results found :(</p>
        )
    }


    return (
        <div className="result-brand">
            {
                props.result ? (

                    <>
                        <div  className='brand' onClick={putValue} >{props.result.name}</div>

                    </>
                ) :
                    <div>
                        "yolo"
                    </div>
            }
        </div >
    )

    // let bullshit = props.results.map(result => {
    //     if (result.name === props.term) {
    //         return (
    //             <div className="results">
    //                 {

    //                     <div key={result.id} className="result">

    //                         {result.name}
    //                         {console.log(result.name)}


    //                     </div>


    //                 }
    //             </div >
    //         )
    //     }

    // }
    // )

    // return (
    //     <div className="results">
    //         {
    //             props.results.map(result => (
    //                 <div key={result.id} className="result">

    //                     {result.name}


    //                 </div>

    //             ))
    //         }
    //     </div >
    // )



}