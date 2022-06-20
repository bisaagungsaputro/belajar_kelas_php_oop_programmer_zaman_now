<?php

require "import-14.php";

// *** Kode : Group Use Declaration ***
    use Data\Tiga\{Konflik as Perang1, Dummy as Perang2, Sample as Perang3};
    use function Helper\{HelpMe as Tolong};
    use const Helper\{APPLICATION as APP};

    $konflik1 = new Perang1();
    $konflik2 = new Perang2();
    $konflik3 = new Perang3();

    tolong();

    echo APP . PHP_EOL;

?>