<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users = [
            [
                'name' => 'Subhan',
                'email' => 'Subhan@example.com',
                'phone_number' => '03212312312',
                'password' => bcrypt('123456'),
            ], [
                'name' => 'Jhon',
                'email' => 'Jhon@example.com',
                'phone_number' => '03112312312',
                'password' => bcrypt('1q#456'),
            ]
        ];
        DB::table('users')->insert($users);
        $countries = [
            ['name' => 'Afghanistan'],
            ['name' => 'Albania'],
            ['name' => 'Algeria'],
            ['name' => 'Andorra'],
            ['name' => 'Angola'],
            ['name' => 'Antigua & Barbuda'],
            ['name' => 'Argentina'],
            ['name' => 'Armenia'],
            ['name' => 'Australia'],
            ['name' => 'Austria'],
            ['name' => 'Azerbaijan'],
            ['name' => 'Bahamas'],
            ['name' => 'Bahrain'],
            ['name' => 'Bangladesh'],
            ['name' => 'Barbados'],
            ['name' => 'Belarus'],
            ['name' => 'Belgium'],
            ['name' => 'Belize'],
            ['name' => 'Benin'],
            ['name' => 'Bhutan'],
            ['name' => 'Bolivia'],
            ['name' => 'Bosnia & Herzegovina'],
            ['name' => 'Botswana'],
            ['name' => 'Brazil'],
            ['name' => 'Brunei'],
            ['name' => 'Bulgaria'],
            ['name' => 'Burkina Faso'],
            ['name' => 'Burundi'],
            ['name' => 'Cambodia'],
            ['name' => 'Cameroon'],
            ['name' => 'Canada'],
            ['name' => 'Cape Verde'],
            ['name' => 'Cayman Islands'],
            ['name' => 'Central African Republic'],
            ['name' => 'Chad'],
            ['name' => 'Chile'],
            ['name' => 'China'],
            ['name' => 'Colombia'],
            ['name' => 'Comoros'],
            ['name' => 'Congo'],
            ['name' => 'Cook Islands'],
            ['name' => 'Costa Rica'],
            ['name' => 'Croatia'],
            ['name' => 'Cuba'],
            ['name' => 'Cyprus'],
            ['name' => 'Czech Republic'],
            ['name' => 'Denmark'],
            ['name' => 'Djibouti'],
            ['name' => 'Dominica'],
            ['name' => 'Dominican Republic'],
            ['name' => 'Ecuador'],
            ['name' => 'Egypt'],
            ['name' => 'El Salvador'],
            ['name' => 'Equatorial Guinea'],
            ['name' => 'Eritrea'],
            ['name' => 'Estonia'],
            ['name' => 'Ethiopia'],
            ['name' => 'Falkland Islands'],
            ['name' => 'Faroe Islands'],
            ['name' => 'Fiji'],
            ['name' => 'Finland'],
            ['name' => 'France'],
            ['name' => 'French Guiana'],
            ['name' => 'French Polynesia'],
            ['name' => 'French Southern Territories'],
            ['name' => 'Gabon'],
            ['name' => 'Gambia'],
            ['name' => 'Georgia'],
            ['name' => 'Germany'],
            ['name' => 'Ghana'],
            ['name' => 'Gibraltar'],
            ['name' => 'Greece'],
            ['name' => 'Greenland'],
            ['name' => 'Grenada'],
            ['name' => 'Guadeloupe'],
            ['name' => 'Guam'],
            ['name' => 'Guatemala'],
            ['name' => 'Guernsey'],
            ['name' => 'Guinea'],
            ['name' => 'Guinea-Bissau'],
            ['name' => 'Guyana'],
            ['name' => 'Haiti'],
            ['name' => 'Heard Island and McDonald Islands'],
            ['name' => 'Holy See'],
            ['name' => 'Honduras'],
            ['name' => 'Hong Kong'],
            ['name' => 'Hungary'],
            ['name' => 'Iceland'],
            ['name' => 'India'],
            ['name' => 'Indonesia'],
            ['name' => 'Iran'],
            ['name' => 'Iraq'],
            ['name' => 'Ireland'],
            ['name' => 'Isle of Man'],
            ['name' => 'Israel'],
            ['name' => 'Italy'],
            ['name' => 'Jamaica'],
            ['name' => 'Japan'],
            ['name' => 'Jersey'],
            ['name' => 'Jordan'],
            ['name' => 'Kazakhstan'],
            ['name' => 'Kenya'],
            ['name' => 'Kiribati'],
            ['name' => 'Kuwait'],
            ['name' => 'Kyrgyzstan'],
            ['name' => 'Laos'],
            ['name' => 'Latvia'],
            ['name' => 'Lebanon'],
            ['name' => 'Lesotho'],
            ['name' => 'Liberia'],
            ['name' => 'Libya'],
            ['name' => 'Liechtenstein'],
            ['name' => 'Lithuania'],
            ['name' => 'Luxembourg'],
            ['name' => 'Macao'],
            ['name' => 'Macedonia'],
            ['name' => 'Madagascar'],
            ['name' => 'Malawi'],
            ['name' => 'Malaysia'],
            ['name' => 'Maldives'],
            ['name' => 'Mali'],
            ['name' => 'Malta'],
            ['name' => 'Marshall Islands'],
            ['name' => 'Martinique'],
            ['name' => 'Mauritania'],
            ['name' => 'Mauritius'],
            ['name' => 'Mayotte'],
            ['name' => 'Mexico'],
            ['name' => 'Micronesia'],
            ['name' => 'Moldova'],
            ['name' => 'Monaco'],
            ['name' => 'Mongolia'],
            ['name' => 'Montenegro'],
            ['name' => 'Montserrat'],
            ['name' => 'Morocco'],
            ['name' => 'Mozambique'],
            ['name' => 'Myanmar'],
            ['name' => 'Namibia'],
            ['name' => 'Nauru'],
            ['name' => 'Nepal'],
            ['name' => 'Netherlands'],
            ['name' => 'New Caledonia'],
            ['name' => 'New Zealand'],
            ['name' => 'Nicaragua'],
            ['name' => 'Niger'],
            ['name' => 'Nigeria'],
            ['name' => 'Niue'],
            ['name' => 'Norfolk Island'],
            ['name' => 'North Korea'],
            ['name' => 'Northern Mariana Islands'],
            ['name' => 'Norway'],
            ['name' => 'Oman'],
            ['name' => 'Pakistan'],
            ['name' => 'Palau'],
            ['name' => 'Palestine'],
            ['name' => 'Panama'],
            ['name' => 'Papua New Guinea'],
            ['name' => 'Paraguay'],
            ['name' => 'Peru'],
            ['name' => 'Philippines'],
            ['name' => 'Poland'],
            ['name' => 'Portugal'],
            ['name' => 'Puerto Rico'],
            ['name' => 'Qatar'],
            ['name' => 'Reunion'],
            ['name' => 'Romania'],
            ['name' => 'Russia'],
            ['name' => 'Rwanda'],
            ['name' => 'Saint Kitts and Nevis'],
            ['name' => 'Saint Lucia'],
            ['name' => 'Saint Vincent and the Grenadines'],
            ['name' => 'Samoa'],
            ['name' => 'San Marino'],
            ['name' => 'Sao Tome and Principe'],
            ['name' => 'Saudi Arabia'],
            ['name' => 'Senegal'],
            ['name' => 'Serbia'],
            ['name' => 'Seychelles'],
            ['name' => 'Sierra Leone'],
            ['name' => 'Singapore'],
            ['name' => 'Slovakia'],
            ['name' => 'Slovenia'],
            ['name' => 'Solomon Islands'],
            ['name' => 'Somalia'],
            ['name' => 'South Africa'],
            ['name' => 'South Korea'],
            ['name' => 'South Sudan'],
            ['name' => 'Spain'],
            ['name' => 'Sri Lanka'],
            ['name' => 'Sudan'],
            ['name' => 'Suriname'],
            ['name' => 'Swaziland'],
            ['name' => 'Sweden'],
            ['name' => 'Switzerland'],
            ['name' => 'Syria'],
            ['name' => 'Taiwan'],
            ['name' => 'Tajikistan'],
            ['name' => 'Tanzania'],
            ['name' => 'Thailand'],
            ['name' => 'Togo'],
            ['name' => 'Tonga'],
            ['name' => 'Trinidad and Tobago'],
            ['name' => 'Tunisia'],
            ['name' => 'Turkey'],
            ['name' => 'Turkmenistan'],
            ['name' => 'Turks and Caicos Islands'],
            ['name' => 'Tuvalu'],
            ['name' => 'Uganda'],
            ['name' => 'Ukraine'],
            ['name' => 'United Arab Emirates'],
            ['name' => 'United Kingdom'],
            ['name' => 'United States'],
            ['name' => 'Uruguay'],
            ['name' => 'Uzbekistan'],
            ['name' => 'Vanuatu'],
            ['name' => 'Vatican City'],
            ['name' => 'Venezuela'],
            ['name' => 'Vietnam'],
            ['name' => 'Yemen'],
            ['name' => 'Zambia'],
            ['name' => 'Zimbabwe'],
        ];
        DB::table('countries')->insert($countries);
        $addresses = [
            [
                'house_number' => 'ad3ws',
                'street' => 'Ad',
                'state' => 'South',
                'city' => 'sawart',
                'address_line' => 'asdwfcq314e',
                'country_id' => 123,
                'postal_code' => '123Er23',
            ],
            [
                'house_number' => 'oioiolk',
                'street' => 'mp8I',
                'state' => 'ver',
                'city' => 'asioua',
                'address_line' => '*&@*YOHk',
                'country_id' => 13,
                'postal_code' => '123448',
            ],
        ];
        DB::table('addresses')->insert($addresses);
        $customer_locations = [
            [
                'user_id' => 1,
                'address_id' => 1,
                'type' => 'private',
                'status' => 1
            ],
            [
                'user_id' => 2,
                'address_id' => 2,
                'type' => null,
                'status' => 1
            ]
        ];
        DB::table('customer_locations')->insert($customer_locations);
    }
}
