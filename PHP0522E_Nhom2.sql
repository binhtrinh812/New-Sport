-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2022 at 02:10 AM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHP0522E_Nhom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `photo`, `description`, `created_at`) VALUES
(1, 'logo_newspaper.png', '', '2022-08-30 14:33:15'),
(2, 'logo_project.png', '', '2022-08-30 14:33:15'),
(3, 'backgound.jpg', '', '2022-08-30 14:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `slug`) VALUES
(1, 'Thể Thao', 1, '2022-08-30 09:14:44', 'the-thao'),
(2, 'Xã hội', 1, '2022-08-30 09:14:44', 'xa-hoi'),
(3, 'Giải trí', 1, '2022-08-30 09:14:44', 'giai-tri');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `adds` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `map` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `adds`, `email`, `phone`, `facebook`, `instagram`, `map`, `created_at`, `status`) VALUES
(48, 'Số 1, Phố Hoàng Đạo Thúy, Trung Hòa Nhân Chính, Nhân Chính, Thanh Xuân, Hà Nội', 'binhtrinh8122002@gmail.com', '0374989546', 'https://www.facebook.com/huynhbom.2k', 'https://www.instagram.com/huynhvuisme/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6714882904757!2d105.80227401473107!3d21.00580168601089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca1f5ed7cb5%3A0x2a6cc4e7b260885a!2zMSBQLiBIb8OgbmcgxJDhuqFvIFRow7p5LCBOaMOibiBDaMOtbmgsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWkgMTIwNjM4LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1663445594863!5m2!1svi!2s', '2022-09-05 16:06:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0.Hide; 1. Display; 2. Featured Posts; 3.Hot Posts',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `short_description`, `description`, `avatar`, `slug`, `author`, `status`, `created_at`, `update_at`, `content`, `meta_title`, `meta_keyword`) VALUES
(5, 1, 'Thủ tướng Chính phủ chỉ đạo thành lập các Tổ Công tác về phục hồi, phát triển kinh tế-xã hội', 'Thủ tướng Chính phủ chỉ đạo thành lập các Tổ Công tác về phục hồi, phát triển kinh tế-xã hội', '<p><em>Baoquocte.vn.</em>&nbsp;Thủ tướng Ch&iacute;nh phủ Phạm Minh Ch&iacute;nh chỉ đạo c&aacute;c bộ, ng&agrave;nh, địa phương th&agrave;nh lập ngay c&aacute;c Tổ C&ocirc;ng t&aacute;c về phục hồi, ph&aacute;t triển kinh tế-x&atilde; hội do người đứng đầu l&agrave;m Tổ trưởng.</p>', '1632583041_thu-tuong-chi-dao-thanh-lap-cac-to-cong-tac-ve-phuc-hoi-phat-trien-kinh-te-xa-hoi.jpg', 'thu-tuong-chi-dao-thanh-lap-cac-to-cong-tac-ve-phuc-hoi-phat-trien-kinh-te-xa-hoi', 'admin', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, 'Ngoại hạng Anh trở lại cuối tuần này: Đại chiến Chelsea - Liverpool nguy cơ bị hoãn', 'bóng đá, bong da'),
(6, 1, 'Bài viết của Tổng Bí thư Nguyễn Phú Trọng tiếp thêm niềm tin về con đường đi lên chủ nghĩa xã hội', 'Bài viết của Tổng Bí thư Nguyễn Phú Trọng tiếp thêm niềm tin về con đường đi lên chủ nghĩa xã hội', '<p>Đất nước Việt Nam đi l&ecirc;n chủ nghĩa x&atilde; hội bỏ qua chế độ tư bản chủ nghĩa, trong đ&oacute; c&oacute; sự lựa chọn kỹ lưỡng, đ&uacute;ng đắn, tiếp tục, kế thừa những th&agrave;nh tựu v&agrave; khoa học, kỹ thuật, c&ocirc;ng nghệ ti&ecirc;n tiến đ&atilde; đạt được của chế độ tư bản chủ nghĩa v&agrave; của nh&acirc;n loại để ph&aacute;t triển nhanh lực lượng sản xuất v&agrave; x&acirc;y dựng một nền kinh tế hiện đại.</p>', '1632583101_1009_dangiau-1631260141017.jpg', 'bai-viet-cua-tong-bi-thu-nguyen-phu-trong-tiep-them-niem-tin-ve-con-duong-di-len-chu-nghia-xa-hoi', 'admin', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, 'bóng đá, bong daNgoại hạng Anh trở lại cuối tuần này: Đại chiến Chelsea - Liverpool nguy cơ bị hoãn', 'bóng đá, bong da'),
(7, 2, 'Thủ tướng: Phấn đấu đến ngày 30/9 trở lại trạng thái bình thường mới', 'Thủ tướng: Phấn đấu đến ngày 30/9 trở lại trạng thái bình thường mới', '<p><span style=\"font-size:12px\">S&aacute;ng 25/9, Thủ tướng Ch&iacute;nh phủ Phạm Minh Ch&iacute;nh, Trưởng Ban Chỉ đạo quốc gia ph&ograve;ng, chống dịch COVID-19 (Ban Chỉ đạo) đ&atilde; chủ tr&igrave; họp trực tuyến to&agrave;n quốc Ban Chỉ đạo với c&aacute;c địa phương về c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch COVID-19. Cuộc họp được kết nối tới điểm cầu tại 10.400 x&atilde;, phường, thị trấn; 705 quận, huyện, thị x&atilde;, th&agrave;nh phố v&agrave; 63 tỉnh, th&agrave;nh phố tr&ecirc;n to&agrave;n quốc.</span></p>', '1632585615_man-utd-aston-villa-2-18472565.jpg', 'thu-tuong-phan-dau-den-ngay-30-9-tro-lai-trang-thai-binh-thuong-moi', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, 'Ngoại hạng Anh trở lại cuối tuần này: Đại chiến Chelsea - Liverpool nguy cơ bị hoãn', 'bóng đá, bong da'),
(9, 1, 'Apple phát hành iOS 12.5.5 cho nhiều iPhone đời cũ', 'Apple phát hành iOS 12.5.5 cho nhiều iPhone đời cũ', '<p>Theo&nbsp;<em>Howtogeek</em>, iOS 12.5.5 sẽ được cung cấp cho c&aacute;c thiết bị chạy iOS 12 v&agrave; kh&ocirc;ng thể n&acirc;ng cấp l&ecirc;n iOS 13 trở về sau, bao gồm iPhone 5s, iPhone 6/6 Plus, iPad Air, iPad mini 2, iPad mini v&agrave; iPod touch thế hệ thứ 6.</p>', '1632586684_1996_sexb.jpg', 'apple-phat-hanh-ios-12-5-5-cho-nhieu-iphone-doi-cu', 'admin', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, 'Ngoại hạng Anh trở lại cuối tuần này: Đại chiến Chelsea - Liverpool nguy cơ bị hoãn', NULL),
(10, 2, 'Địch Lệ Nhiệt Ba chuộng sắc đỏ', 'Địch Lệ Nhiệt Ba chuộng sắc đỏ', '<p>Sao Hoa ngữ Địch Lệ Nhiệt Ba nhiều lần diện sắc đỏ của nh&agrave; mốt Louis Vuitton, Valentino, Alexander McQueen...</p>', '1632586908_Di-ch-Le-Nhie-t-Ba-die-n-sa-c-do-collage-1632546244.png', 'dich-le-nhiet-ba-chuong-sac-do', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(11, 3, 'Phim cổ trang của Triệu Lộ Tư bị \'sạn\'', 'Phim cổ trang của Triệu Lộ Tư bị \'sạn\'', '<p>TRUNG QUỐCHơn 10 người mặc trang phục hiện đại xuất hiện trong phim cổ trang m&agrave; Triệu Lộ Tư đ&oacute;ng ch&iacute;nh.</p>', '1632586878_dong-the-4029-1632468001.jpg', 'phim-co-trang-cua-trieu-lo-tu-bi-san', 'admin', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(12, 2, 'Những bí ẩn thú vị quanh bom tấn sinh tồn', 'Những bí ẩn thú vị quanh bom tấn sinh tồn', '<p>&nbsp;Cơn sốt mang t&ecirc;n &quot;Squid Game&quot; vẫn tiếp tục lan nhanh to&agrave;n cầu. Hiện, phim đứng thứ 2 tr&ecirc;n bảng xếp hạng top 10 to&agrave;n cầu của Netflix v&agrave; l&agrave; kỷ lục cho một bộ phim truyền h&igrave;nh H&agrave;n Quốc.</p>', '1632591105_241830277_226382952799132_3206231694847258496_n.jpg', 'nhung-bi-an-thu-vi-quanh-bom-tan-sinh-ton', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(14, 1, 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền những khu chợ tuyệt đẹp', 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền những khu chợ tuyệt đẹp', '<p><strong><em>Sau đ&acirc;y l&agrave; bộ sưu tập h&igrave;nh nền về chủ đề chợ trời v&agrave; chợ phố với độ ph&acirc;n giải từ FullHD trở l&ecirc;n. Mời c&aacute;c bạn c&ugrave;ng chi&ecirc;m ngưỡng.</em></strong></p>', '1632821841-Gearvn-Thanh-pho-duoi-nhung-con-mua-P.2_-25-1.jpg', 'vi-ai-cung-can-desktop-an-tuong-moi-anh-em-tai-bo-hinh-nen-nhung-khu-cho-tuyet-dep', 'huynhvu', 3, '2022-08-30 14:09:33', '2022-08-30 14:09:33', '<p><span style=\"font-size:12px\">Bộ h&igrave;nh nền chợ trời v&agrave; chợ phố l&agrave; bộ sưu tập c&aacute;c h&igrave;nh ảnh về những khu chợ kh&ocirc;ng chỉ ở Tr&aacute;i đất (hiện tại v&agrave; qu&aacute; khứ) m&agrave; c&ograve;n cả những h&igrave;nh ảnh về khu chợ ở c&aacute;c h&agrave;nh tinh kh&aacute;c. Với những khung cảnh sầm uất v&agrave;o buổi s&aacute;ng cũng như l&agrave; những khoảng lặng khi về chiều của khu chợ chắc chắn sẽ mang lại một cảm gi&aacute;c mới mẻ v&agrave; đặc biệt hơn cho g&oacute;c m&aacute;y của bạn.</span></p>\n\n<p><span style=\"font-size:12px\"><strong><em>M&igrave;nh sẽ đ&iacute;nh k&egrave;m link h&igrave;nh Google Drive tổng&nbsp;</em></strong><a href=\"https://drive.google.com/drive/folders/1t9VSb3FxEg1YGAI5glRMVM4HJGrAkWUa?usp=sharing\"><strong><em>TẠI Đ&Acirc;Y</em></strong></a><strong><em>, hoặc c&aacute;c bạn c&oacute; thể tải từng tấm b&ecirc;n dưới.</em></strong></span></p>\n\n<p><span style=\"font-size:12px\">H&igrave;nh tham khảo:</span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1T16YXAHlg8AORr_p_wWAzAzNcseqiYmf/view?usp=sharing\"><strong>Chợ 1 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-1-1-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-1-1-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1ipK5Vg9CAaWnwSfrcggPDm1pjV7cnppu/view?usp=sharing\"><strong>Chợ 2 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-2.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-2.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1qfsMEAvxgC3AlXQDL_OZhtjiPWr5c-01/view?usp=sharing\"><strong>Chợ 3 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-3.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-3.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1CZC5jM9g4fbNS3oKOjgjuINTeDBPgXll/view?usp=sharing\"><strong>Chợ 4 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-4-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-4-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1hAcMmk2RkXFsg8IGd_sDgU7wJGh_cBow/view?usp=sharing\"><strong>Chợ 5 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-5-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-5-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1p5d0R6g0Euv9FQVMaAiX1JhLOsh9fCKC/view?usp=sharing\"><strong>Chợ 6 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-6.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-6.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1W6v4qWLTXKUFLdf99DsxGlVZv7oTLng0/view?usp=sharing\"><strong>Chợ 7 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-7-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-7-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/16ETuSLdQeOFMl5-lXj1I34M_tY9Zz_tD/view?usp=sharing\"><strong>Chợ 8 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-8-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-8-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1xX2xz3mIgFsbhl1r5m5nURDVtGDAxAG6/view?usp=sharing\"><strong>Chợ 9 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-9.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-9.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1JmvjqxtQuNpDC29xirKEAhP3ynHH-Ig7/view?usp=sharing\"><strong>Chợ 10 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-10.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-10.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1v-jfeDxLYYOrcDmNDane79LUlLveK33S/view?usp=sharing\"><strong>Chợ 11 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-11.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-11.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1z9SdUz6EI9NnFJfLb870wReCIlGNAGcH/view?usp=sharing\"><strong>Chợ 12 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-12-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-12-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1zq-2uZh6eBEmRf3n-ubA4dDlrMpzhYyE/view?usp=sharing\"><strong>Chợ 13 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-13-scaled.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-13-scaled.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1rv9feO33lYdKOLsUX6eGapsc6wCYXFS9/view?usp=sharing\"><strong>Chợ 14 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-14.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-14.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://drive.google.com/file/d/1rJCTdCK8DlkWVit7F00wtMdNvCOcNQHN/view?usp=sharing\"><strong>Chợ 15 &ndash; Tải tại đ&acirc;y</strong></a></span></p>\n\n<p><span style=\"font-size:12px\"><a href=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-15.jpg\"><img alt=\"\" src=\"https://gvn360.com/wp-content/uploads/2021/05/Cho-troi-va-cho-pho_-15.jpg\" /></a></span></p>\n\n<p><span style=\"font-size:12px\"><strong>Cảm ơn c&aacute;c bạn đ&atilde; quan t&acirc;m theo d&otilde;i!</strong></span></p>', NULL, NULL),
(15, 1, 'Vì ai cũng cần desktop và điện thoại ấn tượng, mời anh em tải bộ ảnh nền thần long xuất thế cực ngầu của họa sĩ Xision', 'Vì ai cũng cần desktop và điện thoại ấn tượng, mời anh em tải bộ ảnh nền thần long xuất thế cực ngầu của họa sĩ Xision', '<p><strong><em>Sau đ&acirc;y l&agrave; bộ sưu tập h&igrave;nh nền thần long xuất thế cực ngầu của họa sĩ Xision với độ ph&acirc;n giải từ FullHD trở l&ecirc;n. Mời c&aacute;c bạn c&ugrave;ng GVN 360 chi&ecirc;m ngưỡng nh&eacute;.</em></strong></p>', '1632821296_hhhj.jpg', 'vi-ai-cung-can-desktop-an-tuong-moi-anh-em-tai-bo-hinh-nen-nhung-khu-cho-tuyet-dep-1', 'huynhvu', 3, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(16, 2, 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền mưa trên cuộc tình', 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền mưa trên cuộc tình', '<p>Sau đ&acirc;y l&agrave; bộ sưu tập hơn 20 tấm h&igrave;nh nền chủ đề mưa tr&ecirc;n cuộc t&igrave;nh m&agrave; m&igrave;nh sưu tầm được. Với chất lượng h&igrave;nh ảnh từ FullHD trở l&ecirc;n c&ugrave;ng với những khung cảnh mưa buồn tầm t&atilde; chắc chắn sẽ khiến cho g&oacute;c m&aacute;y của bạn tr&ocirc;ng &ldquo;deep&rdquo; hơn đấy.</p>', '1632821674-GearVN-Mua-tren-cuoc-tinh-1-1068x580.jpg', 'vi-ai-cung-can-desktop-an-tuong-moi-anh-em-tai-bo-hinh-nen-nhung-khu-cho-tuyet-dep-2', 'huynhvu', 3, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(17, 3, 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền đầy cảm xúc “thành phố dưới những cơn mưa” (P.2)', 'Vì ai cũng cần desktop ấn tượng, mời anh em tải bộ hình nền đầy cảm xúc “thành phố dưới những cơn mưa” (P.2)', '<p>Sau đ&acirc;y l&agrave; bộ sưu tập hơn 20 tấm h&igrave;nh nền về chủ đề th&agrave;nh phố dưới những cơn mưa m&agrave; m&igrave;nh sưu tầm được. Với chất lượng h&igrave;nh ảnh 4k, tỷ lệ 16:9 v&agrave; khung cảnh của những cơn mưa kh&oacute;c &ograve;a tr&ecirc;n cao rơi xuống c&aacute;c t&ograve;a nh&agrave; cao tầng, cho tới m&aacute;i hi&ecirc;n rồi chảy xuống c&aacute;c c&aacute;nh d&ugrave; của người đi đường v&agrave; cuối c&ugrave;ng l&agrave; chạm xuống mặt đất như muốn đ&aacute;nh dấu sự kết th&uacute;c của một chuyến đi d&agrave;i của những hạt mưa chắc chắn sẽ khiến cho bạn cảm thấy chỉ muốn pha ngay cho m&igrave;nh một cốc c&agrave; ph&ecirc; n&oacute;ng vừa nh&acirc;m nhi vừa ngắm m&agrave;n h&igrave;nh desktop m&agrave; th&ocirc;i.</p>', '1632821841-Gearvn-Thanh-pho-duoi-nhung-con-mua-P.2_-25-1.jpg', 'vi-ai-cung-can-desktop-an-tuong-moi-anh-em-tai-bo-hinh-nen-nhung-khu-cho-tuyet-dep-3', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(18, 1, 'Cách kiểm tra màn hình iPhone đã thay hay chưa trên iOS 15, cực hữu ích mà bạn không thể bỏ qua', 'Cách kiểm tra màn hình iPhone đã thay hay chưa trên iOS 15, cực hữu ích mà bạn không thể bỏ qua', '<p><a href=\"https://www.thegioididong.com/apple\" target=\"_blank\" title=\"Apple\" type=\"Apple\">Apple</a>&nbsp;ra mắt phi&ecirc;n bản iOS 15 với rất nhiều thay đổi v&agrave; t&iacute;nh năng mới mẻ đến với người d&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"iPhone\" type=\"iPhone\">iPhone</a>. V&agrave; c&oacute; một t&iacute;nh năng gi&uacute;p bạn ph&aacute;t hiện ra chiếc iPhone của m&igrave;nh đ&atilde; bị thay m&agrave;n h&igrave;nh hay chưa. Sau đ&acirc;y, m&igrave;nh sẽ hướng dẫn&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cach-kiem-tra-man-hinh-iphone-da-thay-hay-chua-1386050\" target=\"_blank\" title=\"Cách kiểm tra màn hình iPhone đã bị thay hay chưa\" type=\"Cách kiểm tra màn hình iPhone đã bị thay hay chưa\">c&aacute;ch kiểm tra m&agrave;n h&igrave;nh iPhone đ&atilde; thay hay chưa</a>&nbsp;tr&ecirc;n iOS 15 nh&eacute;.</p>', '1632822712_cach-kiem-tra-man-hinh-iphone-da-thay-hay-chua_1280x720-800-resize.jpg', 'cach-kiem-tra-man-hinh-iphone-da-thay-hay-chua-tren-ios-15-cuc-huu-ich-ma-ban-khong-the-bo-qua', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(19, 2, 'Surface Pro 8 - kẻ thách thức số 1 của iPad Pro', 'Không phải Galaxy Z Fold 3, chỉ iPhone Flip mới làm được điều này', '<p>Sau rất nhiều chờ đợi, Microsoft cuối c&ugrave;ng cũng c&oacute; c&acirc;u trả lời đanh th&eacute;p cho iPad Pro của Apple bằng Surface Pro 8.</p>', '1632824232_2-1632645517-701-width660height440.jpg', 'surface-pro-8-ke-thach-thuc-so-1-cua-ipad-pro', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(20, 3, 'Không phải Galaxy Z Fold 3, chỉ iPhone Flip mới làm được điều này', 'Không phải Galaxy Z Fold 3, chỉ iPhone Flip mới làm được điều này', '<p>Ph&acirc;n kh&uacute;c smartphone gập lại sẽ thực sự ph&aacute;t triển khi Apple tạo ra một chiếc iPhone m&agrave;n h&igrave;nh gập v&agrave; tung ra thị trường.</p>', '1632824300_Khi-nao-smartphone-gap-lai-tro-nen-pho-bien-iphone-flip-1632706438-181-width660height369.jpg', 'khong-phai-galaxy-z-fold-3-chi-iphone-flip-moi-lam-duoc-dieu-nay', 'huynhvu', 0, '2022-08-30 14:09:33', '2022-08-30 14:09:33', NULL, NULL, NULL),
(22, 1, 'Nữ hoàng Anh Elizabeth II qua đời', 'Nữ hoàng Anh Elizabeth II qua đời', '<p>TPO - Số ca dương tính được phát hiện qua xét nghiệm tại các vùng có nguy cơ lây nhiễm cao trên địa bàn TPHCM đã giảm xuống mức thấp hiện chỉ còn 0,3%. Thành phố đang tiếp tục đẩy nhanh tiến độ tiêm chủng và xét nghiệm để bóc tách F0 ra khỏi cộng đồng, đưa xã hội trở lại giai đoạn bình thường mới.</p>', 'elizabet.jpeg', 'nu-hoang-anh-elizabeth-ii-qua-doi', 'admin', 0, '2022-09-09 08:52:45', '2022-09-09 08:52:45', '<h2 class=\"cate-24h-foot-arti-deta-sum ctTp tuht_show\" id=\"article_sapo\">             <strong>                 Sự kiện Nữ hoàng Elizabeth II qua đời có thể khiến Ngoại hạng Anh nghỉ hết tháng.            </strong>         </h2><img class=\"news-image initial loaded\" alt=\"Nữ hoàng Anh Elizabeth II qua đời, Ngoại hạng Anh dễ nghỉ đá hết tháng 9 - 1\" onclick=\"show_slide_image_news(0)\" src=\"https://cdn.24h.com.vn/upload/3-2022/images/2022-09-09/skysports-queen-elizabeth-ii_5891953-740-1662665877-341-width740height416.jpg\" style=\"width: 740px; height: 416px;\" data-was-processed=\"true\"><p>Nữ hoàng Anh Elizabeth II đã qua đời vào rạng sáng nay ngày 9/9 (giờ Việt Nam) hưởng thọ 96 tuổi. Sức khỏe của Nữ hoàng đã đột ngột chuyển biến xấu và không qua khỏi.</p><p>Nữ hoàng Elizabeth II đã lên ngôi trị vì Vương quốc Anh từ tháng 2/1952, do đó khi băng hà bà là người trị vì&nbsp;dài nhất và sống lâu nhất trong lịch sử nước Anh, cũng như&nbsp;trị vì&nbsp;lâu thứ hai trong lịch sử thế giới sau vua Louis XIV (Pháp).</p>', NULL, NULL),
(27, 3, 'Một Chiếc Nhạc Lofi Chill Nhẹ Nhàng ~ Baby Can You Kiss Me, Ở Sâu Trong Tâm Trí - Lạc Vào Trong Mơ', 'Một Chiếc Nhạc Lofi Chill Nhẹ Nhàng ~ Baby Can You Kiss Me, Ở Sâu Trong Tâm Trí - Lạc Vào Trong Mơ', 'Những bản nhạc remix hay nhất trên TikTok Mỗi một giai đoạn thì màu sắc âm nhạc cũng khác đi. Đối với genZ hiện nay những bài nhạc nhẹ nhàng chưa hẳn là một lựa chọn hàng đầu. Nhưng với các bạn trẻ thì không có việc gì khó cả, những bản nhạc remix ra đời kết hợp các lời nhạc xưa cũ trên giai điệu sôi động khuấy đảo ngày làm việc mệt mỏi.   See Tình - Hoàng Thùy Linh Chạy Về Khóc Với Anh - Erik Duyên Duyên Số Số - Du Uyên Gieo Quẻ - Hoàng Thùy Linh ft Đen Là Ai Từ Bỏ Là Ai Vô Tình - Hương Ly Chạnh Lòng Thương Cô - Huy Vạc Kiếp Má Hồng - Tlong Vui Lắm Nha - Hương Ly Thê Lương - Phúc Chinh Chỉ Muốn Bên Em Thật Gần - YLing ft Xám Thầm Thương Hình Bóng - TLong Thế Thái - Hương Ly Tiếng Tơ Lòng - HKray ft Truxg  Cô Gái Vàng - HuyR Kẹo Bông Gòn - H2K ft Truky Nếu Anh Đủ Can Đảm - Phạm Tưởng Quý Nhạt Nhòa Mưa Phai - Hương Ly Đời Trai Lênh Đênh - Tlong Anh Thanh Niên - HuyR Ngày Đầu Tiên - Đức Phúc', 'maxresdefault.jpg', 'mot-chiec-nhac-lofi-chill-nhe-nhang', 'HuynhVu', 0, '2022-09-19 15:47:36', '2022-09-19 15:47:36', '<div class=\"news-detail-content_detail-intro__YTW8B\">(VOH) - Tiktok đang là nền tảng xã hội được giới trẻ ưa chuộng nhất và âm nhạc là là một trong những yếu tố quan trọng tạo nên sức hút của TikTok. Cùng điểm qua những bài hát làm hot rần rần trên TikT</div><p style=\"text-align: justify;\">Ngoài những content dạy các kỹ năng như tin học, vẽ, video tâm sự, nấu ăn thì những clip dance cover cũng rất được yêu thích. Nhưng nếu tất cả những điều đó thiếu mất đi nhạc nền bổ trợ thì chắc chắn sẽ không còn thú vị nữa. Vậy nên cùng điểm qua một số bài nhạc Tik Tok hot nhất được các Tiktoker sử dụng trong clip triệu view của mình nhé!</p><img src=\"https://cdn.voh.com.vn/voh/Image/2022/05/20/Acapella-Vocal-Sao-Cung-Duoc-Binz-1.jpg\" alt=\"Tổng hợp những bài nhạc Tik Tok làm mưa làm gió đầu năm 2022 - nghe đến đâu quen thuộc đến đó 1\">', 'Một Chiếc Nhạc Lofi Chill Nhẹ Nhàng ~ Baby Can You Kiss Me, Ở Sâu Trong Tâm Trí - Lạc Vào Trong Mơyyyu', 'Một Chiếc Nhạc Lofi Chill Nhẹ Nhàng ~ Baby Can You Kiss Me, Ở Sâu Trong Tâm Trí - Lạc Vào Trong Mơyyiuiyu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `permission`, `created_at`, `updated_at`, `status`) VALUES
(9, 'Trịnh Ngọc Bình', '0374989546', 'binhtrinh8122002@gmail.com', '123123', 1, '2022-09-25 08:37:39', '2022-09-25 08:37:39', 1),
(10, 'Test 2', '0374989546', 'test@gmail.com', '123456', 1, '2022-09-25 08:39:55', '2022-09-25 08:39:55', 1),
(11, 'Test 1', '0374989546', 'test2@gmail.com', '123123', 1, '2022-09-25 08:40:06', '2022-09-25 08:40:06', 1),
(13, 'Test 3', '0374989546', 'test3@gmail.com', '123123', 1, '2022-09-25 08:41:05', '2022-09-25 08:41:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` text NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `photo`, `title`, `created_at`) VALUES
(2, 'https://youtu.be/bhlMOw-RGZo', '1632657381_tranh-phong-canh-vinh-ha-long-989-718x380.jpg', 'HUYỀN TÂM MÔN | PHỐ ĐÃ LÊN ĐÈN | OFFICIAL AUDIO', '2022-08-30 14:26:18'),
(3, 'https://youtu.be/Xu54Ex2kuVY', '1632657399_12358eabe806af65178e625d01c1dfb3.jpg', 'HUYỀN TÂM MÔN | LẦN HẸN HÒ ĐẦU TIÊN', '2022-08-30 14:26:18'),
(4, 'https://youtu.be/__Eo-dvEH7g', '1632657462_1524374984-756-10-diem-den-duoc-khach-tay-binh-chon-la-dep-nhat-viet-nam-1-1523594947-width650height456.jpg', 'Walking London\'s SOHO in HEAVY RAIN - Saturday Evening City Ambienc', '2022-08-30 14:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
