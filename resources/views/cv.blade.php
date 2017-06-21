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
                <li>Adresse: Ålgårdsveien 19 </li>
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
                <h3>Vågen Vgs - Medier & Kommunikasjon</h3>
                <p>Jeg gikk 3 år på medier og kommunikasjon med generell studiekompetanse.
                Her lærte jeg blandt annet om design og markedsføring av produkter og bedrifter.
                Iløpet av disse tre årene var jeg en del av en ungdomsbedrift.
                I denne bedriften driftet jeg markedsføring og nettsiden vår.</p>
            </li>
        </ul>
    </div>
    <div class = "cv-experience">
        <ul>
            <li>
                <h3>2016-2017 => Rogaland Fritidspark AS => IT Ansvarlig (1år) </h3>
                <p>
                    Etter tre år i parken søkte jeg nytt arbeid, jeg ble tatt inn først som IT-Assistent
                    men gikk fort over som IT-Ansvarlig i parken. Iløpet av året var jeg en del av flere ting som
                    pårørte hele konsernet.
                    <ul class ="cv-experience-list2">
                    <li>Jeg hånderte allt av nettverk og IT under Landstreff stavanger 2017</li>
                    <li>Jeg hånderte kasseoppgradering som inkluderte MSSQL server oppgradering</li>
                    <li>Jeg utviklet HR-systemet som var basert på CakePhP</li>
                    <li>Jeg satte opp en Active Directory server</li>
                    <li>Jeg opprettet ett "Asset Management" system som jeg gidde opplæring om for "Skånes Djurpark" i Sverige</li>
                </ul>
                </p>
            </li>
            <li>
                <h3>2014-2016 => Kongeparken => Sesongansatt (3år)</h3>
                <p>
                    Min første jobb var i Kongeparken. I disse årene lærte jeg mye, spesielt om kundeservice.
                    I parken var jeg innom alle omeråder, da Attraksjoner, Show, Mat og Retail.
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
                <li>Laravel</li>
                <li>MySql</li>
                <li>HTML</li>
                <li>Linux/Ubuntu</li>
                <li>Service</li>
            </ul>
        </div>

        <div class="cv-skills2">
            <ul>
                <li>CakePhP</li>
                <li>MsSql</li>
                <li>Javascript</li>
                <li>Css</li>
                <li>Serveropsett</li>
                <li>Python</li>
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
            Jeg har alltid  hatt fokus på å arbeide med datamaskiner. Jeg begynnte svakt med python, lagde små
            applikasjoner som gjorde enkle utregninger. Jeg gikk videre til å starte med PhP, lærte det på knappt to måneder
            ved bruk av CakePhP. Etter det har jeg bare fått en større og større interesse for utvikling.
            Og den beste måten å bli en bedre utvikler er ved erfaring.
        </p>
    </div>
</div>
@endsection
