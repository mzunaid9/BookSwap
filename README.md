# BOOKSWAP

Suivre :  

```
git clone https://github.com/mzunaid9/BookSwap.git

Faire un composer update

Copier le fichier .env.example

Le coller à la racine du projet puis renommer ce fichier en .env

Configurer le fichier .env (nom base de donnée : pizzafork,accès à la bdd...)

Créer la base de donnée bookswap (drop si la bdd existe déjà et la recréer), lui donner le même nom que celui qui a été indiqué dans le fichier .env

php artisan migrate

php artisan db:seed

```