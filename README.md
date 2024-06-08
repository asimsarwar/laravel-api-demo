# Laravel API with Job Queue, Database, and Event Handling

## Setup Instructions

1. Clone the repository
2. Run `composer install`
3. Configure your `.env` file
4. Run migrations: `php artisan migrate`
5. Run the queue worker: `php artisan queue:work`
6. Running Unit Tests: `php artisan test`

## Testing the API

- To test the API, send a POST request to `/api/submit` with the following JSON payload:
  ```json
  {
      "name": "John Doe",
      "email": "john.doe@example.com",
      "message": "This is a test message."
  }


### Summary

This project demonstrates how to create a Laravel API with job queues, database operations, and event handling. It includes setting up the environment, creating migrations, handling jobs and events, implementing error handling, and writing unit tests.
