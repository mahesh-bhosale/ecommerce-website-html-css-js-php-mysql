# E-commerce Website

## Project Overview

The **E-commerce Website** is a fully functional online shopping platform. It allows users to register, log in, browse products, add them to the cart, and place orders. The website also includes account management features like updating profile details. Developed using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**.

## Key Features

- **User Module**:
  - User registration and login system
  - Account detail page for viewing and updating profile information
  - Ability to browse products and add them to the cart
  - Place orders after reviewing the cart

- **Product Management**:
  - Display available products with detailed descriptions
  - Add products to cart with the option to view details before adding

- **Cart and Order**:
  - Users can view products in the cart with price and quantity
  - Ability to place an order after reviewing cart items

- **Contact Us Page**:
  - Users can send queries or feedback

- **About Us Page**:
  - Information about the website and its offerings

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **XAMPP** for local server and database setup.
- **VS Code** for code editing.

## Installation

Follow these steps to set up the project on your local machine:

### 1. Clone the Repository

Start by cloning the repository to your local machine:

```bash
git clone https://github.com/mahesh-bhosale/ecommerce-website-html-css-js-php-mysql.git
```

To import your database from the `login.sql` file into MySQL using XAMPP, follow these steps:

### 2. Install MySQL & VS-code
   -Ensure you have MySQL installed on your system. You can use XAMPP to install MySQL easily:
   -Download XAMPP from **https://www.apachefriends.org.**
   -Download **VS Code** or any other editer for code editing.

### 3. **Make Sure XAMPP is Running**
   - Open **XAMPP Control Panel**.
   - Start **Apache** and **MySQL** services.

### 4. **Access phpMyAdmin**
   - Open your browser and navigate to `http://localhost/phpmyadmin/`.
   - If you are using a custom port for Apache (e.g., `8080`), use `http://localhost:8080/phpmyadmin/`.

### 5. **Create a New Database**
   - Once in phpMyAdmin, click on the **Databases** tab.
   - In the **Create database** field, type a name for your database (e.g., `login`), and click **Create**.

### 6. **Import the `login.sql` File**
   - After creating the database, click on the name of your newly created database (e.g., `login`).
   - Click the **Import** tab at the top of the page.
   - Under the **File to Import** section, click **Choose File** and select your `login.sql` file from your local machine.
   - Once selected, click **Go** at the bottom to begin the import process.

### 7. **Verify the Import**
   - After the import is complete, you should see all the tables from the `login.sql` file listed under your database.
   - If everything was imported successfully, your database is now ready to be used.

### 8. **Configure the Database Connection in PHP**
   - Create file `config.php` or any file where you're setting up the database connection, make sure to update the credentials as follows:

   ```php
   <?php
   $con = mysqli_connect("localhost", "root", "", "login") or die("Couldn't connect");
   ?>
   ```

   - **localhost** is the server (since it's running locally).
   - **root** is the default MySQL username in XAMPP.
   - Leave the password empty (`""`) if you're using the default configuration (XAMPP).
   - **login** is the name of the database you created earlier.

### 9.**Run the Application**
After setting up the database connection, run the project on a local server (e.g., XAMPP or WAMP). Navigate to the project folder and open it in a web browser.


## OUTPUT

### 1)Login page:
In this page existing user can login by using their registered email and password that is set during registration.
![image](https://github.com/user-attachments/assets/0eb0d7a6-9207-463d-ad5e-03f5373828ab)

### 2) Registration page: 
In this page new user can register by using their basic details like name, email, address, contact number, password.
![image](https://github.com/user-attachments/assets/ee447a53-ed42-4b2b-91ec-f7e71414a772)

### 3) Account detail page: 
In this page all the basic detail of the user is shown. And if user wants to change any details they can change using ‘change profile option’.
![image](https://github.com/user-attachments/assets/d29c47c3-8b62-4bd9-8036-e9b941158349)

![image](https://github.com/user-attachments/assets/78b827c8-62cf-48e8-9c5e-fe2e299913a8)

### 4) Home page:
This is the starting page of our website. Different offers and advertisements are shown on this page.
![image](https://github.com/user-attachments/assets/5657bcff-d4db-4c6b-933c-809c5c5a8aa0)

### 5) Shop Page:
In this page the list of all available product on our website is shown
![image](https://github.com/user-attachments/assets/a2e80399-7e4b-4da1-956c-d840be5f8e88)

### 6) Add To Cart: 
In this page the description of the product is present and if user want to add to cart there is the option of add to cart.
![image](https://github.com/user-attachments/assets/ebddd717-02c3-4e38-8362-210f9e68c862)
![image](https://github.com/user-attachments/assets/15c2b5d4-fd69-4d5e-8b33-6dc3101b67b2)

### 7) Cart Page: 
In this page all the selected product that user wants to buy is present with their cost and quantity. User can check and place the order.
![image](https://github.com/user-attachments/assets/3e38ac9a-9351-4ebe-ab75-a55877319602)

### 8) Order placed:
![image](https://github.com/user-attachments/assets/9b637639-56a4-4c39-8e31-3f588afb5d41)

### 9) Contact us page: 
If user wants to ask any question or give any suggestion they can give using this page.
![image](https://github.com/user-attachments/assets/1d907650-2c19-4cc1-979d-19893cea3282)
![image](https://github.com/user-attachments/assets/9bbb3746-c404-4971-b819-b904fc8a16d4)

### 10) About us page:
All the information regarding our website is given in this page.
![image](https://github.com/user-attachments/assets/cb763132-afd1-43b6-83c6-8994a1edf174)

![image](https://github.com/user-attachments/assets/76cc3e68-c07c-41bc-9b96-d8779a5f3553)

