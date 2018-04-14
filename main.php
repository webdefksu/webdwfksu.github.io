<?php
if($_POST['pm_id']){
	$id = (int)trim($_POST['pm_id']);
	$modal = "";
	$mysqli = new mysqli("localhost", "root", "", "kursovaya");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $res = $mysqli->query("SELECT Name, (select Name from Compitencies where Id = $id) AS 'PM' from Compitencies where `CGroup` = $id");

    $i = 0;
    while ($row = $res->fetch_assoc()) {
        if ($i == 0) {
            $modal .= "<div class='modal' fade id='pm$id'><div class='modal-dialog modal-lg'><div class='modal-content'><div class='modal-header'>". $row['PM'] ."</div><div class='modal-body'><ul><li>". $row['Name'] ."</li>";
        }
        else{
            $modal .= "<li>". $row['Name'] ."</li>";
        }
        $i++;
    }
    $modal .= "</ul></div></div></div></div>";
    $mysqli->close();
    echo $modal;
}
?>