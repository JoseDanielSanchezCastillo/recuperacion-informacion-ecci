    <div id="texto-principal" >
    	<h2 class="display-3" >Codigo fuente HAC</h2>
    	<br>
        <pre>
        <code>
            # -*- coding: utf-8 -*-

            from Levenshtein import * <br>
            from warnings import warn <br>
            import sys<br><br>

            # Clase que maneja los nodos dentro de la matriz<br>
            class NodoTermino:<br><br>

                # Valor del termino<br>
                termino = None <br>
                # Hijo izquierdo del árbol<br>
                nodoHijoIzquierdo = None<br>
                # Hijo derecho del arbol <br>
                nodoHijoDerecho = None<br><br>

                # Constructor de la clase<br>
                def __init__(self):<br>
                    &nbsp&nbsp&nbsp self.termino = None<br>
                    &nbsp&nbsp&nbsp self.nodoHijoIzquierdo = None<br>
                    &nbsp&nbsp&nbsp self.nodoHijoDerecho = None<br><br>

                # Obtener el termino de la clase<br>
                def obtenerTermino(self):<br>
                    &nbsp&nbsp&nbsp return self.termino<br><br>


                def obtenerHijoIzquierdo(self):<br>
                    &nbsp&nbsp&nbsp return self.nodoHijoIzquierdo<br>

                def obtenerHijoDerecho(self):<br>
                    &nbsp&nbsp&nbsp return self.nodoHijoDerecho<br>

                def asignarTermino(self, termino):<br>
                    &nbsp&nbsp&nbsp self.termino = termino<br>

                def asignarNodoHijoIzquierdo(self, nodoHijoIzquierdo):<br>
                    &nbsp&nbsp&nbsp self.nodoHijoIzquierdo = nodoHijoIzquierdo<br>

                def asignarNodoHijoDerecho(self, nodoHijoDerecho):<br>
                    &nbsp&nbsp&nbsp self.nodoHijoDerecho = nodoHijoDerecho<br><br>

            # Clase permite estructurar el arbol<br>
            class arbol(object):<br>
                def __init__(self, valorNodo, hijoNodo = []):<br>
                    self.valorNodo = valorNodo<br>
                    self.hijoNodo = hijoNodo<br>

                def __str__(self, level=0):<br>
                    ret = "\t"*level+repr(self.valorNodo)+"\n"<br>
                    for hijo in self.hijoNodo:<br>
                        ret += hijo.__str__(level+1)<br>
                    return ret<br>

                def __repr__(self):<br>
                    return 'Arbol'<br>


            # Permite construir el arbol<br>
            def construir_arbol(nodo):<br>

                if(nodo != None):<br>
                    if(nodo.obtenerHijoIzquierdo() == None and nodo.obtenerHijoDerecho() == None):<br>
                        return arbol(nodo.obtenerTermino())<br>
                    else:<br>
                        root = arbol(nodo.obtenerTermino())<br>
                        root.hijoNodo = [] <br>
                        root.hijoNodo.append(construir_arbol(nodo.obtenerHijoIzquierdo()))<br>
                        root.hijoNodo.append(construir_arbol(nodo.obtenerHijoDerecho()))<br>
                        return root<br>
                else:<br>
                    return None<br><br>



            # Imprimir matriz<br>
            def imprimir_matriz(cantidadterminos, matrizDistancia):<br>
                
                # Imprimir matriz<br>
                for i in range(cantidadterminos):<br>

                    hilera = ""<br>

                    for j in range(cantidadterminos):<br>
                        hilera = hilera + "  " +str(matrizDistancia[i][j][2])<br><br>

                    print (hilera + "\n")<br><br>


            def lectura_archivo(documento):<br>
                terminos = []<br>
                f = open("terminos.txt")<br>
                linea = f.readline()<br>
                while linea != "":<br>
                  linea = f.readline()<br>
                  if(len(linea) != 0):<br>
                    terminos.append(linea.strip('\n'))<br>

                return terminos<br>


            documento = sys.argv[1]<br>
            terminos = lectura_archivo(documento)<br>
            cantidadterminos = len(terminos) <br>
            terminosNodo = []<br>
            matrizDistancia = []<br><br>


            # Se generan los nodos del arbol<br>
            for i in range(len(terminos)):<br>
                nodo = NodoTermino()<br>
                nodo.asignarTermino(terminos[i])<br>
                terminosNodo.append(nodo)<br>

            # Se calcula la distancia de Levenshtein entre los terminos<br>
            for i in range(len(terminosNodo)):<br><br>
                
                matriz = []<br><br>

                for j in range(len(terminosNodo)):<br>
                    matriz.append([terminosNodo[i],terminosNodo[j],<br>
                        distance(terminosNodo[i].obtenerTermino(), terminosNodo[j].obtenerTermino())])<br><br>

                matrizDistancia.append(matriz)<br><br>


            print ("\n ----------- Iteración -------------\n")<br>
            imprimir_matriz(cantidadterminos, matrizDistancia)<br>
            print ("\n")<br><br>

            while cantidadterminos != 1:<br><br>

                filaMenor = 0<br>
                columnaMenor = 1<br>
                menorSimilaridad = -1<br><br>

                # Determina la posición de los dos términos más cercanos<br>
                for i in range(cantidadterminos):<br>
                    for j in range(cantidadterminos):<br>
                        if((menorSimilaridad == -1 or (matrizDistancia[i][j][2] < menorSimilaridad)) and (i != j)):<br>
                            filaMenor = i<br>
                            columnaMenor = j<br>
                            menorSimilaridad = matrizDistancia[i][j][2]<br><br>

                # Crea un nuevo nodo con los valores de los dos términos más cercanos<br>
                nodo = NodoTermino()<br>
                nodo.asignarTermino("["+str(menorSimilaridad)+"]")<br>
                nodo.asignarNodoHijoIzquierdo(matrizDistancia[filaMenor][columnaMenor][0])<br>
                nodo.asignarNodoHijoDerecho(matrizDistancia[filaMenor][columnaMenor][1])<br><br>


                for i in range(cantidadterminos):<br>
                    if((matrizDistancia[filaMenor][i][2] <= matrizDistancia[i][columnaMenor][2]) and (filaMenor != i)):<br>
                            matrizDistancia[filaMenor][i][2] = matrizDistancia[i][columnaMenor][2]<br><br>

                for i in range(cantidadterminos):<br>
                    matrizDistancia[filaMenor][i][0] = nodo<br>
                    matrizDistancia[i][filaMenor][1] = nodo<br><br>

                # Elimina término de las columnas<br>
                for i in range(cantidadterminos):<br>
                    matrizDistancia[i].pop(columnaMenor)<br><br>

                #Elimina el término por fila<br>
                matrizDistancia.pop(columnaMenor)<br><br>

                # Disminuye el total de terminos<br>
                cantidadterminos = cantidadterminos - 1<br><br>

                # Imprime la matriz resultante de la iteración<br>
                print ("----------- Iteración -------------\n")<br>
                imprimir_matriz(cantidadterminos, matrizDistancia)<br>
                print ("\n")<br><br>



            # Se asigna la raiz del arbol<br>
            nodo = NodoTermino()<br>
            nodo.asignarTermino("raiz")<br>
            nodo.asignarNodoHijoIzquierdo(matrizDistancia[0][0][0])<br><br>

            # Construye el arbol para imprimir<br>
            root = arbol('raiz')<br>
            root = construir_arbol(matrizDistancia[0][0][1])<br>
            print ("------------------- Árbol ---------------------\n")<br>
            print (root)<br><br>
        </code>
        </pre>
    </div>