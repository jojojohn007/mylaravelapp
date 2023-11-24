<style>
    * {
        font-family: 'Nunito', sans-serif;
    }

    html {
        padding: 0px;
        margin: 0px;
    }

    body {
        padding: 0px;
        height: calc(100vh - 40px);
        margin: 0px;
        background-color: #A9C9FF;

        background-image: linear-gradient(236deg, #A9C9FF 0%, #FFBBEC 100%);


        padding: 0px;
        margin: 0px;
    }

    #tasks {
        background-color: rgba(255, 255, 255, 0.7);
        width: 70%;
        border-radius: 20px;
        min-width: 200px;
        margin: 40px auto;
        padding: 30px;
    }

    .title {
        color: rgba();
        padding: 0px;
        margin: 0px;
        font-weight: 200;
        font-size: 25pt;
        color: #c2a4c4;
    }

    .subtitle {
        margin-top: 0px;
        font-weight: 800;
        color: #a683a8;
    }

    #title,
    #description {
        border: 0px;
        line-height: 35px;
        padding-left: 15px;
        width: calc(85% - 16px);
        float: left;
        border-radius: 100pt 100pt 100pt 100pt;
        margin: 12px;
    }

    .inputbutton {
        border: 0px;
        line-height: 35px;
        padding-left: 15px;
        width: calc(20% - 16px);
        float: left;
        border-radius: 100pt 100pt 100pt 100pt;
        margin: 12px;
    }

    .submit_button {
        border: 0px;
        color: #5a8de1;
        width: 15%;
        background-color: #A9C9FF;
        margin-left: -5px;
        line-height: 37px;
        border-radius: 100pt 100pt 100pt 100pt;
        font-weight: 800;
        font-size: 20pt;
        margin: 12px;

    }

    .save_button {
        font-size: 18px;
        border: 0px;
        color: #5a8ddd;
        width: 15%;
        background-color: #A9C9FF;
        margin-left: -5px;
        line-height: 37px;
        border-radius: 100pt 100pt 100pt 100pt;
        font-weight: 800;
        margin: 12px;

    }

    .chorestyle {
        border-radius: 5px;
        display: inline-block;
        width: 75%;
        background: white;
        padding: 15px;
        line-height: 15px;
        margin: 5px;
        color: rgba(0, 0, 0, 0.6);
        font-weight: 200;
        box-shadow: 4px 4px rgba(0, 0, 0, 0.2);
    }

    .choreButton {
        margin-left: -5px;
        border: 0px;
        background: #e7e7e7;
        border-radius: 10pt 100pt 100pt 10pt;
        font-size: 13pt;
    }

    #err {
        color: #eea4de;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700&display=swap" rel="stylesheet">
<div id="tasks" >
     <h2 class="title">TODO LIST</h2>
    <p class="subtitle">Add a new task</p>
    <div>
     <input id="title" type="text" placeholder="Title"></input>
        <input id="description" type="text" placeholder="Description"></input>
    </div>
    <br>
    <button class="submit_button" onclick="addTask()">+</button>
    <form action="/addtask" method="post">
        @csrf
        @method('PUT')

        <div id="usertaskdetails">

        </div>
        <button class="save_button">save</button>

    </form>

    <p id="err"></p>

</div>

<div>

</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    //i use this counter to make unique IDs
    var i = 0;

    //add Task
    function addTask() {
        var checkValue = document.getElementById("title").value;
        //check if textbox is empty
        if (checkValue.trim() == "") {
            //printing error messege
            document.getElementById("err").innerHTML = "*fill the input";
        }
        //creating new task
        else {
            //removes error message
            document.getElementById("err").innerHTML = "";
            //get parent node
            var prntElement = document.getElementById("tasks");
            var formElement = document.getElementById('usertaskdetails');

            //Create div tag
            var divtag = document.createElement("div");
            divtag.setAttribute("id", "div" + i);
            divtag.setAttribute("class", "chorestyle");

            divtag.innerHTML = (`<input type='text' class='tasktitle readonly inputbutton' name='title${i}' value='${   document.getElementById("title").value }' >`)
            divtag.innerHTML += (`<input type='text' readonly class='taskdescription inputbutton' name='description${i}' value = '${  document.getElementById("description").value }' >`)

            // var node = document.createTextNode("■ " + document.getElementById("title").value);
            // var node2 = document.createTextNode("■ " + document.getElementById("description").value);

            // divtag.appendChild(node);
            // divtag.appendChild(node2);

            //Create button
            var btnnode = document.createTextNode("X");
            var btntg = document.createElement("button");
            btntg.setAttribute("id", i);
            btntg.setAttribute("class", "choreButton");
            btntg.setAttribute("onclick", "removeTask(this)");
            btntg.appendChild(btnnode);

            //append div & button to parent node
            var br = document.createElement("br");
            br.setAttribute("id", "nxtline" + i);
            formElement.appendChild(divtag);
            prntElement.appendChild(btntg);
            prntElement.appendChild(br);

            //empty the input
            document.getElementById("title").value = "";
            document.getElementById("description").value = "";


            //increment the counter
            i++;

        }
    }
    //remove a task
    function removeTask(e) {
        var div = document.getElementById("div" + e.id);
        var br = document.getElementById("nxtline" + e.id);
        var prntElement = document.getElementById("tasks");
        prntElement.removeChild(div);
        prntElement.removeChild(br);
        e.remove();
    }

    // //db
    // let savebtn = document.querySelector('.save_button')
    // savebtn.addEventListener('click', function() {


    //     axios({
    //         method: "PUT",
    //         url: "../addtask",
    //         headers: {
    //             "Content-Type": "application/json",
    //         }
    //     }).then(function(response) {
    //         console.log(response.data);

    //     }).catch(function(response) {
    //         console.log(response);
    //     });

    // });
</script>