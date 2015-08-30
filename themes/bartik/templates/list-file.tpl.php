<div id="list_file_wrapper">
	<table>
		<tr>
			<td>No</td>
			<td>FID</td>
			<td>Filename</td>
			<td>URI</td>
			<td>Mime Type</td>
		</tr>
	<?php 
		$i = 1;
		foreach($contents as $konten)
		{
			$content = (array) $konten;

			$fid = $content['field_fid']['und']['0']['value'];
			$filename = $content['field_filename']['und']['0']['value'];
			$uri = $content['field_uri']['und']['0']['value'];
			$filemime = $content['field_filemime']['und']['0']['value'];

			echo "<tr>
					<td>".$i."</td>
					<td>".$fid."</td>
					<td>".$filename."</td>
					<td>".$uri."</td>
					<td>".$filemime."</td>
				  </tr>";
			$i++;
		}
	?>
	</table>
</div>