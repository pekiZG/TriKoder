TriKoder
========

Test I got for TriKoder job application...

// QUOTE
Poštovani,

Nakon pregleda vaše prijave smatramo da posjedujete adekvatno tehničko znanje za pristupanje selekcijskom zadatku nakon čijeg uspješnog rješavanja možete očekivati poziv na razgovor. Sve upute za rješavanje nalaze u samom tekstu zadatka, te u slučaju bilo kakvih nejasnoća slobodno postavljajte onoliko pitanja koliko želite, velik broj pitanja ne smatra se negativnim, dapače. Dodatno želimo napomenuti da ne trebate investirati puno vremena u proizvodnju velike količine koda jer nam je najvažniji kriterij za ocjenu uspješnosti rješenja upotrijebljena arhitektura i struktura koda, dok funkcionalnosti korisničkog sučelja smatramo nevažnim.

U nastavku slijedi zadatak:
 
 
Sva eventualna pitanja kao i rješenja trebaju se uputiti na e-mail zadatak@trikoder.net, dakle ne reply na ovaj mail.
 
 
PRAVILA
·         iz rješenja zadatka najbitnije je vidjeti poznavanje objektno orijentiranog dizajna / arhitekture,
·         zadatak ne smijete rješavati upotrebom nekog php frameworka,
·         potrebno je u satima procijeniti vrijeme rješavanja zadatka i procjenu poslati prije nego počnete rješavati (zadatak@trikoder.net),
·         nakon što završite zadatak, uz rješenje je potrebno poslati i stvarno utrošeno vrijeme,
·         ukoliko bilo što nije jasno – pitajte (zadatak@trikoder.net).
 
ZADATAK
·         potrebno je izraditi objektni model koji implementira sljedeće:
o    3 različita tipa proizvoda,
§  automobil, troši određene tipove goriva i ulja
§  gorivo
§  ulje
o    svaki proizvod ima svoje atribute (npr. naziv, cijena...),
o    svaki automobil ima listu vezanih proizvoda prema gore navedenim pravilima.
·         kao ilustraciju objektnog modela potrebno je implementirati sučelje koje ispisuje listu svih proizvoda pohranjenih u bazi podataka gdje je svaki naziv proizvoda u listi istovremeno i link na detailview tog proizvoda. Sam detailview je također potrebno implementirati i isti treba samo ispisati sve dostupne podatke o konkretnom proizvodu. Važno je napomenuti da je prezentacijski sloj aplikacije obavezno odvojiti od logičkog (modela).
 
·         rješenje mora sadržavati:
o    SQL - dump baze na kojoj ste radili,
§  naredbe za kreiranje baze i pripadajućih tablica,
§  insertovi za testne podatke (max 5 proizvoda za svaki tip).
o    PHP
§  data sloj koji omogućava CRUD funkcionalnost,
§  prikaz liste proizvoda sa vezanim proizvodima,
§  prikaz detailviewa proizvoda uključujući i pripadajuće vezane proizvode.
o    HTML
§  prikaz liste svih proizvoda,
§  detaljni prikaz proizvoda sa listom vezanih proizvoda,
§  vizualni dizajn se NE ocjenjuje, ali je potrebno logički grupirati sadržaj koristeći div elemente,
§  validacija HTML koda se NE ocjenjuje,

§  aplikacijska logika se ne smije nalaziti u HTML datotekama (potrebno je odvojiti prezentaciju od logike).

 
DODATNI ZADATAK
·         teoretski zadak - nije obavezan,

·         potrebno je skicirati data layer i pojasniti princip rada za sljedeću funkcionalnost:

·         Kalendar događanja za koji vrijedi sljedeće:

o    ponavljanje događaja može biti:
§  dnevno,
§  tjedno,
§  mjesečno,
§  godišnje.
o    tipovi događaja su
§  jednokratni - događaj koje se ne ponavlja,
§  višekratni na određene dane u tjednu,
§  višekratni na određeni dan u mjesecu,
§  višekratni na određeni datum u godini,
o    pojedine događaje je moguće naknadno izmijeniti.
 
Objasniti princip editiranja učestalih događanja, iznimke kao npr. situacije "događaj x se odvija svakog ponedjeljka i četvrtka od 01.05 do 01.10 ali u drugom tjednu 5 mjeseca odvit će se iznimno u utorak".
 
 
Iz rješenja prvog zadatka potrebno je vidjeti poznavanje objektno orijentiranog programiranja i razumijevanja osnovnih objektnih paradigmi poput nasljeđivanja, enkapsulacije i sl. same implementacije konkretnih metoda su od sekundarne važnosti.
 
 
Za sva pitanja i nejasnoće budite slobodni pitati - pitanja ne donose nikakve negativne bodove.
// END QUOTE
