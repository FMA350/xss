<?php
# ?name_of_variable = "value    "
$q=$_GET["q"];


if($q="load_comments"){
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("comments.xml");
    if($xmlDoc){
        $xml_comments=$xmlDoc->getElementsByTagName('comment');
        for($i=0;$i<3;$i++){
            for($i=0;$i<3;$i++){
                echo("<h6> User: </h6>");
                echo($xml_comments->item($i)->childNodes->item(0)->nodeValue);
                echo("<br> Commented: <br>");
                echo($xml_comments->item($i)->childNodes->item(1)->nodeValue);
                echo("<br>");
            }
        }
    }
    else{
        echo("<h2> error while retrieving the comment file!</h2>");
    }
}

else {
    echo("<h2>PHP server error. Unrecognized command.</h2>");
}

?>