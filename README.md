
---

# Digital Signature Application

This is a simple digital signature application built with Laravel as the backend and a front-end using Fetch API. Users can draw their signature on a canvas, and the application saves the signature image to the database.

## Features

- Users can create and save their digital signatures.
- Signatures are stored as images in the database.
- The application uses Laravel for backend processing and validation.
- Frontend is built using HTML, CSS, and JavaScript with the Signature Pad library.

## Requirements

Before running the application, ensure you have the following installed:

- **PHP** (>= 8.3.11)
- **Composer**
- **Node.js** (for the front-end dependencies)
- **npm** (Node Package Manager)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Asajadafsar/Digital-signature.git
   cd my_signature_project
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node.js dependencies:

   ```bash
   npm install signature_pad
   ```

4. Set up your `.env` file by copying the example and modifying it to suit your environment:

   ```bash
   cp .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Run database migrations to create the necessary tables:

   ```bash
   php artisan migrate
   ```

7. Create a symbolic link for the storage folder:

   ```bash
   php artisan storage:link
   ```

## Usage

To run the application, start the local development server:

```bash
php artisan serve
```

Then, open your browser and navigate to:

```
http://localhost:8000/front.html
```

From there, you can enter your signature and save it.

## Contributing

Feel free to fork the repository, make changes, and submit pull requests.

