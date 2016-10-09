<table class='table'>
	<thead>
		<tr>
			<th>Recipe Name</th>
			<th>Description</th>
			<th>Ingredients ( In Stock / Required )</th>
			<th>Can Produce?</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($recipes as $recipe) { ?>
		<tr>
		<?php
			echo "<th>" . $recipe['code'] . "</th>";
			echo "<td>" . $recipe['description'] . "</td>";
			echo "<td>";
			echo "<ul>";
			foreach ($recipe['ingredients'] as $ingredient) {
				echo "<li>" . $ingredient['ingredient'] . " ( " . $ingredient['amt_in_stock'] . " / " . $ingredient['amount'] . " )</li>";
			}
			echo "</ul>";
			echo "</td>";

			$can_produce = ($recipe['can_produce'] ? "Yes" : "No");
			echo "<td>$can_produce</td>";
			echo "<td><button type='button' class='btn btn-primary'>" . $recipe['prod_link'] . "</button></td>";
		 ?>

		</tr>
		<?php } ?>
	</tbody>
</table>
