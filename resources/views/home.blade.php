<style>
    @import url(https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap);

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        position: relative;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 60px;
        background: #11101d;
        padding: 2px 6px;
        transition: all 0.5s ease;
    }

    .sidebar.active {
        width: 240px;
    }

    .sidebar .logo_content .logo {
        color: #fff;
        display: flex;
        height: 50px;
        width: 100%;
        align-items: center;
        font-size: 20px;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar.active .logo_content .logo {
        opacity: 1;
        pointer-events: none;
    }

    .logo_content.logo i {
        font-size: 28px;
        margin-right: 5px;
    }

    .logo_content .logo .logo_name {
        font-size: 20px;
        font-weight: 400;
    }

    .sidebar #btn {
        position: absolute;
        color: #fff;
        left: 50%;
        top: 6px;
        font-size: 20px;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        transform: translateX(-50%);
    }

    .sidebar.active #btn {
        left: 90%;
    }

    .sidebar ul {
        margin-top: 20px;
    }

    .sidebar ul li {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 0 5px;
        list-style: none;
        line-height: 50px;

    }

    .sidebar ul li .tooltip {
        position: absolute;
        left: 122px;
        top: 0;
        transform: translate(-50%, -50%);
        border-radius: 6px;
        height: 35px;
        width: 122px;
        background: #fff;
        line-height: 35px;
        text-align: center;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: 0s;
        opacity: 0;
        pointer-events: none;
        display: block;
    }

    .sidebar.active ul li .tooltip {
        display: none;
    }

    .sidebar ul li:hover .tooltip {
        transition: all 0.5s ease;
        opacity: 1;
        top: 50%;
    }

    .sidebar ul li input {
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        border-radius: 12px;
        outline: none;
        border: none;
        background: #1d1b31;
        padding-left: 50px;
        font-size: 18px;
        color: #fff;
    }

    .sidebar ul li .bx-search {
        position: absolute;
        z-index: 99;
        color: #fff;
        font-size: 22px;
        transition: all 0.5s ease;
    }

    .sidebar ul li .bx-search:hover {
        background: #fff;
        color: #11101d;
    }

    .sidebar.active ul li .bx-search:hover {
        background: #1d1b31;
        color: #fff;
    }

    .sidebar ul li a {
        color: #fff;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        border-radius: 12px;
        white-space: nowrap;
    }

    .sidebar ul li a:hover {
        background: #fff;
        color: #11101d;
    }

    .sidebar ul li i {
        height: 50px;
        min-width: 50px;
        border-radius: 12px;
        line-height: 50px;
        text-align: center;
        font-size: 20px;
    }

    .sidebar .link_names {
        opacity: 0;
        pointer-events: none;
    }

    .sidebar.active .link_names {
        opacity: 1;
        pointer-events: auto;
    }

    .sidebar .profile_content {
        position: absolute;
        color: #fff;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    .sidebar .profile_content .profile {
        position: relative;
        padding: 10px 6px;
        height: 60px;
        background: #1d1b31;
    }

    .profile_content .profile .profile_details {
        display: flex;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    .sidebar.active .profile .profile_details {
        opacity: 1;
        pointer-events: auto;
    }

    .profile .profile_details img {
        height: 40px;
        width: 40px;
        object-fit: cover;
        border-radius: 12px;
    }

    .profile .profile_details .name_job {
        margin-left: 10px;
    }

    .profile .profile_details .name {
        font-size: 15px;
        font-weight: 400;
    }

    .profile .profile_details .job {
        font-size: 12px;
    }

    .profile #log_out {
        position: absolute;
        left: 50%;
        bottom: 5px;
        transform: translateX(-50%);
        min-width: 50px;
        line-height: 50px;
        font-size: 20px;
        border-radius: 12px;
        text-align: center;
    }

    .profile #log_out:hover {
        background: #fff;
        color: #11101d;
    }

    .sidebar.active .profile #log_out {
        left: 88%;
    }

    .home_content {
        position: absolute;
        left: 60px;
        width: calc(100%-60px);
    }

    .sidebar.active~.home_content {
        left: 240px;
        width: calc(100% - 240px);
    }

    .home_content .text {
        font-size: 25px;
        font-weight: 500;
        color: #1d1b31;
        margin: 12px;
    }
</style>
<div class="sidebar active">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bxl-c-plus-plus' style="font-size: 30px;"></i>
            <div class="logoname" style="margin-left: 5px;">Brand Name</div>
        </div>
        <i class='bx bx-menu-alt-right' id="btn" style="font-size: 25px;"></i>
    </div>
    <ul class="nav_list">
        <li>

            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-grid-alt'></i>
                <span class="link_names">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="/todolist">
                <i class='bx bx-user'></i>
                <span class="link_names">To do list</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-chat'></i>
                <span class="link_names">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="link_names">Analytics</span>
            </a>
            <span class="tooltip">Analytics</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-folder'></i>
                <span class="link_names">Files</span>
            </a>
            <span class="tooltip">Files</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cart-alt'></i>
                <span class="link_names">Orders</span>
            </a>
            <span class="tooltip">Orders</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="link_names">Liked</span>
            </a>
            <span class="tooltip">Liked</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="link_names">Settings</span>
            </a>
            <span class="tooltip">Settings</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="https://vz.cnwimg.com/wp-content/uploads/2014/01/alex.jpg?x86007" alt="">
                <div class="name_job">
                    <div class="name">Name</div>
                    <div class="job">Role</div>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out"></i>
        </div>
    </div>
</div>
<div class="home_content">
    <div class="text">Home Content Here...</div>
</div>
<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search")

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
    }
</script>