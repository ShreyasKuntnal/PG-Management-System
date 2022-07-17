var reserve = {
  // (A) CHOOSE THIS SEAT
  toggle : (seat) => {
    seat.classList.toggle("selected");
  },

  // (B) SAVE RESERVATION
  save : () => {
    // (B1) GET SELECTED SEATS
    var selected = document.querySelectorAll("#layout .selected");

    // (B2) ERROR!
    if (selected.length == 0) { alert("No seats selected."); }

    // (B3) NINJA FORM SUBMISSION
    else {
      var ninja = document.getElementById("ninja");
      for (let seat of selected) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = "seats[]";
        input.value = seat.innerHTML;
        ninja.appendChild(input);
      }
      ninja.submit();
    }
  }
};
