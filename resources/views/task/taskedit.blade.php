<style>
    body {
        background-color: #ffd1b2;
        height: calc(100vh - 16px) !important;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Open Sans', sans-serif;
    }

    #wrapper {
        margin: auto;
        background-color: #273f4a;
        width: 430px;
        height: 400px;
        overflow: auto;
    }

    #header {
        background-color: #fb595b;
        color: white;
        padding: 1em;
        padding-left: 2em;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #content {
        padding-top: 1em;
        padding-left: 2em;
        padding-right: 2em;
        padding-bottom: 1em;
    }

    #title {
        color: rgba(255, 255, 255, 1);
        background-color: transparent;
        border-style: none;
        border-bottom: 0.5px solid rgba(0, 0, 0, 0.37);
        font-size: 1.05em;
        font-weight: 100;
        margin-top: 0.2em;
        width: 100%;
        padding-bottom: 0.5em;
        outline: none;
        transition: all 0.3s;
    }

    #title:focus {
        border-style: none;
        border-bottom: 0.5px solid rgba(254, 69, 70, 1);
    }

    #triangle-bottomright {
        width: 0;
        height: 0;
        border-bottom: 7px solid rgb(255, 91, 93);
        border-left: 7px solid transparent;
        margin-left: calc(100% - 5px);
        margin-top: -9px;
        margin-bottom: 1.6em;
    }

    #editor {
        background-color: #1b2f39;
        height: 150px;
        color: white;
        border: none;
    }


    #footer {
        margin-top: 1em;
    }

    #footer-left {
        float: left;
    }

    #footer-right {
        float: right;
    }

    #footer-right button:last-child {
        margin-right: 0px !important;
        padding-right: 0px !important;

    }

    /* Buttons */

    .btn {
        border: none;
        padding-left: 1em;
        padding-right: 1em;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
        font-size: 1em;
        text-transform: uppercase;
        transition: 0.3s;
    }

    .btn:hover {
        cursor: pointer;
    }

    .btn-primary {
        background-color: rgb(255, 91, 93);
        color: white;
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    .btn-primary:hover {
        background-color: rgb(255, 70, 72);
    }

    .btn-secondary {
        background-color: transparent;
        color: rgba(255, 255, 255, 0.4);
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    .btn-secondary:hover {
        color: rgba(255, 255, 255, 0.7);
    }

    .fa-trash-alt {
        font-size: 1.3em;
    }

    /* File input */

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .inputfile+label {
        font-size: 1.25em;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.4);
        display: inline-block;
        transition: 0.3s;
    }

    .inputfile:focus+label,
    .inputfile+label:hover {
        color: rgba(255, 255, 255, 0.7);
        cursor: pointer;

    }

    .fa-paperclip {
        transform: rotate(-45deg);
    }

    /* Page Header */
    #pageHeader {
        position: fixed;
        top: -200px;
        right: -200px;
        width: 300px;
        height: 300px;
        cursor: pointer;
        transition: 0.3s;
        background-color: rgba(250, 88, 91, 0.86);
        transform: rotate(45deg);
        font-size: 1.2em;

    }

    #pageHeader:hover {
        background-color: rgba(250, 88, 91, 0.86);
        top: -190px;
        right: -190px;
    }

    #pageHeader button {
        padding: 0px;
        width: 100%;
        text-align: center;
        margin-top: 0;
        margin-left: 0;
        position: absolute;
        bottom: 1em;
        left: auto;
        right: auto;
        outline: none;

    }

    #pageHeader:hover button {
        color: #ffffff;
    }

    /* Page Footer */
    #pageFooter {
        position: fixed;
        bottom: 0em;
        color: rgb(195, 147, 115);
        font-weight: 100;
        background-color: #ffd1b2;
        text-align: center;
        width: 100%;
        padding-top: 0.5em;
        padding-bottom: 0.5em;

    }

    #pageFooter a {
        color: rgb(180, 122, 83);
        text-decoration: none;
        font-weight: 300;
        transition: 0.3s;
    }

    #pageFooter a:hover {
        color: rgb(149, 99, 66);
        text-decoration: none;
        font-weight: 300;
    }

    /* Quill toolbar */
    .ql-toolbar {
        background-color: #2d4a5a;
        stroke: white;
        text-align: center;
        border: none !important;
    }

    .ql-toolbar button {
        margin-left: 10px;
        margin-right: 10px;

    }

    .ql-snow .ql-fill,
    .ql-snow .ql-stroke.ql-fill {
        fill: white;
    }

    .ql-snow .ql-picker {
        color: white;
    }

    .ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-stroke {
        stroke: white;
    }

    .ql-snow .ql-toolbar.snow,
    .ql-snow .ql-stroke {
        stroke: white;
    }


    .ql-snow.ql-toolbar button:hover .ql-fill,
    .ql-snow .ql-toolbar button:hover .ql-fill,
    .ql-snow.ql-toolbar button.ql-active .ql-fill,
    .ql-snow .ql-toolbar button.ql-active .ql-fill,
    .ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill,
    .ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill,
    .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill,
    .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill,
    .ql-snow.ql-toolbar .ql-picker-item:hover .ql-fill,
    .ql-snow .ql-toolbar .ql-picker-item:hover .ql-fill,
    .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-fill,
    .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-fill,
    .ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill,
    .ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill,
    .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
    .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
    .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
    .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill,
    .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
        fill: grey;
    }

    .ql-snow.ql-toolbar button:hover .ql-stroke,
    .ql-snow .ql-toolbar button:hover .ql-stroke,
    .ql-snow.ql-toolbar button.ql-active .ql-stroke,
    .ql-snow .ql-toolbar button.ql-active .ql-stroke,
    .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke,
    .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke,
    .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke,
    .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke,
    .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke,
    .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke,
    .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
    .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
    .ql-snow.ql-toolbar button:hover .ql-stroke-mitter,
    .ql-snow .ql-toolbar button:hover .ql-stroke-mitter,
    .ql-snow.ql-toolbar button.ql-active .ql-stroke-mitter,
    .ql-snow .ql-toolbar button.ql-active .ql-stroke-mitter,
    .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-mitter,
    .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-mitter,
    .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-mitter,
    .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-mitter,
    .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke-mitter,
    .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke-mitter,
    .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-mitter,
    .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-mitter {
        stroke: grey;
    }

    .ql-editor.ql-blank::before {
        color: rgba(255, 99, 71, 0.6);
    }

    .noselect {
        cursor: default;
        -webkit-touch-callout: none;
        /* iOS Safari */
        -webkit-user-select: none;
        /* Safari */
        -khtml-user-select: none;
        /* Konqueror HTML */
        -moz-user-select: none;
        /* Old versions of Firefox */
        -ms-user-select: none;
        /* Internet Explorer/Edge */
        user-select: none;
        /* Non-prefixed version, currently
                                  supported by Chrome, Opera and Firefox */
    }

  
</style>
<div id="pageHeader" onclick="about()">
    <button class="btn btn-secondary"><i class="fas fa-question-circle"></i></button>
</div>
<div id="wrapper">

    <div id="header" class="noselect">
        New Entry
    </div>
    <form id="content" method="POST" action="/edit/{{$task->id}}">
        @csrf
        @method('put')
        <input id="title" type="text" name="title" value="{{$task->title}}" placeholder="Your title here..."></input>
        <div id="triangle-bottomright"></div>
        <div>
            <textarea name="description" id="editor" cols="30" rows="10">{{$task->description}}</textarea>
        </div>
        <div id="footer">
            <div id="footer-left">
                <button class="btn btn-primary" onclick="post(this)">Save</button>
                <input type="file" name="file" id="file" class="inputfile" accept='text/*' onchange="fileChange(this)" />
                <label for="file"><i class="fas fa-paperclip"></i></label>

            </div>
            <div id="footer-right">
                <button class="btn btn-secondary" onclick="trash()">
                    <i class="far fa-trash-alt"></i>
                </button>
            </div>
        </div>
</form>
</div>
<div id="pageFooter">
    Design completely taken from <a href="https://dribbble.com/shots/1052480-Post-New-Entry" target="_blank">this lovely <i class="fab fa-dribbble"></i> shot</a> by <a href="https://dribbble.com/ramil" target="_blank">Ramil</a>
</div>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline'],
        [{
            align: ''
        }, {
            align: 'center'
        }, {
            align: 'right'
        }]
    ];

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    function fileChange(e) {

        var fileInput = e;
        var file = fileInput.files[0];
        var textType = /text.*/;
        var filename = file.name;
        if (file.type.match(textType)) {
            var reader = new FileReader();

            reader.onload = function(e) {
                console.log(filename)
                var content = reader.result;
                //Here the content has been read successfuly
                document.querySelector('.ql-editor').innerText = content;
                document.querySelector('#title').value = filename;
                toaster('Contents set from <i>' + filename + '</i>')
            }

            reader.readAsText(file);
        } else {
            toaster('File not supported')
        }
    };


    function toaster(text, dur, dest) {
        var duration = (dur) ? dur : 3000;
        var destination = (dest) ? dest : undefined;


        Toastify({
            text,
            duration,
            newWindow: true,
            destination,
            gravity: "bottom",
            position: 'right',
            backgroundColor: "rgba(0, 0, 0, 0.73)",
            stopOnFocus: true, // Prevents dismissing of toast on hover
        }).showToast();
    }

    setTimeout(function() {
        toaster('Try uploading a <b>text</b> file by clicking on the <i class="fas fa-paperclip"></i> button')
    }, 300)

    function trash() {
        document.querySelector('#title').value = '';
        quill.setText('');
        toaster('Trashed');
    }

    function post(e) {
        e.innerHTML = '<i class="fas fa-spinner fa-spin"></i>'
        setTimeout(function() {
            var title = document.querySelector('#title').value;
            var posted = (title) ? ' posted' : 'Posted'
            e.innerHTML = 'Post';
            toaster('<i>' + title + '</i>' + posted)
        }, 1000)
    }

    function about() {
        var dur = 10000;
        toaster('Icons by <b>Font Awesome</b>', dur, "https://fontawesome.com")
        toaster('<b>Quill</b> is the rich text editor of choice', dur, "https://quilljs.com")
        toaster('<b>Toastify JS</b> displays these beautiful toasts <i class="fas fa-bread-slice"></i>', dur, "https://apvarun.github.io/toastify-js/")
        toaster('And of course this pen is completely taken from <b>this lovely <i class="fab fa-dribbble"></i> shot</b> by<b> Ramil</>', dur, "https://dribbble.com/shots/1052480-Post-New-Entry")
    };
</script>