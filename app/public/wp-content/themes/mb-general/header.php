<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
          <nav class="main-navigation">
            <li><a href="/">Home</a></li>
            
            <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about') ?>">About</a></li>
            
            <li <?php if (get_post_type() == 'staff') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/staff'); ?>">Staff</a></li>

            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
          </nav>
        </div>
      </div>
    </header>
