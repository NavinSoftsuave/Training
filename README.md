
Date: 2025-07-20 Day 5
Branch: day-5-part-1

## What I did today
--------------------
- Implemented JWT-based API authentication using tymon/jwt-auth.
- Created API routes:
  - POST /register → Handles user registration.
  - POST /login → Authenticates user and returns JWT token.
  - GET /products → Returns list of products (only for authenticated users).

## Controllers Implemented:
------------------------------
1. AuthController
   - register(): Validates user input, hashes password, and stores user.
   - login(): Verifies credentials and returns a JWT token on success.

2. ProductController
   - index(): Returns all products and the current logged-in user's name (protected by auth middleware).

🧠 Concepts Practiced:
-----------------------
- Laravel API route creation
- Middleware usage (auth:api)
- JWT authentication and token handling
- Secure password hashing
- Try-catch for exception handling
- Getting authenticated user via auth()->user()



