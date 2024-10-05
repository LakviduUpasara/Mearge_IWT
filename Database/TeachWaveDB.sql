-- Create the database
CREATE DATABASE teachwaveDb;

-- Use the database
USE teachwaveDb;

-- Table 12: User Detail
CREATE TABLE User_detail (
    User_id INT PRIMARY KEY,
    First_Name VARCHAR(255) NOT NULL,
    Last_Name VARCHAR(255) NOT NULL,
    Phone VARCHAR(20),
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    User_role VARCHAR(50) NOT NULL
);

-- Table 1: Ticket Support
CREATE TABLE Tickets (
    Ticket_id INT PRIMARY KEY,
    Subject VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Message VARCHAR(255),
    Reply VARCHAR(255)
);

-- Table 2: Contact Us
CREATE TABLE contact_us (
    Contact_id INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Phone_no VARCHAR(20) NOT NULL,
    Message VARCHAR(255) NOT NULL
);

-- Table: Feedback
CREATE TABLE feedback (
    feedback_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL,
    user_email VARCHAR(35) NOT NULL,
    course VARCHAR(40) NOT NULL,
    feedback VARCHAR(100) NOT NULL,
    PRIMARY KEY (feedback_id)
);

-- Table: Announcement Detail
CREATE TABLE Announcement_Detail (
    Announcement_id INT PRIMARY KEY,
    Topic VARCHAR(255) NOT NULL,
    Description VARCHAR(255) NOT NULL
);

-- Table: Course Detail
CREATE TABLE course_detail (
    Course_id INT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    course_image VARCHAR(255) NOT NULL,
    lecturer_name VARCHAR(255) NOT NULL
);

-- Table 11: Course Resources
CREATE TABLE Course_Resources (
    Resource_id INT PRIMARY KEY,
    Link TEXT NOT NULL,
    Course_id INT NOT NULL,
    FOREIGN KEY (Course_id) REFERENCES course_detail(Course_id)
);
CREATE TABLE admin_support (
  S_ticket_id int(20) NOT NULL,
  User_Ticket_id int(20) NOT NULL,
  Email varchar(100) NOT NULL,
  Name varchar(150) NOT NULL,
  Message varchar(250) NOT NULL,
  Reply varchar(250) NOT NULL,
  PRIMARY KEY (S_ticket_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci