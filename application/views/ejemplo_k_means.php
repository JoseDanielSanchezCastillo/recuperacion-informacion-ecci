    <div id="texto-principal" >
        <h2 class="display-3" >K-Means descripción gráfica</h2>
        <img src="<?php echo base_url('images/g_k_means.png'); ?>" />
      <br><hr>
    	<h2 class="display-3" >Ejemplo de K-Means</h2>
        <br>
        Función de similitud:
        <h4>Hamming</h4>
        <br>
        Colección de palabras: 
        <h4>casa, zopilote , zapato, caseta, carretera, carril, casetilla</h4><br>
        <p> Aplico 1 iteración con casa, zopilote, carro y zapato como representantes.</p>
        <hr>
        <table>
          <tr>
            <th></th>
            <th>casa</th>
            <th>zopilote</th>
            <th>carro</th>
            <th>zapato</th>
          </tr>
          <tr>
            <td>casetilla </td>
            <td>3</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>carril </td>
            <td>2</td>
            <td>0</td>
            <td>4</td>
            <td>1</td>
          </tr>
          <tr>
            <td>caseta </td>
            <td>3</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>carretera </td>
            <td>2</td>
            <td>0</td>
            <td>4</td>
            <td>1</td>
          </tr>
        </table>
        <p></p>
        <p>1 Culster: casa, casetilla, casita. Representante:caseta<br>
        2 Culster: zopilote. Representante: zopilote<br>
        3 Culster: carro, carril, carretera. Representante: carro<br>
        4 Culster: zapato. Representante:zapato</p>
        <p> Como al menos un representante cambió. Aplico 2 iteración con nuevos representantes.</p>
        <hr>
    	  <table>
          <tr>
            <th></th>
            <th>caseta</th>
            <th>zopilote</th>
            <th>carro</th>
            <th>zapato</th>
          </tr>
          <tr>
            <td>casetilla </td>
            <td>3</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>carril </td>
            <td>2</td>
            <td>0</td>
            <td>4</td>
            <td>1</td>
          </tr>
          <tr>
            <td>casa </td>
            <td>3</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>carretera </td>
            <td>5</td>
            <td>0</td>
            <td>4</td>
            <td>1</td>
          </tr>
        </table>
        <p></p>
        <p>1 Culster: casa, casetilla, casita. Representante:caseta<br>
        2 Culster: zopilote. Representante: zopilote<br>
        3 Culster: carro, carril, carretera. Representante: carro<br>
        4 Culster: zapato. Representante:zapato</p>
        <p> Como al menos ningún representate cambió, finalizo el algoritmo.</p>
    </div>
