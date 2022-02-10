$(document).ready(function(){

    var $contenu = $('.contenu');
    var $onglet = $('.onglet');

    $onglet.click(activer);

    function activer(){
        var num = $(this).index();

        $(this)
            .addClass('actif')
            .siblings()
            .removeClass('actif');

        $contenu.eq(num)
            .addClass('actif')
            .siblings()
            .removeClass('actif');
    }
});

let divOne = document.querySelector('div#a1');
let divTwo = document.querySelector('div#a2');
let divThree = document.querySelector('div#a3');

let divOneB = document.querySelector('div#b1');
let divTwoB = document.querySelector('div#b2');
let divThreeB = document.querySelector('div#b3');

let divC1 = document.querySelector('div#c1');
let divC2 = document.querySelector('div#c2');
let divC3 = document.querySelector('div#c3');
let divC4 = document.querySelector('div#c4');

let divR1 = document.querySelector('div#r1');
let divR2 = document.querySelector('div#r2');
let divR3 = document.querySelector('div#r3');
let divR4 = document.querySelector('div#r4');



$(document).ready(function() {


    //Hover Construction

    $("div#c1").hover(
        function () {

            divC1.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse <br> Accompagnement à l’auto-construction '

        },
        function () {


            divC1.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Accompagnement à l’auto-construction '

        }
    );

    $("div#c2").hover(
        function () {

            divC2.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse <br> Étude énergétique RE2020 '

        },
        function () {


            divC2.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Étude énergétique RE2020 '

        }
    );

    $("div#c3").hover(
        function () {

            divC3.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse <i class="fas my"><img src="assets/picto/idee.png"></i> Conception <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux <br> AMO <br> Assistance maîtrise d’ouvrage responsable '

        },
        function () {


            divC3.innerHTML = '<i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <i class="fas my"><img src="assets/picto/idee.png"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '

        }
    );

    $("div#c4").hover(
        function () {

            divC4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux <br> MOE <br> Maîtrise d\'œuvre d\'exécution '

        },
        function () {


            divC4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> MOE <br> Maîtrise d\'œuvre d\'exécution '

        }
    );

    //Prise Construction

    $("div#a1").hover(
        function () {


            // divC1.innerHTML = '<j class="iGreen"> <i class="fas fa-search"></i> Analyse </j> <br> Accompagnement à l’auto-construction '

            // divC2.innerHTML = '<j class="iGreen"> <i class="fas fa-search"></i> Analyse </j> <br> Étude énergétique RE2020 '


            // divC3.innerHTML = '<j class="iGreen"> <i class="fas fa-search"></i> Analyse </j> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '


        },
        function () {

            // divC1.innerHTML = '<i class="fas fa-search"></i> <br> Accompagnement à l’auto-construction '


            // divC2.innerHTML = '<i class="fas fa-search"></i> <br> Étude énergétique RE2020 '

            // divC3.innerHTML = '<i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '
        }
    );


    $("div#a2").hover(
        function () {
            divTwo.classList.add("current");

            divOne.classList.add("completed");
            divOne.classList.remove("current");

            if (divThree.classList.toString() === "completed"){
                divThree.classList.remove("completed")
            }

            // divC3.innerHTML = '<i class="fas fa-search"></i> <j class="iGreen"><i class="fas fa-ruler-combined"></i> Conception </j><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '


        },
        function () {

            divOne.classList.add("current");
            divOne.classList.remove("completed");
            divTwo.classList.remove("current");

            // divC3.innerHTML = '<i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '
        }
    );

    $("div#a3").hover(
        function () {
            divThree.classList.add("current");
            divOne.classList.add("completed");
            divOne.classList.remove("current");
            divTwo.classList.add("completed");

            divTwo.innerHTML = '<i class="fas my first"><img src="assets/picto/idee.png"></i> Conception';

            /*divC3.innerHTML = '<i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <j class="iGreen"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux </j> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '
            divC4.innerHTML = '<j class="iGreen"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux </j><br> MOE <br> Maîtrise d\'œuvre d\'exécution '*/
        },
        function () {

            divOne.classList.add("current");
            divOne.classList.remove("completed");
            divTwo.classList.remove("completed");
            divThree.classList.remove("current");


            divTwo.innerHTML = '<i class="fas my"><img src="assets/picto/idee.png"></i> Conception';

            /*divC3.innerHTML = ' <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable '
            divC4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> MOE <br> Maîtrise d\'œuvre d\'exécution '
*/
        }
    );



    //Hover Reno

    $("div#r1").hover(
        function () {

            divR1.innerHTML = '<i class="fas fa-search"></i> Analyse <hr style="background: white;"> DDT <br> Diagnostic technique '

        },
        function () {


            divR1.innerHTML = '<i class="fas fa-search"></i> <hr style="background: white;"> DDT <br> Diagnostic technique '

        }
    );

    $("div#r2").hover(
        function () {

            divR2.innerHTML = '<i class="fas fa-search"></i> Analyse <hr style="background: white;"> Audit énergétique '

        },
        function () {


            divR2.innerHTML = '<i class="fas fa-search"></i> <hr style="background: white;"> Audit énergétique '

        }
    );

    $("div#r3").hover(
        function () {

            divR3.innerHTML = '<i class="fas fa-search"></i> Analyse <i class="fas fa-ruler-combined"></i> Conception <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '

        },
        function () {


            divR3.innerHTML = ' <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '

        }
    );

    $("div#r4").hover(
        function () {

            divR4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux <hr style="background: white;"> MOE <br> Maîtrise d\'œuvre d\'exécution '

        },
        function () {


            divR4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> MOE <br> Maîtrise d\'œuvre d\'exécution '

        }
    );




    //Phrise Reno

    $("div#b1").hover(
        function () {

            divR1.innerHTML = '<j class="iGreen"><i class="fas fa-search"></i> Analyse</j> <hr style="background: white;"> DDT <br> Diagnostic technique '


            divR2.innerHTML = '<j class="iGreen"><i class="fas fa-search"></i> Analyse</j> <hr style="background: white;"> Audit énergétique '


            divR3.innerHTML = '<j class="iGreen"> <i class="fas fa-search"></i> Analyse </j> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '

        },
        function () {

            divR1.innerHTML = '<i class="fas fa-search"></i> <hr style="background: white;"> DDT <br> Diagnostic technique '
            divR2.innerHTML = '<i class="fas fa-search"></i> <hr style="background: white;"> Audit énergétique '
            divR3.innerHTML = ' <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '
        }
    );

    $("div#b2").hover(
        function () {

            divTwoB.classList.add("current");

            divOneB.classList.add("completed");
            divOneB.classList.remove("current");

            if (divThreeB.classList.toString() === "completed"){
                divThreeB.classList.remove("completed")
            }

            divR3.innerHTML = '<i class="fas fa-search"></i> <j class="iGreen"><i class="fas fa-ruler-combined"></i> Conception</j> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '
        },
        function () {

            divOneB.classList.add("current");
            divOneB.classList.remove("completed");
            divTwoB.classList.remove("current");

            divR3.innerHTML = ' <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '
        }
    );

    $("div#b3").hover(
        function () {
            divThreeB.classList.add("current");
            divOneB.classList.add("completed");
            divOneB.classList.remove("current");
            divTwoB.classList.add("completed");

            divR3.innerHTML = '<i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <j class="iGreen"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux </j> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '
            divR4.innerHTML = '<j class="iGreen"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux </j><hr style="background: white;"> MOE <br> Maîtrise d\'œuvre d\'exécution '

        },
        function () {

            divOneB.classList.add("current");
            divOneB.classList.remove("completed");
            divTwoB.classList.remove("completed");
            divThreeB.classList.remove("current");

            divR3.innerHTML = ' <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable '
            divR4.innerHTML = '<i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <hr style="background: white;"> MOE <br> Maîtrise d\'œuvre d\'exécution '

        }
    );
});



/*function shemat(id) {

    let isCurrent = document.querySelector('div.current');
    let isClickDiv = document.querySelector('div#a' + id);

    if (isCurrent !== isClickDiv){
        isClickDiv.classList.add("current");
        isCurrent.classList.remove("current");
    }

    if (isClickDiv === divOne) {

        if (divTwo.classList.toString() === "completed"){
            divTwo.classList.remove("completed")
        }
        if (divThree.classList.toString() === "completed"){
            divThree.classList.remove("completed")
        }
    }

    if (isClickDiv === divTwo){
        divOne.classList.add("completed");
        if (divThree.classList.toString() === "completed"){
            divThree.classList.remove("completed")
        }

    }

    if (isClickDiv === divThree){
        divOne.classList.add("completed");
        divTwo.classList.add("completed");

    }
}*/