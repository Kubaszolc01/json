var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200){
        var response = JSON.parse(xhttp.responseText);
        var autorzy = response.autorzy;
        
        var output = '';
        for(var i=0; i<autorzy.length; i++){
            
            // console.log(people[i].name);
            
            output += '<li>'+autorzy[i].imie+' '+autorzy[i].nazwisko+'</li>';
        }

        document.getElementById('autorzy').innerHTML = output;
    }
};
xhttp.open("GET", "lib.json", true);
xhttp.send();