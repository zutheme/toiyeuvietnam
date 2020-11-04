<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'WP_MEMORY_LIMIT', '2048M' );
@ini_set( 'upload_max_size' , '30M' );
@ini_set( 'post_max_size', '180M');
@ini_set( 'memory_limit', '2048M' );
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */

// define( 'DB_NAME', 'toiyeuviet' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );
// define( 'DB_HOST', "localhost" );

define( 'DB_NAME', 'toiyeuviet_dbtoiyeu' );
define( 'DB_USER', 'toiyeuviet_dbtoiyeu' );
define( 'DB_PASSWORD', 'toiyeuvietnam' );
define( 'DB_HOST', "45.117.168.156" );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_cuq@;IxG&lM@pKL{R<0UnuS;XNP[&e?80`WP+8Up5i-mZJ4=ER ZXK|cHNbJLhd' );
define( 'SECURE_AUTH_KEY',  'FTry6xW2j7]K>8_,O8@=~=W~OyDjb@nCYRrW!MxUn@Cjbje6tfTFuPA).F%UC8.&' );
define( 'LOGGED_IN_KEY',    '.igK&W,oF0#..Bc{6H @hnpfPO4@iOKK2V}NxTR-50Iv0&{4>%v#BNk)&cGuk,@j' );
define( 'NONCE_KEY',        ')RA-k88kdAd*&8#u%pw_T_gJ/6LY~st8bvF)|*qMRL@p|tG$`.W$wKE$FS=wWZJ3' );
define( 'AUTH_SALT',        '$^^ri#g,&bSd%)S8uaNYholnSCV`CBr9vsCn.e/0f9{oXhM`#taKte)cF~g+xzm~' );
define( 'SECURE_AUTH_SALT', '/JM:xQ|Ej:x;Lb)FHYY&cV2sfm=Wx^_h0ysV^(v.cPa%Q]/8LC}f7 %dkw+SEQtL' );
define( 'LOGGED_IN_SALT',   'I0f[K`BVA6R4j-XT1G-{4gMjn:wq7Ut`qM[pL2kFf|#|8go_QcCn%%Q>fo2Dai9;' );
define( 'NONCE_SALT',       '8F:x>`ov=xEO i#fT}^UJ?/Z,&FoK/L=HMbb*/2,!FiU,/DKt~SsO,F`PG*r:9ro' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tyv_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS', true);
=======
<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'WP_MEMORY_LIMIT', '2048M' );
@ini_set( 'upload_max_size' , '30M' );
@ini_set( 'post_max_size', '180M');
@ini_set( 'memory_limit', '2048M' );
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */

// define( 'DB_NAME', 'toiyeuviet' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );
// define( 'DB_HOST', "localhost" );

define( 'DB_NAME', 'toiyeuviet_dbtoiyeu' );
define( 'DB_USER', 'toiyeuviet_dbtoiyeu' );
define( 'DB_PASSWORD', 'toiyeuvietnam' );
define( 'DB_HOST', "45.117.168.156" );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_cuq@;IxG&lM@pKL{R<0UnuS;XNP[&e?80`WP+8Up5i-mZJ4=ER ZXK|cHNbJLhd' );
define( 'SECURE_AUTH_KEY',  'FTry6xW2j7]K>8_,O8@=~=W~OyDjb@nCYRrW!MxUn@Cjbje6tfTFuPA).F%UC8.&' );
define( 'LOGGED_IN_KEY',    '.igK&W,oF0#..Bc{6H @hnpfPO4@iOKK2V}NxTR-50Iv0&{4>%v#BNk)&cGuk,@j' );
define( 'NONCE_KEY',        ')RA-k88kdAd*&8#u%pw_T_gJ/6LY~st8bvF)|*qMRL@p|tG$`.W$wKE$FS=wWZJ3' );
define( 'AUTH_SALT',        '$^^ri#g,&bSd%)S8uaNYholnSCV`CBr9vsCn.e/0f9{oXhM`#taKte)cF~g+xzm~' );
define( 'SECURE_AUTH_SALT', '/JM:xQ|Ej:x;Lb)FHYY&cV2sfm=Wx^_h0ysV^(v.cPa%Q]/8LC}f7 %dkw+SEQtL' );
define( 'LOGGED_IN_SALT',   'I0f[K`BVA6R4j-XT1G-{4gMjn:wq7Ut`qM[pL2kFf|#|8go_QcCn%%Q>fo2Dai9;' );
define( 'NONCE_SALT',       '8F:x>`ov=xEO i#fT}^UJ?/Z,&FoK/L=HMbb*/2,!FiU,/DKt~SsO,F`PG*r:9ro' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tyv_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');


