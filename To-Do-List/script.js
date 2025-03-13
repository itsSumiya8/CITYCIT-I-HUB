function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskList = document.getElementById("taskList");

    if (taskInput.value.trim() === "") return;

    const li = document.createElement("li");
    li.innerHTML = ` ${taskInput.value} 
    <div class="taskbuttons">
<button class="done-btn" onclick="markAsDone(this)">Done</button>
<button class="delete-btn" onclick="deleteTask(this)">Delete</button>
</div>
`;
        

    taskList.appendChild(li);
    taskInput.value = "";
}

function markAsDone(button) {
    const li = button.parentElement.parentElement;

    li.style.color = "green";


    button.style.backgroundColor = "green";
    button.style.color = "white";
    button.disabled = true;
}

function deleteTask(button) {
    const li = button.parentElement.parentElement; // Waxay raadineysaa li-ga weyn
    li.remove(); // Waxay tirtireysaa qoraalka oo dhan
}




