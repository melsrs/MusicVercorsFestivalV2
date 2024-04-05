# Billetterie pour le Vercors Music Festival Version 2
Vous êtes donc chargé de développer la version 2 du système de réservation, avec une vraie base de données relationnelle. Vous créerez la base de données résultant de votre MCD, qui remplacera le CSV utilisé jusque-là.

### Livrable:
Vous serez évalués sur la cohérence du MCD.  
Vous serez également évalués sur l'application d'un Git flow dans votre démarche de versioning.  
Des injections SQL pourraient être tentées lors de la présentation et vous devrez donc préparer votre application à cela.  
De même, le hachage des mots de passe et la conservation de la date d'acceptation des RGPD devront être appliqués.  

Vous devrez réaliser un MCD cohérent pour la réservation (par exemple : existe-t-il des tables annexes comme catégorie, jours de festival, activités, etc.). 

Vous pouvez maquetter tout ou une partie des éventuelles nouvelles pages de l'application.  
Votre application est protégée contre les injections SQL.  
Un email devra être envoyé au client à chaque réservation. Le mot de passe est hashé, et la date d'acceptation des RGPD se remplit avec la date du jour lors de l'inscription.  
Votre application respecte le pattern MVC et vos fichiers de code non publics ne sont pas visibles grâce au fichier .htaccess.  
Un administrateur peut voir toutes les réservations, modifier ou supprimer une réservation. 
Les visiteurs peuvent consulter uniquement leurs réservations.

Vous respectez le Gitflow suivant :  
Une branche main qui contient la version stable en ligne.  
Une branche de dev qui contient votre dernière feature testée par vous, et qui va être testé par votre binôme avant merge sur la branche main.  
Une branche par feature.  

### INSTALLATION  
**Le fichier config se trouve à la racine du projet.**  
Lors de l'installation en production, veuillez renseigner dans le fichier config.php les bonnes informations relatives à la base de données si vous utiliser la BDD en local. 

Il se trouve aussi en commentaires ou vise/versa les informations de la BDD pour le serveur simplon.

### MIGRATION
Le fichier script SQL est stocké dans le dossier Migration.

### VERSIONS
Le programme a été conçu avec:  
PHP 8.2.13  
MySQL 8.2.0 

### Fichiers:
Le fichier jpg du MCD se trouve dans le dossier /public/assets/images/MCDVercorsFestivalImage.jpg