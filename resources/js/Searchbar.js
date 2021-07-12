import React, { useEffect, useState } from 'react';
import Results from "./Results";

export default function Search(props) {
    const [term, setTerm] = useState('');
    const [results, setResults] = useState(null);

    const onInputChange = (e) => {
        setTerm(e.target.value);
    }

    const onFormSubmit = (e) => {
        e.preventDefault();
    }

    const doSearch = async (term) => {
        setResults(null);
        if (term === '') return;

        const response = await fetch('/search/' + encodeURIComponent(term), {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            }
        });

        const data = await response.json();

        // console.log(data)
        // console.log(data[0])
        // console.log(data[0].name)
        setResults(data);

    }

    useEffect(() => {
        doSearch(term);
    }, [term])

    return (
        <div>
            <form className="search-form" onSubmit={onFormSubmit}>
                <label htmlFor="">
                    <br />
                    <input
                        type="text"
                        name="s"
                        value={term}
                        onChange={onInputChange}
                        placeholder="Enter term"
                        autoComplete="off"
                    />
                </label>


            </form>
            <div className='results'>
                {
                    results !== null && (
                        results.map((result, index) => (

                            <Results key={index} term={term} result={result} />

                        ))
                    )

                }
            </div>
        </div>
    )
}