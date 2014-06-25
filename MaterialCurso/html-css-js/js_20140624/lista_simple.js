function Nodo(valor_){
    this.valor = valor_;
    this.siguiente = null;
}

function Lista(){
    this.nodo = null;
    this.agregar = function(valor){
	if(this.nodo == null)
	    this.nodo = new Nodo(valor);
	else{
	    var nuevo = new Nodo(valor);
	    nuevo.siguiente = this.nodo;
	    this.nodo = nuevo;
	}
    }
}

function Empleado(){ }

var e1 = new Empleado();

var e2 = new Empleado();

Empleado.prototype.empresa = "Grupo Jaque";

console.log(e2);
