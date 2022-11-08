use the commsimple.sql to get the required database files. Try to keep that file up-to-date if you make database edits and they are stable

To import the database to your own computer, follow these steps

1. download the .sql file, either with the command "curl https://raw.githubusercontent.com/edreitlein/commsimple/main/database/commsimple.sql -o commsimple.sql" or another way

2. run MAMP, go to localhost/phpMyAdmin

3. on the left bar, click "New", for database name type "commsimple", click "Create"

4. on the left bar, click "commsimple", on the top bar in the middle click "import"

5. in the main area, click "Choose File", then select commsimple.sql from where you downloaded it

6. click "Go", you should see many green check marks and text. restart MAMP and go to localhost/commsimple/home.php, try logging in with "edreitlein@drew.edu" and "1234"
