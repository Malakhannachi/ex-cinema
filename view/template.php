<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel = "stylesheet" href = "public/css/style.css" />
<title><?= $titre ?></title>
<head></head>
<body>
    <nav class="uk-navbar-container" uk-navbar>
    </nav>
    <div id="wrapper" class="uk-container uk-container-expand">
    <main>
    <div id="contenu">
        <h1 class="uk-heading-divider">PDO Cinema</h1>
        <h2 class="uk-heading-bullet"><?= $titre ?></h2>
        <?= $contenu ?>
    </div>
    </main>
    </div>
</body>
