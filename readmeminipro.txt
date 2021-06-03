
PROJECT NAME:HOSTEL MANAGEMENT SYSTEM
=====================================
hello,

Our project is being developped using laravel 8 which is the most popular php frame work.
this project deals on how hostel  should be controlled. the student should add  their informations 
if Dean or Student union  need those information can access it, any time and any where.

Our project is their to overcome this problems:
-it reduce time taken.
-student data security because this is computerized system.  

prerequisites for installing laravel 8
======================================
to install laravel 8 you must be having composer in your syastem also you must have the active internet connection 
and of course some knowlwdgde abourt programming 

procedures
===========

after manual installation of composer ,open the root directory of your project and open the terminal from there 
after type the above command to start download the laraver:
composer create-project laravel/laravel {directory} 4.2 --prefer-dist

after the laravel is downloaded from your system you open the project folder into text editor(visual studio code)
after to start the project you simply type this command from your terminal (php artisan serve).s 

authors
=======
this mini project is being built by HIRWA MIHIGO Alain and KWIZERA claudine

structure of project
====================
our projects has three main parts (mvc) model controller


 Model 
========

is a representation of a real-life instance or object in our code base.
nothing much to add in ourcode the model is used to insert the data in table 

in views 
========
there are files .blade to be seen on outer view and are aranged in the the folder products
the blade files are 
create.blade.php(to let the syastem admin to enter the new student)
show.blade.php(to view the full description of the student )
edit.blade.php(to eddit some profile of the student)
index.blade.php(the first page that appears to first when you open up the project )
delete.blade.php(to delete a student)

View:represents the interface through which the user interacts with our application

in controllers 
==============
in our controllers we have the one called studentController.php 
from this page or controller is were we perform almost all controls of the system.


When a user takes an action, the //Controller: handles the action and updates the Model if necessary.


how the system works 
====================
it is simple and easy our system is about to booking the hostel room in our system the
after getting on the home of the system the admin sees the button called  add view student

 administrator of the system will enter the name ,and the admin can view details about what the the student 
 then after the system will save those date and assume that the student can  already have the room in hostel  the admin will press the button called 
update then the form will come after  the system itself will automatically update the the student insertion to the completion. 

administrator also should delete and create the student when the room is full the admin could block the student to apply.
and also should create the student room and should give tha student the room he/she can be.


how can other use start using the system?
=========================================

simple .... he/she can contact us in order to lead them and also can have the environment to run it also also flame work. 
 
 

