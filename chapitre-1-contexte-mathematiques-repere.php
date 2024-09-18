<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">
  
      <h1>Le Contexte mathématiques</h1>
   <h2>Euclide</h2>
   Dans ce document, le contexte est donné par le plan et l'espace tels qu'Euclide a pu les définir à l'aide ses axiomes. On les rappelle ici pour bien définir le cadre dans lequel les explications sont données.<br/>
   Les axiomes : 
   <ul>
      <li> Soient deux points distincts, il existe toujours une droite passant par ces points;</li>
      <li> Tout segment peut être prolongé selon sa direction en une droite ;</li>
      <li> Pour tout segment non réduit à un point, il existe un cercle dont le centre est un des points du segment et dont le rayon est la longueur de ce segment;</li>
      <li> Tous les angles droits sont égaux entre eux;</li>
      <li> Étant donné un point et une droite ne passant pas par ce point, il existe une seule droite passant par ce point et parallèle à la première.</li>
      <br/>
   </ul>
   Ces axiomes, écrits il y environ 2 300 ans sont toujours actuels. Disons que ce qui est vu ici repose implicitement sur ces axiomes. Les géométries non euclidiennes sont pour plus tard. 
   
</p>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<p>
   
   La géométrie euclidienne est la plus intuitive et correspond à la réalité dans laquelle nous vivons. Tant qu'on est pas astrophysicienne par exemple.
</p>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<p>
   La géométrie euclidienne est un cadre de travail implicite. Des géométries non euclidiennes ont aussi été inventées. Où on s'aperçoit que l'axiomatique est différente. Par exemple en géométrie hyperbolique, par un point extérieur à une droite passent une infinité de droites parallèles... Ces sujets ne seront pas abordés ici. On est dans un cadre assez intuitif, celui de la plate réalité dans laquelle nous vivons tous. Plate au sens euclidien.
   
   
</p>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<p>
   
   Il existe d'autres géométries, qu'on appelle en général non euclidienne, avant même de les définir. Exemple grossier : une fractale est une géométrie non euclidienne. C'est un espace de dimension non entière... Mais c'est un autre discours.<br/>
   Ici, nous sommes dans un cadre où les droites parallèles ne se rencontrent jamais, la sommes des angles d'un triangle fait $180^{\circ}$, etc.<br/>
   Ces axiomes sont rappelés pour préciser le cadre dans le quel on travail. Un point n'a pas de mesure, les droites parallèles ne se coupent jamais, etc. Ce cadre est le plus naturel pour aborder les mathématiques dont il est question ici. 
   </p>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Toute la théorie présentée dans cette page est décrite par la suite. 
       
   </p>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p> 
      
      L'objectif ici est uniquement de présenter le contexte et ce qui va être détaillé dans ces pages. La description de ce système de coordonnées ainsi que  d'autres est donnée dans la suite plus différentes formules et outils. 
   </p>
   
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p> 
      
      A mon humble avis, il faut voir les mathématiques comme un outil permettant de réaliser des "choses". Où par choses, il est entendu tout type de réalisation : une charpente, une maquette d'avion, un jeu vidéo, ... Cet outil peut être vu comme une nouvelle technologie, comme disait Vladimir Arnold pour introduire ses cours, nouvelle technologie purement intellectuelle, mais permettant d'en créer d'autres plus matérielle, ou virtuelles. 
   </p>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <p>
   <h3>Descartes</h3>
      Ce philosophe, savant, entre autres, introduisit au $\textit{XVII}^{\text{ème}}$ siècle dans son ouvrage "La   Géométrie", le système de coordonnées qui porte son nom. Et qui a effrayé bon nombre d'élèves.  Il n'est peut-être pas l'inventeur de cet outil, mais celui qui popularisa cette théorie. Cet outil  permet à la base de  positionner chaque élément de manière unique et exacte dans le plan ou dans l'espace.<br/>
      Un repère cartésien fournit les éléments permettant de définir dans le plan, dans le volume ou tout autre   espace de dimension supérieure l'emplacement des éléments qui peuvent y exister.<br/>
      Ces éléments nécessaires sont deux axes sécants (qui se croisent, dans l'idéal perpendiculairement) dans le    plan ou trois dans l'espace et ainsi de suite. Le point d'intersection des axes du repère est appelé Origine.  <br/>
      Par conséquent : dans le plan, les deux axes doivent être ni parallèles ni confondus, il en va de même pour les   trois axes dans l'espace.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Exemple d'un repère dans le plan (de la feuille) : </strong>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d1-repere2D.png?raw=true" width=50%>
      Où on peut voir que le point $M$ a pour coordonnées : 
      $$
      M = (x_{M};y_{M})<br/>
      $$
      On appelle $x_{M}$ l'abscisse 
      dans le repère $(O;\vec{i};\vec{j})$. <br/>
      Avec $x_{M}$ et  $y_{M}$  des nombres réels quelconques. Par exemple :
      $$
      M = (5;3)
      $$
      est le point d'abscisse 5 et d'ordonnée 3. <br/>
      <strong>Un exemple d'un repère dans l'espace, où aucun des plans n'est dans celui de la feuille :</strong><br/>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-repere3D.png?raw=true" width=75%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Où le point $M$ a pour coordonnées : 
      \begin{eqnarray}
      M = (x_{M};y_{M};z_{M})<br/>
      \end{eqnarray}
      dans le repère $(O;\vec{i};\vec{j};\vec{k})$. 
      
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h2>Contexte Informatique</h2>
   Les systèmes de coordonnées sont des outils nécessaires pour certaines branches de l'informatique. Tout ce qui est graphique, comme les jeux vidéos par exemple. Dès que des éléments graphiques sont en jeu, dans deux ou trois dimensions, il devient nécessaire de maîtriser les positions de chaque élément. Pour ce faire, ces positions sont déterminées à l'aide de systèmes de coordonnées, dont le premier et le plus évident est celui des coordonnées inventées par René Descartes, les bien nommées coordonnées cartésiennes, puis celles cylindrique et les sphériques.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      On notera ici que l'on se place toujours dans un repère cartésien. Nous allons étudier plusieurs systèmes de coordonnées, dont le premier, les coordonnées cartésiennes, souvent les plus intuitives. Puis les autres tels que cités au-dessus.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Minecraft : </strong> est une sorte de jeu de construction sur informatique très libre et massivement joué en ligne par une multitudes de joueurs. Dans le jeu, on peut avoir sa position à l'aide de coordonnées cartésiennes. Les coordonnées données par les axes des $x$ et des $z$ donnent la position dans le plan et $y$ est la hauteur. Ce qui signifierait quelque chose comme cela : 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d2-0000-axeMinecraft.png?raw=true" width=75%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Avec comme unité de mesure, les cubes constituant l'essence du jeu. Une fois munis de ces axes de l'origine du repère et de cette mesure, il est possible de déterminer les coordonnées de tout élément du jeu. Et donc de construire, détruire, transformer l'intégralité de son environnement. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h2>Objectifs</h2>
   <p>Apprendre à exploiter différents repères dans le plan ou l'espace, pour y insérer ensuite d'autres outils comme les vecteurs, les droites, les courbes. On introduira chaque notion le plus intuitivement possible, en rajoutant l'écriture mathématiques pour permettre les calcls, raisonnements, démonstrations, ... En général, quand on travaille dans un espace spécifique, qu'il soit à deux, trois ou $n$ dimensions, il faut savoir repérer chaque point de l'espace de manière exacte et unique. On va donc commencer par un système de coordonnées naturel, les coordonnées cartésiennes. Ce qui équivaut grossièrement à savoir se repérer sur une grille. </p>
   </p>
      
   <br>
   <hr>
   <a href="chapitre-2-les-coordonnees-cartesiennes.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>