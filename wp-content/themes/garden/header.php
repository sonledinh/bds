<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garden
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6 col-sm-6">
                    <div class="logo"><a href=""><img src="<?php echo get_field('logo','option')['url'] ?>" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-md-9 col-6 col-sm-6 text-right">
                    <div class="header-right"> 
                        <div class="btn-bar"><a href="javascript:Void(0)"><img src="<?php echo __BASE_URL__; ?>/images/bar.png" class="img-fluid" alt=""></a></div>
                        <div class="menu-h f-play text-uppercase">
                            <!-- <ul>
                                <li><a href="index.php" class="active">Trang chủ</a></li>
                                <li><a href="about.php">Giới thiệu</a></li>
                                <li><a href="project.php">Dự án</a></li>
                                <li><a href="news.php">Tin tức</a></li>
                                <li><a href="gallery.php">Thư viện</a></li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul> -->
                            <?php  
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
