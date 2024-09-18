<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
   <h1></h1>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      \begin{comment}
      Pour calculer les coordonnées exactes de $H$, ce projeté orthogonal de A sur $\Delta$ il faut poser le problème pour savoir ce que l'on veut.<br/>
      <strong>Rappel sur les droites :</strong><br/>
      \mathversion{bold} 
      Par définition, si on a une droite d'équation $ax+by+c=0$ alors :<br/>
      son vecteur directeur est le vecteur $\overrightarrow{u} = (-b;a)$ pour les $a$ et $b$ de l'équation de la droite;<br/>
      son vecteur normal est $\overrightarrow{n} = (a;b)$.<br/>
      \mathversion{normal}
      <strong>L'objectif }est de déterminer les coordonnées de ce point H.</strong> Pour cela, on peut voir $H$ comme le point d'intersection des droites $AH$ et $\Delta$. On a donc besoin des équations des droites $AH$ et $\Delta$. Par hypothèse on dispose de celle de $\Delta$. On pose : 
      \begin{align}
      \Delta : a.x  +b.y  + c = 0
      \end{align}
      Et de plus on a : 
      \begin{align}
      A & = (x_{A} ; y_{A}).
      \end{align}
      Pour déterminer l'équation de $(AH)$ on utilise son vecteur directeur ou normal, obtenu à l'aide de celui de $\Delta$.<br/>
      Connaissant ces éléments la méthodologie générale pour trouver les coordonnées de ce point est : 
      \begin{enumerate}
   <li> trouver l'équation de $(AH)$ : à l'aide du vecteur directeur de $\Delta$ puis du point $A$;</li>
   <li> $H$ est le point d'intersection des droites $(AH)$ et $\Delta$, on pose donc le système d'équation donné par les équations sur ces droites ; </li>
   <li> résoudre le système ; </li>
   <li> les solutions du système sont les coordonnées du point $H$. </li>
   \end{enumerate}
   Pour $\Delta$ par définition, si l'équation de cette droite est $a.x  +b.y  + c = 0$ alors sont vecteur directeur $\overrightarrow{u_{\Delta}}$ est : 
   \begin{align}
   \overrightarrow{u_{\Delta}} & = (-b ; a).
   \end{align}
   On rappelle de plus que pour une droite d'équation cartésienne $ a.x  +b.y  + c = 0$ le  vecteur normal $\overrightarrow{n_{\Delta}}$ de la droite est : 
   \begin{align}
   \overrightarrow{n} & = (a ; b).
   \end{align}
   Avec ces informations extraites de l'équation de $\Delta$, on peut chercher à trouver l'équation de celle de $(AH)$. Nous allons utiliser le vecteur directeur de $\Delta$.<br/>
   Toute l'astuce consiste à remarquer que un vecteur directeur de $\Delta$ sera un vecteur normal de $(AH)$. Par nature de ces deux droites. Si H est le projeté orthogonal de $A$ sur $\Delta$ alors les droites  $(AH)$ et $\Delta$ sont perpendiculaires. Donc un vecteur directeur de  $\Delta$ est un vecteur normal de $(AH)$.\\
   On pose que la droite $(AH)$ a pour équation : 
   \begin{align}
   (AH) : a_{(AH)}.x  +b_{(AH)}.y  + c_{(AH)} = 0
   \end{align}
   Alors par définition on a :
   \begin{align}
   \overrightarrow{n_{(AH)}} & = (a_{(AH)} ; b_{(AH)}).
   \end{align}
   Où $	\overrightarrow{n_{(AH)}}$ est un vecteur normal de la droite $(AH)$ par perpendicularité de $(AH)$ et  $\Delta$.<br/>
   Et comme $\overrightarrow{u_{\Delta}}  = (-b ; a)$ est le vecteur directeur de $\Delta$ alors on identifie $\overrightarrow{u_{\Delta}}$ comme un vecteur normal de $(AH)$. On a donc : 
   \begin{align}
   a_{(AH)} = -b\\
   b_{(AH)} = a.
   \end{align}
   On a déduit les coefficients $a_{(AH)}$ et $b_{(AH)}$ de l'équation de la droite $(AH)$.<br/>
   Il reste à trouver le coefficient $c_{(AH)}$. Il est déterminé à l'aide de l'équation de la droite $(AH)$ et des coordonnées du point $A$ . Le point $A$ appartient par nature à la droite $(AH)$. Donc ses coordonnées vérifient l'équation de la droite : 
   \begin{align}
   a_{(AH)}.x_A  +b_{(AH)}.y_A  + c_{(AH)} = 0
   \end{align}
   Où la seule inconnue est $c_{(AH)}$. On trouve donc : 
   \begin{align}
   c_{(AH)} = -a_{(AH)}.x_A  - b_{(AH)}.y_A
   \end{align} 
   On a donc trouvé l'équation de la droite $(AH)$. Comme nous disposons de celle de $\Delta$, alors les coordonnées du point $H$ sont la solution su système d'équations données par celles des droites $(AH)$ et $\Delta$.\\
   Pour ce dernier point on se reportera à la résolution des systèmes linéaires à deux équations et deux inconnues.
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h3>
   Exemple</h3>
   Soit un point $A$ de coordonnées $A=(5 ;4 )$ et $\Delta$ la droite d'équation cartésienne : $ x -3.y -3 =0$. Déterminer les coordonnées du projeté orthogonal de $A$ sur le droite $\Delta$.
   <strong>Solution :</strong><br/>
   Premièrement réalisons un schéma : 
   \begin{center}
   \includegraphics[width=0.4\linewidth]{images/cpopd-01-AN}
   \end{center}
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d1-repere2D.png?raw=true" width=75%>
   Ajoutons sur ce schéma le projeté orthogonal de $A$ sur $\Delta$ et le vecteur directeur de $\Delta$ nommé sur ce schéma $\overrightarrow{u_{\Delta}}$ : 
   \begin{center}
   \includegraphics[width=0.4\linewidth]{images/cpopd-02-AN}
   \end{center}
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d1-repere2D.png?raw=true" width=75%>
   Raisonnons avec les informations dont on dispose et selon ce que l'on veut obtenir : on souhaite calculer le coordonnés de $H$. De quelles informations dispose-t-on : 
   <ul>
      <li> les coordonnées de $A$, $A = (5;4)$;</li>
      <li> l'équation de la droite $\Delta$ : $ x -3.y -3 =0$;</li>
      <li> par conséquent le vecteur directeur de cette droite : $\overrightarrow{u_{\Delta}} = (3;1)$. </li>
   </ul>
   A partir de ces éléments, pour trouver les coordonnées du point $H$ en suivant ces étapes : 
   <ol>
      <li> trouver l'équation de $(AH)$ : à l'aide du vecteur directeur de $\Delta$ puis du point $A$;</li>
      <li> $H$ est le point d'intersection des droites $(AH)$ et $\Delta$, on pose donc le système d'équation donné par les équations sur ces droites ; </li>
      <li> résoudre le système ; </li>
      <li> les solutions du système sont les coordonnées du point $H$. </li>
   </ol>
   <strong>Équation de $(AH)$</strong>
   Soit l'équation générale de $(AH)$: 
   \begin{align}
   a_{(AH)}.x_A  +b_{(AH)}.y_A  + c_{(AH)} = 0 
   \end{align}
   Les coefficients à déterminer sont : 	$a_{(AH)}$, $b_{(AH)}$ et$c_{(AH)}$. On trouve dans un premier temps les coefficients : 	$a_{(AH)}$ et $b_{(AH)}$. A l'aide du vecteur directeur de $\Delta$.  Comme les droites $AH$ et $\Delta$ sont perpendiculaires, le vecteur directeur de $\Delta$ est un vecteur normal de $(AH)$.<br/>
   Le vecteur normal de $(AH)$ d'équation $a_{(AH)}.x_A  +b_{(AH)}.y_A  + c_{(AH)} = 0 $ est théoriquement le vecteur : 
   \begin{align}
   <br/>overrightarrow{n_{(AH)}} = (a_{(AH)} ; b_{(AH)})
   \end{align}
   Donc si $<br/>overrightarrow{n_{(AH)}} =<br/>overrightarrow{u_{\Delta}}$, cela est vrai aussi au niveau des coordonnées, donc : 
   \begin{equation}
   \left\{
   \begin{array}{ll}
   a_{(AH)}  = 3<br/>
   b_{(AH)} = 1
   \end{array}
   \right.
   \end{equation}
   On a donc obtenu partiellement l'équation de notre droite $(AH)$ : $ 3.x + y + c_{(AH)} =0$.\\
   Pour déterminer $c_{(AH)}$, on utilise le point $A$. Ce point est par définition sur la droite $(AH)$. Par conséquent, les coordonnées de ce point résolvent l'équation de la droite. CE qui signifie que les coordonnées de $A$ respectent l'équation de $(AH)$ : 
   \begin{equation}
   \begin{cases}
   & 3.x_{(AH)} + y_{(AH)} + c_{(AH)} =0<br/>text{ avec } x_{(AH)} <br/>text{ et } y_{(AH)}<br/>text{connus, donc :<br/>
   & 3.5 + 4 + c_{(AH)} =0 <br/>
   & 15 + 4 + c_{(AH)} =0 <br/>
   & 19 + c_{(AH)} =0 <br/>
   & c_{(AH)} = -19  
   \end{cases}
   \end{equation}
   Par conséquent l'équation de la droite $(AH)$ est :  
   \begin{align}
   3.x + y  -19 =0
   \end{align}
   <strong>Poser le système</strong>
   On a donc deux équations de droites, une pour $(AH)$ et une pour $\Delta$, ce qui permet de poser le système suivant : 
   \begin{equation}
   \left\{
   \begin{array}{ll}
   3.x + y  -19 =0<br/>
   x - 3. y  -3 =0
   \end{array}
   \right.
   \end{equation}
   <strong>Résolution du système</strong>
   En multipliant la deuxième ligne par $-3$, on obtient : 
   \begin{equation}
   \left\{
   \begin{array}{ll}
   3.x + y  -19 =0<br/>
   -3.x + 9. y  +9 =0
   \end{array}
   \right.
   \end{equation}
   En additionnant les deux lignes on obtient : 
   \begin{align}
   3.x-3.x + y+ 9. y  -19 +9 =0
   \end{align}
   Ce qui donne : 
   \begin{align}
   10. y  -10 =0<br/>text{ donc } y = 1
   \end{align}
   Si $y=1$, on le remplace par sa valeur dans une des deux équations, par exemple dans la deuxième et on obtient : 
   \begin{align}
   x - 3. y  -3 =0<br/>implies x - 3. 1  -3 =0 <br/>implies x - 6 = 0 <br/>implies  x = 6.
   \end{align}
   <strong>Conclusion </strong>
   La solution du système est donc le point de coordonnées $x=6$ et $y=1$. Ces coordonnées sont celles du point $H$, projeté orthogonal de $A$ sur $\Delta$.<br/>
   Pour trouver les coordonnées de la projection orthogonale d'un point sur une droite, il n'existe pas de formule générale applicable dans toutes les situations, mais uniquement une méthode. Celle décrite ici peut être appliquée à chaque fois pour trouver les coordonnées de ce projetés orthogonal sur une droite. 
   \end{comment}
      
   <br>
   <hr>
   <a href="chapitre-8.1-element-de-geometrie-Distance-entre-deux-point.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>