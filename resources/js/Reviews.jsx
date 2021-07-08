import React, { useEffect, useState } from 'react';

export default function Search(props) {
    console.log(props.data);
    const [reviews, setReviews] = useState();

    async function fetchReviews ()
    {
        const results = await fetch(`show/${encodeURIComponent(props.id)}`, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            }
        });

        const data = await results.json();
        console.log(data);
        console.log(`/show/${props.id}`);
        setReviews(data);
    }

    useEffect(()=> { 
        fetchReviews(23)
    },[])

    return (
            <ul>
                { reviews ? console.log(reviews) : console.log('no reviews')}
                <li>hello from react</li>
            </ul>
        )
}