-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 02:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `hospital_no` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `service` varchar(55) NOT NULL,
  `urgency` varchar(55) NOT NULL,
  `doctor` varchar(55) NOT NULL,
  `attended_to` varchar(5) NOT NULL DEFAULT 'no',
  `created_at` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `hospital_no`, `name`, `age`, `gender`, `service`, `urgency`, `doctor`, `attended_to`, `created_at`, `timestamp`) VALUES
(1, '10/412', 'omohemma', 22, 'Male', 'cardiolog', 'Emergency', '0000-00-00 00:00:00', 'yes', '2018-10-24', '2018-10-31 16:53:21'),
(2, '10/412', 'Rahul Olson', 22, 'Male', 'Dentistry', 'Emergency', '10/30/2018', 'no', '2018-10-24', '2018-10-31 16:53:21'),
(3, '', 'Ms. Ida Blick', 8, 'Female', 'Dentistry', 'Emergency', '10/26/2018', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(4, '05/215', 'Ms. Ida Blick', 55, 'Male', 'MLS', 'Normal', '10/31/2018', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(5, '05/215', 'Ms. Ida Blick', 16, 'Female', 'MLS', 'Emergency', '', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(6, '05/215', 'Ms. Ida Blick', 18, 'Male', 'MLS', 'Emergency', '454-487-6428', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(7, '05/215', 'Ms. Ida Blick', 18, 'Male', 'MLS', 'Normal', '', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(8, '05/215', 'Ms. Ida Blick', 15, 'Male', 'MLS', 'Normal', 'Mr. Minnie Considine', 'no', '2018-10-30', '2018-10-31 16:53:21'),
(9, '05/215', 'omohemma', 0, 'Male', 'MLS', 'Emergency', 'Mr. Minnie Considine', 'yes', '2018-10-31', '2018-10-31 16:53:21'),
(10, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Normal', 'Mr. Minnie Considine', 'no', '2018-10-31', '2018-10-31 16:53:21'),
(11, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Normal', 'Mr. Minnie Considine', 'yes', '2018-11-02', '2018-11-02 01:43:42'),
(12, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Emergency', 'Mr. Minnie Considine', 'yes', '2018-11-02', '2018-11-02 14:56:37'),
(13, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Normal', 'Mr. Minnie Considine', 'yes', '2018-11-02', '2018-11-02 17:04:25'),
(14, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Normal', 'Mr. Minnie Considine', 'yes', '2018-11-02', '2018-11-02 17:11:33'),
(15, '05/215', 'Ms. Ida Blick', 0, 'Female', 'MLS', 'Normal', 'Mr. Minnie Considine', 'yes', '2018-11-02', '2018-11-02 18:31:26'),
(16, '05/215', 'Sadiq Halimat', 0, 'Female', 'Emergency Care', 'Normal', 'Dr. Precious Ojo', 'yes', '2018-11-06', '2018-11-06 01:45:04'),
(17, '11/3', 'Hendoro Olamide', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:07:32'),
(18, '05/216', 'Olusegun Titilayo', 0, '', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:16:53'),
(19, '05/216', 'Olusegun Titilayo', 0, '', 'Lab Diagnostics', 'Normal', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:20:16'),
(20, '05/215', 'Sadiq Halimat', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:28:25'),
(21, '05/215', 'Sadiq Halimat', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:29:40'),
(22, '11/3', 'Hendoro Olamide', 0, 'Female', 'Lab Diagnostics', 'Normal', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:33:33'),
(23, '11/3', 'Hendoro Olamide', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:35:32'),
(24, '05/216', 'Olusegun Titilayo', 0, '', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:43:19'),
(25, '05/215', 'Sadiq Halimat', 0, 'Female', 'Lab Diagnostics', 'Normal', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:45:40'),
(26, '05/216', 'Olusegun Titilayo', 0, '', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'no', '2018-11-14', '2018-11-14 15:49:44'),
(27, '05/215', 'Sadiq Halimat', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'yes', '2018-11-18', '2018-11-18 22:05:00'),
(28, '11/3', 'Hendoro Olamide', 0, 'Female', 'Lab Diagnostics', 'Normal', 'Dr. Precious Ojo', 'yes', '2018-11-18', '2018-11-18 22:39:22'),
(29, '11/5', 'Olubade Imoleayo', 0, 'Female', 'Lab Diagnostics', 'Emergency', 'Dr. Precious Ojo', 'yes', '2018-11-19', '2018-11-19 12:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `dept_slug` varchar(55) NOT NULL,
  `about` text NOT NULL,
  `icon` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `dept_slug`, `about`, `icon`, `created_at`) VALUES
(3, 'Emergency Care', 'emergency-care', 'The Emergency Department at HCMS provides 24 hour a day, 7 days a week care for adult and pediatric patients with all types of acute illnesses or injuries. The department is staffed with Physicians or Mid-Level Practitioners with specialized training in Emergency Medicine. Our support staff includes Registered Nurses and Emergency Department technicians who are current in BLS, ACLS, and PALS. We also have TeleMedicine available for additional support.', 'heart.png', '2018-11-19 02:34:33'),
(4, 'ENT Department', 'ent-department', 'The department of otorhinolaryngology and head-and-neck surgery ENT provides diagnosis and comprehensive treatments of ear, nose and throat diseases as well as treatments for hearing and balance.\r\n\r\nThe outpatient section provides a service in general and specialized sections otoneurology, otology, endocrinology, rhinology &amp; oncology and is equipped with the latest technology available in Nigeria..', 'ear.png', '2018-11-18 16:38:43'),
(5, 'Eye Care', 'eye-care', 'The eye may seem like a small part of our anatomy, but our ophthalmology/optometry team has made it their life&#039;s work to understand its intricacies. From our youngest patients who are nervously anticipating their first eye exam to our older patients who are concerned about a chronic vision problem, we offer the expertise and technologies to meet all eye care needs. We offer small incision cataract surgery on an outpatient basis, and minor surgical, as well as laser, treatments in office', 'eye.png', '2018-11-18 16:42:18'),
(6, 'Diabetes Care', 'diabetes-care', 'In HCMS, we offer a personalized approach to diabetes care to help you manage the condition over the long term. Our program is certified by the Nigeria Diabetes Association and supported by a grant from the National Institutes of Health.', 'heart-2.png', '2018-11-18 16:37:22'),
(7, 'Radiology', 'radiology', 'This is the department of the healthcare system that specializes with the study and application of imaging technology like x-ray and radiation to diagnosing and treating disease. The Department of Radiology is a highly specialized, full-service department which strives to meet all patient and clinician needs in diagnostic imaging and image-guided therapies.', 'heart.png', '2018-11-18 16:38:24'),
(8, 'Rheumatology', 'rheumatology', 'Rheumatology department of HCMS care for and treat patients for musculoskeletal disorders such as: bones, joints, ligaments, tendons, muscles and nerves. We offer the best care and treatment for patients in this category.', 'contactus-heart.png', '2018-11-18 16:39:49'),
(9, 'Lab Diagnostics', 'lab-diagnostics', 'Clinical laboratorians provide information and services that contribute to maximizing the effective delivery of care in today&#039;s complex healthcare system by assuring that the correct test is performed on the right person, at the right time, producing accurate test results that enable providers to make the right diagnostic and therapeutic decisions using the right level of health care resources.', 'Untitled-24567.png', '2018-11-19 02:35:36'),
(10, 'Child Care', 'child-care', 'The Primary Care Center at HCMS is a leading provider of general pediatric services to infants, children, and young adults. We firmly believe that the best pediatric health comes from regular checkups, preventive medicine, and early intervention. For immunizations, health screenings, and routine examinations, as well as referrals to a pediatric specialist when your childâ€™s health is in question, HCMS is happy to serve our community.', 'partner-6.png', '2018-11-18 16:41:46'),
(11, 'X-ray', 'x-ray', 'This department is responsible for all plain film work normal x-rays in the hospital. It is located on the ground floor of Weston General Hospital. Plain films include chest X-Rays, X-Rays for trauma broken bones, accident and emergency work, in patients and out patients', 'bone.png', '2018-11-18 16:39:24'),
(12, 'Surgery Department', 'surgery-department', 'HCMS Department of General Surgery is comprised of board-certified surgeons who provide evaluation and treatment for a full range of general surgery conditions. Services are available in a variety of locations for patient convenience, including the downtown Main Campus as well as suburbs located in the northeast, east, south and west quadrants of the greater OSUSTECH area.', 'heart-3.png', '2018-11-18 16:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `dob` varchar(55) NOT NULL,
  `hospital_no` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `marital_status` varchar(11) NOT NULL,
  `family` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `picture` text,
  `patner_name` varchar(70) NOT NULL,
  `patner_address` text NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `patner_phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `dob`, `hospital_no`, `gender`, `address`, `marital_status`, `family`, `phone`, `email`, `picture`, `patner_name`, `patner_address`, `relationship`, `patner_phone`, `created_at`) VALUES
(2, 'Sadiq Halimat', '11/02/2002', '05/215', 'Female', '12, Irele Road, Okitipupa', 'Married', '', '08145531751', 'famtemsam1@gmail.com', 'banner-marker.png', 'Sadiq Halimat', '12, Irele Road, Okitipupa', 'Self', '08145531751', '2018-11-02 17:53:16'),
(3, 'Olusegun Titilayo', '12/02/2009', '05/215', 'Female', '92, Ilemona, Ayeka', 'Single', 'OLUSEGUN', '08145531751', 'famtemsam1@gmail.com', 'banner-marker.png', 'Olusegun Andrew', '92, Ilemona, Ayeka', 'Father', '08145531751', '2018-11-02 18:08:22'),
(4, 'Hendoro Olamide', '11/19/2018', '05/215', 'Male', '1146 Jacobs Burg', 'Single', 'Adebisi', '08145531751 ', 'precy1621@gmail.com', '../../images/patients/map-marker.png', 'Oba Olube', '1146 Jacobs Burg', 'Mother', '08145531751 ', '2018-11-14 13:51:28'),
(5, 'Ola Aina', '11/20/2018', '11/4', 'Male', '12, adebusola street, ayeka', 'Single', 'Aina', '08145531751', 'precy1621@gmail.com', 'Screenshot_2013-10-20-12-04-16.png', 'Opeyemi Ayeola', '12, adebusola street, ayeka', 'Mother', '08145531751', '2018-11-19 11:10:21'),
(6, 'Olubade Imoleayo', '07/10/1996', '11/5', 'Female', '5 Broad Str, Igodan', 'Single', 'Ariya', '08145531751', 'emmaomoh@yahoo.com', 'Untitled-2.png', 'Olubade Oluwaseyi', '5, broad street, Igodan', 'Mother', '07012572051', '2018-11-19 12:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `state` varchar(25) NOT NULL,
  `lga` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `dob` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `phone` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `appointment` varchar(55) NOT NULL,
  `speciality` varchar(55) NOT NULL,
  `title` varchar(5) NOT NULL,
  `file_no` text,
  `picture` varchar(55) DEFAULT NULL,
  `hometown` varchar(55) NOT NULL,
  `designation` varchar(11) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'offline',
  `on_duty` varchar(55) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `gender`, `state`, `lga`, `address`, `dob`, `email`, `about`, `phone`, `role`, `appointment`, `speciality`, `title`, `file_no`, `picture`, `hometown`, `designation`, `status`, `on_duty`, `created_at`) VALUES
(1, 'omohemma', '$2y$10$JKUUN7CETjKIqyXfuUPaYe28inTVgzE2zThonmIbdo5jUfmA73z2q', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', 'online', 'yes', '2018-11-02 14:17:37'),
(5, 'j.matthew', '$2y$10$JKUUN7CETjKIqyXfuUPaYe28inTVgzE2zThonmIbdo5jUfmA73z2q', 'Matthew', 'John ', 'Male', 'Ondo', 'Akure South', '12, Omo-Oroki Street, Akure ', '12/02/1987', 'famtemsam1@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2012', 'Lab Diagnostics', 'Dr.', '', NULL, 'Akure', 'staff', 'offline', 'no', '2018-11-02 15:51:50'),
(7, 'a.mariya', '$2y$10$Ex.Z1nTlAg44KIIaCi0vz.qHs8lGG7TomWcjjoRzkaI8KTwDGisX6', 'Mariya', 'Anna', 'Female', 'Ondo', 'Akure South', '12, Omo-Oroki Street, Akure ', '12/02/1989', 'famtemsam1@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2014', 'ENT Department', 'Dr.', '', NULL, 'lagos', 'staff', 'offline', NULL, '2018-11-02 16:09:57'),
(8, 'm.sulekha ', '$2y$10$fTyOtOLJdCrVvHyksJvlV.285d58TA9wKHft1DdrFAtt5UB4BsJFS', 'Sulekha ', 'Menon', 'Male', 'Ondo', 'Ondo West', '16, Omo-Oroki Street, Akure ', '12/02/1985', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2015', 'Rheumatology', 'Dr.', '', NULL, 'ori-omi', 'staff', 'online', 'yes', '2018-11-02 16:15:38'),
(9, 'k.menon', '$2y$10$tZQ3u1rwIX7tzcGtNk.iIOcpGs.O41yBsRmmKw5XyD9rIpoOGwjWC', 'Kannan', 'Menon', 'Male', 'Ondo', 'Akure South', '19, Omo-Oroki Street, Akure ', '12/02/1989', 'famtemsam1@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2012', 'Surgery Department', 'Dr.', '', 'surgeonn.PNG', 'lagos', 'staff', 'offline', NULL, '2018-11-02 16:17:08'),
(10, 'u.krishnan ', '$2y$10$E6x/BIULaj4pwkT0fPLRveJyTuySSfFPcxwxNOsYl7xBvg8tqkjKq', 'Krishnan ', 'Unni', 'Male', 'Ondo', 'Ondo East', '19, Omo-Oroki Street, Akure ', '12/02/1990', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2014', 'Radiology', 'Dr.', '', NULL, 'Bolorundunro', 'staff', 'offline', NULL, '2018-11-02 16:20:44'),
(11, ' .janaki', '$2y$10$PmSegy.7ZWNSUQAT4iBZlOrEU.szhoCKI.7vZfJwxv09ZDjqUeZNS', 'Janaki', ' Dona', 'Male', 'Ondo', 'Ondo West', '', '12/02/1985', 'famtemsam1@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2013', 'Diabetes Care', 'Dr.', '', NULL, 'Bolorundunro', 'staff', 'offline', NULL, '2018-11-02 16:21:58'),
(12, 's.bobby ', '$2y$10$1c.m1jLZ1iqCYKeQ1ASq6uwYoNbn9QaWfmKpSOzso3WkMTGHzoLh.', 'Bobby ', 'Sakki', 'Male', 'Ondo', 'Okitipupa', '19, Omo-Oroki Street, Akure ', '12/02/1989', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2013', 'Eye Care', 'Dr.', '', NULL, 'Ayeka', 'staff', 'offline', NULL, '2018-11-02 16:24:25'),
(13, 'm.matthew', '$2y$10$QCznxW8TMu1nOzqyyvVr0.pVv42BH/kpzaDQllukcyt0HTQcuKeL.', ' Mathew', 'Mahesh', 'Male', 'Ondo', 'Ilaje', '49, Omo-Oroki Street, Akure ', '12/02/1985', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '', 'Child Care', 'Dr.', '', NULL, 'Ayetoro', 'staff', 'offline', NULL, '2018-11-02 16:27:02'),
(14, 'a.anthony ', '$2y$10$kYIhp4EJt2vTqdHeTq2Vgui.OXZtVnINErrsbilnLWSguaYSBODna', 'Anthony ', 'Adedayo', 'Male', 'Ondo', 'Akure South', '50, Omo-Oroki Street, Akure ', '12/02/1990', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2014', 'X-ray', 'Prog.', '', NULL, 'akure', 'staff', 'offline', NULL, '2018-11-02 16:35:57'),
(15, 'o.precious', '$2y$10$7yvDZuG6SEEPg0b.jmh2DeIOdBvzlthWFYDtb/WoEzQEICAnJXR7y', 'Precious', 'Ojo', 'Male', 'Ondo', 'Akure South', '16, Omo-Oroki Street, Akure ', '12/02/1985', 'precy1621@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', '08145531751', 'doctor', '12/09/2015', 'Lab Diagnostics', 'Dr.', '', '', 'Akure', 'staff', 'away', 'yes', '2018-11-02 16:39:37'),
(16, 'a.olaoluwa', '$2y$10$5AroFBOJZOPyANkahLUbwufJw.hiXu/fhumihvR5nlayEvlFDteLS', 'Olaoluwa', 'Aina', 'Male', 'Ondo', 'Okitipupa', '1, Lebo street, Igodigo', '12/02/1984', 'precy1621@gmail.com', '', '08145531751', 'medical-record', '12/09/2012', '', 'Mr.', '', NULL, 'Igbodigo', 'staff', 'offline', NULL, '2018-11-02 16:42:42'),
(17, 'd.victor', '$2y$10$K7yoqcW6Qxa9HSg1whQujOruMAt1QdcKJz0RO2E1jQqw2HPMMjzfK', 'Victor', 'Dada', 'Male', 'Ondo', 'Akure South', '12, Omo-Oroki Street, Akure ', '12/02/1985', 'famtemsam1@gmail.com', '', '08145531751', 'medical-record', '12/09/2015', '', 'Mr.', '', NULL, 'Akure', 'staff', 'offline', NULL, '2018-11-02 17:12:56'),
(18, 'o.suliyat', '$2y$10$dhG1xen/I3EkU/tggBqRWuS3YN2Qkp6qCU39wlg2iEYi1dXlkGmAe', 'Suliyat', 'Olaniyan', 'Female', 'Ondo', 'Okitipupa', '50, Omo-Oroki Street, Akure ', '12/02/1984', 'famtemsam1@gmail.com', '', '08145531751', 'medical-record', '12/09/2015', '', 'Mrs.', '', NULL, 'Ayeka', 'staff', 'online', 'yes', '2018-11-02 17:16:48'),
(19, 'a.oladipupo', '$2y$10$d0wq6mwGa7nv3SRrn8atpe3Riqh5fuFsIoH7hcFQOk0y9tdDb2V9C', 'Oladipupo', 'Aina', 'Male', 'Ondo', 'Ose', '15,adeolu street,igodan', '07/02/1989', 'okoroko@gmail.com', '', '08145531751', 'medical-record', '11/20/2018', '', 'Mr', '', '1.jpeg', 'Agadadi', 'staff', 'offline', 'no', '2018-11-14 13:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `visit_history`
--

CREATE TABLE `visit_history` (
  `id` int(11) NOT NULL,
  `hospital_no` varchar(10) NOT NULL,
  `name` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `doctor` varchar(55) NOT NULL,
  `diagnosis` text NOT NULL,
  `remark` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_history`
--

INSERT INTO `visit_history` (`id`, `hospital_no`, `name`, `age`, `doctor`, `diagnosis`, `remark`, `created_at`) VALUES
(8, '05/215', 'Ms. Ida Blick', 0, 'Mr. Minnie Considine', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus 				', '2018-11-02 18:35:43'),
(9, '05/216', 'Sadiq Halimat', 0, 'Dr. Precious Ojo', '', '									\r\n								,nmn,m,zdgfdfgdhgdgh ', '2018-11-06 01:45:53'),
(10, '', '', 0, 'Dr. Precious Ojo', 'Exam Board offer an integrated suite of web application to conduct online exam, online question bank, e-commerce & enrollment management. This system helps education group, academy, recruiter, teacher, management consulting, technology services and outsourcing company to conduct exam. ', 'Exam Board is a powerful management system for online exams, provide innovative examination process and assessment solutions to Educational Institutions, Government/ PSU sector and leading corporate entities. With Exam Board, team of leaders & innovators is constantly researching on making examination process easy and simple.									', '2018-11-18 22:21:03'),
(11, '05/215', '', 0, 'Dr. Precious Ojo', 'Exam Board is a powerful management system for online exams, provide innovative examination process and assessment solutions to Educational Institutions, Government/ PSU sector and leading corporate entities. With Exam Board, team of leaders & innovators is constantly researching on making examination process easy and simple.										\r\n									', 'Exam Board offer an integrated suite of web application to conduct online exam, online question bank, e-commerce & enrollment management. This system helps education group, academy, recruiter, teacher, management consulting, technology services and outsourcing company to conduct exam. 									', '2018-11-18 22:22:49'),
(12, '11/3', 'Hendoro Olamide', 0, 'Dr. Precious Ojo', '\r\nExam Board is a powerful management system for online exams, provide innovative examination process and assessment solutions to Educational Institutions, Government/ PSU sector and leading corporate entities. With Exam Board, team of leaders & innovators is constantly researching on making examination process easy and simple.\r\n\r\n. 										\r\n									', '				Exam Board offer an integrated suite of web application to conduct online exam, online question bank, e-commerce & enrollment management. This system helps education group, academy, recruiter, teacher, management consulting, technology services and outsourcing company to conduct exam					', '2018-11-18 22:50:26'),
(13, '11/5', 'Olubade Imoleayo', 0, 'Dr. Precious Ojo', '										\r\n				She has been diagnosed with having a ruptured anterior ligament.					', '									She is to use calcium drugs', '2018-11-19 12:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_history`
--
ALTER TABLE `visit_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visit_history`
--
ALTER TABLE `visit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
