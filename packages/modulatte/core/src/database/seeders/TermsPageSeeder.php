<?php
namespace Modulatte\Core\Database\Seeders;

class TermsPageSeeder extends CreatorSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'terms_content' => '<p>In nibh est, commodo a lorem ut, dignissim sagittis velit. Fusce suscipit sed mauris ut volutpat. Nulla facilisi. Etiam semper, diam at eleifend efficitur, dui mauris imperdiet neque, quis suscipit nunc urna nec mi. Etiam est leo, viverra id justo a, accumsan pharetra turpis. Maecenas non sem posuere erat dignissim venenatis. Sed ut blandit nulla. Suspendisse a nunc eget tellus pretium dapibus et non augue. Donec dictum tristique augue, vitae mollis lacus ultrices in. Cras consequat tortor eget enim tempor tincidunt. Aenean scelerisque, felis at rutrum dictum, augue leo faucibus justo, sit amet semper nunc dolor non nunc. Duis posuere dolor vel magna facilisis interdum.</p>
                <p>Sed eget facilisis lorem. Morbi lacinia risus magna, id cursus ipsum vehicula eget. Nullam maximus arcu at ligula sagittis varius id sed erat. Proin sodales pellentesque sollicitudin.</p>',
            'terms_nav_text' => 'Terms & Conditions',
        ];

        $this->addPageData(4, $data);
    }
}
