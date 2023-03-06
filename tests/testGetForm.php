<?php

echo "1 echo";

include "../modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

echo "ok";

var_dump(getBiens($lepdo, 1, 2));