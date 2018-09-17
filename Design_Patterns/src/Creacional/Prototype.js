/*Esta clase debe permitir construir una base para la paella, 
los ingredientes son arroz, sal, agua y aceite. Debe ser un clon exacto para
cada paella. Se debe considerar que si se cambia un elemento del clon, los ingredientes
originales deberán mantenerse.*/

function productoBase() {
  let proto = new rice(["sal", "agua", "aceite", "arroz"]);
  let arroz = new ricePrototype(proto).clone();
  arroz[0] = "integral";
  
  console.log(">>", proto);
  	
  return arroz;
};

function rice(ingredientes) {
  this.ingredientes = ingredientes;
};

function ricePrototype(proto) {
  this.proto = proto;
  this.clone = function() {
    rice.ingredientes = proto.ingredientes.slice(0);
    return rice.ingredientes;
  };
};

