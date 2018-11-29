<?php

function r_recipe_options_mb($post) {
  $recipe_data = get_post_meta($post->ID,'recipe_data',true);
  ?>
  <div class="form-group">
    <label>Ingredients</label>
    <input type="text" class="form-control" name="r_inputIngredients" value="<?php echo $recipe_data['ingredients'];?>">
  </div>
  <div class="form-group">
    <label>Cooking Time Required</label>
    <input type="text" class="form-control" name="r_inputTime" value="<?php echo $recipe_data['time'];?>">
  </div>
  <div class="form-group">
    <label>Utensils</label>
    <input type="text" class="form-control" name="r_inputUtensils" value="<?php echo $recipe_data['utensils'];?>" >
  </div>
  <div class="form-group">
    <label>Cooking Experience</label>
    <select class="form-control" name="r_inputLevel" value="<?php echo $recipe_data['level'];?>">
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Expert">Expert</option>
    </select>
  </div>
  <div class="form-group">
    <label>Meal Type</label>
    <input type="text" class="form-control" name="r_inputMealType" value="<?php echo $recipe_data['meal_type'];?>">
    </div>
<?php
}