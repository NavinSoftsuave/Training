
##  Date: 2025-07-16  Day 2 (Part 2)
 
## Topics Covered:

- Middleware Grouping
- Form Request Validation in Controller
- Handling 405 and 419 Errors
- CSRF Token Exception for API Testing


##  Tasks Completed

###  Middleware Grouping
Grouped multiple routes under a middleware to avoid repetition.

### Issue 2: 419 Page Expired
Even after using the correct POST method, Laravel rejected the request and returned a 419 Page Expired error.

#### Why it happened:
By default, Laravel protects all routes in web.php using CSRF (Cross-Site Request Forgery) tokens. Since Postman does not send this token, Laravel treated the request as suspicious and blocked it.

#### How I fixed it:
I opened the VerifyCsrfToken.php middleware file and added /submit-form to the $except array. This told Laravel to skip CSRF token verification for that specific route, which allowed me to test the form successfully using Postman.
