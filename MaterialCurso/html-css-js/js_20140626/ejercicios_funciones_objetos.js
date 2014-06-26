/*
  Problema: Dado un arreglo A, encontrar un numero n de tal forma que A[n] = n
*/

/*
  Problema: Dada cualquier cadena por ejemplo "esta cadena es chica" hacer una función que inverta el orden de las palabras, es decir que regrese "chica es esta cadena"
*/

/*
  Problema: Crear una Lista Simplemente Ligada que inserte sus elementos (numeros) de manera ordenada
*/

/*
  Problema: Dado un arbol, crear una funcion que diga si ese arbol es de busqueda
*/


/*
  Estructura de Datos Lista Simplemente Ligada
*/
function NodoLista(valor){
    this.valor = valor;
    this.siguiente = null;
}

function ListaOrdenada(){
    this.cabeza = null;
}

/*
  Estructura de Datos Arbol Binario de Busqueda
*/
function NodoArbol(valor){
    this.valor = valor;
    this.derecho = null;
    this.izquierdo = null;
}

function ArbolBinarioBusqueda(){
    this.raiz = null;
    
    var agregar_auxiliar = function(nodo, valor){
	if(nodo == null)
	    return new NodoArbol(valor);
	if(valor <= nodo.valor)
	    nodo.izquierdo = agregar_auxiliar(nodo.izquierdo, valor);
	else
	    nodo.derecho = agregar_auxiliar(nodo.derecho, valor);
	return nodo;
    }

    this.agregar = function(valor){
	this.raiz = agregar_auxiliar(this.raiz, valor);
    }

}
