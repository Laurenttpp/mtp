Description du projet :

Technologies utilises:  

HTML , CSS, JavaScript, PHP, et MySql ainsi que Bootstrab.
Nous utilisons �galement Xampp v3.2.2 pour avoir acc�e � Apache et MySQL.
Et nous utilisons enfin pgAdmin 3 pour la base de donn�es.


Instructions de d�ploiement :


_Sur pgAdmin lancer le fichier SQL situ� dans le repertoire GIT afin de cr�er la base de donn�e .
_Lancer Xampp pour avoir avoir acc�e � Apache et MySql.
_Ouvrir le fichier connection.php sur un �diteur de texte et modifier les identifiants aux lignes 31 et 32 par ses propres identifiants uozone (dbname et user correspondent au nom utilisateur et password correspond au mot de passe).
_Ouvrir le fichier redirectHome.php sur un �diteur de texte et modifier les identifiants aux lignes 10 et 11 par ses propres identifiants uozone (dbname et user correspondent au nom utilisateur et password correspond au mot de passe ).
_Ouvrir le fichier savesettings.php sur un �diteur de texte et modifier les identifiants aux lignes 10 et 11 par ses propres identifiants uozone (dbname et user correspondent au nom utilisateur et password correspond au mot de passe ).
_Copier le dossier web dans le dossier htdocs situ� dans Xampp de la mani�re suivante C:\xampp\htdocs\web .
_Si les identifiants sont bons le message "Opened database successfully" devrait apparaitre quand vous aller sur la page connection.php
_Il suffit enfin de lancer le fichier HTML home ou n'importe quels autres fichiers sur le navigateur avec le lien suivant en exemple si on ouvre Home.html: http://localhost/web/Home.html


Un compte par d�faut avec les identifiants mail= "jo@mail" et mot de passe="jo" a d�j� �t� impl�menter et peut �tre utiliser pour se connecter.