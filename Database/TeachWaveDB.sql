-- Create the database
CREATE DATABASE teachwaveDb;

-- Use the database
USE teachwaveDb;

-- Table 1: User Detail
CREATE TABLE User_detail (
    User_id INT PRIMARY KEY,
    First_Name VARCHAR(255) NOT NULL,
    Last_Name VARCHAR(255) NOT NULL,
    Phone VARCHAR(20),
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    User_role VARCHAR(50) NOT NULL
);

-- Table 2: Ticket Support
CREATE TABLE Tickets (
    Ticket_id INT PRIMARY KEY,
    Subject VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Message VARCHAR(255),
    Reply VARCHAR(255)
);

-- Table 3: Contact Us
CREATE TABLE contact_us (
    Contact_id INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Phone_no VARCHAR(20) NOT NULL,
    Message VARCHAR(255) NOT NULL
);

-- Table 4: Feedback
CREATE TABLE feedback (
    feedback_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL,
    user_email VARCHAR(35) NOT NULL,
    course VARCHAR(40) NOT NULL,
    feedback VARCHAR(100) NOT NULL,
    PRIMARY KEY (feedback_id)
);

-- Table 5: Announcement Detail
CREATE TABLE Announcement_Detail (
    Announcement_id INT PRIMARY KEY,
    Topic VARCHAR(255) NOT NULL,
    Description VARCHAR(255) NOT NULL
);

-- Table 6: Course Detail
CREATE TABLE course_detail (
    Course_id INT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    course_image VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL
);

-- Table 7: Course Resources
CREATE TABLE course_resources (
  Resource_id int(11) NOT NULL,
  Link text NOT NULL,
  Course_id int(11) NOT NULL,
  Topic varchar(255) NOT NULL,
  PRIMARY KEY (Resource_id),
  KEY Course_id (Course_id),
  CONSTRAINT course_resources_ibfk_1 FOREIGN KEY (Course_id) REFERENCES course_detail (Course_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table 8: admin_support

CREATE TABLE admin_support (
  S_ticket_id int(20) NOT NULL,
  User_Ticket_id int(20) NOT NULL,
  Email varchar(100) NOT NULL,
  Name varchar(150) NOT NULL,
  Message varchar(250) NOT NULL,
  Reply varchar(250) NOT NULL,
  PRIMARY KEY (S_ticket_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci

-- Sample Data for Course Detail
INSERT INTO course_detail (course_name, course_image, lecturer_name) VALUES
('Basic Practices for Online instrution ', 'images\Uploads\WhatsApp Image 2024-10-02 at 04.49.49_75cabd25.jpg', 'John Doe'),
('Assessing student learning in vertual classroom', 'images\Uploads\WhatsApp Image 2024-10-02 at 04.49.49_105b4fc8.jpg', 'Jane Smith'),
('builiding comminityin online learning enviroments', 'images\Uploads\WhatsApp Image 2024-10-02 at 04.49.49_c3ec1d5d.jpg', 'Robert Brown');

-- Sample Data for User Detail (Admin and Trainer)
INSERT INTO User_detail (First_Name, Last_Name, Phone, Email, Password, User_role) VALUES
('Nadeeja', 'thamidu', '1234567890', 'thamidu@example.com', 'Nadeeja@2002', 'admin'),
('Lakvidu', 'upsara', '0987654321', 'Lakvidu@example.com', 'Lakvidu@2001', 'lecture'),
('sithmini', 'nirasha', '1122334455', 'nirasha@example.com', 'nirasha@2002', 'teacher'),
('imesha', 'nirasha', '1122334455', 'imesha@example.com', 'imesha@2002', 'supportmember');

-- Sample Data for Tickets
INSERT INTO Tickets (Subject, Email, Message) VALUES
('Login Issue', 'user@example.com', 'I am unable to log into my account.'),
('Course Registration', 'student@example.com', 'How can I register for the new courses?');

-- Sample Data for Contact Us
INSERT INTO contact_us (Name, Phone_no, Message) VALUES
('Alice', '123456789', 'I have a question about your courses.'),
('Bob', '987654321', 'I need help with registration.');

-- Sample Data for Feedback
INSERT INTO feedback (name, user_email, course, feedback) VALUES
('Charlie', 'charlie@example.com', 'Introduction to Teaching', 'Great course! Very informative.'),
('Diana', 'diana@example.com', 'Educational Technology', 'Loved the practical examples.');

--  Sample Data into Announcement_Detail

INSERT INTO Announcement_Detail (Topic, Description) VALUES
('New Course Launch', 'We are excited to announce the launch of our new course on Digital Marketing.'),
('Holiday Notice', 'Please note that the office will be closed for the holidays from December 24th to January 1st.'),
('Training Session', 'A training session on classroom management techniques will be held on November 15th.'),
('Feedback Request', 'We are collecting feedback on our courses. Please fill out the survey sent to your email.'),
('System Maintenance', 'Scheduled system maintenance will occur on October 20th from 2 AM to 4 AM. Expect temporary service interruptions.');

