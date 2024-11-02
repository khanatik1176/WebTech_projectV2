<?php
require_once('dbModel.php');

// adding career information
function addCareer($jobtitle, $jobDes, $postdate, $endDate)
{
    $con = getConnection(); // unique id generation 
    $query_id = "Select * from careerpanel order by careerID desc limit 1";
    $result_id = mysqli_query($con, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $old_id = $row_id["careerID"];
    if ($old_id == "") {
        $new_unique_id = "JOB";
    } else {
        $new_unique_id = substr($old_id, 3);
        $new_unique_id = intval($new_unique_id);
        $new_unique_id = "JOB" . ($new_unique_id + 1);
    }

    // Query for creating Member 
    $sql = " insert into careerpanel values ( '{$new_unique_id}','{$jobtitle}','{$jobDes}','{$postdate}','{$endDate}')";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
        echo "Job Added SuccessFully";
        header("location: ../view/admindashboard.php");
        exit;
    } else {
        echo "User can not created";
    }
}

function getAllCarrer()
{
    $con = getConnection();
    $sql = "select * from careerpanel;";
    $result = mysqli_query($con, $sql);
    $career = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($career, $row);

    }
    return $career;
}

function deleteCareer($careerID){
    $con = getConnection();
    $sql = "DELETE FROM `careerpanel` WHERE `careerID` = '{$careerID}';";
    $result = mysqli_query($con, $sql);
}

//fetch career
function fetchCareer($careerID){
    $con = getConnection();
    $sql = "SELECT `careerID`, `jobTittle`, `jobDescription`, `postingDate`, `endingDate` FROM `careerpanel` WHERE `careerID` = '{$careerID}';";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['careerID'] = $data['careerID'];
    $_SESSION['jobTittle'] = $data['jobTittle'];
    $_SESSION['jobDescription'] = $data['jobDescription'];
    $_SESSION['postingDate'] = $data['postingDate'];
    $_SESSION['endingDate'] = $data['endingDate'];
    return $data;
}

//update career
function updateCareer($careerID, $jobtitle, $jobDes, $postdate, $endDate){
    $con = getConnection();
    $sql = "UPDATE `careerpanel` SET `jobTittle`='{$jobtitle}',`jobDescription`='{$jobDes}',`postingDate`='{$postdate}',`endingDate`='{$endDate}' WHERE `careerID` = '{$careerID}';";
    $result = mysqli_query($con, $sql);
}

//fetch faq
function fetchFAQ(){
    $con = getConnection();
    $sql = "SELECT * FROM `faqmanagement` WHERE 1;";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $data = json_encode($data);

    echo $data;
}

//get faq Answer
function faqAns($id){
    $con = getConnection();
    $sql = "SELECT `id`, `qust`, `ans` FROM `faqmanagement` WHERE `id` = " . $id . ";";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['ans'] = $data['ans'];

    return $data;
}

//get user address for invoice
function getUserAddress(){
    $con = getConnection();
    $email = $_SESSION['email'];
    $sql = "SELECT `UserAdress` FROM `usermanagement` WHERE `UserEmail` = '{$email}';";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    // $data = $data['UserAdress'];
    $data = json_encode($data);
    echo $data;
}


//parcel search or deliveryman   
function parcelSearch($search){
    $con = getConnection();
    $sql1 = "SELECT `percelID`, `senderName`, `parcelName`, `percelType`, `percelFrom`, `percelTo`, `date`, `rname`, `rnumber` FROM `percelmanagement` WHERE `percelID` = '$search'";
    $sql2 = "SELECT `DeliverymanID`, `DeliverymanName`, `DeliverymanEmail`, `DeliverymanGender`, `DeliverymanDOB`, `DeliverymanPhoneNo`, `DeliverymanNIDNo`, `DeliverymanVehicle`, `DeliverymanAddress`, `DeliverymanPassword`, `DeliverymanRole` FROM `deliverymanmanagement` WHERE `DeliverymanID` = '$search'";
    
    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);

    if($result = mysqli_fetch_assoc($result1)){
        $_SESSION['percelID'] = $result['percelID'];
        $_SESSION['senderName'] = $result['senderName'];
        $_SESSION['parcelName'] = $result['parcelName'];
        $_SESSION['percelType'] = $result['percelType'];
        $_SESSION['percelFrom'] = $result['percelFrom'];
        $_SESSION['percelTo'] = $result['percelTo'];
        $_SESSION['date'] = $result['date'];
        $_SESSION['rname'] = $result['rname'];
        $_SESSION['rnumber'] = $result['rnumber'];

        return $result;
    } else if($result = mysqli_fetch_assoc($result2)){
        $_SESSION['DeliverymanID'] = $result['DeliverymanID'];
        $_SESSION['DeliverymanName'] = $result['DeliverymanName'];
        $_SESSION['DeliverymanEmail'] = $result['DeliverymanEmail'];
        $_SESSION['DeliverymanGender'] = $result['DeliverymanGender'];
        $_SESSION['DeliverymanDOB'] = $result['DeliverymanDOB'];
        $_SESSION['DeliverymanPhoneNo'] = $result['DeliverymanPhoneNo'];
        $_SESSION['DeliverymanNIDNo'] = $result['DeliverymanNIDNo'];
        $_SESSION['DeliverymanVehicle'] = $result['DeliverymanVehicle'];
        $_SESSION['DeliverymanAddress'] = $result['DeliverymanAddress'];
        $_SESSION['DeliverymanRole'] = $result['DeliverymanRole'];

        return $result;
    } else {
        $result = 'No data found';
        return $result;
    }
}

?>