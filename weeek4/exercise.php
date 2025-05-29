
<?php
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
$users = getUsers();

     for ($i = 0; $i < count($users); $i++) {

            echo "Name: ". $users[$i]["name"] ."<br>";

            echo "Email: <a href='mailto:" . $users[$i]["email"] . "'>" . $users[$i]["email"] . 

            "</a><br>";
            echo "Street: ". $users[$i]["address"]["street"]."<br>";

            echo "City: ". $users[$i]["address"]["city"]."<br>";

        echo
             "<br>";
     }
?>