# PetCare_AKP
## Project Description 
A Responsive and Interactive PetCare Web Application is developed with the help of PHP , CSS , JavaScript ,MySQL,XAMPP,phpMyAdmin

### In this application one can 
1. `Sign Up/Register`
2. `Sign In/Login`
3. `Schedule an appointment` for different services like
`Grooming`,`Boarding`,`Day Care`,`Day Out`,`Pool Sessions`,`Games` for their pets
4. `Contact us` or post any queries or comment or suggestions.
5. `Subscribe` to newsletter so that they will be up to date.

## Installation Instruction 
### Software
Visual Studio Code Link :  https://visualstudio.microsoft.com/downloads/
XAMPP Control Panel link : https://sourceforge.net/projects/xampp/

### Extension
`PHP Live Server id` : brapifra.phpserver   `PHP Debug id` : xdebug.php-debug   `PHP Profiler` : DEVSENSE.profiler-php-vscode   `PHP Extension Pack` : xdebug.php-pack    

## Database 
All words used in sql are case sensitive.
Database named `petcare` is created in XAMPP.

![image](https://user-images.githubusercontent.com/104623412/229782540-cf670214-0aac-4eca-90ce-13f6fe06ff8d.png)

In this database three schemas/tables named `users` , `schedule` , `contact`are created :

![image](https://user-images.githubusercontent.com/104623412/229783237-8956616d-b2c2-4619-b616-9c81e2b0cd5b.png)

### User table 
When a customer fills in the registration details , it is stored in user table . When a customer log in then login credentials are fetched from here and matched.

#### Structure 

![image](https://user-images.githubusercontent.com/104623412/229784036-72934679-174e-47ee-9009-20b5d6cb01dd.png)

### Schedule table
When customer schedules an appointment all details are stored in Schedule table.

#### Structure

![image](https://user-images.githubusercontent.com/104623412/229785383-de201df8-8bd7-4f97-ae96-b840392657ea.png)

### Contact Table
When a customer posts any queries or suggestions or message , it is stored in contact table.

#### Structure

![image](https://user-images.githubusercontent.com/104623412/229785707-8f7e8ca1-bc0d-4b0e-a8f2-fd9a168aad51.png)

## Usage
1. A SignIn/Login page will appear with two buttons(Sign Up and Log In).Click `Sign Up ` if you are a new customer. Click `Sign In` if you are an existing user.

![image](https://user-images.githubusercontent.com/104623412/229796592-d45271ae-7651-465a-9095-9331e0073578.png)

2. Fill the details to register

![image](https://user-images.githubusercontent.com/104623412/229796747-16de6145-e80a-4969-a45f-42b8a930bc3b.png)

3. After registering `Login` with your `userId` and `password`.

![image](https://user-images.githubusercontent.com/104623412/229796947-c43084b8-6d5b-446e-9d7c-ff08322180b2.png)

4. If `userId` and `password` are correct then you will be directed to home page.

![image](https://user-images.githubusercontent.com/104623412/229797827-13c97392-f5a1-4c1c-8778-ecde805ba887.png)


5. You can explore the website , learn `about us` , see what `services` and `products` we offer.

![image](https://user-images.githubusercontent.com/104623412/229798099-32c41f50-3255-470c-9d13-c9d8c53bc8b6.png)

6. If you want to avail/book any services for your pet then you can `schedule now` and we will receive your appointment.

![image](https://user-images.githubusercontent.com/104623412/229798761-1d98583e-7bbd-4fff-8d50-e66ea448bcda.png)

7. If you have any queries/suggestions/message regarding anything then you can contact us and send us message.

![image](https://user-images.githubusercontent.com/104623412/229798540-ee89e602-ad8b-4c5f-8dce-d7bf4c96df36.png)

8. You can `subscribe` to our newsletter to keep getting updated.

![image](https://user-images.githubusercontent.com/104623412/229798422-dc5b20c4-40fe-4eb3-9f9e-90bc66ddb9ec.png)

9. You can contact us in our `phone number` and follow us on social media given in the website.

![image](https://user-images.githubusercontent.com/104623412/229798307-9091ec4e-b87d-454d-93f0-e3f3a15a0065.png)



## Connection of Database with Front End
This is achieved using `PHP` which is programming language used to script websites that are dynamic and interactive.

Database connection is established using `server_id`,`password`,`database_name`.

`$con = mysqli_connect("localhost", "root", "", "petcare");`

`POST` method is used to push data from form to tables.

`$_SERVER["REQUEST_METHOD"] == "POST"`

For registration `$query = "INSERT INTO users (attribute1,attribute2,attribute3) VALUES('$attribute1','attribute2','$attribute3')";
		$result = mysqli_query($con, $query);` query is used to fill the tables.

`action` of form will refer to the file where php is written.

## Documentation and References
https://stackoverflow.com/ 
https://www.w3schools.com/
https://getbootstrap.com/
https://www.javatpoint.com/php-tutorial

## Challenges

While writing php code to connect to database , all the words are case sensitive.

## Limitations
1. It is running on Local host and hence is platform dependent . 

2. One can not purchase items here . Products are just shown that these items are available. 

## Future Work

Domain can be bought and hosting can be done. 

Frameworks like React/Next JS can be used to make it more interactive.

Database fameworks like MongoDB can be implemented.

It can be implemented using Firebase or Sanity.

Add to cart and Payment Gateway can be implemented . 

A chatbot for this website can be developed for assistance.















