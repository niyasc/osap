
<script>
/*var source = [ { value: "www.foo.com",
                 label: "Spencer Kline"
               },
               { value: "www.example.com",
                 label: "James Bond"
               }
             ];*/
var source = function(request, response) 
{
   $.getJSON(
         'searchname.php',
         { searchterm: request.term },
         function(data, status, xhr) 
         {
            response(data);
         }
   );
}

$(document).ready(function() {
    $("input#search").autocomplete({
        source: source,
        select: function( event, ui ) { 
            window.location.href = ui.item.value;
        }
    });
});

</script>
</head>
<body>
<div>
Search for a propritary Software to get Alternative(Javascript should be enabled)
</div>
<div class="ui-widget">
<input id="search" class='form-control'>
</div>
<div>
	<h4>OR</h4>
</div>
<div>
	<h4>
		Browse Categories
	</h4>
</div>

