var count = 0;
function add() {
    count += 1;
    if(count <1){
        count = 1;
    }
    document.getElementById('counter').innerHTML = count;
    var variableToSend = count;
    $.post('index.php', {variable: variableToSend});

}
function lower() {
    count -= 1;
    if(count <1){
        count = 1;
    }
    document.getElementById('counter').innerHTML = count;
    var variableToSend = count;
    $.post('index.php', {variable: variableToSend});
    
}

// var xmlhttp = false;

//     try {

//     xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

//     } catch (e) {

//     try {

//     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

//     } catch (E) {

//     xmlhttp = false;

//     }

//     }



//     if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {

//     xmlhttp = new XMLHttpRequest();

//     }

//     var JsVar = count;   // Ini variable Javascriptnya

//     xmlhttp.open("GET","index.php?input=" + JsVar,true);   // ini untuk di pass ke script php nya

//     xmlhttp.onreadystatechange = function() {

//     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {   

//     var Result= xmlhttp.responseText;   

//     }

//     } 

//     xmlhttp.send(null);