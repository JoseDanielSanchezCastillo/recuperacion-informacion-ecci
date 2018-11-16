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
    </div>