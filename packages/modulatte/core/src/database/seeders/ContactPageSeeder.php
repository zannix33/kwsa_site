<?php
namespace Modulatte\Core\Database\Seeders;

use Modulatte\Core\Database\Seeders\CreatorSeeder;

class ContactPageSeeder extends CreatorSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'contact_nav_text' => 'Contact Us',
            'contact_phone' => '+64 9 835 3800' ,
            'contact_email' => 'dev@brownpaperbag.co.nz',
            'contact_address' =>
                '<p>13 Hargreaves Street<br>St Mary\'s Bay,<br>Auckland</p>',
        ];

        $this->addPageData(3, $data);
    }

}
