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
'value' => set_value('first_name',''),
);

/*
$js = 'onClick="some_function()"';

echo form_input('username', 'johndoe', $js);
 * */
$req = 'required="required"';
echo form_label('First Name','first_name') . ': ';
echo form_input($first_name,'',$req) . '<br>';

$last_name = array(
'name' => 'last_name',
'id' => 'last_name',
'value' => set_value('last_name',''),

);
echo form_label('Last Name','last_name') . ': ';
echo form_input($last_name) . '<br>';

$email = array(
'name' => 'email',
'id' => 'email',
'value' => set_value('email',''),
);
echo form_label('Email','email') . ': ';
echo form_input($email) . '<br>';

$address = array(
'name' => 'address',
'id' => 'address',
'value' => set_value('address',''),

);
echo form_label('Address','address') . ': ';
echo form_input($address) . '<br>';

$state_code = array(
'name' => 'state_code',
'id' => 'state_code',
'value' => set_value('state_code',''),

);
echo form_label('State Code','state_code') . ': ';
echo form_input($state_code) . '<br>';

$zip_postal = array(
'name' => 'zip_postal',
'id' => 'zip_postal',
'value' => set_value('zip_postal',''),

);
echo form_label('Zip Code','zip_postal') . ': ';
echo form_input($zip_postal) . '<br>';

$username = array(
'name' => 'username',
'id' => 'username',
'value' => set_value('username',''),

);
echo form_label('User Name','username') . ': ';
echo form_input($username) . '<br>';

$password = array(
'name' => 'password',
'id' => 'password',
'value' => set_value('password',''),

);
echo form_label('Password','password') . ': ';
echo form_password($password) . '<br>';

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
'name' => 'num_tours',
'id' => 'num_tours2',
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
