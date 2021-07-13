let elems = document.querySelectorAll(".animate__animated");

console.log(elems)

for (let i = 0; i < elems.length; i++) {
    elems[i].addEventListener("mouseover", function( event ) {
      console.log(event.target.classList);
        event.target.classList.add("animate__headShake")
        console.log(event.target.classList);

  // reset the color after a short delay
  setTimeout(function() {
    event.target.classList.remove("animate__headShake");
    console.log(event.target.classList);
  }, 1000);
});
} 

// elements.addEventListener();
