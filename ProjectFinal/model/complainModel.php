<?php 

require_once('dbModel.php');


function insertReview($name,$comment ) 
{
    $con = getConnection();
    
    $sql_review = "insert into  reviewmanagement values ('{$name}','{$comment}')";
    $result_review= mysqli_query($con, $sql_review);
    
    if($result_review == true)
    {
        return true;
    }
}


function viewComplains($name)
{
    
    $con = getConnection();
    $sql = "select * from reviewmanagement where ReviewerName = '{$name}'";
    $result = mysqli_query($con, $sql);
    $Complains = [];
    while($row = mysqli_fetch_array($result))
    {
        array_push($Complains, $row);
    }
     return $Complains ;
}

function viewAllComplains()
{
    
    $con = getConnection();
    $sql = "select * from reviewmanagement";
    $result = mysqli_query($con, $sql);
    $Complains = [];
    while($row = mysqli_fetch_array($result))
    {
        array_push($Complains, $row);
    }
     return $Complains ;
}

function viewAllComplainsMember()
{
    
    $con = getConnection();
    $sql = "select * from membercomplain";
    $result = mysqli_query($con, $sql);
    $Complains = [];
    while($row = mysqli_fetch_array($result))
    {
        array_push($Complains, $row);
    }
     return $Complains ;
}





?>