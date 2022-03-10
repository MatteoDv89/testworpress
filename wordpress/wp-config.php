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
define( 'AUTH_KEY',         'ZOXdBJ3(SU(TaLgXqchg97M&=_L29^J_!dpVS@8[m?d,{W G5IuwhxCbNX:^xSpi' );
define( 'SECURE_AUTH_KEY',  'Anf+/jYob<18qNv-hZ])[!-7%:~jNS(,sztq{t4Q)uB%D|L.G.5bMsD<eSPh2Bq#' );
define( 'LOGGED_IN_KEY',    ',X(  lxy0vEsD.(+ex[rM8aeQ1 Wl&gZ+(vuS6>cja+Ht$VK?x,GaY+M*%h^l;;.' );
define( 'NONCE_KEY',        'hlt@r{OJO35?E/AaPgc!fZ`7[mWXqt6H-XMsl 7;d?SHI~o6t[PF!z(>quRh[6*u' );
define( 'AUTH_SALT',        'G)~kKdJ!EHyw3mQHE0.a.t^(Ju<M|@l,0eg}#IX z8}c Hsfogi.z u81$[vq>Eh' );
define( 'SECURE_AUTH_SALT', '4Q%U!f2mz$pRNnoe<:qQ1Bh[bUNKw)Xrl=:dS/?HU6ep3a,e:BHz_~yU R}^}G`^' );
define( 'LOGGED_IN_SALT',   ' !Hrzy$`T[WTpMmNy{w_Fne9@ zx<ewOe+S#CmSL@k)*f50h6^LB5sQBHD0wg(,i' );
define( 'NONCE_SALT',       '!?Dv4o3RzY&rJVmX&sxctD]|Z&c]LFD{q#3hOOL0p:ZiTv+I/jx{Dl/G=_`,BFSx' );
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
