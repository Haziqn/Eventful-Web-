<?php

require 'vendor/autoload.php';
const DEFAULT_URL = 'https://eventful-c4557.firebaseio.com/';
const DEFAULT_TOKEN = 'WltlY0KBygvHgKfoS9kK8GBi8hUveXz1X5dROqWY';
const DEFAULT_PATH = '/EVENT';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
//$firebase = new FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
// --- storing an array ---
//$test = array(
//    "acra" => "valid_acra_only",
//    "address" => "company_site_address",
//    "business_contact_number" => "99999999",
//    "business_site" => "rp.edu.sg",
//    "description" => "this is a description",
//    "email" => "15017523@rp.edu.sg",
//    "password" => "T1234!",
//    "status" => "active",
//    "username" => 15017523
//);

//$firebase->push(DEFAULT_PATH, $test);

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH);
$arrUsers = json_decode($name, true);
?>

<html>
    <head>
        <title>Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min_1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <h3>View Events</h3>
            <!--<button class="btn btn-primary" id="btnAdd">Add</button>-->
            <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <tr><th>Event Title</th><th>Description</th><th>Date</th><th>Organiser</th><th>In-charge</th><th>Image</th><th>Status</th><th>Edit/Delete</th></tr>
                <?php
                $row = "";
                foreach ($arrUsers as $key => $value) {
                    $row .= "<tr><td>" . $value["title"] . "</td><td>" . $value["description"] . "</td><td>" . $value["date"] . "</td><td>" . $value["organiser"] . "</td><td>" . $value["head_chief"] . "</td><td>" . $value["image"] . "</td><td>" . $value["status"] . "</td><td><button>Edit</button><br/><button>Delete</button></td><tr>";
                }
                print_r($row);
                ?>
            </table> 
        </div>

    </body>
</html>