<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'WPCACHEHOME', 'C:\xampp\htdocs\17.wordpress\wordpress\wp-content\plugins\wp-super-cache/' );
define('WP_CACHE', true);
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SgkvOL13tWqMWH>P(;KpRp#N,0.TILi.5K.X1*ZXL6Y:@;tL_X}k@,zwMNh}syah' );
define( 'SECURE_AUTH_KEY',  '!j)*tAEweE8h;i%94wX/BYa)>3+lXMZXptkoQ+YUL?0$Ebf6_BRRtH-TmBQFivpW' );
define( 'LOGGED_IN_KEY',    'xFC;#pO7(2RjPV+5AscowG?O-^{$!m(g:FuVf}cxvYN#usG8_0FF|!EO0*73dzY+' );
define( 'NONCE_KEY',        '3nECAb*Zkh$ntl}GA&D/DkT!:Jp2Ky@QRKipsBI$>.e]L8T|uh 9;fE0dh|wLB7#' );
define( 'AUTH_SALT',        '(~#6wJFgz^Aasj!?F1FoMsD3PnvA#9]/.aUozL;EmpfCe*Y;p#/lG;_`sC`TeOkY' );
define( 'SECURE_AUTH_SALT', 'T-b<Snn@}akc>F XM@](u.hs&Ll|jEgI?RZBFh[w.e{`#9,r,o66`Yvrz/j$<fT ' );
define( 'LOGGED_IN_SALT',   'S~e!aZTvx9>)B&}}wV]SHCc#/r c7=8/{M]Wy%e5PH<[9N0Qg<PsHN99]Qxl7~sa' );
define( 'NONCE_SALT',       'q#F)In;q~_iK r}b7TVqwt=~B++*xv>KJLo fNliiGjb`@ZT8_95`],/e-Q!%(xA' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');