var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

$('#search').keyup(function() {
  delay(function(){
    var searchField = $('#search').val();
    var myExp = new RegExp(searchField, "i");
    if (searchField.length > 1) {
      $.getJSON('https://api.github.com/search/repositories?q=' + searchField, function(data) {
        var items = data.items;
        var output = '<hr><div class = "row">';
        $.each(items, function(key, val) {
          if (val.name.search(myExp) != -1)  {
            output += '<div class="col-xs-6 col-sm-4 col-md-3">';
            output += '<div class="repoBtn">';
            output += '<div class="thumbnail">';
            output += '<img src="' + val.owner.avatar_url + '" alt="...">';
            output += '<div class="caption">';
            output += '<h4>' + val.name + '</h4>';
            output += '<p style="overflow:hidden">' + val.html_url + '</p>';
            
            output += '<form action="new_repository" method="post">';
            output += '<input type="hidden" name="name" value="' + val.name + '">';
            output += '<input type="hidden" name="url" value="' + val.html_url + '">';
            output += '<input type="hidden" name="icon" value="' + val.owner.avatar_url + '">';
            output += '<button type="submit" class="btn btn-default">Add this Repository</button>';
            output += '</form>';
            
            output += '</div>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
          }
        });
        output += '</div>';
        $('#update').html(output);
      });
    }else {
      $('#update').html('');
    }
  }, 500 );
});

function myFunction(group_id) {
	$('#selectGroupForm').append('<input type="hidden" name="selectedGroup " value="' + $(group_id) + '" />');
    $('#selectGroupForm').submit();
}


	