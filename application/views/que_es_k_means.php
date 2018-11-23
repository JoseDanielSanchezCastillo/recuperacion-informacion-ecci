    <div id="texto-principal" >
    	<h2 class="display-3" >¿Qué es K-means?</h2>
    	<br>
    	<p >
            K-means es un algoritmo de clustering plano, politético y disjunto, que usa el refinamiento iterativo para producir un k número de grupos de datos.
    	</p>
    	<p>
            Parámetros del algoritmo: 
    	</p>
        <ul> 
            <li>Número de grupos  por crear.</li> 
            <li>El conjunto de datos.</li> 
            <li>Centroides iniciales (o se pueden seleccionar aleatoriamente entre el conjunto de datos).</li> 
        </ul>
        <br>
         <h3 class="display-5" >Pasos del algoritmo</h3>
        <br>
        <p >
            <strong>Paso 1: </strong> Asignación de datos 
        </p>
        <p >
            Cada centroide define uno de los grupos. En este paso, cada punto de datos se asigna a su centroide más cercano, en función de la distancia euclidiana al cuadrado.
        </p>
        <p >
            <strong>Paso 2</strong>: Actualización de los centroides
        </p>
        <p >
            Se recalculan los centroides (esto se hace tomando la distancia media de cada punto para con todos los demás).
        </p>
    </div>