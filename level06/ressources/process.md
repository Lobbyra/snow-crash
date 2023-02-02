1. Dans le fichier level06.php on voit l'utilisation de preg_replace avec le /e
2. Considéré comme une faille de sécurité dans les dernière version de PHP, elle permet d'executé du code dans la string de remplacement
3. L'executable level06 s'élève en privilège avant d'executer le fichier level06.php
4. À la suite de beaucoup de recherches pour savoir comment executer une fonction dans une expansion de variable, voici la commande que j'ai trouver pour exploiter les deux fichiers executables :
5. echo '[x {${system('getflag')}}]' > /tmp/getflag ; ./level06 /tmp/getflag
