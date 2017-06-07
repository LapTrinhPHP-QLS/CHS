/*
Navicat MySQL Data Transfer

Source Server         : phonghop
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : qls

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-07 23:22:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`id_user`  int(11) NOT NULL AUTO_INCREMENT ,
`username`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`password`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`quyen_truy_cap`  bit(1) NOT NULL ,
`hoten`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`sdt`  int(11) NOT NULL ,
`avatar`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`tenquyen`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id_user`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', '', 'Ngá»c Nam', '966735204', '12696986_1684362705136043_3129533663594765795_o.jpg', 'ngocnam071094@gmail.com', ''), ('2', 'member', '123', '\0', 'Diá»…m QuyÃªn', '1648728368', '100 (28).jpg', 'diemquyen2596dhcn1b@gmail.com', '');
COMMIT;

-- ----------------------------
-- Table structure for cthd
-- ----------------------------
DROP TABLE IF EXISTS `cthd`;
CREATE TABLE `cthd` (
`MaHD`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MaSach`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SoLuong`  int(10) NULL DEFAULT NULL ,
`DonGia`  int(11) NULL DEFAULT NULL ,
`GiamGia`  int(11) NULL DEFAULT NULL ,
PRIMARY KEY (`MaHD`, `MaSach`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of cthd
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for hoadon
-- ----------------------------
DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
`MaHD`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DaThanhToan`  tinyint(2) NULL DEFAULT NULL ,
`TinhTrangGiaoHang`  tinyint(2) NULL DEFAULT NULL ,
`NgayDat`  date NULL DEFAULT NULL ,
`NgayGiao`  date NULL DEFAULT NULL ,
`MaKH`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`MaNV`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`MaHD`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of hoadon
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
`MaKH`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`TenKhachHang`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Email`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`SDT`  char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`DiaChi`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`MaKH`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for loaisach
-- ----------------------------
DROP TABLE IF EXISTS `loaisach`;
CREATE TABLE `loaisach` (
`MaLoaiSach`  int(11) NOT NULL ,
`TenLoaiSach`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`MaLoaiSach`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of loaisach
-- ----------------------------
BEGIN;
INSERT INTO `loaisach` VALUES ('0', 'SÃ¡ch Kinh Táº¿'), ('1', 'SÃ¡ch GiÃ¡o Khoa'), ('2', 'SÃ¡ch VÄƒn Há»c'), ('4', 'SÃ¡ch BÃ  Máº¹ VÃ  Em BÃ©'), ('5', 'SÃ¡ch Ká»¹ NÄƒng - Sá»‘ng Äáº¹p');
COMMIT;

-- ----------------------------
-- Table structure for nhaxb
-- ----------------------------
DROP TABLE IF EXISTS `nhaxb`;
CREATE TABLE `nhaxb` (
`MaNXB`  int(11) NOT NULL ,
`TenNXB`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SDT`  char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`Email`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DiaChi`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`MaNXB`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of nhaxb
-- ----------------------------
BEGIN;
INSERT INTO `nhaxb` VALUES ('0', 'NhÃ  Xuáº¥t Báº£n Lao Äá»™ng', '(043) 8515380', 'nxblaodong@yahoo.com', '175 Giáº£ng VÃµ, Q. Äá»‘ng Äa, HÃ  Ná»™i');
COMMIT;

-- ----------------------------
-- Table structure for quyen
-- ----------------------------
DROP TABLE IF EXISTS `quyen`;
CREATE TABLE `quyen` (
`quyen_truy_cap`  bit(1) NULL DEFAULT NULL ,
`KichHoat`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`quyen`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of quyen
-- ----------------------------
BEGIN;
INSERT INTO `quyen` VALUES ('', 'Active', 'Administrator'), ('\0', 'Active', 'Member');
COMMIT;

-- ----------------------------
-- Table structure for sach
-- ----------------------------
DROP TABLE IF EXISTS `sach`;
CREATE TABLE `sach` (
`MaSach`  int(10) NOT NULL ,
`TenSach`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MaLoaiSach`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MaTacGia`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MaNXB`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`HinhAnh`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MoTa`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SoTrang`  bigint(20) NOT NULL ,
`KichThuoc`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`LoaiBia`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DonGia`  int(11) NOT NULL ,
`SoLuongTon`  bigint(20) NOT NULL ,
PRIMARY KEY (`MaSach`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of sach
-- ----------------------------
BEGIN;
INSERT INTO `sach` VALUES ('0', 'Tony TrÃªn ÄÆ°á»ng BÄƒng', '5', '', '0', '71344aba24b0f1ea8c43d075fd3f6cd5.jpg', 'QQkjabsdj', '345', '', 'BÃ¬a Má»m', '45', '5');
COMMIT;

-- ----------------------------
-- Table structure for tacgia
-- ----------------------------
DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE `tacgia` (
`MaTacGia`  int(11) NOT NULL ,
`TenTacGia`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DiaChi`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SDT`  char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`MaTacGia`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of tacgia
-- ----------------------------
BEGIN;
INSERT INTO `tacgia` VALUES ('0', 'Tráº§n LÃª Huá»³nh Äáº¡t', 'Nha Trang', '0123456987'), ('1', 'Tráº§n LÃª Diá»…m Quá»³nh', 'Nha Trang', '0987654322');
COMMIT;

-- ----------------------------
-- Auto increment value for admin
-- ----------------------------
ALTER TABLE `admin` AUTO_INCREMENT=3;
