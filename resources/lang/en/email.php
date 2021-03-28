<?php

return [
    'id'               => 'ID',
    'sort'             => 'Sort',
    'status'           => 'Status',
    'smtp_host'        => 'SMTP host',
    'smtp_user'        => 'SMTP user',
    'smtp_password'    => 'SMTP password',
    'smtp_security'    => 'SMTP security',
    'smtp_port'        => 'SMTP port',
    'smtp_load_config' => 'SMTP load config',
    'smtp_load_config_file' => 'Load file config',
    'smtp_load_config_database' => 'Load from database',
    'msg_goodbye'   => 'Regards,',
    'admin'            => [
        'title'          => 'Config Email',
        'create_success' => 'Create new item success!',
        'edit_success'   => 'Edit item success!',
        'list'           => 'Config email list',
        'field'          => 'Field',
        'value'          => 'Value',
        'config_mode'    => 'Config mode',
        'config_smtp'    => 'Config SMTP',
        'status'         => 'Status',
        'action'         => 'Action',
        'edit'           => 'Edit',
        'export'         => 'Export',
        'delete'         => 'Delete',
        'refresh'        => 'Refresh',
        'result_item'    => 'Showing <b>:item_from</b> to <b>:item_to</b> of <b>:item_total</b> items</b>',
        'sort'           => 'Sort',
        'search'         => 'Search',
        'add_new'        => 'Add new',
        'add_new_title'  => 'Add config',
        'add_new_des'    => 'Create a new config',
        'smtp_mode'      => 'Use SMTP',
        'smtp_port'      => 'Port SMTP',
        'smtp_security'  => 'Security SMTP',
        'smtp_password'  => 'Password SMTP',
        'smtp_user'      => 'Tài khoản SMTP',
        'smtp_host'      => 'Server SMTP',
        'help_note'      => '<span class="text-red">(*)</span>: Emails will not be sent directly, but through a queue. You need to set up "artisan schedule: run" first, details <a href="https://s-cart.org/docs/'.config('s-cart.version').'/email.html">HERE</a>',


    ],
    'email_action'     => [
        'manager'                  => 'Email action manager',
        'type'                     => 'Action type',
        'mode'                     => 'Action mode',
        'sort'                     => 'Action sort',
        'order_success_to_admin'   => 'Send order success to admin',
        'order_success_to_cutomer' => 'Send order success to customer',
        'order_success_to_cutomer_pdf' => 'Send order success to customer with pdf invoice',
        'forgot_password'          => 'Send email forgot',
        'customer_verify'          => 'Customer verification',
        'welcome_customer'         => 'Send email welcome',
        'contact_to_customer'      => 'Send email contact to customer',
        'contact_to_admin'         => 'Send email contact to admin',
        'email_action_mode'        => 'ON/OFF send mail',
        'email_action_queue'       => 'Use send mail queue <span class="text-red">(*)</span>',
        'email_action_smtp_mode'   => 'SMTP mode',
        'config_smtp'              => 'Config SMTP',
        'other'                    => 'Other',
        'customer_verify'          => 'Send account verification email',
    ],
    'forgot_password'  => [
        'title'            => 'Hello!',
        'reset_button'     => 'Reset password',
        'reason_sendmail'  => 'You are receiving this email because we received a password reset request for your account.',
        'note_sendmail'    => 'This password reset link will expire in :count minutes.<br><br>If you did not request a password reset, no further action is required.',
        'note_access_link' => 'If you’re having trouble clicking the ":reset_button" button, copy and paste the URL below into your web browser :url',
    ],
    'verification_content' => [
        'title'            => 'Hello!',
        'button'           => 'Verify Email Address',
        'reason_sendmail'  => 'Please click the button below to verify your email address.',
        'note_sendmail'    => 'This password reset link will expire in :count minutes.<br><br>If you did not create an account, no further action is required.',
        'note_access_link' => 'If you’re having trouble clicking the ":button" button, copy and paste the URL below into your web browser :url',
    ],
    'welcome_customer' => [
        'title' => 'Welcome!',
    ],
    'order'            => [
        'title_1'      => 'Hi! Website :website has new order!',
        'order_id'     => 'Order ID',
        'toname'       => 'Customer name',
        'address'      => 'Address',
        'phone'        => 'Phone',
        'note'         => 'Note',
        'order_detail' => 'Order detail',
        'sort'         => 'No.',
        'sku'          => 'SKU',
        'price'        => 'Price',
        'name'         => 'Name',
        'qty'          => 'Qty',
        'total'        => 'Total',
        'sub_total'    => 'Sub total',
        'shipping_fee' => 'Shipping fee',
        'discount'     => 'Discount',
        'order_total'  => 'Order total',
    ],

];
