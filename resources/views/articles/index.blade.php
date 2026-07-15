<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre }}</title>
</head>
<body>
    <h1>Bienvenue sur DevBlog</h1>
    <p>Ici s'afficheront bientot tous nos articles </p>
    <strong style ="color : green;">{{$nombre}}</strong><p> articles disponibles.</p>
        <ul>
            @forelse($articles as $article)
                <li>{{$article['titre']}}
                    - redigé par <strong>{{$article['auteur']}}</strong>
                </li>  
            @empty
                <p>Aucun articles dispo pour le moment</p>              
            @endforelse
            
        </ul>
</body>
</html>