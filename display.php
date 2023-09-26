<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <title>Sub-Form</title>
</head>

<body>

    <div class="disBody py-4 min-vh-100 ">
        <h1 class="text-center  mb-4">Information Page</h1>

        <div class="container p-3 rounded disCont">
            <h1 class="  ">
                <?php
                if (isset($_GET["gender"]) === "male") {
                    echo "Hello Mr : <span class='text-primary'> " . (isset($_GET["fname"]) ? $_GET["fname"] : "") . " " . (isset($_GET["lname"]) ? $_GET["lname"] : "") .  " " . (isset($_GET["uname"]) ? $_GET["uname"] : "") . "</span>";
                } else {
                    echo "Hello MS : <span class='text-success'> " . (isset($_GET["fname"]) ? $_GET["fname"] : "") . " " . (isset($_GET["lname"]) ? $_GET["lname"] : "") .  " " . (isset($_GET["uname"]) ? $_GET["uname"] : "") . "</span>";
                }
                ?>
            </h1>
            <h1 class="text-center">Your Details </h1>

            <h1>
                <?php echo "Your Name : <span class='text-danger'> " . (isset($_GET["fname"]) ? $_GET["fname"] : "") . "</span>"; ?>
            </h1>

            <h1>
                <?php echo "Your Address : <span class='text-danger'> " . (isset($_GET["address"]) ? $_GET["address"] : "") . "</span>"; ?>
            </h1>

            <h1>
                <?php echo "Your Skills : <ul class='text-danger'> ";
                if (isset($_GET["skill"])) {
                    foreach ($_GET["skill"] as $key => $value) {
                        echo "<li class='ms-5'>  $value  </li>";
                    }
                }
                echo "</ul>";
                ?>
            </h1>

            <h1>
                <?php echo "Your Department : <span class='text-danger'> " . $_GET["dept"] . "</span>"; ?>
            </h1>
        </div>


    </div>


</body>

</html>