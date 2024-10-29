<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Implementarea unei aplicații e-commerce folosind LARAVEL

#### 1. Pagina Principală
Pagina principală este concepută pentru o experiență de navigare plăcută și eficientă. Vizitatorii sunt întâmpinați de un carusel dinamic cu imagini de oferte speciale și reduceri. Aceasta include și o prezentare a serviciilor oferite de magazin și câteva produse recomandate, pentru a stimula explorarea.
![image](https://github.com/user-attachments/assets/3ebee04a-292c-4b48-b205-49dc815a4a24)

#### 2. Colecția de Produse
Produsele sunt organizate pe categorii (ten, buze, gene, accesorii, ochi), facilitând găsirea rapidă a articolelor dorite. Utilizatorii pot adăuga produsele direct în coșul de cumpărături, optimizând procesul de achiziție.
![image](https://github.com/user-attachments/assets/33fc132a-cabd-4c87-8d14-214f31d36df0)

#### 3. Serviciile Magazinului
Această secțiune evidențiază varietatea și calitatea produselor, ofertele speciale și experiența de încredere pe care magazinul o oferă clienților săi, subliniind avantajele esențiale pentru o experiență de cumpărare de înaltă calitate.
![image](https://github.com/user-attachments/assets/b396dde8-c98e-4df7-bbb9-504dcfbe0551)

#### 4. Portofoliu
![image](https://github.com/user-attachments/assets/baf97d3e-d187-482a-8eed-8a78aee72f28)

#### 5. Echipa Magazinului
Secțiunea prezintă echipa din spatele magazinului, oferind o notă personală și de încredere prin fotografii, nume, funcții și link-uri către rețelele lor de socializare.
![image](https://github.com/user-attachments/assets/4e87b5be-fbe4-4786-866e-8d7f215f5e25)

#### 6. Recenzii și Testimoniale
O secțiune dedicată recenziilor autentice ale clienților mulțumiți, care includ testimoniale și un video tematic. Acest element întărește încrederea clienților în calitatea produselor și a serviciilor.
![image](https://github.com/user-attachments/assets/ba6ac4f4-81db-4115-9dbb-a7a48d975cfe)

#### 7. Blogul de Machiaj și Îngrijire
Blogul oferă sfaturi utile și articole despre machiaj, îngrijire personală și ultimele tendințe, contribuind la educarea și inspirarea clienților.
![image](https://github.com/user-attachments/assets/54f05f75-978c-41e8-a3e8-ec289ca05fff)

#### 8. Formularul de Contact
Un formular simplu și intuitiv care permite utilizatorilor să trimită întrebări, solicitări speciale sau feedback, facilitând comunicarea directă cu echipa magazinului.
![image](https://github.com/user-attachments/assets/36377094-4aef-4607-bf80-3674a483c39e)
![image](https://github.com/user-attachments/assets/f8bd8f19-a383-4b66-90e9-f9388da37466)

 Pagina de login facilitează autentificarea și înregistrarea utilizatorilor, iar pagina de finalizare a cumpărăturilor asigură un proces de checkout simplu și intuitiv. Toate aceste componente sunt susținute de o bază de date gestionată prin phpMyAdmin, care permite stocarea și administrarea eficientă a datelor despre produse, utilizatori și comenzi.
![image](https://github.com/user-attachments/assets/7a9dd65c-18c9-4351-99a4-331e2461f140)

 #### Procesarea platilor
 Acum că utilizatorul a vizualizat pagina și a putut să adauge în coș produsele dorite, este timpul să poată să achite produsele. Am integrat un buton cu o iconiță de coș de cumpărături, unde utilizatorul poate da click pentru a fi redirecționat către pagina de plată. În dreptul iconiței, se afișează numărul actualizat al produselor din coș, așa cum este exemplificat în figura de mai jos: 
 
 ![image](https://github.com/user-attachments/assets/e69d2c93-2ba0-41c1-953e-1c26ca4ea822)
 
Pentru realizarea pagini de plată am folosit o componentă Vue.js, pentru care am definit un template ilustrat în figura de mai jos. Primul pas a fost afișarea produselor aflate în coș cât și 
cantitatea alături de preț. Al doilea pas a fost afișarea unui rezumat de comandă, calculând prețul total.
![image](https://github.com/user-attachments/assets/aa3e4428-f26c-4f42-b248-ec1d182a0d94)

Odată afișate produsele utilizatorului, acesta poate trece la realizarea achiziției. Pentru posibilitatea livrării unei comenzi, utilizatorul trebuie să introducă datele sale personale, cum ar fi: țara, prenume, nume, adresa personală, oraș, județ, cod poștal, număr de telefon, adresă de e-mail. Aceste date vor fi stocate în tabelul „Processings”, pentru ca persoana responsabilă cu livrarea produselor să poată vedea cine a cumpărat produsele, ce produse a cumpărat, cantitatea și prețul acestora. Utilizatorul va alege metoda de livrare (Cargus, Fan Curier sau Sameday), după care va alege metoda de plată (cash sau card).

![image](https://github.com/user-attachments/assets/9a488321-7be4-4b0a-8b34-8d2e515e638e)

Odată ce utilizatorul apasă butonul de plasare comandă, începe procesul de confirmare 
a plății. Verificăm dacă utilizatorul a introdus toate informațiile necesare: prenumele, numele, adresa, orașul, județul, codul poștal, emailul, telefonul și țara. Dacă oricare dintre aceste informații lipsește, utilizatorul va primi un mesaj de eroare. Dacă toate datele furnizate sunt corecte, se procedează la procesarea plății. 
În cazul plății cash, sistemul va afișa un mesaj de succes sau eroare. Dacă plata este realizată cu succes, se vor șterge produsele din coșul de cumpărături al clientului. Acest lucru se realizează printr-o metodă care verifică dacă procesul de plată a fost finalizat cu succes și care se ocupă de eliminarea produselor din coș.
Dacă utilizatorul alege plata cu cardul, va fi redirecționat către o pagină găzduită de Stripe. În partea stângă a paginii sunt afișate produsele din coș cu toate detaliile comenzii, iar în partea dreaptă utilizatorul trebuie să introducă emailul, informațiile despre card (numărul cardului, data de expirare și codul CVV), numele titularului cardului, țara/regiunea. 
După apăsarea butonului "Plătiți", se va deschide o pagină de succes sau eroare pe site-ul nostru, în funcție de rezultatul plății.
![image](https://github.com/user-attachments/assets/1405eaf1-5243-442c-82a2-2f7799542fae)



#### Interfața pentru administrator
Am implementat o interfață dedicată pentru administratorul magazinului online. Această interfață oferă administratorului acces complet la baza de date și la toate funcționalitățile esențiale pentru gestionarea eficientă a magazinului. Administratorul poate adăuga, edita și șterge produse, inventar, asigurându-se că oferta magazinului este mereu actualizată. De asemenea, poate gestiona comenzile efectuate de clienți, având posibilitatea de a le șterge sau de a le marca ca plătite. Pe lângă gestionarea produselor și a comenzilor, administratorul are acces la informațiile tuturor utilizatorilor înregistrați, putând 
astfel să monitorizeze activitatea acestora.
![image](https://github.com/user-attachments/assets/b0519ca9-e827-4432-8aa9-fe45143226a0) 
Administratorul poate genera rapoarte detaliate pe baza datelor selectate de el, filtrând informațiile în funcție de data dorită. Mai mult, interfața permite administratorului să personalizeze magazinul prin schimbarea numelui și a altor informații relevante.
![image](https://github.com/user-attachments/assets/17220430-5a7c-4f1a-8cbf-08f0afa54d8c)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# MakeupShop

