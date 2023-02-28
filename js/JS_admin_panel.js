window.addEventListener('load', function() {
    const menuIcon = document.querySelector("#menu-icon");
    const menuArrow = document.querySelector('.menu-arrow')
    const sidebar = document.querySelector(".sidebar");
    let currentContent = "";
    let intervalId; // declare a variable to hold the interval ID
    
    function toggleSideBar() {
        sidebar.classList.toggle("open");
        menuArrow.classList.toggle("open");
    };

    function checkForChanges() {
        $(".content").load("admin_includes/dashboard.inc.php", function() {
            let newContent = $(".content").html(); // get the new content
            if (newContent !== currentContent) { // check for changes
                currentContent = newContent; // update the current content
                clearInterval(intervalId); // clear the previous interval, if any
                intervalId = setInterval(checkForChanges, 1000); // start the interval again
            }
        });
    }
    

    toggleSideBar();

    $(".content").load("admin_includes/dashboard.inc.php", function() {
        currentContent = $(".content").html(); // get the current content
        intervalId = setInterval(checkForChanges, 1000); // start the interval
    });

    menuIcon.addEventListener("click", function() {
        toggleSideBar();
    });

    /* Dashboard Start */
    document.getElementById('dashboard').addEventListener('click', function() {
        clearInterval(intervalId); // clear the previous interval, if any

        $(".content").load("admin_includes/dashboard.inc.php", function() {
            currentContent = $(".content").html(); // get the current content
            intervalId = setInterval(checkForChanges, 1000); // start the interval
        });

        console.log('dashboard pressed');
        toggleSideBar();
    });
    /* Dashboard end */

    /* Users Start */
    document.getElementById('users').addEventListener('click', function() {
        clearInterval(intervalId); // clear the previous interval, if any

        $(".content").load("admin_includes/users.inc.php");

        console.log('users pressed');
        toggleSideBar();
    });

    /* Users end */

    /* Mileages lStart */
    document.getElementById('mileages').addEventListener('click', function() {
        clearInterval(intervalId); // clear the previous interval, if any

        $(".content").load("admin_includes/mileages.inc.php");

        console.log('mileages pressed');
        toggleSideBar();
    });
    /* Mileages end */

    /* Reports start */
    document.getElementById('reports').addEventListener('click', function() {
        clearInterval(intervalId); // clear the previous interval, if any

        $(".content").load("admin_includes/reports.inc.php");

        console.log('reports pressed');
        toggleSideBar();
    });
    /* Reports end */

    /* Settings start */
    document.getElementById('settings').addEventListener('click', function() {
        clearInterval(intervalId); // clear the previous interval, if any

        $(".content").load("admin_includes/settings.inc.php");

        console.log('settings pressed');
        toggleSideBar();
    });
    /* Settings end */
});