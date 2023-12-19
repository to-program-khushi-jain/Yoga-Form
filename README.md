**Project Name** : Yoga Registeration Form

Project related files and ER Diagram alongwith database photo is also attached in the repository.
Website Link: https://remarkable-tapioca-a90c0d.netlify.app/reg

**Tech-Stack** : HTML,CSS,PHP,JavaScript

**Software used**: Visual Studio code,XAMPP server,PHPmyAdmin,MySQL server,Github.

**Problem Definition**: Assume that you are the CTO of an outsourcing firm which has been chosen to build an
admission form for the Yoga Classes which happen every month.

**Solution**: Created a user-friendly website solution that includes a dynamic web form for streamlined registration to our monthly Yoga Classes.

**Purpose**: 
1. The platform allows users to effortlessly input their details, ensuring a hassle-free registration experience. 
2. Prioritizing user convenience and data security, this solution offers immediate confirmation upon successful registration while 
   safeguarding personal information.
3. Overall,website and web form provide an efficient system for individuals to register and enjoy Yoga Classes seamlessly.

**Assumptions**: Company Name - YogFit

**Implementation Details:**
The project comprised two distinct parts: frontend and backend.

### A. Frontend
#### Technologies Used: HTML, CSS, JavaScript

1. **HTML Structure:** Created the foundational structure of the website, featuring two primary pages. The home page serves as the initial landing page upon site opening.

2. **Registration Page:** Developed a registration page housing a form for users to fill in all required details. Upon completion and a successful payment of ₹500, users receive a notification confirming their registration.

3. **Required Details:** Gathered user information such as name, age, email, phone number, password, and selected batch slots among four choices.

4. **Validation:** Implemented necessary attributes to ensure accurate data entry, ensuring correct patterns were followed for each input. Ensured no required fields were left empty.

5. **CSS Styling:** Leveraged CSS to enhance website features, improving the overall aesthetics and user-friendliness.

### B. Backend
### Technologies Used: PHP

1. **Server Setup:** Installed XAMPP server, MySQL server, and PHPMyAdmin, facilitating local development.

2. **Database Creation:** Utilized PHPMyAdmin to create a 'yoga' database and its 'register' table, defining data types for each field, with the email field designated as the primary key.

3. **PHP Integration:** Linked HTML files with PHP, enabling data transfer from the form to the PHP server.

4. **Data Handling:** Developed PHP code to receive and process data entered in the form, facilitating storage in the database.

5. **Payment Notification:** Implemented a JavaScript function, 'CompletePayment()', to notify users with a tick mark upon successful registration and payment of ₹500.

After completion, ran the project, entered details, and verified the addition of records in the PHP server's local database.

**Future Scope**:
1. Payment functionalities could be added to the website to enable online payments.
2. Implementing a notifications function for upcoming classes could enhance user engagement.
3. Auto-generation of successful registration emails for the registered users can be implemented.

**References**:
[1] developer.mozilla.org/en-US/docs
[2] conceptatech.com/blog/php-server-side-scripting-designed-web-development-review
[3] community.spiceworks.com/topic/

Thanks 



