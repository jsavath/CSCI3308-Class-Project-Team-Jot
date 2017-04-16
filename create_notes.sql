create table if not exists `notes` (
 `note_Id` int(9) not null AUTO_INCREMENT,
 `name` varchar(50) not null,
 `course_name` varchar(10) not null,
 `course_number` varchar(10) not null,
 primary key (`note_Id`)
)