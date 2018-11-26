<h2>laravel-todo-api's</h2>

<b>Run this commads serially</b>
<p>Create a database named "lara-todo" and configure it in .env file</p>
<ul>
    <li>composer update</li>
    <li>php artisan key:generate</li>
    <li>php artisan migrate</li>
</ul>

<b>Now run this command in terminal:</b>

<ul>
    <li>php artisan serve</li>
</ul>

<p>A todo item have a title(string) and completed(boolean)</p>

<b>Api lists of a todo app: </b>
<p>All todos item list: <a target='_blank' href="">http://localhost:8000/api/todos</a>(GET Request)</p>
<p>Create new todo item: <a target='_blank' href="">http://localhost:8000/api/todos</a>(POST Request)</p>
<p>Update a todo item: <a target='_blank' href="">http://localhost:8000/api/todos/{id}</a>(POST Request)</p>
<p>Delete a todo item: <a target='_blank' href="">http://localhost:8000/api/todos/delete/{id}</a>(POST Request)</p>
<p>All completed todo item: <a target='_blank' href="">http://localhost:8000/api/todos/completed</a>(GET Request)</p>
<p>All undone todo item: <a target='_blank' href="">http://localhost:8000/api/todos/undone</a>(GET Request)</p>
