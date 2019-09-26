/*
 Navicat Premium Data Transfer

 Source Server         : koneksi
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : survei_kepuasan

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 27/09/2019 01:55:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_hasil_child
-- ----------------------------
DROP TABLE IF EXISTS `t_hasil_child`;
CREATE TABLE `t_hasil_child`  (
  `id_survei` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `tgl_survei` date NOT NULL,
  INDEX `id_survei`(`id_survei`) USING BTREE,
  INDEX `id_pertanyaan`(`id_survei`) USING BTREE,
  INDEX `id_jawaban`(`id_survei`) USING BTREE,
  INDEX `id_jawaban_2`(`id_jawaban`) USING BTREE,
  INDEX `id_pertanyaan_2`(`id_pertanyaan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_hasil_child
-- ----------------------------
INSERT INTO `t_hasil_child` VALUES (2613958, 1, 3, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 2, 8, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 3, 12, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 4, 16, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 5, 20, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 6, 24, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 7, 28, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 8, 32, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (2613958, 9, 36, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 1, 3, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 2, 8, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 3, 12, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 4, 16, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 5, 20, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 6, 24, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 7, 28, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 8, 32, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (1591152, 9, 36, '2019-09-14');
INSERT INTO `t_hasil_child` VALUES (4445591, 1, 3, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 2, 9, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 3, 12, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 4, 16, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 5, 20, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 6, 25, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 7, 29, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 8, 33, '2019-09-17');
INSERT INTO `t_hasil_child` VALUES (4445591, 9, 37, '2019-09-17');

-- ----------------------------
-- Table structure for t_hasil_head
-- ----------------------------
DROP TABLE IF EXISTS `t_hasil_head`;
CREATE TABLE `t_hasil_head`  (
  `id_survei` int(11) NOT NULL AUTO_INCREMENT,
  `id_uptd` int(11) NOT NULL,
  `pendidikan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `pekerjaan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `saran` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_survei`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4445592 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_hasil_head
-- ----------------------------
INSERT INTO `t_hasil_head` VALUES (1591152, 6515662, 'D3', 'wanita', 27, 'PNS', 'sudah sangat baik');
INSERT INTO `t_hasil_head` VALUES (2613958, 7748463, 'S1', 'pria', 26, 'PNS', 'Sangat Sesuai');
INSERT INTO `t_hasil_head` VALUES (4445591, 7426864, 'S2', 'pria', 24, 'TNI', 'Baik');

-- ----------------------------
-- Table structure for t_jawaban
-- ----------------------------
DROP TABLE IF EXISTS `t_jawaban`;
CREATE TABLE `t_jawaban`  (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bobot` int(11) NOT NULL,
  PRIMARY KEY (`id_jawaban`) USING BTREE,
  INDEX `id_pertanyaan`(`id_pertanyaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_jawaban
-- ----------------------------
INSERT INTO `t_jawaban` VALUES (1, 1, 'Tidak Sesuai', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (2, 1, 'Kurang Sesuai', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (3, 1, 'Sesuai', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (4, 1, 'Sangat Sesuai', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (6, 2, 'Tidak Mudah', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (7, 2, 'Kurang Mudah', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (8, 2, 'Mudah', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (9, 2, 'Sangat Mudah', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (10, 3, 'Tidak Cepat', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (11, 3, 'Kurang Cepat', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (12, 3, 'Cepat', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (13, 3, 'Sangat Cepat', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (14, 4, 'Selalu Tidak Sesuai', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (15, 4, 'Kadang-kadang Sesuai', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (16, 4, 'Banyak Sesuainya', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (17, 4, 'Selalu Sesuai', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (18, 5, 'Tidak Sesuai', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (19, 5, 'Kurang Sesuai', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (20, 5, 'Sesuai', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (21, 5, 'Sangat Sesuai', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (22, 6, 'Tidak Kompeten', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (23, 6, 'Kurang Kompeten', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (24, 6, 'Kompeten', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (25, 6, 'Sangat Kompeten', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (26, 7, 'TIdak Sopan dan Ramah', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (27, 7, 'Kurang Sopan dan Ramah', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (28, 7, 'Sopan dan Ramah', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (29, 7, 'Sangat Sopan dan Ramah', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (30, 8, 'Buruk', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (31, 8, 'Cukup', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (32, 8, 'Baik', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (33, 8, 'Sangat Baik', 'sangat_puas.png', 4);
INSERT INTO `t_jawaban` VALUES (34, 9, 'Tidak Ada', 'sangat_kurang.png', 1);
INSERT INTO `t_jawaban` VALUES (35, 9, 'Ada tetapi Tidak Berfungsi', 'kurang.png', 2);
INSERT INTO `t_jawaban` VALUES (36, 9, 'Berfungsi Kurang Maksimal', 'puas.png', 3);
INSERT INTO `t_jawaban` VALUES (37, 9, 'Dikelola dengan Baik', 'sangat_puas.png', 4);

-- ----------------------------
-- Table structure for t_opd
-- ----------------------------
DROP TABLE IF EXISTS `t_opd`;
CREATE TABLE `t_opd`  (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_opd`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_opd
-- ----------------------------
INSERT INTO `t_opd` VALUES (1352433, 'Bapenda');
INSERT INTO `t_opd` VALUES (5412219, 'Peternakan');
INSERT INTO `t_opd` VALUES (7812665, 'Pertanian');

-- ----------------------------
-- Table structure for t_pertanyaan
-- ----------------------------
DROP TABLE IF EXISTS `t_pertanyaan`;
CREATE TABLE `t_pertanyaan`  (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_opd` int(11) NOT NULL,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pertanyaan`) USING BTREE,
  INDEX `t_pertanyaan`(`id_opd`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_pertanyaan
-- ----------------------------
INSERT INTO `t_pertanyaan` VALUES (1, 1352433, 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (2, 1352433, 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (3, 1352433, 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (4, 1352433, 'Bagaimana pendapat Saudara kesesuaian antara biaya yang dibayarkan dengan biaya yang ditetapkan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (5, 1352433, 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (6, 1352433, 'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (7, 1352433, 'Bagaimana pemahaman Saudara tentang perilaku tugas dalam pelayanan terkait kesopanan dan keramahan?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (8, 1352433, 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?', 'tes', 1);
INSERT INTO `t_pertanyaan` VALUES (9, 1352433, 'Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?', 'tes', 1);

-- ----------------------------
-- Table structure for t_uptd
-- ----------------------------
DROP TABLE IF EXISTS `t_uptd`;
CREATE TABLE `t_uptd`  (
  `id_uptd` int(11) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `nama_uptd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_uptd`) USING BTREE,
  INDEX `t_uptd_ibfk1`(`id_opd`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_uptd
-- ----------------------------
INSERT INTO `t_uptd` VALUES (1963268, 5412219, 'Jangkrik');
INSERT INTO `t_uptd` VALUES (3967427, 5412219, 'Hayam');
INSERT INTO `t_uptd` VALUES (4737891, 5412219, 'Kambing');
INSERT INTO `t_uptd` VALUES (6515662, 1352433, 'Samsat Bogor');
INSERT INTO `t_uptd` VALUES (7426864, 1352433, 'Samsat Cibinong');
INSERT INTO `t_uptd` VALUES (7748463, 1352433, 'Samsat Cimahi');
INSERT INTO `t_uptd` VALUES (8599769, 7812665, 'Pupuk');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `id_user` int(11) NOT NULL,
  `id_uptd` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('admin','operator','user') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime(0) NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`) USING BTREE,
  INDEX `t_user_ibfk1`(`id_uptd`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (1, 0, 'admin', 'admin', 'admin', '2019-09-27 01:40:33', '1');
INSERT INTO `t_user` VALUES (1984859, 3967427, 'userhayam', 'userhayam', 'user', '0000-00-00 00:00:00', '0');
INSERT INTO `t_user` VALUES (4533276, 7748463, 'usercimahi', 'usercimahi', 'user', '0000-00-00 00:00:00', '0');
INSERT INTO `t_user` VALUES (5689992, 7426864, 'operatorcibinong', 'operatorcibinong', 'operator', '2019-09-27 01:45:09', '1');
INSERT INTO `t_user` VALUES (5733756, 6515662, 'operatorbogor', 'operatorbogor', 'operator', '0000-00-00 00:00:00', '0');
INSERT INTO `t_user` VALUES (6772239, 7748463, 'operatorcimahi', 'operatorcimahi', 'operator', '0000-00-00 00:00:00', '0');
INSERT INTO `t_user` VALUES (7634492, 7426864, 'usercibinong', 'usercibinong', 'user', '0000-00-00 00:00:00', '1');
INSERT INTO `t_user` VALUES (7734897, 6515662, 'userbogor', 'userbogor', 'user', '0000-00-00 00:00:00', '0');

SET FOREIGN_KEY_CHECKS = 1;
