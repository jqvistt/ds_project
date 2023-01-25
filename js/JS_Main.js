window.addEventListener('load', function () {

  //Setting of the initials state of the buttons
  document.getElementById(`checkinbtn`).disabled = false;
  document.getElementById(`breakbtn`).disabled = true;
  document.getElementById(`checkoutbtn`).disabled = true;

  let isActive = false;
  let onBreak = false;

  let entryDate;
  let exitDate;

  let breakStart;
  let breakEnd;
  let breakTime;
  let tempBreakTime;

  //Check in button's functionality, checks for click and saves the date at time of click and logs the date in console along with a message.
  document.getElementById('checkinbtn').addEventListener('click', function () {
    isActive = true;
    entryDate = new Date();
    console.log(`User checked in at ${entryDate}`);

    //Gives the user a notice to indicate everythings working
    document.getElementById('notice').innerHTML = 'You have been checked in successfully!';
    setTimeout(function () {
      document.getElementById("notice").innerHTML = "";
    }, 2000);

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

      tempBreakTime = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;

      breakTime = tempBreakTime;

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


    document.getElementById('checkoutbtn').addEventListener('click', function () {
      isActive = false;
      exitDate = new Date();
      console.log(`User checked out at ${exitDate}`);

      //Gives the user a notice to indicate everythings working
      document.getElementById('notice').innerHTML = 'You have been checked out successfully!';
      setTimeout(function () {
        document.getElementById("notice").innerHTML = "";
      }, 2000);

      //Sets the buttons back to the initial state
      document.getElementById(`checkinbtn`).disabled = false;
      document.getElementById(`breakbtn`).disabled = true;
      document.getElementById(`checkoutbtn`).disabled = true;

      document.getElementById("comments").value = "";
      document.getElementById("file").value = "";

    });
  });

  //The script for the live-clock that is on the page
  setInterval(() => {

    var t = new Date();
    var re = t.toLocaleString('en-GB');
    re = re.slice(12);
    document.getElementById('current-time').innerHTML = re;

  }, 1000)

});