    <div id="texto-principal" >
    	<h2 class="display-3" >¿Qué es K-means?</h2>
    	<br>
    	<p >
            K-means es un algoritmo de clustering plano, politético y disjunto, que usa el refinamiento iterativo para producir un k número de grupos de datos.
    	</p>
    	<br>
    	<p>
            Parámetros del algoritmo: 
    	</p>
        <ul> 
            <li><p>Número de grupos  por crear.</p></li> 
            <li><p>El conjunto de datos.</p></li> 
            <li><p>Centroides iniciales (o se pueden seleccionar aleatoriamente entre el conjunto de datos).</p></li> 
        </ul>
        <br>
         <h2 class="display-3" >Algoritmo:</h2>
        <br>
        <p >
            <strong>Paso 1</strong> asignación de datos 
        </p>
        <p >
            Cada centroide define uno de los grupos. En este paso, cada punto de datos se asigna a su centroide más cercano, en función de la distancia euclidiana al cuadrado.
        </p>
        <br>
        <p >
            <strong>Paso 2</strong>: actualización de los centroides
        </p>
        <p >
            Se recalculan los centroides (esto se hace tomando la distancia media de cada punto para con todos los demás).
        </p>
    </div>