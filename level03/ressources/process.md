1. On trouve un binaire dans ~
2. Avec un ls -lah on voit que le propriétaire du binaire est flag03
3. En ouvrant le binaire avec gdb, on trouve un main ou les fonctions setresuid et setresgid sont utilisé
4. On comprend donc que le binaire change l'utilisateur et le groupe avec lequel il est utilisé par ces droits actuel du fichier
5. A ce moment, le binaire est donc exécuté en tant que flag03
6. Ensuite, le binaire appel la fonction system() qui execute la commande echo.
7. J'ai donc créé un echo malicieux dans /tmp/echo avec un script executant la commande getflag
8. Pour que l'utilisateur flag03 puisse executer ce script, j'ai changé ses droits en 777
9. Dans le but que le binaire execute /tmp/echo au lieu de /bin/echo, j'ai ajouté ce chemin dans la variable d'environnement PATH
10. Enfin, à l'execution du binaire, celui-ci execute mon script à la place de echo ce qui affiche le flag
