function showProductItems() {
  $.ajax({
    url: "./adminView/viewAllProducts.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}

function showCourses() {
  $.ajax({
    url: "./adminView/viewCourses.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}

function showRooms() {
  $.ajax({
    url: "./adminView/viewRooms.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}

function showStudents() {
  $.ajax({
    url: "./adminView/viewStudents.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}

function showProductSizes() {
  $.ajax({
    url: "./adminView/viewProductSizes.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}

function showProfile() {
    $.ajax({
      url: "./adminView/viewProfile.php",
      method: "post",
      data: { record: 1 },
      success: function (data) {
        $('.allContent-section').html(data);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
  }

function showOrders() {
  $.ajax({
    url: "./adminView/viewAllOrders.php",
    method: "post",
    data: { record: 1 },
success: function (data) {
$('.allContent-section').html(data);
},
error: function (jqXHR, textStatus, errorThrown) {
console.log(textStatus, errorThrown);
}
});
}
   
