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
            <h2 class="section-title">TERMENI ȘI CONDIȚII</h2>
        </div>
        <div class="content-box">
<p>     Magazinul online disponibil la adresa <a href="http://127.0.0.1:8000/"><b>www.makeupshop-daniela.ro</b></a>, denumit în continuare "Makeup Shop - Daniela", este administrat de S.C. Makeup Shop - Daniela S.R.L, cu sediul social la nr. 30, Str. Nufărului, Oradea, Romania, persoană juridică română înregistrată la Oficiul Registrului Comerțului sub nr. J22/886/2010, având codul de înregistrare fiscală RO2707958. Telefon: +88 1234 56789.</p>

<p>     Prezentul document, denumit în continuare "Termeni și Condiții", reprezintă un contract la distanță și stabilește termenii și condițiile de utilizare și modul de desfășurare a achizițiilor de PRODUSE și SERVICII comercializate prin intermediul magazinului online Makeup Shop Daniela.</p>

<p>     Prin acceptarea Termenilor și a Condițiilor, sunteți, de asemenea, de acord cu Politica de confidențialitate, precum și cu toate celelalte documente menționate în cuprinsul prezentului document.</p>
<br>
<p>     S.C. Makeup Shop - Daniela S.R.L își rezervă dreptul de a modifica în orice moment Termenii și Condițiile. Orice modificări aduse Termenilor și Condițiilor vor intra în vigoare numai pentru comenzile noi, înregistrate după publicarea modificărilor respective pe acest site web. Vă rugăm să citiți Termenii și Condițiile înainte de fiecare COMANDĂ, deoarece este posibil să fi intervenit modificări de la ultima vizită.</p>

<p>     S.C. Makeup Shop - Daniela S.R.L depune eforturi pentru menținerea corectitudinii informațiilor afișate pe magazinul nostru online. Cu toate acestea, având în vedere posibile erori cu privire la aceste informații, precizăm că imaginile PRODUSELOR au caracter informativ, iar PRODUSELE livrate pot diferi de imaginile de prezentare, datorită modificării caracteristicilor, designului, fără notificare prealabilă din partea producătorilor. De asemenea, unele caracteristici sau prețul PRODUSELOR prezentate pe site pot fi modificate fără preaviz sau pot conține erori de operare.</p>

<p>     Promoțiile și ofertele prezente pe magazinul nostru online sunt valabile în limita stocului disponibil. Promoțiile care rulează pe magazinul online Makeup Shop Daniela nu se cumulează cu alte promoții/programe speciale de discount.</p>
<br>
<p>     Dacă aveți orice întrebări cu privire la Termenii și la Condițiile de utilizare Makeup Shop Daniela, vă rugăm să ne contactați pe email la <a href="mailto:contact_makeupshop@gmail.com">contact_makeupshop@gmail.com</a> sau la numărul de telefon: +88 1234 56789</p>
<br>
<p><strong>1. DEFINIREA TERMENILOR UTILIZAȚI</strong></p>

<ul>
    <li><strong>UTILIZATOR:</strong> persoana care accesează magazinul nostru online, în scopuri private sau profesionale și care a acceptat Termenii și Condițiile de utilizare Makeup Shop Daniela prin finalizarea procesului de înregistrare.</li>
    <li><strong>CLIENT:</strong> acel utilizator care inițiază și finalizează o COMANDĂ pe <a href="http://127.0.0.1:8000/"><b>www.makeupshop-daniela.ro</b></a>.</li>
    <li><strong>VÂNZĂTOR:</strong> S.C. Makeup Shop - Daniela S.R.L</li>
    <li><strong>UTILIZARE ABUZIVĂ:</strong> utilizarea magazinului nostru online într-un mod contrar practicii în domeniu, a reglementărilor sau prevederilor legislației în vigoare sau în orice alt mod care poate produce prejudicii companiei noastre sau celorlalți utilizatori.</li>
    <li><strong>COMANDĂ:</strong> document electronic generat ca urmare a accesării magazinului online de către un CLIENT, ce intervine ca formă contractuală între S.C. Makeup Shop - Daniela S.R.L și acesta din urmă.</li>
    <li><strong>CONTRACT:</strong> o COMANDĂ confirmată de către S.C. Makeup Shop - Daniela S.R.L prin care suntem de acord să livrăm CLIENTULUI PRODUSELE solicitate de acesta, iar CLIENTUL este de acord să efectueze plata acestora.</li>
    <li><strong>REVIEW:</strong> o evaluare scrisă de către deținătorul sau beneficiarul unui produs sau serviciu, evaluare redactată pe baza experienței personale și capacității acestuia de a realiza comentarii calitative și de a spune dacă produsul sau serviciul respectă sau nu specificațiile menționate de către producător.</li>
    <li><strong>NOTĂ/RATING:</strong> modalitate de exprimare a gradului de satisfacție a unui UTILIZATOR/CLIENT/CUMPĂRĂTOR față de un produs, sub forma de stele.</li>
  
    <li><strong>ÎNTREBARE:</strong> formulă de adresare către alți UTILIZATORI/CLIENȚI/CUMPĂRĂTORI cu scopul de a obține informații despre produsele sau serviciile din pagina respectivă.</li>
    <li><strong>RĂSPUNS:</strong> informație scrisă care este transmisă UTILIZATORILOR/CLIENȚILOR/CUMPĂRĂTORILOR care a adresat o Întrebare în Site, în pagina unui anumit produs.</li>
    <li><strong>DOCUMENT:</strong> prezentele Termene și Condiții.</li>
    <li><strong>NEWSLETTER:</strong> mijloc de informare periodic, exclusiv electronic, asupra Bunurilor și Serviciilor și/sau a promoțiilor desfășurate de VÂNZĂTOR într-o anumită perioadă.</li>
    <li><strong>ZILE:</strong> în cazul în care nu este stipulat altfel, termenul zile face referire la zile lucrătoare.</li>
</ul>
<br>
<p><strong> UTILIZATORII site-ului</strong> <a href="http://127.0.0.1:8000/"><b>www.makeupshop-daniela.ro</b></a> sunt rugați să citească cu atenție Termenii și Condițiile de utilizare ce guvernează desfășurarea tuturor operațiunilor și a raporturilor între părți, acestea fiind considerate prevederi minime aplicabile ce se adaugă prevederilor legislației românești în vigoare. Termenii și condițiile pot fi modificate oricând prin actualizarea conținutului acestui document, aceste modificări devenind obligatorii cu efect imediat pentru toți UTILIZATORII.</p>
 <br><p><strong> Accesul și restricțiile:</strong><br>Orice client poate plasa o comandă. Compania își rezervă dreptul de a restricționa accesul sau anumite modalități de plată în cazul în care comportamentul clientului perturbă activitățile magazinului sau afectează alți clienți.</p>
    <br>   <p><strong> Confirmarea comenzii:</strong><br>Prin plasarea unei comenzi, clientul este de acord să fie contactat și să primească confirmare electronică. O comandă neconfirmată nu constituie contract, iar acesta intră în vigoare doar la confirmarea electronică.</p>
    <br> <p><strong> Obiectul și prețul contractului:</strong><br>Produsele comandate sunt cele specificate pe site. Prețurile pot fi modificate fără preaviz, cu excepția comenzilor confirmate. Orice eroare în preț va fi comunicată clientului pentru a decide reconfirmarea sau anularea comenzii.</p>
<br> <p><strong> Modalități de livrare: </strong><br>Comenzile cu detalii identice de livrare sunt unite. Clientul trebuie să achite în avans pentru comenzile neridicate anterior. Livrarea se face prin curierat rapid, iar clientul preia riscurile de la semnarea documentelor de livrare.</p>
    <br> </div>
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
                            <p>Creat de <a href="http://127.0.0.1:8000/" rel="nofollow">Hebristean Daniela Giorgiana
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