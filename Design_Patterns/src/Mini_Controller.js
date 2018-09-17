/*Esta funcion permite obtener el valor del select de html(onchange)*/
function getValueType (paellaType){

	this.paellaType = paellaType;
}

function buildPaella(){

	var factory = executeFactory(this.paellaType.value);
	var paellaProduct = generatePaella(factory.type);
	var base = productoBase();
	console.log(paellaProduct);
	var micarrito = new buildShoppingCar(factory.type, paellaProduct)
	console.log("esto es=",micarrito)
	console.log("tipos=", tipos(factory.type))
	//console.log(base)
	//console.log(executeSingleton())
	console.log(getValuePrice())
}

function getValueCoin(coin){
	this.currency = coin
	//var val = getValuePrice(this)
	var Dollars = calculatePaellaPrice(paellaPrice.value)
	console.log("dollar price=", Dollars)
	
}

function getValuePrice(paellaPrice){
	this.paellaPrice = paellaPrice
	let valPaella = paellaPrice.value
	var paellaPriceIva = valPaella - (valPaella*0.19) 
	console.log(paellaPriceIva)
	return valPaella
	
}



