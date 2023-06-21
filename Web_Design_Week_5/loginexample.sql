--create database statement

CREATE DATABASE `w5_login`;

-- create table users
CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`) VALUES
(1, 'boysie', 'boysie@test.ff', 'boysie'),
(6, 'rongel', 'rongel@washere.ff', 'rongel'),
(7, 'ham', 'ham@gmail.com', 'ham'),
(8, 'bread', 'bread@mail.com', 'bread');

--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;


