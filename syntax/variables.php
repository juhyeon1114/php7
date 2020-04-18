<?php

$msg = 'hello world';

echo 'the message is $msg';
echo "<br>";
echo "the message is $msg";
echo "<br>";

// Here Doc
echo <<<HTML
<html>
    <body>
        <div>$msg</div>
    </body>
</html>
HTML;

// Here Doc
echo <<<'HTML'
<html>
    <body>
        <div>$msg</div>
    </body>
</html>
HTML;

unset($msg);
echo $msg;

$varName = 'hello';
$$varName = 'world';
$$$varName = 'world';

echo $world;