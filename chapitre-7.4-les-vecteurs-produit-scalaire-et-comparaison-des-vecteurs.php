<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>4 - Produits scalaire et vectoriel</h1>

   <h2>Sujets abordés</h2>
</p>

<p>
<h3>Produit scalaire</h3>
</p>

<p>
On a précédemment vu les formules du produit scalaire : 

</p>
$\vec{u}  .\vec{v} = x_{u}.x_{v}+y_{u}.y_{v}$ du point de vue des coordonnées. 

<p>
et : 
$\vec{u}  .\vec{v} = \|\vec{u}\|.\|\vec{v}\|.\cos (\vec{u};\vec{v})$ . 

</p>
<p>
   Soient deux vecteurs quelconques,  $\vec{u}$ et $\vec{v}$ par exemple. Leur produit scalaire vaut donc : 
   $$
   \vec{u}  .\vec{v} = \|\vec{u}\|.\|\vec{v}\|.\cos (\vec{u};\vec{v}).$
   $$ 
   
</p>

<p> Divisons maintenant ces deux vecteurs par leur norme et calculons à nouveau leur produit scalaire. 
   $$
   \dfrac{\vec{u}}{\|\vec{u}\|}.\dfrac{\vec{v}}{\|\vec{v}\|} = \dfrac{\|\vec{u}\|}{\|\vec{u}\|}.\dfrac{\|\vec{v}\|}{\|\vec{v}\|}.\cos(\vec{u};\vec{v})
   $$
</p>

<p> 
   $$
   \dfrac{\vec{u}}{\|\vec{u}\|}.\dfrac{\vec{v}}{\|\vec{v}\|} = \cos(\vec{u};\vec{v})
   $$
   par simplification. 
</p>

<p> La valeur du $\cos$ étant  comprise entre $-1$ et $1$, la valeur du $cosinus$ de l'angle que forme les deux vecteurs permet d'avoir une indication sur la position des vecteurs l'un par rapport à l'autre. 
</p>

<p> 
   Si $\cos(\vec{u};\vec{v}) = 1$ alors les deux vecteurs sont colinéaires. L'angle tel que son $cosinus$ valle $1$ est l'angle $0 rad$. 
</p>


<p> 
   Si $\cos(\vec{u};\vec{v}) = -1$ alors les deux vecteurs sont colinéaires mais de sens opposé.  L'angle tel que son $cosinus$ valle $-1$ est l'angle $\pi$. 
</p>


<p> 
   Si $\cos(\vec{u};\vec{v}) = 0$ alors les deux vecteurs sont orthogonaux. Un autre mot pour dire perpendiculaire.  L'angle tel que son $cosinus$ valle $0$ est l'angle $\pi/2$. 
</p>

<p> 
</p>
<p>
<h3>Orthogonalité des vecteurs</h3>
</p>
<p class="theoremBox">
   Pour vérifier si des éléments d'un espace sont perpendiculaires, on utilise quasiment systématiquement le produit scalaire. Si tant est qu'on puisse le calculer. 
</p>

<p>
</p>

      <hr/>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   
<hr/>

<p>


</p>
<p>
<h2>Produit vectoriel et le déterminant</h2>
</p>
<p>
<a href="cours-unitaire-le-determinant-outil-fondamental-des-mathematiques.php">Voir ici</a> 
</p>
<p>
   
</p>
<p>
<p>
    
</p>
<p>
    
</p>
<h3>TL;DR</h3>
 

<ul></ul>
   <li> Le produit scalaire permet de comparer les vecteurs et de déterminer si ils sont orthogonaux. </li>
   <li> Le produit vectoriel permet de déterminer si ils sont colinéaires.  </li>
   
<hr/>

<h3>Exercices</h3>
<a href="https://www.lelivrescolaire.fr/page/7082353#:~:text=On%20appelle%20produit%20scalaire%20de,cos(u%20%2Cv%20)" traget="_blank">Voir ici</a> par exemple.<br>

   <hr/>

      
   <br>
   <hr>
   <a href="chapitre-7.5-les-vecteurs-Relation-AL-Kashi-Mediane-formule-cosinus-et-sinus.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>