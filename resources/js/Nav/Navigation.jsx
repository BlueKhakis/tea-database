import { includes } from 'lodash';
import React from 'react';

export default function App() {
    
    return (

    

        <nav>

            <Logo/>
                {/* I prepare <logo/> if we would make logo some magic ready just in case (not component) */}
            
            
            <a href="#" Teas/>
                {/* Display teas */}
           

            <a href="#" Countries/>
                {/* Display countries by regions */}
            

            <a href="#" Top-Rated/>
                {/* Display top-rated teas */}
            

            <Search/>
                {/* Search bar */}
            

            <User/>
                {/* Dropdown menu with full users functional options */}
            

        </nav>
    )
}