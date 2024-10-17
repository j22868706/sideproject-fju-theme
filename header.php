<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>輔仁大學社會企業研究中心</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/slogan.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/introductionSection.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/recommendation.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/latestNews.css'); ?>">    
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/community.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/buttons.css'); ?>">


</head>
<body >
    <header>
        <div class="header">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri('/images/semfjuLogo.png') ?>" alt="Logo">
                <a class="logoName" href="<?php echo site_url() ?>">輔仁大學社會企業研究中心</a>
            </div>
        <div class="nav">
            <div class="dropdown">
                <a href="<?php echo site_url('/about-us') ?>">關於中心 ▼</a>
                <div class="dropdown-content">
                    <a href="<?php echo site_url('/about-us') ?>">中心宗旨</a>
                    <div class="separator"></div>
                    <a href="<?php echo site_url('/about-us') ?>">主要服務</a>
                    <div class="separator"></div>
                    <a href="<?php echo site_url('/about-us') ?>">核心成員</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="<?php echo site_url('/social-enterprise') ?>">社企永續聚落 ▼</a>
                <div class="dropdown-content">
                    <a href="<?php echo site_url('/social-enterprise') ?>">遠起與宗旨</a>
                    <div class="separator"></div>
                    <a href="<?php echo site_url('/social-enterprise') ?>">社企聚落成員</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="<?php echo site_url('/research-creativity') ?>">成果紀錄 ▼</a>
                <div class="dropdown-content">
                    <a href="<?php echo site_url('/research-creativity') ?>">精彩新聞</a>
                    <div class="separator"></div>
                    <a href="<?php echo site_url('/research-creativity') ?>">碩士論文</a>
                </div>
            </div>
            <a href="<?php echo site_url('/latest-news') ?>">最新消息</a>
            <a href="<?php echo site_url('/admission') ?>">社企招生</a>
        </div>
    </div>
    </header>
