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
        var output = '<ul class = "seachresults">';
        $.each(items, function(key, val) {
          if (val.name.search(myExp) != -1)  {
            output += '<li>';
            output += '<h2>' + val.name + '</h2>';
            output += '<p>' + val.html_url + '</p>';
            output += '</li>';
          }
        });
        output += '</ul>';
        $('#update').html(output);
      });
    }else {
      $('#update').html('');
    }
  }, 500 );
});
