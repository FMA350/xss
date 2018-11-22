function load_comments(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        print("your browser is too old.")
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById("comments").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","server.php?q=load_comments",true);
    xmlhttp.send();
}
