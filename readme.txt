Hi I am Deepak Kumar. I have designed this Blood Bank System using PHP and MYsql

The project includes both Admin dashboard and user dashboard.
Admin can add any user or admin .
Admin can add,edit and delete any donor.
Admin can add,edit and delete any request.

User cannot add any user or admin .
User cannot add,edit and delete any donor.
User cannot edit and delete any request but can add any request.
My database name is bbank.sql which is in database folder

In Admin folder -->
1)css,includes and js folders are foe dashboard designing. 


In User folder -->
1)css,includes and js folders are for dashboard designing.


admin username - admin@gmail.com
admin password - 123456

user username - user@gmail.com
user password - 123456

...................................................Deploying on Windows Server..................................................................................

https://www.youtube.com/watch?v=dTguVd0BKYk&t=257s  ---> watch this and change roles or follow steps 1 to 4
  --
Step 1 - create a VM in azure windows 2022-datacenter-g2 V2 
{
Size Standard B2s
vCPUs  2
RAM 4 GiB
}

step 2 - In your VM go to Server Manager and click Manage.
Step 3 - Click 'Add roles and features' and keep pressing next until you get 'Web server(IIS). Check that box.

step 4- click next...then install.

https://www.youtube.com/watch?v=ePyso84Hkx0  ------------->  watch this and change roles or follow steps 5 to 8


Step 5 - Install web platform installer frm browser in your VM

Step 6  - Install SQL Windows 5.5 {keep user - root and password - 123456}, install php 7.3 for IIS express , Install Microsoft Driver 5.3 for PHP 7.3 for SQL server in IIS express , install PHP 7.3 ----> Install these from web platform installer

Step 7 - phpMyAdmin from browser in your VM and visit localhost/phpMyAdmin in your browser and enter the username and password from step 6.

step 8 - upload you db in phpMyAdmin 

Step 9 - dont forget to change the $username = "root" $password = "123456" in your config.php files. These username and password should be same as in step 6

