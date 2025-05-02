htdocs/
├── api/
│   ├── add.php
│   ├── delete.php
│   ├── edit.php
│   ├── fetch.php
│   └── update.php
│
├── config/
│   ├── conn.php
│   └── dbconfig.php
│
├── views/
│   ├── index.php
│   └── partials/
│       └── modal.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       ├── angular.js
│       └── dirPaginate.js

or simple add all the files inn "htdocs" 
and iunnphp admin create database "angular" perform the below code in sql 

" CREATE TABLE `members` (
  `memid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
"
