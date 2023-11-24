<style>
    #title {
        font-size: 24px;
    }

    .link,
    #title>span {
        color: #6565c3;
    }

    .link {
        font-size: 12px;
        cursor: pointer;
        position: absolute;
        transition: .3s;
        bottom: 10px;
        left: 10px;
    }

    header {
        margin-bottom: 25px;
        padding: 5px;
        background-color: #363943;
        box-shadow: 14px 14px 14px #00000033;
        border-radius: 10px;
        width: 400px;

        display: flex;
        align-items: center;
        justify-content: left;
        gap: 5px;
    }

    .dropdown-content button {
        width: 100%;
        font-size: 14px;
        color: white;
        padding: 2px 8px;
        border: none;
        background-color: transparent;
        border-radius: 4px;
        transition: .2s;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
    }

    .dropdown-content a{
        width: 100%;
        font-size: 14px;
        color: white;
        border: none;
        background-color: transparent;
        border-radius: 4px;
        transition: .2s;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        text-decoration: none;
    }

    .dropright.active>button,
    .dropdown-content button:hover {
        background-color: #ffffff59;
    }

    .dropdown-content .line {
        width: 100%;
        border-bottom: 1px solid #ffffff5f;
        margin: 3px 0;
    }

    .dropdown-btn {
        border: none;
        background-color: transparent;
        color: #ffffffcc;
        padding: 3px 8px;
        border-radius: 6px;
        transition: .3s;
    }

    .dropdown-btn:hover {
        background-color: #666666;
        color: #ffffff;
    }

    .dropright-content,
    .dropdown-content {
        box-shadow: 14px 14px 14px #00000033;
        position: absolute;
        pointer-events: none;
        transition: .3s;
        opacity: 0;
        padding: 6px;
        border-radius: 6px;
        background-color: #544b81;
        margin-top: 100px;
        text-decoration: none;
        display: flex;
        flex-direction: column;
        z-index: 1;
    }

    .dropdown.active .dropdown-btn {
        background-color: #544b81;
        color: #ffffff;
    }

    .dropdown.active .dropdown-content {
        pointer-events: all;
        margin-top: 7px;
        opacity: 1;
    }

    .dropdown.active .dropright-content {
        top: -6px;
    }

    .dropright {
        position: relative;
        width: 100%;
    }

    .dropright-content {
        background-color: #544b81;
        left: calc(100% + 100px);
        top: -100px;
        margin: 0;
    }

    .dropright.active .dropright-content {
        left: calc(100% + 9px);
        pointer-events: all;
        opacity: 1;
    }

    .shortcut {
        opacity: .5;
    }
</style>
<header>
    <!-- File -->
    <div class="dropdown">
        <button class="dropdown-btn">Task</button>
        <div class="dropdown-content">
            <button>
                <a href="/addtask">New task</a>
                <span class="shortcut">Ctrl+N</span>
            </button>
            <button>
                <span>Open file</span>
                <span class="shortcut">Ctrl+O</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Save</span>
                <span class="shortcut">Ctrl+S</span>
            </button>
            <button>
                <span>Save as</span>
                <span class="shortcut">Alt+S</span>
            </button>
            <div class="line"></div>
            <div class="dropright">
                <button>
                    <span>Share</span>
                    <span>▸</span>
                </button>
                <div class="dropright-content">
                    <button>Export profile (default)...</button>
                    <button>Import profile...</button>
                </div>
            </div>
            <div class="line"></div>
            <button>Exit</button>
        </div>
    </div>

    <!-- Edit -->
    <div class="dropdown">
        <button class="dropdown-btn">Edit</button>
        <div class="dropdown-content">
            <button>
                <span>Undo</span>
                <span class="shortcut">Ctrl+Z</span>
            </button>
            <button>
                <span>Redo</span>
                <span class="shortcut">Ctrl+Y</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Cut</span>
                <span class="shortcut">Ctrl+X</span>
            </button>
            <button>
                <span>Copy</span>
                <span class="shortcut">Ctrl+C</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Find</span>
                <span class="shortcut">Ctrl+F</span>
            </button>
            <button>
                <span>Replace</span>
                <span class="shortcut">Ctrl+H</span>
            </button>
        </div>
    </div>

    <!-- View -->
    <div class="dropdown">
        <button class="dropdown-btn">View</button>
        <div class="dropdown-content">
            <div class="dropright">
                <button>
                    <span>Appearence</span>
                    <span>▸</span>
                </button>
                <div class="dropright-content">
                    <button>Full screen</button>
                    <button>Light mode</button>
                    <button>Dark mode</button>
                    <button>Centered layout</button>
                </div>
            </div>
            <div class="dropright">
                <button>
                    <span>Editor layout</span>
                    <span>▸</span>
                </button>
                <div class="dropright-content">
                    <button>Split up</button>
                    <button>Split down</button>
                    <button>Split left</button>
                    <button>Split right</button>
                    <div class="line"></div>
                    <button>Split in group</button>
                    <div class="line"></div>
                    <button>Flip layout</button>
                </div>
            </div>
            <div class="line"></div>
            <button>
                <span>Explorer</span>
                <span class="shortcut">Ctrl+Shift+E</span>
            </button>
            <button>
                <span>Search</span>
                <span class="shortcut">Ctrl+Shift+F</span>
            </button>
            <button>
                <span>Run</span>
                <span class="shortcut">Ctrl+Shift+D</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Problems</span>
                <span class="shortcut">Ctrl+Shift+M</span>
            </button>
            <button>
                <span>Output</span>
                <span class="shortcut">Ctrl+Shift+U</span>
            </button>
            <button>
                <span>Terminal</span>
                <span class="shortcut">Ctrl+T</span>
            </button>
        </div>
    </div>

    <!-- Run -->
    <div class="dropdown">
        <button class="dropdown-btn">Run</button>
        <div class="dropdown-content">
            <button>
                <span>Start debugging</span>
                <span class="shortcut">F5</span>
            </button>
            <button>
                <span>Run without debugging</span>
                <span class="shortcut">Ctrl+F5</span>
            </button>
            <button>
                <span>Stop debugging</span>
                <span class="shortcut">Shift+F5</span>
            </button>
            <button>
                <span>Restart debugging</span>
                <span class="shortcut">Ctrl+Shift+F5</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Open configurations</span>
            </button>
            <button>
                <span>Add configuration...</span>
            </button>
        </div>
    </div>

    <!-- Terminal -->
    <div class="dropdown">
        <button class="dropdown-btn">Terminal</button>
        <div class="dropdown-content">
            <button>
               <span>New Terminal</span>
                <span class="shortcut">Ctrl+Shift+4</span>
            </button>
            <button>
                <span>Split Terminal</span>
                <span class="shortcut">Ctrl+Shift+5</span>
            </button>
            <div class="line"></div>
            <button>
                <span>Run task</span>
            </button>
            <button>
                <span>Configure tasks</span>
            </button>
        </div>
    </div>

    <!-- Help -->
    <div class="dropdown">
        <button class="dropdown-btn">Help</button>
        <div class="dropdown-content">
            <button>
                <span>Welcome</span>
            </button>

            <button>
                <span>Documentation</span>
            </button>
            <button>
                <span>Show all commands</span>
            </button>
            <button>
                <span>Show release notes</span>
            </button>
            <div class="line"></div>
            <button>
<form action="/deleteuser" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete account</button>

</form>            </button>
        </div>
    </div>
</header>
<a class="link" href="https://github.com/GuiferrSouza">github.com/GuiferrSouza</a>

<script>
    document.addEventListener("click", e => {
        const dropdownBtn = e.target.closest(".dropdown-btn");

        if (dropdownBtn) {
            const dropdown = dropdownBtn.closest(".dropdown");
            const isAlreadyActive = dropdown.classList.contains("active");

            hideDropElements();
            if (isAlreadyActive) {
                dropdown.classList.remove("active");
                return;
            }

            dropdown.classList.add("active");
        } else {
            hideDropElements()
        }

        function hideDropElements() {
            const dropElements = document.querySelectorAll(".dropdown, .dropright");
            for (let element of dropElements) {
                element.classList.remove("active");
            }
        }
    });

    document.addEventListener("mouseover", e => {
        const dropright = e.target.closest(".dropright");
        const button = e.target.closest(".dropdown-content button");
        if (button) {
            hideDroprightElements()
        }
        if (dropright) {
            dropright.classList.add("active")
        }

        function hideDroprightElements() {
            const dropElements = document.querySelectorAll(".dropright");
            for (let element of dropElements) {
                element.classList.remove("active");
            }
        }
    });
</script>