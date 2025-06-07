/*function color(){
    document.body.style.backgroundColor = 'black';
    document.body.style.color='white';
}*/
var color = true; 

function Color() {

    if (color) {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
    } else {
        document.body.style.backgroundColor = '';
        document.body.style.color = '';
    }
    color = !color; // عكس حالة اللون
}

function addComment() {
    var comTable = document.getElementById("comtable");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var comment = document.getElementById("comment");

    var commentRow = document.createElement("tr");
    var fnameCell = document.createElement("td");
    var lnameCell = document.createElement("td");
    var commentCell = document.createElement("td");

    fnameCell.innerHTML = fname.value;
    lnameCell.innerHTML = lname.value;
    commentCell.innerHTML = comment.value;

    commentRow.appendChild(fnameCell);
    commentRow.appendChild(lnameCell);
    commentRow.appendChild(commentCell);

    comTable.appendChild(commentRow);

    fname.value = "";
    lname.value = "";
    comment.value = "";
}