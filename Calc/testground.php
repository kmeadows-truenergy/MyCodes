function ColChanger() {
   var x = document.getElementById("TableList").value; 
   document.getElementById("demo").innerHTML = x;
}

function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "pull.php?q=" + str, true);
        xmlhttp.send();
    }
}

function showHint2(strrq) {

    if (strrq.length == 0) { 
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
            }
        };
		var TLV = TableList.value + "X";
		strrq = TLV + strrq;
        xmlhttp.open("GET", "pull2.php?q=" + strrq, true);
        xmlhttp.send();
		
    }
	
}