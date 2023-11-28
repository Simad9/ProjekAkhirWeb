<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipe Form</title>
</head>
<body>
  <!-- Recipe Submission Form -->
  <section class="food_form_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Submit a Recipe</h2>
      </div>

      <form action="menu.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="recipe_image">Upload Recipe Image:</label>
          <input
            type="file"
            id="recipe_image"
            name="recipe_image"
            required
          />
        </div>

        <div class="form-group">
          <label for="recipe_name">Recipe Name:</label>
          <input
            type="text"
            id="recipe_name"
            name="recipe_name"
            class="form-control"
            placeholder="Enter Recipe Name"
            required
          />
        </div>

        <div class="form-group">
          <label for="recipe_description">Recipe Description:</label>
          <textarea
            id="recipe_description"
            name="recipe_description"
            class="form-control"
            rows="4"
            placeholder="Enter Recipe Description"
            required
          ></textarea>
        </div>

        <div class="btn-box">
          <button type="submit" class="btn1">Submit Recipe</button>
        </div>
      </form>
    </div>
  </section>
</body>
</html>
