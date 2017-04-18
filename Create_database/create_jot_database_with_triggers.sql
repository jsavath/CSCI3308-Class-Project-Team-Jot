create table if not exists `simple_table` (
 `student_Id` int(9) not null,
 `PasswordHash` NVARCHAR(50) not null,
 `first_Name` varchar(25) not null,
 `last_Name` varchar(25) not null,
 primary key (`student_Id`)
);

delimiter $

create trigger test_null_student_Id 
BEFORE INSERT 
ON simple_table 
FOR EACH ROW 
Begin
IF new.student_Id = '' THEN 
SET new.student_Id = null; 
END IF; 
END;$

create trigger test_null_PasswordHash
BEFORE INSERT
ON simple_table
FOR EACH ROW
Begin
IF new.PasswordHash = '' THEN
set new.PasswordHash = null;
END IF;
END;$

create trigger test_null_first_Name
BEFORE INSERT
ON simple_table
FOR EACH ROW
Begin
IF new.first_Name = '' THEN
set new.first_Name = null;
END IF;
END;$

create trigger test_null_last_Name
BEFORE INSERT
ON simple_table
FOR EACH ROW
Begin
IF new.last_Name = '' THEN
set new.last_Name = null;
END IF;
END;$

create trigger test_null_number_symbols_last_Name 
BEFORE INSERT 
ON simple_table 
FOR EACH ROW 
Begin
IF (new.last_Name REGEXP '^\\[0-9]!@#$%^&*()_+') = 1 THEN 
SET new.first_Name = null; 
SET new.last_Name = null;
SET new.PasswordHash = null;
SET new.student_Id = null;
END IF; 
END;$

create trigger test_null_number_symbols_first_Name 
BEFORE INSERT 
ON simple_table 
FOR EACH ROW 
Begin
IF (new.last_Name REGEXP '^\\[0-9]!@#$%^&*()_+') = 1 THEN 
SET new.last_Name = null;
SET new.PasswordHash = null;
SET new.student_Id = null;
SET new.first_Name = null; 
END IF; 
END;$

delimiter ;
