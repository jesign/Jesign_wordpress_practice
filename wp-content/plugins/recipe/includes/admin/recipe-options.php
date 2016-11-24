<?php 
	function r_recipe_options_mb($post){ 
		$recipe_data 	= 	get_post_meta($post->ID, 'recipe_data', true);
		if(!$recipe_data){
			$recipe_data 	= 	array(
				'ingredients' 	=>	'',
				'time'	 		=> 	'',
				'utensils'	 	=> 	'',
				'level'	 		=> 	'Beginner',
				'meal_type'		=>	''
				);
		}
		?>
		<div class="form-group">
			<label>Ingredients</label>
			<input type="text" value="<?php echo $recipe_data['ingredients']; ?>" class="form-control"	name="r_inputIngredients">
		</div>
		<div class="form-group">
			<label>Cooking Time</label>
			<input type="text" value="<?php echo $recipe_data['time']; ?>" class="form-control"	name="r_inputTime">
		</div>
		<div class="form-group">
			<label>Cooking Utensils</label>
			<input type="text" value="<?php echo $recipe_data['utensils']; ?>" class="form-control"	name="r_inputUtensils">
		</div>
		<div class="form-group">
			<label>Cooking Level</label>
			<select class="form-control" name="r_inputLevel">
				<option value="Beginner">Beginner</option>
				<option value="Intermediate" <?php echo ($recipe_data['level'] == "Intermediate" )? "SELECTED" : ''; ?> >Intermediate</option>
				<option value="Expert" <?php echo ($recipe_data['level'] == "Expert" )? "SELECTED" : ''; ?>>Expert</option>
			</select>
		</div>
		<div class="form-group">
			<label>Meal Type</label>
			<input value="<?php echo $recipe_data['meal_type']; ?>" type="text" class="form-control"	name="r_inputMealType">
		</div>
		<?php
	}


