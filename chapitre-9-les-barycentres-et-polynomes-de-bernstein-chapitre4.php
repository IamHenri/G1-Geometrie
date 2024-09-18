<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>4 - Les barycentres</h1>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Barycentres mouvants</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Présentation de cette notion</h3>
   On pourrait prendre un langage mathématiques plus soutenu, en disant "barycentres dynamiques". Resons explicites! Cette section est une présentation de la construction des courbes de Béziers. Ces courbes permettent de convertir un chemin constitué de segments en un chemin lisse sans aspérité. Au sens des mathématiques, une aspérité signifie qu'à cet endroit la fonction n'est pas dérivable. Notion à creuser dans le document traitant des fonctions réelles. 
   </p>
   <p>
      Dans cette section on va construire les coordonnées du barycentre d'un segment, en faisant varier les poids aux extrémités et en assurant que leur somme vaut 1. Cette construction permet de définir chaque point d'un segment comme étant la coordonnée d'un barycentre du segment. 
   </p>
   <p>
      Nous allons commencer par modéliser un segment. Puis nous allons considérer deux segments ayant une extrémité commune et modéliser simultanément ces deux segments. On obtiendra alors deux points, sur lesquels nous appliquerons à nouveau cette modélisation. Et ainsi de suite. On verra que les courbes ainsi définies sont facilement manipulables. Pour commencer, nous allons apprendre à modéliser un segment, qui est est une autre manière de dire que nous allons le représenter comme l'ensemble de ses barycentres (voir définition du segment du point de vue des barycentres).
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Modélisation d'un segment</h3>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Paramétrisation d'un segment</h5>
   </p>
   <p>
      Cette sous section utilise un principe de modélisation des courbes, segments, domaines que l'on retrouve essentiellement dans l'étude des fonctions à $n$ variables. 
      On a besoin de construire un fonction avec un paramètre, $i.e$ une variable qui permet de parcourir le segment. On va supposer $t$ cette variable et qu'elle prend ses valeurs entre $0$ et $1$ de manière à ce que lorsque $t=0$ on se trouve sur une extrémité du segment et qu'en $t=1$ on se trouve à l'autre. Si on définit la fonction $\gamma(t)$ comme ceci, on obtient ce que l'on veut. 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B10.png?raw=true" width=50%>
      Un segment dans le plan ou dans l'espace, définit par deux points $P_{0}$ et $P_{1}$ dans un repère d'origine $O$ : 
      \begin{align*}
      \gamma : &[0;1]    \longrightarrow   \mathbb{R}^{n} \\
      &t \longmapsto  \gamma(t) = (1-t) . \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}\\
      \end{align*}
      Si $n = 2$ on la paramétrisation est dans le plan, si $n = 3$ elle est dans l'espace. 
      Ces formulations vectorielles sont les mêmes dans le plan ou dans l'espace, c'est du point de vue des composants des vecteurs que l'on voit une troisième dimension pour les segments de l'espace. Du point de vue des coordonnées : 
      \begin{align*}
      \gamma : &[0;1]    \longrightarrow   \mathbb{R}^{2} \\
      &t \longmapsto  \gamma(t) = \left( \begin{array}{ccc}
      (1-t) . x_{\overrightarrow{OP_{0}}} + t . x_{\overrightarrow{OP_{1}}} ;\\
      (1-t) . y_{\overrightarrow{OP_{0}}} + t . y_{\overrightarrow{OP_{1}}}\\
      \end{array} \right)\\
      \end{align*}
      Les coordonnées des vecteurs sont réduites aux coordonnées des points, les vecteurs partant tous de l'origine du repère : 
      \begin{align*}
      \gamma(t) = \left( \begin{array}{ccc}
      (1-t) . x_{P_{0}} + t . x_{P_{1}} \\
      (1-t) . y_{P_{0}} + t . y_{P_{1}}\\
      \end{array} \right)\\
      \end{align*}
      Dans $\mathbb{R}^{3}$,  on a : 
      \begin{align*}
      \gamma(t) = \left( \begin{array}{ccc}
      (1-t) . x_{P_{0}} + t . x_{P_{1}} \\
      (1-t) . y_{P_{0}} + t . y_{P_{1}}\\
      (1-t) . z_{P_{0}} + t . z_{P_{1}}\\
      \end{array} \right)\\
      \end{align*}
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Exemple d'application :</h5>
   </p>
   <p>
      Donner le chemin du point $P_{0} = (2;1)$ au point $P_{1} = (-2 ; 5)$ 
      \begin{align*}
      \gamma(t) = \left( \begin{array}{ccc}
      (1-t) . 2 + t . (-2) ;\\
      (1-t) . 1 + t . 5\\
      \end{array} \right) = \left( \begin{array}{ccc}
      2 -2.t -2.t ;\\
      1 -t +5.t\\
      \end{array} \right)= \left( \begin{array}{ccc}
      -4.t + 2 ;\\
      4.t + 1\\
      \end{array} \right)\\
      \end{align*}
      Donc le chemin $\gamma(t)$ est :
      \begin{align*}
      \gamma(t) = \left( \begin{array}{ccc}
      -4.t + 1 ;\\
      4.t + 1\\
      \end{array} \right)\\
      \end{align*}
      On a bien : 
      \begin{align*}
      \gamma(0) = \left( \begin{array}{ccc}
      -4.0 + 2 ;\\
      4.0 + 1\\
      \end{array} \right)= \left( \begin{array}{ccc}
      2 ;\\
      1\\
      \end{array} \right)= \left( \begin{array}{ccc}
      x_{P_{0}}\\
      y_{P_{0}}\\
      \end{array} \right) = \overrightarrow{OP_{0}}
      \end{align*}
      En $t = 0$ on se trouve bien en $P_{0}$. Et en $t = 1$ : 
      \begin{align*}
      \gamma(1) = \left( \begin{array}{ccc}
      -4.1 + 2 ;\\
      4.1 + 1\\
      \end{array} \right)= \left( \begin{array}{ccc}
      -2 ;\\
      5\\
      \end{array} \right)= \left( \begin{array}{ccc}
      x_{P_{1}}\\
      y_{P_{1}}\\
      \end{array} \right) = \overrightarrow{OP_{1}}
      \end{align*}
      Comment s'assurer que ce chemin parcourt bien le segment de $P_{0}$ à $P_{1}$, et pas un autre trajet? Pour répondre à cette question, deux moyens, l'un graphique et l'autre analytique. 
      <hr/>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Quel est le chemin obtenu avec cette paramétrisation?</h5>
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B70.png?raw=true" width=50%>
   <hr/>
     
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Démonstration visuelle : </h5>
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B20.png?raw=true" width=50%>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Représentation de la construction</h5>
   Pour plusieurs valeurs de $t$ on représente la somme des vecteurs $ (1-t) . \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}$:
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B21.png?raw=true" width=50%>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Démonstration mathématiques : </h5>
   Le point $M(t)$ est construit par la relation $\overrightarrow{OM} = (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}$ qui est équivalente à ceci :  $\overrightarrow{P_{0}M} = t . \overrightarrow{P_{0}D}$. Ce qui répond à la question. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Exercice :</h5>
   </p>
   <p> 
      Vérifier l'équivalence ci dessus:
      <strong>Solution, en détail :</strong><br/> 
   </p>
   <p> 
      Soit $M(t)$ : 
      \begin{align*}
      \overrightarrow{OM} &  = (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}&&\text{développer l'expression} \\
      &  = 1. \overrightarrow{OP_{0}}  - t . \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}&& \text{éliminer le signe -}\\
      &  = \overrightarrow{OP_{0}}  + t . \overrightarrow{P_{0}O} +  t . \overrightarrow{OP_{1}}&& \text{factoriser par $t$}\\
      &  = \overrightarrow{OP_{0}}  + t . (\overrightarrow{P_{0}O} +  . \overrightarrow{OP_{1}})&& \text{appliquer la relation de Châsles}\\
      &  = \overrightarrow{OP_{0}}  + t . (\overrightarrow{P_{0}P_{1}}) &&  \\
      \end{align*}
      On obtient : 
      \begin{align*}
      \overrightarrow{OM} -  \overrightarrow{OP_{0}} =   t . (\overrightarrow{P_{0}P_{1}})  & \,\, \text{ soustraire $\overrightarrow{OP_{0}}$ des deux cotés} \\
      \overrightarrow{OM} +  \overrightarrow{P_{0}O} =  t . (\overrightarrow{P_{0}P_{1}}) &\,\,  \text{ éliminer le signe -} \\
      \overrightarrow{P_{0}O} +  \overrightarrow{OM} =   t . (\overrightarrow{P_{0}P_{1}})  & \,\, \text{ appliquer la relation de Châsles}\\
      \overrightarrow{P_{0}M} =   t . (\overrightarrow{P_{0}P_{1}}) & \,\, \\
      \end{align*}
      Donc les vecteurs $\overrightarrow{P_{0}M}$ et $\overrightarrow{P_{0}P_{1}}$ sont colinéaires. 
   </p>
   <p>
      Cette construction est valable  quelque soit la dimension de l'espace $i.e$ dans le plan ou dans l'espace. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Paramétrer un segment c'est définir un chemin</h3>
   On a commencé par définir un chemin entre deux points : le segment, qui part d'une extrémité pour arriver à l'autre. En général on appelle ces chemins à l'aide de la lettre grecque $\gamma$ minuscule.  On peut donc utiliser une fonction $\gamma(t)$, qui a deux coordonnées dans le plan et trois dans l'espace. Soit  $\gamma(t) = (\gamma_{x}(t) ;\gamma_{y}(t) )$ dans $\mathbb{R}^{2}$, ou $\gamma(t) = (\gamma_{x}(t) ;\gamma_{y}(t) ;\gamma_{z}(t) )$ dans $\mathbb{R}^{3}$. 
   </p>
   <p>
      Dans le premier cas on définit un chemin dans le plan, qui sera continu si les fonctions qui définissent ses coordonnées le sont. De la même manière, avec trois coordonnées, le deuxième cas, on définit un chemin dans l'espace. 
   </p>
   <p>
      Dans la suite on voit les coordonnées données par la fonction $\gamma$ comme celles d'un point $M(t)$. On pourrait poser $\gamma(t) = \overrightarrow{OM(t)}$, ce qui est vrai du point de vue des coordonnées. 
   </p>
   <p>
      On utilisera dans la suite le point $M(t)$ au lieu du chemin. On peut se représenter les choses en se disant que $M(t)$ est le point que parcourt le chemin défini par la fonction $\gamma(t)$. 
   </p>
   <p>
      Ce point $M(t)$ est donné par ses coordonnées. On peut aussi voir ce point comme l'extrémité du vecteur $ \overrightarrow{OM(t)}$. Les coordonnées sont identiques. Seules la notation change. Horizontalement pour le point et verticalement pour un vecteur. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Exercices</h3>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Exercice1 :</h4>
   </p>
   <p>
      Soient les point $P_{0} = (2;3;1)$ et $P_{1} = (-1;1;3)$, donner l'équation vectorielle du chemin modélisant le segment $[P_{0}P_{1}]$. Puis donner les e=équations du point de vue des composantes. 
      <strong>Solution : </strong><br/>
   </p>
   <p>
      $	\overrightarrow{OM}   = (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}$ , $M(t)$ parcourant le segment $[P_{0}P_{1}]$.
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Exercice 2 :</h4>
</p>
<p>
      Soient les point $A = (1;0;0)$, $B = (0;1;0)$ et $C = (0;0;1)$. Donner l'équation du triangle. 
   
   </p>
   <p>
      <strong>Solution : </strong><br/>
   </p>
   <p>
      soit $\gamma_{ABC}(t)$ le chemin qui parcourt le triangle. Alors On peut décomposer ce chemin en trois segments: $\gamma_{ABC}(t) = \gamma_{AB}(t) + \gamma_{BC}(t) + \gamma_{CA}(t)$ et ainsi donner le paramétrage de chaque segment. On peut soit diviser l'intervalle $[0;1]$ trois sous intervalle :  $t \in [0;1/3[$,   $t \in [1/3;2/3[$ puis  $t \in [2/3;1]$   , soit se placer sur  $[0;3]$ $i.e$ avoir trois segments parcourus respectivement pour $t \in [0;1[$,   $t \in [1;2[$ puis  $t \in [2;3]$. Il faut alors adapter la variable $t$ dans les équations des chemins sur les trois segments.
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Exercice 3 : </h4>
   Modéliser une demi-droite
   </p>
   <p>
      <strong>Solution : </strong><br/>
   </p>
   <p>
      Pour modéliser une demie droite, on a besoin d'un point de départ, appelons le $A$ et d'un vecteur non nul $\vec{v}$ pour définir la direction et le sens de parcourt de cette demie droite. 
      \begin{align*}
      \overrightarrow{OM}(t) =  \overrightarrow{OA} +  t . \vec{v} 
      \end{align*}
      Ce qui du point de vue des coordonnées donne dans $\mathbb{R}^{3}$, pour $M(t) = (x(t);y(t);z(t))$ donne : 
      \begin{eqnarray*}\label{coord3DBarGamma} 
      x_{M(t)}  = x_{A} + t.x_{v} &&  \\
      y_{M(t)} =  y_{A} + t.y_{v} &&  \\
      z_{M(t)} =  z_{A} + t.z_{v} &&  \\
      \end{eqnarray*} 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>liens avec les barycentres</h3>
   Le point $M(t)$ qui parcourt le segment est à chaque instant $t$ le barycentre des points $A ; 1-t$ et $B ; t$. Si on applique la formule vectorielle du barycentre aux point $A$, $B$ et $M$, avec $M$ barycentre du système $\{(A ; 1-t );(B ; t)\}$. La somme des poids vaut 1 à chaque instant, donc non nulle et  le barycentre existe à chaque instant. La relation vectorielle obtenue des barycentres nous donne : 
   \begin{align*}
   (1-t) . \overrightarrow{MP_{0}} + t .  \overrightarrow{MB} =  \overrightarrow{0} \\
   \end{align*}
   Et les coordonnées de $M(t)$, le barycentre de ces deux points est donné par ces formules : 
   \begin{eqnarray*}\label{coord3DBarGamma2}
   x_{M(t)}  = (1-t).x_{P_{0}} + t.x_{B}  \\
   y_{M(t)} =  (1-t).y_{P_{0}} + t.y_{B}   \\
   z_{M(t)} =  (1-t).z_{P_{0}} + t.z_{B}  
   \end{eqnarray*} 
   Pour $t \in [0;1]$.
   </p>
   <p>
      Pour ces valeurs de $t$, on a définit la trajectoire d'un point $M$ qui relie deux points à l'aide d'une courbe paramétrique. Pour l'instant on a vu cette paramétrisation entre pour un segment du plan ou de l'espace. On va voir dans la suite que l'on peut appliquer ces modèles à plusieurs segments contigus pour obtenir des courbes lisses et harmonieuses. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Modélisation simultanée de deux segments</h3>
   Dans cette nouvelle section, on va parcourir deux segments simultanément. Ces deux segments partagent une extrémité. On a donc trois points, que l'on appelle $P_{0}$, $P_{1}$ et $P_{2}$, comme par exemple ci dessous : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B30.png?raw=true" width=50%>
   On considère donc deux point, $M_{0}$ et $M_{1}$, qui parcourent en même temps les segments $[P_{0} ;P_{1}]$  et $[P_{0} ;P_{1}]$  simultanément et respectivement. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B31.png?raw=true" width=50%>
   On doit donc disposer des coordonnées de deux points en fonction de $t$. Donc soient les points  $M_{0}(t)$  et  $M_{1}(t)$ tels que <span id="eq01">ref.[1]</span>: 
   \begin{align}\label{om0om1op0op1}
   \overrightarrow{OM_{0}} &  = (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}\\
      \overrightarrow{OM_{1}} &  = (1 - t ). \overrightarrow{OP_{1}} + t . \overrightarrow{OP_{2}}\\
      \end{align}
      Les points $M_{0}(t)$  et  $M_{1}(t)$ sont les barycentres respectifs des segments $[P_{0} ;P_{1}]$  et $[P_{0} ;P_{1}]$. L'idée est maintenant de regarder ce qu'est le barycentre des points $M_{0}(t)$  et  $M_{1}(t)$ avec les poids respectifs $(1-t)$ et $t$. 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B32.png?raw=true" width=50%>
      De la même manière on peut paramétrer le chemin de $M_{0}(t)$  et  $M_{1}(t)$, en faisant parcourir à ce segment un point $M(t)$ toujours pour $0 \leq t \leq 1$. 
   </p>
   <p>
      Selon ce qui est dit dans ce document, on peut disposer à chaque instant $t$ de la positions des points $M_{0}^{i}(t) \,, i = 0 ; 1$. De la même manière on peut aussi disposer des coordonnées du points $M(t)$, à l'aide de la relation vectorielle suivante : 
      \begin{align*}
      \overrightarrow{OM(t)} &  = (1 - t ). \overrightarrow{0M_{0}} + t . \overrightarrow{0M_{1}}\\
      \end{align*}
      Grâce à <a href="#eq01">ref.[1]</a> et l'équation précédente, on peut obtenir le point $M(t)$ comme combinaison des points $P_{1}$, $P_{2}$ et$P_{3}$ : 
      \begin{align*}
      \overrightarrow{OM(t)} &  = (1 - t ). ((1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}) + t . ((1 - t ). \overrightarrow{OP_{1}} + t . \overrightarrow{OP_{2}})\\
      \end{align*}
      Si on développe la relation précédente : 
      \begin{align*}
      \overrightarrow{OM(t)} &  = (1 - 2 . t + t^{2} ). \overrightarrow{OP_{0}}  + 2.t.(1-t). \overrightarrow{OP_{1}} + t^{2} . \overrightarrow{OP_{2}}\\
      \end{align*}
      Pour $t \in [0;1]$. 
   </p>
   <p>
      Bilan  de ce que nous avons construit ici : 
   </p>
   <p>  
      <ul>
         <li>soit un système de trois points $P_{0}$, $P_{1}$ et $P_{2}$</li>
         <li>on définit le paramétrage des deux segments $[P_{0} ;P_{1}]$  et $[P_{0} ;P_{1}]$ avec $M_{0}(t)$  et  $M_{1}(t)$ respectivement;</li>
         <li>soit maintenant le système $\mathbf{S_{0}} = \{( M_{0}(t), (1-t)) ; (M_{1}(t) ; t)\}$;</li>
         <li>$M(t)$ parcourt le segment $[M_{0}(t) ; M_{1}(t)]$, ce point est aussi le barycentre du système $\mathbf{S_{0}}$;</li>
         <li>$M(t)$ est en $P_{0}$ en $ t = 0$ et en $P_{2}$ en $t = 1$;</li>
         <li>$M(t)$ décrit une courbe qui relie $P_{0}$ et $P_{2}$ en une courbe tangente au deux segments; </li>
         <li>$M(t)$ est le barycentre du système $\mathbf{S}$ où : </li>
    </ul>
      \begin{align*}
      \mathbf{S}  = \{ (P_{0} ; (1 - t)^{2})  ; (P_{1} ; 2.t.(1-t)) ; (P_{2} ; t^{2}) \}
      \end{align*}
      Représentation  de cette construction : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B40.png?raw=true" width=50%>
      La courbe en pointillés représentant à main levée la courbe liant  $P_{0}$ et $P_{2}$
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>
   Modélisation simultanée de trois segments</h3>
   On continue notre construction de courbes en considérant maintenant quatre points $P_{0}$, $P_{1}$, $P_{2}$ et $P_{3}$. Ces points définissent trois segments. Nous allons construire le paramétrage de chacun d'eux à l'aide de trois points  $M_{i}^{1}(t) \, , i = 0 ; 1 ; 2$. Une fois ces trois points obtenus, nous allons appliquer le même principe, sur les deux segments $[M_{0}^{1}(t) ; M_{1}^{1}(t)]$ et $[M_{1}^{1}(t) ; M_{2}^{1}(t)]$. 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B50.png?raw=true" width=50%>
      Remarque sur les notations : les point $M_{i}^{j}$ on un exposant $j$. Cet exposant permet de définir chaque étape de la modéliastion. \\
      Nous allons ensuite obtenir un couple de points $M_{0}^{2} ; M_{1}^{2}$, ce dernier défini un segment. Ce segment va être parcouru par un point $M(t)$. L'équation de la position de ce point permettra de définir une courbe qui reliera les points $P_{0}$ et $P_{3}$ avec une courbe tangente aux segments $[P_{0} ;P_{1}]$  et $[P_{2} ;P_{3}]$.
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B51.png?raw=true" width=50%>
      Définition de l'équation de la position de $m(t)$ : 
      Soient les points :  $P_{0}$, $P_{1}$, $P_{2}$ et $P_{3}$. On a : 
      \begin{align}\label{om0om1op0op132}
      \overrightarrow{OM_{0}^{1}} &  = (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}}\\
      \overrightarrow{OM_{1}^{1}} &  = (1 - t ). \overrightarrow{OP_{1}} + t . \overrightarrow{OP_{2}}\\
      \overrightarrow{OM_{2}^{1}} &  = (1 - t ). \overrightarrow{OP_{2}} + t . \overrightarrow{OP_{3}}
      \end{align}
      <span id="eq1">De la même manière pour les points</span> : $(M_{0}^{1} ; M_{1}^{1} ; M_{2}^{1})$, on peut définir pour les deux segments $[M_{0}^{1} ;M_{1}^{1}]$  et $[M_{1}^{1} ;M_{2}^{1}]$ comme étant parcourus par les points $M_{0}^{2}$ et $M_{1}^{2}$ respectivement. On obtient alors :  
      \begin{align}
      \overrightarrow{OM_{0}^{2}} &  = (1 - t ). \overrightarrow{OM_{0}^{1}} + t . \overrightarrow{OM_{1}^{1}}\\
      \overrightarrow{OM_{1}^{2}} &  = (1 - t ). \overrightarrow{OM_{1}^{1}} + t . \overrightarrow{OM_{2}^{1}}
      \end{align}
      Puis on a le point $M(t)$ qui parcourt le segment  $[M_{0}^{2} ;M_{1}^{2}]$: 
      \begin{align}\label{om0om1op0op135}
      \overrightarrow{OM(t)} &  = (1 - t ). \overrightarrow{OM_{0}^{2}} + t . \overrightarrow{OM_{1}^{2}}
      \end{align}
      Remarque sur les coefficients $(1-t)$ et $t$ affectés à chaque point pas à pas : Dès que l'on dispose d'un segment, mettons $[AB]$ par exemple et que l'on veut définir un point $M(t)$ qui le parcourt pour $t$ allant de $0$ à $1$, alors on affecte toujours le coefficient $(1-t)$ au premier point, le point de départ choisi et $t$ au point d'arrivée. Ce que l'on a fait à chaque étape de la construction ci dessus. 
   </p>
   <p>
      A partir de la dernière équation on va insérer pas à pas les valeurs des vecteurs dont on dispose. 
   </p>
   <p>
      Dans l'équantion précédente on peut injecter les deux vecteurs donnés par  l'équation ci-dessus et l'équation suivante : 
      \begin{align*}
      \overrightarrow{OM(t)} 	&  = (1 - t ). \overrightarrow{OM_{0}^{2}} + t . \overrightarrow{OM_{1}^{2}}\\
      &  = (1 - t ). ((1 - t ). \overrightarrow{OM_{0}^{1}} + t . \overrightarrow{OM_{1}^{1}}) + t . ((1 - t ). \overrightarrow{OM_{1}^{1}} + t . \overrightarrow{OM_{2}^{1}})\\
      &  =  (1 - t )^{2}. \overrightarrow{OM_{0}^{1}} + 2. t . (1 - t ). \overrightarrow{OM_{1}^{1}} + t^{2} . \overrightarrow{OM_{2}^{1}}
      \end{align*}
      On peut maintenant utiliser les expressions obtenues avec les trois <a href="#eq1">équations précédentes</a> : 
      \begin{eqnarray*}\label{om0om1op0op138}
      \overrightarrow{OM(t)} 	 =  (1 - t )^{2}. ( (1 - t ). \overrightarrow{OP_{0}} + t . \overrightarrow{OP_{1}})\\+ 2. t . (1 - t ). ((1 - t ). \overrightarrow{OP_{1}} + t . \overrightarrow{OP_{2}})\\ + t^{2} .((1 - t ). \overrightarrow{OP_{2}} + t . \overrightarrow{OP_{3}})
      \end{eqnarray*}
      En simplifiant un peu : 
      \begin{align}\label{om0om1op0op139}
      \overrightarrow{OM(t)} 	 =  (1 - t )^{3}.  \overrightarrow{OP_{0}} + 3.t(1-t)^{2} . \overrightarrow{OP_{1}}+ 3.t^{2}.(1-t) . \overrightarrow{OP_{2}} + t^{3} . \overrightarrow{OP_{3}};
      \end{align}
      Cette courbe définie par la position de $M(t)$, permet de joindre les points $P_{0}$ et $P_{3}$ par une courbe dérivable au moins deux fois, dons les extrémités sont tangentes aux segments de départ et d'arrivée. Valable quelque soit la configuration. Du moment que les points étudiés ne soient pas confondus. 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/B60.png?raw=true" width=50%>
      $M(t)$ est le barycentre du système $\mathbf{S}$ où : 
      \begin{align*}
      \mathbf{S}  = \{ (P_{0} ; (1 - t)^{3})  ; (P_{1} ; 3.t.(1-t)^{2}) ; (P_{2} ; 3.t^{2}.(1-t)) ; (P_{3} ; t^{3}) \}
      \end{align*}
      On pourra vérifier que la somme des poids vaut bien 1 : Exercice! 
   </p>
   <p>
      <strong>Solution : </strong><br/> 
   </p>
   <p>
      \begin{align*}
      (1 - t)^{3}+ 3.t.(1-t)^{2}+ 3.t^{2}.(1-t) +t^{3}& = 1-3.t + 3.t ^{2} - t^{3}  + 3.t.(1-2.t + t^{2}) + 3.t^{2}- 3.t^{3} + t^{3} \\
      & = 1-3.t + 3.t ^{2} - t^{3}  + 3.t-6.t^{2} + 3.t^{2} - 3.t^{3}  + t^{3} \\
      & = 1 \\
      \end{align*}
      La somme des poids vaut bien $1$. Ce qui est une particularité de ces polynômes en $t$ appelés polynômes de Bernstein. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   </p>
   <p>
   <h3>Bilan  de ces construction</h3>
   
      Les courbes construites ici sont des courbes de Béziers, telle qu'il les a échafaudées à l'aide de barycentres de barycentres. Ces courbes sont basées sur des polynômes en fonction de $t$, les coefficients des vecteurs obtenus dans la dernière équation. Ces polynômes sont appelés les polynômes de Bernstein. Ces polynômes sont présentés empiriquement présentés ici. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Exercice : </h5>
   
   </p>
   <p> 
      Construire le modèle avec cinq points $P_{i}$ pour $i = 0,$ à $1$. 
      <strong>Solution :</strong><br/> 
   </p>
   <p>  To be done
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <hr/>

      
   <br>
   <hr>
   <a href="chapitre-9-les-barycentres-et-polynomes-de-bernstein-chapitre5.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>