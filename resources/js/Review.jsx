import React, { useEffect, useState } from 'react';


export default function Review(props) 
{
    const [clicked, setClicked] = useState(false);
    const [disp, setDisp] = useState('');
    const [{ text, rating, tea, id, votes, likeStatus }, setValues] = useState({
        text: [props.data.text],
        rating: [props.data.rating],
        id: [props.data.id],
        tea: [props.data.tea_id],
            votes: [props.data.votes],
            likeStatus: [props.data.review_user.length ? 1 : 0]
        
    });
    console.log(props.data.review_user)

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

    const handleDelete = async (event) =>  {
        setDisp('hidden');
        if (props.refr === true) {
            props.setRefr(false);
        } else {props.setRefr(true)}
        event.preventDefault();

        await fetch(`/review/${props.data.id}/delete`, {
            method: 'POST',
            body: JSON.stringify({ rating, text, id, tea }),
            headers: {
                        Accept: 'application/json',
                            'Content-type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                     }
                }
            );
            window.location.reload();
        }
// 
    const handleLike = async (event) =>  {
        // setDisp('hidden');
        // if (props.refr === true) {
        //     props.setRefr(false);
        // } else {props.setRefr(true)}
        event.preventDefault();

        const response = await fetch(`/review/${props.data.id}/like`, {
            method: 'POST',
            body: JSON.stringify({ id }),
            headers: {
                Accept: 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
        );
        const data = await response.json();
        setValues({ rating, text, id, tea, votes:data.likes, likeStatus:data.status })
            // window.location.reload();
    }
    
    // }
// 
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
                        <li className={`react__reviews__li  ${disp}`} key={props.i}>
                            <div className="react__reviews__likes">
                                
                                <p className="react__reviews__li__p" >{votes} likes</p>
                            </div>
                            <p className="react__reviews__li__p" >{text}</p>
                            <div className="react__reviews__li__buttons" >
                                  {/* edit form/button */}
                                <button className={`animate__animated react__button`} onClick={ handleClick }> ✏️ </button>
                                  {/* delete form/button */}
                                <form onSubmit={ handleDelete }  method="post">
                                    <button className={`animate__animated react__button`}> ⛔️</button>
                                </form>
                                <form onSubmit={ handleLike }  method="post">
                                    <button className={likeStatus == 0 ? `blue` : `red`}>👍</button>
                                </form>
                            </div>

                            
                        </li>

                    :   <>
                            <form onSubmit={ handleSubmission } className="react__reviews__edit" method="post">
                            {/* <form action={ action('ReviewController@update') } method="post"> */}
                                <div className="react__reviews__edit__text">
                                    <textarea name="text" rows='5' cols='60'  onChange={handleChange} defaultValue={text}/>
                                </div>
                                <div className="react__reviews__edit__rating">
                                    <label htmlFor="rating">Changed your mind about rating? </label>
                                    <input  name="rating" 
                                            type="number" 
                                            onChange={handleChange} 
                                            defaultValue={rating}
                                            className="review__form__fields__rating"/>
                                </div>
                                <button className="react__button__update animate__animated">update</button>
                                {/* <input type="submit" value="update pls"></input> */}
                            </form>
                        </>

                }
            </>
        );
}