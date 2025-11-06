<?php
echo "Counting to 10\n";
for ($i = 0; $i <= 10; $i++) {
    echo "Ahora el numero es: " . $i . "\n";
}

echo "Rocket launch countdown:\n";
for($i = 10; $i > 0; $i--) {
    echo $i . "... ";
    if(1 == $i) {
        echo "Liftoff! :rocket\n";
    }
    sleep(1);
}
