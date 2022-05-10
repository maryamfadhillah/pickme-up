var mobile_prices = new Array();
mobile_prices["android"] = 1000;
mobile_prices["ios"] = 1200;

var design_prices = new Array();
design_prices["none"] = 0;
design_prices["basic"] = 200;
design_prices["premium"] = 500;

let mobileForm = document.forms["mobileform"];

function getMobilePrice()
{
    var mobilePrice = 0;
    var selectedMobile = mobileForm.elements["selectedmobile"];

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

function gamePrice()
{
    var gamePrice = 0;
    var addGame = mobileForm.elements["addgame"];

    if(addGame.checked==true)
    {
        gamePrice=700;
    }
    return gamePrice;
}

function videoPrice()
{
    var videoPrice = 0;
    var addVideo = mobileForm.elements["addvideo"];

    if(addVideo.checked==true)
    {
        videoPrice=300;
    }
    return videoPrice;
}

function getDesignPrice()
{
    var designPrice = 0;
    var selectedDesign = mobileForm.elements["design"];

    designPrice = design_prices[selectedDesign.value];
    return designPrice;
}

function calculateTotal()
{
    var systemPrice = getMobilePrice() + getDesignPrice() + gamePrice() + videoPrice() + 500;

    //display
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the System Rp. "+systemPrice;
}