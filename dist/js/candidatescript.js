// READ Candidates
function readCandidate() {
  $.get("models/readCandidates.php", {}, function (data, status) {
    $(".candidates_content").html(data);
    $('#dataTable').DataTable();
  });
}

// Add Candidates
function addCandidate() {
  // get values
  var position = $("#position").val();
  var firstname = $("#firstname").val();
  var lastname = $("#lastname").val();
  var level = $("#level").val();
  var gender = $("#gender").val();
  var image = $("#image").val();

  if(position == "" || firstname == "" || lastname == "" || level == "" || gender == "" || image == "") {
		$("#error_message").show().html("All Fields are Required");
	} else {
    // Add record
    $.post("models/addCandidates.php", {
      position: position,
      firstname: firstname,
      lastname: lastname,
      level: level,
      gender: gender,
      image: image
    }, 

    function (data, status) {
      // close the popup
      $("#candidate_addmodal").modal("hide");

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
}

function getCandidateDetails(id) {
  // Add User ID to the hidden field for furture usage
  $("#hidden_user_id").val(id);
  $.post("models/readCandidateDetails.php", {
      id: id
    },
    function (data, status) {
      // PARSE json data
      var user = JSON.parse(data);
      // Passing existing values to the modal popup fields
      $("#update_position").val(user.position);
      $("#update_firstname").val(user.firstname);
      $("#update_lastname").val(user.lastname);
      $("#update_level").val(user.level);
      $("#update_gender").val(user.gender);
      $("#update_image").val(user.image);
    }
  );
  // Open modal popup
  $("#candidate_updatemodal").modal("show");
}

function updateCandidate() {
  // get values
  var position = $("#update_position").val();
  var firstname = $("#update_firstname").val();
  var lastname = $("#update_lastname").val();
  var level = $("#update_level").val();
  var gender = $("#update_gender").val();
  var image = $("#update_image").val();

  // get hidden field value
  var id = $("#hidden_user_id").val();

  // Update the details by requesting to the server using ajax
  $.post("models/updateCandidates.php", {
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
      $("#candidate_updatemodal").modal("hide");
      // reload Users by using readCandidate();
      readCandidate();
    }
  );
}

function deleteCandidate(id) {
  var conf = confirm("Are you sure you want to delete Candidate?");
  if (conf == true) {
    $.post("models/deleteCandidate.php", {
        id: id
      },
      function (data, status) {
        // reload Users by using readCandidate();
        readCandidate();
      }
    );
  }
}

$(document).ready(function () {
  // READ recods on page load
  readCandidate(); // calling function
});

