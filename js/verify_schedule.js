$(document).ready(function(){
    cargarLista();
    $('#date').blur(function(){
        cargarLista();
    });
});

function cargarLista(){
    $.ajax({
        type: "POST",
        url: "verify_schedule.php",
        data:"date="+$('#date').val(),
        success:function(r){
            $('#selectDate').html(r);
        },
        error: function(){
            alert('error');
        }
    });
}
$('#confirm_data').click(function(){
    date = $('#date').val();
    $('#date_c').html(date);
});

var selectDate = $("#selectDate option:selected").text();
$('#selectDate').on('change', function(){
    selectDate = $("#selectDate option:selected").text();
    hour_c = turn_into_hour(selectDate);
    $('#hour_c').html(hour_c);
});

function turn_into_hour(hour) {
    var time;
    switch (hour) {
        case '1':
            time = '8 - 10 am';
            break;
        case '2':
            time = '10 - 12 am';
            break;
        case '3':
            time = '12 - 2 Pm';
            break;
        case '4':
            time = '2 - 4 Pm';
            break;
        case '5':
            time = '4 - 6 Pm';
            break;
        default:
            time = 'Unselected';
            break;
    }
    return time;
}
