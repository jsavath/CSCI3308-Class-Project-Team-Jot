/* This is a test case for sql to make sure it can set up a database, table, and
check for the correct types of input */

/* to run this please start mysql and path to this : /path/to/file.sql_test.sql; */

create database test_sql;

use test_sql;

create table if not exists `simple_table` (
 `student_Id` int(9) not null,
 `PassowordHash` varchar(40) not null,
 `first_Name` varchar(40) not null,
 `last_Name` varchar(40) not null,
 
 primary key (`student_Id`)
); 

insert into simple_table Values ('987654321', 'test', 'testCase1', 'testCase1');

insert into simple_table Values ('!@#$%^&**', '7357', 'testCase2', 'testCase2');

insert into simple_table Values ('abcdefghij', 'test', 'testCase3', 'testCase3');

insert into simple_table Values ('987654312', '1234', 'testCase4', 'testCase4');

insert into simple_table Values ('987654213', 'test', 'testCae5', 'testCase5');

insert into simple_table Values ('987653214', 'test', 'testCase6', 'testCase6');

insert into simple_table Values ('987643215', 'test', 'testCase7', 'testCase7');

insert into simple_table values ('','','','');

select count(*) from simple_table; /*this will return 5 if the database is correctly configured */

delete from simple_table where student_Id='987654321';

delete from simple_table where student_Id='!@#$%^&*&';

select count(*) from simple_table; /* this will return 4 if the delete is working correctly*/

drop database test_sql;

/* a proper test will out put 

Query OK, 1 row affected (0.00 sec)

Database changed
Query OK, 0 rows affected (0.01 sec)

Query OK, 1 row affected (0.01 sec)

ERROR 1366 (HY000): Incorrect integer value: '!@#$%^&**' for column 'student_Id' at row 1
ERROR 1366 (HY000): Incorrect integer value: 'abcdefghij' for column 'student_Id' at row 1
Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

ERROR 1366 (HY000): Incorrect integer value: '' for column 'student_Id' at row 1
+----------+
| count(*) |
+----------+
|        5 |
+----------+
1 row in set (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

+----------+
| count(*) |
+----------+
|        4 |
+----------+
1 row in set (0.01 sec)

Query OK, 1 row affected (0.01 sec)

mysql> source /var/www/html/sql_test.sql;
Query OK, 1 row affected (0.00 sec)

Database changed
Query OK, 0 rows affected (0.03 sec)

Query OK, 1 row affected (0.01 sec)

ERROR 1366 (HY000): Incorrect integer value: '!@#$%^&**' for column 'student_Id' at row 1
ERROR 1366 (HY000): Incorrect integer value: 'abcdefghij' for column 'student_Id' at row 1
Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.01 sec)

Query OK, 1 row affected (0.01 sec)

Query OK, 1 row affected (0.00 sec)

ERROR 1366 (HY000): Incorrect integer value: '' for column 'student_Id' at row 1
+----------+
| count(*) |
+----------+
|        5 |
+----------+
1 row in set (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

+----------+
| count(*) |
+----------+
|        4 |
+----------+
1 row in set (0.00 sec)

Query OK, 1 row affected (0.03 sec)

*/
