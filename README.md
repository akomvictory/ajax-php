# ajax-php

Learn how to do basic stuff with Ajax and PHP



Navigate to your MySQL Serve and create a database named ajax
Copy the SQL command below and paste it in the SQL Tab on your PHPMyAdmin control Panel

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `msg` text NOT NULL) 

After pasting this click GO
2  Copy the SQL command below and paste it in the SQL Tab on your PHPMyAdmin control Panel again
INSERT INTO `users_table` (`id`, `author`, `msg`) VALUES
(1, 'baseey', 'In today\'s market, there is no getting around using the internet for marketing. You find it tough to keep up with since each social media channel has their own expectations. Thankfully, there are systems for a successful digital marketing campaign. These campaign strategies have helped decrease...'),
(2, 'elcy', 'For the uninitiated, Reddit can be more than a little intimidating. This guide shows you exactly how to jump in to this community, and have an awesome time..'),
(3, 'tega', 'It might be hard for you or a loved one to admit that you need help for your addiction. Here are 5 signs ways to know if drug rehab is the necessary choice....'),
(4, 'megan', 'If you suffer from tooth pain, or have missing teeth, it may be time to get dental implants. But what does that mean? Read on to learn if they\'re right for you...'),
(5, 'ophir', 'Customers may find you at any step of the sales cycle, and it’s important to understand the buyer journey.\r\n\r\nBy speaking to customers and leading them down a funnel, you’ll be able to predictably convert them from cold prospects all the way to happy purchasers!'),
(6, 'joe', 'Dieting sucks. And truth be told, it\'s not the best way to keep weight off. Here\'s how you can lose weight while avoiding the dreaded diet.'),
(7, 'patric', 'We\'re not saying that frozen yogurt that\'s more candy than yogurt is good for you, but froyo\'s health benefits can\'t be denied! We\'re listing our faves here....'),
(9, 'Nneka', 'A stubborn non-academic student, never stays in class, has join bad gang'),
(10, 'patrick', 'Our platform allows our clients to scale their content campaigns and have a birds eye view the entire time. Our entire system is built for scale and flexiblity – putting you in the drivers seat while our team works flawlessly for you.'),
(11, 'Nneka', 'A stubborn non-academic student, never stays in class, has join bad gang'),
(12, 'patrick', 'Our platform allows our clients to scale their content campaigns and have a birds eye view the entire time. Our entire system is built for scale and flexiblity – putting you in the drivers seat while our team works flawlessly for you.');
…this will insert the dummy data we need in the users_table table

Now the database and the required table has been created
You can now navigate and start using the app
localhost/ajax/ajax-practice-repetition.php
