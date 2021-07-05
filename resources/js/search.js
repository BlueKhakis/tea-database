import React from 'react'
import ReactDom from 'react-dom'
ReactDom.render(
    <React.StrictMode>
        <div className="search-box">
            <button className="btn-search"><i className="fas fa-search"></i></button>
            <input type="text" className="input-search" placeholder="Search your Tea.." />
        </div>

    </React.StrictMode>,
    document.getElementById('search')
)