import React, { useEffect, useState } from 'react';
import Review from './Review.jsx';

export default function Search(props) {


    const [reviews, setReviews] = useState();

    async function getReviews(){
        let user_reviews = await JSON.parse(window.user_reviews);
        console.log(user_reviews);
        setReviews(user_reviews);
    }
  
    useEffect(() => {
        getReviews();
    }, []);


    return (
            <ul>
                <p>react start</p>
                { !reviews ? <p>loading reviews...</p> : 
                reviews.map((element, i) => (
                    <li key={i}>
                        {/* {console.log(element)} */}
                        <Review  data={element} i={i} refresh={refresh} setRefresh={setRefresh}/> 

                    </li>
                ))
                }

                <p>react end</p>

            </ul>
        )
}
