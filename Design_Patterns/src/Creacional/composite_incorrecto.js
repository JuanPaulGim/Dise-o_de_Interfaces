function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];
    this.compositeProto = function(){
        var objectComposite = {
            add: function(product){
            arrayElements.push(product);
            },
            remove: function (product){
                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
                return arrayElements;
            }
        }
        return objectComposite
    }
}

function tipos(type){
    this.arrayTypes = []
    for (i in arrayTypes){
        if (i == type){
            continue
        }
        else{
            arrayTypes.add(type)
        }
    }
    return arrayTypes

}



function buildShoppingCar(type,product){//tipo de producto, producto){
    var car = new shoppingCar(type); 
    var resultCar = car.compositeProto().add(product)
    return resultCar;

   
}

