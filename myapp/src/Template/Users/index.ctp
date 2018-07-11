<h1>Users</h1>
<table>
<?php foreach($users as $user): ?>
<tr>
<td>
<?php $user->first_name?>
</td>
<td>
<?php $user->last_name?>
</td>
<td>
<?php $article->father?>
</td>
</tr>
<?php endforeach; ?>
</table>