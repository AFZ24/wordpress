<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' ); 
 
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vcST-=LZ-/aD!hh^Iaw977lu7q!.ZFWZhG[hU=Sx1w_7._P[mN;P5t:wwVCtfrx]' );
define( 'SECURE_AUTH_KEY',  '7#[*.JLxzwVTfO36|H;4-IO{@CLMj%DIs22Oar>Pt6$6~;NC=[?:tMYdddIHAQ}B' );
define( 'LOGGED_IN_KEY',    '1[8x(.ecPu)9SU&Ih!=)+2-XsQrj[D?#|>=YU;^S=3qkc-?Dw?(VmJYC(B+jhgr`' );
define( 'NONCE_KEY',        '1q-~pA4dc|fTHLSaM%]^rI2!B;ijUl Z@(m?. 6tzteJu4KNU$jBt8im;JI7klZ8' );
define( 'AUTH_SALT',        '%f&[;$h+YAFL`Fvj!TBeW+Pj:ZI!cWo-EsgT?)LkgikT@+9~ |5eXn;,E Kwonkb' );
define( 'SECURE_AUTH_SALT', 'g~haI3l{ Lo6pdmy&_bV5;~Yx^e-l{Ij <<NlLckAbhODP<Y{g2c!YQu%^$sd(JF' );
define( 'LOGGED_IN_SALT',   'f~L2-LxA*D0*g.J%D%W @TR6Y`l!LMX*0U`64=Ud ,J1O!GK#)?R~k(8IP7[$uR}' );
define( 'NONCE_SALT',       '-l;U^ -2f*.^bEf|7>u9NI8`SH}Hky*W+bs4!b22,st;J_m0[(q8L~O/J,-[Ih_@' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
