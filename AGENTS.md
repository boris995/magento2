Ti si iskusan Magento 2 backend i frontend developer koji radi na specifičnom projektu za prodaju fudbalskih dresova. Tvoj zadatak je da striktno pratiš i dopunjuješ postojeći fajl `AGENTS.md`.

### KLJUČNA PRAVILA ZA RAD (STRIKTNO SE PRIDRŽAVAJ):
1. **Dnevnik rada u `AGENTS.md`:** Tvoj primarni zadatak pre, tokom i nakon svake izmene jeste ažuriranje fajla `AGENTS.md`. Sve dopune i dnevnik rada u ovom fajlu MORAJU biti pisani na srpskom jeziku pod sekcijom `## Dnevnik Rada (Log)`.
2. **Struktura dnevnika:** Za svaki korak dokumentuj:
   - **Status:** (Npr. U toku, Završeno, Planirano)
   - **Opis zadatka:** Šta tačno radiš (U skladu sa trenutnim fokusom).
   - **Izmenjeni fajlovi:** Spisak kreiranih/izmenjenih fajlova isključivo unutar teme `app/design/frontend/Boris/JerseyStore`.
   - **Sledeći koraci:** Šta se radi odmah nakon toga.
3. **Magento 2 & Tailwind v4 pravila:** - Nikada ne menjaj `vendor/`, `pub/static/` ili `generated/`.
   - Nakon svake izmene CSS-a obavezno pokreni: `npm run build-prod` unutar foldera teme, a zatim `php bin/magento cache:flush` u root-u Magento instalacije.
4. **Rad po koracima:** Trenutno radimo isključivo na frontend prikazu kategorija i proizvoda (Product Listing Page i Product Detail Page). Ignoriši kompleksne varijacije i prevode na 7 jezika za sada – to radimo u kasnijim fazama.

---

### TRENUTNI ZADATAK I FOKUS:
Fokusiramo se na razvoj čistog frontenda za kategorije i produkte (klasičan webshop prikaz) prateći tvoj "Development Priority".

1. **Product Listing Page (PLP):** Prikaz kategorija (Club Jerseys, National Teams, Retro Jerseys, itd.) i mreže proizvoda (Product Grid) koristeći Tailwind v4 i Alpine.js za interaktivnost (npr. brzi filteri).
2. **Product Detail Page (PDP):** Prikaz pojedinačnog proizvoda (slika, naslov, cena, opis). Trenutno se fokusiraj na bazični prikaz prostih (Simple) proizvoda, dok ćemo kompleksne varijacije (veličine, igrači) raditi u sledećem koraku.

---

### KORAK 1 (Tvoj prvi odgovor):
1. Otvori `AGENTS.md` i na dnu fajla kreiraj novu sekciju `## Dnevnik Rada (Log)`.
2. Na srpskom jeziku upiši prvi unos: postavi status na "U toku", opiši da započinješ rad na layout i template fajlovima za Product Listing Page (kategorije) unutar `Boris/JerseyStore` teme.
3. Izlistaj fajlove koje planiraš da kreiraš/izmeniš (npr. `Magento_Catalog/layout/catalog_category_view.xml` i pripadajuće phtml šablone).
4. Predloži mi strukturu koda za prvi korak i sačekaj moju potvrdu pre nego što kreneš sa pisanjem.

Markdown
Ti si iskusan Magento 2 backend i frontend developer koji radi na specifičnom projektu za prodaju fudbalskih dresova. Tvoj zadatak je da striktno pratiš i dopunjuješ postojeći fajl `AGENTS.md`.

### KLJUČNA PRAVILA ZA RAD (STRIKTNO SE PRIDRŽAVAJ):
1. **Dnevnik rada u `AGENTS.md`:** Tvoj primarni zadatak pre, tokom i nakon svake izmene jeste ažuriranje fajla `AGENTS.md`. Sve dopune i dnevnik rada u ovom fajlu MORAJU biti pisani na srpskom jeziku pod sekcijom `## Dnevnik Rada (Log)`.
2. **Struktura dnevnika:** Za svaki korak dokumentuj:
   - **Status:** (Npr. U toku, Završeno, Planirano)
   - **Opis zadatka:** Šta tačno radiš (U skladu sa trenutnim fokusom).
   - **Izmenjeni fajlovi:** Spisak kreiranih/izmenjenih fajlova isključivo unutar teme `app/design/frontend/Boris/JerseyStore`.
   - **Sledeći koraci:** Šta se radi odmah nakon toga.
3. **Magento 2 & Tailwind v4 pravila:** - Nikada ne menjaj `vendor/`, `pub/static/` ili `generated/`.
   - Nakon svake izmene CSS-a obavezno pokreni: `npm run build-prod` unutar foldera teme, a zatim `php bin/magento cache:flush` u root-u Magento instalacije.
4. **Rad po koracima:** Trenutno radimo isključivo na frontend prikazu kategorija i proizvoda (Product Listing Page i Product Detail Page). Ignoriši kompleksne varijacije i prevode na 7 jezika za sada – to radimo u kasnijim fazama.

---

### TRENUTNI ZADATAK I FOKUS:
Fokusiramo se na razvoj čistog frontenda za kategorije i produkte (klasičan webshop prikaz) prateći tvoj "Development Priority".

1. **Product Listing Page (PLP):** Prikaz kategorija (Club Jerseys, National Teams, Retro Jerseys, itd.) i mreže proizvoda (Product Grid) koristeći Tailwind v4 i Alpine.js za interaktivnost (npr. brzi filteri).
2. **Product Detail Page (PDP):** Prikaz pojedinačnog proizvoda (slika, naslov, cena, opis). Trenutno se fokusiraj na bazični prikaz prostih (Simple) proizvoda, dok ćemo kompleksne varijacije (veličine, igrači) raditi u sledećem koraku.

---

### KORAK 1 (Tvoj prvi odgovor):
1. Otvori `AGENTS.md` i na dnu fajla kreiraj novu sekciju `## Dnevnik Rada (Log)`.
2. Na srpskom jeziku upiši prvi unos: postavi status na "U toku", opiši da započinješ rad na layout i template fajlovima za Product Listing Page (kategorije) unutar `Boris/JerseyStore` teme.
3. Izlistaj fajlove koje planiraš da kreiraš/izmeniš (npr. `Magento_Catalog/layout/catalog_category_view.xml` i pripadajuće phtml šablone).
4. Predloži mi strukturu koda za prvi korak i sačekaj moju potvrdu pre nego što kreneš sa pisanjem.
Kako ovo funkcioniše u praksi:
Kada agentu daš ovaj prompt zajedno sa tvojim tekstom iznad, on će na dno tvog postojećeg AGENTS.md fajla dodati sledeću strukturu i nastaviti da radi tačno po njoj:

Markdown
## Dnevnik Rada (Log)

### [2026-06-15] Faza: Frontend Kategorije i Proizvodi
- **Status:** U toku
- **Opis zadatka:** Kreiranje prilagođenog dizajna za Product Listing Page (PLP) i povezivanje sa Tailwind v4.
- **Izmenjeni fajlovi:** - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
- **Sledeći koraci:** Izrada Product Detail Page-a (PDP) za dresove.

## Dnevnik Rada (Log)

### [2026-06-15] Faza: Frontend Kategorije i Proizvodi
- **Status:** U toku
- **Opis zadatka:** Započinjem rad na layout i template fajlovima za Product Listing Page (PLP) za prikaz kategorija i mreže proizvoda unutar `Boris/JerseyStore` teme, uz Tailwind v4 strukturu i pripremu za jednostavne Alpine.js brze filtere.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/toolbar.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/item.phtml`
  - `app/design/frontend/Boris/JerseyStore/web/tailwind/input.css`
  - `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
- **Sledeći koraci:** Predložiti strukturu PLP koda i sačekati potvrdu pre kreiranja ili izmene Magento Catalog layout/template fajlova.

## STATUS IMPLEMENTACIJE PO FEATURE-IMA

### 1. Frontend Kategorije (PLP)
- [x] Završeno 2026-06-15: Implementiran prvi PLP korak kroz `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`, `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`, `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/item.phtml` i `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/toolbar.phtml`.
- [x] Završeno 2026-06-15: Kreiran `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml` za povezivanje category view stranice sa prilagođenim PLP šablonima u temi.
- [x] Završeno 2026-06-15: Kreiran `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml` kao glavni PLP wrapper sa naslovom kategorije, opisom, toolbar zonom i responsive grid prikazom proizvoda.
- [x] Završeno 2026-06-15: Kreiran `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/item.phtml` za karticu proizvoda sa slikom, nazivom, cenom i osnovnim CTA dugmetom.
- [x] Završeno 2026-06-15: Kreiran `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/toolbar.phtml` za osnovnu navigaciju, sortiranje i prikaz broja proizvoda.
- [x] Završeno 2026-06-15: Izgrađen finalni Tailwind CSS u `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css` komandom `npm run build-prod`.
- [x] Završeno 2026-06-15: Pokrenut `php bin/magento cache:flush` iz root foldera Magento instalacije; izmene su rađene u temi `app/design/frontend/Boris/JerseyStore`.

### 2. Frontend Proizvodi (PDP)
- [ ] Kreirati `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_product_view.xml` za povezivanje product view stranice sa prilagođenim PDP šablonima u temi.
- [ ] Kreirati ili izmeniti osnovne PDP šablone unutar `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/` za prikaz slike proizvoda, naslova, cene i kratkog opisa.
- [ ] Pripremiti Tailwind v4 layout za bazične Simple proizvode bez varijacija, personalizacije i višejezičnih tekstova.
- [ ] Dodati osnovne CTA elemente za kupovinu i informacijsku sekciju za dostavu, povrat i sigurnu kupovinu.
- [ ] Nakon PDP izmena pokrenuti `npm run build-prod` u temi i `php bin/magento cache:flush` iz root foldera Magento instalacije.

### 3. Globalna Navigacija i Header
- [x] Završeno 2026-06-15: Modernizovan `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml` sa linkovima ka category stranicama, responsive desktop navigacijom, sticky glass efektom i mobile hamburger menijem sa Tailwind animacijama.
- [x] Završeno 2026-06-15: Nakon izmene header šablona pokrenut `npm run build-prod` u temi i `php bin/magento cache:flush` iz root foldera Magento instalacije; finalni CSS je u `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`.
- [x] Završeno 2026-06-15: Ispravljeni `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml` i `app/design/frontend/Boris/JerseyStore/web/tailwind/input.css` tako da header ima stabilnu visinu, desktop/mobile navigacija bude jasno razdvojena i Magento default link stilovi ne nadjačavaju dizajn.

### [2026-06-15] Faza: Ispravka Header Prikaza
- **Status:** Završeno
- **Opis zadatka:** Ispravljen je premali i nepravilno renderovan header tako što je proverena Tailwind v4 source konfiguracija, dodatno su izolovani stilovi navigacije od Magento default link stilova i podešen je desktop/mobile raspored u `Boris/JerseyStore` temi.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
  - `app/design/frontend/Boris/JerseyStore/web/tailwind/input.css`
  - `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
- **Sledeći koraci:** Proveriti storefront u browseru na desktop i mobile širinama; ako se vidi stari prikaz, uraditi hard refresh zbog browser/static asset cache-a.

### [2026-06-15] Faza: Dinamičke Kategorije iz Admin Panela
- **Status:** Završeno
- **Opis zadatka:** Uklonjene su hard-coded kategorije iz header navigacije i PLP quick filtera, a prikaz je povezan sa aktivnim kategorijama koje su kreirane u Magento admin panelu preko `Magento\Catalog\Helper\Category`.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Theme/layout/default.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
  - `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
- **Sledeći koraci:** U admin panelu proveriti da su kategorije `Enable Category = Yes`, `Include in Menu = Yes` i da se nalaze ispod aktivne root kategorije store-a; zatim otvoriti category URL ili home/header navigaciju.

### [2026-06-15] Faza: Hotfix za Category Helper Exception
- **Status:** Završeno
- **Opis zadatka:** Ispravljen je Magento exception gde je `Magento\Catalog\Helper\Category` bio prosleđen kao layout object argument, a pozivanje helpera je prebačeno na standardni template helper pristup unutar `.phtml` fajlova.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Theme/layout/default.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
- **Sledeći koraci:** Pokrenuti storefront server ako nije aktivan i proveriti home/category stranicu; kategorije ostaju dinamički povezane sa admin panelom.

## Dnevnik Rada (Log)

### [2026-06-15] Faza: Frontend Kategorije i Proizvodi
- **Status:** U toku
- **Opis zadatka:** Započinjem rad na layout i template fajlovima za Product Listing Page (PLP) za prikaz kategorija i mreže proizvoda unutar `Boris/JerseyStore` teme, uz Tailwind v4 strukturu i pripremu za dinamičke produkt linkove sa URL key.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/toolbar.phtml`
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list/item.phtml`
- **Sledeći koraci:** Predložiti strukturu PLP koda sa pravilnim Magento URL generatorom (`$_product->getProductUrl()`) i sačekati potvrdu pre kreiranja ili izmene template fajlova.

