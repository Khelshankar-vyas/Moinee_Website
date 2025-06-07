// let search = document.getElementById('headerSearch');

// search.addEventListener("input", function () {

//     let inputVal = search.value.toLowerCase();
//     console.log('Input event fired!', inputVal);
//     let thumb = document.getElementsByClassName('thumb-info-inner').forEach((element) => {
//         let txt = element[0].firstChild.data;
//         if (txt.includes(inputVal)) {
//             element.style.display = "block";

//         }
//         else {
//             element.style.display = "none";
//         }
//     })
// Array.from(noteCards).forEach(function(element){
//     let cardTxt = element.getElementsByTagName("p")[0].innerText;
//     if(cardTxt.includes(inputVal)){
//         element.style.display = "block";
//     }
//     else{
//         element.style.display = "none";
//     }
//     // console.log(cardTxt);


// });


document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};