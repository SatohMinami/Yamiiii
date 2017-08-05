<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript">
      $(document).ready(function(){
      $("#key_search").keyup(function(){
        key= $("#key_search").val();
            $.ajax({
                url:"xuly_ajax.php?key="+key,
                success: function(result){
                    $("#div1").html(result);
                }

            })
        });
      });

    </script>
</head>
<body>
<form action="product.php" method="GET">
                            <input type="text" name="search" id="key_search" value="" placeholder="Search products...">
                            <input type="submit" name="Search">
                        </form>

<div id="div1" style="border:1px solid red">
                    </div>

</body>
</html>
