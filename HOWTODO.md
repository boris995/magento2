# HOWTODO: Logovi u projektu

## Sta je napravljeno

1. Magento vec automatski cuva aplikacione logove u `var/log/`.
2. Postojeci logovi koji su pronadjeni u projektu su:
   - `var/log/system.log`
   - `var/log/exception.log`
   - `var/log/debug.log`
   - `var/log/commerce-data-export.log`
   - `var/log/commerce-data-export-errors.log`
3. Zbog toga nije napravljen novi paralelni log fajl za errore. Koristi se Magento standardni mehanizam.
4. Napravljen je admin modul `Boris_LogViewer` koji omogucava pregled postojecih `.log` fajlova iz `var/log/` direktno iz Magento admin panela.

## Kreirani fajlovi

1. `app/code/Boris/LogViewer/registration.php`
2. `app/code/Boris/LogViewer/etc/module.xml`
3. `app/code/Boris/LogViewer/etc/adminhtml/routes.xml`
4. `app/code/Boris/LogViewer/etc/acl.xml`
5. `app/code/Boris/LogViewer/etc/adminhtml/menu.xml`
6. `app/code/Boris/LogViewer/Controller/Adminhtml/Log/Index.php`
7. `app/code/Boris/LogViewer/Controller/Adminhtml/Log/View.php`
8. `app/code/Boris/LogViewer/Block/Adminhtml/Log/ListLog.php`
9. `app/code/Boris/LogViewer/Block/Adminhtml/Log/ViewLog.php`
10. `app/code/Boris/LogViewer/view/adminhtml/layout/boris_logviewer_log_index.xml`
11. `app/code/Boris/LogViewer/view/adminhtml/layout/boris_logviewer_log_view.xml`
12. `app/code/Boris/LogViewer/view/adminhtml/templates/log/list.phtml`
13. `app/code/Boris/LogViewer/view/adminhtml/templates/log/view.phtml`

## Kako radi

1. Modul dodaje admin meni `System > Tools > JerseyStore Logs`.
2. Lista cita samo fajlove koji se zavrsavaju sa `.log` iz Magento foldera `var/log/`.
3. Klik na `View` otvara read-only prikaz izabranog log fajla.
4. Pregled log fajla prikazuje poslednjih 256 KB sadrzaja da admin stranica ne bi pucala na velikim fajlovima.
5. Imena fajlova su ogranicena na bezbedan format `A-Z`, `a-z`, `0-9`, `_`, `.`, `-` i obavezno `.log`, tako da se ne mogu citati fajlovi van `var/log/`.

## Kako aktivirati modul

1. Pokrenuti:
   ```bash
   php bin/magento module:enable Boris_LogViewer
   ```
2. Pokrenuti:
   ```bash
   php bin/magento setup:upgrade
   ```
3. Ocistiti cache:
   ```bash
   php bin/magento cache:flush
   ```
4. Ulogovati se u admin panel.
5. Otvoriti `System > Tools > JerseyStore Logs`.

## Pravilo za buduce upise

Od sada se radni dnevnik ne upisuje automatski u `AGENTS.md`.

U ovaj `HOWTODO.md` fajl upisujem samo ono sto korisnik izricito trazi da se upise.
