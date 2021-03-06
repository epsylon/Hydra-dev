<?php
/**
 * Modbash Clean Elgg Theme
 *
 * Copyright (c) 2015 ModBash
 *
 * @author     Shane Barron <admin@modbash.com>
 * @copyright  2015 SocialApparatus
 * @license    GNU General Public License (GPL) version 2
 * @version    1
 * @link       http://modbash.com
 */
?>
/* <style> /**/


    /***** TOPBAR ******/
    .elgg-page-topbar {
        background: #424242;
        border-top: 1px solid #424242;
        border-bottom: 1px solid #000000;
        padding: 0 20px;
        position: relative;
        height: 32px;
        z-index: 9000;
    }

    /***** PAGE MESSAGES ******/
    .elgg-system-messages {
        position: fixed;
        top: 32px;
        right: 20px;
        max-width: 500px;
        z-index: 2000;
    }
    .elgg-system-messages li {
        margin-top: 10px;
    }
    .elgg-system-messages li p {
        margin: 0;
    }

    /***** PAGE NAVBAR ******/
    .elgg-page-navbar {
        padding: 0 20px;
        position: relative;
        background: #4787B8;
    }
    .elgg-page-navbar > .elgg-inner {
        position: relative;
    }

    /***** PAGE BODY LAYOUT ******/
    .elgg-page-body {
        padding: 0 20px;
    }

    .elgg-layout {
        min-height: 360px;
    }
    .elgg-layout-widgets > .elgg-widgets {
        float: right;
    }
    .elgg-sidebar {
        position: relative;
        padding: 32px 0 20px 30px;
        float: right;
        width: 21.212121%;
        margin: 0;
        border-left: 1px solid #EBEBEB;
    }
    .elgg-sidebar-alt {
        position: relative;
        padding: 32px 30px 20px 0;
        float: left;
        width: 16.161616%;
        margin: 0 30px 0 0;
        border-right: 1px solid #EBEBEB;
    }
    .elgg-main {
        position: relative;
        min-height: 360px;
        padding: 12px 0 10px 0;
    }
    .elgg-main > .elgg-head {
        padding-bottom: 5px;
        border-bottom: 1px solid #EBEBEB;
        margin-bottom: 10px;
    }
    .elgg-layout-one-sidebar .elgg-main {
        float: left;
        width: 72.525252%;
    }
    .elgg-layout-two-sidebar .elgg-main {
        float: left;
        width: 50.101010%;
    }

    /***** PAGE FOOTER ******/
    .elgg-page-footer {
        color: #999;
        padding: 0 10px;
        position: relative;
    }

    .elgg-page-footer a:hover {
        color: #666;
    }
