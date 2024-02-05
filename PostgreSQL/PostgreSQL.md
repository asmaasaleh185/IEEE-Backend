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