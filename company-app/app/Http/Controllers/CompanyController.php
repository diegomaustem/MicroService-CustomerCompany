<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showCompany() 
    {
        $company = [
            [
                'name' => 'Tech Solutions Ltda.',
                'inscription' => '12345678000123',
                'description' => 'A company specialized in technological solutions for businesses across various sectors.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Global Innovators S.A.',
                'inscription' => '98765432000187',
                'description' => 'Consulting and services in technological innovation for the global market.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Alpha Industries',
                'inscription' => '11122233000145',
                'description' => 'An industry focused on manufacturing high-precision equipment.',
                'situation' => 'Inactive'
            ],
            [
                'name' => 'Beta Enterprises',
                'inscription' => '44455566000199',
                'description' => 'A company providing solutions for the renewable energy market.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Delta Group',
                'inscription' => '22233344000111',
                'description' => 'A business group with investments in various sectors, including technology and healthcare.',
                'situation' => 'Active'
            ],
            [
                'name' => 'OmniTech Solutions',
                'inscription' => '55566677000165',
                'description' => 'IT consultancy and software development services for companies.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Epsilon Enterprises',
                'inscription' => '88899910000132',
                'description' => 'A business focused on developing solutions for the logistics sector.',
                'situation' => 'Inactive'
            ],
            [
                'name' => 'Zeta Logistics',
                'inscription' => '33344455000176',
                'description' => 'A logistics and transportation service provider for large corporations.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Sigma Manufacturing',
                'inscription' => '77788899000153',
                'description' => 'A manufacturer of industrial precision components for automation.',
                'situation' => 'Active'
            ],
            [
                'name' => 'Omega Innovations',
                'inscription' => '66677788000198',
                'description' => 'A company focused on innovation and development of new technological products.',
                'situation' => 'Active'
            ]
        ];

        return json_encode($company);   
    }
}
