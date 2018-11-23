    <div id="texto-principal" >
    	<h2 class="display-3" >Ejemplo de HAC</h2>
    	<br>
    	<p><strong>Iteración 1 </strong>: Distancias entre cuidades</p>
        <img class="center" src="<?php echo base_url('images/1.png'); ?>" width=70%" style="padding-left: 10px" align="center"/>
        <br><br>
        <p><strong>Iteración 2</strong>: Se unen las ciudades MI y TO ya que es son las que tiene la distancia más cercana.</p>
        <img class="center" src="<?php echo base_url('images/2.png'); ?>" width=70%" style="padding-left: 10px" align="center"/>
        <br><br>
        <p><strong>Iteración 3 </strong>: Se unen las ciudades NA y RM. Hasta el momento existen 4 clusters.</p>
        <img  class="center"src="<?php echo base_url('images/3.png'); ?>" width=70%" style="padding-left: 10px" align="center"/>
        <br><br>
        <p><strong>Iteración 4 </strong>: Se unen las ciudades BA, NA y RM en un solo cluster.</p>
        <img  class="center"src="<?php echo base_url('images/4.png'); ?>" width=70%" style="padding-left: 10px" align="center"/>
        <br><br>
        <p><strong>Iteración 5 </strong>: Se unen las ciudades BA, FI, NA y RM en un solo cluster. Al finalizar esta iteración solo quedan 2 clusters.</p>
        <img  class="center"src="<?php echo base_url('images/5.png'); ?>" width=70%" style="padding-left: 10px" align="center"/>
        <br><br>
        <p><strong>Iteración 6 </strong>: Iteración final ya que queda un único cluster. El resultado se muestra como un dendrograma</p>
        <img  class="center" src="<?php echo base_url('images/6.png'); ?>" width=50%" style="padding-left: 10px" align="center"/>
    </div>

    <style type="text/css">
        
        .center {
            display: block;
margin: 0 auto;
            width: 50%;
            text-align: center;
        }
    </style>