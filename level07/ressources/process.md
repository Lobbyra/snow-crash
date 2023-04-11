1. J'ai décompilé l'executable du home de level07
2. J'ai vu que l'executable prenait la variable d'environnement LOGNAME et l'executait après une élévation de droit
3. Du coup j'ai écrit cet exploit : export LOGNAME="\$(getflag)" ; ./level07
   Bien faire attention à mettre le backslash pour pas executer la commande dans le shell de level07
