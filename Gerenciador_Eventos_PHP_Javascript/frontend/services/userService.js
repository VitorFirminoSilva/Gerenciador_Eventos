document.write(unescape("%3Cscript src='../services/requestService.js' type='text/javascript'%3E%3C/script%3E"));

function createUser(){
    
    event.preventDefault();
    /*if(!validateService()){
        return;
    } */

    let body = {
            "object": [{
                "name": document.getElementById("name").value,
                "birthDate": document.getElementById("birthDate").value,
                "CEP": document.getElementById("CEP").value,
                "city": document.getElementById("city").value,
                "UF": document.getElementById("UF").value,
                "address": document.getElementById("address").value,
                "cellphone": document.getElementById("cellphone").value,
                "CPF":  document.getElementById("CPF").value,
                "email": document.getElementById("email").value,
                "password": document.getElementById("password").value,
            }],
            
            "service": "/create"  
    }
    
    //const response = postSerice("../../backend/services/userService.php", body); 
}