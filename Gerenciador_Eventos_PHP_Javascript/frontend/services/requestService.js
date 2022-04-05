function postSerice(url, body){
    
    console.log("BODY= " + JSON.stringify(body));
    let request = new XMLHttpRequest();
    request.open("POST", url, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.send(JSON.stringify(body));
    
    request.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
           console.log("Response=" + request.responseText);
        }
    }
    return request.responseText;
}

