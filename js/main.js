$(document).ready(function() {
  $('.menu-edit-form').hide();
  $('.menu-delete-form').hide();
  $(".form-message").hide();

  var welcomeTranslations = {
    eng: {
      header: $('.page-header-title').text(),
      welcomeMessage: $('.welcome-text').text()
    },
    header: "", //put japanese translation of header here as a string
    welcomeMessage: "カレッジタウンのカフェパシフィックで、美味しい家庭料理が食べられます。色々なデザートやお菓子もありますから、ぜひ来てください！"
  }

  var infoTranslations = {
    eng: {
      header: $('.page-header-title').text(),
      whereToFindUs: $('#locationHeader').text(),
      hoursHeader: $('#hoursHeader').text(),
      publicTransit: $('#transitHeader').text(),
      days: {
        sun: $('#sun').text(),
        mon: $('#mon').text(),
        tue: $('#tue').text(),
        wed: $('#wed').text(),
        thur: $('#thur').text(),
        fri: $('#fri').text(),
        sat: $('#sat').text()
      }
    },
    header: "", //put japanese translation of "info" header here as a string
    whereToFindUs: "", //japanese translation of "location"
    hoursHeader: "", // japanese translation of "hours" header
    days: {
      sun: "",
      mon: "",
      tue: "",
      wed: "",
      thur: "",
      fri: "",
      sat: ""
    },
    publicTransit: "" // japanese translation of public transit
  }

  var contactTranslations = {
    header: "", // japanese translation of contact
    phoneTakeout: "", // japanese translation of "phone number (takeout)"
    leaveAComment: "", // japanese translation of instruction
    name: "", // japanese translation of name
    comment: "", // japanese translation of comment
    msgPlaceholder: "", //japanese translation of (comments, suggestions, etc)
    send: "" // japanese translation of send
  }

  var loginTranslations = {
    header: "", // japanese translation of login
    username: "", // japanese translation of username
    password: "" // japanese translation of password
  }


  $('.bxslider').bxSlider({
    auto: true,
    autoControls: false,
    mode: 'fade',
    randomStart: true,
    pager: false,
    controls: false
  });

  $('#welcomeTranslateBtn').click(function() {
    var prevHeader = welcomeTranslations['eng']['header'];
    var prevText = welcomeTranslations['eng']['welcomeMessage'];

    if ($('.page-header-title').text() === prevHeader) {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(welcomeTranslations['header']);
      }).slideDown(200);
      $(".welcome-text").slideUp(200, function(){
        $('.welcome-text').text(welcomeTranslations['welcomeMessage']);
      }).slideDown(200);
    } else {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(prevHeader);
      }).slideDown(200);
      $(".welcome-text").slideUp(200, function(){
        $('.welcome-text').text(prevText);
      }).slideDown(200);
    }
  });

  $('#aboutTranslateBtn').click(function() {
    // Replace page-header-title with japanese text
    var prevHeader = infoTranslations['eng']['header'];
    var prevWhereToFind = infoTranslations['eng']['whereToFindUs'];
    var prevHoursHeader = infoTranslations['eng']['hoursHeader'];

    if ($('.page-header-title').text() === prevHeader) {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(infoTranslations['header']);
      }).slideDown(200);
      $('#locationHeader').slideUp(200, function(){
        $('#locationHeader').text(infoTranslations['whereToFindUs']);
      }).slideDown(200);
      $('#hoursHeader').slideUp(200, function(){
        $('#hoursHeader').text(infoTranslations['hoursHeader']);
      }).slideDown(200);
      $('#transitHeader').slideUp(200, function(){
        $('#transitHeader').text(infoTranslations['publicTransit']);
      }).slideDown(200);
      var days = infoTranslations['days'];
      for (var day in days) {
        if (days.hasOwnProperty(day)) {
          console.log(day + " -> " + days[day]);
          $('#'+day).text(days[day]);
          // $('#'+day).slideUp(200, function() {
          //   console.log(day);
          // }).slideDown(200);
        }
      }
    } else {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(prevHeader);
      }).slideDown(200);

    }
    // Replace content text with japanese text
  });

  $('#contactTranslateBtn').click(function() {
    // Replace page-header-title with japanese text

    // Replace phone label with japanese text

    // Replace form header with japanese text

    // Replace form label text and input placeholders with japanese text

    // Replace send button text with japanese translation
  });

  $('#loginTranslateBtn').click(function() {
    // Replace page-header-title with japanese text

    // Replace login form labels and placeholders

    // Replace login button text
  });

  $('#menuTranslateBtn').click(function() {
    // make ajax call to php script which will hold associative arrays for each menu section

    // clear the item container for each menu item and then reload with japanese text
  });

  $('.edit-button').click(function() {
    $(this).parent().next().slideToggle(100);
  });

  $('.delete-button').click(function() {
    var deleteForm = $(this).parent().parent().next().next();
    $(deleteForm).slideToggle(100);
    $(deleteForm).last().click(function() {
      $(deleteForm).slideUp(100);
    });
  });

});
