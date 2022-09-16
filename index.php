<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<p> hello php</p>

<?php

$data = file_get_contents("info.json");
$data = json_decode($data);

for ($i=0; $i<count($data); $i++) {
echo ' <form action="requset.php" method="post">
  <br><img style="height: 50px;width: 50px" src="image/' . $data[$i]->image . '"><p>ชื่อหนัง' . $data[0]->name . '</p><p>ตั้งเเต่' . $data[$i]->old . '</p><p>เลข' . $data[$i]->pass . '<br><button name="x' . $i . '">รายละเอียด</button></form><p>------</p><br>';
}

?>

</body>
</html>
