<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
    body{background-color: whitesmoke }
    .zaobleni{border: hidden; border-radius: 20px}
    .zadnydekor{text-decoration: none}
</style>

<div class="container bg-white zaobleni">
    <br>

<header class=" zaobleni border-bottom">
    <!-- navbar-expand-md zajistí sendvič pouze na mobilu (<768px), od md výše je menu rozbalené -->
    <nav class="navbar navbar-expand-md navbar-light bg-white container py-3">
        <!-- Logo / Brand -->
        <a href="/" class="navbar-brand d-flex align-items-center text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold">Jan Šefl</span>
        </a>

        <!-- Hamburger tlačítko (zobrazí se pouze na mobilech) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Obsah navigace -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0 gap-md-1">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../../stranky/features.html">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2">Moje oblíbené mody</h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../img/thaumcraft.webp');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Thaumcraft</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em" role="img" aria-label="Duration"><use xlink:href="#calendar3"></use></svg>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../img/advRocketry.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Avanced Rocketry</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em" role="img" aria-label="Location"><use xlink:href="#geo-fill"></use></svg>
                        </li> <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em" role="img" aria-label="Duration"><use xlink:href="#calendar3"></use></svg>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../img/create.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Create</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em" role="img" aria-label="Location"><use xlink:href="#geo-fill"></use></svg>
                        </li>
                        <li class="d-flex align-items-center"> <svg class="bi me-2" width="1em" height="1em" role="img" aria-label="Duration"><use xlink:href="#calendar3"></use></svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="../../img/meatballcraft.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Můj oblíbený modpack</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="https://www.curseforge.com/minecraft/modpacks/meatballcraft"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 zadnydekor" >Curseforge</button></a>
                <a href="https://meatballcraft.miraheze.org/wiki/Main_Page"> <button type="button" class="btn btn-outline-secondary btn-lg px-4">wiki</button></a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2025 Company, Inc</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" aria-label="Bootstrap">
            <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">Features
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">Pricing</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">About</a>
            </li>
        </ul>
    </footer>
</div>
</div>





</body>
</html>