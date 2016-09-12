

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `simi_phrases`
--

CREATE TABLE IF NOT EXISTS `simi_phrases` (
  `ph_id` int(11) NOT NULL,
  `ph_phrase` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simi_phrases`
--

INSERT INTO `simi_phrases` (`ph_id`, `ph_phrase`) VALUES
(1, 'hello'),
(2, 'hell'),
(3, 'he'),
(4, 'so he went down to the store');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simi_phrases`
--
ALTER TABLE `simi_phrases`
ADD PRIMARY KEY (`ph_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simi_phrases`
--
ALTER TABLE `simi_phrases`
MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
