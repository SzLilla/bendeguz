<!DOCTYPE html>
<html>

<head>
    <?php include '../commonheader.php'; ?>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <?php include '../header.php'; ?>

        <?php include './connect.php'; ?>

        <?php
        $useremail = $_POST["email"];
        $dateOfSignUp = date("Y-m-d H:i:s");
        // TODO check if already contained
        $sql = "INSERT INTO `newsletter` (`emailadress`) VALUES ('$useremail')";
        $result = $conn->query($sql);
        $suceeded = $result == true ? "OK" : "NOK";

        echo $result == true ? "Sikeresen feliratkoztál hírlevelünkre az alábbi email címmel: " .
            $useremail : "Sajnálom, nem sikerült a feliratkozás.";


        $conn->close();
        ?>
        <?php include '../footer.php'; ?>
    </div>
</body>

</html>