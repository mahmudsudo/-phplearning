<?php
declare(strict_types=1);
class  HelloWorld{
public $world;

function __construct($world){
    $this->world=$world;
}
function getHtml() : string{
    return "<html><body>".
    "hello, ".$this->world."</body></html>";
}
}
$greet= new HelloWorld("world");
echo $greet->getHtml();
?>