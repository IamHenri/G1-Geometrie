
<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
   <h1>4 - Coordonnées du projeté orthogonal d'un point sur une droite</h1>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>   Contexte</h2>
   <p>
   Le contexte mathématiques est défini par $\Delta$ une droite dans le plan, $A$ un point lui appartenant et $M$ un autre ne lui appartenant pas que l'on va projeter sur $\Delta$  : soit $H$ le  projeté de $M$ sur $\Delta$.<br/>
   Visuellement : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/distance-point-droite-01.png?raw=true" width=50%>
   
   Définition de la droite : 
   Pour $\Delta$, on doit disposer soit de son équation cartésienne : 
   \begin{align*}
   \text{Equation cartésienne : } & ax+by+c=0\\
   \text{Equation réduite : } & y = m.x+p\\
   \text{Point + vecteur : } & \Delta = (A ;\overrightarrow{u})\\
   \end{align*}
   Cette méthode de construction repose sur la projection d'un vecteur sur un autre. Ici, la configuration n'est pas exactement la même, on veut projeter un point sur une droite. Pour se ramener au cas précédent, on va considérer les vecteurs suivants : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/distance-point-droite-01.png?raw=true" width=50%>
   On va donc chercher à se placer dans la configuration précédente. On dispose alors des vecteurs suivants : 
   \begin{align*}
   \overrightarrow{AM} = &\text{ $\overrightarrow{AM}$, le vecteur à projeter;} \\
   \overrightarrow{AH} =  &\text{ Le vecteur  projeté;} \\
   \overrightarrow{d} =  & \text{ Le vecteur sur lequel on projette $\overrightarrow{AM}$ vecteur directeur de $\Delta$.}\\
   \end{align*}
   Dès lors nous sommes dans la configuration de la <a href="chapitre-8.3-element-de-geometrie-projete-orthogonal-vecteur-sur-vecteur.php">section précédente</a> : 
   \begin{align*}
   \overrightarrow{AM} = & \overrightarrow{v} \\
   \overrightarrow{AH} =  & \overrightarrow{v^{'}} \\
   \overrightarrow{d} =  & \overrightarrow{u}\\
   \end{align*}



   Donc on obtient : 
   \begin{align*}
   \overrightarrow{AH} = \dfrac{\overrightarrow{AM}.\overrightarrow{d}}{\overrightarrow{d}.\overrightarrow{d}}.\overrightarrow{d}
   \end{align*}
   On obtient $\overrightarrow{AH}$. Pour obtenir les coordonnées du point $H$, il faut lui ajouter les coordonnées du vecteur $\overrightarrow{AH}$. Ce qui se note : 
   \begin{align*}
   \overrightarrow{OH} =\overrightarrow{OA} +\overrightarrow{AH}
   \end{align*}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>   Exemple d'application</h2>
   <p>
      Soient : 
      \begin{align}
      \Delta : x-2.y-1 = 0 \, ;\, A  = (2;1) , A\in\Delta\, ;\, 	M  = (5;-1)\, ;
      \end{align}
      Calculer les coordonnées de $H$ sur $\delta$.
      
      
      <h2>   Solution</h2>
      \begin{align}
      \overrightarrow{AM} =\left(\begin{array}{cc}
      3 \\
      -2 \\
      \end{array}\right) ; 
      \overrightarrow{d} =\left(\begin{array}{cc}
      2 \\
      1\\
      \end{array}\right)
      \end{align}
      \begin{align*}
      \overrightarrow{AM}.\overrightarrow{d}=  3.2-2.1 = 4\\
      \overrightarrow{d}.\overrightarrow{d}= 2.2 + 1.1 =  5
      \end{align*}
      Donc : 
      \begin{align*}
      \overrightarrow{AH} = \dfrac{4}{5}.\overrightarrow{d} =\left(\begin{array}{ccc}
      8/5 \\
      4/5\\
      \end{array}\right)
      \end{align*}
      Donc 
      \begin{align*}
      \overrightarrow{OH} =\overrightarrow{OA} +\overrightarrow{AH} = \left(\begin{array}{ccc}
      2 \\
      1 \\
      \end{array}\right)  +\left(\begin{array}{ccc}
      8/5 \\
      4/5\\
      \end{array}\right) = \left(\begin{array}{ccc}
      13/5 \\
      9/5\\
      \end{array}\right)
      \end{align*}
      Le point $H$ a donc pour coordonnées :
      \begin{align*}
      H = \left(\begin{array}{ccc}
      13/5 \\
      9/5\\
      \end{array}\right)
      \end{align*}
      Une autre méthode pour calculer le projeté orthogonal d'un point sur une droite est de chercher les éléments dans cet ordre : 
   <ul>
      <li> On détermine le vecteur normal à la droite;</li>
      <li> On détermine l'équation de la droite passant par le point à projeter et de vecteur directeur le vecteur normal à la première droite;</li>
      <li> On résout le système d'équation donné par ces deux droites ; </li>
      <li> La solution si elle existe donne le projeté orthogonal de notre point sur la droite. </li>
   </ul>
   Cette méthode est calculatoire, lourde à écrire mais facilement automatisable. On voit que la version avec les vecteurs est beaucoup plus directe pour trouver le résultat, mais nécessite de bien savoir le cadre dans lequel on est. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <br>
   <hr>
   
   <a href="chapitre-9-les-barycentres-et-polynomes-de-bernstein-chapitre1.php">Page suivante &rarr;</a>
   <p>
   
   
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>