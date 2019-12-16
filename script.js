 window.onload = run

function run() {
    add();
    show()
};  

function add() {
    const saveHoroscope = document.getElementById("saveHoroskops");
    saveHoroscope.onclick = send;
    const updateHoroscope = document.getElementById("updateHoroskops");
    updateHoroscope.onclick = update;
    const deleteHoroscope = document.getElementById("deleteResult");
    deleteHoroscope.onclick = deleteResult;
}; 

function show() {
    let url = "./server/viewHoroscope.php"
    let method = "GET"
    makeRequest(url, method, undefined, function(result){
        document.getElementById("resultText").innerText = result
        
    });
}

function update() {
    let dateOfBirth = document.getElementById("date").value;
    let url = "./server/updateHoroscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", dateOfBirth)
    makeRequest(url, method, formData, function(result){
        if(result == true){
            show();
        } 
            console.log(result);    
}); 
};

function send() {
    let dateOfBirth = document.getElementById("date").value;
    let url = "./server/addHoroscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", dateOfBirth)
    makeRequest(url, method, formData, function(result){
    if(result == true){
            show();
        }
            console.log(result);
}); 
}

function deleteResult() {
    let url = "./server/deleteHoroscope.php"
    let method = "DELETE"
    let formData = new FormData()
    formData.set("date", 0)
    makeRequest(url, method, formData, function(result){
        if(result){
            document.getElementById("resultText").innerText = "Horoskope Radera";
        }else {
            document.getElementById("resultText").innerText = "Horoskope Fortfarande";
               }
            }); 
}

function makeRequest(url, method, formData, callback){
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        callback(result)
    }).catch((err) => {
        console.log("Error : ",err); 
    })
}
