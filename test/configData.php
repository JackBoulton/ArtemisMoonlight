<?php
   define("DB_SERVER", "localhost");
   define("DB_USERNAME", "fcRoster");
   define("DB_PASSWORD", "yt3MTu^TVy5H");
   define("DB_DATABASE", "ArteMoonTest");
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>