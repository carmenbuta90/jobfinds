	<div id="search_area" class="col_12 column">
		<form class="horizontal" method="post" action="<?php echo $this->webroot;?>jobs/browse">
			<input name="keywords" id="keywords" type="text" placeholder="Enter keywords...">
			<select name="states" id="state_select">
				<option>Select State</option>
				<option value ='AL'>Alabama</option>
				<option value ='Ak'>Alaska</option>
				<option value ='AZ'>Arizona</option>
				<option value ='AR'>Arkansas</option>
				<option value ='CA'>California</option>
				<option value ='CO'>Colorado</option>
				<option value ='CT'>Connecticut</option>
				<option value ='DE'>Delaware</option>
				<option value ='FL'>Florida</option>
				<option value ='GA'>Georgia</option>
				<option value ='HI'>Hawaii</option>
				<option value ='ID'>Idaho</option>
				<option value ='IL'>Illinois</option>
				<option value ='IN'>Indiana</option>
				<option value ='IA'>Iowa</option>
				<option value ='KS'>Kansas</option>
				<option value ='KY'>Kentucky</option>
				<option value ='LA'>Louisiana</option>
				<option value ='ME'>Maine</option>
				<option value ='MD'>Maryland</option>
				<option value ='MA'>Massachusetts</option>
				<option>Michigan</option>
				<option>Minnesota</option>
				<option>Mississippi</option>
				<option>Missouri</option>
				<option>Montana</option>
				<option>Nebraska</option>
				<option>Nevada</option>
				<option>New Hampshire</option>
				<option>New Jersey</option>
				<option>New Mexico</option>
				<option value ='NY'>New York</option>
				<option>North Carolina</option>
				<option>North Dakota</option>
				<option>Ohio</option>
				<option>Oklahoma</option>
				<option>Oregon</option>
				<option value ='PA'>Pennsylvania</option>
				<option>Rhode Island</option>
				<option>South Carolina</option>
				<option>South Dakota</option>
				<option>Tennessee</option>
				<option value ='TX'>Texas</option>
				<option>Utah</option>
				<option>Vermont</option>
				<option>Virginia</option>
				<option value ='DC'>Washington</option>
				<option>West Virginia</option>
				<option>Wisconsin</option>
				<option>Wyoming</option>
			</select>
			<select id="category_select" name="category">
				<option>Select Category</option>
				<?php foreach($categories as $category):?>
				<option value="<?php echo $category['Category']['id'];?>"><?php echo $category['Category']['name'];?></option>
				<?php endforeach;?>
			</select>
			<button type="submit">Submit</button>
		</form>
	</div>