/*
 Navicat Premium Data Transfer

 Source Server         : Connection 1
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : sistempakar

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 18/03/2023 06:29:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for balita
-- ----------------------------
DROP TABLE IF EXISTS `balita`;
CREATE TABLE `balita`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of balita
-- ----------------------------
INSERT INTO `balita` VALUES ('2d4ac37f83fc4d4cb64760a0f587af11', '7', 'RIZA NIKO ALVIYANSYAH', 'laki-laki', '24', '2019-10-28', '2023-03-17 12:32:24', '2023-03-17 12:32:24', NULL);
INSERT INTO `balita` VALUES ('49a998f3dc3348cfac1ce4d70dbb4562', '8', 'RIZA NIKO ALVIYANSYAH', 'laki-laki', '24', '2021-11-30', '2023-03-17 23:26:52', '2023-03-17 23:26:52', NULL);
INSERT INTO `balita` VALUES ('774e63f1abcc4a0e813dbef86f2453d7', '4', 'LIANA LULU FAUZIAH, A. Md. Aktr', 'perempuan', '23', '2016-12-29', '2023-03-15 23:17:05', '2023-03-15 23:17:05', NULL);
INSERT INTO `balita` VALUES ('cd58d657227f4976818fb03eb2ce0a78', '5', 'Putri', 'perempuan', '5', '2018-01-02', '2023-03-15 23:18:57', '2023-03-15 23:18:57', NULL);

-- ----------------------------
-- Table structure for diagnosa
-- ----------------------------
DROP TABLE IF EXISTS `diagnosa`;
CREATE TABLE `diagnosa`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balita_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_penyakit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_konsultasi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_gejala` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nilai` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES ('01835058015445b6b6b4240af17b1a23', 'G02', 'Rambut tipis, jarang dan mudah dicabut', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('04582a5973f549058c316c767b9b5145', 'G13', 'Perut cekung dan iga ngambang', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('15632e1241b44a6faf5f60a44ec9b30d', 'G30', 'Mata bergerak tak terkontrol', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('17a4f0df13df4d9b80af8a81ceec3738', 'G42', 'Tubuh lemah dan lesu', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('1fd00ec4c3f64c74ad643baecfa30533', 'G36', 'Halusinasi', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('2e24af6fca7b4816bc52a98e4db36a56', 'G22', 'Pendiam/kurang aktif', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('396f87196b0b47da8a8af318f3125526', 'G10', 'Berkurangnya jumlah lemak dalam tubuh', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('3c96e9220394401a946d032f881835b3', 'G41', 'Demam', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('3f9939c28813441796a6e4f492e19120', 'G46', 'Tangan dan kaki dingin', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('411bf8bf0f84435693af15589a10bc28', 'G27', 'Tubuh terasa nyeri', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('4791ac6fd884441eaabd21367a15ce48', 'G08', 'Wajah tampak seperti orang tua', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('4ff82b855c8642c7952cdd3b5f7c12fd', 'G37', 'Kulit mengalami ruam', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('5f665a3199914adfb6e2e3899a2479ee', 'G45', 'Radang lidah (glositis)', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('6089d112ccd7434ebae7829667021bc1', 'G14', 'Gangguan pada ginjal dan pankreas', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('65915210c32d4b78871edd1c830f7987', 'G31', 'Kesulitan berbicara', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('668d3269411e43ad8703cdb0d09db480', 'G20', 'Sedikit melakukan eye contact', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('674003d776474c0bb925c48441162414', 'G34', 'Koordinasi otot-otot tubuh menurun', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('67f4ed225dfb4eb3a815d31d1b8822e8', 'G15', 'Perut buncit', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('6e065877d32b47b790d87acfde15fc81', 'G48', 'Sakit dada', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('75d3b52719cf4aba9b7d81a0dcb819c7', 'G49', 'Insomnia', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('769494894f804a94b5dec90e3d74f752', 'G04', 'Terjadinya pembengkakan', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('7903e91aed704263889d0b71c5ef710d', 'G32', 'Kesulitan berjalan, bahkan lumpuh sindrom WernickeKorsakoff', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('7ac35c84cc3d43c2a0dda4b93e7da1d5', 'G25', 'Sesak napas', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('7d3de330566242e58e4409612bbfdc6c', 'G35', 'Gangguan penglihatan', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('8f41268e94b9476f976e3cb10076e935', 'G07', 'Otot mengecil / tidak berkembang', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('91afdc765e7a4bae8ec121419d526a94', 'G28', 'Mual dan muntah', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('9491f04bcaec45d5aed20285fc680447', 'G44', 'Kuku rapuh', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('974be5f738ad4fd39b252cd1c6c00f30', 'G18', 'Tinggi dan berat badan lebih kecil dibandingkan dengan anak seusianya.', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('9d875e21dc7c4ce4827f94f18b0a329f', 'G17', 'Gangguan tumbuh kembang, termasuk berat dan tinggi tidak bertambah', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('a89a0d88f4674dc8b8a400fe89df2351', 'G38', 'Perdarahan dan pembengkakan pada gusi', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('a8ffa7ca5fcf49ab828fae4a8540d58d', 'G09', 'Kulit kelihatan kering dan berkeriput', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b1074ce9c7d5435b995a6b751fb42f70', 'G47', 'Pusing atau sakit kepala', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b24b3e8d6d214cdfb83f9f5235534853', 'G29', 'Mata bergerak tak terkontrol', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b736d571ffc24e70a51ef15ce2fad791', 'G01', 'Sering rewel', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b8fa50033a9243bbb868de9c8e7423f7', 'G33', 'Kemampuan mengingat berkurang', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b93a2b52b6714d08a1df744f25438467', 'G40', 'Berat badan turun', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('b96f2086c839468da6365afc174af25a', 'G26', 'Tangan dan kaki kesemutan atau mati rasa', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('c2ce8d045e0a404495432350c3ab4376', 'G43', 'Mudah kelelahan', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('d6ab53ddc6824a58a96edc773b21b549', 'G23', 'Tungkai membengkak', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('d778f790c9e44408a5ecd53dcbb7fb01', 'G51', 'Tai Berwarna Kuning', 1, '2023-02-17 13:59:31', '2023-02-17 14:01:02', '2023-02-17 14:01:02');
INSERT INTO `gejala` VALUES ('d841e5d994574814b1eaa19db131cdf0', 'G11', 'Badan sangat kurus', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('d89a38b2e68a4bfc97bc1dea37ff333b', 'G16', 'Gangguan pernafasan / infeksi saluran pernafasan', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('d9eb214f5d904af4a31a498c4d603361', 'G24', 'Jantung berdebar', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('deabcbf75fb94a38a630d0b322726611', 'G12', 'Rentan mengalami penyakit infeksi', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('df02236a309e43428ab8ade6a7e7084c', 'G50', 'Kulit Pucat', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('df3ba296677948a3bc230adc2c3b3892', 'G06', 'Diare', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('e332d6654762476781a6b64d1582349f', 'G19', 'Tumbuh gigi terlambat', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('e39a63e147e54f269df33ce434545fa0', 'G05', 'Mata kelihata sayu', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('ea6044ac7779447188d038092d447148', 'G21', 'Wajah lebih tampak muda dari usianya', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('ebc5b63c73464f18abb0acb64f37464a', 'G39', 'Kurangnya nafsu makan', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `gejala` VALUES ('f8180f446ced4c63819725fc31137a65', 'G03', 'Adanaya bercak bercak pada kulit dan terkelupas', 1, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_05_19_130408_create_penyakit_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_05_19_140031_create_gejala_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_05_26_081551_create_relasi_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_05_26_102715_create_pasien_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_05_26_103205_create_diagnosa_table', 1);
INSERT INTO `migrations` VALUES (9, '2020_06_01_091706_add_colom_username_', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_penyakit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyakit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pencegahan` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `penyebab` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `pengobatan` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES ('044c58c2f7904a5aa08eb77cf1b49827', 'P04', 'Stunting', 'test 1', 'test2', 'test34', 'test5', '2023-02-14 14:06:58', '2023-02-17 14:07:32', NULL);
INSERT INTO `penyakit` VALUES ('08c77376794a4909b1b6b2d01f8fb211', 'P03', 'MaramusKwashiorkor', NULL, NULL, NULL, NULL, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `penyakit` VALUES ('1d06af2592da46dbb609bd6a64a116f5', 'P01', 'Kwashiorkor', '12', 'Kwashiorkor bisa dicegah dengan mengonsumsi cukup kalori dan makanan yang kaya protein. Pedoman pola makan dari Institute of Medicine merekomendasikan bahwa 10 hingga 35persen kalori harian orang dewasa berasal dari protein.', 'Karena anak tidak memeroleh makanan dengan kandungan energi dan protein yang cukup.', 'Memberikan makanan bergizi seimbang yaitu makanan yang mengandung karbohidrat seperti nasi, kentang, jagung, dan makanan yang mengandung protein yaitu telur, ikan, daging, tahu, tempe, dll. Serta memberikan makanan yang mengandung vitamin dan mineral seperti buah-buahan dan sayursayuran.', '2023-02-14 14:06:58', '2023-03-17 12:43:11', NULL);
INSERT INTO `penyakit` VALUES ('5f7a15c56f1740b686750462b09b6818', 'P07', 'Anemia', NULL, NULL, NULL, NULL, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `penyakit` VALUES ('80faccc93cd044019d00c6217ac39d0a', 'P05', 'Beri-beri', NULL, NULL, NULL, NULL, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `penyakit` VALUES ('866e0aca8d6249809614566252c0521d', 'P06', 'Skorbut', NULL, NULL, NULL, NULL, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);
INSERT INTO `penyakit` VALUES ('db347863f15a4c8987ad4848d9b3b2c8', 'P02', 'Marasmus', NULL, NULL, NULL, NULL, '2023-02-14 14:06:58', '2023-02-14 14:06:58', NULL);

-- ----------------------------
-- Table structure for relasi
-- ----------------------------
DROP TABLE IF EXISTS `relasi`;
CREATE TABLE `relasi`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_penyakit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_gejala` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of relasi
-- ----------------------------
INSERT INTO `relasi` VALUES ('0202fda4dcfe46058730a86b214fe980', 'P03', 'G08', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('02e1b25601c9408b91c07de45a31a397', 'P07', 'G27', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('05a2ae30232c46d8a6a7fb4af1bad711', 'P07', 'G26', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('0618a70bd08c41c1aef0d8ffd3ba35f2', 'P03', 'G15', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('06e5e280cbae41029019d30cf8082b9d', 'P06', 'G37', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('0d9187cfad66498abdb673435adcbbeb', 'P07', 'G47', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('0e1f6d5fd8e442c2848d2d48d5e55379', 'P02', 'G10', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('0e91ae3c6b114683801714e1c7810ff4', 'P05', 'G33', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('0ed5a84f23bd4a6ba071ff995664e7d3', 'P06', 'G28', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('1016296eaade48dd981e9f7972c3ef50', 'P05', 'G34', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('12b0bc0245554936b25ca990ad5b7361', 'P01', 'G07', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('1682f7f883c44627bbd4bb1ab01971ec', 'P02', 'G11', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('1af80d2b8f334f2d81be90d521e4e8b2', 'P01', 'G01', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('257c338319dc4b8696ba2d6879e2d304', 'P03', 'G09', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('3343098ae9f44cfaa79c85e83aad78c3', 'P07', 'G24', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('357c1f8983b24d32b84fdf15c9bea777', 'P07', 'G50', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('3c540dcebf714ef59ada1322f497569b', 'P01', 'G06', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('3eca8e2c1a2a4b00807260725b41ba15', 'P01', 'G02', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('40096f9de37b4e78b4479f8eb2a44735', 'P06', 'G38', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('4a1cb415f7a94c1bbf753704e07d9c0a', 'P07', 'G12', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('52e1e19a112e4151bded2e2096bb4e24', 'P05', 'G24', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5351c62437374f8fb8ebf63c567703f1', 'P04', 'G18', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5390ad17d861470aa53b26cab3a4098e', 'P05', 'G30', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('592db6982f45475c879902fb89d1671f', 'P07', 'G42', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5a3e50662ccc438b87b67b7f87ac7811', 'P01', 'G03', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5afb5e3dc7d04616a1244bdebffbe94a', 'P03', 'G14', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5c2ed482e0f949fb8fa5a51ba9625f4d', 'P07', 'G44', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('5d4814ebcc0f45618855042c270340d9', 'P03', 'G07', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('60509b5caca045ec8e2f01ce47ea7747', 'P01', 'G04', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('60c3321dfc5b41da9124b2b9d580d6b3', 'P07', 'G48', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('6485fbf006c74d9da0aebd37c47d7038', 'P06', 'G06', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('6ddd0f7536d04e509883b8a402ceef19', 'P05', 'G32', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('72ec9df2798e4fb6870583ea3bbc70f5', 'P07', 'G39', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('8cfdc8c1091b4881af4c76cc8a8010bb', 'P05', 'G36', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('8d046231ab284ac2a1613cd750eba59f', 'P04', 'G17', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('8e68182fc0224d43a2783a1f5abea548', 'P05', 'G29', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('8f7b0473efa24f2b911f05d436590577', 'P04', 'G19', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('93275b29deb3446587ed5235d7aaa8d9', 'P05', 'G23', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('9438e03b83b543ae9866c84ae193eaba', 'P05', 'G25', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('9bc743ce805544fab1ad84b7575fe0f6', 'P02', 'G13', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('9ccbf327dc09440baa77781499342d43', 'P01', 'G05', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('9ddea578e9134def86addcd16212908d', 'P06', 'G40', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('a1918872a3af401589862c7bfa315741', 'P02', 'G01', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('a82fe70dc09b437494e16e0753214756', 'P04', 'G20', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('a8526b11b95b4392b43a92a203563ac1', 'P05', 'G26', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('ae83b1ca4b20457baf57e3d8e7cbeb66', 'P07', 'G25', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('b068e25a610d462595e9a3bfa914a13f', 'P07', 'G43', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('b71822a9d4c64397a0fcf7eadbead49d', 'P02', 'G12', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('b7fa4375758647d9ac22cd415694a25d', 'P07', 'G46', '2023-02-14 23:20:44', '2023-02-17 14:13:37', NULL);
INSERT INTO `relasi` VALUES ('ba53eddf0ef046d5a1de46aadaeb1a50', 'P05', 'G27', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('bcc31d2ab64d483db96512c8a3c4717e', 'P03', 'G11', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('bcf2f0dfb9854f83a3547da7c009b5fe', 'P05', 'G31', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('c4bf8c9e7219485c9e2685cb5fd05fc0', 'P07', 'G49', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('ceeb53f7e6a34e718c5ea9dcd294d0d9', 'P07', 'G01', '2023-02-17 14:11:45', '2023-02-17 14:12:29', '2023-02-17 14:12:29');
INSERT INTO `relasi` VALUES ('cfd253eb898b4298972f986c83334693', 'P02', 'G09', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('d219268f00c34ec79e947fede8575f96', 'P03', 'G01', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('d4d6e64c9eec45778cb417714dd4d2b1', 'P04', 'G21', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('da8359862a8c41f69aa8101548e547d2', 'P05', 'G35', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('dd1acf9362fb411ca2830bc4fa9f3bde', 'P03', 'G16', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('df45980843b34ec0a0a7c7c951f78a0d', 'P06', 'G27', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('ebfcc7d49f0a42e590eeacafef1579b1', 'P01', 'G08', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('ee9954f8ac174b5bb613e1b06b037f1e', 'P07', 'G45', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('efd4add754e74a68a5dcc2a438144f07', 'P06', 'G41', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('f27f132dac3b40528605e2ce2ab6eac0', 'P04', 'G22', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('f99372f9aa6149f2887f5b1fe2138f31', 'P05', 'G28', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);
INSERT INTO `relasi` VALUES ('fbb68d7020994b528af2a08be5e159a0', 'P06', 'G39', '2023-02-14 23:20:44', '2023-02-14 23:20:44', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin', 'Laki-Laki', '', '', 'admin', 'admin@gmail.com', '2023-02-14 14:06:58', '$2y$10$6RISAUkNKhBGNfUo9UsJq.TcqNNi3Pcj4UObc47js8mM3reVUAtNu', 'Uc2GSKY24TkfMX6qqEVUkQ0sMQpkbnrNeGnDCF82Azu21EM7I7hs4UkGrMJ2', '2023-02-14 14:06:58', '2023-02-14 14:06:58');
INSERT INTO `users` VALUES (4, 'fanny12', 'Fanny Bagus Ramadhan', 'Laki-Laki', 'sdad', '+6282163213123', 'user', 'flopsboard@gmail.com', NULL, '$2y$10$b3.KIw9UStBJ3rWyi3qyzuuEA74kYUjzQgO//odKCLBEKthMt7YIy', NULL, '2023-03-15 23:17:03', '2023-03-15 23:17:03');
INSERT INTO `users` VALUES (5, 'abrinsa', 'Abrinsa Putri', 'Perempuan', 'Gurah', '+6282163213123', 'user', 'abrinsa@gmail.com', NULL, '$2y$10$/HsIBrUyoeSKaHqjbu2UrudOupvUQ8uQQ6TX9gge1QGLA.Q4M5wJa', NULL, '2023-03-15 23:18:57', '2023-03-15 23:18:57');
INSERT INTO `users` VALUES (7, 'fanny22', 'khanzaq_sikc', 'Laki-Laki', 'da', '+6282163213123', 'user', 'dindaa17@rocketmail.com', NULL, '$2y$10$Qa6xMVN/ilTRXe.niPN0S.07BXTcD95i9tfydVtAGfXlPtiWV8AJ6', NULL, '2023-03-17 12:32:22', '2023-03-17 12:32:22');
INSERT INTO `users` VALUES (8, 'fanny22', 'Fanny Bagus Ramadhan', 'Laki-Laki', 'as', '+6282338206740', 'user', 'fannybagus9f@gmail.com', NULL, '$2y$10$dme6H8BrWxA49/wIbGwO4evI8Q48.le1zvhaDE334Na/rtKLdJ2zq', NULL, '2023-03-17 23:26:51', '2023-03-17 23:26:51');

SET FOREIGN_KEY_CHECKS = 1;
