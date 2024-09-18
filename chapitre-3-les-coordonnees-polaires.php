  <?php  include 'entete.php';?>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet">

   <p>
   <h1>Les coordonnées Polaires</h1>
   <h2>Approche intuitive</h2>
   <h3>Naviguer au cap</h3>
   
   <p>
      Au delà du nom pompeux que porte ce système de coordonnées, il correspond à une manière de se repérer utilisée depuis que l'on a commencé à naviguer. L'idée, c'est d'avoir un cap de référence pour placer sa direction par rapport à ce dernier, à l'aide d'un angle. Puis de savoir quelle distance on doit parcourir. En gros, en partant de Brest et en allant à l'est, au bout de $600$ km on ne tombe pas loin de Paris. 
   </p>
   <p>
      Dans le système des coordonnées polaires, <strong>l'axe de référence est l'axe des abscisses, orienté vers les $x$ positifs</strong>. Vers la droite plus concrètement (à gauche on trouve les valeurs négatives). 
   </p>
   <p>
   Ce système de coordonnées est donc utilisé pour se repérer dans le plan. C'est une autre manière de localiser chaque point du plan. On l'a vu, comme pour le système cartésien, il faut deux informations pour se repérer. <br/>
   On va utiliser ici des notions de trigonométries, à savoir le $\cos$ : cosinus et le $\sin$ : sinus. On verra que l'on, peut convertir les coordonnées polaires en coordonnées cartésiennes et réciproquement. 
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>L'orientation</h3>
   <p>
   Le plan est muni d'un sens de rotation. Autrement dit, imaginez-vous au centre d'une pièce, Pour vous tourner sur vous-même, vous devez soit partir vers la gauche, soit vers la droite. Vers la gauche c'est le sens anti horaire et vers la droite, le sens horaire. Le sens conventionnel des aiguilles d'une montre. On muni donc toujours le plan, implicitement de ce sens de rotation. Où le sens positif est le sens anti horaire, et le sens horaire, par opposition est le sens négatif. Ainsi quand on donne un angle, il est muni d'un signe. $45°$ ou $\pi/2$ signifie tourner de cet angle vers la gauche. $-90°$, ou $-\pi/2$ c'est tourner d'un quart de tour vers la droite.
   </p>
   <p>
   Dans ce système, les références sont l'axe des $x$ positifs et le sens de rotation positif. Si à cet axe on ajoute un vecteur unitaire, on a de quoi mesurer toute distance depuis l'origine.
</p>
   <h3>Théorie</h3>
<p>
   Ainsi, en coordonnées polaires, on localise un point $M$ selon sa distance à l'origine et selon l'angle que fait la droite définie par l'origine du repère et le point $M$ et l'axe du repère. 
   Tout d'abord, soit un repère polaire, avec un axe orienté et on suppose que le plan est orienté de manière conventionnelle : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d10-001.png?raw=true" width=50%>
   Dans le plan de la feuille, on peut placer un point $M$ : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d10-002.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      puis représenter la droite $(OM)$:
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d10-003.png?raw=true" width=50%>
      Et faire ressortir la longueur $OM$ et l'angle que fait la droite $(OM)$ et l'axe  $(O;\vec{i})$:
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d10-004.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Nous avons donc construit un repère en coordonnées polaires, les coordonnées de chaque point s'expriment comme ceci : 
      \begin{align}
      M  & = (\rho ;\alpha)   \text{ avec }      \rho > 0\text{ et }  \alpha\in [ 0; 2\pi]\\
      &\rho\text{ représente la longueur } OM\\
      &\alpha\text{ représente l'angle orienté entre la droite } OM\text{ et l'axe  } (O;\vec{i})
      \end{align}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      On voit qu'à l'aide de la distance à l'origine, la distance $OM$ et l'angle que fait la droite $(OM)$ avec l'axe $(O;\vec{i})$ permettent de donner avec exactitude la position de $M$.
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Il faut voir ce système de coordonnées comme une autre manière de représenter la position des objets. Cette représentation peut s'avérer très utile, là où le repère cartésien est un peu plus compliqué à manipuler. Par exemple, pour représenter un cercle en coordonnées polaires il suffit de connaitre le rayon du cercle. Ainsi, les points du cercle sont tous les points situés à distance $R$ de l'origine, quel que soit l'angle. Nous verrons ça dans la suite. 
      
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Se repérer à l'aide des coordonnées polaires est tout simplement un mode de navigation comme on le fait en bateau ou en avion sur des courtes distances. On se fixe une direction de référence, par exemple le nord, on a une distance à parcourir depuis notre point de départ selon une direction données par rapport au nord. Cette direction est donnée par un angle par rapport à une référence. En navigation, c'est le cap.  
   </p>
   <h2>Exemple pratique</h2>
   Soient quatre points $A$; $B$, $C$ et $D$ de coordonnées polaires : 
   \begin{align*}
   A &  = (\sqrt{2} ;\frac{\pi}{4})   \\
   B &  = (\sqrt{2} ;\frac{3\pi}{4})  \\
   C &  = (\sqrt{2} ;\frac{5\pi}{4})  \\
   D &  = (\sqrt{2} ;\frac{7\pi}{4})   
   \end{align*}
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d11-001.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      Ces quatre points, nous le verrons par le calcul par la suite, représentent les quatre sommets d'un carré dont les coordonnées cartésiennes sont : 
      \begin{align*}
      A &  = (1 ; 1)   \\
      B &  = (-1 ; 1) \\
      C &  = (-1 ; -1)  \\
      D &  = (1 ; -1)  
      \end{align*}
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d11-002.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h3>   Théorie</h3>  
   <h4>Contexte</h4>
   On se place dans un repère  $(O;\vec{i};\vec{j})$, repère cartésien. A partir de se repère, on va placer un système de coordonnées polaire sur ce repère en l'utilisant : l'axe $(O;\vec{i})$.<br/>
   
   <h4>Formalisation</h4>
   <strong>Des coordonnées polaires aux cartésiennes :</strong><br/>
   Si on place un point $M$, on peut appeler $\rho$  la longueur $OM$ et $\alpha$, l'angle entre la droite $(OM)$ et l'axe $(O;\vec{i})$ de cette manière: 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d12-001.png?raw=true" width=50%>
   Par la suite, on cherche à calculer le<br/>$\textit{cosinus}$ et le<br/>$\textit{sinus}$ de cet angle $\alpha$ en se servant des données disponibles.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <strong>Petit rappel de trigonométrie :</strong><br/>
      Avant tout calcul, pour se représenter le cosinus, il faut penser aux projections. Si on projette une longueur sur une autre, sa valeur est alors multipliée par le $cosinus$ de l'angle que font les deux longueurs. 

      <br/>
      Pour le $\cos$, on rappelle que le $cosinus$ d'un angle est égal au rapport du coté adjacent à l'angle et de l'hypoténuse du triangle rectangle dans lequel on se trouve. Cette hypoténuse est la longueur $(OM)$ appelée aussi $\rho$. Le coté adjacent est donné par l'abscisse de $M$ : $x_{M}$. Donc, par conséquent, d'un point de vue plus mathématiques : 
      \begin{eqnarray}
      \boxed{\cos\alpha =\dfrac{x_{M}}{OM} =\dfrac{x_{M}}{\rho}}
      \end{eqnarray}
      De la même manière pour le sinus, rapport du coté opposé à l'angle et de l'hypoténuse, on a : 
      \begin{eqnarray}
      \boxed{\sin\alpha =\dfrac{x_{M}}{OM} =\dfrac{y_{M}}{\rho}}
      \end{eqnarray}
      On peut représenter les choses comme suit : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d12-002cpolaires.png?raw=true" width=50%>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      A partir des deux formules suivantes, nous pouvons trouver celles qui permettent de convertir les coordonnées polaires en coordonnées cartésiennes : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      \cos\alpha =\dfrac{x_{M}}{\rho}\\
      \sin\alpha =\dfrac{y_{M}}{\rho}
      \end{array}
      \right.
      \end{equation}
      Dans chacune des équations en multipliant par $\rho$ de chaque coté on obtient : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      \rho .   \cos\alpha =\rho .\dfrac{x_{M}}{\rho}\\
      \rho .   \sin\alpha =\rho .\dfrac{y_{M}}{\rho}
      \end{array}
      \right.
      \end{equation}
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      En simplifiant et en écrivant les égalités dans l'autre sens, on obtient la formule conversion des coordonnées polaires en coordonnées cartésiennes : <strong>
      \begin{equation}
      \left\{
      \begin{array}{ll}
      x_{M} =  \rho .   \cos\alpha\\
      y_{M} =  \rho .   \sin\alpha
      \end{array}
      \right.
      \end{equation}</strong>
      <strong>Exemple d'application : </strong>
      Reprenons les quatre points de l'exemple pratique précédent. Et appliquons les formules vues au dessus: 
      \begin{align*}
      A &  = (\sqrt{2} ;\frac{\pi}{4})   \\
      B &  = (\sqrt{2} ;\frac{3\pi}{4})  \\
      C &  = (\sqrt{2} ;\frac{5\pi}{4})  \\
      D &  = (\sqrt{2} ;\frac{7\pi}{4})   
      \end{align*}
      En appliquant les formules : 
      \begin{align*}
      A &=  (\sqrt{2}.\cos\frac{\pi}{4}   ; \sqrt{2} .\sin\frac{\pi}{4})   \\
      B &=  (\sqrt{2}.\cos\frac{3\pi}{4}  ; \sqrt{2} .\sin\frac{3\pi}{4})   \\
      C &=  (\sqrt{2}.\cos\frac{5\pi}{4}  ; \sqrt{2} .\sin\frac{5\pi}{4})   \\
      D &=  (\sqrt{2}.\cos\frac{7\pi}{4}  ; \sqrt{2} .\sin\frac{7\pi}{4})   
      \end{align*}
      En calculant : 
      \begin{align*}
      A &=  (\sqrt{2}. \frac{\sqrt{2}}{2}   ; \sqrt{2} .\frac{\sqrt{2}}{2}  ) \\
      B &=  (\sqrt{2}.  -\frac{\sqrt{2}}{2}  ; \sqrt{2} .\frac{\sqrt{2}}{2} )  \\
      C &=  (\sqrt{2}. -\frac{\sqrt{2}}{2}  ;\sqrt{2} . -\frac{\sqrt{2}}{2})  \\
      D &=  (\sqrt{2}.\frac{\sqrt{2}}{2}  ;\sqrt{2} . -\frac{\sqrt{2}}{2} )   
      \end{align*}
      Ce qui donne bien par simplification : 
      \begin{align*}
      A &=  (1;1) \\
      B &=  (-1;1) \\
      C &=  (-1;-1) \\
      D &=  (1;-1)   
      \end{align*}
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d11-002.png?raw=true" width=50%>
      Cet exemple appliqué à quelques points est présenté globalement et résolu de la même manière. Pour comprendre la mécanique du passage de coordonnées polaire en cartésiennes il faut reprendre chaque point et appliquer pas à pas les formules pour trouver les résultats.<br/>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
      <h2>De cartésien à polaires</h2>
      <h3>Principe</h3>
      Ici on cherche à savoir exprimer des coordonnées polaires depuis les cartésiennes. Autrement dit si on a un $M$ point avec un abscisse et une ordonnée, comment trouver le $\rho$ et l'angle $\alpha$ de ce point ? 
      Repartons du schéma où sont représentées coordonnées cartésiennes et polaires : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d12-002cpolaires.png?raw=true" width=50%>
      Les démonstration sont vue en exercice. Les formules de conversion sont les suivantes :<br/>
      Pour $\rho$ un nombre positif et $\alpha$ un angle compris entre $[0;2\pi]$, on a : 
      \begin{align*}
      \rho =\sqrt{ x_{M}^2 +  y_{M}^2}
      \end{align*}
      Ce résultat est naturel pour qui connait le théorème de Pythagore : $\rho$ est la longueur de l'hypoténuse du triangle rectangle d'hypoténuse $OM$.\\
      Et pour $\alpha$, on a une formule qui met en relation $ x_{M}$, $ y_{M}$ et $\alpha$ : la tangente, $\tan$. Par définition : 
      \begin{align*}
      \tan\alpha =\dfrac{y_{M}}{x_{M}} 
      \end{align*}
      D'où par réciproque de la fonction $\tan$ : 
      \begin{align*}
      \alpha =\arctan(\dfrac{y_{M}}{x_{M}}) 
      \end{align*}
      En conclusion, si on dispose d'un point $M$ de coordonnées $M = (x_{M};y_{M})$, les coordonnées polaires de ce point sont : 
      \begin{align}
      M = (\sqrt{ x_{M}^2 +  y_{M}^2};\arctan(\dfrac{y_{M}}{x_{M}})) 
      \end{align}
      Pour  $x_{M}\neq 0$ et $y \geq 0$.
      </p>
      <p>
      Si  $x_{M} = 0$ des cas particuliers apparaissent, comme donné dans la formulation ci-dessous qui donne tous les cas possibles.
   <h3>Formulation</h3>
Par conséquent, lorsque l'on dispose des coordonnées cartésiennes d'un vecteur, à l'aide de cette formule on peut déterminer les coordonnées polaires du vecteur.
Soit le point $M$ de coordonnées : 
$$
M = (x_{M};y_{M})
$$
Alors, les coordonnées du point $M$ sont données par les formules suivantes, conditionnellement pour les valeurs de $\alpha$. Dans ce cas on aura $\alpha \in [0;2\pi]$ On a : 
$$
\rho = \sqrt{x_{M}^{2} + y_{M}^{2}}
$$
et
<ul>
   <li> Si $x>0$ et $y\geq 0$ alors : $\alpha =  \arctan({\frac {y}{x}}),$</li>
   <li> Si $x>0$ et $y&#x3C; 0$ alors : $\alpha = \arctan({\frac {y}{x}})+2\pi ,$</li>
   <li> Si $x&#x3C;0$ alors : $\alpha = \arctan({\frac {y}{x}})+\pi $</li>
   <li> Si $x=0$ et $y>0$  alors :  $\alpha = \frac{\pi}{2},$</li>
   <li> Si $x=0$ et $y&#x3C;0$ alors : $\alpha = \frac{3\pi}{2}.$</li>
</ul>
Le passage de coordonnées polaires à cartésienne est immédiat comme on peut le voir dans les premières formules. La transformation réciproque est moins direct et nécessite de considérer plusieurs cas qui se modélisent très bien dans le code. 
   </p>

   <p>
      Il est aussi possible d'obtenir $\alpha$ dans  $[-\pi;\pi]$ à l'aide de ces formules : 
      
<ul>
   <li> Si $x>0$ alors : $\alpha =  \arctan({\frac {y}{x}}),$</li>
   <li> Si $x&#x3C; 0$ et $y\geq; 0$ alors : $\alpha = \arctan({\frac {y}{x}})+\pi ,$</li>
   <li> Si $x&#x3C;0$ et $y &#x3C; 0$ alors : $\alpha = \arctan({\frac {y}{x}})-\pi $</li>
   <li> Si $x=0$ et $y>0$  alors :  $\alpha = \frac{\pi}{2},$</li>
   <li> Si $x=0$ et $y&#x3C;0$ alors : $\alpha = -\frac{\pi}{2}.$</li>
</ul>
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h3>En image</h3>
      <p>
         L'image ci-dessous présente comment se répartissent les formules pour trouver $\alpha$ dans le premier cas :  
         <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/cartesien2polaire.png?raw=true" width=50%>
      </p>

      <p>
         <strong>Exercice</strong> : faire le dessin pour le deuxième cas où $\alpha \in [-\pi;\pi]$. 
      </p>


<h3>Quelques exemples</h3>
      <p>
         Ces premiers exemples prennent des points dont les coordonnées vont tomber justes pour certains calculs. 
         <h4>Quelques conversions de coordonnées cartésiennes  vers polaires</h4>
         <h5>Quelles sont les coordonnées polaires du point $M$</h5>
   si ses coordonnées cartésiennes sont : 
   $$
   M = (\frac {3\sqrt{3}}{2};\frac {3}{2})
   $$
   Tout d'abord $\rho$ vaut : 
   
   $$
   \rho  = \sqrt{(\frac {3\sqrt{3}}{2})^{2}+(\frac {3}{2})^{2}} = 3
   $$
   On est dans le cas où Si $x>0$ et $y&#60;0$, donc on a : 
   
   $$
   \alpha  = \arctan(\dfrac{y_{M}}{x_{M}}) =  \arctan(\dfrac{\frac {3}{2}}{\frac {3\sqrt{3}}{2}}) =  \arctan(\dfrac{1}{\sqrt{3}})
   $$
   donc $ \alpha = \dfrac{\pi}{4}$
      </p>
   
   <p>
      En $\dfrac{\pi}{4}$ la fonction tangente prend une valeur caractéristique de  $\dfrac{1}{\sqrt{3}}$. Que l'on préfère écrire $\dfrac{\sqrt{3}}{3}$. 
   </p>
   <p>
      Les coordonnées polaires du point $M$ sont donc : 
      $$
      M = (3; \dfrac{\pi}{4})
      $$
   </p>
   
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <h5>Quelles sont les coordonnées polaires du point $M$</h5>
   si ses coordonnées cartésiennes sont : 
   $$
   M = (-1;-1)
   $$
   Tout d'abord $\rho$ vaut : 
   
   $$
   \rho  = \sqrt{(-1)^{2}+(-1)^{2}} = \sqrt{2} 
   $$
   On est dans le cas où Si $x&#60;0$ et $y&#60;0$, donc on a : 
   
   $$
   \alpha  = \arctan(\dfrac{y_{M}}{x_{M}}) + \pi=  \arctan(\dfrac{-1}{-1}) + \pi=  \arctan(1) + \pi= \dfrac{\pi}{4} + \pi
   $$
   donc $ \alpha = \dfrac{3\pi}{4}
      </p>
   
   <p>
      Les coordonnées polaires du point $M$ sont donc : 
      $$
      M = (\sqrt{2}; \dfrac{3\pi}{4})
      $$
   </p>
   <p>
      Ce qui arrondi et en degré donnerait : 

      Les coordonnées polaires du point $M$ sont donc : 
      $$
      M = (1.4142; +225°)
      $$
   </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
   <h5>Dernier exemple, quelles sont les coordonnées polaires du point $M$</h5>
   si ses coordonnées cartésiennes sont : 
   $$
   M = (3;-12)
   $$
   Tout d'abord $\rho$ vaut : 
   
   $$
   \rho  = \sqrt{(3)^{2}+(-12)^{2}} = \sqrt{153} \,\,\,\, ( = 3\sqrt{17})
   $$
   On est dans le cas où Si $x>0$ et $y&#60;0$, donc on a : 
   
   $$
   \alpha  = \arctan(\dfrac{y_{M}}{x_{M}}) + 2\pi=  \arctan(\dfrac{-12}{3}) + 2\pi=  \arctan(-4) + 2\pi= 4,957
   $$
   donc $ \alpha = 4,957$ rad. ce qui fait un tout petit peu plus de $284°$. 
      </p>
   
      <p>
         Les coordonnées polaires du point $M$ sont donc : 
         $$
         M = ( 12,369;  4,957)
         $$
         La première valeur étant la distance à l'origine et la deuxième, l'angle depuis la droite de référence, en radians. 
      </p>
      <h2>Somme de vecteurs en coordonnées polaires</h2>  
      <p>
         Dans l'idée on veut savoir faire cette addition : 
         <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/addVectPolaire01.png?raw=true" width=25%>
      </p>
      <p>
         Mais en ne connaissant que les normes des vecteurs et leur angle par rapport à l'axe des $x$ positifs : 
         <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/addVectPolaire02.png?raw=true" width=50%>
         On doit déterminer $\alpha_{w}$ et $\left\Vert  w\right\Vert$ en connaissant $\alpha_{u}$, $\left\Vert u\right\Vert$ et $\alpha_{v}$, $\left\Vert v\right\Vert$. 
      </p>
      <p>
         Pour ce faire, nous allons utiliser deux lois issues de la géométrie du triangle. elles peuvent être vues comme des généralisation du théorème de Pythagore : 
         <ul>
            <li> <a href="chapitre-7.5-les-vecteurs-Relation-AL-Kashi-Mediane-formule-cosinus-et-sinus.php">La loi des $cosinus$</a> : pour calculer $\left\Vert w\right\Vert$ </li>
            
            <li><a href="chapitre-7.5-les-vecteurs-Relation-AL-Kashi-Mediane-formule-cosinus-et-sinus.php">La loi des $sinus$</a>: pour calculer $\alpha_{w}$ </li>
         </ul>  
         
     </p><strong>Calcul de $\left\Vert w\right\Vert$</strong>
   </p>
   <p>
      D'après la loi des $cosinus$, en l'appliquant dans notre cas on a : 
      $$
      \left\Vert w\right\Vert^{2} = \left\Vert u\right\Vert^{2}+\left\Vert v\right\Vert^{2}-2\left\Vert u\right\Vert.\left\Vert v\right\Vert.\cos \gamma
      $$
      On identifie facilement l'angle $\gamma$ de la loi des $cosinus$ avec l'angle $\pi -\alpha_{v}+\alpha_{u}$ et la longueur $AB$ avec la norme du vecteur $\left\Vert w\right\Vert$
      A l'aide d'une racine carré on obtient $\left\Vert w\right\Vert$. <br/>
      $\theta$ est l'angle obtenu en ajoutant l'angle du vecteur $\vec{u}$
       
    </p>
   </p><strong>Calcul de $\alpha_{w}$</strong>
      </p>
      <p>
          <h4>Application de la loi des $sinus$ pour calculer $\alpha_{w}$</h4>
      </p>
      <p>
         Premièrement, dans notre schéma on a  $\alpha_{w} = \beta +  \alpha_{u}$. Donc il suffit de calculer $\beta$. Ce que l'on fait avec la loi des $sinus$. Maintenant on connaît $\left\Vert w\right\Vert$ et $\gamma$. Donc pour trouver $\beta$, en appliquant cette loi des $sinus$ on trouve dans notre cas : 
               
         $$
         \dfrac{\sin \beta}{\left\Vert v\right\Vert} = \dfrac{\sin \gamma}{\left\Vert w\right\Vert}
         $$
   d'où : 
   $$
   \beta = \arcsin{\left(\dfrac{\left\Vert v\right\Vert.\sin \gamma}{\left\Vert w\right\Vert}\right)}
   $$
   Avec $\gamma = \pi -\alpha_{v}+\alpha_{u}$.
      </p>
      <p>
	  <h3>Remarque</h3>
	  La transposition effectuée ci-dessus est plus ou moins inutile; Elle permet de comprendre que si on se pose un question en mathématiques, que l'on dispose d'une description claire des objets que l'on manipule, alors on trouve ce que l'on veut. En l’occurrence, ajouter deux vecteurs en coordonnées polaires, qui est parfaitement faisable, assez pénible dans les calculs, alors que très simple en coordonnées cartésiennes.  
      </p>
      <p>
	  Donc l'idée ici, c'est de se dire si on a besoin d'ajouter des vecteurs, on le fait en coordonnées cartésiennes! 
      </p>
      <p>
	  Par ailleurs, ce n'est pas parce qu'une solution est compliquée que c'est la seule!!! 
      </p>
      <p>
      </p>
      <p>
      </p>
      <p>
      </p>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

      <p>
         A venir : le repère associé aux coordonnées polaires (liens avec la physique).
      </p>
   <h2>Le repère des coordonnées polaires</h2>
   <h3>Approche</h3>


   <p>
      
   </p>
   <h3>Théorie</h3>


   <p>
      
   </p>
   <h3>Exemples</h3>

   

   <p>
      
   </p>
   <h3>Exercices</h3>


   <p>
      
   </p>
 -->
   
   <br>
   <hr>
   <a href="chapitre-4-les-coordonnees-dans-l-espace.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
     <?php  include 'pieddepage.php';?>
