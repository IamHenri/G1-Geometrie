<?php  include 'entete.php';?>
  
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      REPERE CARTESIEN
      
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>

   <h1>Le repère cartésien</h1>
   <h2>Les repères dans le plan</h2>
   <h3>Se repérer sur une droite</h3>
   <h4>Approche intuitive</h4> 
   <p>
      Imaginons une route entre deux villes. Sur cette route, à chaque kilomètre, on trouve une borne kilométrique. Sur cette dernière est inscrit le nombre de kilomètres parcourus depuis la ville de référence. Admettons qu'une voiture parte de celle-ci et qu'elle tombe en panne près de la borne kilométrique numéro $12$. Lorsque le conducteur appelle la dépanneuse, s'il lui indique qu'il est proche de cette borne portant le numéro $12$, ce dernier saura qu'il faut parcourir 12 kilomètres depuis la ville de référence pour rejoindre notre conducteur en panne. C'est exactement le principe des repères cartésiens.

      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/RepereMaths20200922-ImageRoute.png?raw=true" width=50%>
   </p>
   Pour une première approche mathématiques la plus triviale et intuitive possible, considérons une droite graduée (avoir en tête par exemple l'image d'une route parfaitement droite où est inscrite la distance à l'origine à chaque instant) :
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-0-dim1page10.png?raw=true" width=50%>
   Sur cet  droite graduée, posons que le $0$ est l'origine du repère (ce que l'on fait en général et qui est assez pratique), le sens positif de parcours de cette droite est des négatifs vers les positifs.
      </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   Sur cet axe sont placés quatre points : $M_{1}$, $M_{2}$, $M_{3}$ et le point $M_{4}$.
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>   $M_{1}$ et $M_{3}$ ont pour coordonnées : 
   \begin{align}
   &M_{1}= (+4)  &&M_{3}= (-1)  \\
   &M_{2}= (1,5) =\left(\frac{3}{2}\right)              &&     M_{4}= (-3,5)      =\left(\frac{-7}{2}\right)            
   \end{align}
   Où 4  est la coordonnée du point $M_{1}$  valeur entière positive, à droite du 0 etc. 
   Sur le papier on préfère une écriture fractionnaire pour exprimer les résultats.  
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <h4>Exemple </h4>
      Comme exemple, tracer une droite avec une origine, et une graduation de $-12$ à $+12$. Placer les points $A = (-11)$, $B = (-6)$, $C = (-2)$, $D = (1)$, $E = (3)$ et $F = (9)$.<br/>
      <strong>Solution : </strong>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-1-sol1d.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <h4>Théorie</h4>
      Soit une droite, avec une origine $O$ de coordonnées $O=(0)$ et où en chaque point on trouve un nombre réel. Sur cette droite, on voit une graduation qui indique la longueur $1$ et un point $M$ de coordonnées $M = (x_{M})$.<br/>
      $x_{M}$ représente le nombre de fois qu'il faut ajouter des graduations de longueur $1$ pour arriver au point $M$ depuis l'origine $O$.<br/>
      Ainsi nous pouvons définir chaque point de la droite relativement à l'origine. Sa coordonnées est la distance mesurée à l'aide de l'unité placée comme référence sur le graphique : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-2-sol1d.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Une autre manière de voir est de poser un vecteur au lieu d'une unité de longueur. On trouve la même coordonnée, en revanche la notation vectorielle est plus pratique et aisée pour tous les calculs et autres formules.<br/>
      Le même repère avec un représentation vectorielle : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-3-sol1d.png?raw=true" width=50%>
      Ce n'est plus une simple unité qui est représenté mais un vecteur qui porte à la fois la longueur et le sens de l'axe. Avec : 
      \begin{align}
      &||\overrightarrow{i}|| = 1 &&\text{ où $||.||$ désigne la norme, comprendre longueur. }
      \end{align}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Pour comprendre les repères, s'en servir dans ses modèles, ne nécessite pas de passer par les vecteurs. Ils deviennent intéressants dans un second temps, quand on s'aperçoit que c'est un outil très pratique pour travailler. Pour l'instant, on peut s'en affranchir, il est d'abord question de coordonnées et de se repérer tant dans le plan que dans l'espace dans ce document.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Conclusion : </strong> pour localiser un point sur un axe, on peut l'écrire de plusieurs manières.<br/>
      Première écriture : 
      \begin{align}
      &M = (x_{M}) ;
      \end{align}
      Ou une écriture vectorielle : 
      \begin{align}
      &\overrightarrow{OM} = x_{M}.\overrightarrow{i} ;
      \end{align}
      Ces deux écritures définissent de deux manières différentes bien qu'équivalentes le point $M$. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      On va voir maintenant comment faire la même chose dans un plan. Une droite est un espace de dimension $1$. Il faut une information pour localiser un point. Dans le plan, espace à deux dimensions, deux informations sont nécessaires pour localiser un point. On verra qu'il existe plusieurs manières de faire. On appelle ça des systèmes de coordonnées.  
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h3>Se repérer dans le  plan</h3>
   <h4>Approche intuitive</h4>
   Dans le plan, représenté dans le dessin ci-dessous, on peut repérer tout point à l'aide des ses coordonnées, comme le montre le dessin suivant pour les dix points qui y sont représentés : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d3-points-repere2D.png?raw=true" width=75%>
   On peut voir dix points $M_{1}$ à $M_{10}$ représentés dans ce repère avec par exemple $M_{2}$ et ses coordonnées respectives $x_{M_{2}}$ et $y_{M_{2}}$.<br/>
   Chaque point peut être identifié à l'aide de sa coordonnées horizontale, l'abscisse et verticale, l'ordonnée. En parcourant une distance fixée en abscisse, dans un sens ou dans l'autre, et de la même manière en ordonnée, on trouve un unique point et de la même manière ses coordonnées sont uniques. <br/>
   <strong>De tout point du plan, on peut obtenir les coordonnées et réciproquement, deux coordonnées donnent un unique point. </strong>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <h4>Exercice d'application</h4>
      Considérons la grille suivante : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d4-grille-exo-intro.png?raw=true" width=50%>
      Sur cette grille est un découpage du plan en petits carré, qu'il suffit de compter pour savoir la distance à laquelle on se trouve en abscisse, sur l'axe horizontal  et en ordonnée, sur l'axe vertical.<br/>
      On peut donc placer des point sur cette grille et donner leur emplacement en comptant le nombre de pas franchis horizontalement puis verticalement.<br/>
      Pour avoir un exemple concret, sur cette grille, on place 21 points, de A à V sans le O dont les coordonnées sont $\text{O}=(0;0)$, l'origine du repère. Pour chaque point il est possible de lire ses coordonnées en comptant le nombre de pas pour accéder au point depuis l'origine sur l'axe horizontal puis sur le vertical.<br/>
      Déduire les coordonnés de chacun des points placés dans le repère ci-dessous : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d5-grille-exo-intro.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      La solution : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d6-grille-exo-intro.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <h4>Théorie</h4>
      Une représentation plus précise de ce que peuvent être les coordonnées d'un point dans le plan.
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d7-reper2Dpage4xs.png?raw=true" width=50%>
      Dans le repère $(O;\vec{i};\vec{j})$ est placé le point $M$. Ce dernier a pour coordonnées dans ce repère $x_{M}$ pour abscisse et $y_{M}$ pour ordonnée.<br/>
      On note : 
      \begin{eqnarray}
      M = (x_{M};y_{M}) \text{dans le repère} (O;\vec{i};\vec{j})
      \end{eqnarray}
      Le nombre $x_{M}$ est donné par la valeur trouvée lorsque l'on projette orthogonalement, le point $M$ sur l'axe horizontal. De même pour $y_{M}$ sur l'axe vertical.<br/>
      Pour rejoindre le point $M$ depuis l'origine, il est possible d'écrire la position de ce point selon les vecteurs. Le point $M$ permet de définir le vecteur avec l'origine du repère, soit : $\overrightarrow{OM}$.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Ainsi à l'aides des coordonnées du point $M$, on peut écrire : 
      \begin{eqnarray}
      \overrightarrow{OM} = x_{M}.\vec{i} + y_{M}.\vec{j}
      \end{eqnarray}
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d8-reper2Dpage4+vect.png?raw=true" width=50%>
      Autrement dit, si on parcourt $x_{M}$ fois le vecteur $\vec{i}$ horizontalement et  $y_{M}$ fois le  $\vec{i}$ verticalement depuis l'origine du repère, on tombe sur le point $M$.<br/>
      Le vecteur $\overrightarrow{OM}$ est le vecteur donné par le point $M$ de coordonnées : 
      \begin{eqnarray}
      M = (x_{M};y_{M})\text{ dans } (O;\vec{i};\vec{j})
      \end{eqnarray}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Exercice :</strong> <br/>
      Soit le point $A$ de coordonnées $A = (4;7)$, donner l'expression vectoriel associée.<br/>
      Soit $\overrightarrow{OB} = -3\vec{i} + 5\vec{j}$. Quelle sont ses coordonnées.<br/>
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <button onclick="myFunction()">Afficher</button>
      <div id="exerciseHidden" visibility="hidden">
      <strong>Réponses, respectivement :</strong> <br/>
      Pour le point $A$ il suffit de lire les coordonnées une à une pour les associer à leur vecteur. L'abscisse de $A$ est $4$ donc on quatre fois le vecteur $\vec{i}$. De la même manière, $7$ d'ordonnée implique qu'on a sept fois le vecteur $\vec{j}$. On a  $\overrightarrow{OA} = 4<br/>\vec{i} + 7<br/>\vec{j}$<br/>
      Pour $B$ en revanche il suffit de lire les facteurs devant les vecteurs $\vec{i}$ et $\vec{j}$
      $B = (-3;5)$
      </div>
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <br/>
      <strong>Exercice :</strong> <br/>
      Écrire la combinaison de vecteurs  pour ceux définis par les points suivants ($\overrightarrow{OP_{1}},\overrightarrow{OP_{2}},...$):<br/> 
      \begin{align}
      & P_{1} = (1;3)\\
      & P_{2} = (2;-1) \\
      & P_{3} = (-1;4) \\
      & P_{4} = (4;-1)  \\
      & P_{5} = (-6;5)   \\
      & P_{6} = (-7;-1)   \\
      & P_{7} = (0;-5)     \\
      & P_{8} = (-8;-3)     \\
      & P_{9} = (-2;0)       \\
      & P_{10} = (9;-3)       \\
      & P_{11} = (12;-5)       \\
      & P_{12} = (-11;6)        \\
      \end{align}<br/>
      <strong>Exercice :</strong> <br/>
      A l'inverse, quelles sont les coordonnées des points $M_{1}$ à $M_{12}$ donnés par ces combinaisons de vecteurs : 
      \begin{align}
      & \overrightarrow{OM_{1}} = 2\vec{i} -3\vec{j}\\
      & \overrightarrow{OM_{2}} = \vec{i} + 2\vec{j}  \\
      & \overrightarrow{OM_{3}} = -2\vec{i} + 5\vec{j}  \\
      & \overrightarrow{OM_{4}} = 3\vec{i}  -7\vec{j} -\vec{i} +2\vec{j}   \\
      & \overrightarrow{OM_{5}} = 4\vec{i} + 9\vec{j}  -3\vec{j} + 4\vec{i}   \\
      & \overrightarrow{OM_{6}} = 12\vec{i} + 1\vec{j}   +7\vec{i} -12\vec{j} -15\vec{i}  \\
      & \overrightarrow{OM_{7}} = -5\vec{i} +3\vec{i} - 2\vec{j}                 \\
      & \overrightarrow{OM_{8}} = -7\vec{j} + 5\vec{i}       \\
      & \overrightarrow{OM_{9}} = 5\vec{j}                     \\
      & \overrightarrow{OM_{10}} = -4\vec{i} + 5\vec{j}        \\
      & \overrightarrow{OM_{11}} = -2\vec{i}                      \\
      & \overrightarrow{OM_{12}} = -5\vec{j} +3 \vec{i}                       \\
      \end{align}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <br>
   <hr>
   
   <a href="chapitre-3-les-coordonnees-polaires.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>

  <?php  include 'pieddepage.php';?>