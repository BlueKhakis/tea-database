import React, { useEffect, useState } from 'react';
import Review from './Review.jsx';

export default function Reviews() {


    const [reviews, setReviews] = useState();
    const [refr, setRefr] = useState(false);

    async function getReviews(){
        let user_reviews = await JSON.parse(window.user_reviews);
        setReviews(user_reviews);
    }
  
    useEffect(() => {
        getReviews();
    }, [refr]);


    return (
            <ul className="react__reviews__ul">
                { !reviews ? <p>loading reviews...</p> : 
                reviews.map((element, i) => (
                    
                        <Review key={i} data={element} i={i} setRefr={setRefr} refr={refr} />   
                
                ))
                }
            </ul>
        )
}
