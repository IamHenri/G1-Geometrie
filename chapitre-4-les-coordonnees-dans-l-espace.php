<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">
   </p>

   <p>
<h1>Repères dans l'espace</h1>
 <h2>Approche intuitive</h2>
   Il permet de situer des points dans le volume. Le plan vu jusque-là est un espace à deux dimensions. Pour donner la position d'un élément du plan, deux coordonnées suffisent. Dans l'espace, ou le volume tel qu'on le connait, il faut trois coordonnées pour donner la position de tous les éléments qui le composent. Comme montré dans le dessin suivant, où est représenté un point de l'espace avec ses coordonnées cartésiennes : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-repere3D.png?raw=true" width=50% loading="lazy">  </p>

   <p>
 
   De la même manière que dans le plan il est possible de se repérer, d'avoir sa position où que l'on se trouve. A l'inverse, quel que soit le point que l'on cherche à identifier, il faut des coordonnées pour localiser ce point. Dans l'espace, trois coordonnées sont nécessaires pour déterminer la position d'un point uniquement. Voir  dessin ci-dessus.   </p>

   <p>
 
      <h2>Exemple pratique</h2>
      <h3>Définir un repère</h3>
   Imaginons un cube (et dessinons-le) : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d9-cube1.png?raw=true" width=50%  loading="lazy">
   En général, on nomme un volume par ses sommets : $ABCDEFGH$. Par nature, chacune de ses arrêtes est de même longueur. Posons ici $1$.<br/>
   Prolongeons les arrêtes $AB$, $AD$ et $AF$ et donnons-leur un sens : depuis $A$ vers chaque point. On obtient donc ceci : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d9-cube2.png?raw=true" width=50% loading="lazy">  </p>

   <p>
 
   A partir de ces trois droites, on peut définir un repère direct, qui a le luxe d'être orthonormé (dans un cube toutes les arrêtes ont la même longueur).<br/>
   Considérons les vecteurs $\overrightarrow{AB}$, $\overrightarrow{AF}$ et $\overrightarrow{AD}$. Dans cet ordre (raison : voir ce qu'est un repère direct).  </p>

   <p>
 
   On peut définir à partir de ces trois vecteur le repère : 
   \begin{eqnarray}
   (A;\overrightarrow{AB};\overrightarrow{AF};\overrightarrow{AD})
   \end{eqnarray}
   Considérant ce repère, il est possible de donner les coordonnées de chacun des points du cube, ainsi que ceux rajouté sur le dessin ci-dessous. On considère les points $I_{BC}$, $I_{DE}$ et $I_{FG}$ comme les milieux des segments respectifs. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d9-cube3.png?raw=true" width=50% loading="lazy">
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Réponse : 
      On prend A comme origine du repère pour donner les coordonnées de chaque point, soit grâce à un triplet de coordonnées, soit grâce à une combinaison des vecteurs du repère. 
      \begin{align}
      & A = (0;0;0) &&                 \text{soit: }\overrightarrow{AA} =\overrightarrow{0}\\
      & B = (1;0;0) &&                 \text{soit: }\overrightarrow{AB} =     1.\overrightarrow{AB}   \\
      & C = (1;0;1) &&                 \text{soit: }\overrightarrow{AC} =     1.\overrightarrow{AB} + 1.\overrightarrow{AD}      \\
      & D = (0;0;1) &&                 \text{soit: }\overrightarrow{AD} =  1.\overrightarrow{AD} \\
      & E = (0;1;1) &&                 \text{soit: }\overrightarrow{AE} =  1.\overrightarrow{AF} + 1.\overrightarrow{AD} \\
      & F = (0;1;0) &&                 \text{soit: }\overrightarrow{AF} =  1.\overrightarrow{AF} \\
      & G = (1;1;0) &&                 \text{soit: }\overrightarrow{AG} =     1.\overrightarrow{AB} + 1.\overrightarrow{AF}  \\
      & H = (1;1;1) &&                 \text{soit: }\overrightarrow{AH} =     1.\overrightarrow{AB} + 1.\overrightarrow{AF} + 1.\overrightarrow{AD}   \\
      & I_{BC} = (1;0;\dfrac{1}{2}) &&          \text{soit: }\overrightarrow{AI_{BC}} = 1.\overrightarrow{AB} +\dfrac{1}{2}.\overrightarrow{AD}\\
      & I_{DE} = (0;\dfrac{1}{2};1) &&          \text{soit: }\overrightarrow{AI_{DE}} =  \dfrac{1}{2}.\overrightarrow{AF} +1.\overrightarrow{AD} \\
      & I_{FG} = (\dfrac{1}{2};1;0) &&          \text{soit: }\overrightarrow{AI_{FG}} =\dfrac{1}{2}.\overrightarrow{AB} + 1.\overrightarrow{AF}\\
      \end{align}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Dans cet exercice / exemple, un élément est mis en exergue mais peut très bien être omis : le facteur $1$ devant les vecteurs comme par exemple $\overrightarrow{AB} =     1.\overrightarrow{AB}$. Écrire  $\overrightarrow{AB} =\overrightarrow{AB}$ n'est pas très explicite dans le contexte. Dans l'exercice, pour rejoindre le point B, depuis A, une fois le vecteur $\overrightarrow{AB}$ permet de tomber exactement sur le point $B$. Etc. Aussi triviale soit cette vision, elle permet de comprendre une construction <i>Ad Hoc</i> d'un repère orthonormé. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Application </h3>
   <p>
      <strong></strong><br/>
      Basé sur le cube ci-dessus :
      Donner une combinaison de vecteurs pour passer d'un point à un autre en n'utilisant uniquement les vecteurs du repère $ (A;\overrightarrow{AB};\overrightarrow{AF};\overrightarrow{AD})$. 
      Par exemple, pour aller du point $B$ au point $F$ : 
      On applique au point $B$ une fois le vecteur $\overrightarrow{AF}$, ce qui permet d'arriver sur le point $G$.
      Puis partant de $G$ on applique le vecteur $\overrightarrow{BA}$, soit moins une fois le vecteur $\overrightarrow{AB}$ et on arrive sur le point $F$.<br/>
      Écrire de même pour le chemin menant de : 
   <ul>
      <li> de $G$ vers $E$;</li>
      <li> de $A$ vers $H$.</li>
   </ul>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Réponse :</strong> 
      De $G$ vers $E$ : 
   <ul>
      <li> par décomposition du vecteur  $\overrightarrow{GE}$ sur $F$ : $\overrightarrow{GE} = \overrightarrow{GF} + \overrightarrow{FE}$ grâce à la relation de Chasles;</li>
      <li> comme $\overrightarrow{GF} =\overrightarrow{BA} = -\overrightarrow{AB}$  et $\overrightarrow{FE} =\overrightarrow{AD}$; </li>
   </ul>
   alors on peut écrire :
   \begin{align}
   \overrightarrow{GE}  & =\overrightarrow{GF} +\overrightarrow{FE} \\
   & =\overrightarrow{AB} +\overrightarrow{AD}
   \end{align}
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/chap3-exemple3d1.png?raw=true" width=50% loading="lazy">
   De $A$ vers $H$ : 
   <ul>
      <li> par décomposition du vecteur  $\overrightarrow{AH} \text{ sur } D$ et le point $C$, </li>
      <li> et comme $\overrightarrow{GF} =\overrightarrow{AB}$ et $\overrightarrow{FE} =\overrightarrow{AC}$ alors on peut écrire :  </li>
   </ul>
   \begin{align*}
   \overrightarrow{AH}  &=\overrightarrow{AD} +\overrightarrow{DC}+\overrightarrow{CA} \\
   & =\overrightarrow{AB} +\overrightarrow{AF} +\overrightarrow{AD}
   \end{align*}
   On aurait tout à fait pu opérer une autre décomposition du vecteur $\overrightarrow{AH}$ sur les points $B$ et $G$ par exemple.<br/>
   Les vecteurs sont des objets mathématiques parfaitement naturels à employer dans ces repères. 
   </p>
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/chap3-exemple3d2.png?raw=true" width=50% loading="lazy">
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->






  <h2>Théorie</h2>
  <h3>Présentation</h3>
   Cette section plus théorique formalise un peu plus rigoureusement les éléments présentés jusque là. Dans l'espace, à trois dimensions, nous définissons un repère ayant une origine et trois vecteurs. On appelle ces trois vecteur la base de cet espace.<br/>
   <h3>Formalisation</h3>
   Jusque-là, pour se repérer dans le volume (abusivement appelé espace, car laissant supposer que l'espace n'a que trois dimensions, alors qu'en maths un espace peut avoir autant de dimension que l'on veut) nous avons utilisé le système de coordonnées cartésien, où chaque point est définit à l'aide de trois coordonnées, l'abscisse, l'ordonnée et la cote. Dans ce schéma pour un repère dans l'espace, on définit un point $M$ à l'aide de ses trois coordonnées : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-repere3D.png?raw=true" width=50%>
   Alors on exprime les coordonnées de $M$ dans ce repère par :
   \begin{eqnarray}
   M = (x_{M};y_{M};z_{M})\text{ dans } (O;\vec{i};\vec{j};\vec{k})
   \end{eqnarray}
   Où $x_{M}$, $x_{M}$ et $x_{M}$ sont des nombres quelconques.
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      On peut aussi écrire les coordonnées de $M$ à l'aide des vecteurs de la base de l'espace: $(\vec i ; \vec j; \vec k)$. On obtient alors : <br/>
   $$   
   \overrightarrow{OM} = x_{M}\vec{i} + y_{M}\vec{j} + z_{M}\vec{k}
   $$
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
     Un autre exemple avec cette représentation, où on peut lire que le point $M$ a pour coordonnées $(2;1;2)$. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/RepereMaths20200922-3Dexemple.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <strong>Exercice :</strong> <br/>
   Écrire la combinaison de vecteurs  pour ceux définis par les points suivants ($\overrightarrow{OP_{1}},\overrightarrow{OP_{2}},...$) dans la base $(\vec{i} ; \vec{j} ; \vec{k})$:<br/> 
   \begin{align}
   & P_{1} = (1;3;2)\\
   & P_{2} = (2;-1;-1) \\
   & P_{3} = (-1;4;3) \\
   & P_{4} = (4;-1;2)  \\
   & P_{5} = (-6;-1;5;)   \\
   & P_{6} = (0;-7;-1)   \\
   & P_{7} = (0;-5;0)     \\
   & P_{8} = (-8;0;-3)     \\
   & P_{9} = (-2;0;7)       \\
   & P_{10} = (9;-3;0)       \\
   & P_{11} = (12;-5;1)       \\
   & P_{12} = (-11;6;-2)        \\
   \end{align}<br/>
   <strong>Exercice :</strong> <br/>
   A l'inverse, quelles sont les coordonnées des points $M_{1}$ à $M_{12}$ donnés par ces combinaisons de vecteurs : 
   \begin{align}
   & \overrightarrow{OM_{1}} = 2\vec{i} -3\vec{j} -3\vec{k}\\
   & \overrightarrow{OM_{2}} = \vec{i} -3\vec{j} + 2\vec{k}  \\
   & \overrightarrow{OM_{3}} = -2\vec{i} -3\vec{j} + 5\vec{k}  \\
   & \overrightarrow{OM_{4}} = 3\vec{i} -3\vec{k}  -7\vec{j} -\vec{k} +2\vec{j}   \\
   & \overrightarrow{OM_{5}} = 4\vec{i} + 9\vec{j}  -3\vec{j} + 4\vec{i}   \\
   & \overrightarrow{OM_{6}} = 12\vec{i} -3\vec{k} + 1\vec{j}   +7\vec{i} -12\vec{k} -15\vec{i}  \\
   & \overrightarrow{OM_{7}} = -5\vec{i} -3\vec{j} +3\vec{i} - 2\vec{j}                 \\
   & \overrightarrow{OM_{8}} = -7\vec{j} + 5\vec{k}       \\
   & \overrightarrow{OM_{9}} = 5\vec{j} -3\vec{j} -3\vec{j}                     \\
   & \overrightarrow{OM_{10}} = -4\vec{i} + 5\vec{j} -3\vec{j}        \\
   & \overrightarrow{OM_{11}} = -2\vec{i} -3\vec{k} -3\vec{j}                     \\
   & \overrightarrow{OM_{12}} = -5\vec{k} +3 \vec{i}  -3\vec{k}   -3\vec{j}                    \\
   \end{align}
   </p>
   <!--  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%    -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
 <h2>Problème de géométrie dans l'espace</h2>
 <h3>Questions dans un autre cube</h3>
   <!-- Source : https://www.annales2maths.com/ts-exercices-corriges-geometrie-lespace/ -->
   
      Attention, les noms des arrêtes sont différents de l'exercice précédent.

   <p>Soit le cube $ABCDEFGH$ ci-dessous. On pose $AB= 1$ : la longueur de son arrête vaut   $1$, représenté ci-dessous. On munit naturellement l&#8217;espace du repère orthonormé   $\left(A;\overrightarrow{AB},\overrightarrow{AD},\overrightarrow{AE}\right)$.
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/exo-Cube01.png?raw=true" width=75% loading="lazy"></p>
   <p>&nbsp;</p>
   <ol>
   <li>Déterminer une représentation paramétrique de la droite $(FD)$.<br />
   $\quad$</li>
   <li>Déterminer un vecteur normal du plan $(BGE)$.<br />
      $\quad$</li>

      <li>
      Déterminer une équation du plan $(BGE)$.<br />
   $\quad$</li>
   <li>Montrer que la droite $(FD)$ est perpendiculaire au plan $(BGE)$.<br />
   $\quad$</li>
   <li>Déterminer les coordonnées du point $K$ intersection de la droite $(FD)$ et du plan $ (BGE)$.<br />
   $\quad$</li>
   <li>Quelle est la nature du triangle $BEG$? Déterminer son aire.<br />
   $\quad$</li>
   <li>En déduire le volume du tétraèdre $BEGD$.<br />
   $\quad$</li>
   </ol>
   </p>

   <p><h3>Correction</h3>

   <ol>
   <li>A l'image de l'exercice précédent, ce cube nous permet de construire un repère  orthonormé à l'aide de trois de ses arrêtes. On pose donc le repère  $\left(A; \overrightarrow{AB},\overrightarrow{AD},\overrightarrow{AE}\right)$ où on a $F(1;0;1)$ et $D  (0;1;0)$.<br />
   Par conséquent $\overrightarrow{FD}(-1;1;-1)$.<br />
   On peut donc obtenir une représentation paramétrique de la droite $(FD)$ est $\begin{cases}  x=1-t\\y=t\\z=1-t\end{cases} \qquad t\in \mathbb{R}$.<br /><br />
   <strong>Rappel</strong> : <br />
   Pour obtenir la représentation paramétrique d'une droite dans l'espace, un point et un    vecteur lui appartenant suffisent à la définir. On a le point $F$ et le vecteur  $\overrightarrow{FD}$ : $\overrightarrow{OM}(t) = \overrightarrow{OF} + t.\overrightarrow  {FD}$. Ce qui est donné par le système au-dessus du point de vue de composantes. 
   $\quad$</li>

   <li>On a $B(1;0;0)$, $G(1;1;1)$ et $E(0;0;1)$.<br />
   On obtient les deux vecteurs $\overrightarrow{BG}(0;1;1)$ et $\overrightarrow{BE}(-1;0;1)$.  <br />
   Ils ne sont clairement pas colinéaires (on le vérifie à l'aide du produit vectoriel).<br />
   Ce produit vectoriel permet d'ailleurs d'obtenir un vecteur normal. On calcul celui de    $\overrightarrow{BG}$ et $\overrightarrow{BE}$ : 
   \begin{align}
   \overrightarrow{BG} \wedge \overrightarrow{BE} = (1;-1;1)
   \end{align}
   On pose $\vec{n}=(1;-1;1)$ vecteur normal de $(BGE)$.
   $\quad$</li>

   <li>On peut vérifier à l'aide du produit scalaire l'orthogonalité du vecteur normal avec  $\overrightarrow{BG}$ et $\overrightarrow{BE}$. On a $\vec{n}.\overrightarrow{BG}=0-1+1=0$    et $\vec{n}.\overrightarrow{BE}=-1+0+1=0$.<br />
   Le vecteur $\vec{n}$ est donc orthogonal à deux vecteurs non colinéaires du plan $(BGE)$ :   il est  normal à ce plan.<br />
   $\quad$<br />
   On sait que l'équation générale d'un plan est $ax+by+cz+d=0$ et que son vecteur normal est   $\vec{n}(a;b;c)$. Donc, en appliquant cela ici, une équation du plan $(BGE)$ est alors de   la forme $x-y+z+d=0$.<br />
   Le point $B(1;0;0)$ appartient au plan.<br />
   Par conséquent $1+0+0+d=0$ donc $d=-1$.<br />
   Une équation cartésienne du plan $(BGE)$ est donc $x-y+z-1=0$.<br />
   $\quad$</li>

   <li>Pour montrer cette orthogonalité, il faut et il suffit de prouver qu'un vecteur de la    droite $(FDO$ par exemple $\overrightarrow{FD}$ est colinéaire au vecteur normal du plan.    On a $\overrightarrow{FD}(-1;1;-1)$ et $\vec{n}(1;-1;1)$.<br />
   On voit que  $\overrightarrow{FD}=-\vec{n}$.<br />
   La droite $(FD)$ est donc perpendiculaire au plan $(BGE)$.<br />
   Une autre méthode plus laborieuse serait de calculer le produit vectoriel de  $\overrightarrow{FD}$ avec $\vec{n}$. Le résultat nul prouverait la colinéarité. 
   $\quad$</li>

   <li>$K$ est le point d'intersection de la droite $(DFL$ et du plan $(BGE)$. Ses coordonnés   vérifient celle de de l'équation de la droite et celle du plan. Donc, les coordonnées du    point $K$ sont solutions du système :<br />
   $\begin{align*} \begin{cases}x=1-t\\y=t\\z=1-t\\x-y+z-1=0\end{cases} &amp;\iff \begin{cases} x=1-t\\y=t\\z=1-t\\1-t-t+1-t-1=0\end{cases}\\<br />
   &amp;\iff \begin{cases}x=1-t\\y=t\\z=1-t\\1-3t=0\end{cases} \\<br />
   &amp;\iff \begin{cases}x=1-t\\y=t\\z=1-t\\t=\dfrac{1}{3}\end{cases} \\<br />
   &amp;\iff \begin{cases}x=\dfrac{2}{3}\\y=\dfrac{1}{3}\\z=\dfrac{2}{3}\\t=\dfrac{1}{3}\end {cases}<br />
   \end{align*}$<br />
   Ainsi $K\left(\dfrac{2}{3};\dfrac{1}{3};\dfrac{2}{3}\right)$.<br />
   $\quad$</li>

   <li>On peut remarquer comme $\overrightarrow{BG}$, $\overrightarrow{BE}$ et $\overrightarrow {GE}$ sont les diagonales des carrés $BCGF$, $ABFE$ et $EFGH$ respectivement, le triangle  $BGE$ est équilatéral.<br />
      Calculons maintenant les coordonnées de $K$. On a : $\overrightarrow{BG}(0;1;1)$,   $\overrightarrow{BE}(-1;0;1)$ et $\overrightarrow{GE}(-1;-1;0)$.<br />
   Donc $BG=\sqrt{0^2+1^2+1^2}=\sqrt{2}$<br />
   $BE=\sqrt{(-1)^2+0+1^2}=\sqrt{2}$<br />
   $GE=\sqrt{(-1)^2+(-1)^2+0}=\sqrt{2}$<br />
   Le triangle $BGE$ est donc équilatéral (démontré cette fois-ci par le calcul).<br />
   Comme dans un triangle équilatéral, les médianes sont aussi des hauteurs, on va chercher  $I$ milieu de $[BE]$.<br />
   Donc soit $I$ milieu du segment $[BE]$.<br />
   Ainsi $I\left(\dfrac{1}{2};0;\dfrac{1}{2}\right)$.<br />
   On cherche à calculer la longueur de $BJ$ (hauteur du triangle) pour calculer son aire. <br  />
   On a : $GI=\sqrt{\left(1-\dfrac{1}{2}\right)^2+1^2+\left(1-\dfrac{1}{2}\right)^2}=\sqrt   {\dfrac{3}{2}}$.<br />
   Par conséquent l&#8217;aire du triangle $BEG$ est :<br />
   $\begin{align*} \mathscr{A}&amp;=\dfrac{GI\times BE}{2}\\<br />
   &amp;=\dfrac{\sqrt{\dfrac{3}{2}}\times \sqrt{2}}{2}\\<br />
   &amp;=\dfrac{\sqrt{3}}{2}<br />
   \end{align*}$.<br />
   $\quad$</li>

   <li>On trouve la longueur $KD$ en appliquant le théorème de Pythagore : $KD=\sqrt{\left   (-\dfrac{2}{3}\right)^2+\left(1-\dfrac{1}{3}\right)^2+\left(-\dfrac{2}{3}\right)^2}=\sqrt {\dfrac{4}{3}}$.<br />
   Le volume du tétraèdre $BEGD$ est donc :<br />
   $\begin{align*} \mathscr{V}&amp;=\dfrac{\mathscr{A}\times KD}{3} \\<br />
   &amp;=\dfrac{\dfrac{\sqrt{3}}{2}\times \sqrt{\dfrac{4}{3}}}{3} \\<br />
   &amp;=\dfrac{1}{3}<br />
   \end{align*}$</li>
   </ol>
   </p>

   <p><h3>Exercice d'application</h3>
      <!-- source :  https://lecluseo.scenari-community.org/TS/Ch08Espace_web_gen_auroraWSH.zip/co/ER_CalculsCorrd.html-->
   L'espace est rapporté à un repère orthonormé $(O;\vec{i};\vec{j};\vec{k})$. On considère les points $A(−1;3;1)$, $B(3,1,−1)$, $C(1;−3;−1)$ , $D(−5;0;2)$.</p>
   
   <p><strong>Question : Justifier que ABC est un triangle rectangle</strong></p>
   <p><strong>Réponse</strong></p>
   <p>On calcul la longueur de chacun des cotés : 
      $$
      AB^2=(3-(-1))^2+(1-3)^2+(-1-1)^2=24\\
      AC^2=(1-(-1))^2+(-3-3)^2+(-1-1)^2=44\\
      BC^2=(1-3)^2+(-3-1)^2+(-1-(-1))^2=20
      $$
   </p>

   <p>On voit que $AC^2=AB^2+BC^2$. Donc, la réciproque du théorème de Pythagore est vérifiée. </p>
   
   <p><strong>Question : Montrer que $\overrightarrow{AB}$ et $\overrightarrow{CD}$ sont colinéaires</strong></p>
   <p><strong>Réponse</strong></p>
   <p>On a : 
      $$
      \overrightarrow{AB} \left (\begin{array}{c}3-(-1)\\1-3\\-1-1\end{array}\right )
      $$
      d'où :
      $$
      \overrightarrow{AB} \left (\begin{array}{c}4\\-2\\-2\end{array}\right )
      $$
      et
      $$
      \overrightarrow{CD} \left (\begin{array}{c}-5-1\\0-(-3)\\2-(-1)\end{array}\right )
      $$
      qui donne : 
      $$
      \overrightarrow{CD} \left (\begin{array}{c}-6\\3\\3\end{array}\right )
      $$
      Donc on peut voir que : 
      $$
      \overrightarrow{CD}=-\dfrac{3}{2}\overrightarrow{AB}
      $$
      Pour trouver ce rapport, si il ne saute pas aux yeux, regarder si le rapport de abscisses vaut le rapport des ordonnées : 
      $$
      \dfrac{x_{\overrightarrow{CD}}}{x_{\overrightarrow{AB}}} = \dfrac{y_{\overrightarrow{CD}}}{y_{\overrightarrow{AB}}}
      $$
      Si il y a égalité, alors les vecteurs sont colinéaires. 
   </p>

   <p>Si les vecteurs sont colinéaires, cela signifie que leurs directions sont parallèles. Donc les droites $(AB)$ et $(CD)$ sont parallèles. Ce qui signifie que les vecteurs sont dans le même plan. On dit coplanaires.  </p>
   
   <p>Si trois points de l'espace permettent de définir un plan, alors quatre points sont rarement sur le même plan. </p>
   

   
   <p>Geogebra est un outil très pratique, permettant de représenter différents repères tridimensionnels. <a href="https://www.geogebra.org/m/h6PRQQGe" target="_blank">Voir ce lien</a>.  </p>
   


   <br>
   <hr>
   <a href="chapitre-5-les-coordonnees-cylindriques.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>
