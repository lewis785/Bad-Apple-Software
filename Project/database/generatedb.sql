----------Clear database---------------

CREATE DATABASE IF NOT EXISTS pathmaker;
DROP TABLE IF EXISTS courselevel, course, grades, levels, months, occupations;
DROP TABLE IF EXISTS ucaspoints, ucastariffs, unistatscourses, unistatsinstitutes;
DROP TABLE IF EXISTS useraccess, useraddress, usercareerpath, userdetails;
DROP TABLE IF EXISTS useremployment, userlogin, userprofile, userqualifications;

----------Create Tables----------------

CREATE TABLE `grade_level` (
  `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Unique Identifier for each level',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The level itself',
  `grade_set` int(8) NOT NULL COMMENT 'Associated grade set'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `occupation` (
  `id` int(16) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Unique identifier for occupation',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The occupation itself'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains occupations.';



----------Insert Data------------------

--Data insertion for grade level
INSERT INTO `grade_level` (`id`, `name`, `grade_set`) VALUES
(1, 'Standard Grade', 2),
(2, 'Intermediate 1', 1),
(3, 'Intermediate 2', 1),
(4, 'Higher', 1),
(5, 'Advanced Higher', 1),
(6, 'National 5', 1),
(7, 'New Higher', 1);

--Data insertion for occupation
INSERT INTO `occupation` (`id`, `name`) VALUES
(1, 'Unemployed'),
(2, 'Student Part-Time'),
(3, 'Student Full-Time'),
(4, 'Work Part-Time'),
(5, 'Work Full-Time'),
(6, 'Apprentice'),
(7, 'Other');

