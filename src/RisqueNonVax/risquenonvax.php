<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.css" integrity="sha512-XXtRBFtk/QfR8GEWwQPYjrQBHQwjidXg0wo8HJi9YOaFycWqd2uWkjJoAyx8Mb/+H8uhvmf70EAIxDnQxrwrvw==" crossorigin="anonymous" />

<style>
p {
    font-size: 17px;
}
.wrap {
        display: flex;
        margin-top: 0px;
        flex-wrap: wrap;
    }
.wrap>* {
    flex: 1 1 200px;
}
.boxshadow {
        border: 0px solid black;
        margin-top: 20px;
        padding: 10px 10px 10px 10px;
        border-radius: 7px;
        margin-right: 15px;
        max-width: 400px;
        text-align: left;
        /*box-shadow: 6px 4px 25px #c3d19d;*/
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        width: 100%;
        background: #ffffff;
    }

.boxshadow-wide {
    border: 0px solid black;
    margin-top: 20px;
    padding: 10px 10px 10px 10px;
    border-radius: 7px;
    margin-right: 15px;
    max-width: 800px;
    text-align: left;
    /*box-shadow: 6px 4px 25px #c3d19d;*/
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    width: 100%;
    background: #ffffff;
}

.title {
    margin-top: 70px;
}
</style>

<body>
    <p><b>Combien d'hospitalisations ont été évitées grâce au vaccin Covid19 ? Quelle est l'importance de la non-vaccination du Covid19 dans les décès hospitaliers ?</b> Cet outil permet d'évaluer l'impact de la vaccination sur les hospitalisations et décès de la Covid19. Ces statistiques s'appuient sur l'étude de la DREES effectuée entre le 30 mai et le 11 juin sur l'ensemble de la France. La méthodologie et les calculs sont décrits en bas de page.</p>
    <br>
    <span style="font-size: 20px;">Âge :  <span id="age">--</span> ans</span>
    <div id="slider" style="max-width: 400px; margin-top: 5px;"></div>

    <h3 class="title">La vaccination diminue le risque d'hospitalisation</h3>
    <p>Imaginons deux groupes de taille identique, l'un comportant des individus vaccinés de <span id="age_paragraphe2">--</span>  ans et l'autre non vaccinés. S'il y a une personne hospitalisée dans le groupe vacciné, alors il y aura probablement 21 hospitalisations dans le groupe non vacciné.</p>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow" style="">
                <span style="color:#4fafd9; font-size: 20px;">Groupe vacciné • </span>
                <span style="color:#4fafd9; font-size: 20px; font-weight: bold;">1 hospitalisation</span><br>
                <div id="figure-vax-hosp" style="margin-top: 10px;"></div>
            </div>
            <div class="boxshadow">
                <span style="color:orange; font-size: 20px;">Groupe non vacciné • </span>
                <span style="color:orange; font-size: 20px; font-weight: bold;">21 hospitalisations</span><br>
                <div id="figure-non-vax-hosp" style="margin-top: 10px;"></div>
            </div>
    </div>

    <h3 class="title">La vaccination diminue le risque de décès</h3>
    <p>Imaginons deux groupes de taille identique, l'un comportant des individus vaccinés de <span id="age_paragraphe3">--</span>  ans et l'autre non vaccinés. S'il y a un décès dans le groupe vacciné, alors il y aura probablement 21 décès dans le groupe non vacciné.</p>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow" style="">
                <span style="color:#4fafd9; font-size: 20px;">Groupe vacciné • </span>
                <span style="color:#4fafd9; font-size: 20px; font-weight: bold;">1 décès</span><br>
                <div id="figure-vax" style="margin-top: 10px;"></div>
            </div>
            <div class="boxshadow">
                <span style="color:orange; font-size: 20px;">Groupe non vacciné • </span>
                <span style="color:orange; font-size: 20px; font-weight: bold;">21 décès</span><br>
                <div id="figure-non-vax" style="margin-top: 10px;"></div>
            </div>
    </div>

    <h3 class="title">Combien d'hospitalisations peuvent-être évitées ?</h3>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow-wide" style="">
                <span style="color:black; font-size: 20px;">Hospitalisations attribuables à la non-vaccination • </span>
                <span style="color:red; font-size: 20px; font-weight: bold;">84 %</span><br>
                <p>Cela signifie que sur 100 hospitalisations de personnes ayant <span id="age_surrisque_hosp">--</span>  ans, 84 hospitalisations auraient pu être évités par la vaccination. </p>
                <div id="figure-vax-hosp-evitables" style="margin-top: 10px;"></div>
            </div>
    </div>

    <h3 class="title">Combien de décès peuvent-être évités ?</h3>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow-wide" style="">
                <span style="color:black; font-size: 20px;">Décès attribuables à la non-vaccination • </span>
                <span style="color:red; font-size: 20px; font-weight: bold;">84 %</span><br>
                <p>Cela signifie que sur 100 décès de personnes ayant <span id="age_surrisque">--</span>  ans, 84 décès auraient pu être évités par la vaccination. </p>
                <div id="figure-vax-evitables" style="margin-top: 10px;"></div>
            </div>
    </div>

    <br>
    <br>
    <h4>Méthodologie</h4>
    <p>Ces statistiques sont obtenues à partir des données publiées par la DREES. Elles seront mises à jour lors de la publication de nouvelles données.</p>

    Auteurs : Sacha, Guillaume.
    
</body>

<script>
LIGHT_BLUE = "#4fafd9"
var value_age = 6;
DICT_AGES_STR = {
    0: "0 - 9",
    1: "10 - 19",
    2: "20 - 29",
    3: "30 - 39",
    4: "40 - 49",
    5: "50 - 59",
    6: "60 - 69",
    7: "70 - 79",
    8: "80 - 89",
}

function get_icon_body(color="black"){
    return `<svg id="Icons" height="35" viewBox="0 0 74 74" width="30" xmlns="http://www.w3.org/2000/svg" fill="${color}"><path d="m45.74 19.75h-17.48a6 6 0 0 0 -6 6v19.57a2.15 2.15 0 0 0 4.29 0v-11.32a1.11 1.11 0 0 1 2.22 0v34.44a3.56 3.56 0 0 0 7.12 0v-17.66a1.11 1.11 0 0 1 2.22 0v17.66a3.56 3.56 0 0 0 7.12 0v-34.44a1.11 1.11 0 0 1 2.22 0v11.32a2.15 2.15 0 0 0 4.29 0v-19.58a6 6 0 0 0 -6-5.99z"/><circle cx="37" cy="8.87" r="6.87"/></svg>`
}

function get_bed_icon(color){
    return `
        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="35px" height="25px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve" fill="${color}">
        <g>
            <g>
                <path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
                    c0,8.399-0.5,16.8-1.6,25H789.1z"/>
                <path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
                    C273.4,293.5,223.1,263.7,165.9,263.7z"/>
                <path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
                    c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
                    C0,718,13.4,731.5,30,731.5z"/>
            </g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        </svg>
`
}

function get_bodies(number, color="black"){
    var bodies = "";
    for(let i = 0; i < number; i++){
        bodies = bodies + get_icon_body(color)
    }
    return bodies;

}

function get_beds(number, color="black"){
    var beds = "";
    for(let i = 0; i < number; i++){
        beds = beds + get_bed_icon(color)
    }
    return beds;

}

populateFigure()
function populateFigure(){
    let figure_vax = get_bodies(1, LIGHT_BLUE);
    let figure_non_vax = get_bodies(21, "orange");
    document.getElementById("figure-vax").innerHTML = figure_vax;
    document.getElementById("figure-non-vax").innerHTML = figure_non_vax;
}

populateFigureHosp()
function populateFigureHosp(){
    let figure_vax = get_beds(1, LIGHT_BLUE);
    let figure_non_vax = get_beds(21, "orange");
    document.getElementById("figure-vax-hosp").innerHTML = figure_vax;
    document.getElementById("figure-non-vax-hosp").innerHTML = figure_non_vax;
}

populateFigureDecesEvitables();
function populateFigureDecesEvitables(){
    var figure_vax = get_bodies(16, "grey");
    figure_vax += get_bodies(84, "red");

    document.getElementById("figure-vax-evitables").innerHTML = figure_vax;
}

populateFigureHospEvitables();
function populateFigureHospEvitables(){
    var figure_vax = get_beds(16, "grey");
    figure_vax += get_beds(84, "red");

    document.getElementById("figure-vax-hosp-evitables").innerHTML = figure_vax;
}


var slider = document.getElementById('slider');
buildNoUiSlider()

function sliderChanged(){
    let value = parseInt(slider.noUiSlider.get())
    document.getElementById("age").innerHTML = DICT_AGES_STR[value];
    //document.getElementById("age_paragraphe").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_paragraphe2").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_paragraphe3").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_surrisque_hosp").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_surrisque").innerHTML = DICT_AGES_STR[value];
    value_start = value;
}

function buildNoUiSlider(){
    noUiSlider.create(slider, {
        start: [value_age],
        connect: true,
        step: 1,
        range: {
            'min': 0,
            'max': 8,
        }
    });
    sliderChanged();
    slider.noUiSlider.on('change', function () { sliderChanged(); });
}

</script>