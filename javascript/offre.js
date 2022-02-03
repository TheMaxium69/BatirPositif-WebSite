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

let iA = document.querySelector('i.fa-search');
let iC = document.querySelector('i.fa-ruler-combined');
let iT = document.querySelector('i.fa-puzzle-piece');


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


$(document).ready(function() {
    $("div#a2").hover(
        function () {
            divTwo.classList.add("current");

            divOne.classList.add("completed");
            divOne.classList.remove("current");

            if (divThree.classList.toString() === "completed"){
                divThree.classList.remove("completed")
            }
        },
        function () {

            divOne.classList.add("current");
            divOne.classList.remove("completed");
            divTwo.classList.remove("current");
        }
    );

    $("div#a3").hover(
        function () {
            divThree.classList.add("current");
            divOne.classList.add("completed");
            divOne.classList.remove("current");
            divTwo.classList.add("completed");
        },
        function () {

            divOne.classList.add("current");
            divOne.classList.remove("completed");
            divTwo.classList.remove("completed");
            divThree.classList.remove("current");

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
        },
        function () {

            divOneB.classList.add("current");
            divOneB.classList.remove("completed");
            divTwoB.classList.remove("current");
        }
    );

    $("div#b3").hover(
        function () {
            divThreeB.classList.add("current");
            divOneB.classList.add("completed");
            divOneB.classList.remove("current");
            divTwoB.classList.add("completed");
        },
        function () {

            divOneB.classList.add("current");
            divOneB.classList.remove("completed");
            divTwoB.classList.remove("completed");
            divThreeB.classList.remove("current");

        }
    );
});