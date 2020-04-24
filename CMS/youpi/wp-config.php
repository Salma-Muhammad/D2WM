<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jarditou' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'asJ8C)QY&FXH?4_cBlE`&%Tq7}b%nH7<2Gf,:jOA}Edt(.xE,N0B#2UwTj-=4YZX' );
define( 'SECURE_AUTH_KEY',  'CmdQ6ba{@3H~f&39bH5N{2r$*&jf+ >?#]Y!.u <)7x(IA)^5*AXE._:x1>H[~?j' );
define( 'LOGGED_IN_KEY',    '@~E2M`S/xaIFH8C8sEn3k&xdWi9[z^V+>+eae+fZ`]H3jr7!SvFb #JP2xc/=y,=' );
define( 'NONCE_KEY',        'X?w]QcC&Bni%R3Nx<;!JJWX)ijQ^@j0@jD0_fAihYPpDZPk<9~e.7B$/<Z +6 *=' );
define( 'AUTH_SALT',        'pa+T1qU97]^/9@I3@rE:iF,mFs7(YTLc#?QMT:1D9E+>&?oo*:NkISw)e{3W|^j`' );
define( 'SECURE_AUTH_SALT', '3&JVxw5Kez)`ds}=F5g`y_5zYSA8t2y2%L2[:J).!]oSVW@@!j-!;#r #|wMV]vn' );
define( 'LOGGED_IN_SALT',   'Cy5!$$Z;=Jc6k4,9}ip]{0U#rEOizd#B$RZ?n&?a`F`3NG`G&_&C|-5nfQ7 J.t@' );
define( 'NONCE_SALT',       '-=R;vy|^5rk%hFzxVQa4jxD>V{S{+;*5H#VTgb@8cFPSV*2A,C^0q!_=0ru1yVv5' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
