<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'adatbázis_neve');

/** MySQL felhasználónév */
define('DB_USER', 'felhasználónév');

/** MySQL jelszó. */
define('DB_PASSWORD', 'jelszó');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w8*t$|]t+8_]{.bTr_.JA>t=ScJ9oW,bR-zDEOpJ$eJ*:T[b}>Rh#O&T_+.0S[Z^');
define('SECURE_AUTH_KEY',  '5:-L[wW#EAm7lPxy^l.~:H_$Ot7OV@T[2YhO#+9a|{FC^LLvk<[F]Eihfp{CjUuU');
define('LOGGED_IN_KEY',    'px0]Io3he<yku1i:OC33enS^zf3_>9NPhu#GX>n]228e|B[u+-]D*|t+I1uyJ![A');
define('NONCE_KEY',        'x/|Af(,;k(1jLNmIT;Z--(l@NW4=Yg*e=ye=p1Wt9):Kf<Qwwa4-Jlw lUkge%S^');
define('AUTH_SALT',        '!ij3fFD$9/UM6S!mB,!X|wM=-m7h,i-!(|xsw.Fsco-?#K<FS*MO1Q.}t9`_`mkA');
define('SECURE_AUTH_SALT', 'rA/dXg_M!E8DX[=oM7-quEhu_7&6oSHC6;{=EmMfmczh|m/;e5v:J{y:5Hpy EA;');
define('LOGGED_IN_SALT',   'J-,us78$hT>2C!jjsm4Kw[%BB=jj/,%5jj,JE+M;-8NU5rO](MTdF&4v{SA?JJ};');
define('NONCE_SALT',       'Nb4e*H-x>|1iv0pui6}0b0kJc(7Y/ylWH+z9gkX-b1Vb{kNmgq=Ku-;bUP|E>>0C');


/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

if ( WP_DEBUG ) {
  define( 'WP_DEBUG_LOG', true );
  define( 'WP_DEBUG_DISPLAY', true );
  @ini_set( 'display_errors', true );
}

/**
 * Alapértelmezetten a WordPress 60 másodpercenként menti a post-ot, 
 * ezt a beállítást változtahthatjuk meg itt. 
 * A beállítandó értéket másodpercben kell megadnunk.
 */
define('AUTOSAVE_INTERVAL', '120');

/**
 * A Wordpress automatikusan készít biztonsági másolatokat a bejegyzéseinkről. 
 * Ennek hátránya, hogy az adatbázisunk méretét növeli.
 * Ezzel a beállítással a biztonsági másolatok számát tudjuk korlátozni.
 * Amennyiben a WP_POST_REVISIONS értékét false-ra állítjuk, nem kerül mentésre egy biztonsági másolat sem.
 */
define('WP_POST_REVISIONS', '5');

/**
 * Alapértelmezetten a WordPress 30 naponta törli a Lomtárba került post-okat. 
 * A beállítandó értéket napokban kell megadnunk.
 * Amennyiben az EMPTY_TRASH_DAYS értékét 0-ra állítjuk, a post-ok rögtön törlésre kerülnek.
 */
define('EMPTY_TRASH_DAYS', 7 );

/**
 * Ezt a funckiót letiltva az adminisztrátorok nem tudják a 
 * sablon file-okat és bővítményeket szerkeszteni.
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * Letiltjuk a felhasználók elől a bővítmények hozzáadásának és frissítésének lehetőségét.
 * Amennyiben a DISALLOW_FILE_MODS true, nem tudnak hozzáadni és 
 * a meglévő bővítményeket sem tudják frissíteni a felhasználók.
 */
define( 'DISALLOW_FILE_MODS', false );

/**
 * Automatikus frissítés kikapcsolása.
 */
//define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * A rendszerünk nem fog automatikusan frissülni, ugyanakkor továbbra is megkapjuk az frissítési értesítéseket.
 */
//define( 'WP_AUTO_UPDATE_CORE', false );


/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
