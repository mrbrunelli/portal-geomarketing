<?php
function fnQuery($sql)
{
    include './conexao.php';
    $query = mysqli_query($link, $sql);

    $arr = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $arr[] = $row;
    }

    return $arr;
}
