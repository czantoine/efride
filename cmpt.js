var jsonSource = "https://spreadsheets.google.com/feeds/list/1pQmFTmqI8pVC_y3G16rd9f-ISqJhbGzVhefautSlr2A/1/public/values?alt=json"
  
$.getJSON( jsonSource, function() {
  $("<p>json request successful</p>").prependTo("#container");
})

.done(function(data) { 
  if (data.feed.entry.length = 1) {
    $.each( data.feed.entry, function( i, item ) {
      var $som = item.gsx$som.$t;
      

      $("<center><h3> Nombre de joueurs : " + $som+ 
        "</h3></center>").appendTo("#som");
    });
  } else {
    $("<p>JSON request succeeded but no data returned.</p>").prependTo("#container");
  }
})

.fail(function() {
  $("<p>JSON request fail</p>").prependTo("#container");
})

.error(function() {
  $("<p>JSON request error</p>").prependTo("#container");
});