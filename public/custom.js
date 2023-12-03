const button = document.querySelector('#submitOrder');

button.addEventListener('click', function(e){
    e.preventDefault();
    const data = new FormData(e.target.closest('form'));
    const url = "/orders";

    fetch(url, {
        method : "POST",
        body: data,
        // -- or --
        // body : JSON.stringify({
            // user : document.getElementById('user').value,
            // ...
        // })
    }).then(
        response => {
            console.log(response);
            return response.text() // .json(), etc.
        }
        // same as function(response) {return response.text();}
    ).then(
        html => {
            let rowtext = JSON.parse(html).html;
            const tr = document.createElement("tr");
            tr.innerHTML = rowtext;
            document.querySelector("tbody").appendChild(tr);
        }
    );


});