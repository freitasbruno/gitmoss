$( document ).ready(function() {
	
	var rep = $('#repository_name').text();
	var repURL = $('#repository_url').text();
	var repAPI = repURL.replace("github.com", "api.github.com/repos");
  
	$.getJSON(repAPI, function(data) {
		  var output = '<hr><div class = "row">';
		  output += '<h3>' + data.description + '</h3>';
	      output += '<h4>Number of forks: ' + data.forks_count + '</h4>';
	      output += '<h4>Number of watchers: ' + data.watchers + '</h4>';
	      output += '</div>';
	      
	      $('#repository_content').html(output);
	});
	
});