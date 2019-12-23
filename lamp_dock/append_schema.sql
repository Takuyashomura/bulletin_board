
CREATE TABLE `user_data` (
    `user_id` int(11) NOT NULL,
    `user_name` varchar(100) NOT NULL,
    `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `user_data`
    ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user_data`
    MODIFY user_id int(11) NOT NULL AUTO_INCREMENT;