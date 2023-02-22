# oscam-reshare-master
Hi, this script writen in php and help you to reshare normal lines without getting block,

because this script will help you to change normal lines after every hour automatically so line ecm won't got high and don't block.

1- upload these two files in your vps or dedicated server at: "/usr/local/" location 

2- edit reader.php leave first reader and you can add extra reader after the first reader below then set oscam login in the end of curl to access auto update readers.

3- add lines in lines.php file you need put 24.lines like calculation pattern you can use same lines more then once after some hours delay.

4- add cronjob.

`5 */1 * * * php /usr/local/reader.php`

Happy sharing, enjoy.
