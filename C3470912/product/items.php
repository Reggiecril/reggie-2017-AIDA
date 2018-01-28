	<section id="content">
	<form method="post" action="index.php?content=queryItems">
		<fieldset class="fieldset-width2" style="font-size: 20px;border: 2px double #000;border-radius: 15px;padding: 10px;margin: 0 auto;">
			<legend>Search</legend>
			<p>
				<label>Order By:</label>
				<input type="radio"
				name="radOrder"
				id= "name"
				value="name"<?php
				if (isset($_SESSION['order'])){
					if($_SESSION['order']=='name'){
						echo 'checked';
					}
					}
				
				?>
				/>
				<label for="name">A-Z</label>

				<input type="radio"
				name="radOrder" 
				id="price"
				value="price"<?php
				if (isset($_SESSION['order'])){
					if ($_SESSION['order']=='price'){
						echo 'checked';
					}
				}
				?>
				/>
				<label for="price">Price</label>
			</p>
			<p>
				<label>Type:</label>
				<select name="typeList">
					<option value="All"<?php
					if (isset($_SESSION['type'])){
						if ($_SESSION['type']=='ALL'){
						echo 'selected';
					}
				}
				?>>All</option>
				<option value="Bell’s" <?php
				if (isset($_SESSION['type'])){
						if ($_SESSION['type']=='Bell’s'){
						echo 'selected';
					}
				}
				?>>Bell’s</option>
				<option value="Ballantine’s" <?php
				if (isset($_SESSION['type'])){
						if ($_SESSION['type']=='Ballantine’s'){
						echo 'selected';
					}
				}
				?>>Ballantine’s</option>
				<option value="Jack Daniel’s" <?php
				if (isset($_SESSION['type'])){
						if ($_SESSION['type']=='Jack Daniel’s'){
						echo 'selected';
					}
				}
				?>>Jack Daniel’s</option>
				J
				</select>
			</p>
			<label class="align" for="search">Search: </label>
			<input type="text" name="search" value="<?php
			if (isset($_SESSION['search'])) {
				echo $_SESSION['search'];
			}
			?>"/>
			</fieldset>

			<input type="submit" value="Submit" name="searchSubmit"/>
			<input type="reset" value="Clear"/>
		</form>
		<p>
			<?php
			include './product/displayItems.php';
			?>
		</p>
		</section>