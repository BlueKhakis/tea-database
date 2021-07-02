import React from 'react';

export default function App() {
    
    return (
        <nav>

            <Logo/>
                {/* I prepare <logo/> if we would make logo JS magic ready just in case (not component) */}
            
            
            <Teas/>
                {/* Display teas */}
           

            <Countries/>
                {/* Display countries by regions */}
            

            <Top-Rated/>
                {/* Display top-rated teas */}
            

            <Search/>
                {/* Search bar */}
            

            <User/>
                {/* Dropdown menu with full users functional options */}
            

        </nav>
    )
}