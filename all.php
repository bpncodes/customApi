<?php

$username = 'bipin';
$servername = 'localhost';
$password = 'Bipin@123';
$dbname = 'amazing_information';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE Countries (
    Id INT NOT NULL AUTO_INCREMENT,
    ISO VARCHAR(2) NOT NULL,
    ISO3 VARCHAR(3) NOT NULL,
    ISONumeric INT NOT NULL,
    CountryName VARCHAR(64) NOT NULL,
    Capital VARCHAR(64) NOT NULL,
    ContinentCode VARCHAR(2) NOT NULL,
    CurrencyCode VARCHAR(3) NOT NULL,
    PRIMARY KEY(Id)
)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table Advtable created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

$sql = "INSERT INTO Countries
(ISO, ISO3, ISONumeric, CountryName, Capital, ContinentCode, CurrencyCode)
VALUES
('AU', 'AUS', 36, 'Australia', 'Canberra', 'OC', 'AUD'),
('DE', 'DEU', 276, 'Germany', 'Berlin', 'EU', 'EUR'),
('IN', 'IND', 356, 'India', 'New Delhi', 'AS', 'INR'),
('LA', 'LAO', 418, 'Laos', 'Vientiane', 'AS', 'LAK'),
('US', 'USA', 840, 'United States', 'Washington', 'NA', 'USD'),
('ZW', 'ZWE', 716, 'Zimbabwe', 'Harare', 'AF', 'ZWL')";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>