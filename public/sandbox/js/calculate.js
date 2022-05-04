var mobile_prices = new Array();
mobile_prices["android"] = 1000;
mobile_prices["ios"] = 1200;

var design_prices = new Array();
design_prices["none"] = 0;
design_prices["basic"] = 200;
design_prices["premium"] = 500;

function getMobilePrice()
{
    var mobilePrice = 0;
    var theForm = document.forms["mobileform"];
    var selectedMobile = theForm.elements["selectedmobile"];

    for(var i = 0; i < selectedMobile.length; i++)
    {
        if(selectedMobile[i].checked)
        {
            mobilePrice = mobile_prices[selectedMobile[i].value];
            break;
        }
    }
    return mobilePrice;
}

function getDesignPrice()
{
    var designPrice = 0;
    var theForm = document.forms["mobileform"];
    var selectedDesign = theForm.elements["design"];

    designPrice = design_prices[selectedDesign.value];
    return designPrice;
}

function calculateTotal()
{
    var systemPrice = getMobilePrice() + getDesignPrice() + 500;

    //display
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the System Rp. "+systemPrice;
}