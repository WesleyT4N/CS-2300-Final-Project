$(document).ready(function() {
  $('.menu-edit-form').hide();
  $('.menu-delete-form').hide();
  $(".form-message").hide();

  var welcomeTranslations = {
    eng: {
      header: $('.page-header-title').text(),
      welcomeMessage: $('.welcome-text').text()
    },
    header: "いらっしゃいませ", //put japanese translation of header here as a string
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
    header: "アクセス", //put japanese translation of "info" header here as a string
    whereToFindUs: "アドレス", //japanese translation of "location"
    hoursHeader: "営業時間", // japanese translation of "hours" header
    days: {
      sun: "日曜日",
      mon: "月曜日",
      tue: "火曜日",
      wed: "水曜日",
      thur: "木曜日",
      fri: "金曜日",
      sat: "土曜日"
    },
    publicTransit: "バス" // japanese translation of public transit
  }

  var contactTranslations = {

    header: "連絡", // japanese translation of contact
    phoneTakeout: "電話番号（テークアウト）", // japanese translation of "phone number (takeout)"
    leaveAComment: "コメントフォーム", // japanese translation of instruction
    name: "名前", // japanese translation of name
    comment: "コメント", // japanese translation of comment
    msgPlaceholder: "（メッセージ）", //japanese translation of (comments, suggestions, etc)
    send: "送ります" // japanese translation of send
  }

  var loginTranslations = {
    header: "ログイン", // japanese translation of login
    username: "ユーザー名", // japanese translation of username
    password: "パスワード" // japanese translation of password
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
      $(".welcome-text").slideUp(200, function() {
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
    var prevDays = infoTranslations['eng']['days'];
    var prevTransit = infoTranslations['eng']['publicTransit'];
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
      $.each(days, function(day, days) {
        console.log(day);
        $('#'+day).slideUp(200, function() {
          $('#'+day).text(infoTranslations['days'][day]);
        }).slideDown(200);
      });

    } else {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(prevHeader);
      }).slideDown(200);
      $('#locationHeader').slideUp(200, function(){
        $('#locationHeader').text(prevWhereToFind);
      }).slideDown(200);
      $('#hoursHeader').slideUp(200, function(){
        $('#hoursHeader').text(prevHoursHeader);
      }).slideDown(200);
      var days = infoTranslations['days'];
      $.each(days, function(day, days) {
        $('#'+day).slideUp(200, function() {
          $('#'+day).text(infoTranslations['eng']['days'][day]);
        }).slideDown(200);
      });
      $('#transitHeader').slideUp(200, function(){
        $('#transitHeader').text(prevTransit);
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
