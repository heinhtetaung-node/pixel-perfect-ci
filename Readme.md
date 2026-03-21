# Pixel Perfect CI

This repository contains a CodeIgniter 4 implementation of a frontend homepage with a responsive, semantic, and JSON-driven homepage.

## Tech Stack

- PHP 8+
- CodeIgniter 4
- Bootstrap 5.3
- Custom modular CSS
- JSON data source for dynamic content blocks

## Project Structure

- `ci4-app/app/Controllers/Home.php` - homepage controller, loads JSON data and passes it to the view
- `ci4-app/app/Data/homepage.json` - simulated data source
- `ci4-app/app/Views/home.php` - semantic, responsive template
- `ci4-app/public/assets/css/styles.css` - custom styling layer
- `ci4-app/app/Config/Routes.php` - route mapping for `/`
- `QA_CHECKLIST.md` - QA and validation checklist

## Setup

1. Install dependencies:

```bash
cd ci4-app
composer install
```

2. Create environment file:

```bash
cp env .env
```

3. Run local server:

```bash
php spark serve
```

4. Open the app:

- [http://localhost:8080](http://localhost:8080)

## Notes

- Content is driven by `app/Data/homepage.json`.
- Update JSON values to change text blocks without editing the view.
- Bootstrap is loaded from CDN and extended with `public/assets/css/styles.css`.
Full-Stack Web Developer

