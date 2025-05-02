have these structure :
htdocs/
htdocs/api/
htdocs/api/add.php
htdocs/api/delete.php
htdocs/api/edit.php
htdocs/api/fetch.php
htdocs/api/update.php
htdocs/config/
htdocs/config/conn.php
htdocs/config/dbconfig.php
htdocs/views/
htdocs/views/index.php
htdocs/views/partials/
htdocs/views/partials/modal.php
htdocs/assets/
htdocs/assets/css/
htdocs/assets/css/style.css
htdocs/assets/js/
htdocs/assets/js/angular.js
htdocs/assets/js/dirPaginate.js

or 

or simple add all the files inn "htdocs" 
and iunnphp admin create database "angular" perform the below code in sql 

" CREATE TABLE `members` (
  `memid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
"
