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

    .content-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        margin-top: 20px;
    }

    .content-box h3 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
    }

    .content-box p {
        font-size: 1rem;
        line-height: 1.6;
    }

    .content-box ul {
        padding-left: 1.5rem;
    }

    .content-box ul li {
        margin-bottom: 0.5rem;
    }

    .content-box a {
        color: #df136e;
        text-decoration: none;
    }

    .content-box a:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
<div class="checkoutBox">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="section-title">POLITICA DE CONFIDENȚIALITATE</h2>
        </div>
        <div class="content-box">

            <p><strong>Confidențialitatea informațiilor personale ale clienților Makeup Shop - Daniela S.R.L este unul
                    dintre aspectele pe care le tratăm cu cea mai mare seriozitate.</strong></p>
            <p>S.C Makeup Shop - Daniela S.R.L colectează informații prin intermediul site-ului web <a
                    href="http://127.0.0.1:8000/"><b>www.makeupshop-daniela.ro</b></a>, în conformitate cu legislația
                română care face referire la aceste aspecte. Site-ul plasează un "cookie" pe calculatorul vizitatorului,
                ce este utilizat pentru colectarea de informații statistice cu privire la utilizarea siteului nostru și
                la autentificarea automată a clientului.</p>
            <p><strong>Colectarea datelor se face prin:</strong></p>
            <ul>
                <li>Formularul de înregistrare client</li>
                <li>Formularul de comandă</li>
                <li>Formularul de contact</li>
            </ul>
            <p><strong>Datele cu caracter personal colectate prin intermediul siteului sunt folosite pentru:</strong>
            </p>
            <ul>
                <li>Facilitarea comunicării directe și indirecte cu clienții</li>
                <li>Facturarea produselor/ serviciilor comandate de către dumneavoastră</li>
                <li>Livrarea produselor</li>
                <li>Informarea utilizatorilor cu privire la disponibilitatea de stoc a unuia sau mai multor produse</li>
                <li>Informarea utilizatorilor asupra diferitelor oferte/ promoții disponibile</li>
                <li>Informării utilizatorilor privind situația contului, evoluția și starea comenzilor, precum și în
                    evaluarea produselor și serviciilor oferite.</li>
            </ul>
            <p>În conformitate cu prevederile Legii nr. 677/2001 pentru protecția persoanelor cu privire la prelucrarea
                datelor cu caracter personal și libera circulație a acestor date, modificată și completată, Makeup Shop
                - Daniela S.R.L își asumă <strong>obligația de a administra în condiții de siguranță și numai pentru
                    scopurile specificate, datele personale furnizate de utilizatorii siteului nostru</strong>.</p>
            <p><strong>Compania noastră se angajează să nu transmită datele colectate către terți</strong>, cu
                excepțiile situațiilor expres prevăzute de legislația statului Român în vigoare. Astfel, informațiile
                dumneavoastră cu caracter personal pot fi furnizate Parchetului, Poliției, Instanțelor judecătorești sau
                altor organe abilitate ale statului, în baza și în limitele prevederilor legale și ca urmare a unor
                cereri expres formulate.</p>

            <p>În caz de litigiu, se va încerca mai întâi o rezolvare pe cale amiabilă, în termen de 30 de zile
                lucrătoare de la înregistrarea reclamației la sediul MakeupShop - Daniela. În cazul în care după
                trecerea acestui termen nu se ajunge la o înțelegere, litigiul va fi soluționat de către Comisia de
                Arbitraj de pe lângă Camera de Comerț și Industrie a Municipiului Oradea sau de către instanțele de
                judecată competente din Municipiul Oradea.</p>
            <p>Pentru informare și suport, ne puteți contacta la adresa <a
                    href="mailto:contact_makeupshop@gmail.com">contact_makeupshop@gmail.com</a>.</p>
            <p><strong>Toate comunicările în scris vor fi făcute pe adresa:</strong><br>
                <strong>S.C Makeup Shop - Daniela SRL<br>
                    nr. 30, Str. Nufărului, Oradea, România<br>
                    Telefon: +88 1234 56789</strong>
            </p>
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