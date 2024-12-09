-- Create Students table
CREATE TABLE Students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10)
);

-- Create Subjects table
CREATE TABLE Subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    subject_name VARCHAR(100)
);

-- Create Scores table
CREATE TABLE Scores (
    score_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject_id INT,
    marks INT,
    FOREIGN KEY (student_id) REFERENCES Students(student_id),
    FOREIGN KEY (subject_id) REFERENCES Subjects(subject_id)
);


/** Sample Data for the above tables **/

INSERT INTO Students (student_id, name, age, gender) VALUES
(1, 'Alice Johnson', 20, 'Female'),
(2, 'Bob Smith', 22, 'Male'),
(3, 'Charlie Brown', 21, 'Male'),
(4, 'Diana Garcia', 23, 'Female'),
(5, 'Ethan Walker', 20, 'Male'),
(6, 'Fiona Martinez', 21, 'Female'),
(7, 'George Harris', 22, 'Male'),
(8, 'Hannah Lee', 20, 'Female'),
(9, 'Ian Scott', 23, 'Male'),
(10, 'Jane Adams', 21, 'Female');


INSERT INTO Subjects (subject_id, subject_name) VALUES
(1, 'Mathematics'),
(2, 'Science'),
(3, 'History'),
(4, 'Literature'),
(5, 'Physics'),
(6, 'Chemistry'),
(7, 'Biology'),
(8, 'Computer Science'),
(9, 'Economics'),
(10, 'Philosophy');

INSERT INTO Scores (score_id, student_id, subject_id, marks) VALUES
(1, 1, 1, 85),
(2, 1, 2, 90),
(3, 2, 1, 78),
(4, 2, 3, 88),
(5, 3, 2, 95),
(6, 3, 4, 60),
(7, 4, 5, 70),
(8, 4, 6, 92),
(9, 5, 7, 81),
(10, 6, 8, 75),
(11, 7, 1, 68),
(12, 7, 3, 89),
(13, 8, 2, 82),
(14, 9, 4, 77),
(15, 10, 6, 94);
