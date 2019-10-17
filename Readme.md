### Learning Laravel
A simple CRUD application using laravel 6.x

### Creating Controllers and Models 

Create Controllers and Models using Laravel's **commandline** utility **artisan** which shipd with Laravel and installed on laravel installation.


### Create Controller using php artisan
 Controllers can be created using **php artisan** as follows
 ```shell
 $ php artisan make:controller CustomersController
 ```
### Create Model using php artisan
 ```shell
 $ php artisan make:model Customers
 ```

 Both can be done in one go
 ```shell
 $ php artisan make:model Customers -mc
 ```

 ### Adding Route in web.php

 To add new **Route**  open file inside **resources/web.php** and add code as given below.
 ```php
 Route::get('customers', 'CustomersController@index');
 ```
 considering we created a controller for customers and its called **CustomersController**
 
 
Controllers are added in floowing path **app/Http**
we add index method as follows
```php
public function index()
    {
        $activecustomers = Customer::active()->get();
        $inactivecustomers = Customer::inactive()->get();
        return view('customers.customers',compact('activecustomers','inactivecustomers'));
    }
```
The above function is getting active and inactive customers.
We use lLaravel scoping facility to create **active()** and **inactive()** methods which we creat in **Customer Model**

Little on Scoping and how to create scpoe metnod bellow is an example.
```php
public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }
```
Above are two scope methods we use in our **Customer Model**.
 
