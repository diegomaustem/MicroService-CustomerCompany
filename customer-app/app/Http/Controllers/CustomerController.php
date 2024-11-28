<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showCustomer()
    {
        $customer = [
            [
                'name' => 'John Doe',
                'cnpj' => '12.345.678/0001-90',
                'age' => 35,
                'email' => 'johndoe@example.com',
                'address' => '123 Elm St',
                'city' => 'New York',
                'country' => 'USA'
            ],
            [
                'name' => 'Jane Smith',
                'cnpj' => '98.765.432/0001-21',
                'age' => 28,
                'email' => 'janesmith@example.com',
                'address' => '456 Oak Ave',
                'city' => 'Los Angeles',
                'country' => 'USA'
            ],
            [
                'name' => 'Carlos Oliveira',
                'cnpj' => '11.223.344/0001-55',
                'age' => 42,
                'email' => 'carlos.oliveira@example.com',
                'address' => '789 Pine Blvd',
                'city' => 'São Paulo',
                'country' => 'Brazil'
            ],
            [
                'name' => 'Ana Costa',
                'cnpj' => '33.444.555/0001-77',
                'age' => 29,
                'email' => 'ana.costa@example.com',
                'address' => '101 Main St',
                'city' => 'Rio de Janeiro',
                'country' => 'Brazil'
            ],
            [
                'name' => 'Michael Johnson',
                'cnpj' => '44.555.666/0001-88',
                'age' => 50,
                'email' => 'michael.johnson@example.com',
                'address' => '202 Maple Rd',
                'city' => 'Chicago',
                'country' => 'USA'
            ],
            [
                'name' => 'Emma Wilson',
                'cnpj' => '55.666.777/0001-99',
                'age' => 33,
                'email' => 'emma.wilson@example.com',
                'address' => '303 Birch Dr',
                'city' => 'Miami',
                'country' => 'USA'
            ],
            [
                'name' => 'Lucas Pereira',
                'cnpj' => '66.777.888/0001-00',
                'age' => 26,
                'email' => 'lucas.pereira@example.com',
                'address' => '404 Cedar Ln',
                'city' => 'Curitiba',
                'country' => 'Brazil'
            ],
            [
                'name' => 'Sophie Martin',
                'cnpj' => '77.888.999/0001-11',
                'age' => 39,
                'email' => 'sophie.martin@example.com',
                'address' => '505 Redwood Way',
                'city' => 'Paris',
                'country' => 'France'
            ],
            [
                'name' => 'David Lee',
                'cnpj' => '88.999.000/0001-22',
                'age' => 45,
                'email' => 'david.lee@example.com',
                'address' => '606 Aspen Ct',
                'city' => 'Toronto',
                'country' => 'Canada'
            ],
            [
                'name' => 'Olivia Taylor',
                'cnpj' => '99.000.111/0001-33',
                'age' => 31,
                'email' => 'olivia.taylor@example.com',
                'address' => '707 Willow Dr',
                'city' => 'London',
                'country' => 'UK'
            ]
        ];
        return json_encode($customer);
    }
}
