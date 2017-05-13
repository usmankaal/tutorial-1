<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Form Sample</title>
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="mystyle.css" />

<!--[if lt IE 8]>
	<style>
		legend {
			display: block;
			padding: 0;
			padding-top: 30px;
			font-weight: bold;
			font-size: 1.25em;
			color: #FFD98D;
			margin: 0 auto;
		}
	</style>
<![endif]-->


</head>
<body>
<form id="myform" name="theform" class="group" action="#" method="POST">
	<fieldset id="login" title="Login Info">
		<legend>Login Info</legend>
		<ol>
			<li>
				<label for="myname">Name *</label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" required />
			</li>
			<li>
				<label for="myemail">Email *</label>
				<input type="email" name="myemail" id="myemail" required autocomplete="off" />
			</li>
			<li>
				<label for="mypassword">Password</label>
				<input type="password" name="mypassword" id="mypassword" />
			</li>
		</ol>
	</fieldset>
	<fieldset id="other" class="hidden" title="Other Info">
		<legend>Other</legend>
		<ol>
			<li>
				<label for="myurl">Website *</label>
				<input type="url" name="myurl" id="myurl" required />
			</li>
			<li>
				<label for="mytelephone">Telephone</label>
				<input type="tel" name="mytelephone" id="mytelephone" />
			</li>
			<li class="singleline">
				<input type="checkbox" id="subscribeitem" name="subscribe" CHECKED value="yes" />
				<label for="subscribeitem">Subscribe to our mailing list?</label>
			</li>
			<li>
				<label for="reference">How did you hear about us?</label>
				<select name="reference" id="reference">
					<option>Choose...</option>
					<option value="friend">A friend</option>
					<option value="facebook">Facebook</option>
					<option value="twitter">Twitter</option>
				</select>
			</li>
		</ol>
	</fieldset>
	<fieldset id="comments"  class="hidden" title="Comments">
	<legend>Comments</legend>
		<ol>
			<li>
				<div class="grouphead">Request Type</div>
				<ol>
					<li>
						<input type="radio" name="requesttype" value="question" id="questionitem" />
						<label for="questionitem">Question</label>
					</li>
					<li>
						<input type="radio" name="requesttype" value="comment" id="commentitem" />
						<label for="commentitem">Comment</label>
					</li>
				</ol>
			</li>
			<li>
				<label for="mycomments">Comment</label>
				<textarea name="mycomments" id="mycomments"></textarea>
			</li>
		</ol>
		<button type="submit">send</button>
	</fieldset>
</form>
<script src="myscript.js"></script>

</body>
</html>