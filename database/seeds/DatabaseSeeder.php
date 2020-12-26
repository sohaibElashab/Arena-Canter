<?php


use App\User;
use App\admin;
use App\food;
use App\ent;
use App\shopping;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //USERS
        
        $user = User::create([
            'username'          => 'User',
            'email'         => 'user@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        //ADMINS
        
        $admin = admin::create([
            'email'         => 'food@admin.com',
            'password'      => bcrypt('12345'),
            'type'          => 'food',
            'created_at'    => date("Y-m-d H:i:s")
        ]); 

        $admin1 = admin::create([
            'email'         => 'ent@admin.com',
            'password'      => bcrypt('12345'),
            'type'          => 'ent',
            'created_at'    => date("Y-m-d H:i:s")
        ]); 
        
        $admin2 = admin::create([
            'email'         => 'shopping@admin.com',
            'password'      => bcrypt('12345'),
            'type'          => 'shopping',
            'created_at'    => date("Y-m-d H:i:s")
        ]); 

        //Food Products
        $product1 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Mexican Burger',
            'description_short'    => 'This Mexican-style burger is pumped up with flavor
                                        from chili powder, cilantro, and jalapeno pepper.
                                        Served on buns topped with lettuce.',
            'description'    => 'This Mexican-style burger is pumped up with flavor
                                from chili powder, cilantro, and jalapeno pepper.
                                Served on buns topped with lettuce.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $product2 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Mexican Burger',
            'description_short'    => 'This Mexican-style burger is pumped up with flavor
                                        from chili powder, cilantro, and jalapeno pepper.
                                        Served on buns topped with lettuce.',
            'description'    => 'This Mexican-style burger is pumped up with flavor
                                from chili powder, cilantro, and jalapeno pepper.
                                Served on buns topped with lettuce.',
            'price'    => 5.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $product3 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Mini Burger',
            'description_short'    => 'Mini burgers, known by many as sliders, are the
            hottest little food trend sweeping the nation, with
            the half size of a classic burger.',
            'description'    => 'Mini burgers, known by many as sliders, are the
            hottest little food trend sweeping the nation, with
            the half size of a classic burger.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $product4 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Mini Burger',
            'description_short'    => 'Mini burgers, known by many as sliders, are the
            hottest little food trend sweeping the nation, with
            the half size of a classic burger.',
            'description'    => 'Mini burgers, known by many as sliders, are the
            hottest little food trend sweeping the nation, with
            the half size of a classic burger.',
            'price'    => 5.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $product5 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Classic Burger',
            'description_short'    => ' Chicken beef cooked over charcoal and onions on the
            grill, hot pepper, lettuce, tomatoes, double American
            cheddar cheese sauce.',
            'description'    => ' Chicken beef cooked over charcoal and onions on the
            grill, hot pepper, lettuce, tomatoes, double American
            cheddar cheese sauce.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $product6 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Classic Burger',
            'description_short'    => ' Chicken beef cooked over charcoal and onions on the
            grill, hot pepper, lettuce, tomatoes, double American
            cheddar cheese sauce.',
            'description'    => ' Chicken beef cooked over charcoal and onions on the
            grill, hot pepper, lettuce, tomatoes, double American
            cheddar cheese sauce.',
            'price'    => 5.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $product7 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'California Burger',
            'description_short'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'description'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'price'    => 15.50,
            'energy_value'    => '60',
            'proteins'    => '60',
            'carbohidrats'    => '60',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-6-310x260.png',
            'taille'    =>'Big'
        ]);
        
        $product8 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Classic Burger',
            'description_short'    => '  Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'description'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'price'    => 5.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-6-310x260.png',
            'taille'    =>'Small'
        ]);


        $product9 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Double Burger',
            'description_short'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'description'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'price'    => 15.50,
            'energy_value'    => '60',
            'proteins'    => '60',
            'carbohidrats'    => '60',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $product10 =food::create([
            'categorie'    => 'Burgers',
            'name'    => 'Double Burger',
            'description_short'    => '  Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'description'    => ' Alfalfa sprouts crown these juicy burgers. A
            combination of regular ground turkey and ground turkey
            breast offers superior texture.',
            'price'    => 5.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'menu-modern-5-310x260.png',
            'taille'    =>'Small'
        ]);

        $toast1 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Tomato Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $toast2 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Tomato Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $toast3 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Cheese Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $toast4 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Cheese Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $toast5 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Beef Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $toast6 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Beef Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $toast7 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Italian Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-4-310x260.png',
            'taille'    =>'Big'
        ]);

        $toast8 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Italian Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-4-310x260.png',
            'taille'    =>'Small'
        ]);

        $toast9 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Mediterranean Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $toast10 = food::create([
            'categorie'    => 'Toasts',
            'name'    => 'Mediterranean Toast',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'toast-5-310x260.png',
            'taille'    =>'Small'
        ]);

        $pizza1 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Hawaiian',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $pizza2 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Hawaiian',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $pizza3 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Sicilian',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $pizza4 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Sicilian',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $pizza5 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Classic Cheese',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $pizza6 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Classic Cheese',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $pizza7 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Margherita',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-4-310x260.png',
            'taille'    =>'Big'
        ]);

        $pizza8 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Margherita',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-4-310x260.png',
            'taille'    =>'Small'
        ]);

        $pizza9 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Neapolitan',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $pizza10 = food::create([
            'categorie'    => 'Pizzas',
            'name'    => 'Neapolitan',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'pizzas-5-310x260.png',
            'taille'    =>'Small'
        ]);

        $salad1 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Buffalo Bleu',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $salad2 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Buffalo Bleu',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $salad3 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Greek Salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $salad4 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Greek Salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $salad5 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Turkey Salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $salad6 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Turkey Salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $salad7 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Mediterranean',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-4-310x260.png',
            'taille'    =>'Big'
        ]);

        $salad8 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Mediterranean',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-4-310x260.png',
            'taille'    =>'Small'
        ]);

        $salad9 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Farmhouse salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $salad10 = food::create([
            'categorie'    => 'Salads',
            'name'    => 'Farmhouse salad',
            'description_short'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'description'    => 'Enjoy this amazing combination of cheese and tomato
            with a little bit of salad and cucumbers on the
            freshly baked bread.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '30',
            'carbohidrats'    => '30',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Hot',
            'picture'    => 'salads-5-310x260.png',
            'taille'    =>'Small'
        ]);

        $drink1 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Diet Coke',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '0',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $drink2 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Diet Coke',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $drink3 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Blue Moon',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '0',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $drink4 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Blue Moon',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $drink5 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Sparkling Water',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '0',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $drink6 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Sparkling Water',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $drink7 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Red Dawn',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '0',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-4-310x260.png',
            'taille'    =>'Big'
        ]);

        $drink8 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Red Dawn',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-4-310x260.png',
            'taille'    =>'Small'
        ]);

        $drink9 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Pina Colada',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '0',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $drink10 = food::create([
            'categorie'    => 'Drinks',
            'name'    => 'Pina Colada',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '0',
            'carbohidrats'    => '0',
            'ingredients'    => '',
            'ticket'    => 'Cold',
            'picture'    => 'drinks-5-310x260.png',
            'taille'    =>'Small'
        ]);

        $dessert1 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'French macaroons',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-1-310x260.png',
            'taille'    =>'Big'
        ]);

        $dessert2 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'French macaroons',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-1-310x260.png',
            'taille'    =>'Small'
        ]);

        $dessert3 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Blueberry muffins',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-2-310x260.png',
            'taille'    =>'Big'
        ]);

        $dessert4 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Blueberry muffins',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-2-310x260.png',
            'taille'    =>'Small'
        ]);

        $dessert5 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Donuts',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-3-310x260.png',
            'taille'    =>'Big'
        ]);

        $dessert6 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Donuts',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-3-310x260.png',
            'taille'    =>'Small'
        ]);

        $dessert7 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Ice Cream',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-4-310x260.png',
            'taille'    =>'Big'
        ]);

        $dessert8 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Ice Cream',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-4-310x260.png',
            'taille'    =>'Small'
        ]);

        $dessert9 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Pancakes',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 12.50,
            'energy_value'    => '50',
            'proteins'    => '50',
            'carbohidrats'    => '50',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-5-310x260.png',
            'taille'    =>'Big'
        ]);

        $dessert10 = food::create([
            'categorie'    => 'Desserts',
            'name'    => 'Pancakes',
            'description_short'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'description'    => 'Try a crisp and refreshing no-calorie Diet Coke,
            refreshing classics that compliments any dish of our
            menu.',
            'price'    => 4.50,
            'energy_value'    => '20',
            'proteins'    => '20',
            'carbohidrats'    => '20',
            'ingredients'    => 'Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes',
            'ticket'    => 'Cold',
            'picture'    => 'deserts-5-310x260.png',
            'taille'    =>'Small'
        ]);

        //shopping
        $shop1=shopping::create([
            'name'       => 'women black belt',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Small',
            'quantite'       => '20',
            'pic1'       => 'beltwomenblack.jpg',
            'pic2'       => 'beltwomenblack.jpg',
            'pic3'       => 'beltwomenblack.jpg',
            'pic4'       => 'beltwomenblack.jpg'
        ]);

        $shop2=shopping::create([
            'name'       => 'women black belt',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Medium',
            'quantite'       => '20',
            'pic1'       => 'beltwomenblack.jpg',
            'pic2'       => 'beltwomenblack.jpg',
            'pic3'       => 'beltwomenblack.jpg',
            'pic4'       => 'beltwomenblack.jpg'
        ]);

        $shop3=shopping::create([
            'name'       => 'women black belt',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Large',
            'quantite'       => '20',
            'pic1'       => 'beltwomenblack.jpg',
            'pic2'       => 'beltwomenblack.jpg',
            'pic3'       => 'beltwomenblack.jpg',
            'pic4'       => 'beltwomenblack.jpg'
        ]);

        $shop4=shopping::create([
            'name'       => 'women blue belt large',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Blue',
            'taille'       => 'Large',
            'quantite'       => '20',
            'pic1'       => 'bluewomenbelt.jpg',
            'pic2'       => 'bluewomenbelt.jpg',
            'pic3'       => 'bluewomenbelt.jpg',
            'pic4'       => 'bluewomenbelt.jpg'
        ]);

        $shop5=shopping::create([
            'name'       => 'women blue belt small',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Blue',
            'taille'       => 'Small',
            'quantite'       => '10',
            'pic1'       => 'bluewomenbelt.jpg',
            'pic2'       => 'bluewomenbelt.jpg',
            'pic3'       => 'bluewomenbelt.jpg',
            'pic4'       => 'bluewomenbelt.jpg'
        ]);

        $shop6=shopping::create([
            'name'       => 'men black belt small',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'men',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Small',
            'quantite'       => '20',
            'pic1'       => 'beltmanBlack.jpg',
            'pic2'       => 'beltmanBlack.jpg',
            'pic3'       => 'beltmanBlack.jpg',
            'pic4'       => 'beltmanBlack.jpg'
        ]);

        $shop7=shopping::create([
            'name'       => 'men black belt medium',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'men',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Medium',
            'quantite'       => '20',
            'pic1'       => 'beltmanBlack.jpg',
            'pic2'       => 'beltmanBlack.jpg',
            'pic3'       => 'beltmanBlack.jpg',
            'pic4'       => 'beltmanBlack.jpg'
        ]);

        $shop8=shopping::create([
            'name'       => 'men red belt',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Red',
            'taille'       => 'Large',
            'quantite'       => '20',
            'pic1'       => 'redmenbelt.jpg',
            'pic2'       => 'redmenbelt.jpg',
            'pic3'       => 'redmenbelt.jpg',
            'pic4'       => 'redmenbelt.jpg'
        ]);

        $shop9=shopping::create([
            'name'       => 'men red belt',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'women',
            'categorie'       => 'Accessories',
            'couleur'       => 'Red',
            'taille'       => 'Medium',
            'quantite'       => '20',
            'pic1'       => 'redmenbelt.jpg',
            'pic2'       => 'redmenbelt.jpg',
            'pic3'       => 'redmenbelt.jpg',
            'pic4'       => 'redmenbelt.jpg'
        ]);



        $shop10=shopping::create([
            'name'       => 'kids black belt small',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'kids',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Small',
            'quantite'       => '10',
            'pic1'       => 'beltkidBlack.jpg',
            'pic2'       => 'beltkidBlack.jpg',
            'pic3'       => 'beltkidBlack.jpg',
            'pic4'       => 'beltkidBlack.jpg'
        ]);

        $shop11=shopping::create([
            'name'       => 'kids black belt large',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'kids',
            'categorie'       => 'Accessories',
            'couleur'       => 'Black',
            'taille'       => 'Large',
            'quantite'       => '10',
            'pic1'       => 'beltkidBlack.jpg',
            'pic2'       => 'beltkidBlack.jpg',
            'pic3'       => 'beltkidBlack.jpg',
            'pic4'       => 'beltkidBlack.jpg'
        ]);

        $shop12=shopping::create([
            'name'       => 'kids black belt small',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'kids',
            'categorie'       => 'Accessories',
            'couleur'       => 'Orange',
            'taille'       => 'Small',
            'quantite'       => '10',
            'pic1'       => 'kidsorangebelt.jpg',
            'pic2'       => 'kidsorangebelt.jpg',
            'pic3'       => 'kidsorangebelt.jpg',
            'pic4'       => 'kidsorangebelt.jpg'
        ]);

        $shop13=shopping::create([
            'name'       => 'kids black belt large',
            'price'       => 120,
            'description'       => 'Gold Double O-Ring Buckle---A great looking belt to spice up your outfit! this Fashion leather belts for women with a gorgeous overlapping circle buckle, it really makes a difference in the outfit. You will get lots for complements on this lovely belt!',
            'sexe'       => 'kids',
            'categorie'       => 'Accessories',
            'couleur'       => 'Orange',
            'taille'       => 'Large',
            'quantite'       => '10',
            'pic1'       => 'kidsorangebelt.jpg',
            'pic2'       => 'kidsorangebelt.jpg',
            'pic3'       => 'kidsorangebelt.jpg',
            'pic4'       => 'kidsorangebelt.jpg'
        ]);

        //ENT
        $event1=ent::create([
            'name'       => 'EVENT 1',
            'description'       => 'Lore veniam, quis nostrud exercitation ullamex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'event',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '20',
            'date'       => '2020-05-21',
            'picture'       => '782913523.jpg'
        ]);

        $event2=ent::create([
            'name'       => 'EVENT 2',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing eincididunt ut',
            'price'       => 20,
            'categorie'       => 'event',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '20',
            'date'       => '2020-05-21',
            'picture'       => '782913523.jpg'
        ]);

        $event3=ent::create([
            'name'       => 'EVENT 3',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur  sed do eiusmod tempor ',
            'price'       => 20,
            'categorie'       => 'event',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '20',
            'date'       => '2020-05-21',
            'picture'       => '782913523.jpg'
        ]);

        $activity1=ent::create([
            'name'       => 'Ice Skating',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'activity',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'skating.jpg'
        ]);

        $activity2=ent::create([
            'name'       => 'Laser tag',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'activity',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'laser.jpg'
        ]);

        $activity3=ent::create([
            'name'       => 'Bowling',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'activity',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'bowling.jpg'
        ]);

        $activity4=ent::create([
            'name'       => 'Arcade',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'activity',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'arcade.jpg'
        ]);

        $activity5=ent::create([
            'name'       => 'Drawing',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'activity',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'drawing.jpg'
        ]);

        $movie1=ent::create([
            'name'       => 'Movie 1',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-21',
            'picture'       => 'frozen.jpg'
        ]);

        $movie2=ent::create([
            'name'       => 'Movie 2',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-22',
            'picture'       => 'frozen.jpg'
        ]);

        $movie3=ent::create([
            'name'       => 'Movie 3',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-23',
            'picture'       => 'frozen.jpg'
        ]);

        $movie4=ent::create([
            'name'       => 'Movie 4',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-14',
            'picture'       => 'frozen.jpg'
        ]);

        $movie5=ent::create([
            'name'       => 'Movie 5',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-15',
            'picture'       => 'frozen.jpg'
        ]);

        $movie6=ent::create([
            'name'       => 'Movie 3',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-16',
            'picture'       => 'frozen.jpg'
        ]);

        $movie7=ent::create([
            'name'       => 'Movie 7',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-17',
            'picture'       => 'frozen.jpg'
        ]);

        $movie8=ent::create([
            'name'       => 'Movie 8',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-18',
            'picture'       => 'frozen.jpg'
        ]);

        $movie9=ent::create([
            'name'       => 'Movie 9',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-19',
            'picture'       => 'frozen.jpg'
        ]);

        $movie10=ent::create([
            'name'       => 'Movie 10',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price'       => 20,
            'categorie'       => 'movie',
            'star'       => '10:00 am',
            'end'       => '12:00 pm',
            'places'       => '200',
            'date'       => '2020-05-20',
            'picture'       => 'frozen.jpg'
        ]);

        

    }
}
