-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2016 at 02:44 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noitha9m_ngocdung`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `article_category_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_language_id_foreign` (`language_id`),
  KEY `articles_user_id_foreign` (`user_id`),
  KEY `articles_user_id_edited_foreign` (`user_id_edited`),
  KEY `articles_article_category_id_foreign` (`article_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE IF NOT EXISTS `article_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_categories_language_id_foreign` (`language_id`),
  KEY `article_categories_user_id_foreign` (`user_id`),
  KEY `article_categories_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `colors_name_unique` (`name`),
  UNIQUE KEY `colors_unique_code_unique` (`unique_code`),
  KEY `colors_user_id_foreign` (`user_id`),
  KEY `colors_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `unique_code`, `position`, `user_id`, `user_id_edited`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, NULL, 22, 22, 'Tùy chọn', '2016-03-25 07:06:22', '2016-03-25 07:06:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lang_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_name_unique` (`name`),
  UNIQUE KEY `languages_lang_code_unique` (`lang_code`),
  KEY `languages_user_id_foreign` (`user_id`),
  KEY `languages_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `position`, `name`, `lang_code`, `user_id`, `user_id_edited`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, NULL, 'English', 'gb', NULL, NULL, '2016-03-09 09:31:09', '2016-03-09 09:31:09', NULL),
(14, NULL, 'Српски', 'rs', NULL, NULL, '2016-03-09 09:31:09', '2016-03-12 01:05:48', '2016-03-12 01:05:48'),
(15, NULL, 'Bosanski', 'ba', NULL, NULL, '2016-03-09 09:31:09', '2016-03-12 01:05:44', '2016-03-12 01:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `materials_name_unique` (`name`),
  UNIQUE KEY `materials_unique_code_unique` (`unique_code`),
  KEY `materials_user_id_foreign` (`user_id`),
  KEY `materials_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `unique_code`, `position`, `user_id`, `user_id_edited`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, 22, 'Tùy chọn', '0000-00-00 00:00:00', '2016-03-25 07:06:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_10_18_195027_create_languages_table', 1),
('2014_10_18_225005_create_article_categories_table', 1),
('2014_10_18_225505_create_articles_table', 1),
('2014_10_18_225928_create_photo_albums_table', 1),
('2014_10_18_231619_create_photos_table', 1),
('2016_02_23_150625_create_product_category', 2),
('2016_02_23_153344_create_product_sub_category', 2),
('2016_02_28_131005_create_colors_table', 3),
('2016_02_28_131023_create_materials_table', 3),
('2016_02_28_143608_create_cache_table', 3),
('2016_02_29_024356_create_producers_table', 3),
('2016_03_01_132949_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `slider` tinyint(1) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `photo_album_id` int(10) unsigned DEFAULT NULL,
  `album_cover` tinyint(1) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_language_id_foreign` (`language_id`),
  KEY `photos_photo_album_id_foreign` (`photo_album_id`),
  KEY `photos_user_id_foreign` (`user_id`),
  KEY `photos_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `language_id`, `position`, `slider`, `filename`, `name`, `description`, `photo_album_id`, `album_cover`, `user_id`, `user_id_edited`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, NULL, 0, '65ab633222ab10208f7ce82081e89fe310150b3c.jpg', 'Sản phẩm Nổi bật', '<p><div class="g" style="line-height: 1.2; text-align: left; font-size: small; font-family: arial, sans-serif; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><div class="rc" data-hveid="40" style="position: relative;"><h3 class="r" style="font-size: 18px; font-weight: normal; margin: 0px; padding: 0px; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; position: relative;"></h3></div></div></p><div class="g" style="line-height: 1.2; text-align: left; font-size: small; font-family: arial, sans-serif; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><div class="rc" data-hveid="33" style="position: relative;"><div class="s" style="max-width: 42em; color: rgb(84, 84, 84); line-height: 18px;"><div class="g" style="line-height: 1.2; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34);"><div class="rc" data-hveid="33" style="position: relative;"><div class="s" style="max-width: 42em; color: rgb(84, 84, 84); line-height: 18px;"><span class="st" style="line-height: 1.4; word-wrap: break-word;">If an empty&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">string</span>&nbsp;is passed as the source , a warning will be generated. ...&nbsp;<span class="ft">If, for instance, your&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">html</span>&nbsp;is in utf-8,&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">make</span>&nbsp;sure you have a meta tag in the&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">html''s</span>&nbsp;head</span>&nbsp;&nbsp;...</span></div></div></div><div class="g" style="line-height: 1.2; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34);"><div class="rc" data-hveid="40" style="position: relative;"><h3 class="r" style="font-size: 18px; margin: 0px; padding: 0px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; position: relative;"></h3></div></div><div class="g" style="line-height: 1.2; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34);"><div class="rc" data-hveid="33" style="position: relative;"><div class="s" style="max-width: 42em; color: rgb(84, 84, 84); line-height: 18px;"><span class="st" style="line-height: 1.4; word-wrap: break-word;">If an empty&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">string</span>&nbsp;is passed as the source , a warning will be generated. ...&nbsp;<span class="ft">If, for instance, your&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">html</span>&nbsp;is in utf-8,&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">make</span>&nbsp;sure you have a meta tag in the&nbsp;<span style="font-weight: bold; color: rgb(106, 106, 106);">html''s</span>&nbsp;head</span>&nbsp;&nbsp;...</span></div></div></div><div class="g" style="line-height: 1.2; margin-top: 0px; margin-bottom: 23px; color: rgb(34, 34, 34);"><div class="rc" data-hveid="40" style="position: relative;"><h3 class="r" style="font-size: 18px; margin: 0px; padding: 0px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; position: relative;"></h3></div></div><div><span class="st" style="line-height: 1.4; word-wrap: break-word;">If an empty&nbsp;<em style="font-weight: bold; font-style: normal; color: rgb(106, 106, 106);">string</em>&nbsp;is passed as the source , a warning will be generated. ...&nbsp;<span class="ft">If, for instance, your&nbsp;<em style="font-weight: bold; font-style: normal; color: rgb(106, 106, 106);">html</em>&nbsp;is in utf-8,&nbsp;<em style="font-weight: bold; font-style: normal; color: rgb(106, 106, 106);">make</em>&nbsp;sure you have a meta tag in the&nbsp;<em style="font-weight: bold; font-style: normal; color: rgb(106, 106, 106);">html''s</em>&nbsp;head</span>&nbsp;&nbsp;...</span></div></div></div></div>', 1, 0, 22, NULL, '2016-03-10 09:36:03', '2016-03-10 09:36:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photo_albums`
--

CREATE TABLE IF NOT EXISTS `photo_albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `folder_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_albums_language_id_foreign` (`language_id`),
  KEY `photo_albums_user_id_foreign` (`user_id`),
  KEY `photo_albums_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photo_albums`
--

INSERT INTO `photo_albums` (`id`, `language_id`, `position`, `name`, `description`, `folder_id`, `user_id`, `user_id_edited`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, NULL, 'albumm1', '<p style="margin-top: 9.1875px; margin-bottom: 9.1875px; padding: 0px; outline: 0px; max-width: 100%; font-family: ''Times New Roman''; font-size: 16px; line-height: 20px;"><img src="data:image/jpeg;base64,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bWxEYm9vbAAAAAAASW50cmJvb2wAAAAAAEJja2dPYmpjAAAAAQAAAAAAAFJHQkMAAAADAAAAAFJkICBkb3ViQG/gAAAAAAAAAAAAR3JuIGRvdWJAb+AAAAAAAAAAAABCbCAgZG91YkBv4AAAAAAAAAAAAEJyZFRVbnRGI1JsdAAAAAAAAAAAAAAAAEJsZCBVbnRGI1JsdAAAAAAAAAAAAAAAAFJzbHRVbnRGI1B4bEBywAAAAAAAAAAACnZlY3RvckRhdGFib29sAQAAAABQZ1BzZW51bQAAAABQZ1BzAAAAAFBnUEMAAAAATGVmdFVudEYjUmx0AAAAAAAAAAAAAAAAVG9wIFVudEYjUmx0AAAAAAAAAAAAAAAAU2NsIFVudEYjUHJjQFkAAAAAAAA4QklNA+0AAAAAABABLAAAAAEAAgEsAAAAAQACOEJJTQQmAAAAAAAOAAAAAAAAAAAAAD+AAAA4QklNA/IAAAAAAAoAAP///////wAAOEJJTQQNAAAAAAAEAAAAeDhCSU0EGQAAAAAABAAAAB44QklNA/MAAAAAAAkAAAAAAAAAAAEAOEJJTScQAAAAAAAKAAEAAAAAAAAAAjhCSU0D9QAAAAAASAAvZmYAAQBsZmYABgAAAAAAAQAvZmYAAQChmZoABgAAAAAAAQAyAAAAAQBaAAAABgAAAAAAAQA1AAAAAQAtAAAABgAAAAAAAThCSU0D+AAAAAAAcAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAA4QklNBAgAAAAAABAAAAABAAACQAAAAkAAAAAAOEJJTQQeAAAAAAAEAAAAADhCSU0EGgAAAAADNwAAAAYAAAAAAAAAAAAABAUAAAXcAAAAAQA4AAAAAQAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAXcAAAEBQAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAABAAAAABAAAAAAAAbnVsbAAAAAIAAAAGYm91bmRzT2JqYwAAAAEAAAAAAABSY3QxAAAABAAAAABUb3AgbG9uZwAAAAAAAAAATGVmdGxvbmcA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aW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pg0KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPg0KCTxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+DQoJCTxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnBkZj0iaHR0cDovL25zLmFkb2JlLmNvbS9wZGYvMS4zLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczpjcnM9Imh0dHA6Ly9ucy5hZG9iZS5jb20vY2FtZXJhLXJhdy1zZXR0aW5ncy8xLjAvIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxMy0wOC0yMVQwMzo1Mzo1NyswNzowMCIgeG1wOkNyZWF0ZURhdGU9IjIwMTMtMDYtMDVUMjM6MDM6NDkrMDc6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMTMtMDgtMjFUMDM6NTM6NTcrMDc6MDAiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0RCRjA2MjM4ODA5RTMxMTlDNzVFNkZBM0FFMDM0MTAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEMxNDBDQTJEQTA5RTMxMTlCMDVDNDM5RTY3RjdFQTYiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDpjMjY4ODYwZC0xNzMxLTRhZTktODUyMS1mMjMyMjRkYmFjMGEiIHBkZjpQcm9kdWNlcj0iQWRvYmUgQWNyb2JhdCA3LjAgSW1hZ2UgQ29udmVyc2lvbiBQbHVnLWluIiBwaG90b3Nob3A6TGVnYWN5SVBUQ0RpZ2VzdD0iRDhFRTlFNjFENDQwNzQyMTFFMTY4RjRFOEExQjNCN0EiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgY3JzOkFscmVhZHlBcHBsaWVkPSJUcnVlIj4NCgkJCTx4bXBNTTpIaXN0b3J5Pg0KCQkJCTxyZGY6U2VxPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY29udmVydGVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJmcm9tIGFwcGxpY2F0aW9uL3BkZiB0byBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozREJGMDYyMzg4MDlFMzExOUM3NUU2RkEzQUUwMzQxMCIgc3RFdnQ6d2hlbj0iMjAxMy0wOC0yMFQxODowNDoyNyswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiBzdEV2dDpjaGFuZ2VkPSIvIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gYXBwbGljYXRpb24vcGRmIHRvIGltYWdlL2pwZWciLz4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvanBlZyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6M0VCRjA2MjM4ODA5RTMxMTlDNzVFNkZBM0FFMDM0MTAiIHN0RXZ0OndoZW49IjIwMTMtMDgtMjBUMTg6MDQ6MjcrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NEIxNDBDQTJEQTA5RTMxMTlCMDVDNDM5RTY3RjdFQTYiIHN0RXZ0OndoZW49IjIwMTMtMDgtMjFUMDM6NTM6NTcrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NEMxNDBDQTJEQTA5RTMxMTlCMDVDNDM5RTY3RjdFQTYiIHN0RXZ0OndoZW49IjIwMTMtMDgtMjFUMDM6NTM6NTcrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCTwvcmRmOlNlcT4NCgkJCTwveG1wTU06SGlzdG9yeT4NCgkJCTx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNEQkYwNjIzODgwOUUzMTE5Qzc1RTZGQTNBRTAzNDEwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjNEQkYwNjIzODgwOUUzMTE5Qzc1RTZGQTNBRTAzNDEwIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9InV1aWQ6YzI2ODg2MGQtMTczMS00YWU5LTg1MjEtZjIzMjI0ZGJhYzBhIi8+DQoJCTwvcmRmOkRlc2NyaXB0aW9uPg0KCTwvcmRmOlJERj4NCjwveDp4bXBtZXRhPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg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', '52508bdfbf4126084be88687537f551829daac4f', 22, 22, '2016-03-10 08:19:39', '2016-03-10 09:35:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE IF NOT EXISTS `producers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `producers_name_unique` (`name`),
  UNIQUE KEY `producers_unique_code_unique` (`unique_code`),
  KEY `producers_user_id_foreign` (`user_id`),
  KEY `producers_user_id_edited_foreign` (`user_id_edited`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `unique_code`, `position`, `user_id`, `user_id_edited`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, NULL, 22, NULL, 'Nội Thất Ngọc Dũng', '2016-03-25 07:07:10', '2016-03-25 07:07:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `sub_category_id` int(10) unsigned NOT NULL,
  `showathome` enum('0','1') DEFAULT '0' COMMENT '''0''->notshow at home,''1''->show',
  `color_id` int(10) unsigned DEFAULT NULL,
  `material_id` int(10) unsigned DEFAULT NULL,
  `producer_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `time_period` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_unique_code_unique` (`unique_code`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_user_id_edited_foreign` (`user_id_edited`),
  KEY `products_sub_category_id_foreign` (`sub_category_id`),
  KEY `products_color_id_foreign` (`color_id`),
  KEY `products_material_id_foreign` (`material_id`),
  KEY `products_producer_id_foreign` (`producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `unique_code`, `position`, `user_id`, `user_id_edited`, `sub_category_id`, `showathome`, `color_id`, `material_id`, `producer_id`, `title`, `product_code`, `time_period`, `content`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(26, NULL, NULL, 22, NULL, 34, '0', 2, 1, NULL, 'Bàn Trà 1', 'BT1', NULL, '<p>Bàn Trà 1</p><p></p><p><br></p>', '57a2b1e93105cadea88bedc566783472f99dae93.jpg', '2016-03-25 18:38:36', '2016-03-25 19:02:19', NULL),
(27, NULL, NULL, 22, NULL, 34, '0', 2, 1, NULL, 'Bàn Trà 2', 'BT2', NULL, '<p><span style="font-size: 14px; line-height: 20px; font-weight: bold;">Bàn Trà 2</span><br></p>', 'b956ec642ee1015588b5cf0a782ad95d4adecab8.jpg', '2016-03-25 18:40:44', '2016-03-25 19:02:18', NULL),
(28, NULL, NULL, 22, NULL, 34, '0', 2, 1, NULL, 'Bàn Trà 3', 'BT3', NULL, '<p>Bàn Trà 3<br></p>', 'd3d9718b49fbb41a960f84d4976624a6d07111d5.jpg', '2016-03-25 18:41:18', '2016-03-25 19:02:17', NULL),
(29, NULL, NULL, 22, NULL, 34, '0', 2, 1, NULL, 'Bàn Trà 4', 'BT4', NULL, '<p>Bàn Trà 4<br></p>', 'eb8eb5580e67bdcd2f9a7f307763c3d8726ff2da.jpg', '2016-03-25 18:42:45', '2016-03-25 18:42:45', NULL),
(30, NULL, NULL, 22, NULL, 34, '0', 2, 1, NULL, 'Bàn Trà 5', 'BT5', NULL, '<p>Bàn Trà 5<br></p>', '248bbd6ebd23382bae0d445997dcdf93f482e65b.jpg', '2016-03-25 18:43:10', '2016-03-25 18:43:10', NULL),
(31, NULL, NULL, 22, NULL, 33, '0', 2, 1, NULL, 'Sofa 1', 'SF1', NULL, 'Sofa 1', 'd8c65b48859f217388f63816e03db088a13690c0.jpg', '2016-03-25 18:44:42', '2016-03-25 18:44:42', NULL),
(32, NULL, NULL, 22, NULL, 33, '1', 2, 1, NULL, 'Sofa 2', 'SF2', NULL, '<p>Sofa 2<br></p>', 'a565e3d6802fbabb57a6d1c409e83312f4d2bc6a.jpg', '2016-03-25 18:45:09', '2016-03-25 19:02:30', NULL),
(33, NULL, NULL, 22, NULL, 33, '0', 2, 1, NULL, 'Sofa 3', 'SF3', NULL, '<p>Sofa 3<br></p>', '5ce3f43ceca61784afc942ee58b863ce68dd9cd5.jpg', '2016-03-25 18:45:36', '2016-03-25 18:45:36', NULL),
(34, NULL, NULL, 22, NULL, 33, '0', 2, 1, NULL, 'Sofa 4', 'SF4', NULL, '<p>Sofa 4<br></p>', '3209442cb52dc337fb4b1a2443ef896ff95f32be.jpg', '2016-03-25 18:46:19', '2016-03-25 18:46:19', NULL),
(35, NULL, NULL, 22, NULL, 33, '0', 2, 1, NULL, 'Sofa 5', 'SF5', NULL, '<p>Sofa 5<br></p>', 'e6fa1a7e2e7d174b95592e04c67c1019e06f0d5e.jpg', '2016-03-25 18:46:48', '2016-03-25 18:46:48', NULL),
(36, NULL, NULL, 22, NULL, 35, '0', 2, 1, NULL, 'Kệ Tivi 1', 'KTV1', NULL, '<p>Kệ Tivi 1<br></p>', '80e9d71ffe80624bddeed2c69d5e427280dd9b79.png', '2016-03-25 18:48:26', '2016-03-25 18:48:26', NULL),
(37, NULL, NULL, 22, NULL, 35, '1', 2, 1, NULL, 'Kệ Tivi 2', 'KTV2', NULL, '<p>Kệ Tivi 2<br></p>', '0de770db42c2151950bf2742fc4540fa8180855c.jpg', '2016-03-25 18:48:51', '2016-03-25 19:02:27', NULL),
(38, NULL, NULL, 22, NULL, 35, '0', 2, 1, NULL, 'Kệ Tivi 3', 'KTV3', NULL, '<p>Kệ Tivi 3</p>', 'caeacf6786168d1517ad0a759dbd19d4c7e3886a.jpg', '2016-03-25 18:49:19', '2016-03-25 18:49:19', NULL),
(39, NULL, NULL, 22, NULL, 35, '0', 2, 1, NULL, 'Kệ Tivi 4', 'KTV4', NULL, '<p>Kệ Tivi 4<br></p>', '040782320ebb5129b99e1caf338e5b304bf510af.jpg', '2016-03-25 18:49:53', '2016-03-25 18:49:53', NULL),
(40, NULL, NULL, 22, NULL, 35, '0', 2, 1, NULL, 'Kệ Tivi 5', 'KTV5', NULL, '<p>Kệ Tivi 5<br></p>', '1e55791d917545f2aed83cca4786ccbead7d2f74.jpg', '2016-03-25 18:50:24', '2016-03-25 18:50:24', NULL),
(41, NULL, NULL, 22, NULL, 36, '1', 2, 1, NULL, 'Giá Sách Đẹp 1', 'GS1', NULL, '<p>Giá Sách Đẹp 1<br></p>', '3b61ab006020f98ece95c1d1dfd626e58c293ca0.jpg', '2016-03-25 18:52:51', '2016-03-25 19:02:21', NULL),
(42, NULL, NULL, 22, NULL, 36, '0', 2, 1, NULL, 'Giá Sách Đẹp 2', 'GS2', NULL, '<p>Giá Sách Đẹp 2<br></p>', 'df18539eaad0fc6d28ad7576dff5fdcff10a9496.gif', '2016-03-25 18:53:16', '2016-03-25 18:53:16', NULL),
(43, NULL, NULL, 22, NULL, 36, '0', 2, 1, NULL, 'Giá Sách Đẹp 3', 'GS3', NULL, '<p>Giá Sách Đẹp 3<br></p>', 'cbaa6522d72d86fc51ac47219668271f5fc1eb5f.jpg', '2016-03-25 18:53:40', '2016-03-25 18:53:40', NULL),
(44, NULL, NULL, 22, NULL, 36, '0', 2, 1, NULL, 'Giá Sách Đẹp 4', 'GS4', NULL, '<p>Giá Sách Đẹp 4<br></p>', '667174421b819c864411134c0c465827b13f2d2e.jpg', '2016-03-25 18:54:14', '2016-03-25 18:54:14', NULL),
(45, NULL, NULL, 22, NULL, 36, '0', 2, 1, NULL, 'Giá Sách Đẹp 5', 'GS5', NULL, '<p>Giá Sách Đẹp 5<br></p>', 'e661114f411b3d992e74b44d66e470d0f576fb6f.png', '2016-03-25 18:54:42', '2016-03-25 18:56:07', NULL),
(46, NULL, NULL, 22, NULL, 40, '1', 2, 1, NULL, 'Giường Ngủ Đẹp 1', 'GN1', NULL, '<p>Giường Ngủ Đẹp 1<br></p>', '365332cf2016ede964c386ad9cf0e69668f2eb70.jpg', '2016-03-25 18:57:53', '2016-03-25 19:02:26', NULL),
(47, NULL, NULL, 22, NULL, 40, '0', 2, 1, NULL, 'Giường Ngủ Đẹp 2', 'GN2', NULL, '<p>Giường Ngủ Đẹp 2<br></p>', '418278b323b974289be61c10bb6442a901b18de6.jpg', '2016-03-25 18:59:48', '2016-03-25 18:59:48', NULL),
(48, NULL, NULL, 22, NULL, 40, '0', 2, 1, NULL, 'Giường Ngủ Đẹp 3', 'GN3', NULL, '<p>Giường Ngủ Đẹp 3<br></p>', '1bf7c453d1f06910db9079954f44e591c7f2eda7.jpg', '2016-03-25 19:00:17', '2016-03-25 19:00:17', NULL),
(49, NULL, NULL, 22, NULL, 40, '0', 2, 1, NULL, 'Giường Ngủ Đẹp 4', 'GN4', NULL, '<p>Giường Ngủ Đẹp 4<br></p>', 'e09f38cb75976c6bd8d1f7f25b1331a59e65836c.JPG', '2016-03-25 19:00:45', '2016-03-25 19:00:45', NULL),
(50, NULL, NULL, 22, NULL, 40, '0', 2, 1, NULL, 'Giường Ngủ Đẹp 5', 'GN5', NULL, '<p>Giường Ngủ Đẹp 5<br></p>', 'cf70d8640c5f9460acc430a68a5de461c2f15d18.JPG', '2016-03-25 19:01:23', '2016-03-25 19:01:23', NULL),
(51, NULL, NULL, 22, NULL, 41, '0', 2, 1, NULL, 'Bàn Trang Điểm 1', 'BTD1', NULL, '<p>Bàn Trang Điểm 1<br></p>', '69817cb23ea696ad9ebae858078f452d3b2838f5.jpg', '2016-03-25 19:05:19', '2016-03-25 19:05:19', NULL),
(52, NULL, NULL, 22, NULL, 41, '0', 2, 1, NULL, 'Bàn Trang Điểm 2', 'BTD2', NULL, '<p>Bàn Trang Điểm 2<br></p>', '3c96d4f305076999fd8349430f0524602e00f73c.jpg', '2016-03-25 19:05:42', '2016-03-25 19:05:42', NULL),
(53, NULL, NULL, 22, NULL, 41, '0', 2, 1, NULL, 'Bàn Trang Điểm 3', 'BTD3', NULL, '<p>Bàn Trang Điểm 3<br></p>', 'e97b7c62559eaa5e4833de04197d22d3dfaeb0d8.jpg', '2016-03-25 19:06:04', '2016-03-25 19:06:04', NULL),
(54, NULL, NULL, 22, NULL, 41, '0', 2, 1, NULL, 'Bàn Trang Điểm 4', 'BTD4', NULL, '<p>Bàn Trang Điểm 4<br></p>', 'a1692c882df42eff7248d670930b5fccfd7b4c7d.jpg', '2016-03-25 19:06:30', '2016-03-25 19:06:30', NULL),
(55, NULL, NULL, 22, NULL, 41, '0', 2, 1, NULL, 'Bàn Trang Điểm 5', 'BTD5', NULL, '<p>Bàn Trang Điểm 5<br></p>', '3310bab02f0db389937402235f0f12c3476e45cb.jpg', '2016-03-25 19:06:58', '2016-03-25 19:06:58', NULL),
(56, NULL, NULL, 22, NULL, 42, '0', 2, 1, NULL, 'Tủ Đầu Giường 1', 'TDG1', NULL, '<p>Tủ Đầu Giường 1<br></p>', 'dbd2e3851c5d8e98452c750f7d5d5b655a51155c.jpg', '2016-03-25 19:07:37', '2016-03-25 19:07:37', NULL),
(57, NULL, NULL, 22, NULL, 42, '0', 2, 1, NULL, 'Tủ Đầu Giường 2', 'TDG2', NULL, '<p>Tủ Đầu Giường 2<br></p>', '7c37e95ad18ef15ba4ef68ace493c7c7b069627d.jpg', '2016-03-25 19:08:01', '2016-03-25 19:08:01', NULL),
(58, NULL, NULL, 22, NULL, 42, '0', 2, 1, NULL, 'Tủ Đầu Giường 3', 'TDG3', NULL, '<p>Tủ Đầu Giường 3<br></p>', '62fe6835ea147c18740867dd162d8c9ee7cb5b69.jpg', '2016-03-25 19:11:27', '2016-03-25 19:11:27', NULL),
(59, NULL, NULL, 22, NULL, 42, '0', 2, 1, NULL, 'Tủ Đầu Giường 4', 'TDG4', NULL, '<p>Tủ Đầu Giường 4<br></p>', '1a91b2a34f39ec534a72c60c2076df5234db1a98.JPG', '2016-03-25 19:11:56', '2016-03-25 19:11:56', NULL),
(60, NULL, NULL, 22, NULL, 42, '0', 2, 1, NULL, 'Tủ Đầu Giường 5', 'TDG5', NULL, '<p>Tủ Đầu Giường 5<br></p>', 'e851bdcbf7e7fb2c64cd7a6e3d0288e57e48119b.jpg', '2016-03-25 19:12:19', '2016-03-25 19:12:19', NULL),
(61, NULL, NULL, 22, NULL, 60, '0', 2, 1, NULL, 'Tủ Áo Gỗ Thịt 1', 'TAGT1', NULL, '<p>Tủ Áo Gỗ Thịt 1<br></p>', '670eaa0900789de7f24b22238dbc8c51bf71de95.jpg', '2016-03-25 19:13:40', '2016-03-25 19:13:40', NULL),
(62, NULL, NULL, 22, NULL, 60, '0', 2, 1, NULL, 'Tủ Áo Gỗ Thịt 2', 'TAGT2', NULL, '<p>Tủ Áo Gỗ Thịt 2<br></p>', '656d3daa044fc7921ac57154a32380a85754ffd8.jpg', '2016-03-25 19:14:03', '2016-03-25 19:14:03', NULL),
(63, NULL, NULL, 22, NULL, 60, '0', 2, 1, NULL, 'Tủ Áo Gỗ Thịt 3', 'TAGT3', NULL, '<p>Tủ Áo Gỗ Thịt 3<br></p>', 'dbb0b79d49e767b346eaaca78ade44c30a5d160d.jpg', '2016-03-25 19:14:27', '2016-03-25 19:14:27', NULL),
(64, NULL, NULL, 22, NULL, 60, '0', 2, 1, NULL, 'Tủ Áo Gỗ Thịt 4', 'TAGT4', NULL, '<p>Tủ Áo Gỗ Thịt 4<br></p>', '27c436280b4681a0e9302bcee99a347cedf550d0.jpg', '2016-03-25 19:15:34', '2016-03-25 19:15:34', NULL),
(65, NULL, NULL, 22, NULL, 60, '0', 2, 1, NULL, 'Tủ Áo Gỗ Thịt 5', 'TAGT5', NULL, '<p>Tủ Áo Gỗ Thịt 5<br></p>', 'ea29065f1dd61eae3f7851663efa5e7d541cd0aa.jpg', '2016-03-25 19:16:09', '2016-03-25 19:16:09', NULL),
(66, NULL, NULL, 22, NULL, 61, '0', 2, 1, NULL, 'Tủ Áo Gỗ Công Nghiệp 1', 'TACN1', NULL, '<p>Tủ Áo Gỗ Công Nghiệp 1<br></p>', '239a6225581c23cb61e5e45e8829ff1143cbe2e5.jpg', '2016-03-25 19:17:57', '2016-03-25 19:17:57', NULL),
(67, NULL, NULL, 22, NULL, 61, '0', 2, 1, NULL, 'Tủ Áo Gỗ Công Nghiệp 2', 'TACN2', NULL, '<p>Tủ Áo Gỗ Công Nghiệp 2<br></p>', '09d0295ff8f7c178b16a5a415ec3b0652f204477.jpg', '2016-03-25 19:18:46', '2016-03-25 19:18:46', NULL),
(68, NULL, NULL, 22, NULL, 61, '0', 2, 1, NULL, 'Tủ Áo Gỗ Công Nghiệp 3', 'TACN3', NULL, '<p>Tủ Áo Gỗ Công Nghiệp 3<br></p>', 'ddd68bc7b7d9d5401bce021a35ffdec0402a8f49.jpg', '2016-03-25 19:19:12', '2016-03-25 19:19:12', NULL),
(69, NULL, NULL, 22, NULL, 61, '0', 2, 1, NULL, 'Tủ Áo Gỗ Công Nghiệp 4', 'TACN4', NULL, '<p>Tủ Áo Gỗ Công Nghiệp 4<br></p>', 'aaee8dbcfa445f0f67c6c3398445783301390cd3.jpg', '2016-03-25 19:19:47', '2016-03-25 19:19:47', NULL),
(70, NULL, NULL, 22, NULL, 45, '0', 2, 1, NULL, 'Bàn Ghế Ăn 1', 'BGA1', NULL, '<p>Bàn Ghế Ăn 1<br></p>', 'c1b78185c164dba9700530aeb1e9e33e27d3902d.jpg', '2016-03-25 19:22:43', '2016-03-25 19:22:43', NULL),
(71, NULL, NULL, 22, NULL, 45, '0', 2, 1, NULL, 'Bàn Ghế Ăn 2', 'BGA2', NULL, '<p>Bàn Ghế Ăn 2<br></p>', 'ba1c8903561f53f9576b4255e1cd0f6893bf5e1d.jpg', '2016-03-25 19:23:20', '2016-03-25 19:23:20', NULL),
(72, NULL, NULL, 22, NULL, 45, '0', 2, 1, NULL, 'Bàn Ghế Ăn 3', 'BGA3', NULL, '<p>Bàn Ghế Ăn 3<br></p>', '2b7db4091766477b27a95d0428e75f19b134096b.jpg', '2016-03-25 19:23:45', '2016-03-25 19:23:45', NULL),
(73, NULL, NULL, 22, NULL, 45, '0', 2, 1, NULL, 'Bàn Ghế Ăn 4', 'BGA4', NULL, '<p>Bàn Ghế Ăn 4<br></p>', '9b58d7d40a6aa342e19ac5590e9cc57168756e98.jpg', '2016-03-25 19:24:14', '2016-03-25 19:24:14', NULL),
(74, NULL, NULL, 22, NULL, 45, '0', 2, 1, NULL, 'Bàn Ghế Ăn 5', 'BGA5', NULL, '<p>Bàn Ghế Ăn 5<br></p>', '584b9a5768f67af0e826a9d984d41a9003f1b540.JPG', '2016-03-25 19:24:39', '2016-03-25 19:24:39', NULL),
(75, NULL, NULL, 22, NULL, 62, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Thịt 1', 'TBGT1', NULL, '<p>Tủ Bếp Gỗ Thịt 1<br></p>', '70265a1b5fcf748152637df30409a8c15d08cb88.jpg', '2016-03-25 19:25:22', '2016-03-25 19:25:22', NULL),
(76, NULL, NULL, 22, NULL, 62, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Thịt 2', 'TBGT2', NULL, '<p>Tủ Bếp Gỗ Thịt 2<br></p>', '691334eaf24e249707ade4d72cc3a8dbe6394c7a.jpg', '2016-03-25 19:25:52', '2016-03-25 19:25:52', NULL),
(77, NULL, NULL, 22, NULL, 62, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Thịt 3', 'TBGT3', NULL, '<p>Tủ Bếp Gỗ Thịt 3<br></p>', '22a13122a30d1bb10b296756e54ab4ee02a602da.jpg', '2016-03-25 19:26:20', '2016-03-25 19:26:20', NULL),
(78, NULL, NULL, 22, NULL, 62, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Thịt 4', 'TBGT4', NULL, '<p>Tủ Bếp Gỗ Thịt 4<br></p>', '6a12cdd5e35e69b71d72754970beff7aba415c58.JPG', '2016-03-25 19:26:48', '2016-03-25 19:26:48', NULL),
(79, NULL, NULL, 22, NULL, 62, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Thịt 5', 'TBGT5', NULL, '<p>Tủ Bếp Gỗ Thịt 5<br></p>', '4a1a77967b94219d476f89e607d689c282a791a1.JPG', '2016-03-25 19:27:17', '2016-03-25 19:27:17', NULL),
(80, NULL, NULL, 22, NULL, 63, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Công Nghiệp 1', 'TBCN1', NULL, '<p>Tủ Bếp Gỗ Công Nghiệp 1<br></p>', '744862adc4a0a9b9d2024570f02b76298e7628fb.jpg', '2016-03-25 19:28:21', '2016-03-25 19:28:21', NULL),
(81, NULL, NULL, 22, NULL, 63, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Công Nghiệp 2', 'TBCN2', NULL, '<p><span style="line-height: 18.5714px;">Tủ Bếp Gỗ Công Nghiệp 2</span><br></p>', 'fbaed619ea33f7566926197f883e1c37adca718e.JPG', '2016-03-25 19:28:44', '2016-03-25 19:28:44', NULL),
(82, NULL, NULL, 22, NULL, 63, '0', 2, 1, NULL, 'Tủ Bếp Gỗ Công Nghiệp 3', 'TBCN3', NULL, '<p>Tủ Bếp Gỗ Công Nghiệp 3<br></p>', '0b162b2edf64a23f7439f29148196ebe2b406a86.jpg', '2016-03-25 19:29:08', '2016-03-25 19:29:08', NULL),
(83, NULL, NULL, 22, NULL, 64, '0', 2, 1, NULL, 'Tủ Bếp Acrylic 1', 'TBA1', NULL, '<p>Tủ Bếp Acrylic 1<br></p>', 'b9583a4112b914d3f98a6a07fc1531c89ae01061.jpg', '2016-03-25 19:29:52', '2016-03-25 19:29:52', NULL),
(84, NULL, NULL, 22, NULL, 64, '0', 2, 1, NULL, 'Tủ Bếp Acrylic 2', 'TBA2', NULL, '<p>Tủ Bếp Acrylic 2<br></p>', '4575450181e1cbde100514c0c6c44943928e7644.jpg', '2016-03-25 19:30:13', '2016-03-25 19:30:13', NULL),
(85, NULL, NULL, 22, NULL, 64, '0', 2, 1, NULL, 'Tủ Bếp Acrylic 3', 'TBA3', NULL, '<p>Tủ Bếp Acrylic 3<br></p>', '6ab8b85a1ed9deb4fde9a7b70f4a7bb94aa63d09.jpg', '2016-03-25 19:30:30', '2016-03-25 19:30:30', NULL),
(86, NULL, NULL, 22, NULL, 64, '0', 2, 1, NULL, 'Tủ Bếp Acrylic 4', 'TBA4', NULL, '<p>Tủ Bếp Acrylic 4<br></p>', '922b7963fb83223100fc1e4dc9fc9116449b2fd6.jpg', '2016-03-25 19:30:53', '2016-03-25 19:30:53', NULL),
(87, NULL, NULL, 22, NULL, 64, '0', 2, 1, NULL, 'Tủ Bếp Acrylic 5', 'TBA5', NULL, '<p>Tủ Bếp Acrylic 5<br></p>', '6c2ad5841a845911517fb9fb2d2a2a414bb59cd1.jpg', '2016-03-25 19:31:20', '2016-03-25 19:31:20', NULL),
(88, NULL, NULL, 22, NULL, 65, '0', 2, 1, NULL, 'Bàn Thờ 1', 'BTH1', NULL, '<p>Bàn Thờ 1<br></p>', 'c14d26756e9daa5a97b7b3a4f20645df212daa66.jpg', '2016-03-25 19:32:12', '2016-03-25 19:32:12', NULL),
(89, NULL, NULL, 22, NULL, 65, '0', 2, 1, NULL, 'Bàn Thờ 2', 'BTH2', NULL, '<p><span style="line-height: 18.5714px;">Bàn Thờ 2</span><br></p>', '67744026b30a72164edbfddc7ab2868e4d5737cc.jpg', '2016-03-25 19:32:33', '2016-03-25 19:32:33', NULL),
(90, NULL, NULL, 22, NULL, 65, '0', 2, 1, NULL, 'Bàn Thờ 3', 'BTH3', NULL, '<p>Bàn Thờ 3<br></p>', 'b0fab6f00a0af1a5ff38776814d5cd0c122775ca.jpg', '2016-03-25 19:32:55', '2016-03-25 19:32:55', NULL),
(91, NULL, NULL, 22, NULL, 66, '0', 2, 1, NULL, 'Hán Gian 1', 'HG1', NULL, '<p>Hán Gian 1<br></p>', '60d54d30584bb24c9180c44ee4f91ce4e7582142.png', '2016-03-25 19:33:29', '2016-03-25 19:33:29', NULL),
(92, NULL, NULL, 22, NULL, 66, '0', 2, 1, NULL, 'Hán Gian 2', 'HG2', NULL, '<p>Hán Gian 2<br></p>', 'f9730a9b6b0e7ffaaadba61502e3fd1abda08014.jpg', '2016-03-25 19:33:50', '2016-03-25 19:33:50', NULL),
(93, NULL, NULL, 22, NULL, 66, '0', 2, 1, NULL, 'Hán Gian 3', 'HG3', NULL, '<p>Hán Gian 3<br></p>', 'f4476e20972ed9439a7a1d4d01f5374afa19670e.gif', '2016-03-25 19:34:06', '2016-03-25 19:34:06', NULL),
(94, NULL, NULL, 22, NULL, 68, '0', 2, 1, NULL, 'Hoành Phi Câu Đối 1', 'HPCD1', NULL, '<p>Hoành Phi Câu Đối 1<br></p>', '8b9954287fd3251b9ea23f9c73aa615309bfb033.jpg', '2016-03-25 19:34:34', '2016-03-25 19:34:34', NULL),
(95, NULL, NULL, 22, NULL, 68, '0', 2, 1, NULL, 'Hoành Phi Câu Đối 2', 'HPCD2', NULL, '<p>Hoành Phi Câu Đối 2<br></p>', '1b3e7e935972bc7e1fd899a1ca52551a6fd93317.jpg', '2016-03-25 19:34:59', '2016-03-25 19:34:59', NULL),
(96, NULL, NULL, 22, NULL, 52, '0', 2, 1, NULL, 'Giường Ngủ Trẻ Em 1', 'GNTE1', NULL, '<p>Giường Ngủ Trẻ Em 1<br></p>', '645846163a71754594ca908f94759a218acfded6.jpg', '2016-03-25 19:35:38', '2016-03-25 19:35:38', NULL),
(97, NULL, NULL, 22, NULL, 52, '0', 2, 1, NULL, 'Giường Ngủ Trẻ Em 2', 'GNTE2', NULL, '<p>Giường Ngủ Trẻ Em 2<br></p>', 'c5b9d10b81f4991505d17578539982bc9752220b.jpg', '2016-03-25 19:36:04', '2016-03-25 19:36:04', NULL),
(98, NULL, NULL, 22, NULL, 52, '0', 2, 1, NULL, 'Giường Ngủ Trẻ Em 3', 'GNTE3', NULL, '<p>Giường Ngủ Trẻ Em 3<br></p>', 'e0990c4c72f25652f1017e64686f26b8d176a84a.jpg', '2016-03-25 19:36:26', '2016-03-25 19:36:26', NULL),
(99, NULL, NULL, 22, NULL, 53, '0', 2, 1, NULL, 'Tủ Áo Trẻ Em 1', 'TATE1', NULL, '<p>Tủ Áo Trẻ Em 1<br></p>', '0485e072bc9586866c224c9761c10489ff91fc6a.jpg', '2016-03-25 19:37:05', '2016-03-25 19:37:05', NULL),
(100, NULL, NULL, 22, NULL, 69, '0', 2, 1, NULL, 'Cầu Thang Đẹp 1', 'CTD1', NULL, '<p>Cầu Thang Đẹp 1<br></p>', '015d3340534433f84c7d5d6adf1fcca5f94977d3.jpg', '2016-03-25 19:37:36', '2016-03-25 19:37:36', NULL),
(101, NULL, NULL, 22, NULL, 69, '0', 2, 1, NULL, 'Cầu Thang Đẹp 2', 'CTD2', NULL, '<p>Cầu Thang Đẹp 2<br></p>', 'b11d0f092c7b98abb8e8fa04f475f81e48b09f73.jpg', '2016-03-25 19:37:55', '2016-03-25 19:37:55', NULL),
(102, NULL, NULL, 22, NULL, 69, '0', 2, 1, NULL, 'Cầu Thang Đẹp 3', 'CTD3', NULL, '<p>Cầu Thang Đẹp 3<br></p>', 'd49d5dc7f794176640987d708702f0a8f309796b.JPG', '2016-03-25 19:38:18', '2016-03-25 19:38:18', NULL),
(103, NULL, NULL, 22, NULL, 69, '1', 2, 1, NULL, 'Cầu Thang Đẹp 4', 'CTD4', NULL, '<p>Cầu Thang Đẹp 4<br></p>', '28f02e0b18d42a756e5f9e78801ff17be0845839.jpg', '2016-03-25 19:38:38', '2016-03-25 19:38:50', NULL),
(104, NULL, NULL, 22, NULL, 70, '0', 2, 1, NULL, 'Cửa Gỗ Đẹp 1', 'CGD1', NULL, '<p>Cửa Gỗ Đẹp 1<br></p>', '3e25db40e4156ecc6597345d5acf78d43579707b.jpg', '2016-03-25 19:39:21', '2016-03-25 19:39:21', NULL),
(105, NULL, NULL, 22, NULL, 70, '0', 2, 1, NULL, 'Cửa Gỗ Đẹp 2', 'CGD2', NULL, '<p>Cửa Gỗ Đẹp 2<br></p>', 'f4749a5d02a5bdfa895e43687f7e35647cebfa25.jpg', '2016-03-25 19:39:39', '2016-03-25 19:39:39', NULL),
(106, NULL, NULL, 22, NULL, 70, '0', 2, 1, NULL, 'Cửa Gỗ Đẹp 3', 'CGD3', NULL, '<p>Cửa Gỗ Đẹp 3<br></p>', '55446322dd0dd6d261c01df286d63b5bfcb91b02.png', '2016-03-25 19:40:00', '2016-03-25 19:40:00', NULL),
(107, NULL, NULL, 22, NULL, 70, '0', 2, 1, NULL, 'Cửa Gỗ Đẹp 4', 'CGD4', NULL, '<p>Cửa Gỗ Đẹp 4<br></p>', '11dc4216fd0d070b0c1c8b9553bbfcb96be484a0.jpg', '2016-03-25 19:40:20', '2016-03-25 19:40:20', NULL),
(108, NULL, NULL, 22, NULL, 70, '0', 2, 1, NULL, 'Cửa Gỗ Đẹp 5', 'CGD5', NULL, '<p>Cửa Gỗ Đẹp 5<br></p>', '4338587f89afeae9e09f3255a8f30fc69ff377ca.jpg', '2016-03-25 19:40:38', '2016-03-25 19:40:38', NULL),
(109, NULL, NULL, 22, NULL, 71, '0', 2, 1, NULL, 'Vách Ngăn 1', 'VN1', NULL, '<p>Vách Ngăn 1<br></p>', 'db5274027c73d87251db366fab59c9810f6c682c.jpg', '2016-03-25 19:41:05', '2016-03-25 19:41:05', NULL),
(110, NULL, NULL, 22, NULL, 71, '0', 2, 1, NULL, 'Vách Ngăn 2', 'VN2', NULL, '<p>Vách Ngăn 2<br></p>', '76aab3f136fbc2f223e398c5c7f1f0d18bbf522d.jpg', '2016-03-25 19:41:24', '2016-03-25 19:41:24', NULL),
(111, NULL, NULL, 22, NULL, 71, '0', 2, 1, NULL, 'Vách Ngăn 3', 'VN3', NULL, '<p>Vách Ngăn 3<br></p>', '726f2ef3e93205a9a8a9e2b392df005218f95362.jpg', '2016-03-25 19:41:46', '2016-03-25 19:41:46', NULL),
(112, NULL, NULL, 22, NULL, 62, '1', 2, 1, NULL, 'Tủ bếp 6', 'TB6', NULL, '<p>Tủ bếp đẹp.</p>', '6102f4bf7d990d15b593979d9eaf0f34dc8f0edd.jpg', '2016-03-26 20:44:49', '2016-03-26 20:45:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_category_unique_code_unique` (`unique_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `unique_code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'NỘI THẤT PHÒNG KHÁCH', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, NULL, 'NỘI THẤT PHÒNG NGỦ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, NULL, 'NỘI THẤT PHÒNG ĂN', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, NULL, 'NỘI THẤT PHÒNG THỜ', '0000-00-00 00:00:00', '2016-03-24 18:57:26', NULL),
(5, NULL, 'NỘI THẤT TRẺ EM', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, NULL, 'NỘI THẤT KHÁC', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE IF NOT EXISTS `product_sub_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unique_code` varchar(255) DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_sub_category_unique_code_unique` (`unique_code`),
  KEY `product_sub_category_category_id_foreign` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`id`, `unique_code`, `category_id`, `name`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, NULL, 1, 'Sofa', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, NULL, 1, 'Bàn Trà', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, NULL, 1, 'Kệ Tivi', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(36, NULL, 1, 'Giá Sách Đẹp', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(40, NULL, 2, 'Giường Ngủ Đẹp', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(41, NULL, 2, 'Bàn Trang Điểm', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(42, NULL, 2, 'Tủ Đầu Giường', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(45, NULL, 3, 'Bàn Ghế Ăn', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(52, NULL, 5, 'Giường Ngủ Trẻ Em', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(53, NULL, 5, 'Tủ Áo Trẻ Em', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(60, 'A20EEF0A', 2, 'Tủ Áo Gỗ Thịt', 22, '2016-03-24 18:53:24', '2016-03-24 18:53:24', NULL),
(61, 'BD51336C', 2, 'Tủ Áo Gỗ Công Nghiệp', 22, '2016-03-24 18:53:55', '2016-03-24 18:53:55', NULL),
(62, '79EADFED', 3, 'Tủ Bếp Gỗ Thịt', 22, '2016-03-24 18:55:34', '2016-03-24 18:55:34', NULL),
(63, '88DCF6C5', 3, 'Tủ Bếp Gỗ Công Nghiệp', 22, '2016-03-24 18:56:02', '2016-03-24 18:56:02', NULL),
(64, '070A1D54', 3, 'Tủ Bếp Acrylic', 22, '2016-03-24 18:56:46', '2016-03-24 18:56:46', NULL),
(65, '09BD8874', 4, 'Bàn Thờ', 22, '2016-03-24 19:03:16', '2016-03-24 19:03:16', NULL),
(66, '2745C970', 4, 'Hán Gian', 22, '2016-03-24 19:03:31', '2016-03-24 19:03:31', NULL),
(68, '694FD75F', 4, 'Hoành Phi Câu Đối', 22, '2016-03-24 19:05:57', '2016-03-24 19:05:57', NULL),
(69, 'B81D3295', 6, 'Cầu Thang Đẹp', 22, '2016-03-24 19:11:35', '2016-03-24 19:11:35', NULL),
(70, '17C21042', 6, 'Cửa Gỗ Đẹp', 22, '2016-03-24 19:11:48', '2016-03-24 19:11:48', NULL),
(71, '92889AD1', 6, 'Vách Ngăn', 22, '2016-03-24 19:12:15', '2016-03-24 19:12:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `confirmation_code`, `confirmed`, `admin`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 'Admin User', 'admin_user', 'admin@admin.com', '$2y$10$fYFCKmEnN5rMdDW8.WBLJudbhrltBtF5Xb497ciCv64NkGeY1ZdDK', 'c9c872d2ac90e6d973e5fc8552a749d7', 1, 1, NULL, '2016-03-09 09:31:09', '2016-03-09 09:31:09', NULL),
(23, 'Test User', 'test_user', 'user@user.com', '$2y$10$ugwsywICyZJqpL4QB80lVeCbsyKIA2NQTWgFTxvGx7I3TmfVOrhgS', 'e0572ccf5eab22e7802a2b31305f9b48', 1, 0, NULL, '2016-03-09 09:31:09', '2016-03-09 09:31:09', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `articles_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD CONSTRAINT `article_categories_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `article_categories_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `article_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `colors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `languages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `materials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `photos_photo_album_id_foreign` FOREIGN KEY (`photo_album_id`) REFERENCES `photo_albums` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `photos_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `photos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `photo_albums`
--
ALTER TABLE `photo_albums`
  ADD CONSTRAINT `photo_albums_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `photo_albums_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `photo_albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `producers`
--
ALTER TABLE `producers`
  ADD CONSTRAINT `producers_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `producers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `product_sub_category` (`id`),
  ADD CONSTRAINT `products_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD CONSTRAINT `product_sub_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
