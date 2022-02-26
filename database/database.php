<?php
// -- phpMyAdmin SQL Dump
// -- version 5.0.3
// -- https://www.phpmyadmin.net/
// --
// -- Host: 127.0.0.1
// -- Generation Time: Apr 01, 2021 at 05:28 PM
// -- Server version: 10.4.14-MariaDB
// -- PHP Version: 7.4.11

// --
// -- Database: `library_managment`
// --

$con = mysqli_connect("127.0.0.1:3307",'root');
$query = 'DROP DATABASE if exists `library_management` ';
mysqli_query($con,$query);

$query = 'CREATE DATABASE `library_management`';
mysqli_query($con,$query);
mysqli_select_db($con,'library_management');


// -- --------------------------------------------------------

// --
// -- Table structure for table `admin`
// --
$query = 'DROP TABLE if exists `admin`';
mysqli_query($con,$query);

$query = 'CREATE TABLE `admin` (
`id` int(11) NOT NULL,
`email` varchar(25) NOT NULL,
`pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4';

mysqli_query($con,$query);

// --
// -- Dumping data for table `admin`
// --

$query = "INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
 (1, 'idno22381@gmail.com', 123),
 (2, 'test@gmail.com', 1234)";

mysqli_query($con,$query);

// -- --------------------------------------------------------

// --
// -- Table structure for table `book`
// --
$query = 'DROP TABLE if exists `book`';
mysqli_query($con,$query);

$query = " CREATE TABLE `book` (
`id` int(11) NOT NULL,
`bookpic` varchar(25) NOT NULL,
`bookname` varchar(25) NOT NULL,
`bookdetail` varchar(110) NOT NULL,
`bookaudor` varchar(25) NOT NULL,
`bookpub` varchar(25) NOT NULL,
`branch` varchar(110) NOT NULL,
`bookprice` varchar(25) NOT NULL,
`bookquantity` varchar(25) NOT NULL,`bookava` int(11) NOT NULL,
`bookrent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

mysqli_query($con,$query);

// --
// -- Dumping data for table `book`
// --

$query = "INSERT INTO `book` (`id`, `bookpic`, `bookname`, `bookdetail`, `bookaudor`, `bookpub`, `branch`, `bookprice`, `bookquantity`, `bookava`, `bookrent`) VALUE (4, 'arrow.jpg', 'Scott Gallagher', '1st edition', 'no idea', 'Suscipit', 'it', '756', '20', 16, 4),(5, 'logo.png', 'Ferris Mclaughlin', 'Qui ex dolor fugiat ', 'Est voluptates offi', 'Dolorem earum accusa', 'electrical', '264', '157', 157, 0),(6, 'arrow.png', 'harry', 'Ea quas nulla ration', 'Ut dolorem culpa ex', 'Eum proident quidem', 'it', '76', '3', 2, 1)";

mysqli_query($con,$query);

// -- --------------------------------------------------------

// --
// -- Table structure for table `issuebook`
// --
$query = 'DROP TABLE if exists `issuebook`';
mysqli_query($con,$query);

$query=  "CREATE TABLE `issuebook` (
`id` int(11) NOT NULL,
`userid` int(11) NOT NULL,
`issuename` varchar(25) NOT NULL,
`issuebook` varchar(25) NOT NULL,
`issuetype` varchar(25) NOT NULL,
`issuedays` int(11) NOT NULL,
`issuedate` varchar(25) NOT NULL,
`issuereturn` varchar(25) NOT NULL,
`fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
mysqli_query($con,$query);


// --
// -- Dumping data for table `issuebook`
// --
$query = "INSERT INTO `issuebook` (`id`, `userid`, `issuename`, `issuebook`, `issuetype`, `issuedays`, `issuedate`, `issuereturn`, `fine`) VALUES
(2, 1, 'salman', 'Rich daddy poor dady', 'student', 3, '30/03/2021', '02/04/2021', 1800),
(3, 2, 'Randall Burch', 'Scott Gallagher', 'teacher', 4, '30/03/2021', '03/04/2021', 0),
(6, 1, 'salman', 'Scott Gallagher', 'student', 7, '30/03/2021', '06/04/2021', 1800),
(9, 5, 'salmannew', 'Scott Gallagher', 'teacher', 21, '30/03/2021', '20/04/2021', 0),
(10, 1, 'salman', 'Scott Gallagher', 'student', 7, '01/04/2021', '08/04/2021', 0),
(11, 1, 'salman', 'harry', 'student', 7, '01/04/2021', '08/04/2021', 0)";
mysqli_query($con,$query);


// -- --------------------------------------------------------

// --
// -- Table structure for table `requestbook`
// --
$query = 'DROP TABLE if exists `requestbook`';
mysqli_query($con,$query);

$query = "CREATE TABLE `requestbook` (
`id` int(11) NOT NULL,
`userid` int(11) NOT NULL,
`bookid` int(11) NOT NULL,
`username` varchar(25) NOT NULL,
`usertype` varchar(25) NOT NULL,
`bookname` varchar(25) NOT NULL,
`issuedays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
mysqli_query($con,$query);


// -- --------------------------------------------------------

// --
// -- Table structure for table `userdata`
// --
$query = 'DROP TABLE if exists `userdata`';
mysqli_query($con,$query);

$query="CREATE TABLE `userdata` (
`id` int(11) NOT NULL,
`name` varchar(25) NOT NULL,
`email` varchar(25) NOT NULL,
`pass` varchar(25) NOT NULL,
`type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
mysqli_query($con,$query);


// --
// -- Dumping data for table `userdata`
// --

$query= "INSERT INTO `userdata` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'salman', 'idno22382@gmail.com', '123', 'student'),
(2, 'Randall Burch', 'voqo@mailinator.com', 'Ratione nulla dolore', 'teacher'),
(3, 'Gabriel Daugherty', 'bipacer@mailinator.com', 'Voluptas explicabo ', 'teacher'),(4,'Mrde','test@gmail.com1','12345','student'),
(5, 'salmannew', '1234@gmail.com', '123', 'teacher')";
mysqli_query($con,$query);


// --
// -- Indexes for dumped tables
// --

// --
// -- Indexes for table `admin`
// --
$query ="ALTER TABLE `admin` ADD PRIMARY KEY (`id`)";
mysqli_query($con,$query);


// --
// -- Indexes for table `book`
// --
$query = "ALTER TABLE `book` ADD PRIMARY KEY (`id`)";
mysqli_query($con,$query);


// --
// -- Indexes for table `issuebook`
// --
$query="ALTER TABLE `issuebook` ADD PRIMARY KEY (`id`), ADD KEY `pk_fk` (`userid`)";
mysqli_query($con,$query);


// --
// -- Indexes for table `requestbook`
// --
$query="ALTER TABLE `requestbook`ADD PRIMARY KEY (`id`),ADD KEY `pk_fk_book` (`bookid`),ADD KEY `pk_fk_users` (`userid`)";
mysqli_query($con,$query);


// --
// -- Indexes for table `userdata`
// --
$query="ALTER TABLE `userdata`ADD PRIMARY KEY (`id`)";
mysqli_query($con,$query);

// --
// -- AUTO_INCREMENT for dumped tables
// --

// --
// -- AUTO_INCREMENT for table `admin`
// --
$query ="ALTER TABLE `admin` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2";
mysqli_query($con,$query); 


// --
// -- AUTO_INCREMENT for table `book`
// --
$quer="ALTER TABLE `book`MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7";
mysqli_query($con,$query);


// --
// -- AUTO_INCREMENT for table `issuebook`
// --
$query ="ALTER TABLE `issuebook`MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12";
mysqli_query($con,$query);


// --
// -- AUTO_INCREMENT for table `requestbook`
// --
$query= " ALTER TABLE `requestbook`MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7";
mysqli_query($con,$query);


// --
// -- AUTO_INCREMENT for table `userdata`
// --
$query="ALTER TABLE `userdata` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6";
mysqli_query($con,$query);


// --
// -- Constraints for dumped tables
// --

// --
// -- Constraints for table `issuebook`
// --
$query="ALTER TABLE `issuebook` ADD CONSTRAINT `pk_fk` FOREIGN KEY (`userid`)REFERENCES `userdata` (`id`)";
mysqli_query($con,$query);



// --
// -- Constraints for table `requestbook`
// --
$query="ALTER TABLE `requestbook`ADD CONSTRAINT `pk_fk_users` FOREIGN KEY (`userid`) REFERENCES `userdata`(`id`)";
mysqli_query($con,$query);

?>