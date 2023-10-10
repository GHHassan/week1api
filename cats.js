
 /**
  * this file is to fetch cat pictures from the api 
  */

// A fetch request is used to get data from the Web API. There are different 
// ways to write fetch requests. Below is what you have been taught if you
// did the level 5 Web Programming module. More on fetch later in the module.
﻿fetch("https://api.thecatapi.com/v1/images/search?limit=10")
.then(
    function (response) {
        return response.json();
    })
.then( 
    function (json) {
        console.log(json);
        
        json.forEach(element => {
            document.getElementById('app').innerHTML += "<img src=" + element.url + " alt='catImage'/>";        
        });
    }      
)
.catch(
    function (err) {
        console.log("Something went wrong!", err);
    } 
); 