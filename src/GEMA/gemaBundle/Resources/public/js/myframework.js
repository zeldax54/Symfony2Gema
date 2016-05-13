/**
 * Created by hector.duran on 29-abr-16.
 */


$(document).ready(function(){




});

function DBConect(ruta,rutaidparam,valueid,tarjetselectid)
{
    var url = '{{ path('+ruta+', {'+rutaidparam+':'+valueid+'}) }}';
    alert(url);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: url,

        success: function(data) {
            $('cc').clear();
            $('cc').append(data);
            for (var f=0;f<data.length;f++) {
                $('#'+tarjetselectid).option().append('' +
                '<option value='+data[f].id+'>'+data[f].nombre+'<option>')

                $('#'+tarjetselectid).trigger("chosen:updated");

            }
        }
    });
}




