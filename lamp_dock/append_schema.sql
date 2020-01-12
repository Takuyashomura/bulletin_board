--ユーザーテーブル
CREATE TABLE `user_data` (
    `user_id` int(11) NOT NULL,
    `user_name` varchar(100) NOT NULL,
    `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `user_data`
    ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user_data`
    MODIFY user_id int(11) NOT NULL AUTO_INCREMENT;

--ルームテーブル
CREATE TABLE `user_room_data`(
    `room_id` int(11) NOT NULL,
    `room_name` varchar(100) NOT NULL,
    `administrator` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user_room_data`
    ADD PRIMARY KEY (`room_id`);

ALTER TABLE `user_room_data`
    MODIFY room_id int(11) NOT NULL AUTO_INCREMENT;