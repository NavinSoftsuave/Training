
##  Date: 2025-07-16 - Day 2 (Part 1)
##  Topics: Controllers & Middleware


## Tasks Completed:

- Created controller using `php artisan make:controller PageController`
- Moved routing logic from `web.php` to controller
- Created custom middleware using `php artisan make:middleware BlockUserMiddleware`
- Applied middleware to routes
- Tested conditional blocking using request parameters

## Testing URLs:

http://localhost:8000/ → Controller response

http://localhost:8000/user/5 → Controller with parameter

http://localhost:8000/check-user?block=yes → Blocked by middleware

http://localhost:8000/check-user?block=no → Allowed