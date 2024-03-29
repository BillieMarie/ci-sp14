<?php
//views/mailing_list/add_mailing_list.php
//add form to add an item to the table

echo '<p></p>';
echo validation_errors();

?>
<h1>Add to mailing list</h1>
<?=form_open('mailing_list/insert');?>
<?php
$first_name = array(
'name' => 'first_name',
'id' => 'first_name',
);
echo form_label('First Name','first_name') . ': ';
echo form_input($first_name) . '<br>';

$last_name = array(
'name' => 'last_name',
'id' => 'last_name',
);
echo form_label('Last Name','last_name') . ': ';
echo form_input($last_name) . '<br>';

$email = array(
'name' => 'email',
'id' => 'email',
);
echo form_label('Email','email') . ': ';
echo form_input($email) . '<br>';

$address = array(
'name' => 'address',
'id' => 'address',
);
echo form_label('Address','address') . ': ';
echo form_input($address) . '<br>';

$state_code = array(
'name' => 'state_code',
'id' => 'state_code',
);
echo form_label('State Code','state_code') . ': ';
echo form_input($state_code) . '<br>';

$zip_postal = array(
'name' => 'zip_postal',
'id' => 'zip_code',
);
echo form_label('Zip Code','zip_postal') . ': ';
echo form_input($zip_postal) . '<br>';

$username = array(
'name' => 'username',
'id' => 'username',
);
echo form_label('User Name','username') . ': ';
echo form_input($username) . '<br>';

$password = array(
'name' => 'password',
'id' => 'password',
);
echo form_label('Password','password') . ': ';
echo form_input($password) . '<br>';

$bio = array(
'name' => 'bio',
'id' => 'bio',
);
echo form_label('Bio','bio') . ': ';
echo form_textarea($bio) . '<br>';

$interests = array(
'backpack_cal' => 'Backpack California',
'cycle_cal' => 'Cycle California',
'nature_watch' => 'Nature Watch',
);
/*
$interests = array(
'name' => 'interests',
'id' => 'interests',
);*/

echo form_label('Interests','interests') . ': ';
echo form_multiselect('interests',$interests) . '<br>';

$num_tours1 = array(
'name' => 'num_tours',
'id' => 'num_tours1',
'value' => '0',
'checked' => TRUE,
);

$num_tours2 = array(
'name' => 'num_tours2',
'id' => 'num_tours',
'value' => '1-3',
);

$num_tours3 = array(
'name' => 'num_tours',
'id' => 'num_tours3',
'value' => '4-6',
);

echo 'Indicate the number of tours: ';
echo form_label('None','num_tours') . ':  ';
echo form_radio($num_tours1) . '  ';

echo form_label('1-3','num_tours') . ':  ';
echo form_radio($num_tours2) . '  ';

echo form_label('4-6','num_tours') . ':  ';
echo form_radio($num_tours3) . '<br>';

?>
<?=form_submit('submit','Add to mailing list');?>

<?=form_close();?>
