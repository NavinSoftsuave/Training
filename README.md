Day 4 - Part 2: Manual Blog App Authentication

Topics Covered:
- Manual authentication system without using Breeze/Fortify
- Login and Register forms using Blade
- Session handling for login/logout
- Redirect protection using session check
- Hashing passwords securely
- Simple route controller mapping

 ## Routes Implemented:
GET     /login         → Show login form  
POST    /login         → Authenticate user  
GET     /register      → Show register form  
POST    /register      → Register new user  
GET     /home          → Homepage (requires login)  
GET     /logout        → Clear session and redirect to login  


🧪 Testing Done:
- Registered new user via /register ✔
- Logged in using correct credentials ✔
- Failed login shows error ✔
- Redirects to /home only if logged in ✔
- Logout clears session ✔



