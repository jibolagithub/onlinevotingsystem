CREATE TABLE Users(
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(60),
    LastName varchar(60),
    Department varchar(60),
    Gender ENUM("Male", "Female"),
    Telephone varchar(20) UNIQUE KEY, 
    Password varchar(60)
);


CREATE TABLE candidates(
    CandidateID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(60),
    LastName varchar(60),
    Department varchar(60),
    Telephone varchar(20) UNIQUE KEY,
    Content text,
    VoteCount INT,
    post text
);

CREATE TABLE admin(
    AdminID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(60),
    LastName varchar(60),
    Telephone varchar(20) UNIQUE KEY,
    Gender ENUM("Male", "Female"),
    Password varchar(60)
);