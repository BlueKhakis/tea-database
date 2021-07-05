import React from 'react'
import ReactDom from 'react-dom'
import Search from './Search'
ReactDom.render(
    <React.StrictMode>
        <h1>Hello World I am from React World</h1>
        <Search />
    </React.StrictMode>,
    document.getElementById('root')
)