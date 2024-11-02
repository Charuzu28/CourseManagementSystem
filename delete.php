<?php
include_once 'db.php';
$sql = "DELETE FROM students WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Course data deleted');</script>"; 
    echo "<script>window.location.href = 'dashboard.php'</script>";     
  
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>