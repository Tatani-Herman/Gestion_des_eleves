# Gestion des élèves
Plateforme web qui recencent les élèves d'un établissement avec la possibilité de création de nouveaux élèves aini que celle de les mettre à jour. Il y'a aussi la possibilité de trier les élèves par classe (AP1, AP2, GINF1, GINF2, GINF3, GIL1, GIL2, GIL3....)
![](/public/img/github/image1.PNG)

## Framework Utilisé 

* **Laravel**
est un framework d'application Web avec une syntaxe expressive et élégante. Nous pensons que le développement doit être une expérience agréable et créative pour être vraiment épanouissante.
* **Bootstrap 4.3**

## Exigences du serveur
* PHP >= 7.3
* OpenSSL PHP Extension
* PDO PHP Extension

## Comment mettre en place le projet
* Cloner le projet avec la commande **git clone** ou directement sur github (les étapes du clonage seront énumérées ci dessous)
* Copier le dossier vendor d'un de vos projets laravel et le coller dans le dossier Gestion_des_eleves que vous venez de cloner car le dossier vendor est ignoré lors du clonage et le programme a besoin de ce dossier pour fonctionner
* Créer le fichier **.env** à la racine du répertoire et y coller le contenu du fichier **.env.example**
   
  Ouvrir l'invite de commande (de préference powerShell car la commande **git** y est déja installée) et placez vous à la racine de votre seveur apache locale ( pour xampp c est htdocs) et exécutez les commandes suivantes:
  ```bash  
>>git clone https://github.com/Tatani-Herman/Gestion_des_eleves

>>composer install

>>php artisan key:generate 

>>php artisan migrate

## Gestion du projet
la création de la plateforme a été facilitée par l'outil Trello qui nous a permis de diviser et repartir les taches du projet et de suivre l'avancement de chaque tache
Lien vers le tableau Trello: https://trello.com/b/5HB6osEV/gestion-des-%C3%A9l%C3%A8ves

## Quelques captures d'écran du suivi de l'évolution sur trello
![](/public/img/github/trello1.PNG)<br>
![](/public/img/github/trello2.PNG)<br>
![](/public/img/github/trello3.PNG)<br>
![](/public/img/github/trello4.PNG)<br>
![](/public/img/github/trello5.PNG)<br>
![](/public/img/github/trello6.PNG)<br>
![](/public/img/github/trello7.PNG)<br>
![](/public/img/github/trello8.PNG)<br>

## Quelques capture d'écran de la plateforme
![](/public/img/github/image2.PNG)<br>
![](/public/img/github/image3.PNG)
  
