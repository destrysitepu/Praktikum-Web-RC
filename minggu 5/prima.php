<?php
// bilangan yang akan di cek
for ($i=1; $i <= 50 ; $i++) {     

    $t = 0; 

        // bilangan pembagi
        for ($j=1; $j <= $i ; $j++) {  

            if ($i % $j == 0) {
                $t++;
            }
          
        }

// kondisi bilangan prima
    if ($t == 2) {   
        echo "".$i.",";
    }
}


 ?> 
