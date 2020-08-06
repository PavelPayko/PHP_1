<?php
$files = scandir('public/img/small');
// print_r($files);
for($i=2;$i<count($files);$i++):?>
    <a href="server.php?name=<?= $i-1 ?>" target="blank"><img src="public/img/small/<?= $files[$i]?>" alt="" width="100"></a>
    
<?php
    if ((($i-1)%3) == 0){
        echo "<hr>";
    }
    endfor
?>