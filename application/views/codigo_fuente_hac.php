    <div id="texto-principal" >
    	<h2 class="display-3" >Codigo fuente HAC</h2>
    	<br>

          <figcaption>Código fuente</figcaption>
          <figcaption>Nota: Para correr crear carpeta de /texto y colocar documentos .txt para categorizar. </figcaption>

        <code>
            <pre>
                <p>
# -*- coding: utf-8 -*-<br><br>

from Levenshtein import * <br>
from warnings import warn <br>
import sys<br>

# Clase que maneja los nodos dentro de la matriz<br>
class NodoTermino:<br><br>

    &#09;# Valor del termino<br>
    &#09;termino = None <br>
    &#09;# Hijo izquierdo del árbol<br>
    &#09;nodoHijoIzquierdo = None<br>
    &#09;# Hijo derecho del arbol <br>
    &#09;nodoHijoDerecho = None<br>

    &#09;# Constructor de la clase<br>
    &#09;def __init__(self):<br>
    &#09;&#09;    self.termino = None<br>
    &#09;&#09;    self.nodoHijoIzquierdo = None<br>
    &#09;&#09;    self.nodoHijoDerecho = None<br><br>

    &#09;# Obtener el termino de la clase<br>
    &#09;def obtenerTermino(self):<br>
        &#09;&#09;return self.termino<br><br>

    &#09;def obtenerHijoIzquierdo(self):<br>
       &#09; &#09;return self.nodoHijoIzquierdo<br><br>

    &#09;def obtenerHijoDerecho(self):<br>
        &#09;&#09;return self.nodoHijoDerecho<br><br>

    &#09;def asignarTermino(self, termino):<br>
        &#09;&#09;self.termino = termino<br><br>

    &#09;def asignarNodoHijoIzquierdo(self, nodoHijoIzquierdo):<br>
       &#09;&#09; self.nodoHijoIzquierdo = nodoHijoIzquierdo<br>

    &#09;def asignarNodoHijoDerecho(self, nodoHijoDerecho):<br>
        &#09;&#09;self.nodoHijoDerecho = nodoHijoDerecho<br><br>

# Clase permite estructurar el arbol<br>
class arbol(object):<br>
   &#09;def __init__(self, valorNodo, hijoNodo = []):<br>
        &#09;&#09;self.valorNodo = valorNodo<br>
        &#09;&#09;self.hijoNodo = hijoNodo<br><br>

    &#09;def __str__(self, level=0):<br>
        &#09;&#09;ret = "\t"*level+repr(self.valorNodo)+"\n"<br>
        &#09;&#09;for hijo in self.hijoNodo:<br>
            &#09;&#09;&#09;ret += hijo.__str__(level+1)<br>
        &#09;&#09;return ret<br><br>

    &#09;def __repr__(self):<br>
        &#09;&#09;return 'Arbol'<br><br>


# Permite construir el arbol<br>
def construir_arbol(nodo):<br><br>

    &#09;if(nodo != None):<br>
        &#09;&#09;if(nodo.obtenerHijoIzquierdo() == None and nodo.obtenerHijoDerecho() == None):<br>
           &#09;&#09;&#09; return arbol(nodo.obtenerTermino())<br>
        &#09;&#09;else:<br>
            &#09;&#09;&#09;root = arbol(nodo.obtenerTermino())<br>
            &#09;&#09;&#09;root.hijoNodo = [] <br>
            &#09;&#09;&#09;root.hijoNodo.append(construir_arbol(nodo.obtenerHijoIzquierdo()))<br>
            &#09;&#09;&#09;root.hijoNodo.append(construir_arbol(nodo.obtenerHijoDerecho()))<br>
            &#09;&#09;&#09;return root<br>
    &#09;else:<br>
        &#09;&#09;return None<br><br>

# Imprimir matriz<br>
def imprimir_matriz(cantidadterminos, matrizDistancia):<br>
    
    &#09;# Imprimir matriz<br>
    &#09;for i in range(cantidadterminos):<br>

        &#09;&#09;hilera = ""<br>

        &#09;&#09;for j in range(cantidadterminos):<br>
            &#09;&#09;&#09;hilera = hilera + "  " +str(matrizDistancia[i][j][2])<br>

        &#09;&#09;print (hilera + "\n")<br><br>


def lectura_archivo(documento):<br>
    &#09;terminos = []<br>
    &#09;f = open("terminos.txt")<br>
    &#09;linea = f.readline()<br>
    &#09;while linea != "":<br>
      &#09;&#09;linea = f.readline()<br>
      &#09;&#09;if(len(linea) != 0):<br>
        &#09;&#09;&#09;terminos.append(linea.strip('\n'))<br>

    &#09;return terminos<br><br>


documento = sys.argv[1]<br>
terminos = lectura_archivo(documento)<br>
cantidadterminos = len(terminos) <br>
terminosNodo = []<br>
matrizDistancia = []<br><br>


# Se generan los nodos del arbol<br>
for i in range(len(terminos)):<br>
    &#09;nodo = NodoTermino()<br>
    &#09;nodo.asignarTermino(terminos[i])<br>
    &#09;terminosNodo.append(nodo)<br><br>

# Se calcula la distancia de Levenshtein entre los terminos<br>
for i in range(len(terminosNodo)):<br><br>
    
    &#09;matriz = []<br><br>

    &#09;for j in range(len(terminosNodo)):<br>
        &#09;&#09;matriz.append([terminosNodo[i],terminosNodo[j],<br>
            &#09;&#09;&#09;distance(terminosNodo[i].obtenerTermino(), terminosNodo[j].obtenerTermino())])<br><br>

   &#09; matrizDistancia.append(matriz)<br><br>


print ("\n ----------- Iteración -------------\n")<br>
imprimir_matriz(cantidadterminos, matrizDistancia)<br>
print ("\n")<br><br>

while cantidadterminos != 1:<br><br>

    &#09;filaMenor = 0<br>
    &#09;columnaMenor = 1<br>
    &#09;menorSimilaridad = -1<br><br>

    &#09;# Determina la posición de los dos términos más cercanos<br>
    &#09;for i in range(cantidadterminos):<br>
        &#09;&#09;for j in range(cantidadterminos):<br>
            &#09;&#09;&#09;if((menorSimilaridad == -1 or (matrizDistancia[i][j][2] < menorSimilaridad)) and (i != j)):<br>
                &#09;&#09;&#09;&#09;filaMenor = i<br>
                &#09;&#09;&#09;&#09;columnaMenor = j<br>
                &#09;&#09;&#09;&#09;menorSimilaridad = matrizDistancia[i][j][2]<br><br>

    &#09;# Crea un nuevo nodo con los valores de los dos términos más cercanos<br>
    &#09;nodo = NodoTermino()<br>
    &#09;nodo.asignarTermino("["+str(menorSimilaridad)+"]")<br>
    &#09;nodo.asignarNodoHijoIzquierdo(matrizDistancia[filaMenor][columnaMenor][0])<br>
    &#09;nodo.asignarNodoHijoDerecho(matrizDistancia[filaMenor][columnaMenor][1])<br><br>


    &#09;for i in range(cantidadterminos):<br>
        &#09;&#09;if((matrizDistancia[filaMenor][i][2] <= matrizDistancia[i][columnaMenor][2]) and (filaMenor != i)):<br><br>
                &#09;&#09;&#09;&#09;matrizDistancia[filaMenor][i][2] = matrizDistancia[i][columnaMenor][2]<br><br>

    &#09;for i in range(cantidadterminos):<br>
        &#09;&#09;matrizDistancia[filaMenor][i][0] = nodo<br>
        &#09;&#09;matrizDistancia[i][filaMenor][1] = nodo<br><br>

    &#09;# Elimina término de las columnas<br>
    &#09;for i in range(cantidadterminos):<br>
        &#09;&#09;matrizDistancia[i].pop(columnaMenor)<br><br>

    &#09;#Elimina el término por fila<br>
    &#09;matrizDistancia.pop(columnaMenor)<br><br>

    &#09;# Disminuye el total de terminos<br>
    &#09;cantidadterminos = cantidadterminos - 1<br><br>

    &#09;# Imprime la matriz resultante de la iteración<br>
    &#09;print ("----------- Iteración -------------\n")<br>
    &#09;imprimir_matriz(cantidadterminos, matrizDistancia)<br>
    &#09;print ("\n")<br><br>

# Se asigna la raiz del arbol<br>
nodo = NodoTermino()<br>
nodo.asignarTermino("raiz")<br>
nodo.asignarNodoHijoIzquierdo(matrizDistancia[0][0][0])<br><br>

# Construye el arbol para imprimir<br>
root = arbol('raiz')<br>
root = construir_arbol(matrizDistancia[0][0][1])<br>
print ("------------------- Árbol ---------------------\n")<br>
print (root)<br><br>
</p>
        </pre>
        </code>
    </div>