<!--=============== FONT AWESOME ===============-->
<style>
    /*=============== GOOGLE FONTS ===============*/
    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

    :root {
        --primary-color: #181625;
        --secondary-color: #403c55;
        --to-do: #a876aa;
        --in-progress: #52a0b8;
        --completed: #97b66f;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Montserrat", sans-serif;
        background-color: var(--primary-color);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 90vh;
        overflow: hidden;
        margin: 0;
    }

    .tasks-container {
        display: flex;
        gap: 50px;
    }

    .tasks-container h2 {
        padding-left: 10px;
        line-height: 22px;
    }

    .to-do h2 {
        border-left: 4px solid var(--to-do);
    }

    .in-progress h2 {
        border-left: 4px solid var(--in-progress);
    }

    .completed h2 {
        border-left: 4px solid var(--completed);
    }

    .list {
        display: flex;
        flex-direction: column;
        gap: 15px;
        height: 400px;
        width: 200px;
        transition: 0.2s ease;
    }

    .task {
        position: relative;
        background: var(--secondary-color);
        padding: 10px;
        cursor: grab;
        border-radius: 10px;
    }

    .task h3 {
        margin: 5px 0;
    }

    .icon {
        position: absolute;
        right: 10px;
    }

    .to-do .icon {
        color: var(--to-do);
    }

    .in-progress .icon {
        color: var(--in-progress);
    }

    .completed .icon {
        color: var(--completed);
    }



    .hold {
        border: solid 2px #ccc;
    }

    .hovered {
        background: rgba(255, 255, 255, 0.103);
        border-radius: 10px;
        transition: 0.2s ease;
    }
</style>
@include('partials.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
@if (($data))
<p>Drag and drop a task to change the category</p>
<div class="tasks-container">
    <div class="category to-do">
        <h2>To do</h2>
        <div class="list">


            @foreach($data as $taskid => $task)

            <div class="task" draggable="true">
                <div class="icon"><i class="fa-regular fa-circle"></i></div>
                <h3>{{$taskid}}</h3>
{{$task}}            </div>

@endforeach

        </div>
    </div>
    <div class="category in-progress">
        <h2>In progress</h2>
        <div class="list">

            <div class="task" draggable="true">
                <div class="icon"><i class="fa-solid fa-circle-half-stroke"></i></div>
                <h3>Task 6</h3>
                Lorem ipsum dolor sit amet...
            </div>


        </div>
    </div>
    <div class="category completed">
        <h2>Completed</h2>
        <div class="list"></div>
    </div>
</div>

<script>
    const tasks = document.querySelectorAll(".task");
    const lists = document.querySelectorAll(".list");

    let current = "";

    for (const task of tasks) {
        task.addEventListener("dragstart", dragStart);
        task.addEventListener("dragend", dragEnd);
    }

    for (const list of lists) {
        list.addEventListener("dragover", dragOver);
        list.addEventListener("dragenter", dragEnter);
        list.addEventListener("dragleave", dragLeave);
        list.addEventListener("drop", dragDrop);
    }

    function dragStart() {
        this.className += " hold";
        current = this;
    }

    function dragEnd() {
        this.className = "task";
    }

    function dragOver(e) {
        e.preventDefault();
    }

    function dragEnter(e) {
        e.preventDefault();
        this.classList.add("hovered");
    }

    function dragLeave() {
        this.classList.remove("hovered");
    }

    function dragDrop() {
        this.classList.remove("hovered");
        this.append(current);
        if (this.parentElement.classList.contains("to-do")) {
            current.querySelector(
                ".icon"
            ).innerHTML = `<i class="fa-regular fa-circle"></i>`;
        } else if (this.parentElement.classList.contains("in-progress")) {
            current.querySelector(
                ".icon"
            ).innerHTML = `<i class="fa-solid fa-circle-half-stroke"></i>`;
        } else {
            current.querySelector(
                ".icon"
            ).innerHTML = `<i class="fa-solid fa-circle-check"></i>`;
        }
    }
</script>

@else

<p>Nothing to show</p>

@endif