$(document).ready(function() {
  $('.menu-edit-form').hide();
  $('.menu-delete-form').hide();
  $(".form-message").hide();

  if (window.location.href.includes("lang=jp")) {
    $('.page-header-title').text("メニュー");
  }

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
    eng: {
      header: $('.page-header-title').text(),
      phoneTakeout: $('#phoneTakeout').text(),
      leaveAComment: $('#commentHeader').text(),
      name: $('#nameLabel').text(),
      namePlaceholder: $('#name').attr('placeholder'),
      comment: $('#commentLabel').text(),
      msgPlaceholder: $('#comment').attr('placeholder'),
      send: $('#submit').text()
    },
    header: "連絡", // japanese translation of contact
    phoneTakeout: "電話番号（テークアウト）", // japanese translation of "phone number (takeout)"
    leaveAComment: "コメントフォーム", // japanese translation of instruction
    name: "名前", // japanese translation of name
    comment: "コメント", // japanese translation of comment
    msgPlaceholder: "（メッセージ）", //japanese translation of (comments, suggestions, etc)
    send: "送ります" // japanese translation of send
  }

  var loginTranslations = {
    eng: {
      header: $('.page-header-title').text(),
      username: $('#usernameLabel').text(),
      usernamePlaceholder: $('#username').attr('placeholder'),
      password: $('#passwordLabel').text(),
      passwordPlaceHolder: $('#password').attr('placeholder'),
      login: $('#loginSubmit').text(),
      logout: $('#logoutBtn').text()
    },
    header: "ログイン", // japanese translation of login
    username: "ユーザー名", // japanese translation of username
    password: "パスワード" ,
    logout: "ログアウト"// japanese translation of password
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
  });

  $('#contactTranslateBtn').click(function() {
    var prevHeader = contactTranslations['eng']['header'];
    var prevPhoneTakeout = contactTranslations['eng']['phoneTakeout'];
    var prevCommentHeader = contactTranslations['eng']['leaveAComment'];
    var prevNameLabel = contactTranslations['eng']['name'];
    var prevNamePlaceholder = contactTranslations['eng']['namePlaceholder'];
    var prevCommentLabel = contactTranslations['eng']['comment'];
    var prevMsgPlaceholder = contactTranslations['eng']['msgPlaceholder'];
    var prevSend = contactTranslations['eng']['send'];

    if ($('.page-header-title').text() === prevHeader) {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(contactTranslations['header']);
      }).slideDown(200);
      $('#phoneTakeout').slideUp(200, function() {
        $('#phoneTakeout').text(contactTranslations['phoneTakeout']);
      }).slideDown(200);
      $('#commentHeader').slideUp(200, function() {
        $('#commentHeader').text(contactTranslations['leaveAComment']);
      }).slideDown(200);
      $('#nameLabel').slideUp(200, function() {
        $('#nameLabel').text(contactTranslations['name']);
      }).slideDown(200);
      $('#name').slideUp(200, function() {
        $('#name').attr('placeholder', contactTranslations['name']);
      }).slideDown(200);
      $('#commentLabel').slideUp(200, function() {
        $('#commentLabel').text(contactTranslations['comment']);
      }).slideDown(200);
      $('#comment').slideUp(200, function() {
        $('#comment').attr('placeholder', contactTranslations['msgPlaceholder']);
      }).slideDown(200);
      $('#contactForm').slideUp(200, function() {
        $('#submit').text(contactTranslations['send']);
      }).slideDown(200);
    } else {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(prevHeader);
      }).slideDown(200);
      $('#phoneTakeout').slideUp(200, function() {
        $('#phoneTakeout').text(prevPhoneTakeout);
      }).slideDown(200);
      $('#commentHeader').slideUp(200, function() {
        $('#commentHeader').text(prevCommentHeader);
      }).slideDown(200);
      $('#nameLabel').slideUp(200, function() {
        $('#nameLabel').text(prevNameLabel);
      }).slideDown(200);
      $('#name').slideUp(200, function() {
        $('#name').attr('placeholder', prevNamePlaceholder);
      }).slideDown(200);
      $('#commentLabel').slideUp(200, function() {
        $('#commentLabel').text(prevCommentLabel);
      }).slideDown(200);
      $('#comment').slideUp(200, function() {
        $('#comment').attr('placeholder', prevMsgPlaceholder);
      }).slideDown(200);
      $('#contactForm').slideUp(200, function() {
        $('#submit').text(prevSend);
      }).slideDown(200);
    }
  });

  $('#loginTranslateBtn').click(function() {
    var prevHeader = loginTranslations['eng']['header'];
    var prevUsernameLabel = loginTranslations['eng']['username'];
    var prevUsernamePlaceholder = loginTranslations['eng']['usernamePlaceholder'];
    var prevPasswordLabel = loginTranslations['eng']['password'];
    var prevPasswordPlaceholder = loginTranslations['eng']['passwordPlaceHolder'];
    var prevLogin = loginTranslations['eng']['login'];
    var prevLogout = loginTranslations['eng']['logout'];

    if ($('.page-header-title').text() === prevHeader) {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(loginTranslations['header']);
      }).slideDown(200);
      $('#usernameLabel').slideUp(200, function() {
        $('#usernameLabel').text(loginTranslations['username']);
      }).slideDown(200);
      $('#username').slideUp(200, function() {
        $('#username').attr('placeholder', loginTranslations['username']);
      }).slideDown(200);
      $('#passwordLabel').slideUp(200, function() {
        $('#passwordLabel').text(loginTranslations['password']);
      }).slideDown(200);
      $('#password').slideUp(200, function() {
        $('#password').attr('placeholder', loginTranslations['password']);
      }).slideDown(200);
      $('#loginForm').slideUp(200, function() {
        $('#loginSubmit').text(loginTranslations['header']);
      }).slideDown(200);
      $('#logoutForm').slideUp(200, function() {
        $('#logoutBtn').text(loginTranslations['logout']);
      }).slideDown(200);
    } else {
      $('.page-header-title').slideUp(200, function() {
        $('.page-header-title').text(prevHeader);
      }).slideDown(200);
      $('#usernameLabel').slideUp(200, function() {
        $('#usernameLabel').text(prevUsernameLabel);
      }).slideDown(200);
      $('#username').slideUp(200, function() {
        $('#username').attr('placeholder', prevUsernamePlaceholder);
      }).slideDown(200);
      $('#passwordLabel').slideUp(200, function() {
        $('#passwordLabel').text(prevPasswordLabel);
      }).slideDown(200);
      $('#password').slideUp(200, function() {
        $('#password').attr('placeholder', prevPasswordPlaceholder);
      }).slideDown(200);
      $('#loginForm').slideUp(200, function() {
        $('#loginSubmit').text(prevLogin);
      }).slideDown(200);
      $('#logoutForm').slideUp(200, function() {
        $('#logoutBtn').text(prevLogout);
      }).slideDown(200);
    }
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

  $('#menuTranslateBtn').click(function() {
    if (window.location.href.includes("lang=jp")) {
      window.location = './menu?lang=en';
    } else {
      window.location = './menu?lang=jp';
    }
  });

});
