<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Success Page</title>
    <style>
        body {
            background-color: #e9f7ef; /* Couleur de fond douce */
            font-family: 'Arial', sans-serif; /* Police personnalisée */
        }
        .success-card {
            background-color: #007bff; /* Couleur bleu */
            color: white; /* Texte blanc */
            border-radius: 15px; /* Coins arrondis */
            padding: 40px; /* Espacement intérieur */
            text-align: center; /* Centrer le texte */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Ombre pour donner de la profondeur */
        }
        .success-message {
            font-size: 2.5rem; /* Taille du texte du message */
            font-weight: bold; /* Texte en gras */
        }
        .btn-danger {
            background-color: #dc3545; /* Couleur rouge pour le bouton de déconnexion */
            border: none; /* Pas de bordure */
            transition: background-color 0.3s ease; /* Effet de transition */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Couleur de survol plus foncée */
        }
        .footer {
            margin-top: 20px; /* Marge supérieure */
            font-size: 0.9rem; /* Taille de police plus petite */
            color: #666; /* Couleur gris */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="success-card">
            <div class="success-message">
                <h1>Bonjour {{ auth()->user()->prenom }}</h1>
            </div>
            <p class="mt-3">C’est parti, tu es connecté !</p>
            <a href="{{ route('deconnexion', auth()->user()) }}" class="btn btn-danger text-light">Déconnexion</a>
            <div class="footer mt-3">
                <p>Merci de faire partie de notre communauté!</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
