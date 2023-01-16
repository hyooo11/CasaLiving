-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- 생성 시간: 22-06-08 08:40
-- 서버 버전: 10.4.21-MariaDB
-- PHP 버전: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `member`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member0`
--

CREATE TABLE `member0` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `userid` varchar(40) DEFAULT NULL,
  `userpw` varchar(30) DEFAULT NULL,
  `userphone` int(20) DEFAULT NULL,
  `useremail` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member0`
--

INSERT INTO `member0` (`id`, `username`, `userid`, `userpw`, `userphone`, `useremail`, `address`) VALUES
(1, 'rootdfsas', 'asdf', 'dsf', 103813, 'dnflwlq@namet.codm', ''),
(2, 'fef', 'efef', '111111232', 24242, 'dnflwlq@namet.codm', ''),
(3, 'rootefe', 'efe', '111111efe', 32412453, 'dnflwlq@namet.codm', ''),
(4, 'ee', 'eerf', '111111', 321, 'dnflwlq@namet.codm', ''),
(5, 'ee', 'eerf', '111111', 321, 'dnflwlq@namet.codm', ''),
(6, 'abc', 'abc', '1234', 234567, 'ghj@ghjk', ''),
(7, 'sdaf', 'asdf', '12111111', 1213123, '3@u', ''),
(8, 'root', 'wef', '111111', 134, '3@u', '05272 서울 강동구 상암로 251 ㅁㅈㄷㅎㄱㄷㄴㅎㅇㄹ'),
(9, 'root', 'adsf', '111111', 1234, '3@u', '05272 서울 강동구 상암로 251 ㅁㄴㄹㅎㅇ휸'),
(10, 'ㅈㄷㅇㄹㅍ', 'ㅈㄷㅇㄹㅍ', '123erfv', 234, 'dnflwlq@namet.codm', '05272 서울 강동구 상암로 251 ㅎㄹㅇㄴㅁ'),
(11, 'rootㅈㄷㄱ', 'asdfqwer', '111111', 1234, '3@u', '05272 서울 강동구 상암로 251 ㅂㅈㄷㅂㅈㄷㄱㄹㅎ');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member0`
--
ALTER TABLE `member0`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member0`
--
ALTER TABLE `member0`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
