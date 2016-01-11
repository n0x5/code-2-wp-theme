<?php
if ( !function_exists( 'get_home_path' ) )
	require_once( dirname(__FILE__) . '/../../../wp-admin/includes/file.php' );
$firstname = explode(" ",the_title('','',false));
$firstname1 = $firstname[0]._.$firstname[1]._.$post->ID;
$lastname = $firstname[1];
$title = $firstname1;
$zipname = "$title.zip";

if (file_exists($zipname)) {
  // nothing 

} else {


	$images =& get_children( array (
		'post_parent' => $post->ID,
		'post_type' => 'attachment',
		'post_mime_type' => 'image'
	));
	if ( empty($images) ) {
		// no attachments here
		                   
  } else {

foreach ( $images as $attachment_id => $attachment ) { 
  $zip = new ZipArchive;
  $zip->open($zipname, ZipArchive::CREATE);
  $entry = get_attached_file( $attachment_id );
  if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
     $zip->addFile($entry,basename($entry));
  }

  $zip->close();

      }

		}

	}
$path = get_home_path();
chmod("$path/$firstname1.zip", 0755);
echo "<div class=\"zipit\"><a href=\"/$firstname1.zip\">$firstname1.zip</a></div>";
?>
