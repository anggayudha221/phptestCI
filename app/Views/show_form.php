<html>
<head>
<title>Encryption In CodeIgniter</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="show_form">
<h2>Encryption In CodeIgniter</h2>
<?php
echo form_open('encryption_tutorial/key_encoder');
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_label('Enter your Message');
$data = array(
'name' => 'key',
'placeholder' => 'Please Enter a Message'
);
echo form_input($data);
echo form_submit('submit', 'Encode');
echo form_close();
if (isset($decrypt_value) && $decrypt_value != NULL) {
echo form_fieldset('Decrypted Message', "class='result_decode'");
echo "<b>" . $decrypt_value . "</b>";
echo form_fieldset_close();
}
?>
</div>
</div>
<?php
if (isset($encrypt_value) && $encrypt_value != NULL) {
echo form_fieldset('Encrypted Message', "class='result_encode'");
echo "<b>" . $encrypt_value . "</b>";
echo form_fieldset_close();
echo "<div class='decode_form'>";
echo form_open('encryption_tutorial/key_decoder');
echo form_label('Decode Encrypted Message');
$data = array(
'name' => 'encrypt_key',
'value' => $encrypt_value
);
echo form_input($data);
echo form_submit('submit', 'Decode');
echo form_close();
echo "</div>";
}
?>