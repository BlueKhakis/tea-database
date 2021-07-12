import React, { useEffect, useState } from 'react';


export default function Review(props) 
{
    const [clicked, setClicked] = useState(false);
    const [{ text, rating, tea, id }, setValues] = useState({
    text: [props.data.text],
    rating: [props.data.rating],
    id: [props.data.id],
    tea: [props.data.tea_id] 
    })
// console.log(props.data.id);
    function handleClick(event){
        event.preventDefault();
        setClicked(true);
        }
    const handleSubmission = async (event) =>  {
        setClicked(!clicked);
        // console.log(rating, text);
        event.preventDefault();

        await fetch(`/review/${props.data.id}/update`, {
            method: 'POST',
            body: JSON.stringify({ rating, text, id, tea }),
            headers: {
                        Accept: 'application/json',
                            'Content-type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                     }
                }
            );
        }

     const handleChange = (event) => {
        const new_values = ['text', 'rating'],
        name = event.target.name,
        value = event.target.value
        if (-1 !==  new_values.indexOf(name)) {
            setValues((prev_values) => {
        return { ...prev_values, [name]: value }
      })
    }
  }



    return( <>
                { !clicked 
                    ? 
                        <>
                            {text}
                            <button onClick={ handleClick }>Edit</button>
                            {console.log(clicked)}
                            {/* {console.log('/review/'${props.data.id}'/edit')} */}
                        </>
                    :   <>
                            <form onSubmit={ handleSubmission } action={`http://localhost:3000/review/${props.data.id}/update`} method="post">
                            {/* <form action={ action('ReviewController@update') } method="post"> */}
                                <div>
                                    <label htmlFor="text">Text</label>
                                    <input name="text" type="text" onChange={handleChange} defaultValue={text}/>
                                </div>
                                <div>
                                    <label htmlFor="rating">Rating</label>
                                    <input name="rating" type="number" onChange={handleChange} defaultValue={rating}/>
                                </div>
                                <button>click</button>
                                {/* <input type="submit" value="update pls"></input> */}
                            </form>
                        </>
                        // (
                        //     <form action={action('ReviewController@update', $review->id)} method="post">
                        //             @csrf
                        //             @method('PUT')
                        //             <div>
                        //                 <label htmlFor="">Text</label>
                        //                 <input type="text" name="text" value="{{$review->text}}">
                        //             </div>
                        //             <div>
                        //                 <label htmlFor="">Rating</label>
                        //                 <input type="number" name="rating" value={{$review->rating}}>
                        //             </div>

                        //             <input type="submit" value="update pls">
                        //     </form>
                        // )
                }
            </>
        );
}