
// =========================Remover Letras===================================== //
const removeLetters = document.querySelectorAll(".notLetters");

removeLetters.forEach(element => element.addEventListener("keyup", ()=> {
    var regexp =  /[^0-9\s]/g;
    const string = element.value;
    if(element.value.match(regexp))
        element.value = string.slice(0, -1);
}));

removeLetters.forEach(element => element.addEventListener("cut", ()=> {
    event.preventDefault(); 
}));

removeLetters.forEach(element => element.addEventListener("copy", ()=> {
    event.preventDefault(); 
}));

removeLetters.forEach(element => element.addEventListener("paste", ()=> {
    event.preventDefault(); 
}));

// =========================Remover Números===================================== //
const removeNumbers = document.querySelectorAll(".notNumbers");

removeNumbers.forEach(element => element.addEventListener("keyup", ()=> {
   var regexp =  /[^a-zA-ZÁ-ú\s]/g;
   const string = element.value;
   if(element.value.match(regexp))
       element.value = string.slice(0, -1);

}));

removeNumbers.forEach(element => element.addEventListener("cut", ()=> {
    event.preventDefault(); 
}));

removeNumbers.forEach(element => element.addEventListener("copy", ()=> {
    event.preventDefault(); 
}));

removeNumbers.forEach(element => element.addEventListener("paste", ()=> {
    event.preventDefault(); 
}));


// =========================Inputs Genéricos===================================== //
const blockInputDate = document.querySelectorAll(".dateInput");

blockInputDate.forEach(element => element.addEventListener("keydown", ()=> {
    event.preventDefault(); 
}));

blockInputDate.forEach(element => element.addEventListener("click", ()=> {
    element.showPicker();
}));

// =========================Inputs Requisitados===================================== //
const inputRequired = document.querySelectorAll(".required");

inputRequired.forEach(element => /*element.addEventListener("keydown", ()=> {
    event.preventDefault(); 
})*/
        );

