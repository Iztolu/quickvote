// READ Candidates
function readVoter() {
  $.get("models/readVoters.php", {}, function (data, status) {
    $(".voters_content").html(data);
    $('#dataTable').DataTable();
  });
}

// Add Candidates
function addVoter() {
  // get values
  var voters_id = $("#voters_id").val();
  var firstname = $("#firstname").val();
  var lastname = $("#lastname").val();
  var pwd = $("#pwd").val();
  var level = $("#level").val();
  var gender = $("#gender").val();
  var status = $("#status").val();
  var account = $("#account").val();

  // Add record
  $.post("models/addVoters.php", {
    voters_id: voters_id,
    firstname: firstname,
    lastname: lastname,
    pwd: pwd,
    level: level,
    gender: gender,
    status: status,
    account: account
  }, 

  function (data, status) {
    // close the popup
    $("#voter_addmodal").modal("hide");

    // read records again
    readVoter();

    // clear fields from the popup
    $("#voters_id").val("");
    $("#firstname").val("");
    $("#lastname").val("");
    $("#pwd").val("");
    $("#level").val("");
    $("#gender").val("");
    $("#status").val("");
    $("#account").val("");
  });
}

function getVoterDetails(id) {
  // Add User ID to the hidden field for furture usage
  $("#hidden_user_id").val(id);
  $.post("models/readVoterDetails.php", {
      id: id
    },
    function (data, status) {
      // PARSE json data
      var user = JSON.parse(data);
      // Passing existing values to the modal popup fields
      $("#update_voters_id").val(user.voters_id);
      $("#update_firstname").val(user.firstname);
      $("#update_lastname").val(user.lastname);
      $("#update_pwd").val(user.level);
      $("#update_level").val(user.level);
      $("#update_gender").val(user.gender);
      $("#update_status").val(user.status);
      $("#update_account").val(user.account);
    }
  );
  // Open modal popup
  $("#voter_updatemodal").modal("show");
}

function updateVoter() {
  // get values
  var voters_id = $("#update_voters_id").val();
  var firstname = $("#update_firstname").val();
  var lastname = $("#update_lastname").val();
  var pwd = $("#update_pwd").val();
  var level = $("#update_level").val();
  var gender = $("#update_gender").val();
  var status = $("#update_status").val();
  var account = $("#update_account").val();

  // get hidden field value
  var id = $("#hidden_user_id").val();

  // Update the details by requesting to the server using ajax
  $.post("models/updateVoters.php", {
      id: id,
      voters_id: voters_id,
      firstname: firstname,
      lastname: lastname,
      pwd: pwd,
      level: level,
      gender: gender,
      status: status,
      account: account
    },
    function (data, status) {
      // hide modal popup
      $("#voter_updatemodal").modal("hide");
      // reload Users by using readVoter();
      readVoter();
    }
  );
}

function deleteVoter(id) {
  var conf = confirm("Are you sure you want to delete Voter?");
  if (conf == true) {
    $.post("models/deleteVoter.php", {
        id: id
      },
      function (data, status) {
        // reload Users by using readVoter();
        readVoter();
      }
    );
  }
}

$(document).ready(function () {
  // READ recods on page load
  readVoter(); // calling function
});

