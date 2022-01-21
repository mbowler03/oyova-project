<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8JY78iTE8qBnd1VigIfFzx7jOw8UgZgk4t8opPCNbNpLBd42rbQ3P4Gb/WKOQfhd3bHHrX8LabcZg3sRplXZWw==');
define('SECURE_AUTH_KEY',  'dZ3dJ2ksUdVRxfUO5HGnrR50vdWUZ9WMq95zQUMQCps6h6ft9NAWogd8AiohRQpwGCAwHOwLzLWp5Gb7A52AVA==');
define('LOGGED_IN_KEY',    '/qKYZIKOJ+c569zuwAZnmmRwuSKjo8hjiklIs2BWalIDF9Ex7RVWPNNWYKavGU5DVk95tbRw+WOLzIh/rWJMNA==');
define('NONCE_KEY',        'iUjyioEmva8ogXVC988fP/AlxnXxC8vLcbRi8g13pXLw6mO+SYh6q7YHGuT8HZnlW3aXZ4HaZRNrMxEI1jzhzw==');
define('AUTH_SALT',        'vF7umVrBDpPmP72hPs/4mwASr91omB3C8KHbe5TBy6lS1bWino3utstx05CuU9Q+oAOIZW8JucbTfqkYkFnaQA==');
define('SECURE_AUTH_SALT', 'zt9RLf5u6G+Z6bLdSMnDXM8Zv5Ml+fATUQemTT7fyEHQbKk5xTX3qdBEXs14d+Yef2dP1KcaHjvefdQD/kX+uw==');
define('LOGGED_IN_SALT',   '7AIqov34rEuQg9Anj3No5k/TYQBvcxXAm7h2pG/vJr7Og1PcGQOZCObu4vGpMNCmejlHmxZcax8FQfIz2MyMQA==');
define('NONCE_SALT',       '2I+gv+iErCjQiHO+N0U6gwpIZmqKrhqJ7p1inVwkXI4u7/Xx7Us0tlB19GKDyTt8BkUVQH2fDes0LHDIXnoZAQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
