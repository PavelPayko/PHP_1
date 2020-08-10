<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function save(count, id){
        alert(!);
        // let id = id;
        // let i = count;
        // i++;
        // let str = "count="+i+"&id="+id;
        // alert(i);
        // $.ajax ({
        //     type: "GET",
        //     url: "server.php",
        //     data: str,
        //     sucsess: function(ans){
        //         alert(ans)
        //     }
        // })
    }
</script>

<?php

include "config.php";
$sql = "SELECT * from images";
$res = mysqli_query($connect, $sql);

while($data = mysqli_fetch_assoc($res)){
    // echo $data['path'];
    echo "<a href='".$data['path'].".jpg' target='blank' onclick='save(".$data['count'].", ".$data['id'].")'><img src='".$data['path'].".jpg' width='".$data['size']."'></a><span>".$data['count']."</span>";
}
?>