function textAreaCheck() {
    let elem = document.getElementById('textarea').value;
    if (elem.indexOf(',') !== -1) {
        elem = elem.replace(',', '.');
        document.getElementById("textarea").value = elem.toString()
    }
    let $readyY = false;
    let $readyR = false;
        if (!isNaN(elem)) {
            let e = Number(elem);
            if (e > 5 || e < -5) {
                document.getElementById("Y").innerText = "Данные не попадают в допустимые пределы"
            } else {
                if(elem !== "") {
                    document.getElementById("Y").innerText = elem;
                    $readyY = true;
                }
            }
        } else {
            document.getElementById("Y").innerText = "Данные некорректны"
        }

    if(document.getElementById("R").innerText === "?"){
        document.getElementById("R").innerText = "?"
    } else {
        $readyR = true
    }
    if($readyY && $readyR) {
        document.getElementById("accept").setAttribute("type", "submit")
    }
}

function set5() {
    document.getElementById("R").innerHTML = '5';
    document.getElementById("button5").style="background-color: lightblue;";
    document.getElementById("button4").style="background-color: lightgrey;";
    document.getElementById("button3").style="background-color: lightgrey;";
    document.getElementById("button2").style="background-color: lightgrey;";
    document.getElementById("button1").style="background-color: lightgrey;"
}

function set4() {
    document.getElementById("R").innerHTML = '4';
    document.getElementById("button4").style="background-color: lightblue;";
    document.getElementById("button5").style="background-color: lightgrey;";
    document.getElementById("button3").style="background-color: lightgrey;";
    document.getElementById("button2").style="background-color: lightgrey;";
    document.getElementById("button1").style="background-color: lightgrey;"

}

function set3() {
    document.getElementById("R").innerHTML = '3';
    document.getElementById("button3").style="background-color: lightblue;";
    document.getElementById("button4").style="background-color: lightgrey;";
    document.getElementById("button5").style="background-color: lightgrey;";
    document.getElementById("button2").style="background-color: lightgrey;";
    document.getElementById("button1").style="background-color: lightgrey;"

}

function set2() {
    document.getElementById("R").innerHTML = '2';
    document.getElementById("button2").style="background-color: lightblue;";
    document.getElementById("button4").style="background-color: lightgrey;";
    document.getElementById("button3").style="background-color: lightgrey;";
    document.getElementById("button5").style="background-color: lightgrey;";
    document.getElementById("button1").style="background-color: lightgrey;"

}

function set1() {
    document.getElementById("R").innerHTML = '1';
    document.getElementById("button1").style="background-color: lightblue;";
    document.getElementById("button4").style="background-color: lightgrey;";
    document.getElementById("button3").style="background-color: lightgrey;";
    document.getElementById("button2").style="background-color: lightgrey;";
    document.getElementById("button5").style="background-color: lightgrey;"

}

function textAreaHandler() {
    let elem = document.getElementById("textarea").value.toString();
    if (elem.indexOf(',') !== -1) {
        elem = elem.replace(',', '.')
    }
    if(isNaN(Number(elem.toString())) || Number(elem.toString()) > 5 || Number(elem.toString()) < -5){
        document.getElementById("textarea").style = "background-color: #ff8282;"
    }else{
        if(document.getElementById("textarea").value !== "") {
            document.getElementById("textarea").style = "background-color: lightblue;"
            document.getElementById("Y").innerText = elem.toString()
        } else {
            document.getElementById("textarea").style = "background-color: lightgrey;"
            document.getElementById("Y").innerText = "?";
        }
    }
}
