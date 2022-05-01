var mobile_prices = new Array();
mobile_prices["android"] = 1000;
mobile_prices["ios"] = 1200;

function getMobilePrice()
{
    var mobilePrice=0;
    var theForm = document.forms["mobileform"];
    var selectedMobile = theForm.elements['selectedmobile'];

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

function calculateTotal()
{
    var systemPrice = getMobilePrice() + 500;

    //display
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the System Rp. "+systemPrice;
}