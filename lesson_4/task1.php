<?php
$files = scandir('public/img/big');
for($i=2;$i<count($files);$i++):?>
    <a href="public/img/big/<?= $files[$i]?>" target="blank"><img src="public/img/big/<?= $files[$i]?>" alt="" width="100"></a>
    
<?php
    if ((($i-1)%3) == 0){
        echo "<hr>";
    }
    endfor
?>