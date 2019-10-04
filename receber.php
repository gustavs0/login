<?php
# Back-end

echo "\n<pre>\n";
echo "$_GET";
echo "\n<pre>\n";

if($_GET('idade')<18){
    echo '<h1 style="color:red;"> Não pode beber na festa</h1>';
}else{
    echo '<h1 style="color:green;"> Bebe pouco fii,
    a vida continua!</h1>';
}
