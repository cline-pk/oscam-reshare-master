# oscam-reshare-master
Hi, this script writen in php and help you to reshare normal lines without getting block,

because this script will help you to change normal lines after every hour automatically so line ecm won't got high and don't block you need upload these two files in your vps or dedicated server at: "/usr/local/" location then edit both files in reader.php file you need set other additional reader you want use in your oscam and your oscam.server file location and oscam access to allow reader.php change reader.

then in lines.php file you need put 24.lines like calculation pattern you can use same lines more then once after some hours delay.

then add cronjob.

`5 */1 * * * php /usr/local/reader.php`

Happy sharing, enjoy.
