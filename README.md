# MusicAVi.e.s
MusicAVi.e.s est un prototype de site web de critique musicale ouvert à tous. 
Ce site répertorie une base de données musicale, avec un des artistes, leurs albums et leurs morceaux.
Cette base de données est utilisée pour l’aspect communautaire du site : après ouverture d’un compte, l’utilisateur peut noter artiste / album / morceau et ajouter un avis sur l’objet en question. Les autres utilisateurs peuvent interagir avec cet avis (UP, DOWN, répondre).
Le site se veut un espace de découverte musicale, avec une fonction de recherche filtrée qui aide à trouver de la musique qu’on ne connaît pas.
L’utilisateur a son espace personnel, dans lequel se trouvent ses artistes suivis, ses utilisateurs suivis, ses notes et avis, et quelques paramètres de personnalisation tels que la photo de profil, le pseudo *(modifiable ?)* et le mot de passe modifiable.
On ne peut parcourir le site quen étant connecté à un compte.


> Pourquoi le nom MusicAVi.e.s ?  

Le nom renferme plusieurs significations :
- Music → la musique.
- Avis → on donne des avis sur des musiques.
- AVi.e.s → le style du texte fait référence à l'écriture inclusive, pour symboliser l'esprit rassembleur du site, qui incite tout le monde à s'intéresser à le musique.
- "musique à vie" → le jeu de mot annonce que le site s'addrese aussi aux passionnés de musique, qui trouveront toujours quelque chose à découvrir.


> Langues ?

MusicAVi.e.s est affiché en français, mais le code (les scripts, fonctions, balises, attributs etc.) est écrit en anglais.


---------

## Architechture du site
Le site est construit en suivant un modèle similaire au modèle MVC (Model Vue Controller).

### Arborescence Générale
[`/`] racine du projet : pages visibles par l'utilisateur (les "Vues").

[`/components`] : permettent la construction du site par modules (ex: barre de navigation, footer, barre de recherche etc.). Contient des fichiers PHP avec des fonctions d'affichage et des fichiers CSS pour mettre en forme cet affichage.

[`/css`] : les styles généraux pour le site.

[`/resources`] : ressources utilisées pour le site (images, polices d'écriture, vidéos...).

[`/scripts`] : les scripts php (combinent le "Model" et le "Controller").


### Arborescence Complète
`::` : fichiers
`||` : dossiers
```
:: index.php : page d'accueil
:: signup.php : page d'inscription
|| components
	:: head.php : des éléments qui sont dans le head de toutes les vues
	:: navbar.php : barre de navigation
	:: navbar.css : style de la navbar
|| css
	:: normalize.css : rend le style uniforme pour tous les navigateurs
	:: styles.css : style général du site
|| resources
	|| fonts : polices d'écriture utilisées
		|| circular
		|| product-sans
|| scripts
	:: db.php : connexion à la base de donnée
	:: signup.php : script pour l'inscription
```