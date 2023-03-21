<hr>

## About views


- [About views,](https://github.com/ShehabShaat/example-app/blob/master/resources/views/about.blade.php).


## tasks views


- [tasks views,](https://github.com/ShehabShaat/example-app/blob/master/resources/views/tasks.blade.php).



<hr>

## Database
- Query Builder <br>
to create table past the command in terminal vscode<br>
 `php artisan make:migration create_tasks_table`

 in folder database select migrations folder and select '2023... create_tasks_table'
 in function up() : past this code <br>
          `$table->string('name') -> default('')`
          <br>
            `$table->string('email') -> unique()`
          <br>
            `$table->timestamps();`

    go to phpmyadmin create table and look the setting port,so on .. and configrate it to your project
- ORM.
