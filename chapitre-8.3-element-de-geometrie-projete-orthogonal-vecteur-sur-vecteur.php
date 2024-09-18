
<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
   <h1>3 - Projeté orthogonal d'un vecteur sur un autre</h1>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h2></h2>
   <h3>
   Contexte</h3>
   On veut tout d'abord réaliser cette transformation : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/projorthvec01.png?raw=true" width=50%>
   On veut connaître le vecteur $\vec{v}^{'}$ projeté orthogonal de $\vec{v}$ sur $\vec{u}$.<br/> 
   En observant la figure on s'aperçoit que le vecteur projeté est colinéaire à celui sur lequel il est projeté. C'est une conséquence directe de la projection d'un vecteur sur un autre.<br/>
   Pour déterminer ce projeté orthogonal on dispose de la formule suivante : 
   \begin{align*}
   \vec{v}^{'} = & \dfrac{\vec{v}.\vec{u}}{\vec{u}.\vec{u}}.\vec{u}
   \end{align*}
   Si on projette un vecteur sur un autre, le résultat est un vecteur colinéaire à celui sur lequel est opérée la projection. Comme on le voit sur le dessin, le vecteur $\vec{v}^{'}$ est colinéaire à $\vec{u}$.<br/>
   On utilise cette construction pour projeter un point sur une droite, ou même un vecteur sur un droite. 
   Avant de passer à la suite, un exemple. 
   Soient les vecteurs  : 
   \begin{align}
   \overrightarrow{u} =
   \left(\begin{array}{ccc}
   3 \\
   1 \\
   \end{array}\right)\text{ et }\overrightarrow{v}  =
   \left(\begin{array}{ccc}
   2\\
   -1 \\
   \end{array}\right)
   \end{align}
   On cherche à trouver le vecteur $\overrightarrow{v}^{'}$ projeté orthogonal de $\overrightarrow{v}$ sur $\overrightarrow{u}$. Pour ce faire on applique la formule : 
   \begin{align*}
   \overrightarrow{v}^{'} = &\dfrac{\overrightarrow{v}\overrightarrow{u}}{\overrightarrow{u}.\overrightarrow{u}}.\overrightarrow{u}
   \end{align*}
   On a : 
   \begin{align*}
   \overrightarrow{v}.\overrightarrow{u} = 3.2+1.(-1) = 5 &\text{ et } 	\overrightarrow{u}.\overrightarrow{u} = 3.3+1.1 = 10
   \end{align*}
   et 
   \begin{align*}
   \overrightarrow{v}.\overrightarrow{u}= 3.2+1.(-1) = 5
   \end{align*}
   D'où : 
   \begin{align*}
   \overrightarrow{v}^{'} = \dfrac{1}{2}.\overrightarrow{u}
   \end{align*}
   Donc : 
   \begin{align}
   \overrightarrow{v}^{'} =
   \left(\begin{array}{ccc}
   3/2 \
   1/2 \
   \end{array}\right)
   \end{align}
   $\overrightarrow{v}^{'}$ est le vecteur projeté sur $\overrightarrow{u}$.
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      
   <br>
   <hr>
   <a href="chapitre-8.4-element-de-geometrie-coordonnees-projete-orthogonal-droite.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>