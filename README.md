# SimplePOS — CodeIgniter 4 MVC

This repository contains a four-page CodeIgniter 4 website for IT0049 Technical Formative Assessment 1. It demonstrates routes, controllers, views, navigation, view data, and `foreach` loops using static PHP arrays. No database is used in this version.

## Pages

| URL | Controller method | Purpose |
| --- | --- | --- |
| `/` | `Pages::home` | Landing page |
| `/about` | `Pages::about` | Project information |
| `/customers` | `Customers::index` | Five customer records |
| `/users` | `Users::index` | Five staff records |

=
## Project structure

- `app/Config/Routes.php` defines the four URLs.
- `app/Controllers` contains the page, customer, and user controllers.
- `app/Views` contains all page templates.
- `public/css/style.css` contains the site styling.
- Customer and user data are temporary arrays inside their controllers.

