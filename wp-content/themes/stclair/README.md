## Features

- Babel polyfill for writing es5, es6 JS
- BrowserSync ( you can use webpack-dev server if you want, i use AMPPS)
- SASS ( change in webpack.config.js if you want to use another preprocessor)
- CSS, JS optimization and minify. 
- Well structured theme files and functions (thanks to html5blank)
- JQUERY included - if you like feeling old (commented out by default in ./src/app.js)

1- Create a new empty folder called the client name -theme.
2- Open folder in code editor, in a terminal clone the git repo into this folder. (make sure you are cloning the repo from the master branch.)
3- Sign into https://my.wpengine.com/
4- Go to Sites > scroll to client - St Clair > Click production link
5- Go to Back up Points > Back up now (enter your details)
6- Once you get an email to confirm back up is finished, go back to wpengine and download ZIP. 
7- Download the folder you get sent via email.
8- Move zip folder to Projects folder and rename to client name, then unzip.
9- Open 2 finder windows, one showing the unzipped wpengine client folder, and the other showing the cloned folder.
10- Go to Client WP Engine folder > wp-content > move file mysql.sql into cloned folder > wp-content folder.
11- Now copy all files except htaccess from cloned folder into the root of Client WP Engine folder. Replace all files. 
12- Delete cloned folder now.
13- Now open the full client folder into code editor. 
14- Open terminal and cd into theme. Then install node modules. Npm i.
15- Now in the terminal write npm run watch.
16- Now open Mamp Pro and add a new server. With the name being the client name, and the document root folder being the client folder.
17- Stop and start the servers, click on WebStart to open phpmyadmin.
18- Inside phpmyadmin create a new database and import the sql file prevously copied to wp-content folder.
19- Inside this new database open wp_options and change the siteurl and home url to be the local version. http://stclair:8888/
20- Now back to the code editor and update the wp-config.php file. Change DB_NAME to the name of your new database and DB_USER AND DB_PASSWORD to root and DB_HOST and DB_HOST_SLAVE to localhost.
21- Your site should now be up and running as it should at http://stclair:8888/.
22- However there will be images missing. Go to Wp Engine and create yourself a SFTP user. Then Download the uploads folder in your chosen ftp account eg. filezilla or cyberduck. Then replace the local uploads folder with the most upto date one you just downloaded.
23- Now your site should look the same as the live site. 
