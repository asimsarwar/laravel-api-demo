# Laravel API with Job Queue, Database, and Event Handling

## Setup Instructions

1. Clone the repository
2. Run `composer install`
3. Configure your `.env` file
4. Run migrations: `php artisan migrate`
5. Run the queue worker: `php artisan queue:work`

## Testing the API

- To test the API, send a POST request to `/api/submit` with the following JSON payload:
  ```json
  {
      "name": "John Doe",
      "email": "john.doe@example.com",
      "message": "This is a test message."
  }
