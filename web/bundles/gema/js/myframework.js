/**
 * Created by hector.duran on 29-abr-16.
 */


$(document).ready(function(){




});

function DBConect(ruta,rutaidparam,valueid,tarjetselectid) {

    if(valueid==null || valueid=='')
    {
        $('#' + tarjetselectid).empty();
        $('#' + tarjetselectid).trigger("chosen:updated");

    }
    else
    {
        var url = Routing.generate(ruta, {id: valueid})


        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: url,
            success: function (data) {
                fillcampo(data);
                $('#' + tarjetselectid).empty();
                $('#' + tarjetselectid).trigger("chosen:updated");
                for (var f = 0; f < data.length; f++) {
                    $('#' + tarjetselectid).append('' +
                    '<option value=' + data[f].id + '>' + data[f].nombre + '<option>');
                    $('#' + tarjetselectid).trigger("chosen:updated");

                }
            },
            error: function (req, stat, err) {


                fillcampo(req.responseText);
            }

        });
    }


}
    function fillcampo(data)
    {

        $('#cc').empty();
        $('#cc').append(data);
    }





