<?php
//subject list

class checkboxlist{
	public function sublist()
	{
		echo'
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Hindi"><span>Hindi</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Maths"><span>Maths</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Social Science"><span>Social Science</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="General Science"><span>General Science</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Sanscrit"><span>Sanscrit</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Computer Science"><span>Computer Science</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Physics"><span>Physics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Chemistry"><span>Chemistry</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Higher Math"><span>Higher Math</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Biology"><span>Biology</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Sociology"><span>Sociology</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Economics"><span>Economics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Accounts"><span>Accounts</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="History"><span>History</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Finance"><span>Finance</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Statistics"><span>Statistics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Civics"><span>Civics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Music"><span>Music</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Art"><span>Art</span></div>


		';
	}
	//sub list unchecked box
	public function sublistcombo()
	{
		echo'
			<select name="sublistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="Hindi">Hindi</option>
			  <option value="English">English</option>
			  <option value="Maths">Maths</option>
			  <option value="Social Science">Social Science</option>
			  <option value="General Science">General Science</option>
			  <option value="Sanscrit">Sanscrit</option>
			  <option value="Computer Science">Computer Science</option>
			  <option value="Physics">Physics</option>
			  <option value="Chemistry">Chemistry</option>
			  <option value="Higher Math">Higher Math</option>
			  <option value="Biology">Biology</option>
			  <option value="Sociology">Sociology</option>
			  <option value="Economics">Economics</option>
			  <option value="Accounts">Accounts</option>
			  <option value="History">History</option>
			  <option value="Finance">Finance</option>
			  <option value="Statistics">Statistics</option>
			  <option value="Civics">Civics</option>
			  <option value="Music">Music</option>
			</select>


		';
	}

	public function classlist()
	{
		echo '
			<div class="divp35"><input type="checkbox" name="class_list[]" value="One-Three"><span>One-Three</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Four-Six"><span>Four-Six</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Seven-Eight"><span>Seven-Eight</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Nine"><span>Nine</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Ten"><span>Ten</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="Eleven-Twelve"><span>Eleven-Twelve</span></div>
			<div class="divp35"><input type="checkbox" name="class_list[]" value="College/University"><span>College/University</span></div>
		';
	}

	public function classlistcombo()
	{
		echo '
			<select style="width: 180px;" name="classlistcombo">
					
			  <option value="None">None</option>
			  <option value="One-Three">One-Three</option>
			  <option value="Four-Six">Four-Six</option>
			  <option value="Seven-Eight">Seven-Eight</option>
			  <option value="Nine">Nine</option>
			  <option value="Ten">Ten</option>
			  <option value="Eleven-Twelve">Eleven-Twelve</option>
			  <option value="College/University">College/University</option>
			</select>
		';
	}

	public function mediumlist()
	{
		echo '
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="Hindi"><span>Hindi</span></div>
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input type="checkbox" name="medium_list[]" value="Other"><span>Other</span></div>
		';
	}

	public function mediumlistcombo()
	{
		echo '
			<select name="mediumlistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="Hindi">Hindi</option>
			  <option value="English">English</option>
			  <option value="Other">Other</option>
			</select>
		';
	}
}

?>