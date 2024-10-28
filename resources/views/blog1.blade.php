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
            <h2 class="section-title">8 cadouri minunate de make-up, care nu vor goli portofelul</h2>
            <p>25.05.2024</p>
            <a href="/">Hebriștean Daniela</a>
            <p>Citire timp de 4 minute</p>
        </div>
        <div class="content-box">
            <br>
            <p>Aveți multe prietene cu care faceți schimb de cadouri sau doriți să vă surprindeți soacra, dar nu vreți
                să coste o avere? Sau organizați Secret Santa la muncă și ați tras la sorți o colegă de care nu sunteți
                prea apropiată? Vă sfătuim cum să le faceți o bucurie și să nu cheltuiți prea mult.</p>
            <p>Alegerea produselor de machiaj pentru cadouri nu este o sarcină ușoară. Dacă aveți un buget limitat, avem
                8 sugestii excelente de cadouri care vor aduce bucurie tuturor. Și nu uitați să vă faceți și
                dumneavoastră un cadou!</p>
            <br>
            <p>Nu puteți dărui mamei soacre sau unei prietene bețișoare de bumbac pentru urechi. Cu siguranță însă, se
                vor bucura pentru urmatoarele produse din magazinul nostru:</p>
            <br>
            <h3>Pudra de Setare</h3>
            <p>Ajută la fixarea machiajului și la reducerea luciului feței. Este ideală pentru a păstra fondul de ten
                intact întreaga zi și pentru a oferi un finisaj mat, catifelat. Pudra de setare minimizează porii și
                liniile fine, conferind un aspect neted și uniform tenului.</p>

            <br>
            <h3>Fond de Ten</h3>
            <p>Un produs esențial pentru a crea o bază uniformă și a ascunde imperfecțiunile. Fondul de ten oferă
                acoperire variabilă, de la medie la mare, și poate avea diverse finisaje, cum ar fi mat, satinat sau
                luminos. Este formulat pentru a se potrivi diferitelor tipuri de piele, de la uscată la grasă, asigurând
                un aspect natural și sănătos.</p>

            <br>
            <h3>Paleta pentru Contur/Bronzer/Iluminator</h3>
            <p>Un trio indispensabil pentru sculptarea și evidențierea trăsăturilor feței. Bronzerul adaugă căldură și
                definiție, conturul ajută la modelarea feței, iar iluminatorul adaugă strălucire și luminozitate.
                Această paletă versatilă este perfectă pentru a crea un look sofisticat și radiant.</p>

            <br>
            <h3>Paleta Corectoare</h3>
            <p>Conține nuanțe corectoare pentru a neutraliza imperfecțiunile, cum ar fi roșeața, cearcănele și petele
                pigmentare. Fiecare nuanță are un scop specific: verde pentru roșeață, lavandă pentru tonuri galbene,
                piersică pentru cearcăne. Paleta corectoare este esențială pentru un ten uniform și fără cusur.</p>

            <br>
            <h3>Spray de Fixare a Machiajului</h3>
            <p>Prolongă durata machiajului și previne estomparea acestuia. Spray-ul de fixare creează un strat
                protector, menținând machiajul proaspăt și vibrant pe parcursul întregii zile. Este ideal pentru toate
                tipurile de piele și adaugă un plus de hidratare și confort.</p>
            <br>
            <h3>Paleta Colorată de Farduri</h3>
            <p>Paleta colorată de farduri este perfectă pentru cei care iubesc să experimenteze și să creeze look-uri
                îndrăznețe. Aceasta include: nuanțe vibrante, texturi diverse și un ambalaj practic.</p>

            <br>
            <h3>Paleta Nude de Farduri</h3>
            <p>Paleta nude de farduri este un must-have pentru iubitorii de machiaj natural și sofisticat. Aceasta
                include: nuanțe neutre, texturi catifelate și longevitate.</p>
            <br>
            <h3>Rimel</h3>
            <p>Rimelul este un produs esențial pentru orice trusă de machiaj, oferind gene lungi și voluminoase.
                Beneficii includ: volum și definiție, rezistență la apă și incrediente hrănitoare. </p>
            <br>
            <footer>
                <p>Așadar, care dintre sugestiile noastre pentru cadouri care nu costă mult vi s-au părut cele mai
                    interesante? Cunoașteți preferatele noastre, așa că vă dorim o alegere liniștită!</p>
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