<?php
$servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$username = "34aXdfujhGUco7W.root"; // แก้ไขตาม phpMyAdmin ของคุณ
$password = "El3OiraqPv2yRGKz"; // แก้ไขตาม phpMyAdmin ของคุณ
$dbname = "mental_health_assessment";
$ca = "isrgrootx1.pem"
$Port = "4000"

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname ,$ca ,$Port);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
