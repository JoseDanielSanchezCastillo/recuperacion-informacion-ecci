    <div id="texto-principal" >
    	<h2 class="display-3" >¿Qué es HAC?</h2>
    	<br>
            <p>Hierarchical Agglomerative Clustering (HAC) corresponde a un algoritmo de clustering que realiza un agrupamiento jerárquico de abajo hacia arriba o viceversa. Usa una función de similaridad para determinar la similaridad de dos instancias. El agrupamiento de HAC se visualiza típicamente como un dendrograma. Usualmente, HAC suele usar cuando no se conoce el número de clusters y el número de elementos no es muy grande.  </p>

            <p>Existen varios tipos de HAC: </p>

            <ul>
                <li>
                    <p>Enlace Simple: se mide la proximidad entre dos grupos por medio de la distancia entre los elementos más próximos o similaridad entre elementos semejantes. Usualmente genera clusters más encadenados.</p>
                </li>
                <li>
                    <p>Enlace Completo: se mide la proximidad la proximidad entre dos grupos calculando la distancia entre sus elementos más lejanos o la similitud entre sus elementos menos semejantes. Usualmente genera clusters más compactos. </p>
                </li>
                <li>
                    <p>Enlace medio o promedio de grupos: se mide la proximidad entre dos grupos con la distancia media existente entre los miembros del grupo. </p>
                </li>
                <li>
                    <p>Ward’s Method: Maximiza la homogeneidad dentro de los grupos. Plantea todas las posibles fusiones en cada etapa concreta y se elige la que maximiza la homogeneidad. </p>
                </li>
            </ul>
            <br>
            <h4>Como funciona HAC</h4>
            <br>
            <ul>
                <li>N corresponde a la cantidad de elementos que van ser agrupados.</li>
                <li>D = [d (i, j)] corresponde a la matriz de distancia N*N.</li>
                <li>Las agrupaciones son asignadas con la secuencia de numeros 0,1, ......, (n-1)</li>
                <li>L (k) denota el nivel k-ésimo de agrupación. </li>
                <li>Un grupo con el número de secuencia m se denota como (m)</li>
                <li>La proximidad entre los grupos (r) y (s) se denota como d [(r), (s)].</li>
            </ul>
            <br>
            <div class="tab">
              <button class="tablinks active" onclick="openCity(event, 'Paso1')" id="defaultOpen">Paso 1</button>
              <button class="tablinks" onclick="openCity(event, 'Paso2')">Paso 2</button>
              <button class="tablinks" onclick="openCity(event, 'Paso3')">Paso 3</button>
              <button class="tablinks" onclick="openCity(event, 'Paso4')">Paso 4</button>
              <button class="tablinks" onclick="openCity(event, 'Paso5')">Paso 5</button>
            </div>

            <div id="Paso1" class="tabcontent" style="display: block;">
              <p>Comience con la agrupación disjunta teniendo como nivel L (0) = 0 y número de secuencia m = 0.</p>
            </div>
            <div id="Paso2" class="tabcontent">
              <p>Encuentre el par de clusters más cercanos en la agrupación actual, es decir el par (r), (s) tal que: <br>

                <center>d [(r), (s)] = min d[(i), (j)] </center><br>

                donde el mínimo es sobre todos los pares de agrupaciones en la agrupación actual.</p> 
            </div>
            <div id="Paso3" class="tabcontent">
               <p>Incrementa el número de secuencia: m = m +1. Combine los grupos (r) y (s) en un solo grupo para formar el siguiente grupo m. Establezca el nivel de este agrupamiento en <br>
               <center>L (m) = d [(r), (s)]</center>
                </p>
            </div>
            <div id="Paso4" class="tabcontent">
              <p>Actualice la matriz de proximidad D, eliminando las filas y columnas correspondientes a los grupos (r) y (s) y agregando una fila y columna correspondiente al grupo recién formado. La proximidad entre el nuevo cluster, denotado (r, s) y el cluster viejo (k) se define de esta manera: <br>

                <center>d [(k), (r, s)] = min d[(k), (r)], d [(k), (s)]</center></p>
            </div>
            <div id="Paso5" class="tabcontent">
              <p>Si todos los objetos están en un grupo, deténgase. Si no, ve al paso 2.</p>
            </div>         
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // A $( document ).ready() block.
        $( document ).ready(function() {
            document.getElementById("defaultOpen").click();
        });

    </script>
     