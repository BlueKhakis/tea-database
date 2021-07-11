import React from 'react'
import ReactDom from 'react-dom'
import Reviews from './Reviews.jsx'

const reviewsData = window.reactReviewsData || {};

ReactDom.render(
    <React.StrictMode>
        <Reviews data={reviewsData}/>
    </React.StrictMode>,
    document.getElementById('react__reviews')
)