create table if not exists `simple_table` (
 `student_Id` int(9) not null,
 `PasswordHash` BINARY(64) not null,
 `first_Name` varchar(10) not null,
 `last_Name` varchar(10) not null,
 `course_Id` int(4) not null,
 `course_Name` varchar(10) not null,
 `notes` varchar(100) not null,
 primary key (`student_Id`)
)
