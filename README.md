# YealinkMassConfig
Mass update the cfg file for a Yealink T40 series handsets on the network/intranet. Tested working with Yealink T48S.

Possible use scenario is to mass update the DSS keys.

Requirements:
 - PHP (Developed with v7.3)
 - Chrome installed (Developed with version 78)
YMMV with other versions of Chrome and PHP.

Usage:
1) Open yealink.mass.update.php file and type in the IP addresses that need to be updated.
2) Make sure there exists a cfg file in the same folder as yealink.mass.update.php. The filename is set in the var $config_file
3) Run the file with "php yealink.mass.update.php"


How it works?
1) It opens the configuration web portal for the Yealink device using its IP on Chrome headless.
2) Logs into the configuration web portal using $phone_user and $phone_pass combination , and obtains the jsessid cookie from Chrome.
3) Uses curl to upload the cfg file to the config import page in the configuration web portal of the Yealink device.
4) Repeats 1-3 for each IP in the array.


If you update the script, please submit a commit request.
