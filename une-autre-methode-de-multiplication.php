<?php  include 'entete.php';?>
  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
  <p>
    <h1>Une autre méthode de multiplication </h1>
    <h2>Premier exemple</h2>
    Cherchons à calculer $83 \times 79$. 
    
  </p>
  <p>
    Premièrement, on écrit ces deux nombres à multiplier dans un tableau comme suit. 
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-1.png?raw=true" width=50%>
    Horizontalement on écrit un des deux nombres, de gauche à droite et verticalement, de haut en bas. On a deux nombres à deux chiffres, on obtient 4 cases. On va chercher à remplir ces cases. 
  </p>
  <p>
    Puis on divise les cases comme ceci, en prolongeant les traits. Voir dessin ci-dessous. 
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-2.png?raw=true" width=50%>
  </p>
  <p>
    Une fois ceci fait, on peut réaliser tous les calculs nécessaires pour obtenir le résultat. On voit dans le dessin ci-dessous que l'on a rempli la case correspondant au $3$ horizontalement et au $9$ verticalement. On calcule donc $9 \times 3$, qui donne 27. On écrit le résultat dans la case comme dans le dessin en dessous. Dans chaque case divisée par deux on peut répartir le résultat du produit de la multiplication de chaque produit à calculer. 
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-3.png?raw=true" width=50%>
    On remarquera que dans une case il n'est possible de n'écrire que deux chiffres. LE produit de $9$ par $9$ donnat $81$, on ne pourra jamais écrire plus que cette valeur dans chaque case.  
  </p>
  <p>
    On réalise la même opération pour chaque case. 
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-4.png?raw=true" width=50%>
  </p>
  <p>
    Une fois ceci fait on va ajouter tous les nombres de chaque case. Pour écrire la valeur de chque somme après chaque case en diagonal. 
    <ul>
      <li>Dans la première diagonale on ne trouve que le nombre $7$. On écrit donc ce nombre dans la première case diagonale disponible. </li>
      <li>Puis on a la diagonale suivante où on trouve $2$, $2$ et $1$. Ce qui fait $5$. </li>
      <li>Dans la diagonale suivante, on voit $7$, $6$ et $2$ dont la somme fait $15$. On ne conserve que les unités, ici le $5$ et les dizaines sont renvoyées comme retenue vers la case suivante. </li>
      <li>Dans case suivante, la dernière, on trouve le chiffre 5, auquel on ajoute a retenue de $1$ de la diagonale précédente.</li>
      <li>On obtient donc un $6$, un $5$, encore un $5$ et un $7$. </li>
    
    </ul>
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-5.png?raw=true" width=50%>
  </p>
  <p>
   $83 \times 79$ fait bien $6 557$.
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-6.png?raw=true" width=50%>
  </p>
  <p>
    Autre calcul : $497 \times 58$.
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-7.png?raw=true" width=50%>
  </p>
  <p>
    Dernier exemple : $2357$ par $496$
    <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/multiplication-methode-8.png?raw=true" width=50%>
  </p>
<p>  L'avantage de cette méthode est qu'on peut s'interrompre dans le calcul pour le reprendre facilement. On peut aussi plus facilement contrôler les erreurs par rapport à la multiplication classique. 
  </p>
  <p>Cette méthode n'a rien de neuf, elle est bien connue depuis on ne sait combien de temps. Bien qu'en France on en apprenne une autre, elle mérite d'être connue. Je retrouverai son nom dès que j'en ai l'occasion. </p>
    
  <br>
  <hr>
  <a href="index.html">Retour à l'index &rarr;</a><br>
  <script src="jsfile/jquery.js"></script>
  <script src="jsfile/modernizr.js"></script>
  <script src="jsfile/dih5.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DSGSHE1GR2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DSGSHE1GR2');
</script>
</body>
</html>