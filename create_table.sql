create table if not exists `simple_table` (
 `student_Id` int(9) not null,
 `PasswordHash` NVARCHAR(50) not null,
 `first_Name` varchar(10) not null,
 `last_Name` varchar(10) not null,
 primary key (`student_Id`)
)
