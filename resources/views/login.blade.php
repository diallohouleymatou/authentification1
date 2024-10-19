<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
        body {
            background-color: #e9f5ff; /* Couleur de fond douce */
            font-family: Arial, sans-serif; /* Police personnalisée */
        }
        .login-card {
            background-color: #ffffff; /* Couleur blanche pour la carte */
            border-radius: 15px; /* Coins arrondis */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre pour donner de la profondeur */
            padding: 40px; /* Espacement intérieur */
        }
        .card-title {
            font-size: 2rem; /* Taille du titre */
            font-weight: bold; /* Texte en gras */
        }
        .btn-primary {
            background-color: #007bff; /* Couleur bleue */
            border: none; /* Pas de bordure */
            transition: background-color 0.3s ease; /* Effet de transition */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Couleur de survol plus foncée */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-card" style="width: 20rem;">
            <div class="card-body">
                <h1 class="card-title text-center">Connexion</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom Utilisateur</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nom Utilisateur" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit-login">Se connecter</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <a href="/Register" class="text-decoration-none">Pas encore inscrit? S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
