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
            <h2 class="section-title">Și rujul are ziua lui! Sărbătoriți-o și cumpărați-vă un ruj frumos</h2>
            <p>28.05.2024</p>
            <a href="/">Hebriștean Daniela</a>
            <p>Citire timp de 4 minute</p>
        </div>
        <div class="content-box">
            <br>
            <p>Rujul. Singurul produs cosmetic care a trecut proba timpului, în această lume cu tendințe în continuă
                schimbare! De la începuturile sale umile până la popularitatea sa actuală, rujul a devenit un simbol al
                stimei de sine și al autoexprimării și un accesoriu de înfrumusețare deosebit de popular. Vreți să
                aflați de ce?</p>

            <br>
            <h2>Rujul</h2>
            <br>
            <p>Rujul are capacitatea uimitoare de a vă înnobila instantaneu aspectul și de a vă propulsa stima de sine
                până la ceruri. Este suficient un singur gest, pentru a sublinia frumusețea naturală și a adăuga un nou
                element de farmec personal. Indiferent dacă purtați un ruj intens și îndrăzneț, care atrage atenția, sau
                o nuanță nude discretă, pentru o doză de bună dispoziție, ambele vă ajută să vă exprimați personalitatea
                și stilul. Vă dau senzația că puteți gestiona toate provocările actuale ale vieții.</p>
            <br>
            <h3>Rujul nu mai este de mult un simplu produs de frumusețe. Este un mijloc important de autoîngrijire și de
                autoexprimare.</h3>


            <br>
            <p>Prin accentuarea buzelor, vă puneți în valoare frumusețea și, în plus, vă acceptați individualitatea,
                sărbătorind totodată diversitatea. Este simbolul puterii și al stimei de sine. Rujul vă reamintește că
                frumusețea nu înseamnă a accepta constrângerile normelor sociale, ci o cale personală spre iubirea de
                sine și spre acceptarea propriei individualități.</p>

            <br>
            <h3>Care sunt tendințele 2024 în materie de rujuri</h3>
            <ul>Revine luciul – după ani de buze mate și uscate, acum revin luciurile de buze și rujurile lucioase, care
                nu lipesc.</ul>
            <ul>Revine și sclipiciul – un alt trend popular al anilor 90! Rujurile metalice și sclipitoare sunt must
                have în 2024!</ul>

            <br>

            <p>Rujul din poșeta noastră nu este o invenție modernă, deși uneori poate lăsa această impresie. Oamenii îl
                foloseau deja
                din vremea civilizațiilor antice. Era produs din ingrediente naturale, cum ar fi pietre prețioase
                măcinate, fructe și
                chiar insecte.

                Vechii egipteni foloseau un amestec de ocru roșu și grăsime animală, în timp ce vechii greci și romani
                preferau să-și
                coloreze buzele cu sucuri din fructe de pădure și extracte din plante. Rujul a evoluat în decursul
                secolelor și, odată
                cu dezvoltarea tehnicilor de producție, au apărut noi nuanțe, texturi și finisaje.</p>

            <br>
            <h3>Sfatul nostru</h3>
            <p>Puteți controla intensitatea rujului în funcție de modul de aplicare – cu pensula sau direct obțineți
                intensitatea maximă. Dacă îl aplicați însă cu o pensulă deasă și îl tapotați cu degetul, puteți purta și
                un ruj roșu care, inițial, vi s-a părut prea tare. Intensitatea nuanței va fi atenuată și va arăta
                minunat!</p>
            <br>
            <p>Buzele accentuate au jucat și ele un rol semnificativ în diverse contexte culturale și sociale. De-a
                lungul istoriei,
                diverse societăți au adoptat rujul ca simbol al statutului social, al senzualității și chiar al
                rebeliunii. În unele
                culturi, precum tribul Masai din Africa, pictarea buzelor este o practică tradițională, cu semnificație
                culturală și
                spirituală. În secolul al XX-lea, rujul a devenit un simbol al eliberării femeilor, odată cu adoptarea
                acestuia de
                mișcarea sufragetelor și de starurile de la Hollywood.</p>

            <br>

            <br>
            <footer>
                <p>Cu ce ruj veți sărbători Ziua Internațională a Rujului?</p>
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