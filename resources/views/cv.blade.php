@extends('layouts.cvlay')
@section('css')
    <link rel="stylesheet" type="text/css" href="css/statics.css">
@endsection
@section('title')
    CV
    @endsection
@section('content')
    <div class="cv-main">
    <div class ="cv-title"><h1>Odd Andre Vatne</h1></div>
    <div class = "cv-personal">
        <div class = "cv-personal-info">
            <ul>
                <p>Odd Andre Vatne</p>
                <li>Fødselsdato: 28/09/1997 (19 År) </li>
                <li>Adresse: Brinken 4B, 4630 </li>
                <li>Epost: oddandre@skoboks.no</li>
                <li>Mobil: 94804473</li>
                <li>Nasjonalitet: Norsk</li>
            </ul>
        </div>
        <div class ="cv-image">
            <img class="cv-image-profile" src="img/profileimage.jpg">
        </div>
    </div>
    <div class = "cv-school">
        <ul>
            <li>
                <h3>Universitetet i Agder - IT og Kommunikasjonssystemer - 2017-2020 (Nåværende)</h3>
                <p></p>
            </li>
            <li>
                <h3>Vågen Vgs - Medier & Kommunikasjon - 2013-2016 (3år)</h3>
                <p>
                    På Medier og kommunikasjon lærte vi om markedsføring. Vi varierte mellom
                    design og produksjon. I produksjon lagde vi diverse reklamefilmer og animasjonsfilmer.
                    I design lagde vi flere bedrifts-profiler og plakater,
                    vi designet logoer og jobbet mye med målgrupper.
                </p>
            </li>
        </ul>
    </div>
    <div class = "cv-experience">
        <ul>
            <li>
                <h3>2016-2017 => Rogaland Fritidspark AS => IT Ansvarlig (1år) </h3>
                <p>
                    Etter 3 år fikk jeg tilbud om stillingen som IT-guru. Utenfor drift av parken drev jeg mye med
                    systemadministrasjon og scripting. I drift hadde jeg ansvar ovenfor oppgjør/"cash-handling", data-support og
                    drift av systemer.
                    <ul class ="cv-experience-list2">
                    <li>Jeg hadde ansvar for IT ognettverk under landstreffet Stavanger 2017</li>
                    <li>Jeg håndterte en oppgradering på 20 kasseapperater på kort varsel</li>
                    <li>Jeg videreutviklet ett HR-systemet som var basert på CakePhP</li>
                    <li>Jeg satte opp ett asset management system for Kongeparken og Skånes Djürpark</li>
                </ul>
                </p>
            </li>
            <li>
                <h3>2014-2016 => Kongeparken => Sesongansatt (3år)</h3>
                <p>
                    Min første jobb var i Kongeparken. I disse årene lærte jeg mye, spesielt om kundeservice.
                    Jeg har jobbet med mye diverse disse tre årene, spesielt innen Retail.
                    Jeg utfordret meg stadig og utviklet meg selv statig.
                </p>
            </li>
        </ul>
    </div>
    <h3 style="text-align: center;">Ferdigheter</h3>
    <div class="cv-skill-container">
        <div class="cv-skills">
            <ul>
                <li>PhP</li>
                <li>MySql</li>
                <li>Linux</li>
                <li>Python</li>
            </ul>
        </div>

        <div class="cv-skills2">
            <ul>
                <li>Kundeservice</li>
                <li>Administrasjon</li>
                <li>Lean</li>
                <li>Samarbeid</li>

            </ul>
        </div>
    </div>
    <div class ="cv-languages">
        <h4>Språk</h4>
        <p><b>Norsk:</b> Morsmål <b>/</b> <b>Engelsk:</b> Flytende</p>
    </div>
    <div>
        <h3 style ="text-align: center;">Meg</h3>
        <p>
            Jeg har alltid vært interresert i teknologi og datamaskiner. Jeg startet med enkle Python applikasjoner,
            fikk videre en jobb innen systemadministrasjon og support. Med dette året har jeg jobbet i service-industrien i 4 år.
            Jeg er interresert iå lære mer for å kunne hjelpe meg selv og andre.
        </p>
    </div>
</div>
@endsection
