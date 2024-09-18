<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>5 - Les barycentres</h1>

   <h2>Exercices corrigés</h2>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Homogénéité</h4>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Montrer qu'un ensemble de points de  même poids ont le même barycentre si ce poids vaut 1.</h5>
   
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <strong>Solution : </strong><br/>
   </p>
   <p> 
      Considérons un système de $n$ points, dont le poids pour chacun d'eux est $\alpha$. 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha) ; i = 1, ... n \}
      \end{eqnarray}
      En appliquant l'équation vectorielle \ref{sommenulle} on obtient : 
      \begin{eqnarray}
      \alpha.\overrightarrow{M_{1}G} + ... + \alpha.\overrightarrow{M_{i}G} + ... + \alpha.\overrightarrow{M_{n}G}  = \overrightarrow{0}  
      \end{eqnarray}
      On peut factoriser par $\alpha$ l'expression au dessus: 
      \begin{eqnarray}
      \alpha.\left(\overrightarrow{M_{1}G} + ... + \overrightarrow{M_{i}G} + ... + \overrightarrow{M_{n}G}\right)  = \overrightarrow{0}  
      \end{eqnarray}
      Donc : 
      \begin{eqnarray}
      \overrightarrow{M_{1}G} + ... + \overrightarrow{M_{i}G} + ... + \overrightarrow{M_{n}G}  = \overrightarrow{0}  
      \end{eqnarray}
      Ce qui est exactement la relation vectorielle attendue si les poids valent tous 1 en chaque point. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre d'un triangle</h4>
     
   \blockquote{Soit un triangle $ABC$ dont les points ont pour coordonnées :$A =(7;2)$, $B =(-5; 7)$ et $C =(1;-5)$. Ces points ont respectivement comme poids associé : 2, 3 et 5. Donner les coordonnées de $G$ barycentre du triangle $ABC$. Puis calculer son centre de gravité.}
</p>
<p>
   <strong>Solution : </strong><br/>
   </p>
   <p> 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Calcul des coordonnées du barycentre de $ABC$ </h5>
   
   </p>
   <p>
      Tout d'abord, on dispose d'un ensemble de points dont on veut calculer le barycentre. En revanche aucune mention de poids si on ne considère que le triangle $ABC$. Il est possible de poser qu'à chaque point on associe la valeur 1. 
      On applique la formule \ref{coord2dbarycentre} pour le calcul des coordonnées du barycentre : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{2.x_{A} + 3.x_{B} + 5.x_{C}}{2+3+5} \\ \\
      &y_{G} =  \frac{2.y_{A} + 3.y_{B} + 5.y_{C}}{2+3+5 }  
      \end{array}
      \right.
      \end{equation}
      Donc : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{2.7 + 3.(-5) + 5.1}{2+3+5 } =  \frac{4}{10 } =  \frac{2}{5} \\ \\
      &y_{G} =  \frac{2.2 + 3.7 + 5.-5}{2+3+5 }  =  \frac{0}{10 }  = 0
      \end{array}
      \right.
      \end{equation}
      Le barycentre recherché est $G$ de coordonnées : $G = (\frac{2}{5};0)$. \\
      Graphiquement : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/barycentretriangle1.png?raw=true" width=50%>
      Pour calculer le centre de gravité du triangle, on reprend la formule ci dessus en réinitialisant les poids à 1 : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{1.x_{A} + 1.x_{B} + 1.x_{C}}{1 + 1 + 1 } = \frac{1.7 + 1.(-5) + 1.1}{1 + 1 + 1 } = \frac{3}{3} = 1 \\ \\
      &y_{G} =  \frac{1.y_{A} + 1.y_{B} + 1.y_{C}}{1 + 1 + 1 } =  \frac{1.2 + 1.7 + 1.-5}{1 + 1 + 1 }=  \frac{4}{3}
      \end{array}
      \right.
      \end{equation}
      Le centre de gravité que l'on appelle $G_{C}$ est le point de coordonnées  $G_{C} = (\frac{4}{3};1)$. On représente le point sur le même schéma : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/barycentretriangle2.png?raw=true" width=50%>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre d'un triangle</h4>
    
   \blockquote{Soit un triangle $ABC$ dont les points ont pour coordonnées : $A =(x_{A};y_{A})$, $B =(x_{B};y_{B})$ et $C =(x_{C};y_{C})$. Donner les coordonnées du centre de gravité en fonction des coordonnées. Puis calculer les coordonnées de $G$ pour $A =(2;5)$, $B =(-3; 8)$ et $C =(7;-4)$.}
   <strong>Solution :</strong><br/> 
   </p>
   <p> 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Calcul des coordonnées du centre de gravité du triangle $ABC$ </h5>
   
   </p>
   <p>
      Tout d'abord, on dispose d'un ensemble de points dont on veut calculer le barycentre. En revanche aucune mention de poids si on ne considère que le triangle $ABC$. Il est possible de poser qu'à chaque point on associe la valeur 1. 
      On applique la formule \ref{coord2dbarycentre} pour le calcul des coordonnées du barycentre : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{1.x_{A} + 1.x_{B} + 1.x_{C}}{1 + 1 + 1 } \\ \\
      &y_{G} =  \frac{1.y_{A} + 1.y_{B} + 1.y_{C}}{1 + 1 + 1 }  
      \end{array}
      \right.
      \end{equation}
      Donc : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{x_{A} + x_{B} + x_{C}}{1 + 1 + 1 } \\ \\
      &y_{G} =  \frac{y_{A} + y_{B} + _{C}}{1 + 1 + 1 }  
      \end{array}
      \right.
      \end{equation}
      En appliquant aux coordonnées de l'exercice : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{2 - 3 + 7}{1 + 1 + 1 }  = \frac{6}{3 } = 2 \\ \\
      &y_{G} =  \frac{5 + 8 - 4}{1 + 1 + 1 }  = \frac{9}{3 } = 3  
      \end{array}
      \right.
      \end{equation}
      Le barycentre recherché est $G$ de coordonnées : $G = (2;3)$. 
   </p>
   <p>
      Les poids de chaque point étant égaux à 1, le barycentre est aussi le centre de gravité du triangle $ABC$. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre de barycentres</h4>
   }
   \blockquote{Soient quatre points :  $A =(4 ; 8 )$, $B =(2;5)$, $C =(-2;3)$ et $D =(1;-3)$, chacun ayant respectivement pour poids  : $\alpha = 2 $, $\beta = 3$,  $\gamma = 4 $ et $\delta = 2$. Calculer le Barycentre $G_{AB}$ des points $A$ et $B$ et $G_{CD}$ celui des points $C$ et $D$. Calculer le barycentre du système $\left((G_{AB};5);(G_{CD};6)\right)$. Puis calculer le barycentre du système donné par les quatre point $A$, $B$, $C$ et $D$ avec leurs poids. Conclure.  } 
   <strong>Solution sommaire : </strong><br/>
   </p>
   <p> 
      On utilise la formule de calcul des coordonnées en deux dimensions pour deux et quatre points. 
   </p>
   <p>
      Calculer les coordonnées de  $G_{AB}$ : 
   </p>
   <p>
      Calculer les coordonnées de  $G_{CD}$ : 
   </p>
   <p>
      Calculer les coordonnées les barycentres de  $G_{AB}$  et $G_{CD}$ : 
   </p>
   <p>
      Calculer les coordonnées les barycentres de  $A;\alpha$, $B; \beta$, $C;\gamma$ et $D; \delta$ : 
   </p>
   <p>
      On observe que le barycentre de plusieurs barycentres est le barycentre du système entier.
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Des poids négatifs</h4>
   }
   \blockquote{Soient trois points :  $A =(4 ; 8 )$, $B =(2;5)$ et $C =(-2;3)$, ayant respectivement pour poids  : $\alpha = -2 $, $\beta = 7$,  $\gamma = -2 $. Calculer le Barycentre $G_{ABC}$ des points $A$ et $B$ et $C$.  }
</p>
<p>
      On s'assure tout d'abord que la somme des poids est non nulle : 
   </p>
   <p>
      -2+7-2 = 3 $\implies$ il existe un unique barycentre pour ce système de points. 
   </p>
   <p>
      Pour le déterminer on applique la formule du barycentre en deux dimensions pour trois points \ref{coord2dbarycentre} :
      déterminer $x_{G}$ et $y_{G}$ :
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2} + \alpha_{3}.x_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} \\
      %		\\
      &y_{G} =  \frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2} + \alpha_{3}.y_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} 
      \end{array}
      \right.
      \end{equation}
      En remplaçant par les valeurs : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \frac{-2.4+7.2-1.(-2)}{-2+7-2}= \frac{9}{3} = 3  \\
      %		\\
      &y_{G} =  \frac{-2.8+7.5-1.3}{-2+7-2}= \frac{15}{3} = 5
      \end{array}
      \right.
      \end{equation}
      Les coordonnées de $G$ sont donc : $\boxed{G = (3;5)}$. </p>
      <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre d'un milieu homogène</h4>
   Exercice sur la barre de fer utilisée au début pour faire comprendre l'équilibre. Comment faire pour calculer le barycentre d'un tel système, alors qu'il n'y a pas clairement deux ou plusieurs points associé à un poids? L'idée est de considérer l'hypothèse qui dit qu'elle est composée de manière homogène. Ce qui veut dire que sa densité est la même partout dans la barre. Dans ce cas, on peut très bien diviser la barre plusieurs points. Exemple avec deux points : 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/milieuhomogene.png?raw=true" width=50%>
      L'exercice de la barre de fer permet d'extrapoler à la vache. On discrétise la vache en morceaux suffisamment petits pour permettre un calcul assez juste et on trouve son centre de gravité. On ne discrétise les vaches que sur informatique ou dans les abattoirs. Ici il n'est question que de l'informatique. 
   </p>
   <p>
      Lorsque l'on discrétise un objet homogène, alors son barycentre est son isobarycentre : son centre de gravité. En revanche lorsqu'il est non homogène, il faut le discrétiser de manière obtenir un ensemble d'éléments atomiques dont on connaisse le poids pour déterminer le point d'équilibre. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>
   Barycentre du système Soleil - Terre</h4>
   Calculer le barycentre du système soleil terre : 
   Soit le poids du soleil en Kg : $1,989.10^{30}$ kg, le poids de la terre : $5,982.10^{24}$ kg,  la distance terre soleil en mètres : 149 597 870 700 mètres. Déterminer le barycentre de ce système selon le repère proposé ci dessous : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/ExobarSoleilTerre.png?raw=true" width=50%>
   <strong>Solution  :</strong><br/> 
   </p>
   <p> 
      Première solution, à l'aide des coordonnées :
      On pose $S$, le soleil, et $T$ la terre, avec pour information : 
	  
   </p>
   <p> 
     <ul>
      <li> $s$ : le poids du soleil en Kg : $1,989.10^{30}$ kg;</li>
      <li>$t$ : le poids de la terre : $5,982.10^{24}$ kg;</li> 
      <li>$x_{t}$ : la coordonnée de la Terre soit la distance terre soleil en mètres : 149 597 870 700 mètres;</li> 
      <li> $x_{s}$ : la coordonnées du soleil = 0.</li>
    </ul>
	 
   </p>
   <p> 
      On se place dans un repère unidimensionnel, avec le soleil comme origine du repère et la terre placée à près de 150 milliards de mètres. Appelons $s$ le poids du soleil et $t$ celui de la terre. 
   </p>
   <p>
      Donc les coordonnées du barycentre sont: 
      \begin{align}
      &x_{G}  = \frac{s.x_{s} + t.x_{t} }{s+t}
      \end{align} 
      Une seule coordonnées est suffisante ici. Notre étoile et notre planète forment une droite et placer le soleil sur l'origine de l'axe permet de simplifier les calculs. Pour obtenir la coordonnée du centre de gravité du soleil et de la terre, on remplace par les valeurs dont on dispose : 
      \begin{align}
      x_{G}  	&= \frac{1,989.10^{30}.0 + 5,982.10^{24}.149 597 870 700}{1,989.10^{30}+5,982.10^{24}}\\ 
      &=  \frac{ 5,982.10^{24}.149 597 870 700}{1,989.10^{30} + 5,982.10^{24}}\\
      &=  \frac{ 598,2.149 597 870 700.10^{22}}{1 989 005 98,2 .10^{22}}\\
      &=  \frac{ 598,2.149 597 870 700}{{1 989 005 98,2}}\\
      &=  \frac{ 89 489 446 252 740}{{1 989 005 98,2}}\\
      &=  449 920,45
      \end{align} 
      Ce résultat, arrondi au centième, donne que le barycentre du système Terre - Soleil est situé en $x= 449 920,45$. 
   </p>
   <p>
      L'unité étant le mètre, cela signifie que le barycentre de ce système à presque 450 000 mètres de l'origine du repère, soit le centre du soleil. 
   </p>
   <p>
      Le rayon du soleil étant de $696\,340$\,km soit $696\,340\,000$\,m, on voit que proportionnellement, le barycentre est relativement proche du centre du soleil. 
   </p>
   <p>
      <img src="https://raw.githubusercontent.com/IamHenri/G1-Geometrie/main/images/Orbit2.gif">
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Deuxième solution à l'aide des vecteurs </h5>
   
   </p>
   <p>
      Si $G$ est le barycentre des points $S$ et $T$, alors on a la relation vectorielle : 
      \begin{eqnarray}\label{ssgttg}
      s.\overrightarrow{SG} + t.\overrightarrow{TG}  = \overrightarrow{0}  
      \end{eqnarray}
      Ce que l'on cherche, c'est avoir un rapport entre le vecteur $\overrightarrow{SG}$ et $\overrightarrow{ST}$ : on veut savoir quelle fraction de la distance Terre - Soleil représente la distance entre le centre du soleil et le barycentre de ces deux corps célestes.  Ce que l'on recherche, ce rapport entre $\overrightarrow{SG}$ et $\overrightarrow{ST}$, on voit dans l'équation \ref{ssgttg} que l'on a déjà $\overrightarrow{SG}$ dans l'expression. Il manque $\overrightarrow{ST}$. 
   </p>
   <p>
      Or on a comme deuxième membre de  \ref{ssgttg} le vecteur $\overrightarrow{TG}$. Comme il n'y pas de vecteur $\overrightarrow{ST}$ que l'on recherche, nous allons le faire apparaitre en décomposant $\overrightarrow{TG}$ sur le point $S$ : 
      \begin{eqnarray*}
      \overrightarrow{TG} = \overrightarrow{TS} + \overrightarrow{SG}
      \end{eqnarray*}
      En remplaçant dans la formulation précédente on obtient : 
      \begin{eqnarray*}
      s.\overrightarrow{SG} + t.(\overrightarrow{TS} + \overrightarrow{SG})  = \overrightarrow{0}  
      \end{eqnarray*}
      On développe : 
      \begin{eqnarray*}
      s.\overrightarrow{SG} + t.\overrightarrow{TS} + t.\overrightarrow{SG}  = \overrightarrow{0}  
      \end{eqnarray*}
      On rassemble les vecteurs $\overrightarrow{SG} $ : 
      \begin{eqnarray*}
      s.\overrightarrow{SG} + t.\overrightarrow{SG} + t.\overrightarrow{TS}  = \overrightarrow{0}  
      \end{eqnarray*}
      Donc : 
      \begin{eqnarray*}
      &(s + t).\overrightarrow{SG} + t.\overrightarrow{TS}  = \overrightarrow{0}  \\
      \implies &(s + t).\overrightarrow{SG}   =  -t.\overrightarrow{TS}  \\
      \implies &(s + t).\overrightarrow{SG}   =  t.\overrightarrow{ST}  \\
      \implies &\overrightarrow{SG}   =  \displaystyle\frac{t}{s+t}.\overrightarrow{ST}  \\
      \end{eqnarray*}
      On a le rapport recherché. La distance entre le centre du soleil et le barycentre du système vaut $\frac{t}{s+t}$ fois la distance Terre - Soleil. \\
      Application numérique : 
   </p>
   <p>
      \begin{eqnarray*}
      \implies &\overrightarrow{SG}   =  \frac{t}{s+t}.\overrightarrow{ST}  \\
      \implies &\overrightarrow{SG}   =  \displaystyle\frac{5,982.10^{24}}{1,989.10^{30}+5,982.10^{24}}.\overrightarrow{ST}  \\
      \implies &SG   =  \displaystyle\frac{5,982.10^{24}}{1,989.10^{30}+5,982.10^{24}}.ST   \\
      \implies &SG   =  \displaystyle\frac{5,982.10^{24}}{1,989.10^{30}+5,982.10^{24}}.149 597 870 700   \\
      \implies &SG   =  \displaystyle\frac{5,982.10^{24}}{1,989.10^{6}.10^{24}+5,982.10^{24}}.149 597 870 700   \\
      \implies &SG   =  \displaystyle\frac{5,982}{1,989.10^{6}+5,982}.149 597 870 700   \\
      \end{eqnarray*}
      Ce n'est pas exactement la terre qui tourne autour du soleil, mais plutôt c'est une valse céleste autour d'un point à l'intérieur du soleil, à près de 4 500 km de son centre. Si on considère la système solaire dans son entier, la multiplicité des astres le composant rendent le calcul plus complexe. Mais il existe un barycentre absolu du système solaire. Il suffit de connaître la position et la masse de chaque élément le composant. 
   </p>
   <p>
      Sans oublier que les planètes sont en mouvement, le barycentre du système solaire est donc lui aussi constamment en mouvement pas très loin du centre du soleil. Un exercice serait de calculer la position du barycentre du système solaire avec toutes les planètes en conjonction. Le barycentre sort-il du soleil? 
   </p>
   <p>
      Et si on considère la ceinture d'astéroïdes entre Mars et Jupiter, en admettant qu'elle soit répartie de manière homogène, a-t-elle une influence sur la position du barycentre? 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre de quatre points non coplanaires</h4>
    
   \blockquote{On se propose de calculer ici le barycentre de quatre points de l'espace qui ne sont pas dans le même plan. Donc soit le système de quatre points et leurs coefficients : 
   \begin{eqnarray*}
   \mathbf{S} = \{(A;2) ; (B;1) ; (C;2) ; (D;5)  \} ;
   \end{eqnarray*}
   avec comme coordonnées : $A =(2 ; 7;1 )$, $B =(3;5;-2)$, $C =(2;-3;1)$ et $D =(-1;1;-3)$.}
</p>
<p>
   Pour calculer le barycentre de ces points, il suffit d'appliquer la formule \ref{barXYZ3DNpoints} pour le calcul des trois coordonnées de $G$ :  
   \begin{equation}
   \left\{
   \begin{array}{ll}
   x_{G}  = \frac{\sum\limits_{i=1}^n\alpha_{i}.x_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
   y_{G} = \frac{\sum\limits_{i=1}^n\alpha_{i}.y_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
   z_{G} = \frac{\sum\limits_{i=1}^n\alpha_{i}.z_{i}}{\sum\limits_{i=1}^n\alpha_{i}}
   \end{array}
   \right.
   \end{equation}
   Comme nous avons quatre points, on a $n=4$, on applique pour $A$, $B$, $C$ et $D$ :
   \begin{align}
   &x_{G}  = \frac{\alpha_{A}.x_{A} + \alpha_{B}.x_{B} + \alpha_{C}.x_{C} +  \alpha_{D}.x_{D}}{\alpha_{A} + \alpha_{B} + \alpha_{C} + \alpha_{D}} \\
   &y_{G} =  \frac{\alpha_{A}.y_{A} + \alpha_{B}.y_{B} + \alpha_{C}.x_{C} +  \alpha_{D}.y_{D}}{\alpha_{A} + \alpha_{B} + \alpha_{C} + \alpha_{D}} \\
   &z_{G} = \frac{\alpha_{A}.z_{A} + \alpha_{B}.z_{B} + \alpha_{C}.z_{C} +  \alpha_{4}.z_{D}}{\alpha_{A} + \alpha_{B} + \alpha_{C} + \alpha_{D}}
   \end{align} 
   On remplace par les valeurs : 
   \begin{align*}
   x_{G}&  = \frac{2.2 + 1.  3  + 2.2   + 5.(-1)   }{2+1+2+5}&& = \frac{6}{10} \,\,\,\,= \frac{3}{5} \\
   y_{G}& =  \frac{2.7 + 1.  5  +2.(-3) + 5.  1    }{2+1+2+5}&& = \frac{18}{10} \,\,\,\, = \frac{9}{5}  \\
   z_{G}& =  \frac{2.1 + 1.(-2) + 2.1   + 5.(-3)   }{2+1+2+5}&& = \frac{-15}{10} = \frac{-3}{2} 
   \end{align*} 
   Les barycentre des quatre point $A$, $B$, $C$ et $D$ est gond $G$ : 
   \begin{align*}
   &G = (\frac{3}{5} ; \frac{9}{5}; \frac{-3}{2})
   \end{align*}
</p>
<p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>
   A partir d'une relation vectorielle</h4>
   \blockquote{On a $G$ barycentre des points $A$ et $B$ tel que $\overrightarrow{AB} = 3.\overrightarrow{GB}$. Comment est caractérisé le système? (donner les poids des points).}
</p>
<p>
      Pour répondre à cette question, il faut retomber sur la formulation qui utilise les vecteurs entre les points du système et le barycentre. 
   </p>
   <p>
      Autrement dit il faut retomber sur une expression type : 
      \begin{align*}
      &\alpha.\overrightarrow{AG} + \beta.\overrightarrow{BG} = \overrightarrow{0}
      \end{align*}
      Où $\alpha$ et $\beta$ sont les poids des points. Donc, on cherche à décomposer $\overrightarrow{AB}$ pour chercher à faire ressortir $\overrightarrow{AG}$ : 
      \begin{align*}
      &\overrightarrow{AB} = 3.\overrightarrow{GB}\\
      \implies&\overrightarrow{AG}+\overrightarrow{GB} = 3.\overrightarrow{GB} && \text{Grâce à la Relation de Châsles}\\
      \implies&\overrightarrow{AG}+\overrightarrow{GB} - 3.\overrightarrow{GB} = \overrightarrow{0}  && \text{}\\
      \implies&\overrightarrow{AG}+2.\overrightarrow{GB} = \overrightarrow{0}  && \text{}\\
      \end{align*}
      On a obtenu la relation attendue. On identifie avec la formule attendue :  
   </p>
   <p>
       $\longrightarrow \alpha$ = 1 ;  
   </p>
   <p> $\longrightarrow \beta$ = 2. 
   </p>
   <p>
      Donc $A$ a pour poids 1 et $B$ 2. 
   <h2>
   TL;DR</h2>
   Voici le résumé le plus synthétique qui soit. On trouvera ici les formules essentielles qui peuvent être déclinées dans le plan et dans l'espace, pour tout nombre de point pondérés par des valeurs réelles. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>
   Barycentre du plan et de l'espace</h2>
   On appelle $\mathbf{S} $ : 
   \begin{eqnarray}
   \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, ..., n \} 
   \end{eqnarray}
   un système de points  $M_{i} = ( (x_{i} ; y_{i} ; z_{i})$ pour $i = 1, ..., n ;$ dont chacun d'eux a un coefficient dont la somme est non nulle, alors les coordonnées du barycentre $G$, $G = (x_{G} ; y_{G} ; z_{G})$ de ce système sont données par les formules suivantes : 
   \begin{equation}
   \left\{
   \begin{array}{ll}
   x_{G} = \frac{\sum\limits_{i=1}^n\alpha_{i}.x_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
   y_{G} = \frac{\sum\limits_{i=1}^n\alpha_{i}.y_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
   z_{G} = \frac{\sum\limits_{i=1}^n\alpha_{i}.z_{i}}{\sum\limits_{i=1}^n\alpha_{i}}
   \end{array}
   \right.
   \end{equation}
   On a  de plus les relations vectorielles suivantes: 
   </p>
   <p>
      Soit un ensemble de points $M_{i}$ avec leurs coefficients associés $\alpha_{i}$ et G le barycentre de ces points et sous l'hypothèse que : 
      \begin{eqnarray}
      \boxed{\sum\limits_{i=1}^n\alpha_{i} \neq 0}
      \end{eqnarray}
      Alors : 
      \begin{eqnarray}
      \boxed{\sum\limits_{i=1}^n\alpha_{i}.\overrightarrow{M_{i}G}  = \overrightarrow{0}  }
      \end{eqnarray}
      Soit $P$ un point du plan, distinct de $G$, et des  $M_{i}$. Alors : 
      \begin{eqnarray}
      \boxed{\sum\limits_{i=1}^n\alpha_{i}.\overrightarrow{PM_{i}}=\left(\sum\limits_{i=1}^n\alpha_{i}\right).\overrightarrow{PG}}
      \end{eqnarray}
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>
   Barycentre dynamiques pour les courbes de Béziers</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>
   Paramétrage d'un segment</h3>
   Soient $P_{0}$ et $P_{1}$ deux points de l'espace. On peut paramétrer le chemin qui mène de $A$ vers $B$ comme suit : 
   \begin{align*}
   \gamma(t) = \left( \begin{array}{ccc}
   (1-t) . x_{P_{0}} + t . x_{P_{1}} \\
   (1-t) . y_{P_{0}} + t . y_{P_{1}}\\
   (1-t) . z_{P_{0}} + t . z_{P_{1}}\\
   \end{array} \right)\\
   \end{align*}
   Le chemin $\gamma(t)$ donne à chaque instant $t$ les coordonnées d'un point $M(t)$, où $M(t)$ est le barycentre de $P_{0}$ et $P_{1}$
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>
   Système de trois points</h3>
   Pour $t \in [0 ; 1]$, le point $M(t)$ est définit à l'aides points $P_{0}$, $P_{1}$ et $P_{2}$ à l'aide de la relation vectorielle suivante:
   \begin{align*}
   \overrightarrow{OM(t)} &  = (1 - t)^{2} . \overrightarrow{OP_{0}} + 2.t (1-t). \overrightarrow{OP_{1}}  + t^{2} . \overrightarrow{OP_{2}}\\
   \end{align*}
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>
   Système de quatre points</h3>
   Pour $t \in [0 ; 1]$, le point $M(t)$ est définit à l'aides points $P_{0}$, $P_{1}$, $P_{2}$ et $P_{3}$:
   \begin{align}\label{om0om1op0op13901}
   \overrightarrow{OM(t)} 	 =  (1 - t )^{3}.  \overrightarrow{OP_{0}} + 3.t(1-t)^{2} . \overrightarrow{OP_{1}}+ 3.t^{2}.(1-t) . \overrightarrow{OP_{2}} + t^{3} . \overrightarrow{OP_{3}};
   \end{align}
   Du point de vue des coordonnées, dans l'espace on a : 
   \begin{align*}
   \overrightarrow{OM(t)}  = \left( \begin{array}{ccc}
   (1 - t )^{3}.x_{P_{0}} + 3.t(1-t)^{2}.x_{P_{1}}+ 3.t^{2}.(1-t) .x_{P_{2}}  + t^{3} .x_{P_{3}}  \\
   (1 - t )^{3}.y_{P_{0}} + 3.t(1-t)^{2}.y_{P_{1}}+ 3.t^{2}.(1-t) .y_{P_{2}}  + t^{3}. y_{P_{3}}   \\
   (1 - t )^{3}.z_{P_{0}} + 3.t(1-t)^{2}.z_{P_{1}}+ 3.t^{2}.(1-t) .z_{P_{2}}  + t^{3}. z_{P_{3}} \\
   \end{array} \right)\\
   \end{align*}
   <hr/>

      
   <br>
   <hr>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>