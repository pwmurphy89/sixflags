<?php
	include 'includes/db_connect.php';

  if($_GET['task'] == 'update'){
    $what_to_update = '';
    foreach($_POST as $key=>$value){
      $what_to_update .= $key."='".$value."',";
    }
    $trimmed_update = rtrim($what_to_update, ',');
    $query = 'UPDATE promos
    SET ' . $trimmed_update
    . 'WHERE id = ' . $_GET['id'];
    $updated_result = mysql_query($query);
    header('Location: admin.php?change=update');


  }else if($_GET['task'] == 'insert'){
    $db_columns = '';
    $values = '';
    foreach($_POST as $key=>$value){
      $db_columns .= $key. ',';
      $values .= "'" .$value. "',";
    }
    $trimmed_db = rtrim($db_columns, ',');
    $trimmed_values = rtrim($values, ',');

    $query = 'INSERT INTO promos
    (' .$trimmed_db. ')
    VALUES
    (' .$trimmed_values. ')';

    $added_result = mysql_query($query);
    header('Location: admin.php?change=insert');

  }else if($_GET['task'] == 'delete'){
    $query = 'DELETE FROM promos WHERE id = '.$_GET['id'];
    $delete_result = mysql_query($query);
    header("Location: admin.php?change=delete");
  }
  ?>



