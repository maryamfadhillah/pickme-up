var cake_prices = new Array();
cake_prices["redvelvet"] = 1000;
cake_prices["blackforest"] = 1200;

var cake_type = new Array();
cake_type["redvelvet"] = "../../img/redvelvet.png";
cake_type["blackforest"] = "../../img/blackforest.png";

var topping_prices = new Array();
topping_prices["none"] = 0;
topping_prices["cream"] = 200;
topping_prices["strawberry"] = 500;

var topping_type = new Array();
topping_type["none"] = "../../img/topping/plain.png";
topping_type["cream"] = "../../img/topping/cream.png";
topping_type["strawberry"] = "../../img/topping/strawberry.png";

var theForm = document.forms["cakeform"];

function getCakePrice()
{
    var cakePrice = 0;
    var selectedCake = theForm.elements["selectedCake"];

    for(var i = 0; i < selectedCake.length; i++)
    {
        if(selectedCake[i].checked)
        {
            cakePrice = cake_prices[selectedCake[i].value];
            break;
        }
    }
    return cakePrice;
}

function getToppingPrice()
{
    var toppingPrice = 0;
    var selectedTopping = theForm.elements["topping"];

    toppingPrice = topping_prices[selectedTopping.value];
    return toppingPrice;
}

function calculateCake()
{
    var systemPrice = getCakePrice() + getToppingPrice() + 500;

    //display
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For your cake : Rp. "+systemPrice;

    //display cake
    var theForm = document.forms["cakeform"];
    var selectedCake = theForm.elements["selectedCake"];
    var value = cake_type[selectedCake.value];
    document.getElementById('previewCake').src=value;

    //display topping cake
    var theForm = document.forms["cakeform"];
    var selectedTopping = theForm.elements["topping"];
    var value = topping_type[selectedTopping.value];
    document.getElementById('previewTopping').src=value;
}
