# SimplePOS — CodeIgniter 4 MVC Activity

This repository contains a four-page CodeIgniter 4 website for IT0049 Technical Formative Assessment 1. It demonstrates routes, controllers, views, navigation, view data, and `foreach` loops using static PHP arrays. No database is used in this version.

## Pages

| URL | Controller method | Purpose |
| --- | --- | --- |
| `/` | `Pages::home` | Landing page |
| `/about` | `Pages::about` | Project information |
| `/customers` | `Customers::index` | Five customer records |
| `/users` | `Users::index` | Five staff records |

## Requirements

- PHP 8.1 or newer
- Composer 2

## Setup and run

1. Clone or download this repository.
2. Open a terminal inside the project folder.
3. Install dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   **Windows Command Prompt:**

   ```bat
   copy .env.example .env
   ```

   **macOS/Linux:**

   ```bash
   cp .env.example .env
   ```

5. Start the development server:

   ```bash
   php spark serve
   ```

6. Open `http://localhost:8080` in a browser.

## Project structure

- `app/Config/Routes.php` defines the four URLs.
- `app/Controllers` contains the page, customer, and user controllers.
- `app/Views` contains all page templates.
- `public/css/style.css` contains the site styling.
- Customer and user data are temporary arrays inside their controllers.

## Browser checklist

- Visit all four routes and confirm that they load without errors.
- Test every navigation link.
- Confirm that five rows appear on both listing pages.
- Resize the browser to confirm the layout works on a smaller screen.

## Submission note

This activity does not use a database, so there is no database export. If the submission form requires one, include a short note stating: **“No database export is included because the activity requires static PHP arrays as the temporary data source.”**
