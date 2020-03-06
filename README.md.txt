--------------------------------------------------INSTALLATION GUIDE--------------------------------------------------
*For Adi*
To connect to postgres using PHP.

(1) Download XAMPP from https://www.apachefriends.org/download.html 
(2) Choose default settings to download. NOTE: Make sure "Apache" is clicked yes! 
	- Apache is a web server software used to run PHP codes.
(3) Install XAMPP in (C:)
(4) Go to C:\xampp\php\php.ini (OR php.config), uncomment the following lines:
		extension=php_pdo_mysql.dll
		extension=php_pdo_pgsql.dll
		extension=php_pdo_sqlite.dll
		
		*These allow PHP to make use these extension to connect to postgres!*
		
(5) Go to your postgres folder, search for "libpq.dll" --> I believe this is postgres's library/API for other software to integrate with postgres
(6) Copy the "libpq.dll" file, and paste it to: C:\xampp\php\ext. 
(7) Ensure that "libpq.dll" file exist in both the xampp and postgres folder!
(8) SETUP done.
(9) Note for php files, after you run XAMPP-Control, you click "Start" button of Apache. This will start the apache server to run PHP codes.
(10) Verify that apache works by going to your browser, enter "localhost". This should bring you to the apache localhost homepage.
(11) Enter this into URL: "http://localhost/crowdfundingfinal/CrowdFunding/php/login.php"
