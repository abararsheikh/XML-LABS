$(document).ready(function() {
  
 var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    // Here i m adding ?jsoncallback=?


 $('form').submit(function (evt) {
    var $submitButton = $('#submit');  //store submit value in one varibale
    var $searchField = $('#search');   //store search value in one varibale
    evt.preventDefault();  //When you submit the form ,don't do default behaviour ,let me handel the event


    var tag = $searchField.val();

    $('#photos').html('');   // I am going to display data in table formate which is defined in index.html
    $.getJSON(flickerAPI, {
        tags: tag,
        format: "json"
      },
    function(data){
      var result = '';
      var count = 0;

      if (data.items.length > 0) {

        $.each(data.items,function(i,photo) {


            result += count % 5 ? '<td>' : '<tr><td>';         // This part is for to display in table ..You can use CSS insted of this code
            result += '<a href="' + photo.link + '" >';
            result += '<img src="' + photo.media.m + '"></a>';
            result += (count - 4) % 5 ? '</td>' : '</td></tr>';
            count++;
        }); // end each
      } else {
          result = "<p>No photos found that match: " + tag + ".</p>";
      }


      $('#photos').html( result );

    }); // end getJSON

  }); // end click

}); // end ready