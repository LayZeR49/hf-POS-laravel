<!DOCTYPE html>
<html>
<head>
	<script src="vendor/jquery-1.7.2.min.js"></script>


<select name="product" style="width:650px; "class="chzn-select" required>
<option></option>

		<option value="12">HELLO</option>
		<option value="24">HI</option>
		

</select>

	<link href="vendor/chosen.min.css" rel="stylesheet" media="screen">
        <script src="vendor/chosen.jquery.min.js"></script>

        <script>
        $(function() {
<!--             $(".datepicker").datepicker(); -->
<!--             $(".uniform_on").uniform() -->;
            $(".chzn-select").chosen();
   <!--          $('.textarea').wysihtml5(); -->

        });
        </script>

</body>
</html>