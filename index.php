<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/override-bootstrap.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="./lib/node_modules/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>
<body>
    <!--header avec logo et menu tiré de bootstrap -->
    <header class="container">
        <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/assets/images/logo-checkit.png" alt="logo du site" width="180">
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="btn btn-primary">acceuil</a></li>
                <li><a href="#" class="nav-link px-2">Mes liste</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Se connecter</button>
                <button type="button" class="btn btn-primary">S'inscrire</button>
            </div>
        </nav>
    </header>

    <main class="container">
        <!-- Section Hero -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="./assets/images/logo-checkit.png" class="d-block mx-lg-auto img-fluid" alt="Thèmes Bootstrap" width="500" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Gardez vos listes avec vous !</h1>
                <p class="lead">
                Bienvenue sur CheckIt, votre nouvelle plateforme de création de listes de tâches en ligne. Avec CheckIt, vous pouvez facilement créer des listes de choses à faire pour tous les aspects de votre vie. Que vous planifiez votre prochain voyage, que vous organisiez votre travail ou que vous fassiez des courses, CheckIt vous aide à rester organisé et à suivre vos tâches en toute simplicité.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">s'inscrire</button>
                </div>
            </div>
        </div>
        <!-- Section Cards -->
        <div class="row text-center">
    <h2 class="mb-4">Découvrez les fonctionnalités principales :</h2>

    <!-- Première carte -->
    <div class="col-md-4 mb-4">
        <div class="card w-100">
            <div class="card-header">
                <i class="bi bi-card-checklist" style="font-size: 2rem;"></i>
            </div>
            <div class="card-body">
                <h3 class="card-title">Créer un nombre illimité de listes</h3>
                <a href="#" class="btn btn-primary">S'inscrire</a>
            </div>
        </div>
    </div>

    <!-- Deuxième carte -->
    <div class="col-md-4 mb-4">
        <div class="card w-100">
            <div class="card-header">
                <i class="bi bi-tags-fill" style="font-size: 2rem;"></i>
            </div>
            <div class="card-body">
                <h3 class="card-title">Classer les listes par catégorie</h3>
                <a href="#" class="btn btn-primary">S'inscrire</a>
            </div>
        </div>
    </div>

    <!-- Troisième carte -->
    <div class="col-md-4 mb-4">
        <div class="card w-100">
            <div class="card-header">
                <i class="bi bi-search" style="font-size: 2rem;"></i>
            </div>
            <div class="card-body">
                <h3 class="card-title">Retrouvez facilement vos listes</h3>
                <a href="#" class="btn btn-primary">S'inscrire</a>
            </div>
        </div>
    </div>
</div>
    </main>
    <!-- Footer -->
    <div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="btn btn-primary">Acceuil</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Mes Listes</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2024 Société, Inc.</p>
    </footer>
    </div>
    <!-- Bootstrap JS -->
    <script src="./lib/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
