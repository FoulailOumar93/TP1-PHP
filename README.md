# Tableau de notes version étudiant
Il s'agit d'afficher des distributions de notes. Les notes sont générées par une fonction aléatoire.

Ce qui vous est demandé de faire :
1. Corriger le message d'erreur qui apparait à l'appel de la page 404.php
2. Créer une vue qui affiche la note maximale.
3. Créer une vue qui affiche le ou les numéros du ou des élèves qui ont la note la plus faible.
4. Modifiez la fonction getDistribution pour compter le nombre de notes compris dans chaque intervalle.
5. Grâce à cette fonction, afficher la distribution des notes sous cette forme :
![distribution](/images/distribution.png)
6. Grâce à cette fonction, affichez l'histogramme en ligne des valeurs sous cette forme :
![histoligne](/images/histoLigne.png)
7.  Grâce à cette fonction, affichez l'histogramme en colonne des valeurs sous cette forme :
![histocol](/images/histoCol.png)

# Quelques explications

## Point d'entrée unique
Le fichier index.php va lire toutes les url lancées par l'utilisateur.  
Il faut distinguer 2 cas :
1. l'application se lance, dans ce cas les paramètres de l'url sont fixées par avance
2. l'utilisateur clique sur un lien du menu, l'url obtenu sera de la forme
>adresse du site/index.php?uc=nomcontroleur&action=nomaction

## La gestion de l'url
Le fichier index.php va orienter le flux vers le contrôleur qui généralement est le fichier
>nomcontroleur.php  

Dans le contrôleur, le programme exécutera la fonction correspondant au nom de l'action. Ici l'action est appelée via un `switch`

## L'écriture de l'action dans le contrôleur
L'action va obtenir des données du modèle. Elle va les traiter et les envoyer à une vue. Voici un exemple
```php
        $lesNotes = getLesNotes(); // obtention des données de la vue qui seront envoyées à la vue
        $message = "données chargées"; // données d'information envoyées à la vue
        include("views/v_accueil.php"); // appel de la vue avec envoie de $lesNotes et $message
```
## Le modèle
Le modèle enregistre toutes les données, qu'elles viennent d'une base de données ou d'un tableau.  
Dans le cas d'une base de donnée elle rassemblera toutes les requêtes nécessaires à la fourniture de données.

## La vue
Elle reçoit les données et le met en forme selon les besoins du client.
```php
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenue</h1>
        <p><?php echo $message; ?></p> 
        <!-- La variable message est récupérée depuis le controleur et affichée dans la vue -->
    </div>
</div>
```
>ATTENTION  
> Ici le nom de la variable doit être identique dans l'action et dans la vue !