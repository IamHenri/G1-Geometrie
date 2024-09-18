<?php  include 'entete.php';?>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
   <h1>Les coordonnées cylindriques</h1>
   <h2>
   Présentation}</h2>
   En quelques mots, les coordonnées cylindriques, c'est le système des coordonnées polaires auquel on rajoute une hauteur : $z$. 
</p>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<p>
   Les coordonnées cylindriques sont un peu le pendant des coordonnées polaires dans l'espace. Si on prend un système de coordonnées polaires et que l'on rajoute un axe vertical, on obtient les coordonnées cylindriques. Un repère en coordonnées polaires vue en perspective : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d14-01ccyl.png?raw=true" width=75%>
   Dans ce repère, on a le point $M_{1}$ de coordonnées $M_{1} = (\rho ;\alpha)$.
</p>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<p>
   On ajoute à ce repère un axe vertical pour la coordonnées $z$, soit la hauteur, on obtient un nouveau  point $M$ : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d14-02ccyl.png?raw=true" width=75%>
   A l'aide de cette représentation , on peut localiser tout point de l'espace comme dans un système cartésien. 
   <h2> Approche intuitive</h2>
   La présentation précédente amorce une présentation assez intuitive et naturelle de ce système de coordonnées.  Une première représentation graphique pour présenter les trois coordonnées de tout point de l'espace : 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d13-001ccyl.png?raw=true" width=75%>
      Une autre représentation, où on fait apparaître le cylindre sur lequel évoluerait le point $M$ si l'angle $\alpha_{M}$ est quelconque, entre 0 et $2\pi$.<br/>
      Pour décortiquer ces coordonnées, on se place à l'origine du repère.<br/>
      Sur le plan $(O;x;y)$, on se place à une distance $\rho$ de l'origine : cela représente un cercle de centre $O$ et de rayon $\rho$;<br/>
      Ensuite on fixe un angle $\alpha_{M}$, entre 0 et $2\pi$. Sur la figure ci dessous c'est le point $M_{1}$ ;
      Puis on applique la hauteur, ou cote, qui permet d'atteindre le point $M$ à l'aide de la troisième coordonnées $z_{M}$ :
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d13-002ccyl.png?raw=true" width=75%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <h3>Théorie</h3>
   <p>
      On se rappelle que les coordonnées polaires d'un point sont données par une longueur, le module et un angle, qu'il est possible d'appeler l'argument. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
Soit un point $M$ de l'espace. Ses coordonnées sont : 
\begin{align}
      M  & = (\rho ;\alpha ; z) 
      \end{align}
      avec $\rho > 0$, $\alpha\in [ 0; 2\pi]$ et $z \in \mathbb{R}$
   <p>
      
   </p>Le passage des coordonnées cylindriques aux coordonnées cartésiennes est exactement comme celui de polaire à cartésien. 
   <p>
   </p>La hauteur $z$  n'a aucune incidence dans les formules. 
   <p>
   
   </p>Ces coordonnées sont pratiques pour modéliser une trajectoire hélicoïdale par exemple. 
   <p>
   
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <br>
   <hr>
   <a href="chapitre-6-les-coordonnees-spheriques.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>
