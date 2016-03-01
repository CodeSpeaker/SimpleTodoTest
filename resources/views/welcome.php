<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body ng-app="todoList">
        <div class="container">
            <div class="content">
                <div id="todos" ng-controller="ToDoCtrl">
                    <h3 class="page-header">
                        Todos
                        <small ng-if="remaining()">({{remaining()}}) remaining</small>
                    </h3>
                    <input type="text" ng-model="search">
                    <ul class="unstyled">
                        <li ng-repeat="todo in todos | filter:search">
                            <input type="checkbox" ng-model="todo.done">
                            {{ todo.text }}
                        </li>
                    </ul>
                    <h3 class="page-header">Add new</h3>
                    <form ng-submit="addNew()">
                        <input type="text" ng-model="todoText">
                        <button type="submit" class="btn btn-primary">Add New</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="js/App.js"></script>
    </body>
</html>
