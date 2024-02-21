## what is RDBMS?
>*RDBMS stands for Relational Database Management System. RDBMS is a program used to maintain a relational database. A relational database is a type of database that stores and provides access to data points that are related to one another. Relational databases are based on the relational model, an intuitive, straightforward way of representing data in tables. In a relational database, each row in the table is a record with a unique ID called the key. The columns of the table hold attributes of the data, and each record usually has a value for each attribute, making it easy to establish the relationships among data points. RDBMS is the basis for all modern database systems such as MySQL, Microsoft SQL Server, Oracle, and Microsoft Access. RDBMS uses SQL queries to access the data in the database.*

## RDBMS vs. DBMS
>- *DBMS (Database Management System) is a set of programs to "manage" a database. Management here means that you can perform stuff like deleting, modifying, adding data in a table. You can also add, delete, modify rows and columns in a table. In short, DBMS is a software that enables you to do all the common database operations mentioned above.*
>- *RDBMS (Relational Database Management System) is a set of programs which has all the features of DBMS plus it helps you establish connections between tables. This is important. In DBMS, you can't really connect data in one table with data in another table. But with RDBMS you can.*

|<center>*DBMS*</center>|<center>*RDBMS*</center>|
| :---- | :--- |
| DBMS stores data as file. | RDBMS stores data in tabular form.|
| Data elements need to access individually. | Multiple data elements can be accessed at the same time.|
| No relationship between data. | Data is stored in the form of tables which are related to each other.|
| Normalization is not present.	| Normalization is present.|
| DBMS does not support distributed database.|	RDBMS supports distributed database.|
|It stores data in either a navigational or hierarchical form.|	It uses a tabular structure where the headers are the column names, and the rows contain corresponding values.|
|It deals with small quantity of data.|	It deals with large amount of data.|
|Data redundancy is common in this model.|	Keys and indexes do not allow Data redundancy.|
|It is used for small organization and deal with small data.|	It is used to handle large amount of data.|
|Not all Codd rules are satisfied.|	All 12 Codd rules are satisfied.|
|Security is less.|	More security measures provided.|
|It supports single user.|	It supports multiple users.|
|Data fetching is slower for the large amount of data.|	Data fetching is fast because of relational approach.|
|The data in a DBMS is subject to low security levels with regards to data manipulation.|	There exists multiple levels of data security in a RDBMS.|
|Low software and hardware necessities.|	Higher software and hardware necessities.|
|Examples: XML, Window Registry, Forxpro, dbaseIIIplus etc.|	Examples: MySQL, PostgreSQL, SQL Server, Oracle, Microsoft Access etc.|

## What Is PostgreSQL?
>*PostgreSQL is one of the most advanced general-purpose object-relational database management system and is open-source. Being an open-source software, its source code is available under PostgreSQL license, a liberal open source license. Anyone with the right skills is free to use, modify, and distribute PostgreSQL in any form. As it is highly stable, very low effort is required to maintain this DBMS.*

## PostgreSQL Clients
>*PostgreSQL clients are software tools and libraries that allow users to interact with PostgreSQL databases. These clients can range from command-line interfaces (CLIs) to graphical user interface (GUI) applications, as well as programming language libraries for database access.*

## What purpose does pgAdmin serve in PostgreSQL?
>*The pgadmin in PostgreSQL is a data administration tool. It serves the purpose of retrieving, developing, testing, and maintaining databases.*

## naming conventions
>*naming conventions are a set of rules for choosing the character sequence to be used for identifiers which denote variables, types, functions, and other entities in source code and documentation.<br>Reasons for using a naming convention:<br> - To reduce the effort needed to read and understand source code.<br> - To enable code reviews to focus on issues more important than syntax and naming standards. <br>- To enable code quality review tools to focus their reporting mainly on significant issues other than syntax and style preferences.*
## constraints in Postgresql
>*Constraints are the rules enforced on data columns on table. These are used to prevent invalid data from being entered into the database. This ensures the accuracy and reliability of the data in the database.*
>- *NOT NULL Constraint: Ensures that a column cannot have NULL value.*
>- *UNIQUE Constraint: Ensures that all values in a column are different.*
>- *PRIMARY Key: Uniquely identifies each row/record in a database table.*
>- *FOREIGN Key: Constrains data based on columns in other tables.*
>- *CHECK Constraint: Ensures that all values in a column satisfy certain conditions.*
>- *EXCLUSION Constraint: Ensures that if any two rows are compared on the specified column(s) or expression(s) using the specified operator(s), not all of these comparisons will return TRUE.*
## indexing in Postgresql
>*Indexes are special lookup tables that the database search engine can use to speed up data retrieval by creating a special data structure for quick row access. Different types of indexes serve various use cases and data types:*
>- *B-tree Indexes: Default type, great for equality and range queries, handling high cardinality efficiently.*
>- *Hash Indexes: Optimized for equality comparisons, not supporting range queries.*
>- *GiST Indexes: Suitable for complex data types and full-text search, offering flexibility for different searches.*
>- *GIN Indexes: Ideal for composite values, such as arrays or full-text search, handling multiple component elements within values.*
>- *BRIN Indexes: Efficient for very large tables with data physically correlated, saving space but less precise, requiring partial table scans.*
>- *SP-GiST Indexes: Supports partitioned search trees for non-uniformly distributed data, useful for certain spatial queries.*
## Relations (one to one & one to many)
>- *One-to-One relationship occurs when a single record in one table is associated with exactly one record in another table, and vice versa. This relationship can be created to link primary key of one table with a unique foreign key in the other table.*
>- *one to many relationship is where a row from one table can have multiple matching rows in another table. This type of relationship can be created using Primary key - Foreign key relationship.*
## Multi-version concurrency Control
>- *Multi-version protocol aims to reduce the delay for read operations. It maintains multiple versions of data items. Whenever a write operation is performed, the protocol creates a new version of the transaction data to ensure conflict-free and successful read operations.*
## triggers
>- *Trigger is a database object containing SQL code that is automatically executed when a specific database event occurs.*
>- *There are two types of triggers: row-level triggers and statement-level triggers*
>- *Row-level trigger is executed once for each row affected by the triggering event, which is typically an INSERT, UPDATE, or DELETE statement.*
>- *Statement-level trigger is executed once for the entire triggering event, instead of once for each row affected by the event.*
>- *Statement-level triggers are useful to perform an action based on the overall effect of an INSERT, UPDATE, or DELETE statement, rather than on individual rows.*
## How can you take the backup of a database?
>- *The BACKUP DATABASE statement is used in SQL Server to create a full back up of an existing SQL database.<br>*
>*Syntax:<br>*
> BACKUP DATABASE databasename TO DISK = 'filepath';
## Resources
>1-what is RDBMS?
>- https://www.oracle.com/eg/database/what-is-a-relational-database/
>- https://www.w3schools.com/mysql/mysql_rdbms.asp
>
>2- RDBMS vs. DBMS
>- https://www.geeksforgeeks.org/difference-between-rdbms-and-dbms/
>- https://www.quora.com/What-is-the-difference-between-DBMS-and-RDBMS
>
>3- What Is PostgreSQL?
>- https://www.geeksforgeeks.org/what-is-postgresql-introduction/
>
>4- PostgreSQL Clients
>- https://www.youtube.com/watch?v=FFo8pH-kfQ8&list=PLwvrYc43l1MxAEOI_KwGe8l42uJxMoKeS&index=6&ab_channel=Amigoscode
>
>5- What purpose does pgAdmin serve in PostgreSQL?
>- https://stackoverflow.com/questions/65915129/what-purpose-does-pgadmin-in-postgresql-serve
>
>6- naming conventions
>- https://en.wikipedia.org/wiki/Naming_convention_(programming)
>
>7- constraints in Postgresql
>- https://www.tutorialspoint.com/postgresql/postgresql_constraints.htm
>
>8- indexing in Postgresql
>- https://www.tutorialspoint.com/postgresql/postgresql_indexes.htm
>- https://www.enterprisedb.com/postgres-tutorials/overview-postgresql-indexes
>
>9- Relations (one to one & one to many)
>- https://medium.com/@emekadc/how-to-implement-one-to-one-one-to-many-and-many-to-many-relationships-when-designing-a-database-9da2de684710
>- https://www.tutorialspoint.com/One-to-One-Relationship-in-DBMS
>- https://www.tutorialspoint.com/One-to-Many-or-Many-to-One-Relationship-in-DBMS
>
>10- Multi-version concurrency Control
>- https://www.tutorialspoint.com/multiversion-concurrency-control-techniques
>
>11- triggers
>- https://www.dbvis.com/thetable/sql-triggers-what-they-are-and-how-to-use-them/
>
>12- How can you take the backup of a database?
>- https://www.w3schools.com/sql/sql_backup_db.asp
>- https://www.quora.com/How-can-I-take-a-backup-for-an-SQL-database