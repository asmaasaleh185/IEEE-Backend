CREATE DATABASE golden_database_db;

CREATE TABLE Members (
    Member_ID SERIAL PRIMARY KEY,
    Name VARCHAR(255),
    Address TEXT,
    Phone_Number VARCHAR(20),
    Email VARCHAR(255) UNIQUE
);

CREATE TABLE Subscriptions (
    Subscription_ID SERIAL PRIMARY KEY,
    Member_ID INT,
    Start_Date DATE,
    End_Date DATE,
    Type VARCHAR(100),
    FOREIGN KEY (Member_ID) REFERENCES Members(Member_ID)
);

CREATE TABLE Instructors (
    Instructor_ID SERIAL PRIMARY KEY,
    Name VARCHAR(255),
    Address TEXT,
    PhoneNumber VARCHAR(20),
    EmailAddress VARCHAR(255) UNIQUE,
    Expertise TEXT
);

CREATE TABLE Classes (
    Class_ID SERIAL PRIMARY KEY,
    Title VARCHAR(255),
    Description TEXT,
    Schedule TIMESTAMP,
    Max_Capacity INT,
    Instructor_ID INT,
    FOREIGN KEY (Instructor_ID) REFERENCES Instructors(Instructor_ID)
);

CREATE TABLE Enrollments (
    Enrollment_ID SERIAL PRIMARY KEY,
    Class_ID INT,
    Member_ID INT,
    Enrollment_Date DATE,
    FOREIGN KEY (Class_ID) REFERENCES Classes(Class_ID),
    FOREIGN KEY (Member_ID) REFERENCES Members(Member_ID)
);

CREATE TABLE Equipment (
    Equipment_ID SERIAL PRIMARY KEY,
    Name VARCHAR(255),
    Description TEXT,
    Availability BOOLEAN
);

CREATE TABLE ClassEquipment (
    Class_Equipment_ID SERIAL PRIMARY KEY,
    Class_ID INT,
    Equipment_ID INT,
    FOREIGN KEY (Class_ID) REFERENCES Classes(Class_ID),
    FOREIGN KEY (Equipment_ID) REFERENCES Equipment(Equipment_ID)
);
