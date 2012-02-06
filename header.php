<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>
<?php 
	if(!is_home())
		wp_title("//",true,"right"); 
	bloginfo('name');
?>
</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css">

<link rel="alternate" type="application/rss+xml" href="<?php rss(); ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed'); ?>" />
<?php wp_head(); ?>

<?php get_custom_styles(); ?>
	
</head>