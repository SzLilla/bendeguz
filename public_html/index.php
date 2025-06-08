<!DOCTYPE html>
<html>

<head>
    <?php include '/commonheader.php'; ?>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <?php include '/header.php'; ?>
        <?php include '/connect.php'; ?>
        <?php include '/getcategories.php'; ?>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-md-3 mb-4">';
                                echo '  <div class="card">';
                                echo '    <img src="' . htmlspecialchars($row["img_url"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["name"]) . '">';
                                echo '    <div class="card-body">';
                                echo '      <h5 class="card-title">' . htmlspecialchars($row["name"]) . '</h5>';
                                echo '      <a href="#" class="btn btn-primary">Tovább</a>';
                                echo '    </div>';
                                echo '  </div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>Nincsenek kategóriák.</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-4 p-3 bg-dark text-white">.col</div>
            </div>
        </div>

        <?php include '/footer.php'; ?>
    </div>

</body>

</html>