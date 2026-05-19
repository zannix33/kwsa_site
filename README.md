# Modulatte

## Installation

```bash
composer install
cp .env.example .env
```

## Configuration

#### Pages

> Pages Require Two Concepts
> 1. Frontent View --> Used to style and display on a route
> 2. CMS Form  --> Used to define form fields that build the data for the page
>
> To create a page open `AppServiceProvider.php` and in the boot method add an array item to the App\Concepts\Features::pages([]) as shown below:

```bash
Features::pages([
    'Home',
    'About',
]);
```

#### Menu Items adding these items, run `php artisan migrate:fresh --seed`
> This will add the files needed to create the forms, as well as the views to display the data.
> You are free to edit and create whatever you need in these items

#### Menu Items

> To create a menu open `AppServiceProvider.php` and in the boot method add an array item to the App\Concepts\Features::menu([]) as shown below:

```bash
Features::menu([
    'Home' => '/',
    'About' => '/about',
]);
```

> Access in frontend like so

```html
 {!! json_encode(App\Concepts\Features::$menu) !!}
```


## Creating Repeaters

#### Introduction
> Repeaters are like Sections on Modulatte. On Twill, we can't use Block Editors as sections since you can't use multiple Block Editors so we will be creating a custom sections (repeaters).

> Let's assume you are working on a module named "Page" that has a Testimonial section. To create a section you will want to create a corresponding `testimonial` module using the command:
```
php artisan twill:module testimonial
```

The following the command line instructions is to define the module routes and migrate the databases. Twill will ask a few questions to autogenerate the files. Once completed, you can now populate the migration file:

```
Schema::create('testimonials', function (Blueprint $table) {
    // this will create an id, a "published" column, and soft delete and timestamps columns
    createDefaultTableFields($table);
    $table->string('title')->nullable();
    $table->integer('position')->unsigned()->nullable();
    $table->integer('page_id')->unsigned()->nullable();

    // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
    // $table->timestamp('publish_start_date')->nullable();
    // $table->timestamp('publish_end_date')->nullable();
});
```

We added  `page_id` as this is required so we can relate this testimonial to the page module.

