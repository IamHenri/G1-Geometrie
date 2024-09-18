<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <h1>2 - Distance entre un point et une droite</h1>
<h2>Approche intuitive</h2>
Imaginons que l'on soit dans un grand champ (infini) et qu'au loin on voit un mur vers lequel on veut aller. Pour s'y diriger, le moyen le plus court est d'y aller perpendiculairement (on dit aussi orthogonalement). Ici on va permettre de calculer la distance à laquelle il se trouveOn suppose que l'on a les coordonnées des différents éléments en jeu : un point $M$, pour représentant le personnage. Et une équation de droite qui représente le mur (on verra plus tard si le mur n'est pas représenté par une droite mais une courbe). 
</p>
<p>
Le cadre mathématiques est celui du plan. Aussi appelé $\mathbb{R}^2$. L'extrapolation de cette notion à l'espace est le calcul de la distance d'un point à un plan! 
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/droite-projection-orthogonale-image01.png?raw=true" width=75%>
</p>
<p>
<h2>Théorie</h2>
   <h3></h3>
   La distance entre un point et une droite est donnée par le trajet le plus court entre ce point et la droite.
</p>
<p> Soit $H$ le projeté orthogonal de $M$ sur la droite $\Delta$. Alors la distance $MH$ est la distance entre le point $M$ et la droite $\Delta$. 
</p>
<p>
   <strong>Hypothèses :</strong>
</p>
<p>
   On dispose de l'équation de la droite $\Delta$ et des coordonnées d'un point $A$ de la droite, quelconque mais dont on connaît les coordonnées, dans un même repère $(O;\vec{i};\vec{j})$. 

   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/distance-point-droite-01.png?raw=true" width=50%>
   Considérons aussi le point $H$, projeté orthogonal de $M$ un point quelconque du plan sur la droite $\Delta$. 
   On a : 
   \begin{align}
   M & = (x_{M} ; y_{M})
   \end{align}
   Et l'équation cartésienne de $\Delta$ : 
   \begin{align}
   \Delta : a.x  +b.y  + c = 0
   \end{align}
   Alors, la distance $MH$ est donnée par la formule suivante : 
   \begin{align}
   MH & =\dfrac{|a.x_{M}  +b.y_{M}  + c|}{\sqrt{a^{2} + b^{2}}} 
   \end{align}
   Dans le plan. 
</p>
<p>
Le point A sur la figure est placé pour permettre de trouver les coordonnées du projeté de $M$ sur la droite. 
</p>
<p>
   <h3>Exemple</h3>
   <strong>Premier exemple :</strong><br/>
   Soit $M$ le point de coordonnées : $M = (-2;5)$ et la droite $\Delta$ d'équation $y = 3.x - 2$. Déterminer la distance entre $M$ et $\Delta$.<br/>
   Premièrement écrivons l'équation de la droite $\Delta$ sous forme cartésienne :  $y = 3.x - 2$ donne  $3.x - y- 2 = 0$
   Puis on remplace  directement dans  l'équation : 
   \begin{align*}
   MH & =\frac{|a.x_{M}  +b.y_{M}  + c|}{\sqrt{a^{2} + b^{2}}}\\
   & = \frac{|3.(-2) +(-1).5+ (-2)|}{\sqrt{a^{2} + b^{2}}}\\
   & = \frac{|-6 -5 - 2|}{\sqrt{3^{2} + (-1)^{2}}}\\
   & = \frac{|-6 -5 - 2|}{\sqrt{9 + 1}}\\
   & = \sqrt{10}
   \end{align*}
   La distance entre le point $M$ et la droite $\Delta$ vaut $\sqrt{10}$, qui vaut environ $3.16$.\\
   <strong>Deuxième  exemple :</strong>
</p>
<p>
   On dispose de quatre points $A$, $B$, $C$ et $D$ et d'une droite $\Delta$. 
   On a : $A(1;2)$, $B(-1;-1)$, $C(-2;-1)$, $D(2;1)$ et la droite $\Delta$ d'équation cartésienne : $2x+y-1=0$.
</p>
<p>
   Quel est le point le plus proche de $\Delta$?
</p>
<p>
   Pour cela on calcul la distance entre chaque point et la droite. Tout d'abord, soient $H_{A}$, $H_{B}$, $H_{C}$, $H_{D}$, les projetés orthogonaux des points $A$, $B$, $C$, $D$ respectivement sur $\Delta$. On doit donc calculer les distance $AH_{A}$, $BH_{B}$, $CH_{C}$ et $DH_{D}$. En remplaçant directement dans la formule on obtient les distances suivantes:
   \begin{align*}
   AH_{A}& =\dfrac{|3.1+1.2-1|}{\sqrt{2^{2} + 2^{2}}}&& =\dfrac{4}{\sqrt{5}} && =\dfrac{4\sqrt{5}}{5}\\
   BH_{B}& =\dfrac{|3.(-1)+1.(-1)-1|}{\sqrt{2^{2} + 2^{2}}}&& =\dfrac{5}{\sqrt{5}} && =\dfrac{5\sqrt{5}}{5}\\
   CH_{C}& =\dfrac{|3.(-2)+1.(-1)-1|}{\sqrt{2^{2} + 2^{2}}}&& =\dfrac{8}{\sqrt{5}} && =\dfrac{8\sqrt{5}}{5}\\
   DH_{D}& =\dfrac{|3.2+1.1-1|}{\sqrt{2^{2} + 2^{2}}}&& =\dfrac{6}{\sqrt{5}} && =\dfrac{6\sqrt{5}}{5}
   \end{align*}
   Le point le plus proche de la droite $\Delta$ est donc le point $A$. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      
   <br>
   <hr>
   <a href="chapitre-8.3-element-de-geometrie-projete-orthogonal-vecteur-sur-vecteur.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>