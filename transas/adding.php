<?php include '../header.php'; ?>

<h2>Add</h2>

<form action="index.php" method="POST">
<input type="hidden" name="add" value="true" />

<dt><label for="category">Select Category</label></dt>
<dd><select name="category">
<option value=""></option>
<option value="Bills">Bills</option>
<option value="Dining Out">Dining Out</option>
<option value="Groceries">Groceries</option>
<option value="Miscellaneous">Miscellaneous</option>
</select></dd>

<dt><label for="nombre">Name:</label></dt>
<dd><input type="text" name="nombre" id="nombre" /></dd>

<dt><label for="amount">Amount:</label></dt>
<dd><input type="number" name="amount" id="amount" step="any" /></dd>

<dd><input type="submit" name="submit" value="Go Broke!" /></dd>
</dl>
</form>

<?php include '../footer.php'; ?>