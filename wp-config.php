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
define('DB_NAME', 'majoussera_promeat');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'majoussera_promeat');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'promeat');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'uWk:j*wqT_mZU@+aJ7u*f~D7frK0z1O7AcM<v?b||pTjqA~/urKKl#qgtST5/`E[');
define('SECURE_AUTH_KEY',  'go3pB1Cz)GE!@,m}9m(I0U6 ~pfTdI%q}45s9gfu~]!&p^}3avw>0mxt]GX!RGXh');
define('LOGGED_IN_KEY',    '<^9dcOV{.^TGC9.6(cC%[g&? Vt7JA)@k;snnZMiouFx`]{CEM8H83|DEn<Gx}V[');
define('NONCE_KEY',        'f$`]}L|At2jy`ARA-j6Gy|_(IhH##6R*p4=-mw5TQ|QmNFyqhY:J*D6GUx^twKfh');
define('AUTH_SALT',        'q8^5m8S>}d$6BVsh,n5>o-*7]A1|VC6^?tZ8[L =TY>/Bo!KofDptNZX6vuuQZ>C');
define('SECURE_AUTH_SALT', 'jQtFDQr=w!O/an;!Vb8}V-K?t0gQSVYArI/s<HlP02M[mowV5FP;#>TY ]WU6Zqr');
define('LOGGED_IN_SALT',   'oyT>AI=U|abz,jS_0|N55ueHLE&{vxRHzO~X``:)UtD|`<Jp!Oo,CPqM)-nSpn$Z');
define('NONCE_SALT',       'l-0i,/BhmW2Yk_PluI+|X501H0Y:h|=,Q+v{J$jT%~BnSX.n*;|sJoWdL=fbuVvN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');