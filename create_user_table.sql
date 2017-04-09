create database jot;

use jot;

create table if not exists `userID_table` (
 `student_Id` int(9) not null,
 `password` varchar(10) not null,
 `last_Name` varchar(10) not null,
 `first_Name` varchar(10) not null,
 primary key (`student_Id`)
);

create table if not exists `user_Display` (
 `student_Id` int(9) not null,
 `course_Id` int(4) not null,
 `course_name` varchar(30) not null,
 `professor_name` varchar(30) not null,
 primary key (`student_Id`)
);

create table if not exists `notes_table` (
 `course_Id` varchar(10) not null,
 `notes` varchar(10000) not null,
 primary key (`course_Id`)
);

