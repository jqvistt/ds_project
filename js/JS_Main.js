window.addEventListener('load', function () {

  let isActive = false;
  let onBreak = false;

  let entryDateTime;
  let exitDateTime;

  let breakStart;
  let breakEnd;
  let breakTime;

  let comments;

  //Getting the variables from the database, IF THERE ARE ANY VARIABLES otherwise everything shall be nullified as per default.
  var xhr = new XMLHttpRequest();
  xhr.open('GET', './includes/user_data.inc.php?isActive=' + isActive + '&onBreak=' + onBreak + '&entryDateTime=' + entryDateTime + '&exitDateTime=' + exitDateTime + '&breakStart=' + breakStart + '&breakEnd=' + breakEnd + '&breakTime=' + breakTime, true);
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      console.log(this.responseText);
    }
  };

  //Setting the correct starting states of the buttons
  setInterval(() => {
    if (!isActive && !onBreak) {
      document.getElementById(`checkinbtn`).disabled = false;
      document.getElementById(`breakbtn`).disabled = true;
      document.getElementById(`checkoutbtn`).disabled = true;
    } else {
      document.getElementById(`checkinbtn`).disabled = true;
      document.getElementById(`breakbtn`).disabled = false;
      document.getElementById(`checkoutbtn`).disabled = false;
    }
  }, 10);


  //Check in button's functionality, checks for click and saves the date at time of click and logs the date in console along with a message.
  document.getElementById('checkinbtn').addEventListener('click', function () {
    isActive = true;
    let rawEntryDateTime = new Date();
    entryDateTime = rawEntryDateTime.toLocaleString('en-GB');
    console.log(`User checked in at ${entryDateTime}`);

    //Gives the user a notice to indicate everythings working
    document.getElementById('notice').innerHTML = 'You have been checked in successfully!';
    setTimeout(function () {
      document.getElementById("notice").innerHTML = "";
    }, 2000);

    //Trying to send the variables to the temp storage database by sending a post request to user_data.inc.php
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './includes/user_data.inc.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
      }
    };
    xhr.send('&isActive=' + isActive + '&onBreak=' + onBreak + '&entryDateTime=' + entryDateTime + '&exitDateTime=' + exitDateTime + '&breakStart=' + breakStart + '&breakEnd=' + breakEnd + '&breakTime=' + breakTime);

    //Makes sure the right buttons are enabled
    document.getElementById(`checkinbtn`).disabled = true;
    document.getElementById(`breakbtn`).disabled = false;
    document.getElementById(`checkoutbtn`).disabled = false;
  });

  //Break button's functionality, checks for click and saves the date at time of click and logs the date in console along with a message.
  this.document.getElementById('breakbtn').addEventListener('click', function () {
    if (!onBreak) {
      onBreak = true;

      let breakStartDate = new Date();
      breakStart = breakStartDate.toTimeString().slice(0, 8);

      //Gives the user a notice to indicate everythings working
      console.log('User has gone on break', breakStart);
      document.getElementById('notice').innerHTML = 'Your break has begun!';
      setTimeout(function () {
        document.getElementById("notice").innerHTML = "";
      }, 2000);

      document.getElementById(`breakbtn`).style.background = "limegreen";

      document.getElementById(`checkinbtn`).disabled = true;
      document.getElementById(`breakbtn`).disabled = false;
      document.getElementById(`checkoutbtn`).disabled = true;

    } else {
      onBreak = false;

      let breakEndDate = new Date();
      breakEnd = breakEndDate.toTimeString().slice(0, 8);

      console.log('User has come back from break', breakEnd);

      // convert the timestamps to Date objects
      let start = new Date();
      start.setHours(breakStart.split(":")[0]);
      start.setMinutes(breakStart.split(":")[1]);
      start.setSeconds(breakStart.split(":")[2]);

      let end = new Date();
      end.setHours(breakEnd.split(":")[0]);
      end.setMinutes(breakEnd.split(":")[1]);
      end.setSeconds(breakEnd.split(":")[2]);

      let timeDiff = end - start; // get the difference in milliseconds
      let seconds = Math.floor(timeDiff / 1000);
      let minutes = Math.floor(seconds / 60);
      let hours = Math.floor(minutes / 60);
      minutes = minutes % 60;
      seconds = seconds % 60;

      breakTime = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;

      console.log(`The users total break time is ${breakTime}`);

      //Gives the user a notice to indicate everythings working
      document.getElementById('notice').innerHTML = `Your break has ended! Total time: ${breakTime}`;
      setTimeout(function () {
        document.getElementById("notice").innerHTML = "";
      }, 3000);

      document.getElementById(`breakbtn`).style.background = "";

      document.getElementById(`checkinbtn`).disabled = true;
      document.getElementById(`breakbtn`).disabled = false;
      document.getElementById(`checkoutbtn`).disabled = false;
    }

    //Trying to send the variables to the temp storage database by sending a post request to user_data.inc.php
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './includes/user_data.inc.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
      }
    };
    xhr.send('&isActive=' + isActive + '&onBreak=' + onBreak + '&entryDateTime=' + entryDateTime + '&exitDateTime=' + exitDateTime + '&breakStart=' + breakStart + '&breakEnd=' + breakEnd + '&breakTime=' + breakTime);

  });

  //The code for the check-out button
  document.getElementById('checkoutbtn').addEventListener('click', function () {

    comments = document.getElementById("comments").value;
    isActive = false;

    let rawExitDateTime = new Date();
    exitDateTime = rawExitDateTime.toLocaleString('en-GB');

    console.log(`User checked out at ${exitDateTime}`);

    //Gives the user a notice to indicate everythings working
    document.getElementById('notice').innerHTML = 'You have been checked out successfully!';
    setTimeout(function () {
      document.getElementById("notice").innerHTML = "";
    }, 2000);

    //Trying to send the variables to the index pages include php file
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './includes/user_data.inc.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
      }
    };
    xhr.send('&isActive=' + isActive + '&onBreak=' + onBreak + '&entryDateTime=' + entryDateTime + '&exitDateTime=' + exitDateTime + '&breakStart=' + breakStart + '&breakEnd=' + breakEnd + '&breakTime=' + breakTime);

    //Sets the buttons back to the initial state and clears the inputs
    document.getElementById(`checkinbtn`).disabled = false;
    document.getElementById(`breakbtn`).disabled = true;
    document.getElementById(`checkoutbtn`).disabled = true;
    document.getElementById("comments").value = "";
    document.getElementById("file").value = "";

    //Nullifying the variables
    isActive = false;
    onBreak = false;

    entryDateTime = "";
    exitDateTime = "";

    breakStart = "";
    breakEnd = "";
    breakTime = "";

    comments = "";

    //Trying to send the NOW EMPTY variables to the temp storage database by sending a post request of the nullified variables to user_data.inc.php
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './includes/user_data.inc.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
      }
    };
    xhr.send('&isActive=' + isActive + '&onBreak=' + onBreak + '&entryDateTime=' + entryDateTime + '&exitDateTime=' + exitDateTime + '&breakStart=' + breakStart + '&breakEnd=' + breakEnd + '&breakTime=' + breakTime);

  });
});

//The script for the live-clock that is on the page
document.addEventListener("DOMContentLoaded", function (event) {
  setInterval(() => {
    var t = new Date();
    var re = t.toLocaleString('en-GB');
    re = re.slice(12);
    document.getElementById('current-time').innerHTML = re;
  }, 1000);
});