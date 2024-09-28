<?php  include 'entete.php';?>
  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
  <p>
    <h2>Exo Fourier</h2>
    <h1>Exercices corrigés sur les séries de Fourier</h1>

    <h2>Énoncés</h2>

    <h3>Exercice 1</h3>
    <p>Calculer la série de Fourier trigonométrique de la fonction \(2\pi\)-périodique \(f : \mathbb{R} \to \mathbb{R}\) telle que \(f(x) = \pi - |x|\) sur \((- \pi, \pi]\). La série converge-t-elle vers \(f\) ?</p>

    <h3>Exercice 2</h3>
    <p>Calculer la série de Fourier, sous forme trigonométrique, de la fonction \(2\pi\)-périodique \(f : \mathbb{R} \to \mathbb{R}\) telle que \(f(x) = x^2\) sur \([0, 2\pi[\). La série converge-t-elle vers \(f\) ?</p>

    <h3>Exercice 3</h3>
    <p>Soit \(f : \mathbb{R} \to \mathbb{R}\) la fonction \(2\pi\)-périodique, impaire, telle que :</p>
    <pre>
f(x) =
    1 si x ∈ (0, π),
    0 si x = π.
    </pre>

    <ol>
        <li>Calculer les coefficients de Fourier trigonométriques de \(f\).</li>
        <li>Étudier la convergence (simple, uniforme) de la série de Fourier de \(f\).</li>
        <li>En déduire les valeurs des sommes suivantes :
            <ul>
                <li>\(\sum_{k=0}^{\infty} \frac{(-1)^k}{2k + 1}\)</li>
                <li>\(\sum_{k=0}^{\infty} \frac{1}{(2k + 1)^2}\)</li>
                <li>\(\sum_{n=1}^{\infty} \frac{1}{n^2}\)</li>
                <li>\(\sum_{n=1}^{\infty} \frac{(-1)^{n-1}}{n^2}\)</li>
            </ul>
        </li>
    </ol>

    <h3>Exercice 4</h3>
    <p>Soit \(f : \mathbb{R} \to \mathbb{R}\) la fonction \(2\pi\)-périodique telle que \(f(x) = e^x\) pour tout \(x \in (-\pi, \pi)\).</p>
    <ol>
        <li>Calculer les coefficients de Fourier exponentiels de la fonction \(f\).</li>
        <li>Étudier la convergence (simple, uniforme) de la série de Fourier de \(f\).</li>
        <li>En déduire les valeurs des sommes suivantes :
            <ul>
                <li>\(\sum_{n=1}^{\infty} \frac{(-1)^n}{n^2 + 1}\)</li>
                <li>\(\sum_{n=1}^{\infty} \frac{1}{n^2 + 1}\)</li>
            </ul>
        </li>
    </ol>

    <h3>Exercice 5</h3>
    <p>Soit \(f : \mathbb{R} \to \mathbb{R}\) la fonction \(2\pi\)-périodique définie par \(f(x) = (x - \pi)^2\), \(x \in [0, 2\pi[\).</p>
    <ol>
        <li>Calculer les coefficients de Fourier trigonométriques de \(f\).</li>
        <li>Étudier la convergence de la série de Fourier de \(f\).</li>
        <li>En déduire les sommes des séries suivantes :
            <ul>
                <li>\(\sum_{n=1}^{\infty} \frac{(-1)^n}{n^2}\)</li>
                <li>\(\sum_{n=1}^{\infty} \frac{1}{n^2}\)</li>
            </ul>
        </li>
    </ol>
	
<h2>Exercice 6</h2>

<p>Soit $f : \mathbb{R} \to \mathbb{R}$ une fonction $2\pi$-périodique continûment différentiable, et soit $\alpha$ un réel non nul. On considère l'équation différentielle :</p>

<p>
\[
x'(t) + \alpha x(t) = f(t).
\]
</p>

<p>Trouver une solution $2\pi$-périodique de cette équation en écrivant $x(t)$ et $f(t)$ sous la forme de séries de Fourier trigonométriques. Appliquer ce résultat au cas où $\alpha = 1$ et :</p>

<p>
\[
f(t) = 
\begin{cases}
\left( t - \frac{\pi}{2} \right)^2 & \text{si } t \in [0, \pi[, \\
-\left( t - \frac{3\pi}{2} \right)^2 + \frac{\pi^2}{2} & \text{si } t \in [\pi, 2\pi[.
\end{cases}
\]
</p>
	
<h2>Exercice 7 (Théorème de Féjer)</h2>

<p>On note $C(\mathbb{R}/2\pi\mathbb{Z})$ l'ensemble des fonctions continues de $\mathbb{R}$ dans $\mathbb{C}$ et $2\pi$-périodiques. On définit le produit de convolution de deux fonctions $f_1, f_2 \in C(\mathbb{R}/2\pi\mathbb{Z})$ par :</p>

<p>
\[
(f_1 * f_2)(x) = \frac{1}{2\pi} \int_{-\pi}^{\pi} f_1(x - y) f_2(y) \, dy.
\]
</p>

<p>Pour tout $k \in \mathbb{N}^*$, soit $\phi_k : \mathbb{R} \to \mathbb{C}$ la fonction définie par :</p>

<p>
\[
\phi_k(x) = \frac{1}{k} \sum_{l=0}^{k-1} \sum_{m=-l}^{l} e^{imx}.
\]
</p>

<p>(1) Montrer que :</p>

<p>
\[
\phi_k(x) = \frac{1 - \cos(kx)}{k(1 - \cos(x))} \quad \text{si } x \notin 2\pi\mathbb{Z}, \quad \text{et} \quad \phi_k(x) = k \quad \text{si } x \in 2\pi\mathbb{Z}.
\]
</p>

<p>(2) Montrer que $\phi_k$ satisfait les propriétés suivantes :</p>

<ul>
    <li>Pour tout $k$, $\frac{1}{2\pi} \int_{-\pi}^{\pi} \phi_k(x) \, dx = 1$.</li>
    <li>Pour tout $\epsilon \in ]0, \pi[$, $\frac{1}{2\pi} \int_{|x| \in [\epsilon, \pi]} \phi_k(x) \, dx \to 0$ lorsque $k \to \infty$.</li>
</ul>

<p>En déduire que, si $f \in C(\mathbb{R}/2\pi\mathbb{Z})$, alors $f * \phi_k$ converge vers $f$ uniformément sur $\mathbb{R}$.</p>

<p>(3) Calculer $f * \phi_k$. Conclure.</p>

	
<h3>Solution de l'exercice 1</h3>
<p>Il est facile de voir que la fonction \( f \) est paire, de sorte que les coefficients \( b_n \) sont tous nuls, et que :</p>
<p>\[
a_n(f) = \frac{2}{\pi} \int_0^\pi f(t) \cos(nt) \, dt = 2 \int_0^\pi \cos(nt) \, dt - \frac{2}{\pi} \int_0^\pi t \cos(nt) \, dt = 
\begin{cases} 
\frac{2}{\pi n^2} \left( 1 - (-1)^n \right) & \text{si } n \neq 0, \\
\pi & \text{si } n = 0.
\end{cases}
\]</p>
<p>On a donc :</p>
<p>\[
S_F(f)(t) = \frac{\pi}{2} + \sum_{k \geq 1} \frac{4}{\pi (2k+1)^2} \cos \left( (2k+1)t \right).
\]</p>
<p>Puisque la fonction \( f \) est continue sur \( \mathbb{R} \), le théorème de Dirichlet montre que la série converge vers \( f \) en tout point de \( \mathbb{R} \).</p>

<h3>Solution de l'exercice 2</h3>
<p>La fonction \( f \) n'est ni paire ni impaire. Calculons ses coefficients de Fourier trigonométriques. D'une part :</p>
<p>\[
a_0(f) = \frac{1}{\pi} \int_0^{2\pi} f(t) \, dt = \frac{1}{\pi} \int_0^{2\pi} t^2 \, dt = \frac{8\pi^2}{3},
\]</p>
<p>et d'autre part, pour \( n \geq 1 \) :</p>
<p>\[
a_n(f) = \frac{1}{\pi} \int_0^{2\pi} t^2 \cos(nt) \, dt = \frac{4}{n^2},
\]</p>
<p>et :</p>
<p>\[
b_n(f) = \frac{1}{\pi} \int_0^{2\pi} t^2 \sin(nt) \, dt = -\frac{4\pi}{n}.
\]</p>
<p>On a donc :</p>
<p>\[
S_F(f)(t) = \frac{4\pi^2}{3} + 4 \sum_{n \geq 1} \left( \frac{\cos(nt)}{n^2} - \frac{\pi \sin(nt)}{n} \right).
\]</p>
<p>La fonction \( f \) satisfait les hypothèses du théorème de Dirichlet, et la série \( S_F(f) \) converge en tout \( t \) vers :</p>
<p>\[
f(t^+) + f(t^-) = \begin{cases} f(t) & \text{si } t \notin 2\pi \mathbb{Z}, \\ 2\pi^2 & \text{si } t \in 2\pi \mathbb{Z}. \end{cases}
\]</p>
<h2>Solution de l'exercice 3</h2>

<p>(1) La fonction $f$ étant impaire, $a_n = 0$ pour tout $n \in \mathbb{N}$. Pour $n \geq 1$ :</p>

<p>
\[
b_n(f) = \frac{2}{\pi} \int_0^\pi \sin(nt) \, dt = \frac{4}{n\pi} \quad \text{si } n \text{ est impair}.
\]
</p>

<p>La série de Fourier trigonométrique de $f$ est donc donnée par :</p>

<p>
\[
S_F(f)(t) = \sum_{k=0}^\infty \frac{4}{(2k+1)\pi} \sin \left( (2k+1)t \right).
\]
</p>

<p>(2) La fonction $f$ satisfait les hypothèses du théorème de Dirichlet, et la série $S_F(f)$ converge en tout $t$ vers :</p>

<p>
\[
f(t^+) + f(t^-) = f(t).
\]
</p>

<p>La convergence ne peut être uniforme car la limite $f$ n'est pas continue.</p>

<p>(3) Pour $t = \frac{\pi}{2}$, on a :</p>

<p>
\[
\sin \left( (2k+1)t \right) = \sin \left( \frac{\pi}{2} + k\pi \right) = (-1)^k,
\]
</p>

<p>donc :</p>

<p>
\[
\sum_{k=0}^\infty \frac{(-1)^k}{2k+1} = \frac{\pi}{4} f \left( \frac{\pi}{2} \right) = \frac{\pi}{4}.
\]
</p>

<p>Puisque $f$ est impaire, l'égalité de Parseval donne :</p>

<p>
\[
\frac{1}{2\pi} \int_{-\pi}^{\pi} |f(t)|^2 \, dt = \frac{1}{2} \sum_{n=1}^\infty |b_n(f)|^2 = \frac{8}{\pi^2} \sum_{k=0}^\infty \frac{1}{(2k+1)^2},
\]
</p>

<p>donc :</p>

<p>
\[
\sum_{k=0}^\infty \frac{1}{(2k+1)^2} = \frac{\pi^2}{8}.
\]
</p>

<p>Ensuite, on a :</p>

<p>
\[
\sum_{n=1}^\infty \frac{1}{n^2} = \sum_{k=0}^\infty \frac{1}{(2k+1)^2} + \sum_{k=1}^\infty \frac{1}{(2k)^2} = \frac{\pi^2}{8} + \frac{1}{4} \sum_{n=1}^\infty \frac{1}{n^2},
\]
</p>

<p>d'où :</p>

<p>
\[
\sum_{n=1}^\infty \frac{1}{n^2} = \frac{4}{3} \cdot \frac{\pi^2}{8} = \frac{\pi^2}{6}.
\]
</p>

<p>Enfin :</p>


<p>
\[
\sum_{n=1}^\infty \frac{(-1)^{n-1}}{n^2} + \sum_{k=1}^\infty \frac{1}{(2k)^2} = \sum_{k=1}^\infty \frac{1}{(2k+1)^2} = \frac{\pi^2}{8},
\]
</p>

<p>donc :</p>

<p>
\[
\sum_{n=1}^\infty \frac{(-1)^{n-1}}{n^2} = \frac{\pi^2}{8} - \frac{1}{4} \cdot \frac{\pi^2}{6} = \frac{\pi^2}{12}.
\]
</p>

<h2>Solution de l'exercice 4</h2>

<p>(1) On a :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \int_{-\pi}^{\pi} e^t e^{-int} dt = \frac{1}{2\pi} \int_{-\pi}^{\pi} e^{(1-in)t} dt.
\]
</p>

<p>Calcul de l'intégrale :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \left[ \frac{e^{(1-in)t}}{1-in} \right]_{-\pi}^{\pi} = \frac{1}{2\pi} \cdot \frac{e^{(1-in)\pi} - e^{-(1-in)\pi}}{1-in}.
\]
</p>

<p>En utilisant les identités d'Euler, on a :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \cdot \frac{( -1 )^n \left( e^\pi - e^{-\pi} \right)}{1-in} = \frac{\sinh(\pi)}{\pi} \cdot \frac{(-1)^n}{1-in}.
\]
</p>

<p>(2) On vérifie facilement que les hypothèses du théorème de Dirichlet sont satisfaites. Il s'ensuit que :</p>

<p>
\[
S_F(f)(t) = c_0(f) + \sum_{n \geq 1} \left( c_n(f) e^{int} + c_{-n}(f) e^{-int} \right),
\]
</p>

<p>converge vers $f(t)$ si $t \in ]-\pi, \pi[$ et vers :</p>

<p>
\[
\frac{f(\pi^+) + f(\pi^-)}{2} = \cosh(\pi) \quad \text{si } t = \pi.
\]
</p>

<p>Autrement dit :</p>

<p>
\[
\frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{(-1)^n}{1-in} e^{int} = 
\begin{cases} 
e^t & \text{si } t \in ]-\pi, \pi[, \\
\cosh(\pi) & \text{si } t = \pi.
\end{cases}
\]
</p>

<p>La fonction somme n'étant pas continue, la convergence ne peut pas être uniforme.</p>

<h2>(3) Pour $t = 0$, on obtient :</h2>

<p>
\[
1 = \frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{(-1)^n}{1-in},
\]
</p>

<p>d'où :</p>

<p>
\[
\frac{\pi}{\sinh(\pi)} = 1 + \sum_{n=1}^{\infty} (-1)^n \left( \frac{1}{1-in} + \frac{1}{1+in} \right) = -1 + 2 \sum_{n=0}^{\infty} \frac{(-1)^n}{1+n^2}.
\]
</p>

<p>Donc :</p>

<p>
\[
\sum_{n=0}^{\infty} \frac{(-1)^n}{1+n^2} = \frac{1}{2} \left( \frac{\pi}{\sinh(\pi)} + 1 \right).
\]
</p>

<p>Pour $t = \pi$, on obtient :</p>

<p>
\[
\cosh(\pi) = \frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{1}{1-in}.
\]
</p>

<p>D'où :</p>

<p>
\[
\frac{\pi}{\tanh(\pi)} = \sum_{n \in \mathbb{Z}} \frac{1}{1+n^2} = -1 + 2 \sum_{n=0}^{\infty} \frac{1}{1+n^2},
\]
</p>

<p>donc :</p>

<p>
\[
\sum_{n=0}^{\infty} \frac{1}{1+n^2} = \frac{1}{2} \left( \frac{\pi}{\tanh(\pi)} + 1 \right).
\]
</p>

<h2>Solution de l'exercice 4</h2>

<p>(1) On a :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \int_{-\pi}^{\pi} e^t e^{-int} dt = \frac{1}{2\pi} \int_{-\pi}^{\pi} e^{(1-in)t} dt.
\]
</p>

<p>Calcul de l'intégrale :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \left[ \frac{e^{(1-in)t}}{1-in} \right]_{-\pi}^{\pi} = \frac{1}{2\pi} \cdot \frac{e^{(1-in)\pi} - e^{-(1-in)\pi}}{1-in}.
\]
</p>

<p>En utilisant les identités d'Euler, on a :</p>

<p>
\[
c_n(f) = \frac{1}{2\pi} \cdot \frac{( -1 )^n \left( e^\pi - e^{-\pi} \right)}{1-in} = \frac{\sinh(\pi)}{\pi} \cdot \frac{(-1)^n}{1-in}.
\]
</p>

<p>(2) On vérifie facilement que les hypothèses du théorème de Dirichlet sont satisfaites. Il s'ensuit que :</p>

<p>
\[
S_F(f)(t) = c_0(f) + \sum_{n \geq 1} \left( c_n(f) e^{int} + c_{-n}(f) e^{-int} \right),
\]
</p>

<p>converge vers $f(t)$ si $t \in ]-\pi, \pi[$ et vers :</p>

<p>
\[
\frac{f(\pi^+) + f(\pi^-)}{2} = \cosh(\pi) \quad \text{si } t = \pi.
\]
</p>

<p>Autrement dit :</p>

<p>
\[
\frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{(-1)^n}{1-in} e^{int} = 
\begin{cases} 
e^t & \text{si } t \in ]-\pi, \pi[, \\
\cosh(\pi) & \text{si } t = \pi.
\end{cases}
\]
</p>

<p>La fonction somme n'étant pas continue, la convergence ne peut pas être uniforme.</p>

<h2>(3) Pour $t = 0$, on obtient :</h2>

<p>
\[
1 = \frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{(-1)^n}{1-in},
\]
</p>

<p>d'où :</p>

<p>
\[
\frac{\pi}{\sinh(\pi)} = 1 + \sum_{n=1}^{\infty} (-1)^n \left( \frac{1}{1-in} + \frac{1}{1+in} \right) = -1 + 2 \sum_{n=0}^{\infty} \frac{(-1)^n}{1+n^2}.
\]
</p>

<p>Donc :</p>

<p>
\[
\sum_{n=0}^{\infty} \frac{(-1)^n}{1+n^2} = \frac{1}{2} \left( \frac{\pi}{\sinh(\pi)} + 1 \right).
\]
</p>

<p>Pour $t = \pi$, on obtient :</p>

<p>
\[
\cosh(\pi) = \frac{\sinh(\pi)}{\pi} \sum_{n \in \mathbb{Z}} \frac{1}{1-in}.
\]
</p>

<p>D'où :</p>

<p>
\[
\frac{\pi}{\tanh(\pi)} = \sum_{n \in \mathbb{Z}} \frac{1}{1+n^2} = -1 + 2 \sum_{n=0}^{\infty} \frac{1}{1+n^2},
\]
</p>

<p>donc :</p>

<p>
\[
\sum_{n=0}^{\infty} \frac{1}{1+n^2} = \frac{1}{2} \left( \frac{\pi}{\tanh(\pi)} + 1 \right).
\]
</p>

<h2>Solution de l'exercice 6</h2>

<p>On écrit :</p>

<p>
\[
f(t) = \frac{a_0}{2} + \sum_{n=1}^{\infty} \left( a_n \cos(nt) + b_n \sin(nt) \right),
\]
</p>

<p>et :</p>

<p>
\[
x(t) = \frac{A_0}{2} + \sum_{n=1}^{\infty} \left( A_n \cos(nt) + B_n \sin(nt) \right).
\]
</p>

<p>En dérivant terme à terme, on obtient :</p>

<p>
\[
x'(t) = \sum_{n=1}^{\infty} \left( n B_n \cos(nt) - n A_n \sin(nt) \right).
\]
</p>

<p>Substituons cette expression dans l'équation différentielle :</p>

<p>
\[
x'(t) + \alpha x(t) = \frac{\alpha A_0}{2} + \sum_{n=1}^{\infty} \left[ (n B_n + \alpha A_n) \cos(nt) + (\alpha B_n - n A_n) \sin(nt) \right].
\]
</p>

<p>En identifiant les coefficients de Fourier, on obtient :</p>

<ul>
    <li>$a_0 = \alpha A_0$,</li>
    <li>$a_n = n B_n + \alpha A_n$,</li>
    <li>$b_n = \alpha B_n - n A_n$.</li>
</ul>

<p>On résout alors le système :</p>

<ul>
    <li>$A_0 = \frac{a_0}{\alpha}$,</li>
    <li>$A_n = \frac{\alpha a_n - n b_n}{n^2 + \alpha^2}$,</li>
    <li>$B_n = \frac{n a_n + \alpha b_n}{n^2 + \alpha^2}$.</li>
</ul>

<p>Pour la fonction $f(t)$ donnée, calculons ses coefficients de Fourier :</p>

<p>
\[
a_0(f) = \frac{1}{\pi} \int_0^\pi \left( t - \frac{\pi}{2} \right)^2 \, dt + \frac{1}{\pi} \int_\pi^{2\pi} \left[ -\left( t - \frac{3\pi}{2} \right)^2 + \frac{\pi^2}{2} \right] \, dt = \frac{\pi^2}{2}.
\]
</p>

<p>On remarque que $f - \frac{a_0(f)}{2}$ est impaire, de sorte que $a_n(f) = 0$ pour $n \geq 1$. Finalement, on obtient :</p>

<p>
\[
b_n(f) = \frac{1}{\pi} \int_0^\pi \left( t - \frac{\pi}{2} \right)^2 \sin(nt) \, dt + \frac{1}{\pi} \int_\pi^{2\pi} \left[ -\left( t - \frac{3\pi}{2} \right)^2 + \frac{\pi^2}{2} \right] \sin(nt) \, dt.
\]
</p>

<p>La solution finale est :</p>

<ul>
    <li>$A_0 = \frac{\pi^2}{2}$,</li>
    <li>$A_{2k} = B_{2k} = 0$,</li>
    <li>$A_{2k-1} = \frac{8}{\pi(2k-1)^2 \left[ (2k-1)^2 + 1 \right]}$,</li>
    <li>$B_{2k-1} = -\frac{8}{\pi(2k-1)^3 \left[ (2k-1)^2 + 1 \right]}$.</li>
</ul>

<p>Finalement, la série de Fourier est uniformément convergente, et la fonction $x(t)$ est solution de l'équation différentielle donnée.</p>


<h2>Solution de l'exercice 7</h2>

<h3>(1)</h3>

<p>Pour tout $l \in \mathbb{N}$ et tout $x \notin 2\pi\mathbb{Z}$, on a :</p>

<p>
\[
\sum_{m=-l}^{l} e^{imx} = \sum_{m=0}^{l} e^{imx} + \sum_{m=0}^{l} e^{-imx} - 1 = \frac{\cos(lx) - \cos((l+1)x)}{1 - \cos(x)}.
\]
</p>

<p>De sorte que :</p>

<p>
\[
\sum_{l=0}^{k-1} \sum_{m=-l}^{l} e^{imx} = \frac{1 - \cos(kx)}{1 - \cos(x)}.
\]
</p>

<p>Pour $x \in 2\pi\mathbb{Z}$, la valeur de $\phi_k$ s'obtient par continuité ou par un calcul direct :</p>

<p>
\[
\phi_k(x) = k.
\]
</p>

<h3>(2)</h3>

<p>Calculons maintenant l'intégrale de $\phi_k$ :</p>

<p>
\[
\frac{1}{2\pi} \int_{-\pi}^{\pi} \phi_k(x) \, dx = \frac{1}{2\pi} \cdot \frac{1}{k} \sum_{l=0}^{k-1} \sum_{m=-l}^{l} \int_{-\pi}^{\pi} e^{imx} \, dx = 1.
\]
</p>

<p>Pour $\epsilon \in ]0, \pi[$, on pose $K_\epsilon = \frac{2}{1 - \cos(\epsilon)}$. Il est clair que pour tout $x \in [-\pi, -\epsilon] \cup [\epsilon, \pi]$ et tout $k \in \mathbb{N}^*$, on a :</p>

<p>
\[
|\phi_k(x)| \leq \frac{K_\epsilon}{k}.
\]
</p>

<p>Donc pour $k$ suffisamment grand, on a $|\phi_k(x)| \leq \epsilon$, et ainsi :</p>

<p>
\[
\frac{1}{2\pi} \left| \int_{|x| \in [\epsilon, \pi]} \phi_k(x) \, dx \right| \leq \epsilon.
\]
</p>

<h3>(3)</h3>

<p>Nous avons :</p>

<p>
\[
(f * \phi_k)(x) = \frac{1}{2\pi} \int_{-\pi}^{\pi} f(x - y) \phi_k(y) \, dy = \frac{1}{2\pi k} \sum_{l=0}^{k-1} \sum_{m=-l}^{l} \int_{x-\pi}^{x+\pi} f(y') e^{-imy'} \, dy'.
\]
</p>

<p>En notant $c_m(f)$ le coefficient de Fourier complexe de $f$ d'ordre $m$ et $S_l(f)(x)$ la somme partielle d'ordre $l$ de la série de Fourier de $f$, nous voyons que :</p>

<p>
\[
(f * \phi_k)(x) = \frac{1}{k} \sum_{l=0}^{k-1} S_l(f)(x).
\]
</p>

<p>Nous avons donc montré le théorème de Féjer : si $f \in C(R/2\pi\mathbb{Z})$, alors la série de Fourier de $f$ converge uniformément vers $f$ au sens de Cesàro.</p>


  <br>
  <hr>
  <a href="index.php">Index &rarr;</a><br>

<?php  include 'pieddepage.php';?>