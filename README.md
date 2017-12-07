Okay, this is my first web blog with 100% source code made by me.
/* Wang Ryeo | wangryeo@gmail.com */
// Tiếng anh - English (too bad)
How to use?
+ upload code to host.
+ in lib/connect.php, edit Database host, user, pass....
+ Create Database with name "blog"
+ with phpmyadmin, in SQL, run list codes:
.) CREATE TABLE `log` ( `logID` int(11) NOT NULL, `logPost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, `editPostID` int(11) NOT NULL, `logCommit` text COLLATE utf8mb4_unicode_ci NOT NULL, `logTime` datetime NOT NULL, `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
.) CREATE TABLE `post` ( `post_id` int(11) NOT NULL, `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `date_post` date NOT NULL, `last_edit_date` date NOT NULL, `year` year(4) NOT NULL, `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) CREATE TABLE `user` ( `user_id` int(10) NOT NULL, `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `fullname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `gender` int(1) NOT NULL, `level` int(1) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) CREATE TABLE `year` ( `year_id` int(11) NOT NULL, `year` int(11) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) ALTER TABLE `log` ADD PRIMARY KEY (`logID`)
.) ALTER TABLE `post` ADD PRIMARY KEY (`post_id`)
.) ALTER TABLE `user` ADD PRIMARY KEY (`user_id`)
.) ALTER TABLE `year` ADD PRIMARY KEY (`year_id`)
.) ALTER TABLE `log` MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7
.) ALTER TABLE `post` MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12
.) ALTER TABLE `user` MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3
.) ALTER TABLE `year` MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11
+ Don't forget add a account in table 'user' with level >=2 for login to blog, and password is a md5hash.
 haha, this is the first time I using Github to manage my source code and my english too bad, sorry
 _____________________________________________________________________________________________________________________
// Tiếng Việt - Vietnamese
+ Up code này lên host
+ trong file lib/connect.php, sửa các thông tin kết nối tới server
+ Tạo Database 'Blog'
+ Chạy các SQL sau:
.) CREATE TABLE `log` ( `logID` int(11) NOT NULL, `logPost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, `editPostID` int(11) NOT NULL, `logCommit` text COLLATE utf8mb4_unicode_ci NOT NULL, `logTime` datetime NOT NULL, `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
.) CREATE TABLE `post` ( `post_id` int(11) NOT NULL, `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `date_post` date NOT NULL, `last_edit_date` date NOT NULL, `year` year(4) NOT NULL, `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) CREATE TABLE `user` ( `user_id` int(10) NOT NULL, `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `fullname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL, `gender` int(1) NOT NULL, `level` int(1) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) CREATE TABLE `year` ( `year_id` int(11) NOT NULL, `year` int(11) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1
.) ALTER TABLE `log` ADD PRIMARY KEY (`logID`)
.) ALTER TABLE `post` ADD PRIMARY KEY (`post_id`)
.) ALTER TABLE `user` ADD PRIMARY KEY (`user_id`)
.) ALTER TABLE `year` ADD PRIMARY KEY (`year_id`)
.) ALTER TABLE `log` MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7
.) ALTER TABLE `post` MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12
.) ALTER TABLE `user` MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3
.) ALTER TABLE `year` MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11
+ Nhớ thêm 1 tài khoản có level >2 trong table để đăng nhập vào blog.
