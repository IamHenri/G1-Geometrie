<?php  include 'entete.php';?>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>Les coordonnées sphériques</h1>
   <h3>
   Présentation</h3>
   Ce système de coordonnées est celui utilisé pour donner les coordonnées de tout point sur terre par exemple. Lorsque l'on est sur une sphère, sur la surface d'une boule autrement dit, il est possible de se servir de deux coordonnées pour se repérer: La surface d'une sphère est en deux dimension, par conséquent, deux coordonnées suffisent pour placer uniquement un objet. Les coordonnées sphériques sont là pour ça. 
   </p>
   <p>
   <h3>
   Approche intuitive</h3>
   Ce système de coordonnées est très pratique pour modéliser certaines surfaces, droites, courbes, régions... Très pratique, peu naturel au premier abord, mais qui devient très intuifi lorsque l'on se place dans des situations ou ce système de coordonnées vient simplifier les choses. On verra par exemple, que pour donner un emplacement sur une sphère, ce système de coordonnées est très pratique. Entre autres. </p>
   
   <p>Plutôt que de donner directement une définition et une description de ce système, procédons comme pour les autres et faisons apparaître sa construction. Tout d'abord on part d'un repère usuel à trois dimensions. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-construction-01.png?raw=true" width=50%>
   </p>
   <p>
      On veut donc placer un point $M$ dans l'espace. Pour cela, comme pour les coordonnées cartésiennes, trois informations son nécessaires pour localiser un point. Ces trois informations sont les coordonnées sphériques du point. Elles sont composées d'une longeur et de deux angles. On commence par la longueur :    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-construction-02.png?raw=true" width=50%></p>
   On place le point $M_{R}$ sur l'axe de $x$. A une distance $R$ de l'origine. $R \geq 0$. 
   </p>
   
   <p>Puis nous allons tourner par rapport à l'origine du repère, le point $O$ d'un angle $\theta$. Cet angle a un signe. Ce dernier détermine le sens de rotation. Le sens positif est le sens anti horaire. Ce qui est implicite lorsque non précisé. Donc comme le montre le dessin ci-dessous, on tourne d'un angle $\theta$, ici positif, pour se retrouver au point $M_{R ; \theta}$
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-construction-03.png?raw=true" width=50%></p>
   Puis on part de ce point pour obtenir le point $M$ à proprement parler. 
   <p>Pour obtenir $M$, on doit appliquer une rotation, d'angle $\phi$. Où si $\phi = 0$ le point est sur le plan $(O;\vec{i};\vec{j})$. Dans le dessin ci-dessous l'angle $\phi$ est positif, inférieur à $\pi/2$.  
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-construction-04.png?raw=true" width=50%>
   Les coordonnées sphériques d'un point de l'espace sont donc, dans ce cas 
   $$
   M_{R ; \theta ; \phi}
   $$
   Où : 
   $$
   R \geq 0 ; \\
   \theta \in [0; 2\pi] ; \\
   \phi \in [-\pi/2 ; \pi/2].
   $$
   Dans ce cas, $phi$ représente la latitude. 
</p>
   <p>C'est ce système de coordonnées qui est utilisé sur terre pour naviguer. $R$ représente la distance au centre de la terre, on opère en général un modification pour que la référence soit le niveau de la mer. Puis lattitude et longitude permettent de localiser tout point sur terre. </p>
   <hr/>
   <p>Dans ce système de coordonnées il est possible de définir autrement l'angle $\phi$. Dans le dessin précédent, l'angle $\phi$ est donné par rapport à l'horizontale. Cette manière de construire l'angle nécessite de construire une rotation dont l'axe est la droite orthogonale au plan défini par les vecteurs $(\overrightarrow{OM_{R ; \theta}};\vec{k})$. Dans le dessin ci-dessous, on définit l'angle depuis l'axe des $z$, soit $(O, \vec{k})$, vers le point $M_{R ; \theta}$. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-definition.png?raw=true" width=50%></p>
   Cette manière d'utiliser les coordonnées sphériques est celle utilisée par les physiciens. Ici $\phi$ représente la colatitude.  
   
   <p></p>
   
   <p></p>
   
   <p></p>
   
   <p></p>
   
   <p></p>
   
   <p></p>
   
   <p>
   <h3>Exemple pratique</h3></p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   
   <h3>   Théorie</h3>
   <h4>   Premier cas</h4>
   
   <p> 
      Dans ce cas, où la référence est le plan horizontal : 
       
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-construction-04.png?raw=true" width=50%>
   On a : 
   </p>
   <p>
      \begin{array}{*{20}c} {x = R\sin \theta \cos \phi } \\ 
      {y = R\sin \theta \sin \phi } \\ 
      {z = R\sin \theta } & \\ \end{array}
      Où : 
      $$
      R \geq 0 ; \\
      \theta \in [0; 2\pi] ; \\
      \phi \in [-\pi/2 ; \pi/2].
      $$
   </p>
   <h4>   Deuxième cas</h4>
   
   <p> 
      Dans ce cas, où la référence pour la rotation est l : 
       
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/coordonnees-spherique-definition.png?raw=true" width=50%></p>
   On a : 
   </p>
   <p>
      \begin{array}{*{20}c} {x = R\cos \theta \sin \phi } \\ 
      {y = R\sin \theta \sin \phi } \\ 
      {z = R\cos \phi }  \\ \end{array}
      Où : 
      $$
      R \geq 0 ; \\
      \theta \in [0; 2\pi] ; \\
      \phi \in [0 ; \pi].
      $$
   </p>
   <p> 
      <h2>De cartésien à sphérique</h2>
      formule de conversion des coordonnées cartésiennes en sphériques à venir!!!
   </p>
   <p> 
      <h2>Exercices d'application</h2>
   </p>
   <p> 
      <h3>Sphérique à Cartésien</h3>
  Donners les coordonnées cartésiennes des points suivants : 
  <ul>
   <li>$A = (1 ; \pi ; \pi/2)$</li>

   <li>$B = (1 ; 3\pi/4 ; 3\pi/2)$</li>

   <li>$C = (2 ; 2\pi/3 ; 3\pi/4)$</li>

   <li>$D = (12 ; \pi/6 ; \pi/3)$</li>

   <li>$E = (3 ; 7\pi/6 ; 2\pi/3)$</li>

   <li>$F = (0.1 ; \pi ; \pi/2)$</li>

  </ul>
   </p>
   <p> 
      <h3>Cartésien à Sphérique</h3>
  Donners les coordonnées sphériques des points suivants : 
  <ul>
   <li>$A = (1 ; 1 ; 1)$</li>

   <li>$B = (1 ; 2 ; -1)$</li>

   <li>$C = (0 ; 1 ; 1)$</li>

   <li>$D = (-1 ; 0 ; 1)$</li>

   <li>$E = (1 ; 1 ; \sqrt{2})$</li>

   <li>$F = (0.1 ; \pi ; \pi/2)$</li>

  </ul>
   </p>
   <p> 
      
   </p>
  
   <p> 
      
   </p>
  
<p> <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
   \begin{array}{*{20}c} {x = R\sin \theta \cos \phi } & {R = \sqrt {x^2 + y^2 + z^2 } } & {} \\ {y = R\sin \theta \sin \phi } & {\phi = \tan ^{ - 1} \left( {\frac{y}{x}} \right)} & {} \\ {z = R\cos \theta } & {\theta = \cos ^{ - 1} \left( {\frac{z}{{\sqrt {x^2 + y^2 + z^2 } }}} \right)} & {} \\ \end{array}
   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
</p>
  
   
<p>Pour obtenir les coordonnées shphériques à partir des coordonnées cartésiennes, on a les formules suivantes. Ces formules ne sont valables que dans le deuxième cas. Où $\phi$ représente la colatitude.</p>
   
<p></p>
   <br>
   <hr>
   <a href="chapitre-7.0-les-vecteurs.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
<?php  include 'pieddepage.php';?>
