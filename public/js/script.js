$(function(){
    let fajlnev = "http://127.0.0.1:8000/api/ingatlanok";
    const tomb=[];
    const myAjax = new Ajax();

    myAjax.getAjax(fajlnev,tomb,foglalasKiir);


    $(window).on("kattintas", (event) => {
      alert(event.detail.pontszam+"\n"+event.detail.kategoria_id);
        
    });


    function foglalasKiir() {
        const szuloelem = $(".tablafoglaSzulo");
        const sablonElem = $(".tablafoglaSablon");
        szuloelem.empty();
        sablonElem.show();
        tomb.forEach(function (elem) {
            let ujElem = sablonElem.clone().appendTo(szuloelem);
             new Ingatlan(ujElem, elem);
            
        });

        sablonElem.hide();
    
    }

   
//felvitel
    $(".felvitel").on("click", () => {
        let ujAdat = {
            kategoria_id:1,//adatbázis a bal, maga az adat
            pontszam: $("#pontszam").val(),
            hirdetesDatuma: $("#datum").val(),
            tehermentes:$("#teher").is(':checked') ? "1" : "0",
            kepUrl:'haz.jpg',
            ar:$("#ar").val()
        };
        myAjax.postAjax(fajlnev, ujAdat);
    });


    $(window).on("modosit", (esemeny) => {
            $("#pontszam").val(esemeny.detail.pontszam);
            $("#datum").val(esemeny.detail.hirdetesDatuma);
            esemeny.detail.tehermentes==0 ? $("#teher2").prop("checked",false):$("#teher2").prop("checked",true);
            $("#ar").val(esemeny.detail.ar);

            $(".modositas2").on("click", () => {
                let aktTermek = esemeny.detail.id;
                console.log(aktTermek);
                let ujAdat = {
                    kategoria_id:1,
                    pontszam: $("#pontszam").val(),
                    hirdetesDatuma: $("#datum").val(),
                    tehermentes:$("#teher").is(':checked') ? "1" : "0",
                    kepUrl:'haz.jpg',
                    ar:$("#ar").val()
                };
                myAjax.putAjax(fajlnev, aktTermek,ujAdat);
            });
    });
   
    
    $(window).on("torles", (esemeny) => {
        let aktTermek = esemeny.detail.id;

        myAjax.deleteAjax(fajlnev, aktTermek);
    });
    


});