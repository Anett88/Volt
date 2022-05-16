class Ingatlan{

    constructor(elem, adat){
        this.elem=elem;
        this.adat=adat;
        this.kategoria=this.elem.children(".kategoria");
        this.leiras=this.elem.children(".leiras");
        this.datum=this.elem.children(".datum");
        this.tehermentes=this.elem.children(".tehermentes");
        this.fenykep=this.elem.children().children(".fenykep");
        this.erdekel=this.elem.children(".erdekel");
        this.modosit=this.elem.children(".modosit");
        this.torol=this.elem.children(".torles");
        this.setAdatok(this.adat);
        
        this.erdekel.on("click",()=>{
            this.kattintasTrigger();
            //console.log("Hii");
        });

        this.modosit.on("click",()=>{
            this.modositas();
            //onsole.log("Hii");
        });
        this.torol.on("click",()=>{
            this.torles();
            //onsole.log("Hii");
        });


    }

    setAdatok(ertekek){
        this.kategoria.html(ertekek.nev);
        this.leiras.html(ertekek.leiras);
        this.datum.html(ertekek.hirdetesDatuma);
        this.tehermentes.html(ertekek.tehermentes);
        this.fenykep.attr("src", "../kepek/"+ertekek.kepUrl);
        // console.log(ertekek.kepUrl);
        // console.log(this.fenykep);
         this.fenykep.attr("alt", ertekek.kepUrl);

        
    }

    kattintasTrigger(){
        let esemeny=new CustomEvent("kattintas",{
            detail:this.adat,

        });
        window.dispatchEvent(esemeny);

    }
modositas(){
    let esemeny=new CustomEvent("modosit",{
        detail:this.adat,

    });
    window.dispatchEvent(esemeny);
}

torles(){
    let esemeny=new CustomEvent("torles",{
        detail:this.adat,

    });
    window.dispatchEvent(esemeny);
}

}