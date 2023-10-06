```php
<?php
// $GET, $POST = special variables used to collect data from an HTML form. 
// Data is sent to the PHP file in the action attribute of <form>.
// <form action="some_file.php" method="GET">

// Get Variables
// $_GET = Data is appended to the url
//         NOT SECURE
//         Data is limited to 2000 characters
//         Bookmark is possible with values
//         GET requests can be cached
//         Better for a search page

// Post Variables
// $_POST = Data is packaged inside the bodu of the HTTP request
//         MORE SECURE
//         No data limit
//         Cannot bookmark values
//         GET requests are not cached
//         Better for submitting sensitive data or credentials
?>
```