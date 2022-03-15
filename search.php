<?php


//connect to database
$conn =  mysqli_connect('localhost','root','','01 LOGIN DETAILS & PROJECT INFO');

//search
$sql =("SELECT * FROM 'routes' where 'route_cities' LIKE ? AND 'route_dep_date' LIKE ?;);
$results = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($results);


if($resultCheck >0){
    while($row =mysqli_fetch_assoc($results)){
        echo "$row['routes_bus_no']";
        }
        }