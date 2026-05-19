# Installation

---

All Config is done in the register section of `app/Providers/AppServiceProvider.php`
This will enable and disable features as needed. 

By Default it looks like this 

```php
    PageSettings::pages([
        'Home',
        'About',
        'Contact',
    ]);

    // Configure Articles
    ArticleSettings::hasArticles(true);
    if (ArticleSettings::$hasArticles) {
        ArticleSettings::categories([
            'Category 1',
            'Category 2',
        ]);
    }

    // Configure Products
    ProductsSettings::hasProducts(true);
    if (ProductsSettings::$hasProducts) {
        ProductsSettings::categories([
            'Products 1',
            'Products 2',
        ]);
    }

    FormSettings::hasForms(true);
    if (FormSettings::$hasForms) {
        FormSettings::forms([
            'Contact',
        ]);
    }
    
    GlobalSettings::socials([
        'facebook',
    ]);
```

Once configured with default values. 

run ```php artisan migrate:fresh --seed```

This will build all HTML forms and Pages that are ready to be styled. The Admin forms can use the twill defaults to build whatever is needed. 




