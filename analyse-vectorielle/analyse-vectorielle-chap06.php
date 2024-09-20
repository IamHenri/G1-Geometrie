<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>Mathématiques | Géométrie analytique | Repères, vecteurs et outils de mesure</title>
   <link rel="stylesheet" href="https://calculusmadeeasy.org/screen.css">
   <style>
      body{counter-reset:h1 1}
   </style>
   <script type="text/x-mathjax-config">
      MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
   </script>
   <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</head>
<body>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   
   
   
      <h2>TL;DR</h2>
      }
      <h3>Champs scalaires et de vecteurs</h3>
      }
      <h4>Champs scalaires</h4>
      }
      Un champ scalaire est une fonction $f$ qui va de $\mathbb{R}^{n}$ dans $\mathbb{R}$:
      \begin{align*}
      f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R} \\
      &x_{1}; x_{2} ; ... ; x_{n} \longmapsto  f(x_{1}; x_{2} ; ... ; x_{n})\\
      \end{align*}
      <h4>Champs vectoriels</h4>
      }
      On peut définir un champ de vecteurs par une fonction de $\mathbb{R}^{n}$ dans $\mathbb{R}^{m}$ : 
      \begin{align*}
      f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R}^{m} \\
      &X = (x_{1}; x_{2} ; ... ; x_{n}) \longmapsto  f(x_{1}; x_{2} ; ... ; x_{n}) = 	\left( \begin{array}{ccc}
      f_{1}(x_{1}; x_{2} ; ... ; x_{n})  \\
      f_{2}(x_{1}; x_{2} ; ... ; x_{n}) \\
      ... \\
      f_{m}(x_{1}; x_{2} ; ... ; x_{n})\\
      \end{array} \right)\\
      \end{align*}
      <h3>L'opérateur $\nabla$</h3>
      }
      Cet opérateur s'écrit en dimension 3:
      \begin{align}
      \nabla = \frac{\partial}{\partial x}.\vec{i} + \frac{\partial}{\partial y}.\vec{j} + \frac{\partial}{\partial z}.\vec{k}
      \end{align}
      <h3>Divergence</h3>
      }
      Si on a  $\overrightarrow{F}$:
      \begin{align}
      \overrightarrow{F} =f_{1}(x;y;z).\vec{i} + f_{2}(x;y;z).\vec{j} + f_{3}(x;y;z).\vec{k}
      \end{align}
      On a : 
      \begin{align*}
      \overrightarrow{div.}.\overrightarrow{F} = \nabla . \overrightarrow{F}  = \frac{\partial f_{1}}{\partial x} + \frac{\partial f_{2}}{\partial x} + \frac{\partial f_{3}}{\partial x} \,\, \,\, \forall (x;y;z) \in \mathbb{R}^{3} ;   \,\, \in \mathbb{R} ; 
      \end{align*}
      <h3>Gradient</h3>
      }
      <h4>Champ scalaire en deux dimensions</h4>
      }
      Considérons un champ scalaire défini par deux variables à valeur dans $\mathbb{R}$: 
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R} \\
      &(x;y)  \longmapsto 	f(x;y);\\
      \end{align*}
      Pour un champ scalaire bidimensionnel,  pour $f = f(x;y)$  : 
      \begin{align*}
      \overrightarrow{\nabla . f}  = & \left(\frac{\partial f}{\partial x} ;\frac{\partial f}{\partial y}\right)&\,\, \,\, \forall (x;y) \in \mathbb{R}^{2} \text{ \, où la fonction f est différentiable ;}
      \end{align*}
      <h4>Champ scalaire en trois dimensions</h4>
      }
      Ou encore un champ scalaire défini de $\mathbb{R}^{3}$ dans $\mathbb{R}$
      \begin{align*}
      f : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R} \\
      &(x;y;z)  \longmapsto 	f(x;y;z);\\
      \end{align*}
      Alors, pour $f = f(x;y;z)$ : 
      \begin{align*}
      \overrightarrow{\nabla . f}  = &\left(\frac{\partial f}{\partial x} ;\frac{\partial f}{\partial y};\frac{\partial f}{\partial z}\right)
      &\,\, \,\, \forall (x;y;z) \in \mathbb{R}^{3} \text{ \, où la fonction f est différentiable ;}
      \end{align*}
      <h3>Rotationnel</h3>
      }
      Avec le champ de vecteurs suivant : 
      \begin{align*}
      \nabla \times \vec{A} = & \begin{array}{|rcl|}
      \vec{i} & \vec{j} & \vec{k} \\
      \frac{\partial }{\partial x} & \frac{\partial }{\partial y} & \frac{\partial }{\partial z} \\
      V_{1} & V_{2} & V_{3}
      \end{array} =  &(\frac{\partial V_{3} }{\partial y} -\frac{\partial V_{2} }{\partial z}). \vec{i} + (\frac{\partial V_{1} }{\partial z} - \frac{\partial V_{3} }{\partial x} ). \vec{j} + (\frac{\partial V_{2} }{\partial x} -\frac{\partial V_{1} }{\partial y}).\vec{k}
      \end{align*}
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/taf.png?raw=true" width=50%>
      
      <h2>Annexes</h2>
      }
      Script python pour tracer les lignes de niveaux d'un fonction à deux variables : 
      \begin{verbatim}
      import numpy as np
      import matplotlib as mpl
      import matplotlib.pyplot as plt
      from matplotlib import rc
      def f(x,y):
      return x*y-y #fonction pour tracer les lignes de niveau
      x , y = np.meshgrid(np.linspace(-5,5,201),np.linspace(-5,5,201))
      z = f(x,y)
      graphe = plt.contour(x,y,z,20)
      plt.show()
      \end{verbatim}
      Script python pour tracer un champ de vecteurs : 
      \begin{verbatim}
      import numpy as np
      import matplotlib.pyplot as plt
      plt.rc('figure', figsize=(12,9))
      a, b = 10, 10
      x, y = np.linspace(-10, a, 500), np.linspace(-10, b, 500)
      X, Y = np.meshgrid(x, y)
      U = -Y/(X*X+Y*Y)**0.5 #A modifier selon le besoin
      V = X/(X*X+Y*Y)**0.5 #A modifier selon le besoin
      plt.streamplot(X, Y, U, V)
      plt.show()
      \end{verbatim}
   
   
   
   


      <br>
      <hr>
   <a href="https://www.designerfonctionnel.com/notes-formation-mathematiques/">Index &uarr;</a><br>
   <script src="j/jquery.js"></script>
   <script src="j/modernizr.js"></script>
   <script src="j/dih5.js"></script>
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