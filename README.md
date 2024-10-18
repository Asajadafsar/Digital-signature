
---

# Digital Signature Application

This is a digital signature application built with Laravel for the backend and vanilla JavaScript for the front-end. Users can draw their signatures on a canvas, which are then saved in the database as image files.

## Features

- **Draw Signatures**: Users can draw their signatures on a responsive canvas.
- **Save Signatures**: Signatures are sent to the server via an API and stored in the database.
- **File Storage**: Uploaded signatures are saved as image files in the public storage of the Laravel application.

## Tech Stack

- **Backend**: Laravel
- **Frontend**: HTML, JavaScript (with Fetch API)
- **Database**: MySQL

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/yourusername/digital-signature-app.git
   cd digital-signature-app
   ```

2. **Install Dependencies**:

   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment**:

   Copy the `.env.example` to `.env` and configure your database settings.

   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**:

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**:

   ```bash
   php artisan migrate
   ```

6. **Set Up Storage Link**:

   If you haven't already created a storage link, you can do it with:

   ```bash
   php artisan storage:link
   ```

## Usage

1. Start the Laravel server:

   ```bash
   php artisan serve
   ```

2. Open your browser and go to `http://localhost:8000/front.html` to access the application.

3. Draw your signature on the canvas and click "Save" to submit it.

## API Endpoint

- **POST** `/api/save-signature`: Accepts a JSON object containing the signature image data.

### Example Request

```json
{
  "signature": "data:image/png;base64,iVBORw0K..."
}
```
