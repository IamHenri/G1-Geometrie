<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>3 - Les barycentres</h1>

   <p>
      <h2>Applications géométriques</h2>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h3>Questions d'alignements</h3>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h4>Contexte</h4>
      Si on démontre qu'un point est le barycentre de deux points distincts, alors ces trois points sont alignés. Ce principe est dépendant du contexte et de la configuration de la figure. On étudie ici un exercice qui pose la question de l'alignement de trois points. Si on démontre que l'un d'eux est le barycentre des deux autres, alors il sont alignés. 
      </p>
      <p>
         <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h4>Mise en application</h4>
      Soit un triangle $ABC$ et les points  $I$, $J$ et $K$ les milieux des côtés $[BC]$, $[CA]$ et $[AB]$ respectivement. Soit $L$  le milieu de $[JC]$ et $M$ le symétrique de $K$ par rapport à $B$.
      </p>
      <p>
         Démontrer que $I$, $L$ et $M$ sont alignés. 
         <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/BRV03.png?raw=true" width=50%>
         <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h5>Résolution : stratégie</h5>
      </p>
      <p> 
         Pour démontrer cet alignement, la technique est la suivante  : On va chercher à représenter les vecteur $\overrightarrow{IL}$ et $\overrightarrow{IM}$ en fonction d'autres vecteurs de la figure. Ces autres vecteurs doivent être choisis de manière à faire apparaitre $L$ et $M$ comme étant des barycentres de certains point et pour conclure que I est le barycentre de $L$ et $M$ ce qui résoudrait  le problème. 
         <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h5>Résolution : En détail</h5>
      </p>
      <p> 
         <strong>Écrire $L$ comme un barycentre :</strong><br/>
      </p>
      <p> 
         $L$ milieu de $[JC]$ est le barycentre de (A, 1) et (C, 3) : se démontre facilement, le faire en exercice;
      </p>
      <p>
         On a donc la relation vectorielle quelque soit le point $P$ du plan : 
         \begin{eqnarray*}
         1.\overrightarrow{PA} + 3.\overrightarrow{PC} = 4.\overrightarrow{PL} 
         \end{eqnarray*}
         On applique cette formule pour $P = I$, donc : 
         \begin{eqnarray*}
         \overrightarrow{IA} + 3.\overrightarrow{IC} = 4.\overrightarrow{IL} 
         \end{eqnarray*}
         <strong>Écrire $M$ comme un barycentre :</strong>
      </p>
      <p> 
         $M$ est le barycentre de $(A, -1)$ et $(B, 3)$ : se démontre facilement, le faire en  exercice
         On a donc la relation vectorielle quelque soit le point $P$ du plan : 
         \begin{eqnarray*}
         -1.\overrightarrow{PA} + 3.\overrightarrow{PB} = (-1+3).\overrightarrow{PM} = 2 .\overrightarrow{PM}  
         \end{eqnarray*}
         On applique cette formule pour $P = I$, donc : 
         \begin{eqnarray*}
         -\overrightarrow{IA} + 3.\overrightarrow{IB} = 2.\overrightarrow{IM} 
         \end{eqnarray*}
         <strong>Trouver une relation mettant en jeu $L$ et $M$ :</strong><br/>
      </p>
      <p> 
         On sait que : 
         \begin{eqnarray*}
         4.\overrightarrow{IL} = \overrightarrow{IA} + 3.\overrightarrow{IC} 
         \end{eqnarray*}
         et 
         \begin{eqnarray*}
         2.\overrightarrow{IM} = -\overrightarrow{IA} + 3.\overrightarrow{IB}  
         \end{eqnarray*}
         Si on ajoute les deux expressions ci dessus, on obtient : 
         \begin{eqnarray*}
         4.\overrightarrow{IL}+	2.\overrightarrow{IM} = -\overrightarrow{IA} + 3.\overrightarrow{IB}  + \overrightarrow{IA} + 3.\overrightarrow{IC} 
         \end{eqnarray*}
         Or on s'aperçoit que le membre de droite vaut le vecteur nul : 
         \begin{eqnarray*}
         -\overrightarrow{IA} + 3.\overrightarrow{IB}  + \overrightarrow{IA} + 3.\overrightarrow{IC} =3.\overrightarrow{IB} + 3.\overrightarrow{IC} =3.(\overrightarrow{IB} + \overrightarrow{IC})
         \end{eqnarray*}
         \begin{eqnarray*}
         -\overrightarrow{IA} + 3.\overrightarrow{IB}  + \overrightarrow{IA} + 3.\overrightarrow{IC}  = \overrightarrow{0}
         \end{eqnarray*}
         Où $\overrightarrow{IB} + \overrightarrow{IC} =  \overrightarrow{0}$ car $I$ milieu de  $[BC]$
         Donc : 
         \begin{eqnarray*}
         4.\overrightarrow{IL}+	2.\overrightarrow{IM} =  \overrightarrow{0}
         \end{eqnarray*}
         Donc $\overrightarrow{IL}$ et $\overrightarrow{IM}$ sont colinéaires, par conséquent $I$, $L$ et $M$ sont alignés. 
         <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      
   <br>
   <hr>
   <a href="chapitre-9-les-barycentres-et-polynomes-de-bernstein-chapitre4.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>