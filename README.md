# PHP-Search
Searches a MYSQL column for string matches and compares to a submitted string based on a user defined  weighted similarity between strings.
<br/>

<h2>Usage</h2>
<p>Create a table in a mysql database.</p>
<p>There is a sample sql file included called tablestructure.sql. It assumes you have a database called db_search and a table called simi_phrases. You can easily edit the file to match your db and table structure before importing. </p>

<p>Basically you need to end up with two columns in your table ph_id and ph_phrases. ph_id should be auto incrementing. ph_phrases is a text column where you can have strings that will be searched against.</p>

<p>Open includes/db_conn.php and edit to match your database settings.</p>

<p>If you used your own table or column names edit includes/class.search.php on line 89 to match your table and column names. </p>

<p>You should be all setup. open index.php locally using something like XAMPP or on your web host.</p>

<p>Search is based in similarity, the slider let's you adjust how similar the match should be.</p>