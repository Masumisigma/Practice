//console.log("hiii");

function billingFunction()
{
    var data = {};
   // console.log("hi");
    if($('#same').prop('checked')==true)
    {
        //console.log("hi");
        $('fieldset#shippingFieldset > input, textarea').each(function(){
            data[$(this).attr('id')] = $(this).val();
           // console.log(data);
        });
        $(data).each(function (index,item) {
            $('#billingName').val(item.shippingName);
            $('#billingPhone').val(item.shippingPhone);
            $('#billingAddress').val(item.shippingAddress);
            $('#billingCity').val(item.shippingCity);
            $('#billingState').val(item.shippingState);
            $('#billingZip').val(item.shippingZip);
        });

      //  console.log(data);
    }
    else
    {
        $('#billingName').val('');
        $('#billingPhone').val('');
        $('#billingAddress').val('');
        $('#billingCity').val('');
        $('#billingState').val('');
        $('#billingZip').val('');
    }
}
$(document).ready(function() {
    $('.preview').hover(function () {
      //  console.log(this.src);
       // console.log("in");
        $('#image').css("background-image","url("+ this.src+ ")");
        $('#image').text(this.alt);

    });
});
