import React from 'react'
import ReactDom from 'react-dom'
import Searchbar from './Searchbar'


ReactDom.render(
    <React.StrictMode>
        <Searchbar />
    </React.StrictMode>,
    document.getElementById('search')
);