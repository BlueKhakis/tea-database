import React, { useEffect, useState } from 'react';
import Review from './Review.jsx';

export default function Search(props) {


    const [reviews, setReviews] = useState();

    async function getReviews(){
        console.log(window.user_reviews);
        let user_reviews = await JSON.parse(window.user_reviews);
        console.log(user_reviews);
        setReviews(user_reviews);
    }
  
    useEffect(() => {
        getReviews();
    }, []);


    return (
            <ul className="react__reviews__ul">
                { !reviews ? <p>loading reviews...</p> : 
                reviews.map((element, i) => (
                    <li className="react__reviews__li" key={i}>
                        {/* {console.log(element)} */}
                        <Review  data={element} i={i}/> 

                    </li>
                ))
                }
            </ul>
        )
}
