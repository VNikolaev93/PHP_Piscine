var ft_list;
var cookie = [];
var color = {0: 'skyblue', 1: 'darkblue', 2: 'pink'};
var todocolor = 0;

window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
};

window.onunload = function () {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
};





function newTodo(){
    var todo = prompt("Add new task?", '');
    todocolor++;
    if (todocolor > 2) {
        todocolor = 0;
    }
    if (todo !== '') {
        addTodo(todo)
    }
}

function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
    if (todocolor > 2) {
        todocolor = 0;
    }
    todo.color.backgroundColor = color[todocolor];
}

function deleteTodo(){
    if (confirm("Do you want to delete the task?")){
        this.parentElement.removeChild(this);
    }
}















// window.onload = function () {
//
//     var todoList = [];
//     if (localStorage.getItem('todo') !==undefined) {
//         todoList = JSON.parse(localStorage.getItem('todo'));
//         out();
//     }
//
//     document.getElementById('add').onclick = function () {
//         var d = document.getElementById('in').value;
//
//         var temp = {};
//         temp.todo = d;
//         temp.check = false;
//         var i = todoList.length;
//         todoList[i] = temp;
//         console.log(todoList);
//         out();
//         localStorage.setItem('todo', JSON.stringify(todoList));
//     };
//     todoList.onclick = function() {
//         this.remove();
//     };
//     function out() {
//         var out='';
//         for (var key in todoList) {
//             out += todoList[key].todo + '<br>';
//             if (todoList[key].check === true) {
//                 out += '<input type="checkbox" checked><br>';
//             }
//             else {
//                 out += '<input type="checkbox">';
//             }
//         }
//         document.getElementById('out').innerHTML = out;
//     }
// // node.onclick = function() {
// //     this.remove();
// // };
// //     function addClick() {
// //           // Removes an element from the document
// //             var element = document.getElementById(elementId);
// //             element.parentNode.removeChild(element);
// //     }
// }
//
// // function add() {
// //     var todo = prompt("What to do?", "Sleep");
// //     if (todo) {
// //         var node = document.createElement("div");
// //         var par = document.createElement("p");
// //         var text = document.createTextNode(todo);
// //         par.appendChild(text);
// //         node.appendChild(par);
// //         node.onclick = function() {
// //             this.remove();
// //         };
// //         var list = document.getElementById('ft_list');
// //         list.insertBefore(node, list.firstChild);
// //     }
// // }