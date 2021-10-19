<?php

use Widget\Contents\Page\Rows;

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$te_version = str_replace("/",".",$this->options->version);
?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">

    <!-- PreLoad -->
    <link rel="dns-prefetch" href="//cdn.ahdark.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="//cdn.ahdark.com" crossorigin>

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php echo '//cdn.ahdark.com/source-site/theme/normalize.css?ver='.$te_version; ?>">
    <link rel="stylesheet" href="<?php echo '//cdn.ahdark.com/source-site/theme/grid.css?ver='.$te_version; ?>">
    <link rel="stylesheet" href="<?php echo '//cdn.ahdark.com/source-site/theme/style.css?ver='.$te_version; ?>">

    <!-- 字体引入 -->
    <link rel="preload" href="//fonts.googleapis.com/css2?family=Lato:wght@100&family=Noto+Sans+SC:wght@400;500&family=Roboto:ital,wght@0,300;0,400;1,400&display=swap" as="style">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
                <?php if ($this->options->logoUrl): ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
                    </a>
                <?php else: ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                    <p class="description"><?php $this->options->description() ?></p>
                <?php endif; ?>
            </div>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>"/>
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
            <div class="col-mb-12">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                            href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>
                                href="<?php $pages->permalink(); ?>"
                                title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">
