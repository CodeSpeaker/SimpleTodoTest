var app = angular.module('todoList', []);
app.controller('ToDoCtrl', function($scope,$http) {
    $http.get("/item").success(function(todos) {
        $scope.todos = todos;
    });

    $scope.remaining = function() {
        var count = 0;

        angular.forEach($scope.todos,function(todo) {
            count += todo.done ? 0 : 1;
        });

        return count;
    }

    $scope.addNew = function() {
        var todo = {
            text: $scope.todoText,
            done: false
        }

        $scope.todos.push(todo);



        $http.post("item", todo);
    }
});