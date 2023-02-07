1. Dans le home il y un executable qui test si l'utilisateur à l'ID 4242. Si c'est le cas il transforme une chaine de char qu'il a en mémoire et l'affiche, sinon quitte le programme.
2. L'utilisateur 4242 n'existant pas, j'ai lancer le programme dans un debugger s'appelant Cutter.
3. J'ai placé un breakpoint sur la comparaison et lancé le programme.
4. Une fois le bp atteint, j'ai modifié eax ayant pour valeur mon uid local en 4242.
5. J'ai continué l'avancement du programme et le programme à comparé 4242 avec 4242 puis a normalement continué l'execution du programme pour finalement afficher mon flag permettant de me connecter au level14
