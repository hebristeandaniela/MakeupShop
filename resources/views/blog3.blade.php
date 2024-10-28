@extends('layouts.frontend')

@section('styles')
<style>
    .checkoutBox {
        background: #fffaf6;
        margin-top: 85px;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1.5rem;
    }

    h2 {
        font-size: 6px;
        color: #333;
        margin-bottom: 10px;
    }


    h3 {
        font-size: 4px;
        color: #333;
        margin-bottom: 10px;
    }

    p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    a {
        color: #ff6347;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    footer {
        text-align: center;
        padding: 20px;
        border-top: 2px solid #eee;
    }

    footer p {
        margin: 0;
        color: #777;
    }
</style>
@endsection

@section('content')
<div class="checkoutBox">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="section-title">5 idei de machiaj de ochi care rezistă perfect zi și
                noapte</h2>
            <p>10.06.2024</p>
            <a href="/">Hebriștean Daniela</a>
            <p>Citire timp de 4 minute</p>
        </div>
        <div class="content-box">
            <br>
            <p>Dintre toate zonele feței, ochii sunt cel mai greu de machiat. Aplicarea fardurilor și a pigmenților și
                conturarea cu tuș constituie o artă pe care make-up artiștii o studiază cu anii. Noi am notat cele mai
                importante sfaturi pentru un machiaj de ochi precis, care să reziste perfect.</p>
            <p>
                Oricine știe să-și aplice fardul de pleoape în stil propriu. Deprinderea unei aplicări corecte nu este
                însă atât de simplă. Ce se poate face pentru ca fardul să reziste nemișcat întreaga zi? Vreți să
                străluciți și după o noapte de dans? Uitați-vă la cele cinci sugestii pe care vi le-am pregătit!</p>
            <br>
            <h2>1. Niciodată fără pensulă</h2>
            <br>
            <p>Dacă apelați la un make-up artist profesionist, nu vă va farda ochii cu degetele, ci va folosi cu
                siguranță pensule de
                b ună calitate. Adevărul este că nu vă puteți farda ochii corect, fără o pensulă de bună calitate (sau
                mai degrabă tr
                e i). Echipați-vă trusa de cosmetice cu câteva pensule pentru ochi de bună calitate și veți vedea că
                machiajul devine m
                ult mai ușor.</p> <br>
            <h3>2. Baza este... de bază</h3>


            <br>
            <p>Știți să vă machiați pleoapele perfect, dar, în câteva ore, fardurile se întind și nu mai arată bine?
                Probabil că ați subestimat pregătirea. Dacă nu aveți pleoapele prea grase, este suficient să aplicați pe
                toată suprafața pleoapei un corector, urmat de o pudră. </p>
            <p>Astfel, fardurile de ochi vor avea la ce să adere și vor rezista. Dacă nici aceasta nu ajută, folosiți o
                bază de machiaj pentru fard de pleoape. Atenție însă, această bază se folosește în cantitate foarte
                mică, altfel efectul va fi unul contrar și fardul se va întinde peste tot.</p>
            <br>
            <h3>3. Priviți înainte</h3> <br>
            <p>Pleoapele ferme și tinerești sunt un mare atu. Puteți închide ochii, să vă pictați pleoapele cum doriți
                și, când îi redeschideți, toate sunt la locul lor. Dar, dacă aveți pielea ofilită sau pleoapele lăsate,
                este posibil ca farmecul machiajului să se piardă când deschideți ochii.
                <br>
                De aceea este de preferat să trasați totul în prealabil, având ochiul deschis – tuș, contur de ochi...
                Veți vedea imediat cum să vă umbriți pleoapele pentru ca fardul să se vadă sau cum să trasați linia de
                tuș astfel încât să fie înclinată sub un unghi adecvat.
            </p>


            <br>
            <h3>4. Străluciri orbitoare</h3> <br>
            <p>Aveți ochii obosiți? Ați plâns toată noaptea? Sau, din contră, ați petrecut toată noaptea și trebuie să
                pretindeți că
                ați dormit foarte bine? Acest truc vi se potrivește ca o mănușă. După ce ați folosit corectorul și
                pudra, aplicați pe
                pleoapă un strat de fard foarte deschis, într-o nuanță apropiată de cea a pielii.
                <br>
                Orice nuanță veți aplica peste aceasta va fi mai intensă și va ilumina ochiul. Desenați pe linia
                lacrimală un contur,
                folosind un creion pentru ochi de culoare albă sau apropiată de cea a pielii. Ochiul se va mări optic și
                orice înroșire
                sau semne de oboseală (cel puțin cele vizibile) vor dispărea.
            </p> <br>
            <h3>5. Un clește pentru fiecare familie</h3> <br>
            <p>Știm cu toții că răsucirea genelor cu cleștele deschide minunat ochiul. Mai avem pentru dvs. încă un mic
                truc. Când credeți că ați curbat deja bine genele, răsuciți și mai mult încheietura și strângeți din
                toate puterile. Nu deschideți cleștii, ci doar slăbiți și întăriți apăsarea. Veți vedea că puteți face
                minuni, chiar și cu gene mai scurte. Și, bineînțeles, nu aveți voie să uitați de multiplele straturi de
                rimel. </p>

            <br>

            <br>
            <footer>
                <p>Încercați? Ar trebui! Pentru că, la machiajul ochilor, toate acestea chiar funcționează.</p>
            </footer>







        </div>
    </div>
    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-50 pb-50">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="http://127.0.0.1:8000/">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="mt-10">Descoperă machiajele perfecte pentru tine! Explorează colecția noastră și
                                creează-ți un look perfect!</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="footer-link mt-50 pl-40">
                            <h5 class="f-title">Meniu</h5>
                            <ul>
                                <li><a href="http://127.0.0.1:8000/">Acasă</a></li>
                                <li><a href="http://127.0.0.1:8000/#product">Produse</a></li>
                                <li><a href="http://127.0.0.1:8000/#service">Servicii</a></li>
                                <li><a href="http://127.0.0.1:8000/#showcase">Portofoliu</a></li>
                                <li><a href="http://127.0.0.1:8000/#team">Echipa</a></li>
                                <li><a href="http://127.0.0.1:8000/#blog">Blog</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="footer-link mt-50 pl-40">
                            <h5 class="f-title">Informații</h5>
                            <ul>
                                <li><a href="http://127.0.0.1:8000/help">Confidențialitate</a></li>
                                <li><a href="http://127.0.0.1:8000/termeni&conditii">Termeni și condiții</a></li>
                                <li><a href="http://127.0.0.1:8000/gdpr">GDPR</a></li>
                                <li><a href="http://127.0.0.1:8000/#contact">Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title"><i class="lni lni-map-marker"></i> Locația Noastră</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2719.250496591659!2d21.9454190359631!3d47.03531520107691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDfCsDAyJzA3LjQiTiAyMcKwNTYnNTEuOSJF!5e0!3m2!1sro!2sro!4v1713623000908!5m2!1sro!2sro"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Creat de <a href="http://127.0.0.1:8000/" rel="nofollow">Hebriștean Daniela Giorgiana
                                    Teodora</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
</div>

@endsection