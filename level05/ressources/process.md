1. À la connexion, j'apercois un message "You have a mail" (un truc comme ca)
2. J'essaye la commande mail mais elle n'est pas installé
3. Ne trouvant aucun fichier dans mon home, je pars à la quête d'un fichier ou un dossier suspect
4. Avec la command `find / -name "mail" 2> /dev/null` je trouve un dossier bien étrange dans /var/mail
5. Dans ce dossier il y a un fichier du doux nom de level05 qui contient une ligne type d'une configuration de crontab que pourrait bien avoir l'utilisateur flag05.
6. Ce crontab execute donc le script openarenaserver qui execute tous les scripts dans /opt/openarenaserver et les supprime
7. Petit rigolo que je suis, je connais la command wall et décide d'ecrire un script malicieux qui va executer la commande getflag et l'envoyer dans wall pour que j'en récupère le retour en tant que level05, sur mon terminal.
8. J'attend un peu que le crontab s'execute et voila le flag qui s'affiche dans le terminal
