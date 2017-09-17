-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: intriguecon
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (2,'Ten Things You Didn’t Know About Convention GMing! Number Nine Will Floor You!','<p>Roleplaying conventions are a great place to try out new games, both as a player and as a GM. In most cases, as a player all you really need to do is show up and be prepared to share the spotlight with the other players. As a GM though, there&rsquo;s a little more to it.</p>\r\n\r\n<p>Running a game at a convention is a great way to test your GMing skills and to focus your storytelling. However, even if you&rsquo;re a seasoned veteran behind the screen, running a game for people at a convention is different to running for a group of friends in a regular game. It&rsquo;s not necessarily any harder to do but because of the constraints of the convention format there are some things worth keeping in mind.</p>\r\n\r\n<blockquote>\r\n<h3><em>...con games have specific, time-related, things you&rsquo;ll need to accommodate if they&rsquo;re going to be successful.</em></h3>\r\n</blockquote>\r\n\r\n<p>The biggest constraint is that generally convention games are limited to one four hour slot. This might seem like a long time, it may even be longer than your regular game sessions, but unlike those sessions, con games have specific, time-related, things you&rsquo;ll need to accommodate if they&rsquo;re going to be successful.</p>\r\n\r\n<p>Firstly, a convention game should offer a complete story arc within the session&rsquo;s time-frame. Unless you&rsquo;re running a game like Microscope it is very poor form to leave a story incomplete. As a result, you need to keep an eye on the clock and be familiar enough with your story that you know which pieces you can cut or narrate through. It may be hard to leave out one of your favourite scenes but nothing is more important than giving your finale time to play out.&nbsp;</p>\r\n\r\n<p>With this in mind though there are several things you can do to maximise the amount of playing time in your session.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Create characters in advance or at least have a very streamlined character generation process.</p>\r\n	</li>\r\n	<li>\r\n	<p>Prepare, prepare, prepare. Have your rules and tables ready to hand out so no time is wasted leafing through rules.</p>\r\n	</li>\r\n	<li>\r\n	<p>Leave plenty of blank space in your story notes so they&rsquo;re easy to follow and your game keeps moving</p>\r\n	</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<h3><em>Be open to sticking around after the final scene and chatting.</em></h3>\r\n</blockquote>\r\n\r\n<p>The last time-related thing to keep in mind is that people will want to spend some time at the end of the session talking about what happened in the game. They&rsquo;ll also maybe want to talk about what might have happened and possibly about the system as well. Be open to sticking around after the final scene and chatting. This is a really important part of the con experience.</p>\r\n\r\n<p>For those keeping track, this means that between initial setup and debrief you should bank on having about three hours of playing time. In a perfect world you&rsquo;d practice the game ahead of time, perhaps with your regular group or online at sites like constantcon or roll20.net. In all likelihood though, you&rsquo;ll be playing through for the first time. This is okay, but to maximise your chances of success you should be intimately familiar with the game and system and have incorporated some of the ideas above.</p>\r\n\r\n<blockquote>\r\n<h3><em>...at least one of the players at your table will have signed up because they want to try the game. Resist the urge to just do everything for them...</em></h3>\r\n</blockquote>\r\n\r\n<p>Aside from time constraints there are other important considerations when running con games. One is that it&rsquo;s not only possible, but likely, that at least one of the players at your table will have signed up because they want to try the game. Resist the urge to just do everything for them, instead, consider creating a sheet with a short summary of some core rules. This is a great way to not only save on explaining time but it&rsquo;s to keep new players engaged.</p>\r\n\r\n<p>Along with those people who may be new to your game system you may also encounter people new to roleplaying altogether. These people are extremely valuable. Treat them well: you may be responsible for deciding if they&rsquo;ll continue in the hobby or not. Additionally expect them to have no idea about the type of equipment roleplaying requires, so have extra dice, pencils, and miniatures (if you use them) on hand.</p>\r\n\r\n<p>Another vital skill for a con GM to have, and one that has a significant impact on your players&rsquo; enjoyment, is the ability to track and share &ldquo;spotlight&rdquo; time amongst the players. In a regular game this is not such a big deal as this spotlight can shift from week to week. In contrast, you&rsquo;ll find that as people have varying levels of forcefulness in a social setting, you&rsquo;ll need to be far more vigilant about the access your players have to the spotlight. Keeping a little tally sheet of instances where each player is in focus can help you make sure everyone gets a time to shine. A simple way to achieve this is to look at the beats in your story and then create characters such that they all get a chance to come to the fore at some point.</p>\r\n\r\n<p>One last thing, and this is huge. As the GM you&rsquo;re responsible for maintaining an appropriate tone at your table. The <a href=\"http://hazardgaming.com/intrigue/index.php?%20p=codeofc\">Code of Conduct</a> for your con should spell out these expectations but in brief, you should have zero tolerance for any language or behaviour that makes people feel uncomfortable.</p>\r\n\r\n<blockquote>\r\n<h3><em>&ldquo;X, Y, and Z might come up in this story how do people feel about that?&rdquo;</em></h3>\r\n</blockquote>\r\n\r\n\r\n<p>None of this means that &nbsp;you have to ban salty language and mature themes but you should note that these are likely when you submit your game description. It is also wise to talk about mature elements ahead of time. A good way to broach this is to say &ldquo;X, Y, and Z might come up in this story how do people feel about that?&rdquo; If these things are problematic for any players firstly, try to find some compromise but it may be that, ultimately, the game is not for them, and that&rsquo;s okay.</p>\r\n\r\n<p>Now, by no means is this intended to be an exhaustive treatment of how to run a con game, like most things there&rsquo;s no substitute for experience, but it should give you somewhere to start. Once you&rsquo;ve run a few you&rsquo;ll probably get to like the challenge it presents or at the very least you&rsquo;ll have been reminded of some of the things you&rsquo;ve been letting slide in your regular game.</p>',3,'640px-Dungeons_and_Dragons_game_s_1505235784.png','2017-09-11 20:01:14','2017-09-12 17:15:12'),(3,'An Intriguing Fiasco','<p><big>I&rsquo;ve always been a big fan of Jason Morningstar&rsquo;s Fiasco. </big></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;It&rsquo;s simple to learn, simple to run, and a great introduction to the concept of role-playing. &nbsp;I&rsquo;ve run Fiasco every year at IntrigueCon and have always had a lot of fun doing so. &nbsp;I will run it again this year but we&rsquo;ve decided to add a little something to the mix. &nbsp;We (yes, that includes you) are going to built a &ldquo;playset&rdquo;.</p>\r\n\r\n<p>What is this playset that I (and by I, I mean you) have been conscripted to construct, you (and by you, I mean you) may ask? &nbsp;Fiasco uses lists of Relationships, Needs, Objects, and Locations as touchstones around which to craft a story. &nbsp;These lists are centred around a theme or genre and are called playsets. &nbsp;Most playsets are inspired by movies and TV shows and can be played for comedy, action, or drama.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Glory is fleeting but obscurity lasts forever</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This&nbsp;quote by Napoleon (Bonaparte, not Dynamite) is this year&#39;s theme.&nbsp; Rather than set the playset in a historically accurate post-Revolutionary France, we (and by we in this particular case I don&rsquo;t mean you nor me if I&rsquo;m honest) have decided to build it around the concept of time travel. &nbsp;Think &lsquo;Bill and Ted&rsquo;s Excellent Adventure, &lsquo;Time Cop&rsquo;, Back to the Future&rsquo;, and &lsquo;Quantum Leap&rsquo;. Even &lsquo;Hot Tub Time Machine&rsquo; or &lsquo;DC&rsquo;s Legends of Tomorrow&rsquo;.</p>\r\n\r\n<p>The&nbsp;playset&#39;s&nbsp;general premise will be of people working for an organisation dedicated to maintaining the integrity of the timeline. &nbsp;Hilarity, action, or drama ensues.</p>\r\n\r\n<p>Not only will we (and I do mean we) create a playset but we (see previous we) will also use this playset on Sunday in a game of Fiasco. &nbsp;Also, in addition to this, a PDF of the playset will also be available on the website, free gratis.</p>',2,'IntriguingFiasco_1505347633.jpg','2017-09-11 20:33:39','2017-09-13 18:10:39'),(4,'My First Roleplaying Convention','<p>The scholars say that once in every roleplayer&rsquo;s life they must make a pilgrimage to the mythical GenCon in Indianapolis Indiana. There they must gaze upon the Gygaxian sepulchra and make offerings to the merchants obtaining relics both old and new.</p>\r\n\r\n<p>Thenceforth, after worshiping at the anointed shrine and drinking in the heady musk of the cathedral the supplicants become drawn together by shared purpose. And there in caves and great halls the strangers will become one with the infinite as they weave tales never told together..</p>\r\n\r\n<p>As you can see, attending a con is a very serious business&hellip; actually it&rsquo;s not, or it shouldn&rsquo;t be. Attending a con should be a chance to unwind and to enjoy the company of ready-made friends with interests just like yours.</p>\r\n\r\n<p>So what do you actually do? Well, whether it&rsquo;s your first roleplaying game ever or your hundredth con it&rsquo;s worth keeping the following things in mind.</p>\r\n\r\n<p>Rules... da-da, what are they good for? GMs t&rsquo;know-that&rsquo;s it. Say it again!... You do not need to know any of the rules of the games you&rsquo;re interested in ahead of time. A good GM will explain things as you go and help you to play. Part of the fun, for even the most seasoned player, is learning new games. Embrace that.</p>\r\n\r\n<blockquote>\r\n<h3><em>Part of the fun, for even the most seasoned player, is learning new games.</em></h3>\r\n</blockquote>\r\n\r\n<p>Take turns talking- just like a real conversation it&rsquo;s polite to give other people a chance to speak. Be aware of everyone around the table and let them have their turn.</p>\r\n\r\n<p>★★★GOLD STAR★★★ Make an effort to include everyone. If there&rsquo;s someone who&rsquo;s not said much maybe direct some questions towards them &ldquo;Hey Character&rsquo;s Name, what do you think?&rdquo;. It&rsquo;s a super simple thing to do and very much appreciated.</p>\r\n\r\n<p>Take turns acting- chances are the characters at the table will have different skills. Take the trouble to discover what they&rsquo;re good at and encourage people to have their time in the spotlight. Nobody likes someone who tries to do everything.</p>\r\n\r\n<p>★★★GOLD STAR★★★ When someone is trying to do something be their cheering squad. Tentative players particularly will appreciate you backing their play. Even if you personally think the idea is bad, cede power to them as the expert in this area or at least couch suggestions with a &ldquo;but what do you think about X? Will that be a problem?&rdquo; at the end so they still have the power.</p>\r\n\r\n<blockquote>\r\n<h3><em>...games that you&rsquo;ve been playing for decades can become fresh and new.</em></h3>\r\n</blockquote>\r\n\r\n<p>Accept interpretations- Everyone plays games differently. That&rsquo;s just part of why roleplying games are fun, and how games that you&rsquo;ve been playing for decades can become fresh and new. Trust that your GM knows what they&rsquo;re about and that they want the game to be fun. You can go back to playing it your own way with your home group or maybe you might want to incorporating some of these little differences.</p>\r\n\r\n<p>★★★GOLD STAR★★★&nbsp;Spend a moment thinking the different perspective through and see what if any flow on effects it might have, not so you can have an argument but so that you might better understand how it might alter the game experience.</p>\r\n\r\n<blockquote>\r\n<h3><em>...do the most interesting things you can and enjoy both your successes and your failures...</em></h3>\r\n</blockquote>\r\n\r\n<p>Be Interesting- Convention games are made to be self contained. Don&rsquo;t limit your actions because of their possible long-term consequences because there really is no tomorrow for your character. This doesn&rsquo;t mean you should do stupid things, but you should wholeheartedly embrace your character&rsquo;s personality and act accordingly.</p>\r\n\r\n<p>In short, do the most interesting things you can and enjoy both your successes and your failures, after all, &nbsp;Glory is fleeting but Obscurity lasts forever</p>\r\n\r\n<p>Reject BIWMCWD- Anything anyone does after they say &ldquo;But it&rsquo;s what my character would do&rdquo; is, at best, going to be the wrong thing to do for the game, or, at worst, the wrong thing to do for the people at the table. In the case of the former, be forthright and suggest something different, and in the case of the latter, call them out on their nonsense. Now, This doesn&rsquo;t mean people shouldn&rsquo;t be true to their character, but before acting please think of the long term consequences of what you&rsquo;re considering. After you&rsquo;ve done that, then, just maybe, remind yourself that there&rsquo;s no award for truest character interpretation.</p>\r\n\r\n<p>Also remember the old chestnut: the only way to win is for EVERYONE to have fun.</p>',3,'my_first_roleplaying_1505190413.png','2017-09-11 21:43:07','2017-09-12 19:04:42');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `days`
--

LOCK TABLES `days` WRITE;
/*!40000 ALTER TABLE `days` DISABLE KEYS */;
INSERT INTO `days` VALUES (1,'2017-10-13','18:00:00','23:00:00',1,'2017-09-11 19:30:28','2017-09-11 19:30:28'),(2,'2017-10-14','22:00:00','00:30:00',1,'2017-09-11 19:30:52','2017-09-11 19:30:52'),(3,'2017-10-15','22:00:00','06:00:00',1,'2017-09-11 19:31:11','2017-09-11 19:31:11');
/*!40000 ALTER TABLE `days` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'IntrigueCon 2017','<blockquote>\r\n<p><em>Glory is fleeting but obscurity lasts forever</em></p>\r\n</blockquote>\r\n\r\n<p>The above quote by Napoleon Bonaparte is also the theme of this year&rsquo;s convention. &nbsp;Yes. we do have a theme. &nbsp;We had one last year, too.</p>\r\n\r\n<p><em>&lsquo;This way to certain doom&rsquo;. &nbsp;</em></p>\r\n\r\n<p>That was the best kept secret at the Con.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Table Top Bingo</strong></p>\r\n\r\n<p>If you were in attendance last year, you may remember playing Bingo with us, &nbsp;when you signed in at the door we gave you a bingo card. &nbsp;When certain things came up during game play that reflected the theme (like a total party kill or winning out over impossible odds), you marked the respective square on your card. &nbsp;When you won, we gave a button with a little cartoony Grim Reaper. &nbsp;Yay whimsy!!! &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>An Intriguing Fiasco</strong></p>\r\n\r\n<p>We&rsquo;re continuing the bingo this year and introducing something new as well. &nbsp;We (the commoner &lsquo;we&rsquo; here) &nbsp;are going to write a Fiasco playset. &nbsp;For those of you who don&rsquo;t know Fiasco is a story game by Jason Morningstar. &nbsp;I love the game and will be running it again (and again...and again...and again) this year. &nbsp;&nbsp;A playset is a list of story parameters that frame the narrative. &nbsp;We (the royal we) will have posters up on the walls for IConners to write down suggestions for the playset. &nbsp;On Sunday, if all goes well (and if it doesn&rsquo;t, you really only have yourselves to blame) we shall play a game of<a href=\"http://intriguecon.com/articles/3\"> &lsquo;An Intriguing Fiasco&rsquo;</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Swapmeet</strong></p>\r\n\r\n<p>more info soon...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>','event_image_1505256812.jpg','2017-09-11 18:31:18','2017-09-16 08:30:14',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_proposals`
--

DROP TABLE IF EXISTS `game_proposals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_proposals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_proposals`
--

LOCK TABLES `game_proposals` WRITE;
/*!40000 ALTER TABLE `game_proposals` DISABLE KEYS */;
/*!40000 ALTER TABLE `game_proposals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_timeslot`
--

DROP TABLE IF EXISTS `game_timeslot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_timeslot` (
  `game_id` int(11) NOT NULL,
  `timeslot_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`,`timeslot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_timeslot`
--

LOCK TABLES `game_timeslot` WRITE;
/*!40000 ALTER TABLE `game_timeslot` DISABLE KEYS */;
INSERT INTO `game_timeslot` VALUES (2,1),(3,1),(3,2),(3,3),(3,4),(3,5),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,3),(16,4),(16,5),(17,3),(18,3),(19,3),(20,4),(22,4),(23,3),(24,5),(26,5),(27,4),(28,1),(31,4),(32,5);
/*!40000 ALTER TABLE `game_timeslot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `advisory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) NOT NULL,
  `game_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamemaster` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'An Anonymous Stranger',
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Advanced Faking It',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (2,'The Honeycomb Dispatch','Squeak!','Heroes are rarely made and even more seldom born. Not till after they die do mice sing of their tale.','<p>Early Spring in the year 1153 and the mouse territories have just survived a military coup led by the traitorous Guard Midnight. The loyalties of several local militias are in doubt while others have been disbanded entirely. To make matters worse, during the coup raiding parties destroyed food stores in the Western Territories leaving many settlements on the brink of starvation.</p>\r\n\r\n<p>Your patrol has been summoned and tasked with conveying honey, a queen bee, and some drones overland to start an apiary in beleaguered Elmwood. The honey will help feed the starving townsfolk and produce delicious mead while the bees can be used as an interim defense if Elmwood is attacked. Under good conditions it&rsquo;s a four-day journey, but weather-watchers have warned that heavy snows are due. Delay, however, is not an option.</p>\r\n\r\n<p>Heroes are rarely made and even more seldom born. Not till after they die do mice sing of their tale.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E2\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:35:09','2017-09-13 12:51:40','None',1,4,2,3,'honeycomb_1505188212.jpg','Daniel Hodges','Mouse Guard'),(3,'Fiasco','Powerful ambition and poor impulse control','Maybe some dude from youth group talked you into boosting a case of motor oil, but now your cousin is dead in a swamp and you killed him.','<p>Maybe you and your girlfriend figured you could scare your wife into a divorce, but things went pear-shaped and now a gang of cranked-up Mexicans with latex gloves and a pit bull are looking for you.&nbsp;<em><strong>It seemed like such a good idea at the time.</strong></em></p>\r\n\r\n<p>Fiasco is inspired by cinematic tales of small time capers gone disastrously wrong &ndash; inspired by films like&nbsp;<em>Blood Simple, Fargo, The Way of the Gun, Burn After Reading</em>, and&nbsp;<em>A Simple Plan</em>. You&rsquo;ll play ordinary people with powerful ambition and poor impulse control. There will be big dreams and flawed execution. It won&rsquo;t go well for them, to put it mildly, and in the end it will probably all go south in a glorious heap of jealousy, murder, and recrimination. Lives and reputations will be lost, painful wisdom will be gained, and if you are really lucky, your guy just might end up back where he started.</p>\r\n\r\n<p><strong>FIASCO</strong>&nbsp;is an award-winning, GM-less game for 3-5 players, designed to be played in a few hours with six-sided dice and no preparation. During a game you will engineer and play out stupid, disastrous situations, usually at the intersection of greed, fear, and lust. It&rsquo;s like making your own Coen brothers movie, in about the same amount of time it&rsquo;d take to watch one.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E3\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:39:18','2017-09-13 11:46:48','None',2,3,2,3,'fiasco_cover_400_600_1505240126.jpg','Clint Johnson','Fiasco'),(4,'Grimmsgate','Be a part of the old school renaissance!','Deep in the wooded wilderness, the village of Grimmsgate is an outpost town on a seldom-traveled trail, right at the edge of nowhere.','<p>&nbsp;The village&rsquo;s half-ruined temple of Law, dilapidated inn, drunken blacksmith, exiled trader and a few fur-trappers are enough to keep the bloody-minded denizens of the dark forest at bay, but nobody really expects the village to still be there in another ten years. The woods have become too dangerous for the trappers who once caught animals for fur, and merchants no longer travel the poorly-maintained road.&nbsp;</p>\r\n\r\n<p>What great evil and what fabulous treasures are to be found in these lands? A brave band of adventurers might make their fortunes here. Or perhaps they might never return&hellip;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E4\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:43:31','2017-09-13 12:33:46','None',2,8,2,3,'grimmsgate_1505250060.jpg','Randy Crockett','Swords and Wizardry'),(5,'Prince Charming, Reanimator','Can you survive this fairy-tale funnel gone mad?','Prince Hubert Charming\'s cold and emotionless eyes are well known throughout the kingdom.','<p>Despite this, his watery blue gaze favours flawless beauty: a string of beautiful and ever younger wives serving as a testament to this.</p>\r\n\r\n<p>Some say his first betrothed Princess Ella was thrown down a well by her jealous stepsisters prior to the wedding. Yet even death did not deter Prince Charming from possessing her. By some foul design Prince Charming succeeded in reviving his bride and she charmed everyone at the wedding.<br />\r\n<br />\r\nThis mockery of life did not last and all too soon Princess Ella took ill and died.<br />\r\n<br />\r\nMany great beauties followed but none could satisfy the Prince. His constant quest for a companion with unlined porcelain skin becoming an all-consuming madness. That is until he stumbled upon a tale of beauty untouched by the ravages of time.<br />\r\n<br />\r\nThe tale claimed that deep within the Grimmswood lay the ruins of a long-lost realm and within it the daughter of its final king. The girl, so the tales says, was cursed by a malevolent faerie who presented her with a poison thorned rose upon her eighteenth birthday. All it took was a single light touch upon one of the thorns for the poison to claim her life.<br />\r\n<br />\r\nThe poisoned rose it is said claimed not only the Princess&#39; life but also the King&#39;s will to rule. His kingdom falling to ruin about him before he too passed away.<br />\r\n<br />\r\nFew now dare to venture far into the Grimmswood. Not even the rumours of the lost kingdom&#39;s riches being enough of a temptation. Even the bravest souls fear the ire of the fae and the dark and terrible magic that still holds sway amongst the gnarled and twisted trees of the forest.<br />\r\n<br />\r\nOr they wouldn&#39;t, until now. For, in his madness, Prince Hubert Charming of Westlake has proclaimed that Princess Beauty was not killed by the poison of the fae but cursed by it to sleep away the aeons. She resides there still he believes, untouched by time, ready for him to take her as his bride.<br />\r\n<br />\r\nA company of his veteran knights immediately rode out and&hellip; rounded up a stable of &ldquo;volunteers&rdquo; to do the job. That&#39;s why, on this early autumn morning, you find yourself trudging towards the Grimswood with what little equipment you had to hand when you &ldquo;volunteered&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E5\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:46:21','2017-09-13 12:40:10','None',2,8,2,3,'charming_1505253824.jpg','Andrew Sim','Dungeon Crawl Classics'),(6,'Mandatory Team Building Exercise','There are things out there, in the weirder reaches of space-time where reality is an optional extra','Good news: it\'s a weekend away from the drudgery of the office.','<p>Bad news: it&#39;s a MANDATORY team building exercise. You&#39;ve been booked into a quiet little bed and breakfast/administrative training centre, and you will learn the Five Unique Cores of Knowledge&trade; and the Seven Platitudes Leading to Able Teams&trade;. But at least things will be quiet, right? Right? Well, you do work for The Laundry; maybe some sort of incursion will save you from trust exercises.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E6\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:48:47','2017-09-13 12:37:14','None',2,8,2,3,'team_building_1505253622.jpg','Brent Jans','The Laundry'),(7,'We Are All Made of Stars','Pew!','The galaxy’s a wild and rough place.','<p>The average citizen of any of the major galactic collectives can bury their heads in the day to day grind and get by, but that&rsquo;s not enough for you! No! You&rsquo;re gonna make it big kid! The biggest! You&rsquo;re gonna be rich! Powerful! The money, the power, the schklees! They&rsquo;re all just waiting for some-entity with the guts to go out and grab them. So grab your lightsaber, strap on your tricorder and spool up the FTL drive, it&rsquo;s time to misbehave.<br />\r\n<br />\r\nThis will be a light hearted sci-fi adventure largely in the spirit of fun and adventure. You will play one member of a small, down-on-their-luck crew trying to get back in the black after a disastrous job and ride the momentum back up the the fame and fortune you&rsquo;ve always dreamed of.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E7\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:49:55','2017-09-13 12:57:39','None',2,8,2,3,'fate_accelerated_1505258919.jpg','Paul Sowden','FATE Accelerated'),(8,'Underworld','Leather pants optional, but recommended.','Vampires, werewolves?..oh yeah.  Sparkles?..hell no.','<p>Your vampire coven has gone rogue and taken in a werewolf who claims to know of a plot against your leaders. You trust him, barely, but he has saved your teams&#39; lives in the past.</p>\r\n\r\n<p>Several Elders and a team who were supposed to be escorting a diplomat from the old world have disappeared. And now the power to their coven has been cut, with you inside...</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E8\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:55:05','2017-09-13 12:53:45','None',2,8,2,3,'underworld_unisystem_1505258894.jpg','Alana Fitzgerald','Unisystem'),(9,'Cthulhu\'s Island','“Ph\'nglui mglw\'nafh Cthulhu R\'lyeh wgah\'nagl fhtagn.\"','The world is indeed comic, but the joke is on mankind.','<p>Just sit right back and you&#39;ll hear a tale,<br />\r\nA tale of a frightful trip<br />\r\nThat started from a tropic port<br />\r\nAboard a tiny ship.<br />\r\n<br />\r\nThe mate was a mighty sailing man,<br />\r\nThe skipper brave and sure.<br />\r\nFive passengers set sail that day<br />\r\nFor a three hour tour, a three hour tour.<br />\r\n<br />\r\nThe weather started getting rough,<br />\r\nThe tiny ship was tossed,<br />\r\nIf not for the courage of the fearless crew<br />\r\nThe Minnow would be lost, the Minnow would be lost.<br />\r\n<br />\r\nThe ship set ground on the shore of this uncharted desert isle<br />\r\nWith Gilligan<br />\r\nThe Skipper too,<br />\r\nA millionaire and his wife,<br />\r\nA movie star<br />\r\nThe professor and Mary Ann,<br />\r\nHere on Cthulhu&#39;s Isle.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E9\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 18:58:46','2017-09-13 16:03:51','None',2,8,2,3,'island_2_1505327281.jpg','Graeme Comyn','Call of Cthulhu'),(10,'Witch: The Road to Lindisfarne','Explore the lingering pasts of a cast of characters, their relationships to each other, and ultimately, decide fates.','It is the year of our Lord 1350 and an unholy plague sweeps across our beloved Britain.','<p>Measures have been taken to contain and eliminate it, but still families must surrender their mothers, fathers, sons and daughters to the mass graves.</p>\r\n\r\n<p>They say that one in three have been marked for death. But marked by whom? Are the sick being punished for their sins by God?</p>\r\n\r\n<p>No, this foul curse is the work of the Devil and his wicked agent, the Witch.</p>\r\n\r\n<p>The people pray for an answer, and within the great city of London, the source of the vile plague, God may have given it. A woman has been taken prisoner by the Church after confessing the use of Witchcraft to bring the blight upon us.</p>\r\n\r\n<p>Three days have passed since then and during this time the heads of the church have been in consultation without rest. Today they emerged and gave their counsel.</p>\r\n\r\n<p>The woman must be taken in a caged cart to the Holy Island of Lindisfarne. Once there, an ancient ritual will be performed to cleanse this land of her and her black plague.</p>\r\n\r\n<p>It will take two weeks to reach the site, but as the sun breaks the horizon on the Sabbath then the Witch will face her absolution.</p>\r\n\r\n<p>This is the story of that journey.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E10\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:02:03','2017-09-13 12:59:33','None',2,6,2,3,'witch_1505240189.jpg','Daniel Hodges','Story Game'),(11,'Frozen in Time','Neolithic Sword and Sandals with some Funky Dice thrown in.','Eons-old secrets slumber beneath the forbidden Ghost Ice','<p>Since the time of the Elders, the local tribes have shunned the crawling glacier, knowing it as taboo land that slays all who tread its frigid expanse. Now, the Ghost Ice has shattered, revealing hints at deeper mysteries entombed within its icy grasp. Strange machines and wonderful horrors stir beneath the ice&hellip;<br />\r\n<br />\r\nTake your surviving PCs from &ldquo;Prince Charming, Reanimator&rdquo; and explore this gonzo sword and sandal-ish adventure as newly minted level 1 Heroes! New Players are welcome</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E11\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:06:31','2017-09-13 11:56:54','None',2,8,2,3,'dcc_cover_1505240675.jpg','Andrew Sim','Dungeon Crawl Classics'),(12,'Hall of Bones','Be a part of the old school renaissance!','Get rich and die trying.','<p>Your party has met up in a tavern, had a few drinks, and heard rumors of a dungeon complex a few miles from town. The dungeon legends tell that a dark necromancer has been conducting foul and terrible rites deep within the dark caverns below an old ruin. It is said that vast riches are buried here, and that if one can simply slay the evil under the ruin, he would be as rich as a king!</p>\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E12\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:12:25','2017-09-13 12:36:32','None',2,8,2,3,'Hall of Bones (SW)_1505253596.jpg','Randy Crockett','Swords and Wizardry'),(13,'Chickens... Why did it have to be chickens?','Kobolds can be heroes... sort of','ALL HAIL KING TORG!','<p>Advisors to King Torg (ALL HAIL KING TORG!) have discovered strange ruins dating back generations of kobolds (so at least a year), and King Torg (ALL HAIL KING TORG!) has decided it must be explored.</p>\r\n\r\n<p>You&#39;ve been promised a feast of babies if you successfully explore the ruins, catalog the findings, and...okay, you stopped listening after babies. So gird your diminutive loins, kobolds, you&#39;re about to live the life of an adventurer! How hard can it be? Humans do it all the time..</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E13\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:14:05','2017-09-13 11:52:15','No actual babies will be consumed.',2,8,2,3,'kobolds_1505180907.jpg','Brent Jans','Kobolds Ate My Baby'),(14,'Night\'s Black Agents','Jason Bourne, James Bond, and Jack Ryan team up to take on vampires!','Putting you in the role of a deadly secret agent, taking down the forces of darkness.','<p>You were a shadowy soldier in those fights, trained to move through the secret world: deniable and deadly.</p>\r\n\r\n<p>Then you got out, or you got shut out, or you got burned out. You didn&rsquo;t come in from the cold. Instead, you found your own entrances into Europe&rsquo;s clandestine networks of power and crime. You did a few ops, and you asked even fewer questions. Who gave you that job in Prague? Who paid for your silence in that Swiss account? You told yourself it didn&rsquo;t matter.</p>\r\n\r\n<p>It turned out to matter a lot. Because it turned out you were working for vampires.</p>\r\n\r\n<p>Vampires exist. What can they do? Who do they own? Where is safe? You don&rsquo;t know those answers yet. So you&rsquo;d better start asking questions. You have to trace the bloodsuckers&rsquo; operations, penetrate their networks, follow their trail, and target their weak points. Because if you don&rsquo;t hunt them, they will hunt you. And they will kill you.</p>\r\n\r\n<p>Or worse.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E14\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:17:03','2017-09-13 12:38:29','None',2,8,2,3,'NightsBlackAgents_1505253776.jpg','Shane Fitzgerald','Gumshoe'),(15,'Furry Road','A stitch-punk tabletop role-playing game','A jury-rigged toy in a broken, stitched-together world.','<p>You are a broken toy in a broken world. In the world of Softies and Mekka, you&rsquo;ll try to rescue yourself, patch yourself up, invent new devices, and maybe, just maybe, build a better world out of the broken one you&#39;ve inherited.<br />\r\n<br />\r\nImagine the movie &ldquo;9&rdquo; or &ldquo;Toy Story&rdquo; meets &ldquo;Wall-E&rdquo;. If you bring your own toy to be your character, you get to Hold 1. Bring your knitting! Let&rsquo;s get crafty.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E15\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:25:06','2017-09-13 12:35:59','None',2,8,2,3,'thread_bare_1505240277.jpg','Graeme Comyn','Threadbare (PBTA)'),(16,'Sſtabmontown','Strap in for an ICon rite of passage.','Roll.  Die.  Repeat.','<p>The ruined church still moulders North of Sſtabhmontown. Beneath, the dungeon is marked by the passage of many adventurers&mdash;come, leave yours in this complex, part-mapped by many previous expeditions.&nbsp;<br />\r\n<br />\r\nThe magic-user Ser Cleve has offered one thousand coins to whoever might open the great doors in the sea cliffs, and who knows what treasures may yet be stolen from the Ogress and her goblins, the jealous dwarves, or the dog-headed heretics seen about the hills.&nbsp;<br />\r\n<br />\r\nRoll up a new character, or bring one from another old-school game this weekend!</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E18\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:31:47','2017-09-13 21:39:38','None',2,8,2,3,'sstab_1505254212.jpg','Adam Waldron-Blain','Old School D & D'),(17,'Rapan Athuk - Drop Location I','“Don’t go down the Well!”','The Granddaddy of All Dungeons Returns!','<p><em>Rappan Athuk</em>, the legendary mega-dungeon by Frog God Games and Necromancer Games is nothing more and nothing less than a good, old&ndash;fashioned, First Edition dungeon crawl updated for the 5th Edition rules. Very difficult, Rappan Athuk will truly strike fear into the hearts of the most stalwart adventurers. It offers legions of inventive traps, tricks, strange features, and monsters -- many of them never before seen. It affords numerous opportunities for roleplaying, but anyone willing to brave these subterranean halls better arrive ready to rumble, or their lives will be short indeed.<br />\r\n<br />\r\nMany, many players have lost favored PCs delving into the depths of this dungeon, all the while giggling like children and having the time of their lives. Hundreds, if not thousands of players have combed the halls of Rappan Athuk over the years, seeking treasure and fame, making it one of the best-known dungeon locations the game has ever produced. Even players who have never entered its halls know the term: &ldquo;Don&rsquo;t go down the Well!&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E19\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:34:34','2017-09-13 21:44:02','None',2,8,2,3,'rapan_1505253872.jpg','Randy Crockett','Dungeons & Dragons 5e'),(18,'Reign of Terror 1','“If I am mad, it is mercy! May the gods pity the man who in his callousness can remain sane to the hideous end!”','Who are we to combat poisons older than history and mankind?','<p>Paris, 1789: starving and sick, the people rankle under the uncaring hand of an indifferent monarchy. Captain Louis Malon assigns a squad of trusted soldiers to investigate a foreigner with a disturbing connection to the queen. Discretion required. Madness probable. Survival uncertain.<br />\r\n<br />\r\nNOTE: This adventure is a &ldquo;secret&rdquo; chapter released to backers of the Horror on the Orient Express Kickstarter. We&rsquo;ll make no effort to force the scenario&rsquo;s resolution to line up with the official HotOE background, but it will include spoilers for that campaign. No previous experience with Call of Cthulhu necessary. Characters provided, basic rules taught.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E20\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:41:38','2017-09-13 12:41:39','This is a horror scenario full of adult content. Players must be age 21+',2,8,2,3,'Cthulhu-Reign-of-Terror-HC-EN_1505253894.jpg','Dave Gross','Call of Cthulhu 7e'),(19,'Milk Flights','Silent through the night, the Witches join the fight','The wind will whisper when the Night Witches come.','<p>You are playing Soviet women in the all-female 588th Night Bomber Regiment during WWII. You fly obsolete biplanes and drop bombs on the Germans. When you run out of bombs, you drop railroad ties. Your mission is to drive the Fascist beasts off the Taman Peninsula and it will require a new kind of flying &ndash; often above the Sea of Azov and Black Sea, over water at night.<br />\r\n<br />\r\nThe war is brutal and horrific, things are desperate, and the missions are incredibly dangerous. You and your sisters will forge bonds in blood and terror. Can you do your duty and strike blow after blow against the Fascists? Can you overcome discrimination and outright sabotage and rise above your sexist comrades? Are there limits to patriotism - or endurance? Play and find out!</p>\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E22\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:44:25','2017-09-13 12:37:39','None',2,8,2,3,'night-witches_1505253641.jpg','Graeme Comyn','Night Witches (PBTA)'),(20,'The Haunting','Cthulhu fhtagn','Who are we to combat poisons older than history and mankind?','<p>The &quot;Daddy&quot; of Cthulhu scenarios. If you&#39;ve never given the game a go, this is the one to try.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E23\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:49:04','2017-09-13 12:51:10','None',2,8,2,3,'haunt_1505258856.jpg','Daniel Hodges','Call of Cthulhu'),(22,'Forget Me Not','In his house at R\'lyeh, dead Cthulu waits dreaming','Searchers after horror haunt strange, far places.','<p>Horrible things&nbsp;<s>might</s>&nbsp;will happen.</p>\r\n\r\n<p>The cast and crew of the late night low budget show &quot;Ghost Seekers&quot; may have poked into one haunted house too many.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E34\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:53:59','2017-09-13 11:51:19','None',2,8,2,3,'coc7-keepers-rulebook_1505243621.jpg','Dave Bagdan','Call of Cthulhu 7e'),(23,'The Cult of the Burning Sphere','The Iron Wind blows where it will','Is there hope for the scattered and struggling people of this world?','<p>There have been eight previous worlds. Each world stretched across vast millennia. Each saw civilizations flourish before dying, scattering, or transcending. Those that ruled these worlds spoke to the stars, reengineered their bodies, and mastered form and essence.<br />\r\n<br />\r\nBut now they are gone. The people of the new world&mdash;the Ninth World&mdash;live among the ruined majesty of an unimaginable past. Are you brave enough to seek adventure, fortune, and discovery in the remnants of the prior worlds? Treasures of unmatched wonder await&mdash;but in those ruins also sleep dangers and terrors of bygone eras.</p>\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E35\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 19:58:42','2017-09-13 12:50:36','None',2,8,2,3,'PSIMCG001_1505258254.jpg','Quinn Moerike','Numenera'),(24,'Reign of Terror 2','From even the greatest of horrors irony is seldom absent.','Terror is nothing other than justice, prompt, severe, inflexible','<p>Paris, 1794: the guillotine claims dozens of lives every day, as do those in other cities. The survivors of the Handkerchief Affair find themselves politically divided, yet they must unite to thwart the scheme of an invulnerable madman. The one certainty is that the struggle ends at the gallows.<br />\r\n<br />\r\nNOTE: This adventure is a &ldquo;secret&rdquo; chapter released to backers of the Horror on the Orient Express Kickstarter. We&rsquo;ll make no effort to force the scenario&rsquo;s resolution to line up with the official HotOE background, but it will include spoilers for that campaign. No previous experience with Call of Cthulhu necessary. Characters provided, basic rules taught.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E28\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 20:05:06','2017-09-13 12:42:09','This is a horror scenario full of adult content. Players must be age 21+',2,8,2,3,'Cthulhu-Reign-of-Terror-HC-EN_1505253935.jpg','Dave Gross','Call of Cthulhu 7e'),(26,'Sod This!!! A Minotaurs of the Stonelands Adventure','Home is where the hooves are.','Play as a bunch of Spunky 1st level Minotaurs trying to retake their home which has been mysteriously abandoned, or has it?','<p>The Old Sod is one of the few safe places in the Stonelands. Held by the infamous Stonelander Minotaurs, it is a bastion of protection in these lands. But from afar the large settlement is suspiciously quiet. No bustling of animals, no sounds of habitation. Then the dour tone of the bagpipes is heard from the settlement.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E33\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-11 20:21:01','2017-09-13 12:45:42','None',2,8,2,3,'stonelands_1505254005.png','Chris Constantin','Dungeons & Dragons 5e'),(27,'Remember Tomorrow','Max Headroom ain\'t got nothing on you!','Goal-oriented stories built in play','<p>Look at the world today, now flash it forward twenty&nbsp;minutes &nbsp;into &nbsp;the &nbsp;future.&nbsp; Sky &nbsp;Cars: Check.&nbsp; Memory Couriers: Check.&nbsp;<br />\r\nEverything Else: Slightly Changed, huh, how about that?</p>\r\n\r\n<p>Remember Tomorrow is a quick and dirty near-future &ldquo;cyberpunk&rdquo; game that features: easy character generation; an ensemble cast of PCs and Factions; goal-oriented stories built in play; GMless, scene-based resolution.</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E36\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-12 17:41:38','2017-09-13 12:42:44','T-t-t-t-tune into Network 23!',2,8,3,3,'remember_1505259698.jpg','Nathan Treloar','Remember Tomorrow'),(28,'Vampire High School: Battle of the Bands','Rock Out!!! if, you know,  you like want to, or whatever.','Will you shred the werewolves, figuratively before they shred you literally?','<p>It&#39;s hard enough being a high school goth in 1999, but since you were turned into a vampire things have gotten even worse! Your music teacher has twisted your arm and now you&#39;re going to be playing in a darkwave/gothcore&nbsp;band&nbsp;as you battle to prove you&nbsp;rock&nbsp;the morosest in your supernatural school district.</p>\r\n\r\n<p>Expect guitar battles with werewolf punk rockers and the vampires from the rich kid school to try to trash your gear, call you a nerd, and peel off in a Range Rover. Can you&nbsp;rock&nbsp;the concert, win the battle, and keep safe the thin veil of the Masquerade which protects all vampires from certain final death?</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E37\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-12 18:55:31','2017-09-13 12:56:53','Pregenerated characters will be provided',2,5,3,3,'Vtmrevised_1505264131.jpg','Braedon Rolls','Vampire: The Masquerade (Revised)'),(29,'Fiasco','Sorry, not sorry.','Play as ordinary people with powerful ambition and poor impulse control','<p>Play one from:</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/ten-minutes-in-the-future\">10 Minutes in the Future</a>&nbsp;- A Cyberpunk Fiasco</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/neon-city-nights\">Neon City Nights</a>&nbsp;- A Miami Vice sort-of Fiasco</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/zany-town\">Zany Town</a>&nbsp;- A Fiasco of Clown-Sized proportions. Masks provided.</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/los-angeles-1936\">Los Angeles 1936</a>&nbsp;- A classic noir kind-of Fiasco</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/rat-patrol\">Rat Patrol</a>&nbsp;- A self-aware rats, and that entails, kind of Fiasco</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/gangster-london\">Gangster London</a>&nbsp;- A Guy Richie&nbsp;fiasco Fiasco</p>\r\n\r\n<p><a href=\"http://fiascoplaysets.com/home/go-team-superscience\">Team Super Science</a>&nbsp;- A Fiasco for those of us who cheer for the Bond vilains.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seats Remaining:</p>','2017-09-13 14:39:13','2017-09-13 20:38:52','If you\'re going to play, play hard!',2,8,3,1,'fiasco_nathan_1505336813.png','Nathan Treloar','Fiasco'),(31,'Rapan Athuk - Drop Location II','“Don’t go down the Well!”','The Granddaddy of All Dungeons Returns!','<p><em>Rappan Athuk</em>, the legendary mega-dungeon by Frog God Games and Necromancer Games is nothing more and nothing less than a good, old&ndash;fashioned, First Edition dungeon crawl updated for the 5th Edition rules. Very difficult, Rappan Athuk will truly strike fear into the hearts of the most stalwart adventurers. It offers legions of inventive traps, tricks, strange features, and monsters -- many of them never before seen. It affords numerous opportunities for roleplaying, but anyone willing to brave these subterranean halls better arrive ready to rumble, or their lives will be short indeed.<br />\r\n<br />\r\nMany, many players have lost favored PCs delving into the depths of this dungeon, all the while giggling like children and having the time of their lives. Hundreds, if not thousands of players have combed the halls of Rappan Athuk over the years, seeking treasure and fame, making it one of the best-known dungeon locations the game has ever produced. Even players who have never entered its halls know the term: &ldquo;Don&rsquo;t go down the Well!&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E26\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-13 18:03:27','2017-09-13 21:44:51','None',2,8,2,3,'rapan_1505357511.jpg','Randy Crockett','Dungeons & Dragons 5e'),(32,'Rapan Athuk - Drop Location III','“Don’t go down the Well!”','The Granddaddy of All Dungeons Returns!','<p><em>Rappan Athuk</em>, the legendary mega-dungeon by Frog God Games and Necromancer Games is nothing more and nothing less than a good, old&ndash;fashioned, First Edition dungeon crawl updated for the 5th Edition rules. Very difficult, Rappan Athuk will truly strike fear into the hearts of the most stalwart adventurers. It offers legions of inventive traps, tricks, strange features, and monsters -- many of them never before seen. It affords numerous opportunities for roleplaying, but anyone willing to brave these subterranean halls better arrive ready to rumble, or their lives will be short indeed.<br />\r\n<br />\r\nMany, many players have lost favored PCs delving into the depths of this dungeon, all the while giggling like children and having the time of their lives. Hundreds, if not thousands of players have combed the halls of Rappan Athuk over the years, seeking treasure and fame, making it one of the best-known dungeon locations the game has ever produced. Even players who have never entered its halls know the term: &ldquo;Don&rsquo;t go down the Well!&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n<p>Seats Remaining:<span style=\"position: relative;\r\n    top: 10px;\"><iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQUkfLddVGX1OMctjgLdyZi5DSi98ZX3HpspqnJKuUe03tdLdzu030X13cvCq7WF0EsuCtPWgxn9gM/pubhtml?gid=2009366564&amp;single=true&amp;widget=false&amp;chrome=false&;headers=false&amp;range=E30\" width=\"33\" height=\"24\" frameborder=\"0\"></iframe></span></p>','2017-09-13 18:05:32','2017-09-13 21:45:31','None',2,8,2,3,'rapan_1505357544.jpg','Randy Crockett','Dungeons & Dragons 5e');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Queen Alexandra Community League Hall','10425 University Ave NW',NULL,'Edmonton','Alberta','Canada','T6E4P6','2017-09-11 19:11:39','2017-09-11 19:11:39');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (17,'2014_10_12_000000_create_users_table',1),(18,'2014_10_12_100000_create_password_resets_table',1),(19,'2017_09_04_133703_create_articles_table',1),(20,'2017_09_04_133715_create_games_table',1),(21,'2017_09_04_133725_create_locations_table',1),(22,'2017_09_04_192823_add_is_admin_to_users',1),(23,'2017_09_05_040237_add_gamemaster_to_game',1),(24,'2017_09_05_040818_add_system_to_games',1),(25,'2017_09_05_044152_create_events_table',1),(26,'2017_09_06_001559_create_days_table',1),(27,'2017_09_06_220808_create_timeslots_table',1),(28,'2017_09_07_023227_create_game_timeslot_table',1),(29,'2017_09_07_031219_add_gameslot_to_timeslots',1),(30,'2017_09_08_180503_create_statuses_table',1),(31,'2017_09_08_230618_add_column_location_to_events',1),(32,'2017_09_10_234803_create_game_proposals_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('pomerleau.robert@gmail.com','$2y$10$Mt2mcw8Lufde.fL0ZLgdOeuupfx9IXCRSq849X1NyFqZU4DOFV.Ke','2017-09-12 22:24:38');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timeslots`
--

DROP TABLE IF EXISTS `timeslots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timeslots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gameslot` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeslots`
--

LOCK TABLES `timeslots` WRITE;
/*!40000 ALTER TABLE `timeslots` DISABLE KEYS */;
INSERT INTO `timeslots` VALUES (1,'Session 1','2017-10-13','18:00:00','23:00:00',1,'2017-09-11 19:32:55','2017-09-11 19:32:55',1),(2,'Session 2','2017-10-14','10:00:00','14:00:00',1,'2017-09-11 19:33:19','2017-09-11 19:33:19',1),(3,'Session 3','2017-10-14','15:30:00','19:30:00',1,'2017-09-11 19:33:39','2017-09-11 19:33:39',1),(4,'Session 4','2017-10-14','20:30:00','00:30:00',1,'2017-09-11 19:33:57','2017-09-11 19:33:57',1),(5,'Session 5','2017-10-15','10:00:00','16:00:00',1,'2017-09-11 19:34:23','2017-09-11 19:34:23',1);
/*!40000 ALTER TABLE `timeslots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rob Pomerleau','pomerleau.robert@gmail.com','$2y$10$/2EdUsTGA0pz3wSFLJdwzOKzjEzPh3UxLtzhjVBES7KiytIe4dMN6','rDYCF5yNBt0vm3x1YtUEsP3lZBVdKJIWXpOr6zlPbyukJc4m7Y1Le1yOTeSx','2017-09-11 18:29:34','2017-09-11 18:31:06',1),(2,'Clint Johnson','quintusagrippa@gmail.com','$2y$10$qQ6arGV/MLzbTYSK8P8LEuf6UHpA3m/Ayq7vctP3y/ITAdQCrSXde','7FTU6bU3dsiI8iQisXVS2vhYeMRmdoWtpjURobOR7OA0jmlFmqeRx4zumTpl','2017-09-11 18:33:53','2017-09-11 18:34:20',1),(3,'Daniel','daniel@hazardgaming.com','$2y$10$eG8YMvCbn4cWyHO026cUWOqL0x7ABF6SZgsMq/KV67vWsuNKnxMRS',NULL,'2017-09-11 19:24:21','2017-09-11 19:25:57',1),(4,'Daniel','axiomax@telus.net','$2y$10$TjmcHyKOdveQ4d.kzotZvO1jBPBRyuwiLn.WUHJUBKV07CzK20g5q',NULL,'2017-09-12 18:48:55','2017-09-12 18:48:55',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-16 15:15:53
