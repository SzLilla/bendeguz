<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>/src/index.php"><img class="headerlogo" src="<?php echo BASE_URL; ?>/public/images/logo2.png" alt="logo"
                        style="width:80px;"></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Keresés">
                    <button class="btn btn-primary" type="button">Keresés</button>
                </form>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Termékek</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mosható pelenka</a></li>
                            <li><a class="dropdown-item" href="#">Hordozó kendő</a></li>
                            <li><a class="dropdown-item" href="#">Babaszoba</a></li>
                            <li><a class="dropdown-item" href="#">Babaápolás</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>/src/informacio-partnereknek.php">Információ partnereknek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>/src/kapcsolat.php">Kapcsolat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>