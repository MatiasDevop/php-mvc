
const buttons = document.querySelectorAll(".bdelete");
buttons.forEach(btns => {
   
    btns.addEventListener("click", function(){
        // console.log('hiiiii');
        const matricula=this.dataset.matricula;
        //console.log(matricula);
        // dialog confirmation....
        const confirm = window.confirm('do you wish delete to student???'+matricula);
        if(confirm){
            //requested AJAX
            httpRequest("http://localhost/php_mvc/consult/deleteStudent/"+matricula, function(){
                //console.log(this.responseText);//responseText is a object from my http
                document.querySelector("#res").innerHTML = this.responseText;
                const tbody = document.querySelector("#tbody-students");//father
                const row = document.querySelector('#fila-'+matricula);// child
                tbody.removeChild(row);//here remove all row or only row to delete action so the page not onload all.
            });
        }
    });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open('GET', url);
    http.send();
    // here get httresponse text
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}