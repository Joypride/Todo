# Contribuer au projet ToDo & Co - Informations et Consignes

## Versionning du projet

Le projet Todo & Co est disponible au sein d'un repository GitHub : https://github.com/Joypride/Todo

Le versionning du projet a pour objectif de suivre les modifications et ajouts de code ainsi que faciliter la collaboration des développeurs.

Le projet est composé de deux branches :
- main
- develop

La branche main est uniquement destinée à recevoir un code fonctionnel. La branche develop est destinée à recevoir le code pour être testé localement.

Le développement d'une nouvelle fonctionnalité implique de préparer les issues correspondantes au sein du repository pour faciliter la coopération.

Toutes nouvelles fonctionnalités ou modifications du code doivent être travaillées sur des sous branches de la branche develop.
Une fois vos changements effectués, et poussés (push), ouvrez une requête de tirage (pull request), vérifiez vos changements et mergez.

## Tester l'application

L'ajout d'une nouvelle fonctionnalité ne doit pas entraver le fonctionnement de l'existant. Dans ce cadre, il faut réaliser des tests fonctionnels et unitaires, afin de s'assurer du bon fonctionnement de l'intégralité de l'application, avant de déployer du code en production.

Pour exécuter les tests, lancez la commande suivante en se plaçant à la racine du projet : ``vendor/bin/phpunit``

Afin de s'assurer que les tests reflètent bien l'intégralité de l'application, il est nécessaire qu'ils couvrent au minimum 70% des fonctionnalités.

Pour obtenir un coverage report des tests, lancez la commande suivante : ``vendor/bin/phpunit --coverage-html public/test-coverage``

## Respect des normes et conventions de développement

Le respect des normes et conventions de développement permet d'harmoniser le code de l'application. Ainsi la lecture et la compréhension du code est facilité pour l'équipe de développeurs et les nouveaux arrivants. Les pratiques à mettre en place sont les suivantes:

- Respect des normes PSR
- Respect de l’architecture du projet 
- Respect des bonnes pratiques de Symfony
- Utilisation de ses propres branches basées sur la branche develop
- Maintien des tests

## Améliorations possibles 

Le projet peut accueillir de nombreuses améliorations parmi lesquelles: 

### Général 

- Ajouter des liens et boutons pour améliorer l’ergonomie du site (retour à l’accueil, liste des utilisateurs, lien sur le logo, etc)
- Moderniser le design
- Personnaliser les pages d’erreur
- Rendre l'application entièrement responsive

### Tâches

- Mettre en place un système de filtrage 
- Ajouter une pagination
- Ajouter un historique sur l’ajout et la modification des tâches
- Pouvoir mettre une deadline 
- Centraliser les tâches par thème 
- Pouvoir n’accéder qu'à la liste de ses propres tâches

### Utilisateurs

- Pouvoir supprimer un utilisateur
- Pouvoir modifier son mot de passe et ses informations

### Sécurité

- Ajouter une confirmation de suppression des tâches
- Inscription avec une vérification par mail
- Mise en place d'un système d'intégration continue (ex: Travis)
