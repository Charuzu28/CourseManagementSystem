SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `course` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `course` (`id`, `course_name`, `int_name`, `course_id`) VALUES
(1, 'Web standards', 'Juan Ponce Enrile', 'ITPC01');

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `students` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'shindy', 'shindy@gmail.com', '19281236472'),
(9, 'test5', 'test5@gmail.com', '555555555555'),
(10, 'dio', 'dio@email.com', '54345678'),
(8, 'gil2', 'gil2@gmail.com', '29384445555'),
(12, 'tay', 'tay@email.com', '765456789'),
(13, 'wer', 'wer@email.com', '654345678'),
(15, 'huy', 'huy@email.com', '234567876543'),
(16, 'ref', 'ref@email.com', '3456543113'),
(17, 'test3', 'test3@gmail.com', '1224242424'),
(19, 'gio57', 'gio57@gmail.com', '097689327887'),
(18, 'test4', 'test4@gmail.com', '242143551252');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'shaira', 'shaira@gmail.com', '482a53a7536571834cfa06881073227b', '2023-12-12 03:48:13'),
(2, 'lee', 'lee@gmail.com', 'b0f8b49f22c718e9924f5b1165111a67', '2023-12-12 03:51:00'),
(3, 'shin', 'shin@gmail.com', 'e3a93ca5b9c8954839801fa8b8d1fc87', '2023-12-17 06:19:02');

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
