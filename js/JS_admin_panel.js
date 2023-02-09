window.addEventListener('load', function () {



    const menuIcon = document.querySelector("#menu-icon");
    const sidebar = document.querySelector(".sidebar");
    let sidebarOpen = false;

    menuIcon.addEventListener("click", function () {
        if (!sidebarOpen) {
            sidebarOpen = true;
        } else{
            sidebarOpen = false;
        }

        sidebar.classList.toggle("open");
        
        if (sidebarOpen == true) {
            menuIcon.innerHTML = "&blacktriangleleft;";
        } else{
            menuIcon.innerHTML = "&blacktriangleright;"
        }
    });





    document.getElementById('dashboard').addEventListener('click', function () {

        console.log('dashboard pressed')

    })

    document.getElementById('users').addEventListener('click', function () {

        console.log('users pressed')

        const userList = document.getElementById("container1");

        function getUsers() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "includes/admin_panel.inc.php", true);
            xhr.onload = function () {
                if (this.status === 200) {
                    const data = JSON.parse(this.responseText);
                    let output = "";
                    data.forEach(user => {
                        output += `<li><a href="#">${user.name}</a></li>`;
                    });
                    userList.innerHTML = output;
                }
            };
            xhr.send();
        }

        getUsers();
    })

    document.getElementById('reports').addEventListener('click', function () {

        console.log('reports pressed')

    })

    document.getElementById('settings').addEventListener('click', function () {

        console.log('settings pressed')

    })


});