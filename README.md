# KVwpBaseWPConfig
&nbsp;

## `wp-config.php` beállítások [opcionális]
>Bővebb információk az alábbi [linken](https://codex.wordpress.org/Editing_wp-config.php)

&nbsp;

**Keys and Salts**

Minden esetben generáljunk új Salt kulcsokat. Az alábbi [linkre](https://api.wordpress.org/secret-key/1.1/salt/) kattintva automatikusan megkapjuk az új kulcsokat.

&nbsp;

**Limitáljuk a mentésre kerülő Változatok számát**

```php
define( 'WP_POST_REVISIONS', '2' );
```
Ebben az esetben minden bejegyzésből maximálisan a két legutolsó változat kerül mentésre.

&nbsp;

**Lomtár űrítése**

```php
define( 'EMPTY_TRASH_DAYS', '31' );
```
Az alapértelmezett beállítás szerint 30 nap után törlődnek a lomtárba helyezett bejegyzések, az `EMPTY_TRASH_DAYS` után megadott számértékkel megváltoztathatjuk ezt.

A lomtár funkciót elérhetővé tudjuk tenni a **Médiatár** számára is:

```php
define( 'MEDIA_TRASH', true );
```

&nbsp;

**Az automatikus mentés idejének megváltoztatása**

Az alapértelmezett 60 másodperc helyett megadhatunk tetszőleges időtartamot is:

```php
define( 'AUTOSAVE_INTERVAL', '120' );
```

&nbsp;

**A WordPress admin sablon és plugin szerkesztőjének kikapcsolása**

Ezt a funckiót letiltva az adminisztrátorok nem tudják a sablon file-okat és bővítményeket szerkeszteni a vezérlőpulton keresztül, így egy biztonsági rést is elzárunk.

```php
define( 'DISALLOW_FILE_EDIT', true );
```

&nbsp;

**Sablonok, bővítmények telepítésének és frissítésének tiltása**

Letiltja a felhasználók elől a bővítmények hozzáadásának és frissítésének lehetőségét.

```php
define( 'DISALLOW_FILE_MODS', true );
```

&nbsp;

**Az automatikus frissítés funkció kikapcsolása**

A rendszerünk nem fog automatikusan frissülni, ugyanakkor továbbra is megkapjuk az frissítési értesítéseket.

```php
define( 'WP_AUTO_UPDATE_CORE', false );
```

&nbsp;