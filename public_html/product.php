<!DOCTYPE html>
<html>

<head>
    <?php include "./commonheader.php"; ?>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <?php include "./header.php"; ?>
        <?php include "./connect.php"; ?>
        <?php include "./get-product.php"; ?>
        <?php include "./get-product-prices.php"; ?>
        <?php include "./disconnect.php"; ?>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <h2 class="text-center mb-4"><?= htmlspecialchars($name) ?></h2>
                        <div class="col-6">
                            <img src="<?= htmlspecialchars($img_url) ?>" class="img-fluid"
                                alt="<?= htmlspecialchars($name) ?>">
                        </div>
                        <div class="col-6">
                            <h3>Árak</h3>
                            <?php if ($result->num_rows > 0): ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Webshop</th>
                                            <th>Ár</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result_prices->fetch_assoc()): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($row['name']) ?></td>

                                                <!-- TODO currency -->

                                                <td>
                                                    <?php if (!empty($row['discount_price'])): ?>
                                                        <span
                                                            class="text-muted text-decoration-line-through"><?= htmlspecialchars($row['normal_price']) ?>
                                                            Ft</span>
                                                        <span
                                                            class="text-danger ms-2 fw-bold"><?= htmlspecialchars($row['discount_price']) ?>
                                                            Ft</span>
                                                    <?php else: ?>
                                                        <?= htmlspecialchars($row['normal_price']) ?> Ft
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if (!empty($row['url'])): ?>
                                                        <a href="<?= $row['url'] ?>" class="btn btn-sm btn-primary">Részletek</a>
                                                    <?php endif; ?>
                                                </td>

                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p>Nincs elérhető ár.</p>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="row">
                        <!-- <h2 class="text-center mb-4">Termékek</h2> -->

                        <h3>Rövid leírás</h3>
                        <p><?= htmlspecialchars($short_description) ?></p>
                        <h3>Hosszú leírás</h3>
                        <p><?= htmlspecialchars($long_description) ?></p>
                    </div>
                </div>
                <div class="col-4 p-3 bg-dark text-white">...</div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </div>

</body>

</html>