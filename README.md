# Day 3 - Part 1  
**Topic**: Model, Migration, and API Resource Controller  

---

### What I Did:
- Created a new model called `Post` using:
  php artisan make:model Post -mc
  This created the model, migration file, and controller.

- In the migration file, I added two fields: `title` (string) and `content` (text).

- Ran php artisan migrate to create the `posts` table.

- In the PostController, I defined basic resource methods:
  - index() – Get all posts
  - store() – Create a new post (with validation)
  - show() – Show a single post
  - update() – Update an existing post
  - destroy() – Delete a post

- Used Route Model Binding for cleaner controller methods.

- Defined the route in routes/api.php using:
  Route::apiResource('posts', PostController::class);

- In the Post model, I added:
  protected $fillable = ['title', 'content'];
  to enable mass assignment.

---

### Postman Testing:
Tested the following API endpoints:
- GET /api/posts
- POST /api/posts
- GET /api/posts/{id}
- PUT /api/posts/{id}
- DELETE /api/posts/{id}

All CRUD operations are working as expected.
