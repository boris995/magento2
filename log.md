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

### [2026-06-17] Faza: Lista Dostupnih Kategorija na Category Page
- **Status:** Završeno
- **Opis zadatka:** Dodat je dinamički prikaz svih dostupnih Magento kategorija na Product Listing Page, bez hard-coded naziva kategorija, tako da se aktivne kategorije iz admin panela izlistaju na frontend category stranici kroz responsive grid linkove.
- **Izmenjeni fajlovi:**
  - `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`
  - `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
- **Sledeći koraci:** Proveriti category page u browseru i potvrditi da su željene kategorije u admin panelu aktivne (`Enable Category = Yes`) i dostupne u store root hijerarhiji.

### [2026-06-18] Faza: Projektna Dokumentacija
- **Status:** Završeno
- **Opis zadatka:** Kreiran je `SUMMARY.md` fajl sa kratkim pregledom Magento 2 projekta za prodaju fudbalskih dresova, trenutnim stanjem `Boris/JerseyStore` teme, korišćenim tehnologijama, pravilima rada i narednim frontend prioritetima.
- **Izmenjeni fajlovi:** Nema izmena unutar teme `app/design/frontend/Boris/JerseyStore` u ovom koraku.
- **Sledeći koraci:** Nastaviti rad na osnovnom Product Detail Page (PDP) prikazu za simple proizvode u okviru `Boris/JerseyStore` teme.

## [2026-06-18 01:01] - [Sidebar Cart] Implementacija desnog slide-out mini-cart panela
* **Status:** U toku
* **Tip promene:** Frontend Tailwind / JS Logic / Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/subtotal.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/item/default.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
* **Sledeći koraci:** Pokrenuti Tailwind v4 produkcijski build, proveriti Magento template/XML sintaksu i flush cache.
* **Clean Code Provera:** Ne (provera sledi nakon build/cache koraka).

## [2026-06-18 01:07] - [Sidebar Cart] Stabilizacija Magento layout izvora za mini-cart
* **Status:** U toku
* **Tip promene:** Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
* **Sledeći koraci:** Ponovo proveriti XML sintaksu, uraditi Tailwind build i Magento cache flush nakon izmene layout definicije.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:09] - [Sidebar Cart] Finalna build i cache provera
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / JS Logic / Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/subtotal.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/item/default.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Proveriti storefront klikom na ikonicu korpe na desktop i mobile širini.
* **Clean Code Provera:** Da (uspešan `npm run build-prod`, PHP template syntax provera, XML parse provera i `php bin/magento cache:flush`).

## [2026-06-18 01:08] - [Sidebar Cart] Poravnanje panela i 100vh visina
* **Status:** U toku
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
* **Sledeći koraci:** Pokrenuti Tailwind build, proveriti PHP sintaksu i flush cache.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:10] - [Sidebar Cart] Finalizovano poravnanje i max-height
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Vizuelno proveriti sidebar cart na storefrontu nakon hard refresh-a.
* **Clean Code Provera:** Da (uspešan `npm run build-prod`, PHP syntax provera i `php bin/magento cache:flush`).

## [2026-06-18 01:14] - [Sidebar Cart] Transparentan overlay, scroll lock i fiksna sirina
* **Status:** U toku
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
* **Sledeći koraci:** Pokrenuti Tailwind build, PHP syntax proveru i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:16] - [Sidebar Cart] Finalizovan transparentan overlay i 320px panel
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i proveriti da leva strana ostaje transparentna dok je panel otvoren.
* **Clean Code Provera:** Da (uspešan `npm run build-prod`, PHP syntax provera i `php bin/magento cache:flush`).

## [2026-06-18 01:19] - [Sidebar Cart] Responsive sirina po uredjajima
* **Status:** U toku
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
* **Sledeći koraci:** Pokrenuti Tailwind build, PHP syntax proveru i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:21] - [Sidebar Cart] Finalizovana responsive sirina
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/templates/cart/minicart.phtml`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i proveriti mobile `<640px`, tablet `>=640px` i desktop `>=768px`.
* **Clean Code Provera:** Da (uspešan `npm run build-prod`, PHP syntax provera i `php bin/magento cache:flush`).

## [2026-06-18 01:22] - [Sidebar Cart] Popravka Knockout itemRenderer greske
* **Status:** U toku
* **Tip promene:** Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
* **Sledeći koraci:** Proveriti XML/PHP sintaksu, pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:24] - [Sidebar Cart] Finalizovana Knockout itemRenderer popravka
* **Status:** Završeno
* **Tip promene:** Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i ponovo otvoriti cart sa proizvodom u korpi.
* **Clean Code Provera:** Da (XML parse provera, PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 01:24] - [Sidebar Cart] Centriran prikaz proizvoda u korpi
* **Status:** U toku
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/item/default.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
* **Sledeći koraci:** Pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:26] - [Sidebar Cart] Finalizovan prikaz proizvoda u korpi
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/item/default.html`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i proveriti da se slika, naziv, cena i qty vide u sidebar cartu.
* **Clean Code Provera:** Da (uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 01:31] - [Sidebar Cart] Scroll lock stranice i osvezavanje proizvoda
* **Status:** U toku
* **Tip promene:** JS Logic / Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
* **Sledeći koraci:** Pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 01:33] - [Sidebar Cart] Finalizovan scroll lock i instant cart reload
* **Status:** Završeno
* **Tip promene:** JS Logic / Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta, otvoriti sidebar sa home page-a i proveriti da se pozadina ne skroluje dok sidebar skroluje.
* **Clean Code Provera:** Da (uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 02:19] - [Sidebar Cart] Forsirano ucitavanje cart itema
* **Status:** U toku
* **Tip promene:** JS Logic / Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
* **Sledeći koraci:** Pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 02:21] - [Sidebar Cart] Finalizovano forsirano ucitavanje cart itema
* **Status:** Završeno
* **Tip promene:** JS Logic / Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/js/sidebar-cart.js`
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/web/template/minicart/content.html`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i otvoriti sidebar; ako se vidi loader duže od sekunde, proveriti Network response za `customer/section/load`.
* **Clean Code Provera:** Da (uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 02:27] - [Sidebar Cart] Direktna itemRenderer konfiguracija
* **Status:** U toku
* **Tip promene:** Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
* **Sledeći koraci:** Proveriti XML, pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 02:29] - [Sidebar Cart] Finalizovana direktna itemRenderer konfiguracija
* **Status:** Završeno
* **Tip promene:** Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Checkout/layout/default.xml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh storefronta i proveriti da console vise ne prijavljuje `itemRenderer.simple` gresku.
* **Clean Code Provera:** Da (XML parse provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 18:04] - [Sidebar Cart] Modernizacija product detail layouta
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / Layout
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh PDP stranice i vizuelno proveriti hero sekciju, add-to-cart formu i detaljne tab/anchor sekcije.
* **Clean Code Provera:** Da (PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 18:11] - [Sidebar Cart] Popravka PDP add-to-cart skaliranja
* **Status:** U toku
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
* **Sledeći koraci:** Pokrenuti PHP syntax proveru, Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 18:13] - [Sidebar Cart] Finalizovana PDP add-to-cart skala
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh PDP stranice i provjeriti CTA, qty selector, size selector i trust badges na desktop/mobile.
* **Clean Code Provera:** Da (PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 18:15] - [Sidebar Cart] Breadcrumb i klikabilni PDP tabovi
* **Status:** U toku
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
* **Sledeći koraci:** Pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (PHP syntax provera uspešna, finalna provera sledi).

## [2026-06-18 18:15] - [Sidebar Cart] Finalizovan breadcrumb i PDP tabovi
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh PDP stranice i proveriti klik na Opis, Detalji, Dostava, Povrat i Recenzije.
* **Clean Code Provera:** Da (PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 18:17] - [Sidebar Cart] Centriranje PDP qty i add-to-cart elemenata
* **Status:** U toku
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
* **Sledeći koraci:** Pokrenuti PHP syntax proveru, Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (finalna provera sledi).

## [2026-06-18 18:17] - [Sidebar Cart] Finalizovano centriranje PDP kontrola
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh PDP stranice i provjeriti da su minus, broj, plus, ikonica i tekst CTA dugmeta centrirani.
* **Clean Code Provera:** Da (PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).

## [2026-06-18 18:26] - [Sidebar Cart] Plavi moderni PDP desktop dizajn
* **Status:** U toku
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
* **Sledeći koraci:** Pokrenuti Tailwind build i Magento cache flush.
* **Clean Code Provera:** Ne (PHP syntax provera uspešna, finalna provera sledi).

## [2026-06-18 18:26] - [Sidebar Cart] Finalizovan plavi PDP desktop dizajn
* **Status:** Završeno
* **Tip promene:** Frontend Tailwind / JS Logic
* **Izmenjeni fajlovi:**
    * `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/view/page.phtml`
    * `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`
* **Sledeći koraci:** Hard refresh PDP stranice i provjeriti desktop hero, thumbnail aktivno stanje, CTA i tabove.
* **Clean Code Provera:** Da (PHP syntax provera, uspešan `npm run build-prod` i `php bin/magento cache:flush`).
