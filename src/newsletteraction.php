<!DOCTYPE html>
<html>

<head>
    <title>Bendegúz babatermék kereső</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include '../src/header.php'; ?>
    <div class="container mt-3">
        <div class="mx-auto">Sikeresen feliratkoztál hírlevelünkre az alábbi email címmel: <?php echo $_POST["email"]; ?></div>
    </div>
    <?php include '../src/footer.php'; ?>
</body>

</html>