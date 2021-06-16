# Friends Of Symfony

## Description du projet 

Une application de création et gestion d'horoscope Symfony avec un système de suggestion aléatoire en AJAX.

Il n'y aura pas de CSS pour ce projet, je suis désolé pour vos yeux ! 

Sur ce premier screen nous avons la Page d'accueil.
Nous pouvons voir la liste des horoscopes récupérée en BDD. Chaque horoscope peut être édité en cliquant sur "Editer l'horoscope".
<img src="https://github.com/Zarwine/Teleprogrammes/blob/main/FriendsOfSymfony/FOSProject/demo/horoscope_home.jpg?raw=true" alt="home"/>

Sur le second screen il y a la page d'édition d'horoscope. Le contenu des horoscopes est récupéré en BDD et directement injecté dans les zones d'édition correspondantes. Il est possible de demander une suggestion aléatoire en cliquant sur "Aléatoire", ceci écrasera le contenu de la zone de texte par un nouvel horoscope choisit aléatoirement en AJAX dans une table prévue pour ça. Vous pouvez modifier ce contenu comme vous le souhaitez.

Une fois le travail terminé, il suffit de cliquer sur "Editer" pour valider l'opération.
<img src="https://github.com/Zarwine/Teleprogrammes/tree/main/FriendsOfSymfony/FOSProject/demo/horoscope_edit.jpg?raw=true" alt="edit"/>

Sur ce troisième screen il y un système fonctionnel de connexion.
<img src="https://github.com/Zarwine/Teleprogrammes/tree/main/FriendsOfSymfony/FOSProject/demo/horoscope_signin.jpg?raw=true" alt="sign in"/>

## Installation du projet
```
- git clone https://github.com/Zarwine/Teleprogrammes.git
- cd FriendsOfSymfony/FOSProject
- composer install
- symfony server:start
```