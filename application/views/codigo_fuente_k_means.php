    <div id="texto-principal" >
    	<h2 class="display-3" >Codigo fuente de K-Means</h2>
    	<br>
    	<figure>
          <figcaption>Código fuente</figcaption>
          <figcaption>Nota: Para correr crear carpeta de /texto y colocar documentos .txt para categorizar. </figcaption>
            <pre>
                <code>
<!-- your code here -->
<p>import os<br>
import numpy as np<br>
import codecs<br>
import random<br>
from collections import Counter<br>
from sklearn.feature_extraction.text import CountVectorizer<br>
from sklearn.metrics.pairwise import cosine_similarity<br>
#from graphics import *<br>
from math import ceil<br>
<br>
<br>
def get_cosine_sim(*strs):<br>
    &#09;vectors = [t for t in get_vectors(*strs)]<br>
    &#09;return cosine_similarity(vectors)<br>
<br>
<br>
def get_vectors(*strs):<br>
    &#09;text = [t for t in strs]<br>
    &#09;vectorizer = CountVectorizer(text)<br>
    &#09;vectorizer.fit(text)<br>
    &#09;return vectorizer.transform(text).toarray()<br>
<br>
#MAIN<br>
print("MAIN ")<br>
k= 3<br>

n = len(os.listdir('./textos'))<br>
print(n)<br>
nombres = list()<br>
S = list()<br>
for f in os.listdir('./textos'):<br>
    &#09;nombres.append(f)<br>
    &#09;file1 = codecs.open('./textos/'+ f, encoding='utf-8', errors='ignore')<br>
    &#09;fS = file1.read()<br>
    &#09;S.extend([fS])<br>
M_S =  get_cosine_sim(*S)<br>
#print(M_S)<br>

R = set()#representantes<br><br>

while True:<br>
    &#09;R.add(random.randint(0, n-1))<br>
    &#09;if len(R) == k:<br>
        &#09;&#09;break;<br>
print(R)<br>

#punto flotante<br>
while True:<br>
    &#09;cluster = list()<br>
    &#09;#asigno<br>
    &#09;for fila in M_S:<br>
        &#09;&#09;mi_r = 0<br>
        &#09;&#09;sim = 0<br>
        &#09;&#09;for r in R:<br>
            &#09;&#09;&#09;if fila[r] > sim:<br>
                &#09;&#09;&#09;&#09;sim = fila[r]<br>
                &#09;&#09;&#09;&#09;mi_r = r<br>
        &#09;&#09;cluster.append(mi_r)<br>
    &#09;print("Representante de cada:")<br>
    &#09;print(cluster)<br>
    &#09;#calcullo cercania con todos los miem del cluster<br>
    &#09;new_R = set()<br>
    &#09;invCerca = np.zeros(len(cluster))<br>
    &#09;for i in range(0, len(cluster)-1):<br>
        &#09;&#09;for x in range(0, len(cluster)-1):<br>
            &#09;&#09;&#09;if cluster[i]== cluster[x]:<br>
                &#09;&#09;&#09;&#09;invCerca[i] += M_S[i][x]<br>
    &#09;print("Cercania con todos los miembros del cluster:")<br>
    &#09;print(invCerca)<br>
    &#09;#el r de cada cluser es el mismo<br>
    &#09;aux = dict()<br>
    &#09;for r in R:<br>
        &#09;&#09;aux[r]=r<br>

   &#09; #cambio el del cluster si hay otro mejor<br>
    &#09;for j in range(0, len(invCerca)-1):<br>
        &#09;&#09;if invCerca[j] > invCerca[aux[cluster[j]]]:<br>
            &#09;&#09;&#09;aux[cluster[j]] = j<br>
    &#09;print("Nuevos r de cada cluster:")<br>
    &#09;print(aux)<br>

    &#09;#agrego nuevo r a new_r
    &#09;for r in R:<br>
        &#09;&#09;new_R.add(aux[r])<br>

    &#09;if len(R.intersection(new_R)) == k:<br>
        &#09;&#09;#PARE<br>
        &#09;&#09;ct = dict()<br>
        &#09;&#09;for r in R:<br>
            &#09;&#09;&#09;ct[r] = list()<br>
        &#09;&#09;for m in range(0, len(cluster)-1):<br>
            &#09;&#09;&#09;ct[cluster[m]].append(nombres[m])<br>
        &#09;&#09;print(ct)<br>
        &#09;&#09;break<br>
   &#09; else:<br>
        &#09;&#09;R = new_R<br>
        &#09;&#09;print(R)</p>
                </code>
            </pre>
        </figure >
    </div>