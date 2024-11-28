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
                'cnpf' => '12345678901',
                'age' => 34,
                'address' => '123 Main Street, Springfield, IL',
                'situation' => 'Active'
            ],
            [
                'name' => 'Jane Smith',
                'cnpf' => '98765432100',
                'age' => 29,
                'address' => '456 Oak Avenue, Los Angeles, CA',
                'situation' => 'Active'
            ],
            [
                'name' => 'Michael Johnson',
                'cnpf' => '11122334455',
                'age' => 42,
                'address' => '789 Pine Road, Miami, FL',
                'situation' => 'Inactive'
            ],
            [
                'name' => 'Emily Davis',
                'cnpf' => '66778899000',
                'age' => 31,
                'address' => '101 Maple Lane, Seattle, WA',
                'situation' => 'Active'
            ],
            [
                'name' => 'Chris Wilson',
                'cnpf' => '33445566789',
                'age' => 28,
                'address' => '202 Birch Boulevard, Austin, TX',
                'situation' => 'Inactive'
            ],
            [
                'name' => 'Sarah Brown',
                'cnpf' => '99887766554',
                'age' => 25,
                'address' => '303 Cedar Street, Boston, MA',
                'situation' => 'Active'
            ],
            [
                'name' => 'David Martinez',
                'cnpf' => '11223344556',
                'age' => 38,
                'address' => '404 Redwood Drive, San Francisco, CA',
                'situation' => 'Active'
            ],
            [
                'name' => 'Olivia Anderson',
                'cnpf' => '22334455667',
                'age' => 40,
                'address' => '505 Willow Road, Chicago, IL',
                'situation' => 'Inactive'
            ],
            [
                'name' => 'Daniel Taylor',
                'cnpf' => '33445566777',
                'age' => 23,
                'address' => '606 Elm Avenue, Dallas, TX',
                'situation' => 'Active'
            ],
            [
                'name' => 'Sophia Thomas',
                'cnpf' => '44556677888',
                'age' => 35,
                'address' => '707 Pine Street, New York, NY',
                'situation' => 'Active'
            ]
        ];
        return json_encode($customer);
    }
}