-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 11:42 AM
-- Server version: 8.0.37
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediaLybrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `ID` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN_code` varchar(13) DEFAULT NULL,
  `short_description` text,
  `type` varchar(255) NOT NULL,
  `author_first_name` varchar(100) DEFAULT NULL,
  `author_last_name` varchar(100) DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`ID`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(19, 'To Kill a Mockingbird', 'https://cdn.pixabay.com/photo/2016/10/14/16/39/book-1740515_1280.png', '9780061120084', 'A novel about the serious issues of rape and racial inequality.', 'book', 'Harper', 'Lee', 'J.B. Lippincott and Co.', 'Philadelphia, PA', '1960-07-11', 'available'),
(20, '1984', 'https://cdn.pixabay.com/photo/2016/10/14/16/39/book-1740515_1280.png', '9780451524935', 'A dystopian novel set in a totalitarian society ruled by Big Brother.', 'book', 'George', 'Orwell', 'Secker and Warburg', 'London, UK', '1949-06-08', 'available'),
(21, 'The Great Gatsby', 'https://cdn.pixabay.com/photo/2016/10/14/16/39/book-1740515_1280.png', '9780743273565', 'A novel about the American dream and the roaring twenties.', 'book', 'F. Scott', 'Fitzgerald', 'Charles Scribners Sons', 'New York, NY', '1925-04-10', 'available'),
(22, 'Thriller', 'https://cdn.pixabay.com/photo/2020/08/11/15/30/cd-5480252_1280.jpg', '', 'The best-selling album of all time by Michael Jackson.', 'CD', 'Michael', 'Jackson', 'Epic Records', 'New York, NY', '1982-11-30', 'available'),
(23, 'Back in Black', 'https://cdn.pixabay.com/photo/2020/08/11/15/30/cd-5480252_1280.jpg', '', 'The iconic rock album by AC/DC.', 'CD', 'AC/DC', '', 'Atlantic Records', 'New York, NY', '1980-07-25', 'available'),
(24, 'Rumours', 'https://cdn.pixabay.com/photo/2020/08/11/15/30/cd-5480252_1280.jpg', '', 'The best-selling album by Fleetwood Mac.', 'CD', 'Fleetwood', 'Mac', 'Warner Bros. Records', 'Burbank, CA', '1977-02-04', 'available'),
(25, 'The Shawshank Redemption', 'https://cdn.pixabay.com/photo/2015/09/18/21/04/dvd-cover-946403_1280.jpg', '', 'A movie about hope and friendship inside a maximum-security prison.', 'DVD', 'Frank', 'Darabont', 'Columbia Pictures', 'Culver City, CA', '1994-09-23', 'available'),
(26, 'The Godfather', 'https://cdn.pixabay.com/photo/2015/09/18/21/04/dvd-cover-946403_1280.jpg', '', 'A crime movie that focuses on the powerful Italian-American crime family of Don Vito Corleone.', 'DVD', 'Francis Ford', 'Coppola', 'Paramount Pictures', 'Hollywood, CA', '1972-03-24', 'available'),
(27, 'The Dark Knight', 'https://cdn.pixabay.com/photo/2015/09/18/21/04/dvd-cover-946403_1280.jpg', '', 'A movie about Batman and his fight against the Joker.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures', 'Burbank, CA', '2008-07-18', 'available'),
(28, 'Harry Potter and the Sorcerers Stone', 'https://cdn.pixabay.com/photo/2016/10/14/16/39/book-1740515_1280.png', '9780590353427', 'The first book in the Harry Potter series.', 'book', 'J.K.', 'Rowling', 'Bloomsbury', 'London, UK', '1997-06-26', 'available'),
(29, 'The Catcher in the Rye', 'https://cdn.pixabay.com/photo/2016/10/14/16/39/book-1740515_1280.png', '9780316769488', 'A novel about the teenage angst and alienation of Holden Caulfield.', 'book', 'J.D.', 'Salinger', 'Little, Brown and Company', 'Boston, MA', '1951-07-16', 'available'),
(30, 'Goodbye Yellow Brick Road', 'https://cdn.pixabay.com/photo/2020/08/11/15/30/cd-5480252_1280.jpg', '', 'A double album by Elton John.', 'CD', 'Elton', 'John', 'MCA Records', 'Universal City, CA', '1973-10-05', 'available'),
(31, 'The Wall', 'https://cdn.pixabay.com/photo/2020/08/11/15/30/cd-5480252_1280.jpg', '', 'A rock opera by Pink Floyd.', 'CD', 'Pink', 'Floyd', 'Harvest Records', 'London, UK', '1979-11-30', 'available'),
(32, 'Pulp Fiction', 'https://cdn.pixabay.com/photo/2015/09/18/21/04/dvd-cover-946403_1280.jpg', '', 'A movie with interconnected stories of crime in Los Angeles.', 'DVD', 'Quentin', 'Tarantino', 'Miramax Films', 'Santa Monica, CA', '1994-10-14', 'available'),
(33, 'Inception', 'https://cdn.pixabay.com/photo/2015/09/18/21/04/dvd-cover-946403_1280.jpg', '', 'A science fiction movie about a thief who enters the dreams of others.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures', 'Burbank, CA', '2010-07-16', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
