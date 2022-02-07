<?

function coin($nbr){

    for($i = 0; $i < $nbr; $i++) {
        if ($i % 2 == 0){
            echo "COIINNN !!\n";
        }else if ($i ^2 == 1) {
            echo "coin.\n";
        }
    }
}