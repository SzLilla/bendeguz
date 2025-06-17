<!DOCTYPE html>
<html>

<head>
    <?php include "./commonheader.php"; ?>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <?php include "./header.php"; ?>
        <?php include "./connect.php"; ?>
        <?php include "./getcategories.php"; ?>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <img src="/public/images/hamarosan.jpg" class="card-img-top" alt="Hamarosan"
                                    style="height: 300px; object-fit: cover;">
                                <div class="card-img-overlay text-center text-white"  style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                    <h1 class="card-title">Hamarosan</h1>
                                    <div class="card-body">
                                        <p class="card-text">Új kategóriák érkeznek!</p>
                                    </div>;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-md-3 mb-4">';
                                echo '  <div class="card">';
                                echo '    <img src="' . htmlspecialchars($row["img_url"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["name"]) . '">';
                                echo '    <div class="card-body">';
                                echo '      <h5 class="card-title">' . htmlspecialchars($row["name"]) . '</h5>';
                                echo '      <a href="category.php?id=' . htmlspecialchars($row["id"]) . '" class="btn btn-primary">Tovább</a>';
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
                <div class="col-4 p-3 bg-light"></div>
            </div>
        </div>

        <?php include './footer.php'; ?>
    </div>

</body>

</html>