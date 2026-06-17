# Sažetak Projekta

## Pregled

Ovo je Magento 2 webshop projekat za prodaju fudbalskih dresova. Aktivni frontend rad se vodi kroz prilagođenu temu `Boris/JerseyStore`, koja nasleđuje Magento Luma temu i razvija se kao čist, moderan ecommerce interfejs za kategorije i proizvode.

Glavni fokus projekta je izgradnja klasičnog webshop prikaza za fudbalske dresove: kategorije, liste proizvoda, kartice proizvoda, osnovni prikaz detalja proizvoda, globalna navigacija i vizuelni identitet prodavnice.

## Tehnologije

- Magento 2 kao ecommerce platforma.
- Prilagođena tema: `app/design/frontend/Boris/JerseyStore`.
- Parent tema: `Magento/luma`.
- Tailwind CSS v4 za frontend stilove.
- Alpine.js je planiran za jednostavne interaktivne elemente kao što su brzi filteri.
- PHP `.phtml` template fajlovi i Magento layout XML za povezivanje prikaza.

## Trenutno Stanje

### Product Listing Page (PLP)

PLP je već implementiran u okviru `Magento_Catalog` dela teme. Category stranica koristi prilagođeni layout i template za prikaz:

- naslova i opisa trenutne kategorije,
- category hero sekcije,
- dinamičke liste dostupnih kategorija iz Magento admin panela,
- osnovnih frontend filtera,
- responsive mreže proizvoda,
- product card prikaza sa linkovima ka proizvodima.

Važni fajlovi:

- `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_category_view.xml`
- `app/design/frontend/Boris/JerseyStore/Magento_Catalog/templates/product/list.phtml`

### Globalna Navigacija i Header

Header je modernizovan kroz `Magento_Theme` deo teme. Implementiran je sticky desktop header, mobile hamburger meni, linkovi ka osnovnim stranama i izolovani Tailwind stilovi kako Magento default link stilovi ne bi kvarili dizajn.

Važni fajlovi:

- `app/design/frontend/Boris/JerseyStore/Magento_Theme/layout/default.xml`
- `app/design/frontend/Boris/JerseyStore/Magento_Theme/templates/header/jersey-header.phtml`
- `app/design/frontend/Boris/JerseyStore/web/tailwind/input.css`
- `app/design/frontend/Boris/JerseyStore/web/css/tailwind.css`

### Product Detail Page (PDP)

PDP je sledeći veliki frontend prioritet. Postoji layout fajl za product view, ali bazični prikaz simple proizvoda još treba završiti kroz jasnu strukturu za:

- glavnu sliku proizvoda,
- naziv proizvoda,
- cenu,
- kratak opis,
- osnovni CTA za kupovinu,
- informacije o dostavi, povratu i sigurnoj kupovini.

Važan fajl:

- `app/design/frontend/Boris/JerseyStore/Magento_Catalog/layout/catalog_product_view.xml`

## Pravila Rada

Razvoj se vodi strogo unutar teme `app/design/frontend/Boris/JerseyStore` kada se menjaju frontend fajlovi. Ne menjaju se `vendor/`, `pub/static/` ni `generated/` folderi.

Posle svake CSS izmene obavezno se pokreće:

```bash
npm run build-prod
```

iz foldera teme, a zatim:

```bash
php bin/magento cache:flush
```

iz root foldera Magento instalacije.

Svaki korak rada se dokumentuje u `AGENTS.md`, u sekciji `## Dnevnik Rada (Log)`, na srpskom jeziku.

## Naredni Prioriteti

1. Završiti osnovni PDP za simple proizvode.
2. Proveriti PLP i header prikaz u browseru na desktop i mobile širinama.
3. Povezati frontend prikaz sa realnim Magento proizvodima, slikama, cenama i stock statusom.
4. Kasnije proširiti PDP za veličine, igrače, personalizaciju i kompleksnije varijacije.
5. Višejezičnost i napredni ecommerce tokovi ostaju za kasnije faze.
