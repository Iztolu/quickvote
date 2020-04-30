// Add Candidates
function addCandidate() {
  // get values
  var position = $("#position").val();
  var firstname = $("#firstname").val();
  var lastname = $("#lastname").val();
  var level = $("#level").val();
  var gender = $("#gender").val();
  var image = $("#image").val();

  // Add record
  $.post("parsers/addCandidates.php", {
    position: position,
    firstname: firstname,
    lastname: lastname,
    level: level,
    gender: gender,
    image: image
  }, 

  function (data, status) {
    // close the popup
    $("#candid_addmod").modal("hide");

    // read records again
    readCandidate();

    // clear fields from the popup
    $("#position").val("");
    $("#firstname").val("");
    $("#lastname").val("");
    $("#level").val("");
    $("#gender").val("");
    $("#image").val("");
  });
}

// READ Candidates
function readCandidate() {
  $.get("parsers/readCandidates.php", {}, function (data, status) {
    $(".candidates_content").html(data);
  });
}

function getCandidateDetails(id) {
  // Add User ID to the hidden field for furture usage
  $("#hidden_user_id").val(id);
  $.post("parsers/readCandidateDetails.php", {
      id: id
    },
    function (data, status) {
      // PARSE json data
      var user = JSON.parse(data);
      // Passing existing values to the modal popup fields
      $("#edit_position").val(user.position);
      $("#edit_firstname").val(user.firstname);
      $("#edit_lastname").val(user.lastname);
      $("#edit_level").val(user.level);
      $("#edit_gender").val(user.gender);
      $("#edit_image").val(user.image);
    }
  );
  // Open modal popup
  $("#candid_editmod").modal("show");
}

function updateCandidate() {
  // get values
  var position = $("#edit_position").val();
  var firstname = $("#edit_firstname").val();
  var lastname = $("#edit_lastname").val();
  var level = $("#edit_level").val();
  var gender = $("#edit_gender").val();
  var image = $("#edit_image").val();

  // get hidden field value
  var id = $("#hidden_user_id").val();

  // Update the details by requesting to the server using ajax
  $.post("parsers/editCandidates.php", {
      id: id,
      position: position,
      firstname: firstname,
      lastname: lastname,
      level: level,
      gender: gender,
      image: image
    },
    function (data, status) {
      // hide modal popup
      $("#candid_editmod").modal("hide");
      // reload Users by using readRecords();
      readCandidate();
    }
  );
}

function deleteCandidate(id) {
  var conf = confirm("Are you sure you want to delete Candidate?");
  if (conf == true) {
    $.post("parsers/deleteCandidate.php", {
        id: id
      },
      function (data, status) {
        // reload Users by using readRecords();
        readCandidate();
      }
    );
  }
}

$(document).ready(function () {
  // READ recods on page load
  readCandidate(); // calling function
});

