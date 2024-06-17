<?php 
require_once('configdb.php');

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}

extract($_POST);

function hasConflict($conn, $venue, $start_datetime, $end_datetime, $id = null) {
    $start = new DateTime($start_datetime);
    $startDate = $start->format('Y-m-d');

    $sql = "SELECT * FROM `schedule_list` 
            WHERE `venue` = ? 
            AND DATE(`start_datetime`) = ?
            AND DATE(`end_datetime`) = ?";

    if ($id) {
        $sql .= " AND `id` != ?";
    }

    $stmt = $conn->prepare($sql);
    if ($id) {
        $stmt->bind_param("sssi", $venue, $startDate, $startDate, $id);
    } else {
        $stmt->bind_param("sss", $venue, $startDate, $startDate);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->num_rows > 0;
}

$allday = isset($allday);

// Set status to 'Pending' for new bookings
$status = 'Pending';

// Mapping enum values to human-readable labels
$venue_labels = [
    'Open Court' => 'Open Court',
    'AVR' => 'AVR',
    'Gym' => 'Gym',
    'Convention' => 'Convention',
    'Ampi-Theater' => 'Ampi-Theater'  // Ensure it matches exactly
];

$venue = isset($venue_labels[$venue]) ? $venue_labels[$venue] : $venue;

// Mapping enum values to human-readable labels
$company_name_labels = [
    'BSIT' => 'BSIT',
    'BSN' => 'BSN',
    'BEED' => 'BEED',
    'BSCRIM' => 'BSCRIM',
    'BSBA' => 'BSA',
    'BSHM' => 'BSHM',
    'BSTM' => 'BSTM',
    'THM' => 'THM',
    'OSA' => 'OSA',
];

$company_name = isset($company_name_labels[$company_name]) ? $company_name_labels[$company_name] : $company_name;

if(empty($id)){
    // Check for conflicts before inserting
    if (hasConflict($conn, $venue, $start_datetime, $end_datetime)) {
        echo "<script> alert('Error: The selected venue is already booked for the chosen date.'); location.replace('calendar.php') </script>";
        $conn->close();
        exit;
    }

    $sql = "INSERT INTO `schedule_list`(`fullname`, `email`, `company_name`, `title`, `venue`, `description`, `start_datetime`, `end_datetime`, `status`) VALUES ('$fullname','$email','$company_name','$title','$venue','$description','$start_datetime','$end_datetime', '$status')";
} else {
    // Check for conflicts before updating
    if (hasConflict($conn, $venue, $start_datetime, $end_datetime, $id)) {
        echo "<script> alert('Error: The selected venue is already booked for the chosen date.'); location.replace('calendar.php') </script>";
        $conn->close();
        exit;
    }

    $sql = "UPDATE `schedule_list` SET `fullname`='$fullname',`email`='$email',`company_name`='$company_name',`title`='$title',`venue`='$venue',`description`='$description',`start_datetime`='$start_datetime',`end_datetime`='$end_datetime', `status`='$status' WHERE `id` = '$id'";
}

$save = $conn->query($sql);

if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('calendar.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}

$conn->close();
?>