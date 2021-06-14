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

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'garden' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'y1g;<Ce0Efq]Tj|2BVnvQGaY*X%r4CA/HK<v!l?aj(48Y(HJNB+_00:+y ~Dy]/z' );
define( 'SECURE_AUTH_KEY',  'YA}]d(5Etig9shmH#bkPwk;.+Um?gh(Nm=:6e_SWo4DH(AwF@c~=W$Irc,V,EIUY' );
define( 'LOGGED_IN_KEY',    '@=[}%~P4+q8bQ!shVNuv}(OOh-KgLmhU#<Wb-_$V,|kyW2F$*ypFECyWq0GT;;4:' );
define( 'NONCE_KEY',        'ka*K;k[8`<$hdD7go`%Hfe8#LGeT6Jv_hCO-@{OD2NnHvXXg;f;TT0ORL`c6:*<W' );
define( 'AUTH_SALT',        '#&]Q0LCO]=}sLLOJR/%YNT-uoq_E#EPtMHi4EdVzlJ>&DCsog^FRh@r#by*r`!9y' );
define( 'SECURE_AUTH_SALT', '6K=c;r.q0QgK%`Q:Q3UHd6jm@%&JYRZL39=gVY%EX6=cv |.(NH3T,;&1>EWsA9X' );
define( 'LOGGED_IN_SALT',   '.Jc_l]=+:hO>3axF;3mT_(5:Qny`5ETbyh$h_.KOQ6fOVOQz #1GanbF(7lJgp)f' );
define( 'NONCE_SALT',       '.5.|`e|`E88-6FfTG;qSnV@xj1?Zu`b@z?$(:UNf7mb PTNj]2K/v|GypTib|jXZ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
