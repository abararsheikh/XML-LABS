$(document).ready(function() {

    // Handle the search button's click event
    $("#btnSearch").click(function() {
        // Reset the div elements in case a second search is made
        $("#youtube").html("");
        $("#video").html("");

        // prepare the request
        // Build the custom YouTube URL based on the channel and number of videos
        var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q: encodeURIComponent($("#channel").val()).replace(/%20/g, "+"),
            maxResults: 6
        });

        // execute the request
        request.execute(function(response) {
            var results = response.result;
            console.log(results);

            $.each(results.items, function(index, item) {

                // Extract the video id
                var url = item.id.videoId
                // Get the title of the video
                var title = item.snippet.title;
                // Get the first 10 characters of date video was published or: YYYY-MM-DD
                var datepublished = item.snippet.publishedAt.substring(0, 10)
                // Get the channel title
                var author = item.snippet.channelTitle;
                // Create the HTML that links to the video
                var text = 	"<h3><a href='#' title='" + url + "' >" + title + "</a></h3>" +
                    "<p>Published: " + datepublished + " by " + author + "</p><br>";

                // Append string to the div for display
                $("#youtube").append(text);
            });

            $("a").click(function() {
                $("#video").html("");
                // Get the URL for the link that was clicked
                var url = "//www.youtube.com/embed/" + $(this).attr("title");

                var text =
                    " <iframe width='420' height='315' " +
                    " src= '" + url + "?autoplay=1'>" +
                    "</iframe>";
                // Append string to div for display
                $("#video").append(text);
            });
        });



    });
});

function init() {
    gapi.client.setApiKey("AIzaSyBkpDUHze3g3LBSLYv-ljj-zEqzqZo");
    gapi.client.load("youtube", "v3", function() {
        // yt api is ready
        console.log('apiready');
    });
}

