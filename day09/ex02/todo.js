window.onload = function () {

    var todoList = [];
    if (localStorage.getItem('todo') !==undefined) {
        todoList = JSON.parse(localStorage.getItem('todo'));
        out();
    }

    document.getElementById('add').onclick = function () {
        var d = document.getElementById('in').value;

        var temp = {};
        temp.todo = d;
        temp.check = false;
        var i = todoList.length;
        todoList[i] = temp;
        console.log(todoList);
        out();
        localStorage.setItem('todo', JSON.stringify(todoList));
    };
    todoList.onclick = function() {
        this.remove();
    };
    function out() {
        var out='';
        for (var key in todoList) {
            out += todoList[key].todo + '<br>';
            if (todoList[key].check === true) {
                out += '<input type="checkbox" checked><br>';
            }
            else {
                out += '<input type="checkbox">';
            }
        }
        document.getElementById('out').innerHTML = out;
    }
// node.onclick = function() {
//     this.remove();
// };
//     function addClick() {
//           // Removes an element from the document
//             var element = document.getElementById(elementId);
//             element.parentNode.removeChild(element);
//     }
}

// function add() {
//     var todo = prompt("What to do?", "Sleep");
//     if (todo) {
//         var node = document.createElement("div");
//         var par = document.createElement("p");
//         var text = document.createTextNode(todo);
//         par.appendChild(text);
//         node.appendChild(par);
//         node.onclick = function() {
//             this.remove();
//         };
//         var list = document.getElementById('ft_list');
//         list.insertBefore(node, list.firstChild);
//     }
// }