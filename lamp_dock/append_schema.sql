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

--ユーザーコメント
CREATE TABLE `comment_data`(
    `comment_id` int(11) NOT NULL,
    `room_id`int(11) NOT NULL,
    `user_name`varchar(100) NOT NULL COLLATE ,
    `user_comment` varchar(100) NOT NULL,
    `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `comment_data`
    ADD PRIMARY KEY (`comment_id`);

ALTER TABLE `comment_data`
    MODIFY comment_id int(11) NOT NULL AUTO_INCREMENT;