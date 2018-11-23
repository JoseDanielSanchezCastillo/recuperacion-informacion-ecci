    <div id="texto-principal" >
    	<h2 class="display-3" >Codigo fuente de K-Means</h2>
    	<br>
    	<figure>
          <figcaption>Código fuente de K-Means</figcaption>
          <figcaption>Nota: Para correr crear carpeta de /texto y colocar documentos .txt para categorizar. </figcaption>
            <pre>
                <code>
                <!-- your code here -->
                <p> import os<br>
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
                    vectors = [t for t in get_vectors(*strs)]<br>
                    return cosine_similarity(vectors)<br>
                <br>
                <br>
                def get_vectors(*strs):<br>
                    text = [t for t in strs]<br>
                    vectorizer = CountVectorizer(text)<br>
                    vectorizer.fit(text)<br>
                    return vectorizer.transform(text).toarray()<br>
                <br>
                #MAIN<br>
                print("MAIN ")<br>
                k= 3<br>

                n = len(os.listdir('./textos'))<br>
                print(n)<br>
                nombres = list()<br>
                S = list()<br>
                for f in os.listdir('./textos'):<br>
                    nombres.append(f)<br>
                    file1 = codecs.open('./textos/'+ f, encoding='utf-8', errors='ignore')<br>
                    fS = file1.read()<br>
                    S.extend([fS])<br>
                M_S =  get_cosine_sim(*S)<br>
                #print(M_S)<br>

                R = set()#representantes<br><br>

                while True:<br>
                    R.add(random.randint(0, n-1))<br>
                    if len(R) == k:<br>
                        break;<br>
                print(R)<br>

                #punto flotante<br>
                while True:<br>
                    cluster = list()<br>
                    #asigno<br>
                    for fila in M_S:<br>
                        mi_r = 0<br>
                        sim = 0<br>
                        for r in R:<br>
                            if fila[r] > sim:<br>
                                sim = fila[r]<br>
                                mi_r = r<br>
                        cluster.append(mi_r)<br>
                    print("Representante de cada:")<br>
                    print(cluster)<br>
                    #calcullo cercania con todos los miem del cluster<br>
                    new_R = set()<br>
                    invCerca = np.zeros(len(cluster))<br>
                    for i in range(0, len(cluster)-1):<br>
                        for x in range(0, len(cluster)-1):<br>
                            if cluster[i]== cluster[x]:<br>
                                invCerca[i] += M_S[i][x]<br>
                    print("Cercania con todos los miembros del cluster:")<br>
                    print(invCerca)<br>
                    #el r de cada cluser es el mismo<br>
                    aux = dict()<br>
                    for r in R:<br>
                        aux[r]=r<br>

                    #cambio el del cluster si hay otro mejor<br>
                    for j in range(0, len(invCerca)-1):<br>
                        if invCerca[j] > invCerca[aux[cluster[j]]]:<br>
                            aux[cluster[j]] = j<br>
                    print("Nuevos r de cada cluster:")<br>
                    print(aux)<br>

                    #agrego nuevo r a new_r
                    for r in R:<br>
                        new_R.add(aux[r])<br>

                    if len(R.intersection(new_R)) == k:<br>
                        #PARE<br>
                        ct = dict()<br>
                        for r in R:<br>
                            ct[r] = list()<br>
                        for m in range(0, len(cluster)-1):<br>
                            ct[cluster[m]].append(nombres[m])<br>
                        print(ct)<br>
                        break<br>
                    else:<br>
                        R = new_R<br>
                        print(R)</p>
                </code>
            </pre>
        </figure >
    </div>