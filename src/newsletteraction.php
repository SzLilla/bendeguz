<!DOCTYPE html>
<html>

<head>
    <?php include '../src/commonheader.php'; ?>
</head>

<body>
    <?php include '../src/header.php'; ?>
    <?php include 'connect.php'; ?>

    <?php
    $useremail = $_POST["email"];
    $dateOfSignUp = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `newsletter` (`emailadress`) VALUES ('$useremail')";
    $result = $conn->query($sql);
    $suceeded = $result == true ? "OK" : "NOK";

    echo $result == true ? "Sikeresen feliratkoztál hírlevelünkre az alábbi email címmel: " .
        $useremail : "Sajnálom, nem sikerült a feliratkozás.";


    $conn->close();
    ?>

    <?php include '../src/footer.php'; ?>
</body>

</html>