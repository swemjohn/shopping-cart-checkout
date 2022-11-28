<h1> Shopping Cart Checkout </h1>

## Installation
### Prerequisites
You will need to build on a supporting operating system that runs PHP and libraries.

Requirements to build:
- PHP 8.1 and above
- MySQL Database
- Composer installed

### Step 1 - Install packages
```bash
composer install 
```
This will install all the packages required.


### Step 2 - Setup .env
Edit your local version of .env, the main point is to connect to MySQL table
```bash
cp .env.example .env
vi .env
```

The important component is MySQL connection. Please create a database with the database name specified in the .env.
eg: CREATE DATABASE shopping_cart

### Step 3 - Setup database tables and initial data
Laravel seeders are used to populate the table data.

```bash
php artisan migrate 
php artisan db:seed
```

### Step 4 - Run tests to verify the build

```bash
php artisan test 
```
This will run the test and verify three test cases.


### Step 5 - View and interact with the app

```bash
php artisan serve 
```
The website will usually be available on https://127.0.0.1:8000

<h2> Problem Description </h2>
<p>In our quest to stay in touch with what's going on in the commercial world we've
decided to open a supermarket - we sell only three products:</p>
<table>
<tr><th>Product code </th>
<th>Name</th>
<th>Price</th>
</tr>
<tr><td>FR1 </td>
<td>Fruit tea </td>
<td>£3.11</td>
</tr>
<tr><td>SR1 </td>
<td>Strawberries </td>
<td>£5.00</td>
</tr>
<tr><td>CF1 </td>
<td>Coffee </td>
<td>£11.23</td>
</tr>
</table>

<p>Our CEO is a big fan of buy-one-get-one-free offers. She wants us to add a rule to
apply this rule to fruit tea. </p>
<p>The COO, though, likes low prices and wants people buying strawberries to get a
price discount for bulk purchases. If you buy 3 or more strawberries, the price should
drop to £4.50 each. </p>
<p> Our checkout can scan items in any order. </p>
<p>The CEO and COO change their minds often, so ideally this should be a flexible
solution (if you have time). For example, we might want to apply the offers to
different products, or add products to our range, as the supermarket grows. </p>
<h2> Task </h2>
<p>Your goal is to implement a checkout that scans items in and calculates total prices
correctly for any combination of the products and offers above. </p>
<p> Please don’t spend more than an hour or two on this. </p>




