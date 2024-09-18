<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p> 
   <h1>1 - Distance entre deux points</h1>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h2>Présentation intuitive</h2>
      La distance entre deux points est tout d'abord entendue comme la distance entre deux points de l'espace, dont on a les coordonnées. Cette distance correspond à l'idée que l'on peut s'en faire : la longueur du segment reliant les deux points. On considère que l'espace dans lequel on se trouve est homogène (hypothèse importante, dont on verra par la suite ce qu'il se passe lorsqu'elle n'est pas vérifiée). <br/>
      Le calcul de cette distance revient à calculer la longueur du segment entre les deux points. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>  
   <h2>Théorie</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h3>Introduction</h3>
   La distance entre deux points se calcule très facilement si on dispose des coordonnées des points. Quelque soit la dimension de l'espace dans lequel on se trouve: une droite, un plan, l'espace, ... il est possible de calculer la distance entre deux points. Au moins depuis Pythagore! 
   
</p><p> 
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h2>Sur une droite</h2>
 
   Soient un point $A$ et un point $B$ de coordonnées respectives : $x_{A}$ et $x_{B}$.<br/>
   Alors, la distance entre ces deux points est données par la différence des coordonnées des deux points. On note $AB$ la distance entre ces deux points. La formule est : 
   \begin{align}
   AB =  |x_{B} - x_{A}| 
   \end{align}
   où $|x_{B} - x_{A}|$ désigne la valeur absolue de la différence.

   On s'aperçoit que la distance $AB$ aura la même valeur que la distance $BA$, grâce à la nature de la valeur absolue: 
   
   
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/distanceDroite01.png?raw=true" width=75% loading="lazy">
   </p><p>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h2>Dans le plan</h2>
       
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/distanceDroite01.png?raw=true" width=75% loading="lazy">
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
</p>
<p>

   Entre les points $A$ et $B$, il existe une infinité de chemins. Quatre sont représentés sur le dessin  ci-dessus. Si on veut définir la distance entre les deux points, on peut dire que c'est le chemin le plus court. Soit $C_{0}$. On mesure ce chemin à l'aide de la formule de Pythagore, qui dit que le carré de l'hypoténuse vaut la somme des carrés des deux autres cotés dans un triangle rectangle :  
   
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/reperePythagore2D.png?raw=true" width=75% loading="lazy">
</p>   
Dans le plan, on dispose de deux points, $A$ et $B$ avec comme coordonnées : 
\begin{align}
& A=  (x_{A} ; y_{A}) && \text{ coordonnées de $A$ dans le plan }\\
& B=  (x_{B} ; y_{B}) && \text{ coordonnées de $B$ dans le plan }
\end{align}
Dans le plan, la distance entre les deux points est une application directe du théorème de pythagore. 
A l'aide des coordonnées des deux points, la distance entre $A$ et $B$, notée $AB$ vaut  : <span id="Formule-Pythagore"></span>
\begin{align}\label{eqdist2d}
&|AB| =\sqrt{(x_{B}-x_{A})^{2} + (y_{B}-y_{A})^{2}}
\end{align}
Autrement dit, c'est la différence entre les abscisses des deux points, au carré à laquelle on ajoute la différence des ordonnées des deux points au carré, le tout sous une racine carré.<br/>
<strong>Remarque :</strong><br/>
Comme : 
\begin{align}
&(x_{B} - x_{A})^{2} =  (x_{A} - x_{B})^{2}\
&(y_{B} - y_{A})^{2} =  (y_{A} - y_{B})^{2}  
\end{align}
On vérifie bien que la distance $AB$ et $BA$ sont les mêmes. 
</p>
<p>
   Un conséquence directe est que peu importe l'ordre dans lequel on prend des points pour calculer la distance qui les sépare. 
</p>
<p>


   <h3>
   Exemple</h3>
   Soient $A$, $B$ et $C$ trois points dans le plan. On se propose de calculer les distances $AB$, $AC$ et $BC$. 
   \begin{align}
   & A=  (5 ; 8)\\
   & B=  (1 ; 5)\\
   & C=  (-2 ; -3) 
   \end{align}
   Calcul de $AB$, on remplace les coordonnées de $A$ et $B$ dans <a href="#Formule-Pythagore">cette équation</a> : 
   \begin{align*}
   AB & =\sqrt{(1-5)^{2} + (5-8)^{2}}\\
   & = \sqrt{(-4)^{2} + (-3)^{2}}\\
   & = \sqrt{16 + 9}\\
   & =\sqrt{25}\\
   & = 5 ;\
   \end{align*}
   Calcul de $AC$, on remplace les coordonnées de $B$ et $C$ dans <a href="#Formule-Pythagore">cette équation</a> : 
   \begin{align*}
   AC & =\sqrt{(-2-5)^{2} + (-3-8)^{2}}\\
   & = \sqrt{(-7)^{2} + (-11)^{2}}\\
   & = \sqrt{49 + 121}\\
   & =\sqrt{170}\\
   &\simeq 13,03 ; \\
   \end{align*}
   Le résultat important est $\sqrt{170}$, plus juste que l'approximation proposée.
   Calcul de $BC$, on remplace les coordonnées de $B$ et $C$ dans <a href="#Formule-Pythagore">cette équation</a> : 
   \begin{align*}
   BC & =\sqrt{(-2-1)^{2} + (-3-5)^{2}}\\
   & = \sqrt{(-3)^{2} + (-8)^{2}}\\
   & = \sqrt{9 + 64}\\
   & =\sqrt{73}\\
   &\simeq 8,54 ; \\
   \end{align*}
   Le résultat important est $\sqrt{73}$, plus juste que $8,54$.
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   
   <h2>Dans l'espace</h2>
   <p> Le calcul de la distance entre deux points de l'espace correspond à rajouer une nouvelle coordonnées par rapport au plan. En plus d'avoir une abscisse et une ordonnée, tout point de l'espace a une hauteur, ou cote. Appelée généralement $z$ dans un repère cartésien. 
       </p>
       <p> Dans l'espace, on dispose de deux points, $A$ et $B$ avec comme coordonnées : 
       \begin{align}
       & A=  (x_{A} ; y_{A}; z_{A}) && \text{ coordonnées de $A$ dans l'espace }\\
       & B=  (x_{B} ; y_{B}; z_{B}) && \text{ coordonnées de $B$ dans l'espace  }
       \end{align}
       Dans l'espace , la distance entre les deux points est une application directe du théorème de Pythagore tout comme dans le plan. 
       A l'aide des coordonnées des deux points, la distance entre $A$ et $B$, notée $AB$ vaut  :
       \begin{align}
       & |AB| =\sqrt{(x_{B}-x_{A})^{2} + (y_{B}-y_{A})^{2} + (z_{B}-z_{A})^{2}}
       \end{align}
       <br/>
       
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   </p>
      
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   
   <p>  
   <h2>Pour aller plus loin</h2>
      Quand on parle de mesure de distance on parle en fait de norme. Le mot dédié à la mesure d'une distance est la norme. Cette dernière comporte une définition mathématiques dont les critères sont suffisamment abstraits pour que l'on puisse étendre ce concept de norme à d'autres définitions que celle de l'application direct et systématique du théorème de Pythagore.    
   </p>
   <p>
      On l'a vu, par exemple pour deux points de l'espace $A$ et $B$, la distance $AB$ vaut $AB = \sqrt{(x_{B}-x_{A})^{2}+(y_{B}-y_{A})^{2}+(z_{B}-z_{A})^{2}}$. Cette formules est une manière de mesurer la distance entre ces deux points. Il en existe d'autres. 
   </p>
   <p>
      En réalité, une norme est une application d'un ensemble $E$ dans $\mathbb{R}$. Soit $\mathbf{N}$ cette application. Elle doit satisfaire les trois règles suivantes : 
      <ul>
         <li>$\forall x \in E$ si $\mathbf{N}(x) = 0 \Rightarrow x = 0$ </li>

         <li>$\forall (\lambda;x) \in (\mathbb{K};E)$ alors $\mathbf{N}(\lambda.x) = |\lambda|.\mathbf{N}(x)$</li>

         <li>$\forall (x;y) \in E^{2}$ alors $\mathbf{N}(x+y) \leq \mathbf{N}(x) + \mathbf{N}(y)$</li>

      </ul>
	  En général $\mathbb{K} = \mathbb{R}$ ou $\mathbb{C}$. 
   </p>
   <p>
      Par exemple la mesure proposée plus haut avec la formule de Pythagore, on peut vérifier qu'elle respecte bien ces trois conditions. 
   </p>
   <p>
      On va donc pouvoir proposer un autre exemple de norme, où la formule n'est plus issue de la géométrie pythagoricienne, mais est celle-ci : $\mathbf{N}(AB) = \sup{\left((x_{B}-x_{A}) ; (y_{B}-y_{A}) ; (z_{B}-z_{A})\right)}$.
   </p>
   <p>
         On ne rentrera pas plus dans le détail, mais il existe un point de vue "Topologique" de la notion de distance et de norme. 
   </p>
   <p>
         Pour finir, on définit une distance à partir d'une norme. Dans la suite, on ne considérera comme norme, sauf exception et mention explicite, la norme usuelle issue du théorème de Pythagore.  
   </p>
   

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h2>TL;DR</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h3>Distance sur une droite</h3>
   <p>
      \begin{align}
      & |AB| =|x_{B}-x_{A}|
      \end{align}
         
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/mesure1D.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h3>Distance dans le plan</h3>
   <p>
      \begin{align}
      & |AB| =\sqrt{(x_{B}-x_{A})^{2} + (y_{B}-y_{A})^{2}}
      \end{align}
         
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/mesure2D.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     
   <h3>Distance dans l'espace</h3>
   <p>
      \begin{align}
      & |AB| =\sqrt{(x_{B}-x_{A})^{2} + (y_{B}-y_{A})^{2} + (z_{B}-z_{A})^{2}}
      \end{align}
         
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/mesure3D.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
   <h3>Distance dans les espaces de dimensions supérieures</h3> -->
     
   <p>
         
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

      
   <br>
   <hr>
   <a href="chapitre-8.2-element-de-geometrie-Distance-point-droite.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
  <?php  include 'pieddepage.php';?>