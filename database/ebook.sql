-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220709.47e7cfe761
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 07:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(7, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `image`, `status`, `rating`, `genre`, `price`, `pdf`) VALUES
(7, 'The 48 Laws of Power', 'Robert Greene', 'Consequently, in his controversial book, â€œThe 48 Laws of Power,â€ best-selling author Robert Greene argues that if you manage to seduce, charm, and deceive your opponents, you will attain the ultimate power. Greene states that the better you become at ', '48-laws-of-power.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Self Improvement', 1500, NULL),
(10, 'The Daily Stoic', 'Ryan Holiday', 'The Daily Stoic is an original translation of selections from several stoic philosophers including Epictetus, Marcus Aurelius, Seneca, Musonius Rufus, Zeno and others. It aims to provide lessons about personal growth, life management and practicing mindfu', 'the-daily-stoic.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Self Improvement', 5000, NULL),
(11, 'The Art of War', 'Sun Tzu', 'The Art of War is an influential document about tactical warfare written by the ancient Chinese military strategist Sunzi', 'the-art-of-war.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Self Improvement', 4000, NULL),
(13, 'Atomic Habits', 'James Clear', 'An atomic habit is a regular practice or routine that is not only small and easy to do but is also the source of incredible power; a component of the system of compound growth', 'atomic-habits.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Self Improvement', 2000, NULL),
(16, 'Me Before You', 'Jojo Moyes', 'Me Before You tells the story of the quirky Louisa Clark, who unfortunately lost her job and is seeking a new one. This is how she crosses paths with Will Traynor, who devastatingly became paralysed after a motorcycle accident.', 'me-before-you.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Romance', 9000, NULL),
(17, 'The Notebook', 'Nicholas Sparks', 'The Notebook is an achingly tender story about the enduring power of love, a story of miracles that will stay with you forever. Set amid the austere beauty of coastal North Carolina in 1946, The Notebook begins with the story of Noah Calhoun, a rural Sout', 'the-notebook.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Romance', 5000, NULL),
(18, 'The Fault in Our Stars', 'John Green', 'The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group. Hazel is 16 and is reluctant to go to the support group', 'the-fault-in-our-stars.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Romance', 4000, NULL),
(19, 'Outlander', 'Diana Gabaldon', 'Outlander is a series of historical fantasy novels by American author Diana Gabaldon. Gabaldon began the first volume of the series, Outlander, in the late 1980s, and it was published in 1991', 'outlander.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Romance', 2000, NULL),
(22, 'Pride and Prejudice', 'Jane Austen', 'Classics for Your Collection: goo.gl/U80LCr --------- The Pride of Jane Austen! The story is set in England in the late 18th century. Charles Bingley, a wealthy and charismatic single man, ', 'pride-prejudice.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Romance', 2500, NULL),
(23, 'Beauty and the Beast', 'Gabrielle-Suzanne de Villeneuve', 'Beauty and the Beast focuses on the relationship between the Beast (voice of Robby Benson), a prince who is magically transformed into a monster and his servants into household objects as punishment for his arrogance,', 'beauty-and-the-beast.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'fiction', 5000, NULL),
(24, 'Harry Potter', ' J. K. Rowling', 'The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardr', 'harry-potter.jpg', 'Available', 'â˜…â˜…â˜…', 'fiction', 9999, NULL),
(25, 'The Hobbit', ' J. R. R. Tolkien', 'The Hobbit is set within Tolkien\'s fictional universe and follows the quest of home-loving Bilbo Baggins, the titular hobbit, to win a share of the treasure guarded by a dragon named Smaug. Bilbo\'s journey takes him from his light-hearted, rural surroundi', 'the-hobbit.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 9999, NULL),
(26, 'The Lord of the Rings', 'J. R. R. Tolkien', 'The Lord of the Rings is the saga of a group of sometimes reluctant heroes who set forth to save their world from consummate evil. Its many worlds and creatures were drawn from Tolkien\'s extensive knowledge of philology and folklore.', 'lord-of-the-ring.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 5999, NULL),
(28, 'The Great Gatsby', 'F. Scott Fitzgerald', 'The Great Gatsby, Third novel by American author F. Scott Fitzgerald, published in 1925. Set in Jazz Age New York, it tells the tragic story of Jay Gatsby, a self-made millionaire, and his pursuit of Daisy Buchanan, a wealthy young woman whom he loved in ', 'the-great-gatsby.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 6000, NULL),
(29, 'Da Vinci Code', 'Dan Brown', 'The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ and Mar', 'da-vinci-code.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Thriller ', 5999, NULL),
(32, 'Gone Girl', 'Gillian Flynn', 'Gone Girl by Gillian Flynn centers its story about Nick and Amy Dunne\'s strained marriage relationship. Nick used to work as a journalist, but loses his job. With his broke financial status, Nick decides to relocate from New York City to his smaller home ', 'gone-girl.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Thriller ', 8000, NULL),
(33, 'Before I Go to Sleep', 'S. J. Watson', 'The novel is a psychological thriller about a woman suffering from anterograde amnesia. She wakes up every day with no knowledge of who she is and the novel follows her as she tries to reconstruct her memories from a journal she has been keeping.', 'before-i-go-to-sleep.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Thriller ', 5999, NULL),
(34, 'Attack on Titan', 'Hajime Isayama', 'It is set in a world where humanity is forced to live in cities surrounded by three enormous walls that protect them from gigantic man-eating humanoids referred to as Titans; the story follows Eren Yeager, who vows to exterminate the Titans after they bri', 'attack-on-titan.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Anime/Manga', 1000, NULL),
(35, 'Naruto', 'Masashi Kishimoto', 'Naruto (Japanese: NARUTO ??? ) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.', 'naruto.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Anime/Manga', 1000, NULL),
(36, 'One Piece', 'Eiichiro Oda', 'Premise. The series focuses on Monkey D. Luffy, a young man made of rubber, who, inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim', 'one-piece.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Anime/Manga', 1000, NULL),
(37, 'Hunter Ã— Hunter', 'Yoshihiro Togashi', 'The story focuses on a young boy named Gon Freecss who discovers that his father, who left him at a young age, is actually a world-renowned Hunter, a licensed professional who specializes in fantastical pursuits such as locating rare or unidentified anima', 'hunterxhunter.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Anime/Manga', 1000, NULL),
(38, 'Berserk', 'Kentaro Miura', 'Berserk (Japanese: ?????, Hepburn: Beruseruku) is a Japanese manga series written and illustrated by Kentaro Miura. Set in a medieval Europe-inspired dark fantasy world, the story centers on the characters of Guts, a lone swordsman, and Griffith, the lead', 'berserk.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Anime/Manga', 1000, NULL),
(39, 'The Wedding Date', 'Jasmine Guillory', 'Based on the 2002 novel Asking for Trouble by Elizabeth Young, the film is about a single woman who hires a male escort to pose as her boyfriend at her sister\'s wedding in order to dupe her ex-fiancé, who dumped her a few years prior.', 'the-weddding-date.jpg', 'Available', 'â˜…â˜…', 'Romance', 1500, NULL),
(40, 'Mastery', 'Robert Greene', 'Mastery is the fifth book by the American author Robert Greene. The book examines the lives of historical figures such as Charles Darwin and Henry Ford, as well as the lives of contemporary leaders such as Paul Graham and Freddie Roach, and examines what ', 'mastery.png', 'Available', 'â˜…â˜…â˜…â˜…', 'Self Improvement', 4999, NULL),
(41, 'How to win friends and influence people', 'Dale Carnegie', 'The 1981 edition of How to Win Friends and Influence People is broken into the following parts: \"Twelve Things This Book Will Do For You\", \"Fundamental Techniques in Handling People\"', 'how-to-win-friends-and-influence-people.png', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Self Improvement', 9999, NULL),
(42, 'How to Stop Worrying and Start Living', 'Dale Carnegie', 'It is a book packed with lessons that will last a lifetime and make that lifetime happier! -Find yourself and be yourself—remember there is no one else on earth like you! Fascinating to read and easy to apply, How to Stop Worrying and Start Living deals w', 'how-to-stop-worrying-and-start-living.jpg', 'Available', 'â˜…â˜…â˜…', 'Self Improvement', 5000, NULL),
(43, 'The Power of Now: A Spiritual Guide ', 'Eckhart Tolle', 'The Power of Now shows you that every minute you spend worrying about the future or regretting the past is a minute lost, because really all you have to live in is the present, the now, and gives you actionable strategies to start living every minute as i', 'the-power-of-now.jpg', 'Available', 'â˜…â˜…â˜…', 'Self Improvement', 5000, NULL),
(45, 'The Subtle Art of Not Giving a F*ck', 'Mark Manson', 'Not giving a fuck is not about being indifferent. It just means you\'re comfortable with being different. Don\'t say fuck it to everything in life, just to the unimportant things. Subtlety #2: To not give a fuck about adversity, you must first care about so', 'art-of-not-giving-a-fuck.png', 'Available', 'â˜…â˜…â˜…', 'Self Improvement', 5000, NULL),
(46, 'The Power of Positive Thinking', 'Norman Vincent Peale', 'Positive thinking is an emotional and mental attitude that focuses on the good and expects results that will benefit you. It\'s about anticipating happiness, health and success instead of expecting the worst.', 'the-power-of-positive-thinking.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Self Improvement', 2500, NULL),
(47, 'Reminders of Him', 'Colleen Hoover', 'A troubled young mother yearns for a shot at redemption in this heartbreaking yet hopeful story from #1 New York Times bestselling author Colleen Hoover. After serving five years in prison for a tragic mistake, Kenna Rowan returns to the town where it all', 'reminders-of-him.jpg', 'Available', 'â˜…â˜…â˜…', 'Romance', 5600, NULL),
(48, 'It Ends with Us', 'Colleen Hoover', 'It Ends with Us focuses on Lily Bloom, a young college graduate who moves to Boston and opens her own floral business. She develops feelings for surgeon Ryle Kincaid, who is initially reluctant toward having a serious relationship with her.', 'it-ends-with-us.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Romance', 6000, NULL),
(49, 'The Ex Talk', 'Rachel Lynn Solomon', 'The Ex Talk is an unique workplace romance. For one, it takes place against the backdrop of a local public radio station. Second, is the premise. While this could definitely fall into the category of fake relationship, the two main characters, Shay and Do', 'the-ex-talk.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Romance', 4500, NULL),
(50, 'Ugly Love', 'Colleen Hoover', 'When Tate Collins meets airline pilot Miles Archer, she knows it isn\'t love at first sight. They wouldn\'t even go so far as to consider themselves friends. The only thing Tate and Miles have in common is an undeniable mutual attraction. Once their desires', 'ugly-love.jpg', 'Available', 'â˜…â˜…', 'Romance', 3000, NULL),
(52, 'A Game of Thrones', 'George R. R. Martin', 'In the Game of Thrones, you either win or you die. In the mythical continent of Westeros, nine families of higher nobility (Targaryen, Lannisters, Starks, Tyrell, Martell, Greyjoys, Baratheons and Boltons) scramble bitterly to gain power over the seven ki', 'game-of-throne.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 9999, NULL),
(53, 'Little Women', 'Louisa May Alcott', 'The story follows the lives of the four March sisters—Meg, Jo, Beth, and Amy—and details their passage from childhood to womanhood. Loosely based on the lives of the author and her three sisters', 'little women.jpg', 'Available', 'â˜…â˜…â˜…', 'Fiction', 4999, NULL),
(54, 'The Princess Bride', 'William Goldman', 'Beautiful, flaxen-haired Buttercup has fallen for Westley, the farm boy, and when he departs to make his fortune, she vows never to love another. So when she hears that his ship has been captured by the Dread Pirate Roberts - who never leaves survivors - ', 'the-princess.bride.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Fiction', 7999, NULL),
(55, 'Fight Club', 'Chuck Palahniuk', 'Fight Club is a 1996 novel by Chuck Palahniuk. It follows the experiences of an unnamed protagonist struggling with insomnia. Inspired by his doctor\'s exasperated remark that insomnia is not suffering, the protagonist finds relief by impersonating a serio', 'fight-club.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 9999, NULL),
(56, 'Dracula', 'Bram Stoker', 'Harker escapes the castle after discovering that Dracula is a vampire, and the Count moves to England and plagues the seaside town of Whitby. A small group, led by Abraham Van Helsing, hunt Dracula and, in the end, kill him.', 'dracula.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Fiction', 9999, NULL),
(57, 'Verity', 'Colleen Hoover', 'Lowen Ashleigh is a struggling writer on the brink of financial ruin when she accepts the job offer of a lifetime. Jeremy Crawford, husband of bestselling author Verity Crawford, has hired Lowen to complete the remaining books in a successful series his i', 'verity.jpg', 'Available', 'â˜…â˜…â˜…â˜…â˜…', 'Thriller ', 5999, NULL),
(63, 'Misery', 'Stephen King', 'abcd', 'misery.jpg', 'Available', 'â˜…â˜…â˜…â˜…', 'Thriller', 2500, 'how-to-win-friends-and-influence-people.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `email`, `address`, `zip_code`, `book_name`, `quantity`) VALUES
(2, 'M Hamza', 'ihamzajz@gmail.com', 'asasasa', 12345, 'The Art Of War', 1),
(3, 'Ali Khan', 'ali@gmail.com', 'North Nazimabad', 56789, 'How to win friends and influence people', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user1', 'user1'),
(5, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
