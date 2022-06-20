<?php

require_once "import-14.php";

// *** Kode : Alias ***
    use Data\Satu\Konflik as Perang1;
    use Data\Dua\Konflik as Perang2;
    use function Helper\HelpMe as Tolong;
    use const Helper\APPLICATION as APP;

    $konflik1 = new Perang1();
    $konflik2 = new Perang2();

    Tolong();

    echo APP . PHP_EOL;
?>