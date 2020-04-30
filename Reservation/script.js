
    $(".place-descr").height($(".container").height());

    $('.soft').each(function (index) { //Wypełnia każde miejsce sprzętem i zdjęciami w  oknie po lewej stronie
         var number =  $( this ).data('soft');

        var soft = $(this);
        $.ajax({
            url:"/component.php",
            method:"POST",
            data:{num:number},
            success:function(data)
            {

                var output ='';
                var obj = JSON.parse(data);
                //console.log(obj);
                obj.forEach(myFunction);

                function myFunction(item) {
                    var img ='';

                        if(item.Rodzaj== "drukarka")
                            img = '<img width=\"25px\" src=\"img/Iconshock-Real-Vista-Text-Print.ico\">';

                        if(item.Rodzaj== "komputer")
                            img = ' <img width=\"25px\" src=\"img/Treetog-Junior-Monitor.ico\">';

                        if(item.Rodzaj== "telefon")
                            img = ' <img width=\"25px\" src=\"img/Iconshock-Real-Vista-Networking-Phone.ico\">';

                        var position = " <div class=\"soft-element\">\n" +
                            ""+img+"\n" +
                            "<div class=\"soft-descr\">"+item.Rodzaj+"</div>\n" +
                            "</div>";
                        output += position;

                   }
                $(soft).html(output);
            }
        });
    });

function infoComplite(place, outputZam, output){ //Wypełnia okno informacyjne po prawej stronie informacjej dotycząjacej wybranego miejsca
    $.ajax({
        url:"/component.php",
        method:"POST",
        data:{place:place},
        success:function(data)
        {
            var obj = JSON.parse(data);
            console.log(obj);
            obj.forEach(myFunction);

            function myFunction(item) {
                if(item.Status==0){
                    $(".info-status").text("Wolne");
                }
                $(".opis").text(item.Opis);

                item.Zamowenie.forEach(function (index) {
                    var tmpZam = "<li><span><label class='zam-time' >Zajete od: </label>"+index.DataOd+"</span>" +
                        "<span><label class='zam-time' >do: </label>"+index.DataDo+"</span></li>";

                    outputZam+=tmpZam;
                });
                $(".info-status").html(outputZam);


                item.Wyposazenie.forEach(function (index) {  // Wypełnia "<ul>" wyposażenia w oknie po prawej stronie

                    var tmp ="<li><span>"+index.Rodzaj+"</span>" +
                        "<span><label class='wyp-rodzaj' >Model: </label>"+index.Model+"</span>" +
                        "<span><label class='wyp-rodzaj'>Oznaczenie:</label> "+index.Oznaczenie+"</span>" +
                        "<span><label class='wyp-rodzaj'>Rok zakupu:</label> "+index.Rok_zakupu+"</span>" +
                        "<span><label class='wyp-rodzaj'>Wartosc:</label> "+index.Wartosc+"</span>" +
                        "<span><label class='wyp-rodzaj'>Opis: </label>"+index.Opis+"</span>" +
                        "</li>";

                    output+=tmp;
                });
                $(".wypos").html(output);
            }
        }
    });
}

$(".place").click(function () {
   var place =  $(this).data('place');
   $(".num-place").text(place);
   $(".modal-place").empty().append("Miejsce:&nbsp;"+place);
   var output = '';
   var outputZam='';
   infoComplite(place, outputZam, output);
    $(".hide-info").show();
});

$(".close-window").click(function () {
   $(".modal-window").hide();
});
$(".btn-rez ").click(function () {
    $(".modal-window").show();
});



$('.makeRes').click(function () {

    var email = $("input[name='email']").val();
    var pass =  $("input[name='password']").val();
    var miejsce = $(".num-place").text();

    var date0 = $("input[name='currentTime']").val();
    var date1 =  $("input[name='dateOd']").val();
    var date2 =  $("input[name='dateDo']").val();

    var now = new Date(date0);
    var dateOd = new Date(date1);
    var dateDo = new Date(date2);

    // Sprawdzanie сzasu startu i  zakończenia oraz porównanie z bieżącą
    if((dateDo.getTime() > dateOd.getTime()) && (dateDo.getTime() > now.getTime() &&  dateOd.getTime()) > now.getTime()
       &&dateDo.getDate()<=(now.getDate()+7)){

        function makeTrueTime(time) {//funkcja konwertuje daty na format normalny jak w bazie danych

            var d = new Date(time),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear(),
                minutes = d.getMinutes(),
                sec = "00",
                hours=d.getHours();

            if (minutes.length < 2)
                minutes = '0' + minutes;
            if (month.length < 2)
                month = '0' + month;
            if (hours.length < 2)
                hours = '0' + hours;
            if (day.length < 2)
                day = '0' + day;

            return year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+sec;

        }

    var Date1 = makeTrueTime(dateOd);
    var Date2 = makeTrueTime(dateDo);
    alert(Date1);
    $.ajax({ //Rezerwujemy czas dla wybranego miejsca

            url:"/makeOrder.php",
            method:"POST",
            data:{email:email,dateOd:Date1,dateDo:Date2,miejsce:miejsce},
            success:function(data)
            {

                if(data==1){
                    //$(".modal-window").hide();
                    $(".error-msg").empty();
                    var output = '';
                    var outputZam='';
                    infoComplite(miejsce, outputZam, output);
                }else {

                    $(".error-msg").empty().text(data);
                }
            }
        });
    }else{
        $(".error-msg").empty().text("Prosze wybrac inny czas (max  na 7 dni)");
    }
});



$(".inp-wyp").change(function () {    // Zmienia miejsce wybranego sprzętu

    var miejsce =  $(this).val();
    var oznaczenie = $(this).closest("tr").find($(".inp-oznacz"));

        if(miejsce<=16){
            $.ajax({
                url:"/component.php",
                method:"POST",
                data:{placeWyp:miejsce,oznaczenie:$(oznaczenie).val()},
                success:function(data)
                {
                }
            });
        }else{
            alert("Nie istnieje takiego miejsca");
        }

});