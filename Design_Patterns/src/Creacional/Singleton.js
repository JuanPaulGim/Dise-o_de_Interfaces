/*Se construye el objeto singleton que sera instanciado 
una unica vez, y podra ser utilizado en todos los platos 
de paella generados*/

var singleton = (function (){

	function productOnly(ingredients){

		var objectSalad = {
			salad: this.ingredients,
		}
		return objectSalad
	}

	function createSalad(){

		var saladIngredients = [];
		return new productOnly(saladIngredients);
	}

	function instanceSingle(){
		return createSalad();
	}

	return instanceSingle;
})();


function getValuePrice(paellaPrice){
	this.paellaPrice = paellaPrice
	let valPaella = paellaPrice.value
	var paellaPriceIva = valPaella - (valPaella*0.19) 
	console.log(paellaPriceIva)
}



function executeSingleton(){
	return singleton;
}