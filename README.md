# Web Partiel

## Installation

- Clone the repository with `git clone`
- Install dependency using `composer`
- Install dependency using `npm`

> For development environment use laravel/homestead (installation on Windows: `.\vendor\bin\homestead make`)

## Before Exercice

Make sure you have `yarn run watch` started & working during the exercice. Also get your Laravel migration done and seeding done.

## Exercice (Francais)

- Lorsqu'on clique sur boisson sans alcool rien ne s'affiche, il faut afficher les boissons sans alcool.
- Lorsqu'on affiche les boissons sans alcool les données sont figées, il y a des boissons qui existent en base de données qui ne sont pas chargées. Il existe une "api" pour aller récupérer dynamiquement les softs de la BDD, il faut brancher l'url `/softs` sur l'application (comme pour `/alcohols`) pour pouvoir récupérer les softs manquant.
- Lorsqu'on clique sur la boisson, on envoie la commande (alcool+soft) au robot pour qu'il puisse remplir le verre, actuellement on reçoit un code HTTP `422` avec une erreur: `The soft field is required.`, le soft n'est pas enregistré au moment de sa selection, il faut l'enregistrer et le transmettre.
- Si l'envoie de la commande au robot retourne un HTTP `200` (tout est ok), il faut aller sur la page `/thank-you`
