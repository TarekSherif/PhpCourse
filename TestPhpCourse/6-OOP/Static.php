<html>
    <head>
        <title>Static</title>
    </head>
    <body>
<?php
function Sum(){
    static $data=0;
    $data++;
    return $data;
}


echo Sum();
?>        
    </body>

</html>