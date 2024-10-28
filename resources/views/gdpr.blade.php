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
            <h2 class="section-title">Politica de colectare și procesare a datelor cu caracter personal</h2>
        </div>
        <div class="content-box">

             <p>Magazinul online "Makeup Shop Daniela", <a href="http://127.0.0.1:8000/"><b>www.makeupshop-daniela.ro</b></a> este operat de S.C. Makeup Shop - Daniela S.R.L, cu sediul la
            nr. 30, Str. Nufărului, Oradea, România, reprezentată legal de către JURCSIK LADISLAU. În conformitate cu legislația aplicabilă în
            domeniul protecției datelor (Legea nr. 677/2001 și Regulamentul (UE) 2016/679), magazinul se angajează să administreze
            și să protejeze datele personale furnizate de utilizatori în condiții de siguranță.</p><br>
            <p><strong>Informații generale:</strong><br>Magazinul online "Makeup Shop Daniela" colectează și prelucrează datele personale ale utilizatorilor în scopuri
            specifice, cum ar fi recepționarea și procesarea comenzilor, expedierea produselor, gestionarea plăților și soluționarea
            reclamațiilor. Datele personale colectate includ nume, adresă completă, număr de telefon,
            adresă de email, și, în cazul persoanelor juridice, informații adiționale cum ar fi datele fiscale și de înregistrare în
            Registrul Comerțului.<br></p><br>
          
            <p><strong>Protecția datelor</strong><br>Magazinul online implementează măsuri tehnice și organizatorice pentru protejarea datelor personale împotriva accesului
            neautorizat sau a utilizării incorecte. Datele sunt stocate și prelucrate conform cerințelor legale, fiind menținute pe
            o perioadă de maxim 72 de luni de la ultima interacțiune cu magazinul, sau conform dispozițiilor legale specifice.
            <br>
            </p><br>
           
            <p><strong>Drepturile utilizatorilor</strong><br>Utilizatorii au dreptul de a accesa, corecta, șterge sau bloca datele personale, de a se retrage din consimțământul
            acordat pentru prelucrarea datelor, de a se opune prelucrării în anumite circumstanțe și de a solicita portabilitatea
            datelor. Pentru exercitarea acestor drepturi, utilizatorii pot contacta magazinul prin diverse modalități precum email,
            telefon sau prin poștă la adresa menționată.<br></p><br>
            <p><strong>Transmiterea datelor personale</strong>
            <br>Datele personale nu sunt transmise către terți decât în situațiile expres prevăzute de lege sau pentru livrarea
            produselor prin companii de curierat. Ele pot fi dezvăluite autorităților competente în conformitate cu prevederile
            legale.
            <br></p><br>
            <p><strong>Concluzie</strong>
                <br>Magazinul online "Makeup Shop Daniela" respectă legislația în vigoare privind protecția datelor personale și oferă
                utilizatorilor săi o gamă largă de drepturi pentru a gestiona și controla modul în care datele lor sunt utilizate.
                Transparența și securitatea sunt priorități în relația cu clienții, asigurându-le acestora un control complet asupra
                informațiilor personale.
                <br>
            </p>
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