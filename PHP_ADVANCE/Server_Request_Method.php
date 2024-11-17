<?php
//Php $_SERVER['REQUEST_METHOD']
// c=Create->POST_REQUEST
// r=Read->GET_REQUEST
// u=Update->PATCH_REQUEST
// d=Delete->DELETE_REQUEST

if($_SERVER['REQUEST_METHOD']=="GET"){
    echo "This is GET";
}
else if ($_SERVER['REQUEST_METHOD']=="POST") {
    echo "This is POST";
}
else if($_SERVER['REQUEST_METHOD']=="PUT"){
    echo "This is PUT"; 
}
else if($_SERVER['REQUEST_METHOD']=="PATCH"){    
    echo "This is PATCH";
}
else if($_SERVER['REQUEST_METHOD']=="DELETE"){
    echo "This is DELETE";
}
else if($_SERVER['REQUEST_METHOD']=="HEAD"){    
    echo "This is HEAD";
}
else if ($_SERVER['REQUEST_METHOD']=="OPTIONS"){    
    echo "This is OPTIONS";
}


